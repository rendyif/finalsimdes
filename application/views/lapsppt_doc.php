<!doctype html>
<html>
    <head>
        <title>Laporan SPPT</title>
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
        <h2>Laporan SPPT</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama </th>
		<th>No Letter C</th>
		<th>Alamat</th>
		<th>Nama di SPPT</th>
		<th>Lokasi Tanah</th>
		<th>No SPPT</th>
		<th>Luas Tanah</th>
		<th>Kelas Tanah</th>
		<th>Spesifikasi Tanah</th>
		<th>Pajak atau Ipeda</th>
		<th>Sebab</th>
		
            </tr><?php
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
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>