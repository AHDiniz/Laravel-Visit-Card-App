<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Virtual Visit Card</title>
    
    <link rel="stylesheet" href="{{HTML::style(css/bootstrap/bootstrap-grid.min.css)}}">
    <link rel="stylesheet" href="{{HTML::style(css/bootstrap/bootstrap-reboot.min.css)}}">
    <link rel="stylesheet" href="{{HTML::style(css/bootstrap/bootstrap-utilities.min.css)}}">
    <link rel="stylesheet" href="{{HTML::style(css/bootstrap/bootstrap.min.css)}}">
    <link rel="stylesheet" href="{{HTML::style(css/app.css)}}">
</head>
<body class="bg-success">

    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Virtual Visit Card</h1>
                        <h2>QR Code Generator</h2>
                        <p class="card-text">This site helps you create your web visit card. Just put your info bellow that a image with a QR code with a link to your web card will be created.</p>
                        <hr>

                        @if($status != null && $status == 'Virtual Visit Card successfully created.')
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success">
                                        {{$status}}
                                    </div>
                                </div>
                            </div>
                            <hr>
                        @elseif($status != null && $status == 'This Visit Card has been updated.')
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-warning">
                                        {{$status}}
                                    </div>
                                </div>
                            </div>
                            <hr>
                        @endif
                    
                        <form method="POST" action="{{url('/')}}">
                            @csrf
                            <div class="input-group mb-3">
                                <label for="name" class="col-sm-2 input-group-text">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="input-group mb-3">
                                <label for="description" class="col-sm-2 input-group-text">Description</label>
                                <textarea class="form-control" id="description" rows="5" name="description"></textarea>
                            </div>
                            <div class="input-group mb-3">
                                <label for="linkedin" class="col-sm-2 input-group-text">Linkedin URL</label>
                                <input type="text" class="form-control" id="linkedin" name="linkedin">
                            </div>
                            <div class="input-group mb-3">
                                <label for="github" class="col-sm-2 input-group-text">GitHub URL</label>
                                <input type="text" class="form-control" id="github" name="github">
                            </div>
                            <div class="d-flex justify-content-center aligh-items-center">
                                <button type="submit" class="btn btn-outline-success">Generate Image</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($slug)

        <script type="text/javascript">
            
            let a = document.createElement('a');
            a.download = "{{$slug}}_qr_code.png";
            a.href = "{{$slug}}_qr_code.png";
            document.body.appendChild(a);
            a.click();
            a.remove();
            
        </script>

    @endif
</body>
</html>