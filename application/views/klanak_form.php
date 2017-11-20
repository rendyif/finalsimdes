<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Kelahiran Anak <?php echo $button ?></h2>
        <div class="box">
        <div class="box-body">
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Anak <?php echo form_error('nanak') ?></label>
            <input type="text" class="form-control" name="nanak" id="nanak" placeholder="Nama Anak" value="<?php echo $nanak; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tanggal Lahir <?php echo form_error('wktla') ?></label>
            <input type="text" class="form-control" name="wktla" id="wktla" placeholder="Tanggal Kelahiran Anak" value="<?php echo $wktla; ?>" />
        </div>
	    <div class="form-group">
            <label for="time">Waktu atau Jam Kelahiran <?php echo form_error('tmel') ?></label>
            <input type="text" class="form-control" name="tmel" id="tmel" placeholder="Waktu Atau Jam Kelahiran" value="<?php echo $tmel; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Jenis Kelamin <?php echo form_error('jklh') ?></label>
            <input type="text" class="form-control" name="jklh" id="jklh" placeholder="Jenis Kelamin Anak" value="<?php echo $jklh; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Berat Badan Anak <?php echo form_error('bbdn') ?></label>
            <input type="text" class="form-control" name="bbdn" id="bbdn" placeholder="Berat Badan Anak" value="<?php echo $bbdn; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Panjang Badan Anak <?php echo form_error('pjbdn') ?></label>
            <input type="text" class="form-control" name="pjbdn" id="pjbdn" placeholder="Panjang Badan Anak" value="<?php echo $pjbdn; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Anak Ke <?php echo form_error('ankke') ?></label>
            <input type="text" class="form-control" name="ankke" id="ankke" placeholder="Anak Ke" value="<?php echo $ankke; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tempat Kelahiran <?php echo form_error('tmptkll') ?></label>
            <input type="text" class="form-control" name="tmptkll" id="tmptkll" placeholder="Tempat Kelahiran" value="<?php echo $tmptkll; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Suami <?php echo form_error('namasu') ?></label>
            <input type="text" class="form-control" name="namasu" id="namasu" placeholder="Nama Suami" value="<?php echo $namasu; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Agama Suami <?php echo form_error('agma') ?></label>
            <input type="text" class="form-control" name="agma" id="agma" placeholder="Agama Suami" value="<?php echo $agma; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Umur Suami <?php echo form_error('umro') ?></label>
            <input type="text" class="form-control" name="umro" id="umro" placeholder="Umur Suami" value="<?php echo $umro; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Perkerjaan Suami <?php echo form_error('pkjan') ?></label>
            <input type="text" class="form-control" name="pkjan" id="pkjan" placeholder="Perkerjaan Suami" value="<?php echo $pkjan; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Nama Istri <?php echo form_error('naist') ?></label>
            <input type="text" class="form-control" name="naist" id="naist" placeholder="Nama Istri" value="<?php echo $naist; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Agama Istri <?php echo form_error('agmas') ?></label>
            <input type="text" class="form-control" name="agmas" id="agmas" placeholder="Agama Istri" value="<?php echo $agmas; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Umur Istri <?php echo form_error('umris') ?></label>
            <input type="text" class="form-control" name="umris" id="umris" placeholder="Umur Istri" value="<?php echo $umris; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Pekerjaan Istri <?php echo form_error('pkjanis') ?></label>
            <input type="text" class="form-control" name="pkjanis" id="pkjanis" placeholder="Pekerjaan Istri" value="<?php echo $pkjanis; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Blok <?php echo form_error('blok') ?></label>
            <input type="text" class="form-control" name="blok" id="blok" placeholder="Blok" value="<?php echo $blok; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Rt <?php echo form_error('rtort') ?></label>
            <input type="text" class="form-control" name="rtort" id="rtort" placeholder="Rt" value="<?php echo $rtort; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Rw <?php echo form_error('rworts') ?></label>
            <input type="text" class="form-control" name="rworts" id="rworts" placeholder="Rw" value="<?php echo $rworts; ?>" />
        </div>
	    <input type="hidden" name="IDA" value="<?php echo $IDA; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('klanak') ?>" class="btn btn-default">Cancel</a>
	</form>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>