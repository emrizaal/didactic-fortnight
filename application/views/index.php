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
<!-- Intro Section -->
<section id="intro" class="intro-section">
    <div class="container-fluid">
        <div class="row">
           <div class="col-md-12" style="margin-top:-60px;padding:0px;">
               <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:580px;">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?=base_url()?>assets/img/newlh.jpg" alt="Chania" style="height:580px;width:1411px">
						<div class="carousel-caption">
							<h3>CAPTION TITLE</h3>
							<p>Caption text</p>
						</div>
                    </div>
                    <div class="item">
                        <img src="<?=base_url()?>assets/img/newlh.jpg" alt="Chania" style="height:580px;width:1411px">
						<div class="carousel-caption">
							<h3>CAPTION TITLE</h3>
							<p>Caption text</p>
						</div>
                    </div>
                    <div class="item">
                        <img src="<?=base_url()?>assets/img/newlh.jpg" alt="Chania" style="height:580px;width:1411px">
						<div class="carousel-caption">
							<h3>CAPTION TITLE</h3>
							<p>Caption text</p>
						</div>
                    </div>
                    <div class="item">
                        <img src="<?=base_url()?>assets/img/newlh.jpg" alt="Chania" style="height:580px;width:1411px">
						<div class="carousel-caption">
							<h3>CAPTION TITLE</h3>
							<p>Caption text</p>
						</div>
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!--<div class="col-md-3">
           <img src="<?=base_url()?>assets/img/logo.png" /><br>
           <h1>DKM LUQMANUL HAKIM</h1>
           <br>
           <u><h4>POLITEKNIK NEGERI BANDUNG</h4></u>
           <br><br><br>
           <b>Didukung oleh :</b>
           <br><br>
           <img src="<?//=base_url()?>assets/img/assalam.jpg" height="70px" /> <img src="<?=base_url()?>assets/img/polban.jpg" height="75px" /> <img src="<?//=base_url()?>assets/img/ruki.png" height="70px">
       </div>-->
   </div>
</div>
</section>

<!-- About Section -->
<section id="jadwal" class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">Pemateri Hari Ini</div>
                    <div class="panel-body">
                        <img src="<?=base_url()?>assets/img/aam.png" width="200px;">
                        <h2>Dr. Aam Amiruddin</h2>
                        <br>
                        Tempat :
                        <br>
                        <b>Luqmanul Hakim</b>
                        <br><br>
                        Waktu :
                        <br>
                        <b>15.30 - 17.45 WIB</b>
                        <br><br>
                        <button class="btn btn-success">Lihat Profil Pemateri</button>
                        <br><br>
                        <button class="btn btn-primary">Lihat Materi</button>
                    </div>
                </div>
                <br><br>
                <button class="btn btn-lg btn-info" data-toggle="modal" data-target="#urutan">Lihat Jadwal Lengkap</button>
            </div>
            <div class="col-lg-9">
                <div id='calendar'></div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="materi" class="services-section-book">
	<div class="container">
	<div class="row">
	 <div class="col-md-12">
            <h2 align="center">E-Book</h2><br>
            <div align="center" style="margin-left:25px;">
                <div class="float_l ebuk">
                    <table>
						<tr>
							<td><img src="<?=base_url()?>assets/img/book1.png"/></td>
						<tr>
						</tr>
							<td><button class="btn btn-success">Download</button></td>
						</tr>
					</table>
                </div>
                <div class="float_l ebuk">
                    <table>
						<tr>
							<td><img src="<?=base_url()?>assets/img/book2.png"/></td>
						<tr>
						</tr>
							<td><button class="btn btn-success">Download</button></td>
						</tr>
					</table>
                </div>
                <div class="float_l ebuk">
                    <table>
						<tr>
							<td><img src="<?=base_url()?>assets/img/book3.png"/></td>
						<tr>
						</tr>
							<td><button class="btn btn-success">Download</button></td>
						</tr>
					</table>
                </div>
                <div class="float_l ebuk">
                    <table>
						<tr>
							<td><img src="<?=base_url()?>assets/img/book4.png"/></td>
						<tr>
						</tr>
							<td><button class="btn btn-success">Download</button></td>
						</tr>
					</table>
                </div>
                <div class="float_l ebuk">
                    <table>
						<tr>
							<td><img src="<?=base_url()?>assets/img/book5.png"/></td>
						<tr>
						</tr>
							<td><button class="btn btn-success">Download</button></td>
						</tr>
					</table>
                </div>
                <div class="float_l ebuk">
                    <table>
						<tr>
							<td><img src="<?=base_url()?>assets/img/book1.png"/></td>
						<tr>
						</tr>
							<td><button class="btn btn-success">Download</button></td>
						</tr>
					</table>
                </div>
				
            </div>
        </div>
	 </div>
	</div>
