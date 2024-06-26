<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Start of Tawk.to Script-->
    {{-- <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/666aa5369a809f19fb3d250d/1i089anjb';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
     --}}
</head>

<body>
    <div class="container">
        <h1>Task List</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <ul class="list-group">
            @forelse ($tasks as $task)
                <li class="list-group-item">
                    {{ $task->title }}


                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm float-end">Delete</button>
                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-primary btn-sm float-end">Edit</a>
                    </form>



                </li>

            @empty
                <li class="list-group-item">No tasks found.</li>
            @endforelse
        </ul>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary mt-3">Create Task</a>
    </div>
</body>

</html>
