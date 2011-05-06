<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="fr" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="fr" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="fr" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="fr" class="no-js ie9"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class='no-js'>
  <!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php yield('page_title'); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if IE]><meta http-equiv="imagetoolbar" content="no" /><![endif]-->

    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- <link href='/stylesheets/base.css?v=1' media='all' rel='stylesheet' /> -->
    <link href='/stylesheets/structure.css?v=1' media='all' rel='stylesheet' />
    <link href='/stylesheets/application.css?v=1' media='all' rel='stylesheet' />
    <link href='/stylesheets/parse_actuality.css?v=1' media='all' rel='stylesheet' />

    <script type="text/javascript">
      // FIX HTML5 for ie
      (function(){if(!/*@cc_on!@*/0)return;var e = "abbr,address,article,aside,audio,bb,canvas,datagrid,datalist,details,dialog,eventsource,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,time,video".split(',');for(var i=0;i<e.length;i++){document.createElement(e[i])}})()
    </script>

  </head>
  <body lang='fr'>

      <!-- top -->
      <div id="top">
        <div class="container">
          <div class="main">
            top
          </div>
          <div class="clear"></div>
        </div>
      </div>

    <div id="wrapper_big_pub" class="activate">


      <div id="global_page">

        <!--some pub on the header-->
        <?php if(yield_exist('page_header_pub')):?>
          <div id="wrapper_header_pub">

            <?php yield('page_header_pub'); ?>
            <div class="clear"></div>
          </div>
        <?php endif;?>

        <!-- header -->
        <div id="header">
          <div class="container">
            <section class="main">
              header
            </section>
            <div class="clear"></div>
          </div>
          <div id="menu">
            <div class="coloration"></div>
            <div class="navigation">
              <ul id="rubriques">
                <li class="home"><a href="#" class="tab home">accuiel</a></li>
                <li class="home"><a href="#" class="tab magazine">magazine</a></li>
                <li class="home"><a href="#" class="tab news">actualités</a></li>
                <li class="home"><a href="#" class="tab community">communauté</a></li>
                <li class="home"><a href="#" class="tab events">événements</a></li>
                <li class="home"><a href="#" class="tab like">j'aime'</a></li>
              </ul>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        <div class="clear"></div>

        <!-- main-content -->

        <!-- header top -->
        <?php if(yield_exist('page_top_header')):?>
          <div id="subheader">
            <div class="container">
              <div class="main">

                <?php yield('page_top_header'); ?>

              </div>
              <div class="clear"></div>
            </div>
          </div>
          <div class="clear"></div>
        <?php endif; ?>

        <!-- PAGE -->
        <div id="page">
          <div class="shaddow"></div>

          <?php if(yield_exist('page_header')):?>
            <!-- HEADER SLIDE ON CONTENT PAGE -->
            <div class="header">
              <div class="container">
                <div class="main">

                  <?php yield('page_header'); ?>

                </div>
                <div class="clear"></div>
              </div>
            </div>
          <?php endif;?>


          <div class="container">
            <?php if(yield_exist('page_main_content')):?>

              <section id="main-content">
                <?php yield('page_main_content')?>
              </section>

            <?php endif;?>

            <?php if(yield_exist('page_sidebar')):?>

              <aside id="sidebar">
                <?php yield('page_sidebar')?>
              </aside>

            <?php endif;?>
            <div class="clear"></div>
          </div>
        </div>


        <!-- footer -->
        <div id="footer">
          <div class="container">
            <footer class="main">

              <?php yield('page_footer')?>

            </footer>
            <div class="clear"></div>
          </div>
        </div>

      </div> <!-- end global_page -->

    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="/javascripts/libs/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script>
    <script src="/javascripts/main.js"></script>
    <!--[if lt IE 7 ]>
    <script src="javascripts/libs/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg');</script>
    <![endif]-->

   </body>
</html>
