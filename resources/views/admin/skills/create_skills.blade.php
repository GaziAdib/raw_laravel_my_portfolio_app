
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
    <h1 class="text-center m-2 p-2">Create Skills</h1>

    <div class="container justify-content-center">

        <form action="{{route('admin.skills.store')}}" method="POST">
            @csrf


            <div class="form-group m-2 p-2">
                <label for="skill_name">Skill Name</label>
                <input class="form-control" type="text" name="name" placeholder="Skill Name">
            </div>

            
            <div class="form-group m-2 p-2">
                <label for="skill_value">Skill Value</label>
                <input class="form-control" type="number" name="value" placeholder="Skill Value">
            </div>

            <button class="btn btn-success" type="submit">Add Skill</button>

        </form>

    </div>
</body>
</html>