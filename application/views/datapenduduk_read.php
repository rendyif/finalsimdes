<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Data Penduduk</h2>
        <div class="box">
        <div class="box-body">
        <table class="table">
        <tr><td>Nomer KK</td><td><?php echo $nik; ?></td></tr>
	    <tr><td>Nomer NIK</td><td><?php echo $nik; ?></td></tr>
	    <tr><td>Nama Kepala Keluarga</td><td><?php echo $namakk; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>Tempat Lahir</td><td><?php echo $tempatl; ?></td></tr>
	    <tr><td>Tanggal Lahir</td><td><?php echo $tanggallhr; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('datapenduduk') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>