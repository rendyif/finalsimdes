<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Penduduk Datang <?php echo $button ?></h2>
        <div class="box">
        <div class="box-body">
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="char">Nomer NIK <?php echo form_error('nik') ?></label>
            <input type="text" class="form-control" name="nik" id="nik" placeholder="No NIK" value="<?php echo $nik; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Nama Lengkap <?php echo form_error('namal') ?></label>
            <input type="text" class="form-control" name="namal" id="namal" placeholder="Nama Lengkap" value="<?php echo $namal; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tempat Lahir <?php echo form_error('tempt') ?></label>
            <input type="text" class="form-control" name="tempt" id="tempt" placeholder="Tempat Lahir" value="<?php echo $tempt; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tanggal Lahir <?php echo form_error('tgl') ?></label>
            <input type="text" class="form-control" name="tgl" id="tgl" placeholder="Tanggal Lahir" value="<?php echo $tgl; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Jenis Kelamin <?php echo form_error('jkl') ?></label>
            <input type="text" class="form-control" name="jkl" id="jkl" placeholder="Jenis Kelamin" value="<?php echo $jkl; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kewarganegaraan <?php echo form_error('kwg') ?></label>
            <input type="text" class="form-control" name="kwg" id="kwg" placeholder="Kewarganegaraan" value="<?php echo $kwg; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pindah Dari <?php echo form_error('dtg') ?></label>
            <input type="text" class="form-control" name="dtg" id="dtg" placeholder="Pindah Dari" value="<?php echo $dtg; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tempat Tinggal Sekarang <?php echo form_error('ttlskrg') ?></label>
            <input type="text" class="form-control" name="ttlskrg" id="ttlskrg" placeholder="Tempat Tinggal Sekarang" value="<?php echo $ttlskrg; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tanggal Masukan<?php echo form_error('tgl2') ?></label>
            <input type="text" class="form-control" name="tgl2" id="tgl2" placeholder="Tanggal" value="<?php echo $tgl2; ?>" />
        </div>
	    <div class="form-group">
            <label for="ket">Keterangan <?php echo form_error('ket') ?></label>
            <textarea class="form-control" rows="3" name="ket" id="ket" placeholder="Keterangan"><?php echo $ket; ?></textarea>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('datang') ?>" class="btn btn-default">Cancel</a>
	</form>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>