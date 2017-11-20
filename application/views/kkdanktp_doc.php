<!doctype html>
<html>
    <head>
        <title>Pembuatan KK atau KTP</title>
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
        <h2>Pembuatan KK atau KTP</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Pemohon</th>
		<th>Jenis KK atau KTP</th>
		<th>Tanggal Buat</th>
		<th>Nomer NIK atau KK</th>
		<th>Keterangan</th>
		
            </tr><?php
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
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>