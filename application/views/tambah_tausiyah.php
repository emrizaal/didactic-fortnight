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
            <h1 class="page-header">Tambah Berita</h1>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-5">
            <form role="form" method="POST" action="<?=base_url()?>main/add_tausiyah" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Judul</label>
                    <input class="form-control" placeholder="Judul" name="judul" type="text" autofocus>
                </div>
                <div class="form-group">
                    <label>Ustad</label>
                    <input class="form-control" placeholder="Ustad" name="ustad" type="text">
                </div>
                <div class="form-group">
                    <label>Preview</label>
                    <textarea name="preview" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Isi</label>
                    <textarea name="isi" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Sumber</label>
                    <input class="form-control" placeholder="Sumber" name="sumber" type="text">
                </div>
                <div class="form-group">
                    <label>Urutan Tampil</label>
                    <input class="form-control" placeholder="Urutan Tampil" name="urutan" type="text">
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input class="form-control" placeholder="Gambar" name="userfile" type="file">
                </div>
                <button class="btn btn-lg btn-success btn-block" type="submit">Submit</button>
            </form>
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
<script type="text/javascript" src="<?=base_url()?>assets/tiny_mce/tiny_mce.js"></script>
<script>
    tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        elements : "elm1",
        skin : "o2k7",
        skin_variant : "silver",
        plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

        // Theme options
        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,code,|,insertdate,inserttime,preview",
        theme_advanced_buttons3 : "hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,fullscreen,|,insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,|,forecolor,backcolor",
        theme_advanced_buttons4 : "",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Example content CSS (should be your site CSS)
        content_css : "",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "lists/template_list.js",
        external_link_list_url : "lists/link_list.js",
        external_image_list_url : "lists/image_list.js",
        media_external_list_url : "lists/media_list.js",

        // Style formats
        style_formats : [
        {title : 'Bold text', inline : 'b'},
        {title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
        {title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
        {title : 'Example 1', inline : 'span', classes : 'example1'},
        {title : 'Example 2', inline : 'span', classes : 'example2'},
        {title : 'Table styles'},
        {title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
        ],

        // Replace values for the template plugin
        template_replace_values : {
            username : "Some User",
            staffid : "991234"
        }
    });</script>