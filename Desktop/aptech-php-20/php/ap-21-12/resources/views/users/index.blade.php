<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="bg-light">
<div class="container">
<form class="pt-3" action="{{asset('/users/create')}}">
 
  <button type="submit" class="btn-primary">Tao Nguoi Dung Moi</button>
</form>

<form action="{{asset('/users/login')}}">
  
  <button type="submit" class="btn-primary">Dang nhap</button>
</form>
<table class="table shadow">
    <thead class="table-danger">
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr class="table-primary">
        <td class="font-weight-bold">{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td> 
        <td>
        <form action="{{asset('users/'.$user->id)}}" method="GET">
          <button type="submit" class="btn-success">Xem Nguoi Nay</button>
        </form>
        <form action="{{asset('/users/' .$user->id)}}" method="POST">
          <input type="hidden" name="_token" value={{csrf_token()}}>
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="bg-danger">Xoa Nguoi Nay</button>
        </form>
        <form action="{{asset('/users/'.$user->id.'/edit')}}" method="GET">
          <button type="submit">Sua Nguoi Nay</button>
        </form>
      </td>
      </tr>
      @endforeach
</tbody>
</table>
</div>
</body>

 


 
     
