<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Language" content="pt-br" />
    <meta property="fb:admins" content="100002646957633" />

    <?php
	$otimizacao = new conecta();
	$otimizacao->conect();
	$otimizacao->executa_sql("SELECT * FROM otimizacao_site");
	$linha_otimizacao = $otimizacao->resultado();
	?>
    <link rel="icon" href="<?php echo $url ?>/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $url ?>/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $url ?>/images/favicon.ico" type="image/vnd.microsoft.icon">

    <META NAME="DESCRIPTION" CONTENT="<?php echo $linha_otimizacao['description']; ?> ">
    <META NAME="ABSTRACT" CONTENT="<?php echo $linha_otimizacao['abstract']; ?>">
    <meta name="TITLE" content="<?php echo $linha_otimizacao['titulo']; ?>" />
    <META NAME="KEYWORDS" CONTENT="<?php echo $linha_otimizacao['palavra_chave'];  ?> <?php if(isset($id)){echo ",".utf8_decode(str_replace("-"," ",$id)); if(isset($id2)){ echo ",".utf8_decode(str_replace("-"," ",$id2)); } } ?>">
    <META NAME="ROBOT" CONTENT="All">
    <META NAME="RATING" CONTENT="general">
    <META NAME="DISTRIBUTION" CONTENT="global">
    <META NAME="LANGUAGE" CONTENT="PT">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $url ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Customizable CSS -->
    <link href="<?php echo $url ?>/assets/css/main.css" rel="stylesheet" data-skrollr-stylesheet>
    <link href="<?php echo $url ?>/assets/css/blue.css" rel="stylesheet" title="Blue color">
    <link href="<?php echo $url ?>/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo $url ?>/assets/css/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo $url ?>/assets/css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $url ?>/assets/css/outdatedbrowser.css">
    <link rel="stylesheet" href="<?php echo $url ?>/assets/css/jquery-ui.css">

    <script>(function() {
    var _fbq = window._fbq || (window._fbq = []);
    if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
    }
    _fbq.push(['addPixelId', '410542335776871']);
    })();
    window._fbq = window._fbq || [];
    window._fbq.push(['track', 'PixelInitialized', {}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=410542335776871&amp;ev=PixelInitialized" /></noscript>

    <!-- Fonts
    <link href="http://fonts.googleapis.com/css?family=Lato:400,900,300,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic" rel="stylesheet">  -->

    <!-- Icons/Glyphs -->
    <link href="<?php echo $url ?>/assets/fonts/fontello.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $url ?>/assets/images/favicon.ico">

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:85014,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>


    <!-- JavaScripts placed at the end of the document so the pages load faster -->
	<script src="<?php echo $url ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo $url ?>/assets/js/jquery.easing.1.3.min.js"></script>
    <script src="<?php echo $url ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $url ?>/assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="<?php echo $url ?>/assets/js/skrollr.min.js"></script>
    <script src="<?php echo $url ?>/assets/js/skrollr.stylesheets.min.js"></script>
    <script src="<?php echo $url ?>/assets/js/waypoints.min.js"></script>
    <script src="<?php echo $url ?>/assets/js/waypoints-sticky.min.js"></script>
    <script src="<?php echo $url ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo $url ?>/assets/js/jquery.isotope.min.js"></script>
    <script src="<?php echo $url ?>/assets/js/jquery.easytabs.min.js"></script>
    <script src="<?php echo $url ?>/assets/js/jquery.slickforms.js"></script>
    <!--<script src="<?php echo $url ?>/assets/js/google.maps.api.v3.js"></script>-->
    <script src="<?php echo $url ?>/assets/js/viewport-units-buggyfill.js"></script>
    <script src="<?php echo $url ?>/assets/js/scripts.js"></script>
    <script src="<?php echo $url ?>/assets/js/jquery-ui.js"></script>

    <script src="<?php echo $url ?>/assets/js/outdatedbrowser.js" type="text/javascript"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="<?php echo $url ?>/assets/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="<?php echo $url ?>/assets/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $url ?>/assets/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

    <script type="text/javascript">
        $(document).ready(function($) {
            $("#comunicado")
            .attr('rel', 'gallery')
            .fancybox({
                padding : 0
            });

            // Launch fancyBox on first element
            $("#comunicado").eq(0).trigger('click');
        });
    </script>

    <!--- FACEBOOK -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!--Analitics-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6188026-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/3f58733c-0adf-4461-a40f-ccf43f4bf252-loader.js" ></script>

 <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WHH3BT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHH3BT');</script>
<!-- End Google Tag Manager -->

<title><?php echo $linha_otimizacao['titulo']; ?>
<?php if($id2 != ""){
	echo "-".utf8_decode($id2);
	if($id3 != ""){ echo "-".utf8_decode($id3); }
	} else {
		if($pagina != "index"){
			echo " - " . $pagina;
		}
	}?></title>
</head>
