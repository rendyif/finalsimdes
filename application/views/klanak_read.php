<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Kelahiran Anak</h2>
        <div class="box">
        <div class="box-body">
        <table class="table">
	    <tr><td>Nama Anak</td><td><?php echo $nanak; ?></td></tr>
	    <tr><td>Tanggal Lahir Anak</td><td><?php echo $wktla; ?></td></tr>
	    <tr><td>Waktu atau Jam Lahir</td><td><?php echo $tmel; ?></td></tr>
	    <tr><td>Jenis Kelamin</td><td><?php echo $jklh; ?></td></tr>
	    <tr><td>Berat Badan Anak</td><td><?php echo $bbdn; ?></td></tr>
	    <tr><td>Panjang Badan Anak</td><td><?php echo $pjbdn; ?></td></tr>
	    <tr><td>Anak Ke</td><td><?php echo $ankke; ?></td></tr>
	    <tr><td>Tempat Kelahiran</td><td><?php echo $tmptkll; ?></td></tr>
	    <tr><td>Nama Suami</td><td><?php echo $namasu; ?></td></tr>
	    <tr><td>Agama</td><td><?php echo $agma; ?></td></tr>
	    <tr><td>Umur</td><td><?php echo $umro; ?></td></tr>
	    <tr><td>Pekerjaan Suami</td><td><?php echo $pkjan; ?></td></tr>
	    <tr><td>Nama Istri</td><td><?php echo $naist; ?></td></tr>
	    <tr><td>Agma Istri</td><td><?php echo $agmas; ?></td></tr>
	    <tr><td>Umur Istri</td><td><?php echo $umris; ?></td></tr>
	    <tr><td>Pekerjaan Istri</td><td><?php echo $pkjanis; ?></td></tr>
	    <tr><td>Blok</td><td><?php echo $blok; ?></td></tr>
	    <tr><td>Rt</td><td><?php echo $rtort; ?></td></tr>
	    <tr><td>Rw</td><td><?php echo $rworts; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('klanak') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>