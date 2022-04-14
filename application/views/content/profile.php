<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-headig text-uppercase">Profile</h2>
                <h3 class="section-sbheaading text-muted">Selamat Datang Di Papoy Hotel</h3>
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td class="text-start" width="15%"> Email </td>
                            <td>:</td>
                            <td class="text-start"><?= $user['email']?></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%"> Nama Lengkap </td>
                            <td>:</td>
                            <td class="text-start"><?= $user['nama_lengkap']?></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%"> No HP </td>
                            <td>:</td>
                            <td class="text-start"><?= $user['no_hp']?></td>
                        </tr>
                    </tbody>
                </table>
                Klik <a href="<?= base_url('index.php/profile/update_profile')?>"> Disini </a> Untuk update profile anda <br>
                Klik <a href="<?= base_url('index.php/profile/ganti_password')?>"> Disini </a> Mengganti password anda <br>
</div>
</div>
</div>
