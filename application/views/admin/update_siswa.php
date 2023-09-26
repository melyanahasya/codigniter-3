<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeigniter-3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">

    <style>
        .hapus {
            padding: 2px 10px 2px 10px;
            color: white;
            font-size: 15px;
        }

        .edit {
            padding: 2px 10px 2px 10px;
            margin-right: 10px;
            color: white;
            font-size: 15px;
        }

        .create {
            margin-top: 15px;
            margin-left: 15px;
            margin-bottom: 15px;
        }

        .table {
            /* margin: 3rem 2rem 6rem ;
            margin-right: 40em; */
            margin-top: 2rem;
            margin-left: 2rem;
        }

        @media (max-width: 600px) {

            .edit {
                margin-left: 4.5em;
                color: white;
                font-size: 16px;
                width: 3.5em;

            }

            .hapus {
                width: 4.5em;
                padding: 2px 10px 2px 10px;
                font-size: 16px;

                position: relative;
            }

            tbody {
                text-align: left;
            }

            .option-select {
                font-size: 12px;
            }

            .td {
                padding-right: none;
                display: flex;
                justify-content: left;
            }

            .responsive-3 {
                width: 100%;
            }

            th {
                display: none;
            }

            td {
                display: grid;
                gap: 0.5rem;
                grid-template-columns: 15ch auto;
                padding: 0.75em 1rem;
            }

            td:first-child {
                padding-top: 2rem;
            }

            td::before {
                content: attr(data-cell) "  : ";
                font-weight: bold;
            }
        }
    </style>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <?php include('navbar.php'); ?>
        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>

        </div>
        <div class="app-main">

            <?php include('sidebar.php'); ?>


            <div class="app-main__outer">
                <?php foreach ($siswa as $data_siswa): ?>

                    <form action="<?php echo base_url('admin/aksi_ubah_siswa') ?>" style="margin:25px" method="post"
                        class="row">
                        <input name="id_siswa" type="hidden" value="<?php echo $data_siswa->id_siswa ?>">
                        <div class="mb-3 col-6">
                            <label for="nama" class="form-label bold">Nama Siswa</label>
                            <input value="<?php echo $data_siswa->nama_siswa ?>" type="text" class="form-control" id="nama"
                                name="nama" aria-describedby="nama">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="nisn" class="form-label">Nisn</label>
                            <input value="<?php echo $data_siswa->nisn ?>" type="text" class="form-control" id="nisn"
                                name="nisn">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="gender" class="form-label">Gender</label>
                            <select name="gender" class="form-select" aria-label="Default select example">
                                <option selected <?php echo $data_siswa->gender ?>>
                                    <?php echo $data_siswa->gender ?>
                                </option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                            </select>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select id="kelas" name="kelas" class="form-select" aria-label="Default select example">
                                <option selected value="<?php echo $data_siswa->id_kelas ?>">
                                <?php echo tampil_full_kelas_byid($data_siswa->id_kelas) ?>
                                </option>
                                <?php foreach ($kelas as $row): ?>
                                    <option value="<?php echo $row->id ?>">
                                        <?php echo $row->tingkat_kelas . ' ' . $row->jurusan_kelas ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <button name="submit" type="submit" style="width:60px" class="btn btn-sm btn-success"
                            name="submit">Submit</button>
                    </form>
                <?php endforeach ?>
            </div>

</body>

</html>