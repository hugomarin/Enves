<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <!-- Set the viewport width to device width for mobile -->
    <title>ENVÉS: Diseño Sostenible</title>
    <!-- Included CSS Files (Uncompressed) -->
    <!-- <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
    <!-- Included CSS Files (Compressed) -->
    <link rel="stylesheet" href="stylesheets/foundation.min.css">
    <link rel="stylesheet" href="stylesheets/app.css">
    <link rel="stylesheet" href="stylesheets/style_font.css">
    <script src="javascripts/modernizr.foundation.js"></script>
    <link href="stylesheets/jquery.bxslider.css" rel="stylesheet" />

</head>
<body>
    <div id="scroll">
        <div data-page="first" class="scroll_item">&nbsp;</div>
        <div data-page="second" class="scroll_item">&nbsp;</div>
        <div data-page="third" class="scroll_item">&nbsp;</div>
    </div>
    <?php include_once 'includes/header.php';?>
    <div class="banner_wrapper">
        <ul class="bxslider banner_730">
            <li>
                <img src="img/banners/home/floresta.jpg" height="733" alt="" />
            </li>
            <li>
                <img src="img/banners/home/IMG_9286_B.jpg" height="733" alt="" />
            </li>
            <li>
                <img src="img/banners/home/IMG_3233_B.jpg" height="733" alt="" />
            </li>
            <li>
                <img src="img/banners/home/colibri.jpg" height="733" alt="" />
            </li>
            <li>
                <img src="img/banners/home/IMG_3315_B.jpg" height="733" alt="" />
            </li>
            <li>
                <img src="img/banners/home/home_01.jpg" height="733" alt="" />
            </li>
        </ul>
    </div>
    <div class="banner1" id="first">
        <div class="row row_min_widthb banner1_content">
            <div class="">
                <div class="twelve columns logo ">
                    <img src="img/enves_logo.png" width="414" height="166" alt="" />
                    <div class="sub_logo">DISEÑO SOSTENIBLE</div>
                </div>
                <div class="twelve columns ">
                    <p class="banner_p">
                        <span class="banner_p2">EL DISEÑO COMO EJE ARTICULADOR
                            <br>
                        </span>ENTRE LAS COMUNIDADES, LAS EMPRESAS,
                        <br>ENTIDADES U ORGANIZACIONES</p>
                </div>
                <div class="twelve columns  button_center ">
                    <a href="nosotros.php" class="button6">NOSOTROS</a>
                </div>
                <div class="twelve columns banner_more ">
                    <a href="#anchor_portafolio_home2">Conoce Nuestro Portafolio</a>
                </div>
                <div id="anchor_portafolio_home2">p</div>
            </div>
        </div>
    </div>
    <div class="light" id="second">
        <div class="row grid_gallery2">
            <div class="four columns view_more">
                <div class="wrap-thin demo-thin clearfix">
                    <div class="viewport">
                        <div class="hover_view">proyectos</div>
                        <a href="proyectos.php">
                            <span class="dark-background view_more_top">Ver más</span>
                            <img src="img/btn_proyectos.jpg" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="four columns view_more">
                <div class="wrap-thin demo-thin clearfix">
                    <div class="viewport">
                        <div class="hover_view">productos</div>
                        <a href="productos.php">
                            <span class="dark-background view_more_top">Ver más</span>
                            <img src="img/btn_pandora_2.jpg" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="four columns view_more">
                <div class="wrap-thin demo-thin clearfix">
                    <div class="viewport">
                        <div class="hover_view">impresión</div>
                        <a href="eco.php">
                            <span class="dark-background view_more_top">Ver más</span>
                            <img src="img/btn_impresion.jpg" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="four columns view_more">
                <div class="wrap-thin demo-thin clearfix">
                    <div class="viewport">
                        <div class="hover_view">comunidades</div>
                        <a href="comunidades.php">
                            <span class="dark-background view_more_top">Ver más</span>
                            <img src="img/btn_comunidades.jpg" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="four columns view_more">
                <div class="wrap-thin demo-thin clearfix">
                    <div class="viewport">
                        <div class="hover_view">noticias</div>
                        <a href="">
                            <span class="dark-background view_more_top">Ver más</span>
                            <img src="img/btn_noticias.jpg" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="four columns view_more" style="float:left !important;">
                <div class="wrap-thin demo-thin clearfix">
                    <div class="viewport">
                        <div class="hover_view">contacto</div>
                        <a href="contacto.php">
                            <span class="dark-background view_more_top">Ver más</span>
                            <img src="img/btn_contacto.jpg" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="twelve columns  button_center button_more_margin ">
                <a href="catalogo/catalogo_enves.pdf" class="button3" target="_blank">DESCARGAR CATÁLOGO</a>
            </div>
            <div class="twelve columns body_more ">
                <a>Conoce Nuestro Portafoilo</a>
            </div>
        </div>
    </div>
    <div class="medium" id="third">
        <div class="row">
            <div class="twelve column main_title">CLIENTES & ALIADOS</div>
            <div class="twelve column subtitle2">Queremos trabajar con iniciativas que puedan aportar algo al mundo,
                <br>creando y potencializando un nuevo orden social y empresarial.</div>
            <div class="twelve column">
                <div class="row clients_table">
                    <ul class="block-grid mobile-three-up.">
                        <li class="proyect1">proyect1</li>
                        <li class="proyect2">proyect2</li>
                        <li class="proyect3">proyect3</li>
                        <li class="proyect4">proyect4</li>
                        <li class="proyect5">proyect5</li>
                        <li class="proyect6">proyect6</li>
                        <li class="proyect7">proyect7</li>
                        <li class="proyect8">proyect8</li>
                        <li class="proyect9">proyect9</li>
                        <li class="proyect10">proyect10</li>
                        <li class="proyect11">proyect11</li>
                        <li class="proyect12">proyect12</li>
                        <li class="proyect13">proyect13</li>
                        <li class="proyect14">proyect14</li>
                        <li class="proyect15">proyect15</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
     <?php include_once 'includes/footer.php';?>
