<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Index</title>
    <style>
        table, th, td {
            border: 1px solid green;
            padding: 10px;
        }
        table {
            background-color: white;
            color: black;
            padding: 10px;
            margin: 5px;
            border-radius: 10px;
            box-shadow: 10px 10px grey;
        }
        td {
            text-align: center;
            color: black;
            font-weight: 200;
            padding: 2px
        }
        th{
            background-color: green;
            color: white;
            font-weight: 800;
        }

        img{
            padding: 2px;
            margin: 2px;
        }
    </style>
</head>
<body>

    <h1 class="text-center"> Index of Admin PDF Projects Page </h1>

    <div class="container mt-5 p-2">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>

              </tr>
            </thead>
            <tbody>

                @foreach ($projects as $project)
                <tr>

                    <td scope="row">{{$project->id}}</td>

                            <td scope="row">

                             @if ($project->project_thumbnail)

                             <img src="{{ public_path("/images/".$project->project_thumbnail) }}" height="60px" width="70px"/>

                             @endif

                            </td>

                        <td scope="row">{{$project->project_title}}</td>

                        <td scope="row">{{$project->category->name}}</td>

                        <td>{{$project->created_at->diffForHumans()}}</td>

                        <td>{{$project->updated_at->diffForHumans()}}</td>



                    </tr>

                    @endforeach


            </tbody>
          </table>


    </div>


</body>
</html>
