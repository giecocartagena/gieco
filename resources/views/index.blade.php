<!DOCTYPE html>
<html>
    <head>
        <title>GIECO Cartagena</title>
        {!! Html::style('css/bootstrap.css') !!}
        <!-- Custom Theme files -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript">
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); }
		</script>
        <!--webfont-->
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>

        {!! Html::script('js/jquery1.min.js') !!}

        <!--start slider -->
        <link rel="stylesheet" href="{{ asset('css/fwslider.css') }}" media="all">
        {!! Html::script('js/jquery-ui.min.js') !!}
        {!! Html::script('js/css3-mediaqueries.js') !!}
        {!! Html::script('js/fwslider.js') !!}
        <!--end slider -->

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

        <!-- Owl Stylesheets -->
        <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />
        {!! Html::script('js/easydropdown.js') !!}
        <!-- javascript -->
		<!-- Script for gallery Here -->
        {!! Html::script('js/jquery.mixitup.min.js') !!}
            <script type="text/javascript">
                $(function () {
                    var filterList = {
                        init: function () {
                            // MixItUp plugin
                            // http://mixitup.io
                            $('#portfoliolist').mixitup({
                                targetSelector: '.portfolio',
                                filterSelector: '.filter',
                                effects: ['fade'],
                                easing: 'snap',
                                // call the hover effect
                                onMixEnd: filterList.hoverEffect()
                            });
                    },

                    hoverEffect: function () {
                        // Simple parallax effect
                        $('#portfoliolist .portfolio').hover(
                            function () {
                                $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                                $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                            },
                            function () {
                                $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                                $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                            }
                        );
                    }
                };

                // Run the show
                filterList.init();
            });
		</script>
		<script type="text/javascript">
            $(document).ready(function() {
                $().UItoTop({ easingType: 'easeOutQuart' });
            });
        </script>
    </head>
    <body>
        <!-- header-section-starts -->
        <div class="header">
            @include('partials.topheader')

			<!-- start slider -->
			<div id="fwslider">
				<div class="slider_container">
					<div class="slide">
                    	<!-- Slide image -->
                        <img src="images/slide-1.jpg" class="img-responsive" alt=""/>
                    	<!-- /Slide image -->
            		</div>

                    <!-- /Duplicate to create more slides -->
                	<div class="slide"  id="Home">
                    	<img src="images/slide-2.jpg" class="img-responsive" alt=""/>
                	</div>
                	<!--/slide -->

                    <!-- /Duplicate to create more slides -->
                	<div class="slide"  id="Home">
                    	<img src="images/slide-3.jpg" class="img-responsive" alt=""/>
                	</div>
                	<!--/slide -->
            </div>
            <div class="timers"></div>
            <div class="slidePrev"><span></span></div>
            <div class="slideNext"><span></span></div>
        </div>
        <!--/slider -->
        <div class="header-bottom">
            <div class="container">
              <div class="title">
                <h1 style="color:#FFFF00">GIECO - Cartagena</h1>
                <h2 style="font-size:1.5em">Grupo de Investigación Epidemiológica y Clínica en Oncología - Universidad de Cartagena</h2>
              </div>
            </div>
        </div>
        </div>
        <!-- header-section-ends -->
        <!-- content-section-starts -->
        <div class="content">

          <div class="clearfix"></div>

        <!-- shop-section-starts -->

      </div>
       <!-- shop-section-ends -->


        </div>
        <!-- content-section-ends-->
        <!-- footer-section-starts -->
        <div class="footer">
            <div class="container">
                <div class="copy-rights">
                    <p>GIECO - Cartagena &copy; 2015  Todos los derechos reservados </p>
                    <p style="font-size: 0.75em">Desarrollo por &nbsp;<a href="http://www.rafaelvarela.com" target="target_blank">Soluciones Integrales de Cómputo</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- footer-section-ends -->

		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </body>
</html>