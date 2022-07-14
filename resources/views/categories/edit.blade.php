<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categories</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Todo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>

<div class="container mt-3">
  <h2>Edit Category</h2>
  <div class="row">
    <div class="col-sm-4">
        <form method="POST" action="/category-update{{$category->id}}">
            @csrf
            @method('put')

        <label>Title</label>  
        <input type="text" name="title" class="form-control" value="{{$category->title}}"/>
        <button class="btn btn-info mt-4"type="submit">Update</button>
        </form>
        
    </div>
             
  
</div>

</body>
</html>