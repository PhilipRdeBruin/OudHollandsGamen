
<!DOCTYPE html>
<html lang="nl">

   <head>
        @include('includes.head')
   </head>

	<body>
        @include('includes.nav')
        

        <!--<img src="/afbeeldingen/compilatie1.png" id = "compilatie">-->

        <section class="content">
            @yield('content')
            <style>
            .card {
                margin-bottom:15px;
            }
            </style>    
        </section>



       @include('includes.scriptsrcs')
    </body>
</html>