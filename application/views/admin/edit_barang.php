<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit Data Barang</h3>

    <?php foreach($barang as $brg) : ?>
        <form method="post" action="<?php echo base_url().'admin/data_barang/update' ?>">
            <div class="for-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
            </div>
            <div class="for-group">
                <label>Keterangan</label>
                <input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
                <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
            </div>
            <div class="for-group">
                <label>Kategori Barang</label>
                <input type="text" name="kategori_brg" class="form-control" value="<?php echo $brg->kategori_brg ?>">
            </div>
            <div class="for-group">
                <label>Harga Barang</label>
                <input type="text" name="harga_brg" class="form-control" value="<?php echo $brg->harga_brg ?>">
            </div>
            <div class="for-group">
                <label>Stok Barang</label>
                <input type="text" name="stok_brg" class="form-control" value="<?php echo $brg->stok_brg ?>">
            </div>
            <button type="submit" class="brn btn-primary btn-sm mt-3">Update</button>
        </form>
    <?php endforeach; ?>
</div>