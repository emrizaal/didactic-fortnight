<?php 
include "header.php";
?>

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
                <a class="navbar-brand page-scroll" href="#page-top"><img src="<?=base_url()?>assets/img/to.png" height="50px" style="margin-top:-18px;"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav pull-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#jadwal">Jadwal</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#materi">Tausiyah</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Kontak</a>
                    </li>

                </ul>
                <!--<ul class="nav navbar-nav pull-right">
                   <?php
                   //if($this->session->userdata('username')==""){
                    ?>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Login
                        <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <form action="<?=base_url()?>main/auth" method="POST">
                                <li style="padding: 5px 10px;">
									<table>
										<tr>
											<td><i class="fa fa-user-circle fa-lg"></i></td>
											<td>&emsp;</td>
											<td><input type="text" name="username" placeholder="Username" class="form-control" size="25"></td>
										</tr>
									</table>
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
            //}else{
                ?>
                <li>
                    <a href="<?=base_url()?>main/daftar_tausiyah">Daftar Tausiyah</a>
                </li>
                <li>
                    <a href="<?=base_url()?>main/tambah_tausiyah">Tambah Tausiyah</a>
                </li>
                <li>
                    <a href="#">Logout</a>
                </li>-->
                <?php 
            //}
            ?>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
</body>