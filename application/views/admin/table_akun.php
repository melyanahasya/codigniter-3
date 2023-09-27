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
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col" class="text-center">Email</th>
                            <th scope="col" class="text-center">Username</th>
                            <th scope="col" class="text-center">Role</th>
                            <th scope="col" class="text-center">Foto</th>
                            <!-- <th scope="col" class="text-center">Aksi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($user as $row):
                            $no++ ?>
                            <tr>

                                <th data-cell="No" class="text-center" scope="row">
                                    <?php echo $no ?>
                                </th>

                                <td data-cell="Email" class="text-center">
                                    <?php echo $row->email; ?>
                                </td>
                                <td data-cell="Username" class="text-center">
                                    <?php echo $row->username; ?>
                                </td>
                                <td data-cell="Role" class="text-center">
                                    <?php echo $row->role; ?>
                                </td>
                                <td data-cell="Gender" class="text-center">
                                    <img src="<?php echo base_url('images/admin/' . $row->foto) ?>" width="50" alt="">
                                </td>

                                <!-- <td data-cell="Aksi" class="text-center aksi">
                                    <a href="<?php echo base_url('admin/akun/').$row->id?>" type="button" id="PopoverCustomT-1"
                                        class="btn btn-success btn-sm edit">Edit</a>
                                   
                                </td> -->

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>


</body>

</html>