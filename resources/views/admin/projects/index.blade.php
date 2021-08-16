<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>

    <h1 class="text-center"> Index of Admin Projects </h1>

    <div class="container mt-5 p-2">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($projects as $project)
                    <tr>


                        <td scope="row">{{$project->id}}</td>

                        <td>

                        <img height="50" src="/images/{{ $project->project_thumbnail }}">

                        </td>

                    <td scope="row">{{$project->project_title}}</td>

                    <td scope="row">{{$project->category->name}}</td>

                    <td scope="row">{{ $project->project_description }}</td>


                    <td>{{$project->created_at->diffForHumans()}}</td>

                    <td>{{$project->updated_at->diffForHumans()}}</td>
                    <td>
                      <a class="btn btn-primary" href="{{route('admin.projects.edit', $project->id)}}">Edit</a>
                      <div>
                        <form action="{{route('admin.projects.destroy',  $project->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </div>
                    </td>




                    </tr>
                    @endforeach
            </tbody>
          </table>

          <a class="btn btn-success" href="{{ route('main.pdf') }}">Download PDF</a>

    </div>


</body>
</html>
