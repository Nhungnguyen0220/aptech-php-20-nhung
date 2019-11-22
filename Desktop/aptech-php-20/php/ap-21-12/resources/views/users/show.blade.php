<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<h1 class="text-primary">Day La Nguoi Dung Thu {{$user->id}}</h1>
<h1 class="text-danger">user_name: {{$user->name}}</h1>
<h1 class="text-success">email: {{$user->email}}</h1>
</body>
<div class="ml-5">
<form action="{{asset('/users')}}">
<button type="submit" class="btn btn-primary bordered text-light">come back</button>
</form> 
</div>