<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url(); ?>/images/user.png" class="img-circle" alt="Foto Profil">
            </div>
        <div class="pull-left into">
            <p>ID Programming</p>
            <a href=" <?= site_url('#'); ?>">
            <i class="fa fa-circle text-success">
                Online
            </i>
        </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li class="<?= ($halaman == "dashboard") ? 'active' : ''; ?>">
                <a href="<?= site_url("dashboard"); ?>">
                    <i class="fa fa-dashboard">
                        <span>Dashboard</span>
                    </i>
            </li>

            <li class="<?= ($halaman == "kategori") ? 'active' : ''; ?>">
                <a href="<?= site_url("kategori"); ?>">
                    <i class="fa fa-cubes">
                        <span>Kategori</span>
                    </i>
            </li>

            <li class="<?= ($halaman == "produk") ? 'active' : ''; ?>">
                <a href="<?= site_url("produk"); ?>">
                    <i class="fa fa-cube">
                        <span>Produk</span>
                    </i>
            </li>

            <li class="<?= ($halaman == "pelanggan") ? 'active' : ''; ?>">
                <a href="<?= site_url("pelanggan"); ?>">
                    <i class="fa fa-user">
                        <span>Pelanggan</span>
                    </i>
            </li>

            <li class="<?= ($halaman == "pemesanan") ? 'active' : ''; ?>">
                <a href="<?= site_url("pemesanan"); ?>">
                    <i class="fa fa-exchange">
                        <span>Pemesanan</span>
                    </i>
            </li>

            <li class="<?= ($halaman == "laporan") ? 'active' : ''; ?>">
                <a href="<?= site_url("laporan"); ?>">
                    <i class="fa fa-file">
                        <span>Laporan</span>
                    </i>
            </li>
        </ul>
    </section>
</aside>