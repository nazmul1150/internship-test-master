<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Instructions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  </head>
  <body>
    
        <div class="container bg-primary header">
        <div class="text-center text-white p-3 mt-1 mb-1">
            <h3>Php Laravel Intern Start Time(3:00PM) and End Time (4:40PM)</h3>
        </div>
       </div>
    <div class="container">
                    
      <div class="card">
        <img src="{{asset('image')}}/{{$post->image}}" class="card-img-top" alt="..." width="100" height="500">
      <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">{{$post->description}}</p>
      </div>

        </div>

         <a href="{{url('/')}}" class="btn btn-primary mt-5">Back</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>