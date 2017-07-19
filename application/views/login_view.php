<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/admin.css" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar">
    <p> Gudiva Online Libabry</p>
</nav>

<div id="form_container">
    <form>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" name="Password" placeholder="Password">
        </div>
        <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>
        <button type="submit" class="btn" style="background-color:rgba(202, 25, 85, 0.82);color: white ">Login</button>
    </form>
</div>


<div id="footer">
    <p>Gudiva &nbsp; &copy; <?php  echo date("Y") ?></p>
</div>
<!-- jQuery -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
