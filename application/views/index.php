<?php 
include "header.php";
?>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<?php include "navigation.php"; ?>

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
			<div id="fullCalModal" class="modal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
							<h4 id="modalTitle" class="modal-title"></h4>
						</div>
						<div id="modalBody" class="modal-body">
							Deskripsi Event
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<a id="eventUrl" target="_blank" class="btn btn-primary">Event Page</a>
						</div>
					</div>
				</div>
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
			<?php for($i=0; $i<4; $i++){ ?>
                <div class="float_l ebuk col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Judul Buku <?php echo $i+1; ?></h3>
						</div>
						<div class="panel-body" style="padding: 15px 20px;">
							<img src="<?=base_url()?>assets/img/book<?php echo $i+1; ?>.png"/>
							<p id="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id placerat est. Nam vulputate, mauris quis vulputate rhoncus, metus risus pretium tortor, sed condimentum enim quam et nibh.</p>
							<br><span style="text-align: center;"><button class="btn btn-primary" id="r-ebook-<?php echo $i+1;?>" onclick="call_modal(<?php echo $i+1; ?>)">See More</button></span>
						</div>
                    </div>
					
					<div id="ebookModal-<?php echo $i+1;?>" class="modal">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									
									<!--<button type="button" data-dismiss="modal"><span aria-hidden="true" onclick="close_modal(<?php// echo $i+1; ?>)">×</span> <span class="sr-only">close</span></button>-->
									<button type="button" class="close" data-dismiss="modal" onclick="close_modal(<?php echo $i+1; ?>)"><span aria-hidden="true" onclick="close_modal(<?php echo $i+1; ?>)">×</span> <span class="sr-only">close</span></button>
									<h4 id="modaleTitle" class="modal-title">Judul Buku</h4>
								</div>
								<div id="modaleBody" class="modal-body">
									<table>
										<tr>
											<td style="text-align: left; width:20%; padding: 0px 20px;"><img src="<?=base_url()?>assets/img/book<?php echo $i+1; ?>.png"/></td>
											<td style="text-align: justify; width:70%; padding: 0px 20px 0px 10px" valign="top">
												<p style="text-align: justify">
													<table>
														<tr>
															<th>Judul Buku </th>
															<td>&nbsp;:&nbsp;</td>
															<td> Judul</td>
															<td>&emsp;&emsp;&emsp;&emsp;&emsp; </td>
														</tr>
														<tr>
															<th>Tanggal Rilis </th>
															<td>&nbsp;:&nbsp;</td>
															<td> dd-mm-yyyy</td>
															<td> </td>
														</tr>
														<tr>
															<th>Penulis </th>
															<td>&nbsp;:&nbsp;</td>
															<td> Nama Penulis</td>
															<td> </td>
														</tr>
														<tr>
															<th>Sinopsis </th>
															<td>&nbsp;:&nbsp;</td>
															<td> </td><td> </td>
														</tr>
														<tr>
															<td colspan="4"> Sinopsis Buku. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id placerat est. Nam vulputate, mauris quis vulputate rhoncus, metus risus pretium tortor, sed condimentum enim quam et nibh.
															</td>
														</tr>
													</table>
												</p>
											</td>
										</tr>
									</table>
								</div>
								<div class="modal-footer">
									<button class="btn btn-success">Download</button>
									<button type="button" class="btn btn-default" data-dismiss="modal" onclick="close_modal(<?php echo $i+1; ?>)">Close</button>
								</div>
							</div>
						</div>
					</div>
                </div>
			<?php } ?>	
				
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