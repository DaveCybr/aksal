                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Produk</h1>

                    <div class="row">
                        <div class="col-sm-12">
                        <?php
                            Flasher::Message();
                        ?>
                        </div>
                    </div>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="<?= base_url; ?>/Barang/create">
                                <button class="m-0 font-weight-bold btn btn-primary">Tambah Produk</button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Produk</th>
                                            <th>Nama Produk</th>
                                            <th>Harga Produk</th>
                                            <th>Supplier</th>
                                            <th>Stok</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php foreach ($data['barang'] as $row) :?>
                                        <tr>
                                            <td><?= $row['id_barang'];?></td>
                                            <td><?= $row['nama_barang'];?></td>
                                            <td><?= $row['harga_barang'];?></td>
                                            <td><?= $row['id_supplier'];?></td>
                                            <td><?= $row['stok'];?></td>
                                            <td>
                                                <a href="<?= base_url;?>/Barang/edit/<?= $row['id_barang']?>" class="btn btn-info btn-sm"><i class="fas fa-fw fa-pen"></i></a> 
                                                <a href="<?= base_url;?>/Barang/hapus/<?= $row['id_barang']?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?');"><i class="fas fa-fw fa-trash"></i></a>
                                            </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           