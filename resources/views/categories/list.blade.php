<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
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
  <h2>Task List&nbsp;<a class="btn btn-info" href="/category-create">Add New Task</a></h2>     

  @if(session()->has('success'))
  <div class="alert alert-info" role="alert">                 
    <strong>{{session()->get('success')}}</strong>  
  </div>
  @endif
             
  <table class="table">
    <thead>
      <tr>
        <th>S/NO</th>
        <th>Task</th>                        
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)                
      <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$category->title}}</td>
        <td>
           <a href="/category-edit/{{$category->id}}" class="btn btn-sm btn-info">Edit</a>
           <a href="/category-delete/{{$category->id}}" class="btn btn-sm btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
     
    </tbody>
  </table>
</div>

</body>
</html>

</body>
</html>
