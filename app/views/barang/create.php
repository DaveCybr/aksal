    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tambah Produk</h1>
        
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?= base_url; ?>/Barang/simpan" method="POST">
                    <div class="mb-3">
                        <label class="form-label">ID Produk</label>
                        <input type="text" class="form-control" name="id_barang">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" name="nama_barang">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga Produk</label>
                        <input type="text" class="form-control" name="harga_barang">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Supplier</label>
                        <input type="text" class="form-control" name="id_supplier">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Stok</label>
                        <input type="number" class="form-control" name="stok">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>

            </div>
        </div>

    </div>
