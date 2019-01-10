
<!DOCTYPE html>
<html lang="nl">

    <head>
	    @include('includes.head')
    </head>

	<body>
<<<<<<< HEAD
        @include('includes.nav')
        
=======
        <nav class="navbar navbar-light navbar-expand-lg navbar-mpl fixed-top">
            @include('includes.nav')
        </nav>
        <img src="/afbeeldingen/compilatie1.png" id = "compilatie">

>>>>>>> 76cf5e8dfa26f019ccc0bee892e68a9f5f90a500
        <section class="content">
            @yield('content')
            <style>.card {
            margin-bottom:15px;
            }
            </style>    
        </section>

<!--
        <footer class="footer">
		    @include('includes.footer')
        </footer>
-->

        @include('includes.scriptsrcs')
	</body>
</html>
