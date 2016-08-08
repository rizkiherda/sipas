<legend><?php echo $title;?></legend>
<?php echo $message;?>
<?php echo validation_errors();?>
<form class="form-horizontal" action="" method="post">
     <div class="form-group">
        <label class="col-lg-3 control-label">Nama Lengkap</label>
        <div class="col-lg-5">
            <input type="text" name="nama_lengkap" value="<?php echo $petugas['nama_lengkap'];?>" class="form-control" >
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label">No. HP.</label>
        <div class="col-lg-5">
            <input type="text" name="no" value="<?php echo $petugas['no'];?>" class="form-control" >
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Username</label>
        <div class="col-lg-5">
            <input type="hidden" name="id" value="<?php echo $petugas['id_petugas'];?>">
            <input type="text" name="user" value="<?php echo $petugas['user'];?>" readonly="readonly" class="form-control">
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-lg-3 control-label">Password</label>
        <div class="col-lg-5">
            <input type="password" name="password" class="form-control" placeholder = "Kosongkan Jika Tidak Berubah">
        </div>
    </div>
    
    <div class="form-group well">
        <div class="col-lg-5">
            <button id="simpan" class="btn btn-primary"><i class="glyphicon glyphicon-saved"></i> Simpan</button>
            <a href="<?php echo site_url('dashboard/petugas');?>" class="btn btn-default">Kembali</a>
        </div>
    </div>
</form>