<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Kelahiran Anak</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('klanak/create'), 'Create', 'class="btn btn-warning"'); ?>
		<?php echo anchor(site_url('klanak/excel'), 'Excel', 'class="btn btn-success"'); ?>
		<?php echo anchor(site_url('klanak/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <div class="box">
        <div class="box-body">
        <table class="table table-hover" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Nama Anak</th>
		    <th>Tanggal Lahir</th>
		    <th>Jam</th>
		    <th>JeniS Kelamin</th>
		    <th>Berat</th>
		    <th>Panjang</th>
		    <th>Anak Ke</th>
		    <th>Tempat Kelahiran</th>
		    <th>Nama Suami</th>
		    <th>Agama</th>
		    <th>Umur</th>
		    <th>Pekerjaan</th>
		    <th>Nama Istri</th>
		    <th>Agama</th>
		    <th>Umur</th>
		    <th>Pekerjaan</th>
		    <th>Blok</th>
		    <th>Rtor</th>
		    <th>Rw</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($klanak_data as $klanak)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $klanak->nanak ?></td>
		    <td><?php echo $klanak->wktla ?></td>
		    <td><?php echo $klanak->tmel ?></td>
		    <td><?php echo $klanak->jklh ?></td>
		    <td><?php echo $klanak->bbdn ?></td>
		    <td><?php echo $klanak->pjbdn ?></td>
		    <td><?php echo $klanak->ankke ?></td>
		    <td><?php echo $klanak->tmptkll ?></td>
		    <td><?php echo $klanak->namasu ?></td>
		    <td><?php echo $klanak->agma ?></td>
		    <td><?php echo $klanak->umro ?></td>
		    <td><?php echo $klanak->pkjan ?></td>
		    <td><?php echo $klanak->naist ?></td>
		    <td><?php echo $klanak->agmas ?></td>
		    <td><?php echo $klanak->umris ?></td>
		    <td><?php echo $klanak->pkjanis ?></td>
		    <td><?php echo $klanak->blok ?></td>
		    <td><?php echo $klanak->rtort ?></td>
		    <td><?php echo $klanak->rworts ?></td>
		    <td style="text-align:center" width="100px">
			<?php 
			echo anchor(site_url('klanak/read/'.$klanak->IDA),'<small class="label bg-green"><i class="fa fa-search"></i></small>'); 
			echo ' '; 
			echo anchor(site_url('klanak/update/'.$klanak->IDA),'<small class="label bg-yellow"><i class="fa fa-pencil"></i></small>'); 
			echo ' '; 
			echo anchor(site_url('klanak/delete/'.$klanak->IDA),'<small class="label bg-red"><i class="fa fa-trash-o"></i></small>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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