<!doctype html>
<html>
<head>
    <title>Data Penduduk</title>
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
    <h2>Data Penduduk</h2>
    <table class="word-table" style="margin-bottom: 10px">
        <tr>
            <th>No</th>
            <th>Nomer KK</th>
            <th>Nomer Nik</th>
            <th>Nama KK</th>
            <th>Alamat</th>
            <th>Tempat lahir</th>
            <th>Tanggal lahir</th>
            
            </tr><?php
            foreach ($datapenduduk_data as $datapenduduk)
            {
                ?>
                <tr>
                    <td><?php echo ++$start ?></td>
                    <td><?php echo $datapenduduk->kk ?></td>
                    <td><?php echo $datapenduduk->nik ?></td>
                    <td><?php echo $datapenduduk->namakk ?></td>
                    <td><?php echo $datapenduduk->alamat ?></td>
                    <td><?php echo $datapenduduk->tempatl ?></td>
                    <td><?php echo $datapenduduk->tanggallhr ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
    </html>