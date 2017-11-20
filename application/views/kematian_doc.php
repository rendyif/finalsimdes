<!doctype html>
<html>
    <head>
        <title>Kematian</title>
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
        <h2>Kematian</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nomer KK</th>
		<th>Nomer NIK</th>
		<th>Nama Yang Meninggal</th>
		<th>Jenis Kelami</th>
		<th>Umur</th>
		<th>Perkerjaan</th>
		<th>Waktu Kematian</th>
		<th>Sebab Kematian</th>
		<th>Tempat Kamatian</th>
		<th>Blok</th>
		<th>Rt</th>
		<th>Rw</th>
		
            </tr><?php
            foreach ($kematian_data as $kematian)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $kematian->nkkm ?></td>
		      <td><?php echo $kematian->nikm ?></td>
		      <td><?php echo $kematian->namam ?></td>
		      <td><?php echo $kematian->jklkm ?></td>
		      <td><?php echo $kematian->umurkm ?></td>
		      <td><?php echo $kematian->pkjaan ?></td>
		      <td><?php echo $kematian->wktum ?></td>
		      <td><?php echo $kematian->sbbm ?></td>
		      <td><?php echo $kematian->tmptm ?></td>
		      <td><?php echo $kematian->blokm ?></td>
		      <td><?php echo $kematian->rtm ?></td>
		      <td><?php echo $kematian->rwm ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>