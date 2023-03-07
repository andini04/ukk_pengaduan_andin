<?=$this->extend('layouts/admin')?>
<?=$this->section('title')?>
Data Pengaduan
<?=$this->endSection()?>
<?=$this->section('content')?>

        <div class="col">
            <div class="card border-dark">
                <div class="card-header bg-dark">
                    <?php
                        if(session()->get('level')=='masyarakat'){
                    ?>
                        <a href="#" data-toggle="modal" data-target="#modalPengaduan" class="btn btn-outline-light">Tambah Data Pengaduan</a>
                    <?php } ?>                    
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="pengaduan">
                        <tr>
                            <th>No</th>
                            <th>Tanggal Pengaduan</th>
                            <th>Isi Laporan</th>
                            <th>Foto</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                        <?php
                            $no=0;
                            foreach($pengaduan as $row){
                                $no++;
                        ?>
                            <tr>
                                <td><?=$no?></td>
                                <td><?=$row['tgl_pengaduan']?></td>
                                <td><?=$row['isi_laporan']?></td>
                                <td><?=$row['foto']?></td>
                                <td><?=$row['status']?></td>
                                <td>
                                    <?php
                                    if(session('level')=='masyarakat'){
                                        if($row['status']=='0'){
                                            ?>
                                            <a onclick="return confirm('yakin mau hapus??');" class="btn btn-danger" href="/pengaduan/hapus/<?=$row['id_pengaduan']?>"><i class="fas fa-trash"></i></a>
                                            <?php
                                        }else{
                                            //ini tempat tombol lihat tanggapan
                                        }
                                    }
                                    if(!empty(session('level')) && session('level') != 'masyarakat'){
                                        if($row['status'] == '0'){
                                            ?>
                                            <a class="btn btn-outline-dark" href="#" data-toggle="modal" data-target="#modalTanggapan" data-pengaduan="<?=$row['id_pengaduan']?>">Tanggapi</a>
                                            <?php
                                        }else{
                                            ?>
                                            <a class="btn btn-dark" href="#" data-toggle="modal" data-target="#modalTanggapan" data-pengaduan="<?=$row['id_pengaduan']?>" data-aduan="selesai">Lihat Tanggapan</a>
                                            <?php
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php
                        }
                            ?>
                    </table>
                </div>
            </div>
       
        <div class="modal fade" id="modalPengaduan" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Tambah Pengaduan</h5>
                    </div>
                    <form action="/tambahpengaduan" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Isi Laporan</label>
                            <textarea class="form-control" name="isi_laporan" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalTanggapan" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <form action="/tanggapi" method="post">
                            <input type="text" name="id_pengaduan" id="id_pengaduan">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Tanggapan</label>
                            <textarea name="tanggapan" id="tanggapans" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="btstanggapan" type="submit" class="btn btn-success">Simpan</button>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        
<?= $this->endSection()?>
<?= $this->section('script')?>
    <script>
        $(document).ready(function(){
            $('#modalTanggapan').on('show.bs.modal',function(e){
                var button = $(e.relatedTarget);
                var data = button.data('pengaduan');
                var aduan = button.data('aduan');
                $('#id_pengaduan').val(data);
                if (aduan=="selesai")
                {
                    var query= "id_pengaduan"+data;
                    //alert(query);

                    $('#btstanggapan').hide();
                    $.ajax({
                        url:"/getTanggapan",
                        type:"GET",
                        data:query,
                        dataType:"json",
                        success:function(data)
                        {
                            //alert(data);
                            $('#tanggapans').val(data[0].tanggapan);
                        },
                        error:function(error)
                        {
                            console.log(error);
                        } 
                    });

                    $('#tanggapans').val();

                }else{
                    $('#btstanggapan').show();
                    $('#tanggapans').val("");
                }
            });
        })
    </script>

<?= $this->endSection()?>

















