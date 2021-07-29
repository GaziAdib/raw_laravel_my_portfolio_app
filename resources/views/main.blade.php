<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
    <title>Main</title>
</head>
<body>

    {{-- Navbar --}}

    @include('nav.navbar')


    {{-- Show ALL Projects --}}

        <h1 class="all-projects-heading text-center mt-2 p-2">My Projects</h1>

        <div class="m-2 p-2  projects-main">
          @foreach ($projects as $project)
          <div class="card projects-main-card" style="width: 20rem;">
            <img  class="card-img-top" src="/images/{{$project->project_thumbnail}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$project->project_title}}</h5>
              <hr>
              <p class="card-text">Category: <b>{{$project->category->name}}</b></p>
              <a href="{{$project->project_github_link}}" target="_blank" class="btn btn-success gitBtn">GitHub</a>
              <a href="{{$project->project_video_link}}" target="_blank" class="btn btn-danger youtubeBtn">YouTube</a>
            </div>
          </div>
          @endforeach
        </div>


    {{-- Show ALL Charts--}}


<div class="container mt-5 mb-5">

    <h1 class="text-center">SKills Charts</h1>

    <canvas id="myChart" height="110"></canvas>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js" integrity="sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [@foreach($skills as $skill)'{{$skill->name}}',
                @endforeach
                ],
                datasets: [{
                    label: '# of Votes',
                    data: [@foreach($skills as $skill){{$skill->value}},
                @endforeach],
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        </script>

    </div>



</body>
</html>
