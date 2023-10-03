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

        .pembungkus-pembayaran {
            margin: 50px;
            margin-left: 20rem;
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
        <div class="">

            <?php include('sidebar.php'); ?>


            <div class="app-main__outer pembungkus-pembayaran">

                <div style="display:flex;">
                    <a href="<?php echo base_url('keuangan/tambah_pembayaran/') ?>" type="button" id="PopoverCustomT-1"
                        class="btn btn-primary btn-sm "
                        style="width:5rem ; margin-top: 15px; margin-left:30px;">Tambah</a>
                    <a href="<?php echo base_url('keuangan/export/') ?>" type="button" id="PopoverCustomT-1"
                        class="btn btn-primary btn-sm "
                        style="width:5rem ; margin-top: 15px; margin-left:7px;">Export</a>
                    <button id="exampleModal" type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop"
                        style="width:5rem ; margin-top: 15px; margin-left:7px;">Modal</button>

                </div>
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
                                    <?php echo convRupiah($row->total_pembayaran) ?>
                                </td>


                                <td data-cell="Aksi" class="text-center aksi">
                                    <a href="<?php echo base_url('keuangan/update_pembayaran/') . $row->id ?>" type="button"
                                        id="PopoverCustomT-1" class="btn btn-success btn-sm edit">Edit</a>
                                    <button onclick="hapus(<?php echo $row->id ?>)" type="button" id="PopoverCustomT-1"
                                        class="btn btn-danger btn-sm hapus">Hapus</button>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <form action="<?= base_url('keuangan/import') ?>" method="post" enctype="multipart/form-data">
                    <input type="file" class="form-control" id="file" name="file">
                    <input type="submit" name="import" value="Import" class="form-control" id="file" name="file">
                </form>

                <!-- Modal -->
                <div style="position: absolute; " class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal Import</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3 col-6">
                                    <label for="file" class="form-label">Foto</label>
                                    <input type="file" class="form-control" id="file" name="file">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <script>
                function hapus(id) {
                    var yes = confirm('Yakin di hapus?');
                    if (yes == true) {
                        window.location.href = "<?php echo base_url('keuangan/hapus_pembayaran/') ?>" + id;
                    }
                }
            </script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                crossorigin="anonymous"></script>
</body>

</html>