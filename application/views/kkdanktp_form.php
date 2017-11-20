<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Pembuatan KK atau KTP <?php echo $button ?></h2>
        <div class="box">
        <div class="box-body">
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Pemohon <?php echo form_error('namak') ?></label>
            <input type="text" class="form-control" name="namak" id="namak" placeholder="Nama Pemohon" value="<?php echo $namak; ?>" />
        </div>
	    <div class="form-group">
            <label for="set">Jenis KK atau KTP <?php echo form_error('jkktp') ?></label>
            <input type="text" class="form-control" name="jkktp" id="jkktp" placeholder="Jenis KK atau KTP" value="<?php echo $jkktp; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tanggal Buat <?php echo form_error('tglk') ?></label>
            <input type="text" class="form-control" name="tglk" id="tglk" placeholder="Tanggal Permohonan Pembuatan" value="<?php echo $tglk; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Nomer NIK atau KK <?php echo form_error('nkktp') ?></label>
            <input type="text" class="form-control" name="nkktp" id="nkktp" placeholder="Nomer NIK atau KK" value="<?php echo $nkktp; ?>" />
        </div>
	    <div class="form-group">
            <label for="kettp">Keterangan <?php echo form_error('kettp') ?></label>
            <textarea class="form-control" rows="3" name="kettp" id="kettp" placeholder="Keterangan"><?php echo $kettp; ?></textarea>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kkdanktp') ?>" class="btn btn-default">Cancel</a>
	</form>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>