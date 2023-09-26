<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeigniter-3</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <?php foreach ($user as $rows): ?>

        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

            <?php include('navbar.php'); ?>
            <div class="ui-theme-settings">
                <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                    <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
                </button>

            </div>
            <div class="app-main">

                <?php include('sidebar.php'); ?>


                <div class="card w-50 m-auto p-3 ">
                    <h2 class="text-center">Akun</h2>

                    <form enctype="multipart/form-data" action="<?php echo base_url('admin/aksi_ubah_akun') ?>"  style="margin:25px" method="post" class="row">

                        <div class="mb-3 col-6">
                            <label for="email" class="form-label bold">Email</label>
                            <input value="<?php echo $rows->email ?>" type="text" class="form-control" id="email"
                                name="email" aria-describedby="email">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="username" class="form-label">Username</label>
                            <input value="<?php echo $rows->username ?>" type="text" class="form-control" id="username"
                                name="username">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="baru" class="form-label">Password Baru</label>
                            <input type="text" class="form-control" id="baru" name="password_baru">
                        </div>

                        <div class="mb-3 col-6">
                            <label for="konfirmasi" class="form-label">Konfirmasi Password</label>
                            <input type="text" class="form-control" id="konfirmasi" name="konfirmasi_password">
                        </div>

                        <button name="submit" type="submit" style="width:60px" class="btn btn-sm btn-primary"
                            name="submit">Ubah</button>
                    </form>

                </div>
            </div>
        <?php endforeach ?>
</body>

</html>