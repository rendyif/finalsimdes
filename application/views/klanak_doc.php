<!doctype html>
<html>
    <head>
        <title>Kelahiran Anak</title>
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
        <h2>Kelahiran Anak</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Anak</th>
		<th>Waktu Lahir</th>
		<th>Jam Lahir</th>
		<th>Jenis Kelamin</th>
		<th>Berat</th>
		<th>Panjang</th>
		<th>Anak Ke</th>
		<th>Tempat Kelahiran</th>
		<th>Nama Suami</th>
		<th>Agama</th>
		<th>Umur</th>
		<th>Perkerjaan</th>
		<th>Nama Istri</th>
		<th>Agama Istri</th>
		<th>Umur</th>
		<th>Perkerjaan</th>
		<th>Blok</th>
		<th>Rt</th>
		<th>Rw</th>
		
            </tr><?php
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
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>