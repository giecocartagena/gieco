<div class="top-header">
    <div class="container">
        <div class="logo">
            <a href="/"><img src="{{asset('images/logo.png')}}" class="img-responsive" alt="" /></a>
        </div>
        <div class="top-menu">
            <span class="menu"> </span>
            <ul>
                <li class="active"><a href="/">INICIO</a></li>
                <li><a href="/nosotros">NOSOTROS</a></li>
                <li><a href="/admin">REGISTRO</a></li>
                <li><a href="/contactenos">CONTACTENOS</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
         <!--script-nav-->
         <script>
             $("span.menu").click(function(){
                $(".top-menu ul").slideToggle("slow" , function(){
                });
             });
         </script>
         <!--script-nav-->
    </div>
</div>