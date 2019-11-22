<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Baithi_create</title>
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
<body class="h-100">
<div class="container bg-light text-center h-100">
<h1 class="text-center text-success pt-3 pb-3"> CREATE NEW ARTICLE </h1>
<form class=" w-75 container bordered shadow pb-2 text-center" action="{{asset('/articles')}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <table class="w-100 "> 
    <tr>
        <div class="form-group pt-2">
        <td><label class="font-weight-bold" for="name">Title</label></td>
        <td><input class ="w-100" type="text" class="form-control" placeholder="Enter title" name='title' id="title"></td>
        </div>
    </tr>
    <tr>
        <div class="form-group pt-2">
        <td><label  class="font-weight-bold" for="name">Title_slug</label></td>
        <td><input class ="w-100" type="text" class="form-control" placeholder="Enter title_slug" name='title_slug' id="title_slug"></td>
        </div>
    </tr>
    <tr>
        <div class="form-group">
        <td> <label class="font-weight-bold update-label" for="">Description</label></td>
        <td> <textarea class="form-control" name="description" id="description" rows="3" ></textarea></td>
        </div>
    </tr>
    <tr>
        <div class="form-group">
        <td> <label class="font-weight-bold update-label" for="">Content</label></td>
        <td> <textarea class="form-control" name="content" id="content" rows="3"></textarea></td>
        </div>
    </tr>
    <tr>  
    <td> </td>
    <td class="text-center pt-2 d-inline-flex">
        <div class="ml-5"><button type="submit" name='create' class="btn btn-success">Create</button> </div>
        </form>
        <div class="ml-5">
        <form action="{{asset('/articles/create')}}">
        <button type="submit" class="btn btn-primary bordered text-light">Reset</button>
        </form> 
        </div>
        <div class="ml-5">
        <form action="{{asset('/articles')}}">
        <button type="submit" class="btn btn-dark bordered text-light">come back</button>
        </form> </td>
    </tr>
</table>
</div>
<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
</body>
</html>