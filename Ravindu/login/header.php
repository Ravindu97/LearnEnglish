<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>


    <header>

      <form action="includes/login.inc.php" method="post">
        <input type="text" name="mailuid" placeholder="Enter UserName / Password">
        <input type="password" name="password" placeholder="Enter Password">
        <button type="submit" name="login-submit">Login</button>
      </form>

        <a href="signup.php">Sign up</a>

        <form action="includes/logout.inc.php" method="post">
        <button type="submit" name="logout-submit">Logout</button>

        </form>


    </header>
