<?php
    //memorize all form application in variable
    $firstName=filter_input(INPUT_POST, 'first_name');
    $middleName=filter_input(INPUT_POST, 'middle_name');
    $lastName=filter_input(INPUT_POST, 'last_name');
    $listMission=filter_input(INPUT_POST, 'mission');
    $age=filter_input(INPUT_POST, 'age');
    $gender=filter_input(INPUT_POST, 'gender');
    $colorHair=filter_input(INPUT_POST, 'col_hair');
    $colorEye=filter_input(INPUT_POST, 'col_eye');
    $weight=filter_input(INPUT_POST, 'weight');
    $email=filter_input(INPUT_POST, 'email');
    $phone=filter_input(INPUT_POST, 'phone');
    $andress=filter_input(INPUT_POST, 'address');
    $bio=filter_input(INPUT_POST, 'short_bio');
    //text is used to display possible error in form application, default is empty
    $text="";
    //check and give error if one of form application is empty
    if(empty($firstName)) $text="ERROR: First Name is empty";
    if(empty($lastName)) $text="ERROR: Last Name is empty";
    if(empty($listMission)) $text="ERROR: List of desidered Mission is empty";
    if(empty($age)) $text="ERROR: Age is empty";
    if(empty($gender)) $text="ERROR: Gender is empty";
    if(empty($colorHair)) $text="ERROR: Color Hair is empty";
    if(empty($colorEye)) $text="ERROR: Color Eye is empty";
    if(empty($weight)) $text="ERROR: Weight is empty";
    if(empty($email)) $text="ERROR: E-Mail is empty";
    if(empty($phone)) $text="ERROR: Phone Number is empty";
    if(empty($andress)) $text="ERROR: Andress is empty";
    if(empty($bio)) $text="[ERROR]: Biography is empty";
    //check if all application isn't empty except middle name (optional parameter)
    if(!empty($firstName) and  !empty($lastName) and !empty($listMission) and !empty($age) and !empty($gender) and !empty($colorEye) and !empty($colorHair) and !empty($weight) and !empty($phone) and !empty($email) and !empty($andress) and !empty($bio)){
        //db detail
        $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="spaceDB";;
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname); //database connection
        //check if there are error with db connection
        if(mysqli_connect_error()){
            die('Connection Error ('.mysqli_connect_error().')');
        }
        else{
            //check if this application form is already present in DB
            $sql="SELECT * FROM application WHERE email='$email'";
            $result=$conn->query($sql);
			$num_row=$result->num_rows;
            //if isn't present add data in db
            if($num_row==0){
                //add data of form in db 
                $sql="INSERT INTO application (firstName,middleName,lastName,listMission,age,gender,colorHair,colorEye,weight,email,phoneNumber,address,biography) values ('$firstName','$middleName','$lastName','$listMission','$age','$gender','$colorHair','$colorEye','$weight','$email','$phone','$andress','$bio')";
                if($conn->query($sql)){
                 $text="The form application is sended :)";
                }
                else{
                    $text= "Error: ".$sql."<br>".$conn->error;   
                }
            }
            else{ //if is present already in the database
                $text="You have already send the form application";
            }
            $conn->close();  
        }

    }
?>
<!doctype html>
    <html lang="eng">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <title>List Application</title>
            <meta name="description" content="List of the application sent">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="Author" content="Daniele Pagano">
            <meta name="Author" content="Oliver Terzo">
            <meta name="Author" content="Matteo Fasano">
            <!-- Flaticon -->
            <link rel="shortcut icon" href="img/logo.svg" /> 
            <!-- External CSS -->
            <link rel="stylesheet" href="css/normalized.css">
            <link rel="stylesheet" href="css/main.css">
            <!--css join-us and list-application-->
            <link rel="stylesheet" href="./css/join-us.css">
            <link rel="stylesheet" href="./css/list-application.css">
            <!-- Fonts-->
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,100&display=swap" rel="stylesheet">
            <!-- JQUERY -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        </head>
        <body>
            <div id="page-container">
                <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
                <![endif]-->
                <!-- Navigation menu -->
                <nav class="navigation">
                    <!-- Logo -->
                    <div class="nav-logo">
                        <a href="homepage.html"><img src="img/logo.svg"></a>
                        <a href="homepage.html">MOD-Space</a><!-- link to the homepage.html page -->
                    </div>
                    <!-- Links -->
                    <ul class="nav-menu">
                        <li><a href="about.html">About-us</a></li><!-- link to about.html page -->
                        <li><a href="gallery.html">Gallery</a></li><!-- link to galley.html page -->
                        <li><a href="join-us.html">Join-us</a></li><!-- link to join-us.html page -->
                        <li><a href="astronauts.html">Astronauts</a></li><!-- link to astronauts.html page -->
                        <li><a href="missions.html">Mission</a></li><!-- link to missions.html page -->
                    </ul>
                    <!-- Icon -->
                    <div class="nav-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                    <div class="nav-overlay"></div>
                </nav>
                <div id="content-wrap-top"></div>
                <!-- Go all the code for elements that are not yet initialized-->
                <div class="container-list-application">
                    <div class="header-list">List of Application</div>
                    <div>
                        <span>First Name: <?php echo $firstName ?></span>
                        <span>Middle Name: <?php echo $middleName ?></span>
                        <span>Last Name: <?php echo $lastName ?></span>
                        <span>List of desidered Mission: <?php echo $listMission ?></span>
                        <span>Age: <?php echo $age ?></span>
                        <span>Gender: <?php echo $gender ?></span>
                        <span>Color Hair: <?php echo $colorHair ?></span>
                        <span>Color Eye: <?php echo $colorEye ?></span>
                        <span>Weight: <?php echo $weight ?>kg</span>
                        <span>E-Mail: <?php echo $email ?></span>
                        <span>Phone-number: <?php echo $phone ?></span>
                        <span>Andress: <?php echo $andress ?></span>
                        <span>Biography: <?php echo $bio ?></span>
                    </div>
                    <div class="error-log"><?php echo $text; ?></div>
                </div>
                <div id="content-wrap-bottom"></div>
                <footer id="footer">
                    <div class="footer-left">
                        <img src="img/logo.svg"></img>
                        <span>MOD-Space</span>
                    </div>
                    <div class="footer-middle">
                        <a href="https://twitter.com"><img src="img/twitter.svg"></a>
                        <a href="https://instagram.com"><img id="instagram" src="img/instagram.svg"></a>
                        <a href="https://facebook.com"><img src="img/facebook.svg"></a>
                    </div>
                    <div class="footer-right">
                        <div class="email_logo">
                            <a id="email" href= "mailto:mod.space@gmail.com">mod.space@gmail.com</a>
                            <img src="img/email.svg">
                        </div>
                        <div class="tel_logo">
                            <a id="tel" href="tel:+3936535488971">365 354 88971</a>
                            <img src="img/tel.svg">
                        </div>                       
                    </div>   
                </footer>
                <script src="js/main.js"></script>
                <script src="js/join-us.js"></script>
            </div>
        </body>
    </html>