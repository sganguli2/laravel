<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="{{asset('js/app.js')}}"></script>

</head>
<body>

    <div class="container">
        <h2>Edit Post</h2>
        <div class="form-group">
            {!! Form::model($post, ['method'=>'PATCH','action'=>['PostsController@update',$post->id]]) !!}
            <div class="form-group">
            @csrf
            
            {!! Form::label('post_title','Post Title') !!}
            {!! Form::text('post_title',null,['class'=>'form-control']) !!}
            <br>
            
            {!! Form::label('post_description','Description') !!}
            {!! Form::textarea('post_description', null, ['class'=>'form-control']) !!}
            
            </div>
            {!! Form::submit('Update Post',['class'=>'btn btn-primary']) !!}
            
            {!! Form::close() !!}
</div>
</body>
</html>