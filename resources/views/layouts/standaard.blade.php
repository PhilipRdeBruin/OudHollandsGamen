
<!DOCTYPE html>
<html lang="nl">

   <head>
        @include('includes.head')
   </head>

<<<<<<< HEAD
    <body>
        @include('includes.nav')

        <section class="content">
            @yield('content')
        </section>
        
        @include('includes.vraag')

        @include('includes.scriptsrcs')
=======
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
>>>>>>> 3ebce3fd45ff075d1c2681fa3559bfdfae4829eb
    </body>
</html>