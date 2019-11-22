<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Baithi_show</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>
    <div>
    <table class="table shadow">
        <thead class=" text-center table-danger">
        <tr>
        <th>TITLE</th>
        <th>DESCRIPTION</th>
        <th>CONTENT</th>
        </tr>
        </thead>
        <tbody>
        <tr class=" text-center table-primary">
            <td class="w-25">{{$article->title}}</td>
            <td class="w-25">{{$article->description}}</td> 
            <td class="w-50">{{$article->content}} </td> 
        </tr>
        </tbody>
    </table>
    </div>
    <div class="ml-5">
        <form action="{{asset('/articles')}}">
        <button type="submit" class="btn btn-primary bordered text-light">come back</button>
        </form> 
    </div>
</body>
</html>