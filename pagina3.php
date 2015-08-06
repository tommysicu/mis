<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="css/sticky-footer.css" rel="stylesheet">
        <style>
            #panelpilotes, #paneltecho, #panelsanitarios, #panelpilotes2, #paneltecho2, #panelsanitarios2,#panelpilotes2c, #paneltecho2c, #panelsanitarios2c,#panelpilotesc, #paneltechoc, #panelsanitariosc {
                padding: 50px;
                display: none;
            }

            .activo {outline-style:solid;outline-color:red;}
            @media only screen and (max-width:768px){
                .grande{
                    display: none;
                }
            }
            @media only screen and (min-width:768px){
                .chico{
                    display: none;
                }
            }
        </style>
        <script>
            $(document).ready(function () {
                $("#icopilotes").click(function () {
                    $("#panelpilotes").slideToggle("slow");
                    $("#icopilotes").toggleClass("activo");
                });
            });
            $(document).ready(function () {
                $("#icotecho").click(function () {
                    $("#paneltecho").slideToggle("slow");
                    $("#icotecho").toggleClass("activo");
                });
            });
            $(document).ready(function () {
                $("#icosanitarios").click(function () {
                    $("#panelsanitarios").slideToggle("slow");
                    $("#icosanitarios").toggleClass("activo");
                });
            });
            //para el otro media query
            $(document).ready(function () {
                $("#icopilotes2").click(function () {
                    $("#panelpilotes2").slideToggle("slow");
                    $("#icopilotes2").toggleClass("activo");
                });
            });
            $(document).ready(function () {
                $("#icotecho2").click(function () {
                    $("#paneltecho2").slideToggle("slow");
                    $("#icotecho2").toggleClass("activo");
                });
            });
            $(document).ready(function () {
                $("#icosanitarios2").click(function () {
                    $("#panelsanitarios2").slideToggle("slow");
                    $("#icosanitarios2").toggleClass("activo");
                });
            });
            $(document).ready(function () {
                $("#icopilotesc").click(function () {
                    $("#panelpilotesc").slideToggle("slow");
                    $("#icopilotesc").toggleClass("activo");
                });
            });
            $(document).ready(function () {
                $("#icotechoc").click(function () {
                    $("#paneltechoc").slideToggle("slow");
                    $("#icotechoc").toggleClass("activo");
                });
            });
            $(document).ready(function () {
                $("#icosanitariosc").click(function () {
                    $("#panelsanitariosc").slideToggle("slow");
                    $("#icosanitariosc").toggleClass("activo");
                });
            });
            //para el otro media query
            $(document).ready(function () {
                $("#icopilotes2c").click(function () {
                    $("#panelpilotes2c").slideToggle("slow");
                    $("#icopilotes2c").toggleClass("activo");
                });
            });
            $(document).ready(function () {
                $("#icotecho2c").click(function () {
                    $("#paneltecho2c").slideToggle("slow");
                    $("#icotecho2c").toggleClass("activo");
                });
            });
            $(document).ready(function () {
                $("#icosanitarios2c").click(function () {
                    $("#panelsanitarios2c").slideToggle("slow");
                    $("#icosanitarios2c").toggleClass("activo");
                });
            });

        </script>
    </head>
    <body>
        <!--        <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">WebSiteName</a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">Page 1</a></li>
                                <li><a href="#">Page 2</a></li>
                                <li><a href="#">Page 3</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>-->
        <div class="container" style=" height:100%">
            <h1>El <strong> Modulo Integral Sanitario!</strong> <small> Descubrilo</small></h1>

        </div>
        <br>
        <div class="container grande">
            <div class="row">
                <div class="col-sm-4">
                    <h2>Thumbnail</h2>
                    <img id="icopilotes" src="images/kids.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                </div>
                <div class="col-sm-4">
                    <h2>Este</h2>
                    <img id="icotecho" src="images/kids.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                </div>
                <div class="col-sm-4">
                    <h2>Thumbnail</h2>
                    <img id="icosanitarios" src="images/kids.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                </div>
                <div class="col-sm-12" id="panelpilotes">
                    <h1>Descripcion del Rol</h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate.</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <h1>Herramientas</h1>
                            <ul>
                                <li>Martillo</li>
                                 <img src="cinqueterre.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                                <li>Martillo</li>
                                 <iframe width="304" height="236" src="https://www.youtube.com/embed/DoeEwBJJ5u8" frameborder="0" allowfullscreen></iframe>
                                <li>Martillo</li>
                                 <img src="cinqueterre.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                                <li>Martillo</li>
                                 <iframe width="304" height="236" src="https://www.youtube.com/embed/DoeEwBJJ5u8" frameborder="0" allowfullscreen></iframe>
                                <li>Martillo</li>
                                 <img src="cinqueterre.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                               
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <h1>Lista de Materiales</h1>
                            <ul>
                                <li>Martillo</li>
                                 <img src="cinqueterre.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                                <li>Martillo</li>
                                 <img src="cinqueterre.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                                <li>Martillo</li>
                                 <img src="cinqueterre.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                                <li>Martillo</li>
                                 <img src="cinqueterre.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                                <li>Martillo</li>
                                 <img src="cinqueterre.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                                
                            </ul>
                        </div>
                    </div>
                    <h1>Paso a paso</h1>
                    <ol>
                        <li>Martillo</li>
                        <li>Martillo</li>
                        <li>Martillo</li>
                        <li>Martillo</li>
                        <li>Martillo</li>
                        <li>Martillo</li>
                        <li>Martillo</li>
                    </ol>
                </div>
                <div class="col-sm-12" id="paneltecho" >Hello techo!</div>
                <div class="col-sm-12" id="panelsanitarios" >Hello world!</div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <h2>Thumbnail</h2>
                    <img id="icopilotes2" src="images/kids.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                </div>
                <div class="col-sm-4">
                    <h2>Este</h2>
                    <img id="icotecho2" src="images/kids.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                </div>
                <div class="col-sm-4">
                    <h2>Thumbnail</h2>
                    <img id="icosanitarios2" src="images/kids.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                </div>
                <div class="col-sm-12" id="panelpilotes2">
                    <h1>Descripcion del Rol</h1>
                    <h1>Herramientas</h1>
                    <h1>Lista de Materiales</h1>
                    <h1>Paso a paso</h1>

                </div>
                <div class="col-sm-12" id="paneltecho2" ></div>
                <div class="col-sm-12" id="panelsanitarios2" >Hello world!</div>
            </div>
            <br>
            <a href="www.google.com"><button type="button" class="btn btn-default center-block">Default</button></a>
        </div>
        <div class="container chico">
            <div class="row">
                <div class="col-sm-4">
                    <h2>Thumbnail</h2>
                    <img id="icopilotesc" src="images/log.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                </div>
                <div class="col-sm-12" id="panelpilotesc">Hello pilotes!</div>
                <div class="col-sm-4">
                    <h2>Este</h2>
                    <img id="icotechoc" src="images/log.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                </div>
                <div class="col-sm-12" id="paneltechoc" >Hello techo!</div>
                <div class="col-sm-4">
                    <h2>Thumbnail</h2>
                    <img id="icosanitariosc" src="images/log.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                </div>
                <div class="col-sm-12" id="panelsanitariosc" >Hello world!</div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <h2>Thumbnail</h2>
                    <img id="icopilotes2c" src="images/log.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                </div>
                <div class="col-sm-12" id="panelpilotes2c">Hello pilotes!</div>
                <div class="col-sm-4">
                    <h2>Este</h2>
                    <img id="icotecho2c" src="images/log.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                </div>
                <div class="col-sm-12" id="paneltecho2c" >Hello techo!</div>
                <div class="col-sm-4">
                    <h2>Thumbnail</h2>
                    <img id="icosanitarios2c" src="images/log.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                </div>
                <div class="col-sm-12" id="panelsanitarios2c" >Hello world!</div>
            </div>
            <button type="button" class="btn btn-default center-block">Default</button>
        </div>





        <!--        <div class="container" style="height:100%">
                    <h3>Durante la <strong>construccion...</strong> ¿De que <strong>equipo</strong> querés ser?</h3>
                    <div class="row">
                        <div class="col-xs-4"> 
                            <a href="Pilotes.html">
                                <h4>Pilotes</h4>
                                <img src="images/log.png" class="img-thumbnail" alt="Pilotes" width="304" height="236">
                            </a>
                        </div>
                        <div class="col-xs-4"> 
                            <h4>Paredes</h4>
                            <img src="images/wall.png" class="img-thumbnail" alt="Pilotes" width="304" height="236">
                        </div>
                        <div class="col-xs-4"> 
                            <h4>Pilotes</h4>
                            <img src="images/roof.png" class="img-thumbnail" alt="Pilotes" width="304" height="236">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4"> 
                            <a href="Pilotes.html">
                                <h4>Pilotes</h4>
                                <img src="images/taps.png" class="img-thumbnail" alt="Pilotes" width="304" height="236">
                            </a>
                        </div>
                        <div class="col-xs-4"> 
                            <h4>Paredes</h4>
                            <img src="images/electricity.png" class="img-thumbnail" alt="Pilotes" width="304" height="236">
                        </div>
                        <div class="col-xs-4"> 
                            <h4>Pilotes</h4>
                            <img src="images/kids.png" class="img-thumbnail" alt="Pilotes" width="304" height="236">
                        </div>
                    </div>
                </div>-->
        <br>
        <!--        <footer class="footer">
                    <div class="container">
                        <p class="text-muted">Otro proyecto de HdM</p>
                    </div>
                </footer>-->
    </body>
</html>