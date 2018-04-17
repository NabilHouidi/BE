<!DOCTYPE html>
<html>
<head>
	<title>login</title>
      <link rel="stylesheet" href="../stylesheets/style.css">
  <link rel="stylesheet" href="../stylesheets/bootstrap.min.css"  type="text/css">

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<script src="../stylesheets/bootstrap.min.js" ></script>
  <script src="../stylesheets/form.js"></script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
<span class="navbar-brand mb-0 h1">welcome</span>
</nav>
<div class="roww">
<div class="coll">
    <h3>login</h3>

    <form action="../php/login-action.php" method="post">
        <div class="input">
            <label for="username">votre nom</label>
            <input type="text" class="form-control"  id="username" name="username">
        </div>
        <div class="input">
            <label for="pass">votre password</label>
            <input type="password" class="form-control" value="pass" id="pass" name="pass">
        </div>
        
        <input type="checkbox" class="" value="remember" id="remember" name="remember"> Remember Me <br>

        <button type="submit" class="btn btn-outline-info">login</button>
    </form>
</div>
</div>

</body>
</html>
