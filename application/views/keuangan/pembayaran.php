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
            margin-top: 2rem;
            
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
                <a href="" type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm "
                    style="width:5rem ; margin-top: 15px; margin-left:30px;">Tambah</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col" class="text-center"> Siswa</th>
                            <th scope="col" class="text-center">Jenis Pembayaran</th>
                            <th scope="col" class="text-center">Total Pembayaran</th>

                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($result as $row):
                            $no++ ?>
                            <tr>

                                <th data-cell="No" class="text-center" scope="row">
                                    <?php echo $no ?>
                                </th>
                                <td data-cell="Kelas" class="text-center">
                                    <?php echo $row->nama_siswa; ?>
                                </td>
                                <td data-cell="Nama Siswa" class="text-center">
                                    <?php echo $row->jenis_pembayaran; ?>
                                </td>
                                <td data-cell="Foto Siswa" class="text-center">
                                    <?php echo $row->total_pembayaran; ?>
                                </td>


                                <td data-cell="Aksi" class="text-center aksi">
                                    <a href="<?php echo base_url('keuangan/update_pembayaran/').$row->id?>" type="button" id="PopoverCustomT-1"
                                        class="btn btn-success btn-sm edit">Edit</a>
                                    <button onclick="hapus(<?php echo $row->id ?>)" type="button" id="PopoverCustomT-1"
                                        class="btn btn-danger btn-sm hapus">Hapus</button>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
            
            <script>
                function hapus(id) {
                    var yes = confirm('Yakin di hapus?');
                    if (yes == true) {
                        window.location.href = "<?php echo base_url('keuangan/hapus_pembayaran/') ?>" + id;
                    }
                }
            </script>
</body>

</html>