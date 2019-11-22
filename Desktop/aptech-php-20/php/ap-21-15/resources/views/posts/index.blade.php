
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="bg-light">
<div class="container">
<form class="pt-3" action="{{asset('/posts/create')}}">
 
  <button type="submit" class="btn-primary">Create New Post</button>
</form>
<table class="table shadow">
    <thead class="table-danger">
      <tr>
      <th>ID</th>
      <th>TITLE</th>
      <th>DESCRIPTION</th>
      <th>CONTENT</th>
      <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr class="table-primary">
        <td class="font-weight-bold">{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td class="w-25">{{$post->description}}</td> 
        <td>{{$post->content}}</td> 
        <td>
        <form action="{{asset('posts/'.$post->id)}}" method="GET">
          <button type="submit" class="btn-success w-100">View</button>
        </form>
        <form action="{{asset('/posts/' .$post->id)}}" method="POST">
          <input type="hidden" name="_token" value={{csrf_token()}}>
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="bg-danger w-100">Delete</button>
        </form>
        <form action="{{asset('/posts/'.$post->id.'/edit')}}" method="GET">
          <button type="submit" class="w-100">Edit</button>
        </form>
      </td>
      </tr>
      @endforeach
</tbody>
</table>
</div>
</body>

 


 
     
