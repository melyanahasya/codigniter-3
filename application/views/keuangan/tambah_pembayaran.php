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

                <form enctype="multipart/form-data" action="<?php echo base_url('keuangan/aksi_tambah_pembayaran') ?>"
                    method="post" style="margin:25px" method="post" class="row">

                    <div class="mb-3 col-6">
                        <label for="nama" class="form-label">Nama Siswa</label>
                        <select name="nama" class="form-select" aria-label="Default select example">
                            <option selected>pilih siswa</option>
                            <?php foreach ($siswa as $row): ?>
                                <option value="<?php echo $row->id_siswa ?>">
                                    <?php echo $row->nama_siswa ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="jenis-pembayaran" class="form-label">Jenis Pembayaran</label>
                        <select name="jenis_pembayaran" class="form-select" aria-label="Default select example">
                            <option selected>Pilih Jenis Pembayaran</option>
                            <option value="SPP">Pembayaran SPP</option>
                            <option value="UangGedung">Pembayaran Uang Gedung</option>
                            <option value="Seragam">Pembayaran Seragam</option>
                        </select>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="total_pembayaran" class="form-label bold">Total Pembayaran</label>
                        <input type="number" class="form-control" id="total-pembayaran" name="total_pembayaran"
                            aria-describedby="total-pembayaran">
                    </div>

                    <button name="submit" type="submit" style="width:60px" class="btn btn-sm btn-success"
                        name="submit">Submit</button>
                </form>
            </div>

</body>

</html>