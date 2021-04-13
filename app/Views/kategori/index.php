<script>
    var urlList = "<?= site_url('kategori/ajaxList') ; ?>";
    var urlSave = "<?= site_url('kategori/ajaxSave') ; ?>";
    var urlEdit = "<?= site_url('kategori/ajaxEdit/') ; ?>";
    var urlUpdate = "<?= site_url('kategori/ajaxUpdate/') ; ?>";
    var urlDelete = "<?= site_url('kategori/ajaxDelete/') ; ?>";
    var urlStatus = "<?= site_url('kategori/ajaxStatus/') ; ?>";

</script>

<script src="<?= base_url() ; ?>/ajax/ajaxKategori.js">
</script>

<section class="content-header">
    <h1 <?= $title; ?>>
        <ol class="breadcrumb">
            <li class="active">
                <a href="<?= site_url('dashboard'); ?>">
                    <i class="fa fa-dashboard">
                    </i>
                </a>
            </li>
            <li class="active">
                <a href="#">
                    <i class="fa fa-cubes">
                        <?= $title; ?>
                    </i>
                </a>
            </li>
        </ol>
    </h1>
</section>

<section class="content">
    <div class="box box-primary">
        <div class="box-header">
            <div class="row">
                <div class="col-md-12">
                    <a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Tambah Data" onclick="show()">
                        <i class="fa fa-plus"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Refresh Data" onclick="reload_table()">
                        <i class="fa fa-refresh"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-striped table-hover" id="mytable">
                <thead>
                    <th class="text-align: center; width: 5%;">No</th>
                    <th class="text-align: center;">Nama Kategori</th>
                    <th class="text-align: center;">Status</th>
                    <th class="text-align: center; width: 5%;">Aksi</th>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?= $this -> include('kategori/form'); ?>