</body>

    <script src="js/placeholder.js"></script>
    <!-- jQuery library (served from Google) -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="js/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->

    <script>
        $(document).ready(function() {
            $('.bxslider').bxSlider({
                mode: 'fade',
                auto: true,
                pause: 5500,
                randomStart: true,
                speed: 900,


            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.viewport').mouseenter(function(e) {
                $(this).children('a').children('img').animate({
                    height: '317',
                    left: '0',
                    top: '0',
                    width: '317'
                }, 250);
                $(this).children('a').children('span').fadeIn(250);
            }).mouseleave(function(e) {
                $(this).children('a').children('img').animate({
                    height: '350',
                    left: '-20',
                    top: '-20',
                    width: '350'
                }, 200);
                $(this).children('a').children('span').fadeOut(200);
            });
        });
    </script>
    <script>
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>
    <script type='text/javascript'>
        //<![CDATA[ 
        $(window).load(function() {
            $('.scroll_item').on('click', function() {
                var elem = $('#' + $(this).data('page')),
                    scroll = elem.offset().top;

                $('body, html').animate({
                    scrollTop: scroll
                }, 500);

                $(this).addClass('scroll_item_active')
                    .siblings('.scroll_item_active')
                    .removeClass('scroll_item_active');
            });

            $(window).on('scroll', function(e) {
                var elems = $('#first, #second, #third, #fourth'),
                    scrolled = $(this).scrollTop();

                var dataPage = elems.filter(function() {
                    return $(this).offset().top + ($(this).height() / 2) >= scrolled;
                }).first();

                $('.scroll_item[data-page="' + dataPage.prop('id') + '"]').addClass('scroll_item_active')
                    .siblings('.scroll_item_active')
                    .removeClass('scroll_item_active');
            }).trigger('scroll');
        }); //]]>
    </script>
</html>
