
<!DOCTYPE html>
<html lang="nl">

    <head>
	    @include('includes.head')
    </head>

	<body>
        @include('includes.nav')
        
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
