<?php
defined('BASEPATH') or exit('No direct script access allowed');

// langkah pertama 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Keuangan extends CI_Controller
{


    // setiap membuat controller harus buat function construct
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_model');
        $this->load->helper('my_helper');
        // kalo blm true maka akan kembali ke page auth
        if ($this->session->userdata('logged_in') != true || $this->session->userdata('role') != 'keuangan') {
            redirect(base_url() . 'auth');
        }
    }

    public function index()
    {
        $this->load->view('keuangan/index');
    }
    public function pembayaran()
    {
        $data['result'] = $this->m_model->getDataPembayaran();
        $this->load->view('keuangan/pembayaran', $data);
    }


    public function tambah_pembayaran()
    {
        $data['siswa'] = $this->m_model->get_data('siswa')->result();
        $this->load->view('keuangan/tambah_pembayaran', $data);
    }

    public function aksi_tambah_pembayaran()
    {
        $data = [
            'id_siswa' => $this->input->post('nama'),
            'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
            'total_pembayaran' => $this->input->post('total_pembayaran'),

        ];
        $this->m_model->tambah_pembayaran('pembayaran', $data);
        redirect(base_url('keuangan/pembayaran'));
    }
    public function update_pembayaran($id)
    {
        $data['pembayaran'] = $this->m_model->get_by_id('pembayaran', 'id', $id)->result();
        $data['siswa'] = $this->m_model->get_data('siswa')->result();
        $this->load->view('keuangan/update_pembayaran', $data);
    }


    public function aksi_ubah_pembayaran()
    {
        $data = array(
            'id_siswa' => $this->input->post('nama'),
            'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
            'total_pembayaran' => $this->input->post('total_pembayaran'),
        );

        $eksekusi = $this->m_model->ubah_data
        ('pembayaran', $data, array('id' => $this->input->post('id')));
        if ($eksekusi) {
            $this->session->set_flashdata('sukses', 'berhasil');
            redirect(base_url('keuangan/pembayaran'));
        } else {
            $this->session->set_flashdata('error', 'gagal..');
            redirect(base_url('keuangan/pembayaran/' . $this->input->post('id')));
        }
    }
    public function hapus_pembayaran($id)
    {
        $this->m_model->delete_pembayaran('pembayaran', 'id', $id);
        redirect(base_url('keuangan/pembayaran'));
    }

    // function untuk export excell
    public function export()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $style_col = [
            'font' => ['bold' => true],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\style\Alignment::HORIZONTAL_CENTER,
                'vertical' => \PhpOffice\PhpSpreadsheet\style\Alignment::VERTICAL_CENTER
            ],
            'borders' => [
                'top' => ['borderstyle' => \PhpOffice\PhpSpreadsheet\style\Border::BORDER_THIN],
                'right' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\style\Border::BORDER_THIN],
                'bottom' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\style\Border::BORDER_THIN],
                'left' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\style\Border::BORDER_THIN]
            ]
        ];

        $style_row = [
            'alignment' => [
                'vertical' => \PhpOffice\PhpSpreadsheet\style\Alignment::VERTICAL_CENTER
            ],
            'borders' => [
                'top' => ['borderstyle' => \PhpOffice\PhpSpreadsheet\style\Border::BORDER_THIN],
                'right' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\style\Border::BORDER_THIN],
                'bottom' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\style\Border::BORDER_THIN],
                'left' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\style\Border::BORDER_THIN]
            ]
        ];

        // set judul
        $sheet->setCellValue('A1', "DATA PEMBAYARAN");
        $sheet->mergeCells('A1:E1');
        $sheet->getStyle('A1')->getFont()->setBold(true);
        // set thead
        $sheet->setCellValue('A3', "ID");
        $sheet->setCellValue('B3', "JENIS PEMBAYARAN");
        $sheet->setCellValue('C3', "TOTAL PEMBAYARAN");
        $sheet->setCellValue('D3', "SISWA");
        $sheet->setCellValue('E3', "KELAS");

        // mengaplikasikan style thead
        $sheet->getStyle('A3')->applyFromArray($style_col);
        $sheet->getStyle('B3')->applyFromArray($style_col);
        $sheet->getStyle('C3')->applyFromArray($style_col);
        $sheet->getStyle('D3')->applyFromArray($style_col);
        $sheet->getStyle('E3')->applyFromArray($style_col);

        // get dari database
        $data_pembayaran = $this->m_model->getDataPembayaran();

        $no = 1;
        $numrow = 4;
        foreach ($data_pembayaran as $data) {
            $sheet->setCellValue('A' . $numrow, $data->id);
            $sheet->setCellValue('B' . $numrow, $data->jenis_pembayaran);
            $sheet->setCellValue('C' . $numrow, $data->total_pembayaran);
            $sheet->setCellValue('D' . $numrow, $data->nama_siswa);
            $sheet->setCellValue('E' . $numrow, $data->tingkat_kelas . ' ' . $data->jurusan_kelas);

            $sheet->getStyle('A' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('B' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('C' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('D' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('E' . $numrow)->applyFromArray($style_row);

            $no++;
            $numrow++;
        }

        // set panjang column
        $sheet->getColumnDimension('A')->setWidth(5);
        $sheet->getColumnDimension('B')->setWidth(25);
        $sheet->getColumnDimension('C')->setWidth(25);
        $sheet->getColumnDimension('D')->setWidth(20);
        $sheet->getColumnDimension('E')->setWidth(30);

        $sheet->getDefaultRowDimension()->setRowHeight(-1);

        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);

        // set nama file saat di export
        $sheet->setTitle("LAPORAN DATA PEMBAYARAN");
        header('Content-Type: aplication/vnd.openxmlformants-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="PEMBAYARAN.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');

    }

    // Function untuk import file ke excell
    public function import()
    {
        if (isset($_FILES["file"]["name"])) {
            $path = $_FILES["file"]["tmp_name"];
            $object = PhpOffice\PhpSpreadsheet\IOFactory::load($path);
            foreach ($object->getWorksheetIterator() as $worksheet) {
                //    untuk mencari tahu seberapa banyak data yg ada
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();

                //  $row = 2; artine data dimulai dari baris ke2
                for ($row = 2; $row <= $highestRow; $row++) {
                    $jenis_pembayaran = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $total_pembayaran = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $nisn = $worksheet->getCellByColumnAndRow(5, $row)->getValue();

                    $get_id_by_nisn = $this->m_model->get_by_nisn($nisn);
                    echo $get_id_by_nisn;


                    $data = array(
                        'jenis_pembayaran' => $jenis_pembayaran,
                        'total_pembayaran' => $total_pembayaran,
                        'id_siswa' => $get_id_by_nisn
                    );
                    // untuk menambahkan ke database
                    $this->m_model->tambah_data('pembayaran', $data);
                }
            }
            redirect(base_url('keuangan/pembayaran'));
        } else {
            echo 'Invalid file';
        }
    }


    public function export_pembayaran()
    {
        // untuk mengambil seluruh data di tabel pembayaran
        $data['data_pembayaran'] = $this->m_model->get_data('pembayaran')->result();
        $data['nama'] = 'pembayaran';

        // berfungsi untuk mengecek / mengambil url ke 3
        //  arti kondisi :  jika uri segment ketiga nya pdf maka akan menjalankan codingan di bawahnya
        if ($this->uri->segment(3) == "pdf") {
            $this->load->library('pdf');
            $this->pdf->load_view('keuangan/export_data_pembayaran', $data);
            $this->pdf->render();
            $this->pdf->stream("data_pembayaran.pdf", array("Attachment" => false));
        } else {
            $this->load->view('keuangan/download_data_pembayaran', $data);
        }
    }
}