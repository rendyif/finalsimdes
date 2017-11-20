<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Kkdanktp Read</h2>
        <div class="box">
        <div class="box-body">
        <table class="table">
	    <tr><td>Nama Pemohon</td><td><?php echo $namak; ?></td></tr>
	    <tr><td>Jenis KK atau KTP</td><td><?php echo $jkktp; ?></td></tr>
	    <tr><td>Tanggal Buat</td><td><?php echo $tglk; ?></td></tr>
	    <tr><td>No KK atau KTP</td><td><?php echo $nkktp; ?></td></tr>
	    <tr><td>Keterangan</td><td><?php echo $kettp; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('kkdanktp') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>