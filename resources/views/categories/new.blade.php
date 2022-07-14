<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Task</title>
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
  <h2>New Task</h2>
  <div class="row">
    <div class="col-sm-4">
        <form method="POST" action="/category-store"> 
            @csrf                                           
        <label>Title</label>  
        
        <input type="text" name="title" class="form-control"        
        value="{{old('title')}}"
        />
        @if($errors->has('title'))
        <p class="text-danger">{{$errors->first('title')}}</p>
        @endif
        <button class="btn btn-info mt-4"type="submit">Create</button>
        
    </form>
        
    </div>
             
  
</div>

</body>
</html>