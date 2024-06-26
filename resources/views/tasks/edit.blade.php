<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Edit Todo</h1>
    @if(!isset($task))
     <p>{{$error}}</p>
    @endif
    <form action="{{ route('tasks.update', $task) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Task Title</label>
        <input type="text" class="form-control" name="title" id="title" value="{{ $task->title }}">
    </div>
    <div class="form-group">
        <label for="description">Task Description</label>
        <textarea class="form-control" name="description" id="description">{{ $task->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update Task</button>
    
    
    </form>
</body>
</html>