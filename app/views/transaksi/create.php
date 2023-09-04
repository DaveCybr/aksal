    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tambah Transaksi</h1>
        
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?= base_url; ?>/Transaksi/simpan" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Id Transaksi</label>
                        <input type="text" class="form-control" name="id_transaksi">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Id User</label>
                        <input type="text" class="form-control" name="id_user">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Id Customer</label>
                        <input type="text" class="form-control" name="id_customer">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Id Barang</label>
                        <input type="text" class="form-control" name="id_barang">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jumlah</label>
                        <input type="number" class="form-control" name="jumlah">
                    </div>
					<div class="mb-3">
                        <label class="form-label">Bayar</label>
                        <input type="number" class="form-control" name="bayar">
                    </div>
					<div class="mb-3">
                        <label class="form-label">Total</label>
                        <input type="number" class="form-control" name="total">
                    </div>
					<div class="mb-3">
                        <label class="form-label">Tanggal Transaksi</label>
                        <input type="number" class="form-control" name="tanggal_transaksi">
                    </div>	
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>

            </div>
        </div>

    </div>
