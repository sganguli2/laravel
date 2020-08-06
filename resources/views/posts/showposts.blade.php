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
        <br />
        <a class="btn btn-primary" href="{{route('posts.edit',$post->id)}}">Edit Post</a>
        <br /> <br />
        <h4>Post Title: {{$post->post_title}}</h4>
        Post Description : {{$post->post_description}}

        
</div>
</body>
</html>