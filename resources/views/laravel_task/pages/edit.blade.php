<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pages</title>
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <section class="pt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h1>Edit Here.</h1>
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
                            <form action="{{url('/update', $posts->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Title</label>
                                <input class="form-control" type="text" value="{{$posts->title}}" name="title" id="">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Meta Title</label>
                                <input class="form-control" type="text" value="{{$posts->meta_title}}" name="meta_title" id="">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Meta Description</label>
                                <input class="form-control" type="text" value="{{$posts->meta_description}}" name="meta_description" id="">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Description</label>
                                <input class="form-control" type="text" value="{{$posts->description}}" name="description" id="">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Old Image</label>
                                <img src="{{asset('assets/images/post')}}/{{$posts->image}}" height="100" width="100" alt="">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Image</label>
                                <input class="form-control" type="file" name="image" id="">
                            </div>
                            <button class="btn btn-primary mt-2" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  
</body>
</html>