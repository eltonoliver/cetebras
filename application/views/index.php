<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en">
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en">
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <title>CETEBRAS ::.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cetebras Centro Tecnológico Brasileiro">
    <meta name="author" content="Cetebras">
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800' rel='stylesheet' type='text/css'>

    <!-- CSS Bootstrap & Custom -->
    <link href="<?=base_url();?>assets/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?=base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="<?=base_url();?>assets/css/animate.css" rel="stylesheet" media="screen">

    <link href="<?=base_url();?>assets/style.css" rel="stylesheet" media="screen">

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url();?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url();?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url();?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url();?>assets/images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?=base_url();?>assets/images/ico/favicon.ico">

    <!-- JavaScripts -->
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?=base_url();?>js/modernizr.js"></script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
    </div>
    <![endif]-->
</head>
<body>
<!-- Dispositivos Moveis -->
<div class="responsive-navigation visible-sm visible-xs">
    <a href="#" class="menu-toggle-btn">
        <i class="fa fa-bars"></i>
    </a>
    <div class="responsive_menu">
        <ul class="main_menu">
            <li><a href="<?=base_url();?>">Home</a></li>
            <li><a href="#">Institucional</a>
                <ul>
                    <li><a href="#">Nosso Ensino</a></li>
                    <li><a href="#">Cetebras</a></li>
                    <li><a href="#">Missão</a></li>
                    <li><a href="#">Visão</a></li>
                    <li><a href="#">Sustentabilidade</a></li>
                </ul>
            </li>


            <!--<li><a href="#">Events</a>
                <ul>
                    <li><a href="events-grid.html">Events Grid</a></li>
                    <li><a href="events-list.html">Events List</a></li>
                    <li><a href="event-single.html">Event Details</a></li>
                </ul>
            </li> -->
            <li><a href="#">Cursos</a>
                <ul>
                    <li><a href="#">Assistente Administrativo</a></li>
                    <li><a href="#">Informática Profissional</a></li>
                </ul>
            </li>
            <li><a href="<?=base_url(); ?>home/contato">Fale Conosco</a></li>
            <!--  <ul>
                  <li><a href="blog.html">Blog Grid</a></li>
                  <li><a href="blog-single.html">Blog Single</a></li>
                  <li><a href="blog-disqus.html">Blog Disqus</a></li>
              </ul>
          </li>
          <li><a href="#">Pages</a>
              <ul>
                  <li><a href="archives.html">Archives</a></li>
                  <li><a href="shortcodes.html">Shortcodes</a></li>
                  <li><a href="gallery.html">Our Gallery</a></li>
              </ul>-->


        </ul> <!-- /.main_menu -->
        <ul class="social_icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
        </ul> <!-- /.social_icons -->
    </div> <!-- /.responsive_menu -->
</div> <!-- /responsive_navigation -->


<header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4 header-left">
                <p><i class="fa fa-phone"></i> 92 3656 5972</p>
                <p><i class="fa fa-envelope"></i> <a href="mailto:cetebras@cetebras.com.br">cetebras@cetebras.com.br</a></p>
            </div> <!-- /.header-left -->

            <div class="col-md-4">
                <div class="logo">
                    <a href="<?=base_url(); ?>" title="Cetebras" rel="home">
                        <img src="<?=base_url();?>assets/images/logo.png" alt="Universe">
                    </a>
                </div> <!-- /.logo -->
            </div> <!-- /.col-md-4 -->

            <div class="col-md-4 header-right">
                <ul class="small-links">
                    <li><a href="#">Institucional</a></li>
                    <li><a href="<?=base_url(); ?>home/contato">Fale Conosco</a></li>
                    <li><a href="#">Reserva de Matrícula</a></li>
                </ul>
                <div class="search-form">
                    <form name="search_form" method="get" action="#" class="search_form">
                        <input type="text" name="s" placeholder="Busca no site" title="Busca no Site" class="field_search">
                    </form>
                </div>
            </div> <!-- /.header-right -->
        </div>
    </div> <!-- /.container -->

    <div class="nav-bar-main" role="navigation">
        <div class="container">
            <nav class="main-navigation clearfix visible-md visible-lg" role="navigation">
                <ul class="main-menu sf-menu">
                    <li class="active"><a href="<?=base_url(); ?>">Home</a></li>

                    <li><a href="#">Institucional</a>

                        <ul class="sub-menu">
                            <li><a href="#">Nosso Ensino</a></li>
                            <li><a href="#">Cetebras</a></li>
                            <li><a href="#">Missão</a></li>
                            <li><a href="#">Visão</a></li>
                            <li><a href="#">Sustentabilidade</a></li>

                        </ul>
                    </li>
                    <li><a href="#">Cursos</a>
                        <ul class="sub-menu">
                            <li><a href="#">Presenciais</a></li>
                            <li><a href="#">A Distância</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="#">Blog Entries</a>
                         <ul class="sub-menu">
                             <li><a href="blog.html">Blog Grid</a></li>
                             <li><a href="blog-single.html">Blog Single</a></li>
                             <li><a href="blog-disqus.html">Blog Disqus</a></li>
                         </ul>
                     </li>
                     <li><a href="#">Pages</a>
                         <ul class="sub-menu">
                             <li><a href="archives.html">Archives</a></li>
                             <li><a href="shortcodes.html">Shortcodes</a></li>
                             <li><a href="gallery.html">Our Gallery</a></li>
                         </ul>
                     </li> -->

                    <li><a href="<?=base_url(); ?>home/contato">Fale Conosco</a></li>
                </ul> <!-- /.main-menu -->

                <ul class="social-icons pull-right">
                    <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="Google+"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
                </ul> <!-- /.social-icons -->
            </nav> <!-- /.main-navigation -->
        </div> <!-- /.container -->
    </div> <!-- /.nav-bar-main -->

