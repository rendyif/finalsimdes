<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Kematian</h2>
        <div class="box">
        <div class="box-body">
        <table class="table">
	    <tr><td>Nomer KK</td><td><?php echo $nkkm; ?></td></tr>
	    <tr><td>Nomer NIK</td><td><?php echo $nikm; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $namam; ?></td></tr>
	    <tr><td>Jenis Kelamin</td><td><?php echo $jklkm; ?></td></tr>
	    <tr><td>Umur</td><td><?php echo $umurkm; ?></td></tr>
	    <tr><td>Perkerjaan</td><td><?php echo $pkjaan; ?></td></tr>
	    <tr><td>Waktu Kematian</td><td><?php echo $wktum; ?></td></tr>
	    <tr><td>Sebab Kematian</td><td><?php echo $sbbm; ?></td></tr>
	    <tr><td>Tempat Kematian</td><td><?php echo $tmptm; ?></td></tr>
	    <tr><td>Blok</td><td><?php echo $blokm; ?></td></tr>
	    <tr><td>Rt</td><td><?php echo $rtm; ?></td></tr>
	    <tr><td>Rw</td><td><?php echo $rwm; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('kematian') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>