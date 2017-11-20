<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Laporan SPPT<?php echo $button ?></h2>
        <div class="box">
        <div class="box-body">
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Pemilik <?php echo form_error('namapmt') ?></label>
            <input type="text" class="form-control" name="namapmt" id="namapmt" placeholder="Nama Pemilik" value="<?php echo $namapmt; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Nomer Letter C <?php echo form_error('nolc') ?></label>
            <input type="text" class="form-control" name="nolc" id="nolc" placeholder="Nomer Letter C" value="<?php echo $nolc; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('amt') ?></label>
            <input type="text" class="form-control" name="amt" id="amt" placeholder="Alamat" value="<?php echo $amt; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama di SPPT <?php echo form_error('nmspt') ?></label>
            <input type="text" class="form-control" name="nmspt" id="nmspt" placeholder="Nama Di SPPT" value="<?php echo $nmspt; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Lokasi Tanah <?php echo form_error('loktnh') ?></label>
            <input type="text" class="form-control" name="loktnh" id="loktnh" placeholder="Lokasi Tanah" value="<?php echo $loktnh; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Nomer SPPT <?php echo form_error('nosppt') ?></label>
            <input type="text" class="form-control" name="nosppt" id="nosppt" placeholder="Nomer SPPT" value="<?php echo $nosppt; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Luas Tanah <?php echo form_error('lstnh') ?></label>
            <input type="text" class="form-control" name="lstnh" id="lstnh" placeholder="Luas Tanah" value="<?php echo $lstnh; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Kelas Tanah <?php echo form_error('klstn') ?></label>
            <input type="text" class="form-control" name="klstn" id="klstn" placeholder="Kelas Tanah" value="<?php echo $klstn; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Spesifikasi Tanah <?php echo form_error('sprktn') ?></label>
            <input type="text" class="form-control" name="sprktn" id="sprktn" placeholder="Spesifikasi Tanah" value="<?php echo $sprktn; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pajak atau IPEDA <?php echo form_error('pjkip') ?></label>
            <input type="text" class="form-control" name="pjkip" id="pjkip" placeholder="Pajak atau IPEDA" value="<?php echo $pjkip; ?>" />
        </div>
	    <div class="form-group">
            <label for="sbbrk">Sebab Rubah Kepemilikan <?php echo form_error('sbbrk') ?></label>
            <textarea class="form-control" rows="3" name="sbbrk" id="sbbrk" placeholder="Sebab Rubah Kepemilikan"><?php echo $sbbrk; ?></textarea>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('lapsppt') ?>" class="btn btn-default">Cancel</a>
	</form>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>