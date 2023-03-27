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
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Hello, I'm {{$card->name}}.</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>About Me</h3>
                <p>{{$card->description}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <a href="{{$card->linkedin_link}}" class="btn btn-primary mb-3">LinkedIn</a>
            </div>
            <div class="col-6">
                <a href="{{$card->github_link}}" class="btn btn-primary mb-3">GitHub</a>
            </div>
        </div>
    </div>
</body>
</html>