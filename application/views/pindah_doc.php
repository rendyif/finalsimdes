
<!doctype html>
<html>
<head>
    <title>Pendataan Pindah</title>
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
    <h2>Pindah List</h2>
    <table class="word-table" style="margin-bottom: 10px">
        <tr>
            <th>No</th>
            <th>Nomer NIK</th>
            <th>Nama Lengkap</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Kewarganegaraan</th>
            <th>Asal Dari</th>
            <th>Tujuan</th>
            <th>Tanggal Pindah</th>
            <th>Keterangan</th>

            </tr><?php
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
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
    </html>