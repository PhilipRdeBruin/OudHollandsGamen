
<!DOCTYPE html>
<html lang="nl">

   <head>
        @include('includes.head')
   </head>

    <body>
        @include('includes.nav')

        <section class="content">
            @yield('content')
        </section>
        
        <!-- @include('includes.vraag') -->

        @include('includes.scriptsrcs')
    </body>
</html>