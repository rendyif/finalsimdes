<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Data Penduduk <?php echo $button ?></h2>
        <div class="box">
        <div class="box-body">
        <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="char">Nomer KK <?php echo form_error('kk') ?></label>
            <input type="text" class="form-control" name="kk" id="kk" placeholder="Nomer Kartu Keluarga" value="<?php echo $kk; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Nomer NIK <?php echo form_error('nik') ?></label>
            <input type="text" class="form-control" name="nik" id="nik" placeholder="No NIK" value="<?php echo $nik; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Kepala Keluarga <?php echo form_error('namakk') ?></label>
            <input type="text" class="form-control" name="namakk" id="namakk" placeholder="Nama Kepala Keluarga" value="<?php echo $namakk; ?>" />
        </div>
	    <div class="form-group">
            <label for="text">Alamat <?php echo form_error('alamat') ?></label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat Anda" value="<?php echo $alamat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tempat Lahir <?php echo form_error('tempatl') ?></label>
            <input type="text" class="form-control" name="tempatl" id="tempatl" placeholder="Tempat Lahir" value="<?php echo $tempatl; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tanggal Lahir <?php echo form_error('tanggallhr') ?></label>
            <input type="date" class="form-control" name="tanggallhr" id="tanggallhr" placeholder="Tanggal Lahir" value="<?php echo $tanggallhr; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('datapenduduk') ?>" class="btn btn-default">Cancel</a>
	</form>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>