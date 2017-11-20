<!doctype html>
<html>
    <head>
        <title>Penduduk Datang</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Penduduk Datang</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nomer NIK</th>
		<th>Nama Lengkap</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Jenis Kelamin</th>
		<th>Kewarganegaraan</th>
		<th>Datang dari</th>
		<th>Tempat Tinggal Sekarang</th>
		<th>Tanggal Masuk</th>
		<th>Keterangan</th>
		
            </tr><?php
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
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>