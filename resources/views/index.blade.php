
<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Lato:900" rel="stylesheet">
        <link rel = "stylesheet" href = "{{ asset('css/ohg.css') }}"/>
    </head>
    <body>
        <div class="myVideo">
            <video src="{{asset('mp4/chess.mp4')}}" type="video/mp4" autoplay muted loop></video>
        </div>
        <div id="index">
            <div id="ohg"><h1>Oud Hollands Gamen</h1></div>
            <div id="slogan"><p><i>&#8220;De nieuwe spellen sensatie op het internet&#8221;</i></p></div>
            <div id="landr">
                <div id="login" onclick="location.href = '/login'"><p>Aanmelden</p></div>
                <div id="register" onclick="location.href = '/register'"><p>Registreren</p></div>
            </div>
        </div>
    </body>
</html>
