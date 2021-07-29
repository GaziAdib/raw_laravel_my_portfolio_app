<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Project</title>
</head>
<body>

    <h1>Edit Project</h1>

    <div class="container m-2 p-2 justify-content-center">

        <form action="{{route('admin.projects.update', $project->id)}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <img height="200" width="300" src="/images/{{$project->project_thumbnail}}" alt="">
            </div>


            <div class="form-group m-2 p-2">
                <label for="Image">Upload Image</label>
                <input class="form-control" type="file" name="project_thumbnail" value="">
            </div>

            <div class="form-group m-2 p-2">
                <label for="project_title">Project Title</label>
                <input class="form-control" type="text" name="project_title" value="{{$project->project_title}}">
            </div>

            <div class="form-group m-2 p-2">
                <label for="project_description">Project Description</label>
                <textarea class="form-control" name="project_description" cols="30" rows="10" placeholder="Add Project Descriptions...">{{$project->project_description}}</textarea>
            </div>

            <div class="form-group m-2 p-2">
                <label for="project_github_link">GitHub Link</label>
                <input class="form-control" type="text" name="project_github_link" placeholder="Project GiHub Title" value="{{$project->project_github_link}}">
            </div>

            <div class="form-group m-2 p-2">
                <label for="project_video_link">Video Link</label>
                <input class="form-control" type="text" name="project_video_link" placeholder="Project Video Title" value="{{$project->project_video_link}}">
            </div>


            <div class="form-group m-2 p-2">
                <label for="category">Category</label>
                <select class="form-control" name="category_id" id="category_id">
                    <option selected value="{{$project->category->id}}">{{$project->category->name}}</option>
                    @foreach ($categories as $category)
                     <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-success m-2 p-2" type="submit" value="submit">Update Project</button>

        </form>

    </div>
    
</body>
</html>