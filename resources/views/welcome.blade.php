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
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-3 bg-primary sidebar">
                <div class="text-center text-white p-3">
                    <h5>
                    To establish myself as a software engineer in an IT firm
                    like you I want to join immediately. I want to implement
                    my thoughts and learning materials in a practical
                    project. Mention that I have completed hands-on
                    training on PHP with Laravel Framework from
                    Themezone Academy for 04 months. I love to do my
                    work with passion and hope to learn new technologies.
                    If you give me an opportunity I can proof myself.
                    </h5>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    @foreach($posts as $row)
                    <div class="col-lg-4">
                         <div class="card mb-3">
                          <img src="{{asset('image')}}/{{$row->image}}" class="card-img-top" alt="..." height="200">
                          <div class="card-body">
                            <h5 class="card-title">{{substr($row->title, 0, 20)}}...</h5>
                            <p class="card-text">{{substr($row->description, 0, 50)}}...</p>
                            <a href="{{route('post',$row->id)}}" class="btn btn-primary">Red More</a>
                          </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>