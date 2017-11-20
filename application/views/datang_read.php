<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Penduduk Datang</h2>
        <div class="box">
        <div class="box-body">
        <table class="table">
	    <tr><td>Nomer NIK</td><td><?php echo $nik; ?></td></tr>
	    <tr><td>Nama Lengkao</td><td><?php echo $namal; ?></td></tr>
	    <tr><td>Tempat Lahir</td><td><?php echo $tempt; ?></td></tr>
	    <tr><td>Tanggal Lahir</td><td><?php echo $tgl; ?></td></tr>
	    <tr><td>Jeni Kelamin</td><td><?php echo $jkl; ?></td></tr>
	    <tr><td>Kewarganegaraan</td><td><?php echo $kwg; ?></td></tr>
	    <tr><td>Pindah Dari</td><td><?php echo $dtg; ?></td></tr>
	    <tr><td>Tempat Tinggal Sekarang</td><td><?php echo $ttlskrg; ?></td></tr>
	    <tr><td>Tanggal Masukan</td><td><?php echo $tgl2; ?></td></tr>
	    <tr><td>Ket</td><td><?php echo $ket; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('datang') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>