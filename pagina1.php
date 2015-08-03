<?php
//register.php

require_once 'includes/global.inc.php';

//initialize php variables used in the form
$username = "";
$password = "";
$password_confirm = "";
$email = "";
$error = "";

//check to see that the form has been submitted
if (isset($_POST['submit-form'])) {

    //retrieve the $_POST variables
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password-confirm'];
    $email = $_POST['email'];

    //initialize variables for form validation
    $success = true;
    $userTools = new UserTools();

    //validate that the form was filled out correctly
    //check to see if user name already exists
    if ($userTools->checkUsernameExists($username)) {
        $error .= "That username is already taken.<br/> \n\r";
        $success = false;
    }

    //check to see if passwords match
    if ($password != $password_confirm) {
        $error .= "Passwords do not match.<br/> \n\r";
        $success = false;
    }

    if ($success) {
        //prep the data for saving in a new user object
        $data['username'] = $username;
        $data['password'] = md5($password); //encrypt the password for storage
        $data['email'] = $email;

        //create the new user object
        $newUser = new User($data);

        //save the new user to the database
        $newUser->save(true);

        //log them in
        $userTools->login($username, $password);

        //redirect them to a welcome page
        header("Location: pagina2.php");
    }
}

//If the form wasn't submitted, or didn't validate
//then we show the registration form again
?>



<?php
//login.php
//require_once 'includes/global.inc.php';

$error = "";
$username = "";
$password = "";

//check to see if they've submitted the login form
if (isset($_POST['submit-login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $userTools = new UserTools();
    if ($userTools->login($username, $password)) {
        //successful login, redirect them to a page
        //header("Location: pagina2.php");
        echo'<script> location.replace("pagina2.php"); </script>';
        
    } else {
        $error = "Incorrect username or password. Please try again.";
    }
}
?>






<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Modulo Integral Sanitario</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="/finalhdm/images/favicon.ico" type="image/x-icon" />
        <link href="http://fonts.googleapis.com/css?family=Kotta+One|Cantarell:400,700" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Not required: presentational-only.css only contains CSS for prettifying the demo -->
        <link rel="stylesheet" href="css/presentational-only.css">

        <!-- responsive-full-background-image.css stylesheet contains the code you want -->
        <link rel="stylesheet" href="/finalhdm/css/responsive-full-background-image.css">

        <!-- Not required: jquery.min.js and presentational-only.js is only used to demonstrate scrolling behavior of the viewport  -->
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="/finalhdm/js/presentational-only.js"></script>
        

    </head>
    <body>

        <header class="container">
            <section class="content">
                <h1>Modulo Integral Sanitario</h1>
                <p class="sub-title"><strong>Gracias por interesarte en el proyecto!</strong> <br />Completa la informacion para participar </p>
                <p><a class="button" id="load-more-content" href="#top">Inscribirme!</a></p>


                <!-- Some content to demonstrate viewport scrolling behavior -->
                <div id="more-content">
                    <blockquote>
                        <?php echo ($error != "") ? $error : ""; ?>
                        <form action="pagina1.php" method="post">

                            Username: <input type="text" value="<?php echo $username; ?>" name="username" /><br/>
                            Password: <input type="password" value="<?php echo $password; ?>" name="password" /><br/>
                            Password (confirm): <input type="password" value="<?php echo $password_confirm; ?>" name="password-confirm" /><br/>
                            E-Mail: <input type="text" value="<?php echo $email; ?>" name="email" /><br/>
                            <input type="submit" value="Register" name="submit-form" />

                        </form>

                        <?php if (isset($_SESSION['logged_in'])) : ?>
                            <?php $user = unserialize($_SESSION['user']); ?>
                            Hello, <?php echo $user->username; ?>. You are logged in. <a href="logout.php">Logout</a> | <a href="settings.php">Change Email</a>
                        <?php else : ?>
                            Si ya sos miembro, inicia sesion aqui: 
                        <?php endif; ?>
                        <form action="pagina1.php" method="post">
                            Username: <input type="text" name="username" value="<?php echo $username; ?>" /><br/>
                            Password: <input type="password" name="password" value="<?php echo $password; ?>" /><br/>
                            <input type="submit" value="Login" name="submit-login" />
                        </form>
                    </blockquote>
                </div>
            </section>
        </header>
    </body>
</html>