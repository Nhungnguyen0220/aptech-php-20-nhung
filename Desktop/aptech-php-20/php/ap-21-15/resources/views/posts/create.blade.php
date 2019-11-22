<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="h-100">
<div class="container bg-light text-center h-100">
<h1 class="text-center text-success pt-3 pb-3"> CREATE NEW POST </h1>
<form class="w-50 container bordered shadow pb-2 text-center" action="{{asset('/posts')}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <table class="w-100 "> 
  <div class="form-group pt-2">
  <tr>
    <td><label  class="font-weight-bold" for="name">Title</label></td>
    <td><input class ="w-100" type="text" class="form-control" placeholder="Enter title" name='title' id="title"></td>
    </tr>
  </div>
  <div class="form-group ">
  <tr>
   <td> <label class="font-weight-bold" for="description">Description:</label></td>
   <td> <textarea class ="w-100 form-control " type="text"  placeholder="Enter description" name='description' id="description"></textarea></td>
    </tr>
  </div>
  <div class="form-group">
  <tr>
  <div class="form-group ">
    <td><label class="font-weight-bold" for="pwd">Content:</label></td>
    <td><textarea class="w-100 form-control " type="text" rows="15" placeholder="Enter content" name='content' id="content"></textarea></td>
    </div>
  <tr>
    </div>
  <td> </td>
  <td class="text-center pt-2 d-inline-flex">
 <div class="ml-5"><button type="submit" name='create' class="btn btn-success">Create</button> </div>
</form>
<div class="ml-5">
<form action="{{asset('/posts/create')}}">
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
 