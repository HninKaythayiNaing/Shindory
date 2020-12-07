<?php require_once('header.php'); ?>
    <title>Login -Shindory</title>
    <head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<script type="text/javascript" src="login.js"> </script>
    
<script src="assets/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<link rel="stylesheet" type="text/css" href="style2.css">

    </script>


<?php  ?>
</head>
<body>
     <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'success') { ?>
    <script>
        Swal.fire(
            '',
            'User successfully registered!',
            'success'
        )
    </script><?php } ?>
    <img src="image/Logo.png" class="logo">


    <form class="loginformstyle" action="loginCheck3.php" method="post" onsubmit="return validate(this);">
       
        <div class="logincontainer">
       
        <input type="text" id="inputEmail" required="" placeholder="Enter email" name="email"><br><br>
        <input type="password" id="inputPassword" required="" placeholder="Password"
                   name="password" >
       
        <?php  ?><br><br></input>
      
        <button class="lsbtn" type="submit">Log in</button><br>
        <a href="signin.html"><button type="button" class="lsbtn">Sign Up</button></a><?php ?></div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--    <a class="forgot-password" href="#">Forgot your password?</a>-->
    </body>
</html>