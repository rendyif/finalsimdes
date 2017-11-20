<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Surat Menyurat</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>

</div>
<tr><td>
	<img src="<?php echo base_url(); ?>assets/file.png" width="50" height="50">
<a href="<?php echo base_url().'index.php/Getdownload/blangkosurat' ?>">Blangko Surat</a></td> <br>

	<img src="<?php echo base_url(); ?>assets/file.png" width="50" height="50"><td><a href="<?php echo base_url().'index.php/Getdownload/suratahliwaris' ?>">Surat Ahli Waris</a></td><br>
		<img src="<?php echo base_url(); ?>assets/file.png" width="50" height="50"><td><a href="<?php echo base_url().'index.php/Getdownload/suratketkelahiran' ?>">Surat Keterangan Kelahiran</a></td>
</tr>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>