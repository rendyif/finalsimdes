<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Laporan SPPT</h2>
        <div class="box">
        <div class="box-body">
        <table class="table">
	    <tr><td>Nama Pemilik</td><td><?php echo $namapmt; ?></td></tr>
	    <tr><td>Nomer Letter C</td><td><?php echo $nolc; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $amt; ?></td></tr>
	    <tr><td>Nama di SPPT</td><td><?php echo $nmspt; ?></td></tr>
	    <tr><td>Lokasi Tanah</td><td><?php echo $loktnh; ?></td></tr>
	    <tr><td>Nomer SPPT</td><td><?php echo $nosppt; ?></td></tr>
	    <tr><td>Luas Tanah</td><td><?php echo $lstnh; ?></td></tr>
	    <tr><td>Kelas Tanah</td><td><?php echo $klstn; ?></td></tr>
	    <tr><td>Spesifikasi</td><td><?php echo $sprktn; ?></td></tr>
	    <tr><td>Pajak Atau IPEDA</td><td><?php echo $pjkip; ?></td></tr>
	    <tr><td>Sebab Rubah Kepemilikan</td><td><?php echo $sbbrk; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('lapsppt') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>