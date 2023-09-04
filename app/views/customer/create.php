    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tambah Pelanggan</h1>
        
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?= base_url; ?>/Customer/simpan" method="POST">
                    <div class="mb-3">
                        <label class="form-label">ID Pelanggan</label>
                        <input type="text" class="form-control" name="id_customer">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Pelanggan</label>
                        <input type="text" class="form-control" name="nama_customer">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>

            </div>
        </div>

    </div>
