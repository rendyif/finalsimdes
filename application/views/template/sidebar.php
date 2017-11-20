<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <?php $user = $this->ion_auth->user()->row() ?>
                <p><?php echo $user->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('') ?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="<?php echo site_url('dashboard2') ?>"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li>
         <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Manajemen Kependudukan</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('dashboard1') ?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="<?php echo site_url('dashboard2') ?>"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                    <li><a href="<?php echo site_url('Datapenduduk') ?>"><i class="fa fa-circle-o"></i>Manajemen Penduduk</a></li>
                    <li><a href="<?php echo site_url('Datang') ?>"><i class="fa fa-circle-o"></i>Penduduk Datang</a></li>
                    <li><a href="<?php echo site_url('Pindah') ?>"><i class="fa fa-circle-o"></i>Penduduk Pindah</a></li>
                    <li><a href="<?php echo site_url('Kkdanktp') ?>"><i class="fa fa-circle-o"></i>Pembuatan KK dan KTP</a></li>
                    <li><a href="<?php echo site_url('Kematian') ?>"><i class="fa fa-circle-o"></i>Laporan Kematian</a></li>
                    <li><a href="<?php echo site_url('Lapsppt') ?>"><i class="fa fa-circle-o"></i>Laporan SPPT</a></li>
                    <li><a href="<?php echo site_url('Klanak') ?>"><i class="fa fa-circle-o"></i>Kelahiran</a></li>
                </ul>
            </li>
            <li class="#">
                <a href=<?php echo base_url().'index.php/Getdownload/' ?>
                    <i class="fa fa-envelope"></i> <span>Surat Menyurat</span> <i class="fa fa-angle-left pull-right"></i>
                </a>

    </section>
</aside>
<div class="content-wrapper">