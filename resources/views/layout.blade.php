<!DOCTYPE html>
<html>
    <head>
        <title>GIECO Cartagena</title>
        {!! Html::style('css/bootstrap.css') !!}
        <!-- Custom Theme files -->
        {!! Html::style('css/style.css') !!}

        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript">
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); }
        </script>

        <!--webfont-->
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700' rel='stylesheet' type='text/css'>

		{!! Html::script('js/jquery1.min.js') !!}
        {!! Html::script('js/move-top.js') !!}
        {!! Html::script('js/easing.js') !!}
        <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>

    </head>
    <body>

        <!-- header-section-starts -->
        <div class="header">
            @include('partials.topheader')

            <div class="blog-header-bottom">
                <div class="container">
                    <div class="blog-post">
                        <h1>@yield('tituloprincipal','CATEGORIAS DE PRODUCTOS')</h1>
                        <p>@yield('encabezado')</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-section-ends -->
        <!-- content-section-starts -->
        <div class="blog-content">
			  <div class="container">
              		<!-- Aqui va el contenido ::INICIO::-->
                    @yield('contenido')
                    <!-- Aqui va el contenido ::FIN::-->
              </div>
          </div>
        <!-- content-section-ends-->

        <!-- footer-section-starts -->
        <div class="footer">
            <div class="container">
                <div class="copy-rights">
                    <p>Gieco Cartagena &copy; 2015  Todos los derechos reservados </p>
                    <p style="font-size: 0.75em">Desarrollo por &nbsp;<a href="http://www.rafaelvarela.com" target="target_blank">Soluciones Integrales de Cómputo</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- footer-section-ends -->
        <script type="text/javascript">
			$(document).ready(function() {
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>

		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </body>
</html>