<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Virtual Visit Card</title>
    
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
                <h1>Virtual Visit Card</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h2>QR Code Generator</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p>This site helps you create your web visit card. Just put your info bellow that a image with a QR code with a link to your web card will be created.</p>
            </div>
        </div>

        @if($status != null && $status == 'Virtual Visit Card successfully created.')
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success">
                        {{$status}}
                    </div>
                </div>
            </div>
        @elseif($status != null && $status == 'This Visit Card has been updated.')
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-warning">
                        {{$status}}
                    </div>
                </div>
            </div>
        @endif

        <form method="POST" action="{{url('/')}}">
            @csrf
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="description" rows="5" name="description"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="linkedin" class="col-sm-2 col-form-label">Linkedin URL</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="linkedin" name="linkedin">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="github" class="col-sm-2 col-form-label">GitHub URL</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="github" name="github">
                </div>
            </div>
            <div class="mb-3 row">
                <button type="submit" class="btn btn-primary mb-3">Generate Image</button>
            </div>
        </form>

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
    </div>
</body>
</html>