<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Pages</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <section class="pt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h1>Create Page</h1>
                            <a href="/pages">Back &rarr; </a>
                            @if(session()->has('message'))
                            <div class="alert alert-success" role="alert">
                                {{session()->get('message')}}
                            </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <form action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Title</label>
                                <input class="form-control" type="text" name="title" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Meta Title</label>
                                <input class="form-control" type="text" name="meta_title" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Meta Description</label>
                                <input class="form-control" type="text" name="meta_description" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <input class="form-control" type="text" name="description" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input class="form-control" type="file" name="image" id="">
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>