<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Pindah List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('pindah/create'), 'Create', 'class="btn btn-warning"'); ?>
		<?php echo anchor(site_url('pindah/excel'), 'Excel', 'class="btn btn-success"'); ?>
		<?php echo anchor(site_url('pindah/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <div class="box">
        <div class="box-body">
        <table class="table table-hover" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>No NIK</th>
		    <th>Nama Lengkap</th>
		    <th>Tempat Lahir</th>
		    <th>Tanggal Lahir</th>
		    <th>Jenis Kelamin</th>
		    <th>Kewarganegaraan</th>
		    <th>Asal Dari</th>
		    <th>Tujuan</th>
		    <th>Tanggal Pindah</th>
		    <th>Keterangan</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($pindah_data as $pindah)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $pindah->nik ?></td>
		    <td><?php echo $pindah->namap ?></td>
		    <td><?php echo $pindah->tempp ?></td>
		    <td><?php echo $pindah->tglp ?></td>
		    <td><?php echo $pindah->jklp ?></td>
		    <td><?php echo $pindah->kwgp ?></td>
		    <td><?php echo $pindah->asalp ?></td>
		    <td><?php echo $pindah->tujuanp ?></td>
		    <td><?php echo $pindah->tglpp ?></td>
		    <td><?php echo $pindah->kett ?></td>
		    <td style="text-align:center" width="100px">
			<?php 
			echo anchor(site_url('pindah/read/'.$pindah->id),'<small class="label bg-green"><i class="fa fa-search"></i></small>'); 
			echo ' '; 
			echo anchor(site_url('pindah/update/'.$pindah->id),'<small class="label bg-yellow"><i class="fa fa-pencil"></i></small>'); 
			echo ' '; 
			echo anchor(site_url('pindah/delete/'.$pindah->id),'<small class="label bg-red"><i class="fa fa-trash-o"></i></small>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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