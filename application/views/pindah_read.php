<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Pindah Read</h2>
        <div class="box">
        <div class="box-body">
        <table class="table">
	    <tr><td>No NIK</td><td><?php echo $nik; ?></td></tr>
	    <tr><td>Nama Lengkap</td><td><?php echo $namap; ?></td></tr>
	    <tr><td>Tempat Lahir</td><td><?php echo $tempp; ?></td></tr>
	    <tr><td>Tanggal Lahir</td><td><?php echo $tglp; ?></td></tr>
	    <tr><td>Jenis Kelamin</td><td><?php echo $jklp; ?></td></tr>
	    <tr><td>Kewarganegaraan</td><td><?php echo $kwgp; ?></td></tr>
	    <tr><td>Asal Dari</td><td><?php echo $asalp; ?></td></tr>
	    <tr><td>Tujuan</td><td><?php echo $tujuanp; ?></td></tr>
	    <tr><td>Tanggal Pindah</td><td><?php echo $tglpp; ?></td></tr>
	    <tr><td>Keterangan</td><td><?php echo $kett; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pindah') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>