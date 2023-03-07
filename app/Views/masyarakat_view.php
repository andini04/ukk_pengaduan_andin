<?= $this->extend('layouts/admin')?>
<?= $this->section('title')?>
Masyarakat
<?= $this->endSection()?>
<?= $this->section('content')?>

        <div class="col">
            <div class="card border-primary">
                <div class="card-header bg-primary">
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="masyarakat">
                        <tr>
                            <td>No</td>
                            <td>Nik</td>
                            <td>Nama</td>
                            <td>Username</td>
                            <td>Password</td>
                            <td>Telp</td>
                            <td>Opsi</td>
                        </tr>
                        <?php
                        $no=0;
                        foreach($masyarakat as $row){
                            $data = $row['nik'].",".$row['nama'].",".$row['username'].",".$row['password'].",".$row['telp'].",".base_url('masyarakat/edit/'.$row['id_masyarakat']);
                            $no++;
                            ?>
                            <tr>
                                <td><?=$no?></td>
                                <td><?=$row['nik']?></td>
                                <td><?=$row['nama']?></td>
                                <td><?=$row['username']?></td>
                                <td><?=$row['password']?></td>
                                <td><?=$row['telp']?></td>
                                <td>
                                    <a href="<?= base_url('masyarakat/delete/'.$row['id_masyarakat'])?>" onclick="return confirm('yakin mau hapus ? ')" class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</a>
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

<?=$this->endSection()?>