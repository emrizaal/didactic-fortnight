<?php 
include "header.php";
?>
<!-- Intro Section -->
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="<?=base_url()?>#page-top"><img src="<?=base_url()?>assets/img/to.png" height="50px" style="margin-top:-19px;"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="<?=base_url()?>#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?=base_url()?>#jadwal">Jadwal</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?=base_url()?>#materi">Tausiyah</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?=base_url()?>#contact">Kontak</a>
                    </li>

                </ul>
                <ul class="nav navbar-nav pull-right">
                 <?php
                 if($this->session->userdata('username')==""){
                    ?>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Login
                        <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <form action="<?=base_url()?>main/auth" method="POST">
                                <li style="padding: 5px 10px;">
                                    <input type="text" name="username" placeholder="Username" class="form-control">
                                </li>
                                <li style="padding: 5px 10px;">
                                    <input type="password" placeholder="Password" class="form-control" name="password">
                                </li>
                                <div align="right">
                                    <button type="submit" class="btn btn-primary" style="margin:10px">Login</button>
                                </div>
                            </form>
                        </ul>
                    </li>
                </ul>
                <?php
            }else{
                ?>
                <li>
                    <a href="<?=base_url()?>main/daftar_tausiyah">Daftar Tausiyah</a>
                </li>
                <li>
                    <a href="<?=base_url()?>main/tambah_tausiyah">Tambah Tausiyah</a>
                </li>
                <li>
                    <a href="#">Logout</a>
                </li>
                <?php 
            }
            ?>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Daftar Tausiyah</h1>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Ustadz</th>
                            <th>Preview</th>
                            <th>Isi</th>
                            <th>Sumber</th>
                            <th>Tanggal</th>
                            <th>Urutan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no=1;
                        foreach ($materi as $m) { 
                            ?>
                            <tr>
                                <td><?=$no?></td>
                                <td><?=$m['judul']?></td>
                                <td><?=$m['ustadz']?></td>
                                <td><?=$m['preview']?></td>
                                <td><?=$m['isi']?></td>
                                <td><?=$m['sumber']?></td>
                                <td><?=$m['tanggal']?></td>
                                <td>
                                <form action="<?=base_url()?>main/edit_urutan" method="POST">
                                    <input type="hidden" name="id" value="<?=$m['id_materi']?>">
                                        <input type="text" name="urutan" value="<?=$m['urutan_tampil']?>"  size="5">
                                    </form>
                                </td>
                            </tr>
                            <?php    
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br><br>
    <br>
    <br>
</div>
<!-- /.row -->
<?php 
include "footer.php";
?>