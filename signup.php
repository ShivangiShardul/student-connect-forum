<?php
    session_start();
    
    if( isset($_SESSION['user'])){
        header("Location: profile.php");
    }
    include('connect.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student Connect</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <script src="https://use.fontawesome.com/b3a33e0934.js"></script>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
        <link rel="icon" href="icon1.png" >
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    </head>
    <body id="_6">
        <body class="index">
        <nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top nav-diff">
            <a class="navbar-brand" href="/"><img src="logo 3.png"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav nav-text">
                    <a class="nav-item nav-link" href="index.php"><li>Home</li></a>
                    <a class="nav-item nav-link" href="categories.php"><li>Categories</li></a>
                    <a class="nav-item nav-link" href="contacts.php"><li>Contact</li></a>
                </div>
                <div class="navbar-nav ml-auto nav-text">
                    <?php 
                        if(! isset($_SESSION['user'])){
                    ?>
                            <a class="nav-item nav-link" href="signup.php"><li>Sign Up</li></a>
                            <a class="nav-item nav-link" href="login.php"><li>Login</li></a>
                    <?php
                        }
                        else{
                    ?>          
                            <a class="nav-item nav-link" href="profile.php"><li>Profile</li></a>
                            <a class="nav-item nav-link" href="logout.php"><li>Logout</li></a>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </nav>
        <div>
            <div id="sf">
                <div class="mob-view-signup">
                     <div>
                        <img class="signup-img" src=data:image/jpeg;base64,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>
                        <p id="tag-line" class="tag-line-signup">Ask your queries, Help others by posting answers, Boost your knowledge</p>
                    </div>
                    <form class="mob-form" action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post" enctype="multipart/form-data">
                        <input name="username" id="user" type="text" title="This will be your parmanent Id." placeholder="Create a Unique Username" required>
                        <input name="password" id="key" type="password" title="Password must contain at least 8 characters including alphabets,numbers, and symbols." placeholder="Create a Strong Password" required>
                        <i class="material-icons" id="lock">lock</i>
                        <i class="material-icons" id="person">person</i>
                        <input name="name" id="name" type="text" title="Although, you will be called by your name only" placeholder="Enter your Full Name" required>
                        <input name="email" id="mailbox" type="email" title="Your Email id is in safe hands." placeholder="Enter your Email Id" required>
                        <i class="material-icons" id="email">mail</i>
                        <i class="material-icons" id="iden">perm_identity</i>
                        <div id="button-block">
                            <div>
                                <div ><input class="buttons btn btn-dark mob-btn-signup" name="submit" type="submit" value="Create An Account" class="up-in"></div>
                                <div id="new"><input class="buttons btn btn-dark mob-btn-login" type="button" value="Already a member : Log In" class="up-in" id="tolog"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="ta">
                <h1>Thank You For Registering With Us.</h1>
            </div>
        </div>
        <?php
        
            if( isset( $_POST["submit"] ) )
            {

                function valid($data){
                    $data=trim(stripslashes(htmlspecialchars($data)));
                    return $data;
                }

                $username = valid( $_POST["username"] );
                $password = valid( $_POST["password"] );
                $password = password_hash($password, PASSWORD_DEFAULT);
                $name = valid( $_POST["name"] );
                $email = valid( $_POST["email"] );

                $query = "INSERT INTO users values( NULL, '$username', '$password', '$name', '$email', CURRENT_TIMESTAMP )";
                if(mysqli_error($conn)){
                    echo "<script>window.alert('Something Goes Wrong. Try Again');</script>";
                }
//              echo $query;
                else if( mysqli_query( $conn, $query) ){
                    echo "<style>#sf{display: none;} #ta{display:block;}</style>";
                }
                else{
                    echo "<script>window.alert('Username Already Exist !! Try Again');</script>";
                }
                mysqli_close($conn);
            }
        ?>
        <!-- Sripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery-3.2.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/script.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        
    </body>
    
</html>