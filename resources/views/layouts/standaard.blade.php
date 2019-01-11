
<!DOCTYPE html>
<html lang="nl">

   <head>
        @include('includes.head')
   </head>

    <body>
    
           @include('includes.nav')
<!--        <img src="/afbeeldingen/compilatie1.png" id = "compilatie">  -->

       <section class="content">
           @yield('content')
       </section>

<!--
       <footer class="footer">
            @include('includes.footer')
       </footer>
-->

       @include('includes.scriptsrcs')
    </body>
</html>