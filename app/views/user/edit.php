    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit User</h1>
        
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?= base_url; ?>/User/update" method="POST">
                    <div class="mb-3">
                        <label class="form-label">ID User</label>
                        <input type="text" class="form-control" name="id_user" value="<?= $data['user']['id_user']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="<?= $data['user']['username']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="text" class="form-control" name="password" value="<?= $data['user']['password']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Level</label>
                        <input type="text" class="form-control" name="level" value="<?= $data['user']['level']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No hp</label>
                        <input type="number" class="form-control" name="no_hp" value="<?= $data['user']['no_hp']?>">
                    </div>          
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>
        </div>

    </div>
