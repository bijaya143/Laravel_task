<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @if(!empty($posts->meta_description))
    <meta name="description" content="{{$posts->meta_description}}">
    @else
    <meta name="description" content="A page without Meta Description">
    @endif
    <meta name="author" content="">

    @if(!empty($posts->meta_title))
    <title>{{$posts->meta_title}}</title>
    @else
    <title>A Page without Meta Title</title>
    @endif

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
   <section>
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="card">
                       <div class="card-header">
                           <h1>A Single Page</h1>
                           <a href="/pages">Back &rarr;</a>
                       </div>
                       <div class="card-body">
                       <div>
                            <img src="{{asset('assets/images/post')}}/{{$posts->image}}" width="300" alt="image">   
                        </div>
                        <div>
                            <h2 class="text-gray-700 font-bold text-5xl pb-5">
                                {{$posts->title}}
                            </h2>
                            <span class="">
                                <!-- By,  -->
                                <span class="">                               
                                </span> Created on {{ date('D jS M Y', strtotime ($posts->created_at))}}
                            </span>
                            <p class="">
                                {{$posts->description}}
                            </p>
                        </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section> 
</body>
</html>