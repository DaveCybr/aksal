                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Transaksi</h1>

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
                            <a href="<?= base_url; ?>/Transaksi/create">
                                <button class="m-0 font-weight-bold btn btn-primary">Tambah Transaksi</button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id Transaksi</th>
                                            <th>Id User</th>
                                            <th>Id Customer</th>
                                            <th>Id Barang</th>
                                            <th>Jumlah</th>
											<th>Bayar</th>
											<th>Total</th>
											<th>Tanggal Transaksi</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id Transaksi</th>
                                            <th>Id User</th>
                                            <th>Id Customer</th>
                                            <th>Id Barang</th>
                                            <th>Jumlah</th>
											<th>Bayar</th>
											<th>Total</th>
											<th>Tanggal Transaksi</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach ($data['transaksi'] as $row) :?>
                                        <tr>
                                            <td><?= $row['id_transaksi'];?></td>
                                            <td><?= $row['id_user'];?></td>
                                            <td><?= $row['id_customer'];?></td>
                                            <td><?= $row['id_barang'];?></td>
                                            <td><?= $row['jumlah'];?></td>
											<td><?= $row['bayar'];?></td>
											<td><?= $row['total'];?></td>
											<td><?= $row['tanggal_transaksi	'];?></td>
                                            <td>
                                                <a href="<?= base_url;?>/Transaksi/edit/<?= $row['id_transaksi']?>" class="btn btn-info btn-sm"><i class="fas fa-fw fa-pen"></i></a> 
                                                <a href="<?= base_url;?>/Transaksi/hapus/<?= $row['id_transaksi']?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?');"><i class="fas fa-fw fa-trash"></i></a>
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

           