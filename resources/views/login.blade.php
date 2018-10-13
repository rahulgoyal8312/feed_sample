<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin login</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="login">
  <div class="heading">
    <h2>Sign in</h2>
    <form action="/" method="post">
    	{{csrf_field()}}
      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" name="email" placeholder="Email">
          </div>
          <br>
        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <br>
        <button type="submit" class="float">Login</button>
        <button type="submit" class="float"><a href="/register">Register</a></button>
       </form>
 		</div>
       @include('Error.error')
 </div>
</body>
</html>