</header> <!-- /.site-header -->
<?=$contents; ?>
<!-- begin The Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer-widget">
                    <h4 class="footer-widget-title">Endereço</h4>
                    <p> Não perca tempo matricule-se já  </br>Rua Ovídio Gomes Monteiro, <br>274 A - Alvorada 2</br>Contato: 92 3656 5972 </p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer-widget">
                    <h4 class="footer-widget-title">Favoritos</h4>
                    <ul class="list-links">
                        <li><a href="#">Lista de Cursos</a></li>
                        <li><a href="#">Carreira</a></li>
                        <li><a href="#">RH - CETEBRAS</a></li>
                        <li><a href="#">Turmas em Andamento</a></li>
                        <li><a href="#">Cursos EAD</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer-widget">
                    <h4 class="footer-widget-title">Novidades para</h4>
                    <ul class="list-links">
                        <li><a href="#">Estudantes de Informática</a></li>
                        <li><a href="#">Estudantes de Administração</a></li>
                        <li><a href="#">Programadores</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer-widget">
                    <h4 class="footer-widget-title">Cursos</h4>
                    <ul class="list-links">
                        <li><a href="#">Assistente Administrativo</a></li>
                        <li><a href="#">Informática Profissional</a></li>
                        <li><a href="#">Programação para Web</a></li>
                        <li><a href="#">Dúvidas Frequentes</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <ul class="footer-media-icons">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-google-plus"></a></li>
                        <li><a href="#" class="fa fa-youtube"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-apple"></a></li>
                        <li><a href="#" class="fa fa-rss"></a></li>
                    </ul>
                </div>
            </div>
        </div> <!-- /.row -->

        <div class="bottom-footer">
            <div class="row">
                <div class="col-md-5">
                    <p class="small-text">&copy;Cetebras - 2014 Todos os Direitos Reservador
                    </p>
                </div> <!-- /.col-md-5 -->
                <div class="col-md-7">
                    <ul class="footer-nav">
                        <li><a href="<?=base_url();?>">Home</a></li>
                        <li><a href="#">Cursos</a></li>
                        <!--  <li><a href="events-list.html">Events</a></li> -->
                        <!--  <li><a href="blog.html">Blog</a></li> -->
                        <!--  <li><a href="shortcodes.html">Shortcodes</a></li> -->
                        <li><a href="<?=base_url(); ?>home/contato">Contato</a></li>
                    </ul>
                </div> <!-- /.col-md-7 -->
            </div> <!-- /.row -->
        </div> <!-- /.bottom-footer -->

    </div> <!-- /.container -->
</footer> <!-- /.site-footer -->


<script src="<?=base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=base_url(); ?>assets/js/plugins.js"></script>
<script src="<?=base_url(); ?>assets/js/custom.js"></script>
<script src="<?=base_url(); ?>assets/js/funcoes.js"></script>

</body>

</html>