<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Laporan SPPT</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('lapsppt/create'), 'Create', 'class="btn btn-warning"'); ?>
		<?php echo anchor(site_url('lapsppt/excel'), 'Excel', 'class="btn btn-success"'); ?>
		<?php echo anchor(site_url('lapsppt/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <div class="box">
        <div class="box-body">
        <table class="table table-hover" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Nama</th>
		    <th>No Letter C</th>
		    <th>Alamat</th>
		    <th>Nama SPPT</th>
		    <th>Lokasi</th>
		    <th>No SPPT</th>
		    <th>Luas</th>
		    <th>Kelas</th>
		    <th>Spesifikasi</th>
		    <th>Pajak</th>
		    <th>Sebab</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($lapsppt_data as $lapsppt)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $lapsppt->namapmt ?></td>
		    <td><?php echo $lapsppt->nolc ?></td>
		    <td><?php echo $lapsppt->amt ?></td>
		    <td><?php echo $lapsppt->nmspt ?></td>
		    <td><?php echo $lapsppt->loktnh ?></td>
		    <td><?php echo $lapsppt->nosppt ?></td>
		    <td><?php echo $lapsppt->lstnh ?></td>
		    <td><?php echo $lapsppt->klstn ?></td>
		    <td><?php echo $lapsppt->sprktn ?></td>
		    <td><?php echo $lapsppt->pjkip ?></td>
		    <td><?php echo $lapsppt->sbbrk ?></td>
		    <td style="text-align:center" width="100px">
			<?php 
			echo anchor(site_url('lapsppt/read/'.$lapsppt->id),'<small class="label bg-green"><i class="fa fa-search"></i></small>'); 
			echo ' '; 
			echo anchor(site_url('lapsppt/update/'.$lapsppt->id),'<small class="label bg-yellow"><i class="fa fa-pencil"></i></small>'); 
			echo ' '; 
			echo anchor(site_url('lapsppt/delete/'.$lapsppt->id),'<small class="label bg-red"><i class="fa fa-trash-o"></i></small>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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