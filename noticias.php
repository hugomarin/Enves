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
    <link href="img/ico.png" rel="shortcut icon" type="image/x-icon">
    <link href="img/ico.png" rel="icon" type="image/x-icon">
    <link href="img/ico.gif" rel="icon" type="image/gif">
    <link rel="stylesheet" href="stylesheets/foundation.min.css">
    <link rel="stylesheet" href="stylesheets/app.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="stylesheets/jquery.bxslider.css" rel="stylesheet" />
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
</head>

<body>
    <div id="scroll">
        <div data-page="first" class="scroll_item">&nbsp;</div>
        <div data-page="second" class="scroll_item">&nbsp;</div>
    </div>
    <?php include_once 'includes/header.php';?>
    <div class="light" id="first">
            <div class="row">
                <div class="title">
                    <div class="twelve column main_title2">NOTICIAS</div>
                </div>
            </div>
            <div class="row">
                <div class="six column subtitle5">Ut non pulvinar ante,
                    <strong>vitae</strong>convallis eros</div>
                <div class="six column" style="float:left;">
                    <div id="social_networks">SÍGUENOS
                        <div id="social_networks_icon">
                            <a href="https://www.facebook.com/EnvesColombia?fref=ts" target="_blank">
                                <img src="img/fb.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="six column">
                    <div class="date_image">
                        <div class="main_date">
                            <div class="number_date">02</div>
                            <div class="month_date">OCT</div>
                        </div>
                        <img src="img/news_big1.jpg" alt="" />
                    </div>
                    <div class="date">Octubre 2 de 2013 By Ximena Vélez</div>
                    <span class="subtitle6">CRAS MAGNA DAPIBUS</span>
                    <br>
                    <p class="secondary_p">Non metus auctor fringilla.quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam ligula porta felis euismod semper. Duis mollis, est non commodo Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id</p>
                </div>
                <div class="six column">
                    <div class="date_image">
                        <div class="main_date">
                            <div class="number_date">02</div>
                            <div class="month_date">OCT</div>
                        </div>
                        <img src="img/news_big1.jpg" alt="" />
                    </div>
                    <div class="date">Octubre 2 de 2013 By Ximena Vélez</div>
                    <span class="subtitle6">CRAS MAGNA DAPIBUS</span>
                    <br>
                    <p class="secondary_p">Non metus auctor fringilla.quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam ligula porta felis euismod semper. Duis mollis, est non commodo Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id</p>
                </div>
            </div>
    </div>
    <div class="light-1" id="second">
        <div class="row news_2">
            <div class="twelve columns ">
                <div class="date_image2">
                    <div class="main_date2">
                        <div class="number_date2">25</div>
                        <div class="month_date2">SEPT</div>
                    </div>
                    <img src="img/news_small1.jpg" alt="" />
                </div>
                <div class="news_small">
                    <div class="date">Octubre 2 de 2013 By Ximena Vélez</div>
                    <span class="subtitle6">CRAS MAGNA DAPIBUS</span>
                    <br>
                    <p class="secondary_p">Non metus auctor fringilla.quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam ligula porta felis euismod semper. Duis mollis, est non commodo Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id</p>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'includes/footer.php';?>
</body>

</html>