</section>

<section class="services-section-materi">
    <div class="container" align="left">
        <div class="row">
            <div class="col-md-12">
            <!--
                <div>
                    <img src="<?//=base_url()?>assets/img/natal.jpg" class="float_l img_materi">
                    <h4><b>Hukum Memberi Ucapan Natal</b></h4>
                    <sup><i>Jumat, 1 Januari 2016 | oleh : Dr. Aam Amiruddin</i><br></sup>
                    <p align="justify">
                        Pak ustadz yang saya hormati, bagaimana hukumnya apabila kita mengucapkan selamat hari raya Natal kepada saudara saya yang memeluk agama Kristen. Apakah kita diperbolehkan menyampaikan ucapan selamat hari raya kepada pemeluk agama lain? Apabila kita juga ingin menyampaikannya melalui pesan singkat seperti SMS atau BBM, bagaimana hukumnya? Mohon penjelasannya. Terima kasih sebelumnya atas jawabannya. 
                        (Nunung, Sumedang)
                    </p>
                    <hr>
                </div>
                <div>
                    <img src="<?//=base_url()?>assets/img/kiblat.jpg" class="float_l img_materi">
                    <h4><b>Tak Tahu Arah Kiblat Ketika Shalat</b></h4>
                    <sup><i>Jumat, 1 Januari 2016 | oleh : Dr. Aam Amiruddin</i><br></sup>
                    <p align="justify">
                        Ketika melakukan perjalanan ke sejumlah negara Eropa, saya menghadapi kesulitan dalam menentukan arah kiblat. Ke arah mana saya harus menghadap dalam keadaan seperti itu? Kalau ternyata arah kiblatnya salah, apakah shalatnya perlu diulangi?

                        Nana, Cimahi, alina….@gmail.com

                        JAWAB : 

                        Kiblat adalah titik yang menyatukan arah segenap umat Islam dalam melaksanakan shalat, tetapi titik arah itu sendiri..
                    </p>
                    <hr>
                </div>
                <div>
                    <img src="<?//=base_url()?>assets/img/ortu.jpg" class="float_l img_materi">
                    <h4><b> 
                        Berbakti Kepada Ortu yang telah Wafat</b></h4>
                        <sup><i>Jumat, 1 Januari 2016 | oleh : Dr. Aam Amiruddin</i><br></sup>
                        <p align="justify">
                            Ustadz , saya merasa selama ini belum berbakti pada kedua orang tua. Padahal mereka sudah meninggal dunia. Bagimana caranya agar saya bisa berbakti kepada mereka? Apa saja amalan yang dapat dilakukan agar saya dapat membalas kebaikan mereka? 

                            JAWAB :

                            Diakui, berbakti kepada orang tua merupakan salah satu amal yang paling dicintai Allah.

                            Telah berkata Abdullah bin Mas’ud r.a. Aku berta.....
                        </p>
                        <hr>
                    </div>
                -->
                <div id="content_materi">
                    <?php
                    include "v_materi.php";
                    ?>
                </div>
                <div align="right" style="margin-top:-20px;">
                    <ul class="pagination">
                      <li value="1" class="active"><a>1</a></li>
                      <li value="2"><a>2</a></li>
                      <li value="3"><a>3</a></li>
                      <li value="4"><a>4</a></li>
                      <li value="5"><a>5</a></li>
                  </ul>
              </div>
          </div>
    </div>
	
	
    <div class="row">
        <div class="col-md-12">
            <div class="modal fade" id="urutan" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Ustadz</th>
                                        <th>Tanggal</th>
                                        <th>Preview</th>
                                        <th>Isi</th>
                                        <th>Sumber</th>
                                        <th>Urutan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach ($materi as $m) { 
                                        ?>
                                        <tr>
                                            <td><?=$m['judul']?></td>
                                            <td><?=$m['ustadz']?></td>
                                            <td><?=$m['tanggal']?></td>
                                            <td><?=$m['preview']?></td>
                                            <td><?=$m['isi']?></td>
                                            <td><?=$m['sumber']?></td>
                                            <td><?=$m['urutan_tampil']?></td>
                                        </tr>
                                        <?php    
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php 
include "footer.php";
?>