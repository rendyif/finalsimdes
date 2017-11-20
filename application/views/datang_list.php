<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Penduduk Datang</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('datang/create'), 'Create', 'class="btn btn-warning"'); ?>
		<?php echo anchor(site_url('datang/excel'), 'Excel', 'class="btn btn-success"'); ?>
		<?php echo anchor(site_url('datang/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <div class="box">
        <div class="box-body">
        <table class="table table-hover" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Nomer Nik</th>
		    <th>Nama Lengkap</th>
		    <th>Temp Lahir</th>
		    <th>Tanggal Lahir</th>
		    <th>Jenis Kelamin</th>
		    <th>Kewarganegaraan</th>
		    <th>Pindah Dari</th>
		    <th>Tempat Tinggal Sekarang</th>
		    <th>Tanggal Masukan</th>
		    <th>Keterangan</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($datang_data as $datang)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $datang->nik ?></td>
		    <td><?php echo $datang->namal ?></td>
		    <td><?php echo $datang->tempt ?></td>
		    <td><?php echo $datang->tgl ?></td>
		    <td><?php echo $datang->jkl ?></td>
		    <td><?php echo $datang->kwg ?></td>
		    <td><?php echo $datang->dtg ?></td>
		    <td><?php echo $datang->ttlskrg ?></td>
		    <td><?php echo $datang->tgl2 ?></td>
		    <td><?php echo $datang->ket ?></td>
		    <td style="text-align:center" width="100px">
			<?php 
			echo anchor(site_url('datang/read/'.$datang->id),'<small class="label bg-green"><i class="fa fa-search"></i></small>'); 
			echo ' '; 
			echo anchor(site_url('datang/update/'.$datang->id),'<small class="label bg-yellow"><i class="fa fa-pencil"></i></small>'); 
			echo ' '; 
			echo anchor(site_url('datang/delete/'.$datang->id),'<small class="label bg-red"><i class="fa fa-trash-o"></i></small>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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