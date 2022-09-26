<?php
session_set_cookie_params(0);
session_start();

$invalid = " ";

if (isset($_POST['password'])) {
  if ($_POST['password'] == 'howdy') {
    $invalid = "no";
    $_SESSION['is-user-logged'] = 1;
    header("location:index.php");
    exit;
  } else {
    $invalid = "yes";
  }
}
