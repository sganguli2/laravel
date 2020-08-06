<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Posts</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
        <h2>View Posts</h2>
    <ul>
@foreach ($posts as $posts)
    <li>
       <p> <a href="{{route('posts.show', $posts->id)}}">{{$posts->post_title}}</a> ||
         <a href="{{route('posts.edit',$posts->id)}}">Edit Post</a>
         <a  href="{{route('posts.delete',$posts->id)}}">Delete Post</a>
       </p>
        </li>
       
@endforeach
</ul>
<a class="btn btn-primary" href="/posts/create">Create a new post</a> 
</div>
</div>
</div>
</body>
</html>