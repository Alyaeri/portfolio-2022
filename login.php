<?php
session_set_cookie_params(0);
session_start();

$invalid = " ";


if (isset($_POST['password'])) {
  if ($_POST['password'] == 'Howdy') {
    $invalid = "no";
    $_SESSION['is-user-logged'] = 1;
    header("location:index.php");
    exit;
  } else {
    $invalid = "yes";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/main.css">

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">



  <!-- FONT IMPORTS-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800;900&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

  <title>Rachelle Patman | Senior UX / UI Designer</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>


<body class="login-page">

  <form id="loginForm" action='login.php' method="post" class="form">
    <div id="logo">RACHELLE.</div>
    <p class="logo-tagline">Senior User Experience and User Interface Designer</p>
    <div class="input-wrap">

      <input type="password" name="password" id="password" placeholder="What's the secret word?">
      <button type="submit">➜</button>
    </div>
    <p id="loginInvalid" class="login-invalid <?php echo $invalid ?>">
      <span>
        Nope, that's not it
      </span>
</p>

  </form>



</body>

<script>
  $("#password").on('focus', function() {
    $("#loginInvalid").removeClass("yes");
  });
</script>