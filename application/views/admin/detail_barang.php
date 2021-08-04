<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php foreach($barang as $brg): ?>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Nama Produk</td>
                            <td><strong><?php echo $brg->nama_brg ?></strong></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><strong><?php echo $brg->keterangan ?></strong></td>
                        </tr>
                        <tr>
                            <td>Kategori Barang</td>
                            <td><strong><?php echo $brg->kategori_brg ?></strong></td>
                        </tr>
                        <tr>
                            <td>Stok Barang</td>
                            <td><strong><?php echo $brg->stok_brg ?></strong></td>
                        </tr>
                        <tr>
                            <td>Harga Barang</td>
                            <td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga_brg, 0,',','.') ?></div></strong></td>
                        </tr>
                    </table>
                    <?php echo anchor('admin/data_barang/edit/' .$brg->id_brg, '<div class="btn btn-primary btn-sm">Edit</div>') ?>
                    <?php echo anchor('admin/dashboard_admin/index/','<div class="btn btn-sm btn-danger">Kembali</div>') ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>