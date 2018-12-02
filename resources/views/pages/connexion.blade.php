<!------ Include the above in your HEAD tag ---------->
<?php
  use App\Http\Controllers ;
?>

<html>
  <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/style.css" />
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">
<div class="login-form">
<div class="main-div">
    <div class="panel">
  <img src = "image/FFE.png" style="height:100px">
 <br></br>
 <p>Entrez vos identifiants de connexion</p>
   </div>
    <form action='' method="POST" id="Login">
      <input type='hidden' name="_token" value="{{ csrf_token() }}">

        <div class="form-group">


            <input type="email" class="form-control" name ="login" id="inputEmail" placeholder="Login">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" name="psw" id="inputPassword" placeholder="Mot de passe">

        </div>
        <div class="forgot">
        <a href="reset.html">Vous avez oublié votre mot de passe ?</a>
</div>
        <button type="submit" name ="boutton_connect" class="btn btn-primary">Connexion</button>
    </form>
    </div>

</div></div></div>


</body>
</html>
