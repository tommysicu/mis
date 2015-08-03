<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Kotta+One|Cantarell:400,700" rel="stylesheet" type="text/css">
        <style>
            html, body
            {
                margin:0;
            }

            h1
            {
                //font-family: arial, sans-serif;
                font: 30px "Cantarell", sans-serif;
                //font-size:16px;
                color:#efecec;
                
            }

            .overlay
            {
                //position:absolute;
                top:70px;
                left:0;
                padding:20px 50px 20px 50px;
                background-color:#000;
                opacity:0.55;
                filter:alpha(opacity=35); 
                z-index:2; 


                width: 400px;
                height:200px;

                text-align: center;
                position: fixed;
                top: 60%;
                left: 50%;
                margin-left:-200px;
                margin-top:-50px;

                
            }


            .videoContainer 
            {
                width: 100%;
                height:auto;
            }

        </style>
    </head>
    <body>
        <div class="overlay">
            <strong><h1>Bienvenido al MIS!<br></strong> Para terminar: <br><a href="pagina3.php"><strong>Defini tu equipo!</a></h1></strong>
        </div>
        <div class="videoContainer Container">

            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/n1um9CJ5Or4"></iframe>
            </div>

        </div>
    </body>
</html>