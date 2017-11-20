<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Kematian <?php echo $button ?></h2>
        <div class="box">
        <div class="box-body">
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nomer KK <?php echo form_error('nkkm') ?></label>
            <input type="text" class="form-control" name="nkkm" id="nkkm" placeholder="No KK" value="<?php echo $nkkm; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Nomer Nik <?php echo form_error('nikm') ?></label>
            <input type="text" class="form-control" name="nikm" id="nikm" placeholder="No NIK" value="<?php echo $nikm; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Yang Meninggal <?php echo form_error('namam') ?></label>
            <input type="text" class="form-control" name="namam" id="namam" placeholder="Nama Orang Yang meninggal" value="<?php echo $namam; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Jenis Kelamin <?php echo form_error('jklkm') ?></label>
            <input type="text" class="form-control" name="jklkm" id="jklkm" placeholder="Jenis Kelamin Orang Yang Meninggal" value="<?php echo $jklkm; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Umur <?php echo form_error('umurkm') ?></label>
            <input type="text" class="form-control" name="umurkm" id="umurkm" placeholder="Umur Orang Yang Meninggal" value="<?php echo $umurkm; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Perkerjaan <?php echo form_error('pkjaan') ?></label>
            <input type="text" class="form-control" name="pkjaan" id="pkjaan" placeholder="Perkerjaan" value="<?php echo $pkjaan; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Waktu Kematian <?php echo form_error('wktum') ?></label>
            <input type="text" class="form-control" name="wktum" id="wktum" placeholder="Waktu Kematian" value="<?php echo $wktum; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sebab Kematian <?php echo form_error('sbbm') ?></label>
            <input type="text" class="form-control" name="sbbm" id="sbbm" placeholder="Sebab Kematian" value="<?php echo $sbbm; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tempat Kematian <?php echo form_error('tmptm') ?></label>
            <input type="text" class="form-control" name="tmptm" id="tmptm" placeholder="Tempat Kematian" value="<?php echo $tmptm; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Blok <?php echo form_error('blokm') ?></label>
            <input type="text" class="form-control" name="blokm" id="blokm" placeholder="Blok" value="<?php echo $blokm; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Rt <?php echo form_error('rtm') ?></label>
            <input type="text" class="form-control" name="rtm" id="rtm" placeholder="Rt" value="<?php echo $rtm; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Rw<?php echo form_error('rwm') ?></label>
            <input type="text" class="form-control" name="rwm" id="rwm" placeholder="Rw" value="<?php echo $rwm; ?>" />
        </div>
	    <input type="hidden" name="Id" value="<?php echo $Id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kematian') ?>" class="btn btn-default">Cancel</a>
	</form>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>