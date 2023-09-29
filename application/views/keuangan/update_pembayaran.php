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
                <?php foreach ($pembayaran as $data): ?>

                    <form action="<?php echo base_url('keuangan/aksi_ubah_pembayaran') ?>" style="margin:25px" method="post"
                        class="row">
                        <input name="id" type="hidden" value="<?php echo $data->id ?>">
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
                                <option selected value="<?php echo $data->jenis_pembayaran ?>">
                                    <?php echo $data->jenis_pembayaran ?>
                                </option>
                                <option value="Pembayaran SPP">Pembayaran SPP</option>
                                <option value="Pembayaran Uang Gedung">Pembayaran Uang Gedung</option>
                                <option value="Pembayaran Seragam">Pembayaran Seragam</option>
                            </select>
                        </div>

                        <div class="mb-3 col-6">
                            <label for="total_pembayaran" class="form-label bold">Total Pembayaran</label>
                            <input value="<?php echo $data->total_pembayaran ?>" type="number" class="form-control"
                                id="total_pembayaran" name="total_pembayaran" aria-describedby="total_pembayaran">
                        </div>

                        <button name="submit" type="submit" style="width:60px" class="btn btn-sm btn-success"
                            name="submit">Update</button>
                    </form>
                <?php endforeach ?>
            </div>

</body>

</html>