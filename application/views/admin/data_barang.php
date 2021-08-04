<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i>Tambah Barang</button>

    <table class="table table-bordered">
        <tr align="center">
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3">AKSI</th>
        </tr>

        
        <?php $no = 1; foreach($barang as $brg) : ?>
            <tr>
                <td align="center"><?php echo $no++ ?></td>
                <td><?php echo $brg->nama_brg ?></td>
                <td><?php echo $brg->keterangan ?></td>
                <td align="center"><?php echo $brg->kategori_brg ?></td>
                <td align="center">Rp. <?php echo number_format($brg->harga_brg, 0,',','.') ?></td>
                <td align="center"><?php echo $brg->stok_brg ?></td>
                <td><?php echo anchor('admin/dashboard_admin/detail/' .$brg->id_brg,'<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?></td>
                <td><?php echo anchor('admin/data_barang/edit/' .$brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
                <td><?php echo anchor('admin/data_barang/delete/' .$brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Produk Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url().'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_brg" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kategori Barang</label>
                        <select class="form-control" name="kategori_brg">
                            <option>Fantasi</option>
                            <option>Science-Fiction</option>
                            <option>Horor</option>
                            <option>Romansa</option>
                            <option>Humor</option>
                            <option>Misteri</option>
                            <option>Petualangan</option>
                            <option>Biografi</option>
                            <option>Ensiklopedia</option>
                            <option>Jurnal</option>
                            <option>Kamus</option>
                            <option>Filsafat</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga Barang</label>
                        <input type="text" name="harga_brg" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Stok Barang</label>
                        <input type="text" name="stok_brg" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gambar Produk</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan Produk</button>
            </div>
            </form>
        </div>
    </div>
</div>