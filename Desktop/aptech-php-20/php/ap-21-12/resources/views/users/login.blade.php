<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="h-100">
<div class="container bg-light text-center h-100">
<h1 class="text-center text-success pt-3 pb-3"> DANG NHAP </h1>
<form class="w-50 container bordered shadow pb-2 text-center" action="{{asset('/users/checklogin')}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}"> 
    <table class="w-100 "> 
  <div class="form-group ">
  <tr>
   <td> <label for="email">Email address:</label></td>
   <td> <input class ="w-100" type="email" class="form-control" placeholder="Enter email" name='email' id="email"></td>
    </tr>
  </div>
  <div class="form-group">
  <tr>
    <td><label for="pwd">Password:</label></td>
    <td><input class="w-100" type="password" class="form-control" placeholder="Enter password" name='password' id="pwd"></td>

  <tr>
    </div>
  <td> </td>
  <td class="text-center pt-2 d-inline-flex">
 <div class="ml-5"><button type="submit" name='login' class="btn btn-success">LOGIN</button> </div>
 

 </form> 




</tr>
</table>
</div>
</body>
 