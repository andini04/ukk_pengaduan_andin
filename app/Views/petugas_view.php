<?= $this->extend('layouts/admin')?>
<?= $this->section('title')?>
Petugas
<?= $this->endSection()?>
<?= $this->section('content')?>

        <div class="col">
            <div class="card border-primary">
                <div class="card-header bg-primary">
                    <a href="#" data-petugas="" class="btn btn-outline-light" data-target="#modalPetugas" data-toggle="modal"><i class="fas fa-fw fa-solid fa-user-plus"></i>Tambah Data Petugas</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="petugas">
                        <tr>
                            <td>No</td>
                            <td>Nama Petugas</td>
                            <td>Username</td>
                            <td>Password</td>
                            <td>Telp</td>
                            <td>Level</td>
                            <td>Opsi</td>
                        </tr>
                        <?php
                        $no=0;
                        foreach($petugas as $row){
                            $data = $row['nama_petugas'].",".$row['username'].",".$row['password'].",".$row['telp'].",".$row['level'].",".base_url('petugas/edit/'.$row['id_petugas']);
                            $no++;
                            ?>
                            <tr>
                                <td><?=$no?></td>
                                <td><?=$row['nama_petugas']?></td>
                                <td><?=$row['username']?></td>
                                <td><?=$row['password']?></td>
                                <td><?=$row['telp']?></td>
                                <td><?=$row['level']?></td>
                                <td>
                                    <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modalPetugas" data-petugas="<?=$data?>"><i class="fas fa-edit"></i>Edit</a>
                                    <a href="<?= base_url('petugas/delete/'.$row['id_petugas'])?>" onclick="return confirm('yakin nih mau hapus wkwk  ? ')" class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    
    <?php if (!empty(session()->getFlashdata("message"))) : ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata("message") ?>
        </div>
    <?php endif ?>

    <div class="modal fade" id="modalPetugas" tabindex="-1" aria-labelledby="modalPetugasLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Data Petugas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="frmPetugas" action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_petugas">Nama Petugas</label>
                        <input type="text" name="nama_petugas" class="form-control" id="nama_petugas">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label for="telp">Telp</label>
                        <input type="text" name="telp" class="form-control" id="telp">
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label>
                        <select name="level" id="level" class="form-control" required>
                            <option value="">== pilih level ==</option>
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                        </select>                                               
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection()?>
<?=$this->Section("script")?>
    <script>
    
    </script>
<?=$this->endSection()?>