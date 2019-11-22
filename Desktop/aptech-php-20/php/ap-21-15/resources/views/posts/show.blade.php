<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<h1 class="text-primary">Day La Bai Viet Thu {{$post->id}}</h1>
<h1 class="text-danger">Title: {{$post->title}}</h1>
<h1 class="text-success">Description: {{$post->description}}</h1>
<h1 class="text-success">Content: {{$post->content}}</h1>
</body>
<div class="ml-5">
<form action="{{asset('/posts')}}">
<button type="submit" class="btn btn-primary bordered text-light">come back</button>
</form> 
</div>