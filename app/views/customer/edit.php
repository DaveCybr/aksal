    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Pelanggan</h1>
        
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?= base_url; ?>/Customer/update" method="POST">
                    <div class="mb-3">
                        <label class="form-label">ID Pelanggan</label>
                        <input type="text" class="form-control" name="id_customer" value="<?= $data['customer']['id_customer']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Pelanggan</label>
                        <input type="text" class="form-control" name="nama_customer" value="<?= $data['customer']['nama_customer']?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>
        </div>

    </div>
