<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container my-5 py-5">

        <form action="{{ route('tasks.update', $task->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $task->title }}">

                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

            </div>
            <div class="form-group mb-3">
                <label for="title" class="form-label"></label>
                <textarea type="text" class="form-control" name="description" id="description">{{ $task->description }}</textarea>

                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

            </div>
            <div class="form-group mb-3">
                <label for="time" class="form-label">Time</label>
                <input type="time" class="form-control" name="time" id="time" value="{{ $task->time }}" />

                @error('time')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
