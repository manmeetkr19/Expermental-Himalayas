<!DOCTYPE html>
<html>
<head>
<title>Sign in</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    body{
        background: url(https://cdn.hipwallpaper.com/i/12/24/J8qi3w.jpg);
        
        background-size: cover;
        background-position: center;
    }
    .loginbox{
        max-width: 800px;
        float:none;
        margin: 200px auto;
    }
 </style>
</head>
<body>
<div class="container">
    <div class="loginbox"> 
    <div class="row">
        <div class="col-md-6">
            <h2>Sign In</h2>
            <form action="validate.php" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>   

            </form>
    </div>
    </div>
</div> 
</body>
</html>