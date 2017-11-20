<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Pembuatan KK atau KTP</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('kkdanktp/create'), 'Create', 'class="btn btn-warning"'); ?>
		<?php echo anchor(site_url('kkdanktp/excel'), 'Excel', 'class="btn btn-success"'); ?>
		<?php echo anchor(site_url('kkdanktp/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <div class="box">
        <div class="box-body">
        <table class="table table-hover" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Nama Pemohon</th>
		    <th>Jenis KK atau KTP</th>
		    <th>Tanggal Buat</th>
		    <th>Nomer NIK atau KK</th>
		    <th>Keterangan</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($kkdanktp_data as $kkdanktp)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $kkdanktp->namak ?></td>
		    <td><?php echo $kkdanktp->jkktp ?></td>
		    <td><?php echo $kkdanktp->tglk ?></td>
		    <td><?php echo $kkdanktp->nkktp ?></td>
		    <td><?php echo $kkdanktp->kettp ?></td>
		    <td style="text-align:center" width="100px">
			<?php 
			echo anchor(site_url('kkdanktp/read/'.$kkdanktp->id),'<small class="label bg-green"><i class="fa fa-search"></i></small>'); 
			echo ' '; 
			echo anchor(site_url('kkdanktp/update/'.$kkdanktp->id),'<small class="label bg-yellow"><i class="fa fa-pencil"></i></small>'); 
			echo ' '; 
			echo anchor(site_url('kkdanktp/delete/'.$kkdanktp->id),'<small class="label bg-red"><i class="fa fa-trash-o"></i></small>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        </div>
        </div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>