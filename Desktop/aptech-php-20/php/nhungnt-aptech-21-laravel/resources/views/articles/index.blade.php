<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Baithi_index</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

 
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
</head>
<body class="bg-light">
    <div class="container">
        <div class="bs-example">
            <form class="pt-3" action="{{asset('/articles/create')}}">
            <button type="submit" class="btn-primary">Create New Article</button>
            </form>
        </div>
        <div class="bs-example">
            <table class="table shadow ">
            <thead class="table-danger">
            <tr>
            <th>TITLE</th>
            <th>DESCRIPTION</th>
            <th>ACTIONS</th>
            </tr>
            </thead>
            <tbody class="table-primary">
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->title}}</td>
                    <td class="w-25">{{$article->description}}</td> 
                    <td>
                    <form class=" pt-2" action="{{asset('articles/'.$article->id)}}" method="GET">
                    <button type="submit" class="btn-success w-100">Show</button>
                    </form>
                    <form class=" pt-2" action="{{asset('/articles/'.$article->id.'/edit')}}" method="GET">
                    <button type="submit" class="bg-light w-100"><i class="fas fa-edit"></i></button>
                    </form>
                    <form class=" pt-2" action="{{asset('/articles/' .$article->id)}}" method="POST">
                    <input type="hidden" name="_token" value={{csrf_token()}}>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="bg-danger w-100"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>