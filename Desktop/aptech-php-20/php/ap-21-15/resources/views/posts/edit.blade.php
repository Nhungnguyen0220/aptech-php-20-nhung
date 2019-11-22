<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="h-100"> 
<div class="container bg-light text-center h-100">
<h1 class="text-center text-success pt-3 pb-3"> EDIT POST </h1>
<form class="w-50 container bordered shadow pb-2 text-center" action="{{route('posts.update',$post->id)}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="_method" value="PUT">
    <table class="w-100 "> 
  <div class="form-group pt-2">
  <tr>
    <td><label for="title">Title:</label></td>
    <td><input class ="w-100" type="text" class="form-control" placeholder="Enter title" name='title' value="{{$post ->title}}"></td>
    </tr>
  </div>
  <div class="form-group ">
  <tr>
   <td> <label for="description">Description:</label></td>
   <td> <textarea class ="form-control w-100" type="text"  placeholder="Enter description" name='description' >{{$post -> description}}</textarea></td>
    </tr>
  </div>
  <div class="form-group">
  <tr>
    <td><label for="pwd">Content:</label></td>
    <td><textarea class="w-100 form-control" type="text"   placeholder="Enter content" name='content' rows="15" >{{$post ->content}}</textarea></td>

  <tr>
    </div>
  <td> </td>
  <td class="text-center pt-2 d-inline-flex">
 <div class="ml-5"><button type="submit" name='Register' class="btn btn-success">OK update</button> </div>
</form>
<div class="ml-5">
<form action="{{asset('/posts/'.$post->id.'/edit')}}">
<button type="submit" class="btn btn-primary bordered text-light">Reset</button>
</form> 
</div>
<div class="ml-5">
<form action="{{asset('/posts')}}">
<button type="submit" class="btn btn-dark bordered text-light">come back</button>
</form> 
</td>
</tr>
</table>
</div>
</body>
 