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
    <h1>Skills Index Page</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Value</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
      
          @foreach ($skills as $skill)
                <tr>

                <th scope="col">{{$skill->id}}</th>

                <td scope="row">{{$skill->name}}</td>

                <td scope="row">{{$skill->value}}</td>
                
            
                <td>{{$skill->created_at->diffForHumans()}}</td>

                <td>{{$skill->updated_at->diffForHumans()}}</td>

                <td>
                    <a class="btn btn-primary" href="{{route('admin.skills.edit', $skill->id)}}">Edit</a>
                    
                    <div>
                        <form action="{{route('admin.skills.destroy',  $skill->id)}}" method="POST">
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
</body>
</html>
