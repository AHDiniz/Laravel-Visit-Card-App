<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$card->name}}</title>
    
    <link rel="stylesheet" href="css/bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body class="bg-success">

    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Hello, I'm {{$card->name}}.</h1>
                        <hr>
                        <h3>About Me</h3>
                        <p class="card-text">{{$card->description}}</p>
                        <hr>
                        <div class="btn-group" role="group">
                            <a href="{{$card->linkedin_link}}" class="btn btn-outline-success mb-3">LinkedIn</a>
                            <a href="{{$card->github_link}}" class="btn btn-outline-success mb-3">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>