<!DOCTYPE html>
<html lang="en">
<head>
<title>Register</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="login">
  <div class="heading">
    <h2>Register</h2>
    <form action="/register" method="post">
    	{{csrf_field()}}
      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" name="name" placeholder="Name">
          </div>
      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" name="email" placeholder="Email">
          </div>
        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" name="role" placeholder="admin(1) otherwise (0)">
          </div>
        <br>
        <button type="submit" class="float">Submit</button>
       </form>
 		</div>
       @include('Error.error')
 </div>
</body>
</html>