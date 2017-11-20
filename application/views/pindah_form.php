<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Pindah <?php echo $button ?></h2>
        <div class="box">
        <div class="box-body">
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="char">Nomer NIK <?php echo form_error('nik') ?></label>
            <input type="text" class="form-control" name="nik" id="nik" placeholder="Nomer NIK" value="<?php echo $nik; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Lengkap <?php echo form_error('namap') ?></label>
            <input type="text" class="form-control" name="namap" id="namap" placeholder="Namap" value="<?php echo $namap; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tempat Lahir <?php echo form_error('tempp') ?></label>
            <input type="text" class="form-control" name="tempp" id="tempp" placeholder="Tempat Lahir" value="<?php echo $tempp; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tanggal Lahir <?php echo form_error('tglp') ?></label>
            <input type="text" class="form-control" name="tglp" id="tglp" placeholder="Tanggal Lahir" value="<?php echo $tglp; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Jenis Kelamin <?php echo form_error('jklp') ?></label>
            <input type="text" class="form-control" name="jklp" id="jklp" placeholder="Jenis Kelamin" value="<?php echo $jklp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kewarganegaraan <?php echo form_error('kwgp') ?></label>
            <input type="text" class="form-control" name="kwgp" id="kwgp" placeholder="Kwgp" value="<?php echo $kwgp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Asal Dari <?php echo form_error('asalp') ?></label>
            <input type="text" class="form-control" name="asalp" id="asalp" placeholder="Asal Dari" value="<?php echo $asalp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tujuan <?php echo form_error('tujuanp') ?></label>
            <input type="text" class="form-control" name="tujuanp" id="tujuanp" placeholder="Tujuan Pindah" value="<?php echo $tujuanp; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tanggal Pindah <?php echo form_error('tglpp') ?></label>
            <input type="text" class="form-control" name="tglpp" id="tglpp" placeholder="Tanggal Pindah" value="<?php echo $tglpp; ?>" />
        </div>
	    <div class="form-group">
            <label for="kett">Keterangan <?php echo form_error('kett') ?></label>
            <textarea class="form-control" rows="3" name="kett" id="kett" placeholder="Keterangan"><?php echo $kett; ?></textarea>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pindah') ?>" class="btn btn-default">Cancel</a>
	</form>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>