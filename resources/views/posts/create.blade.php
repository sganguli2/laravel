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
        <h2>Insert Post</h2>
        <div class="form-group">
    {!! Form::open(['method'=>'POST','action'=>'PostsController@store']) !!}
    <div class="form-group">
    {!! Form::label('post_title', 'Post Title') !!}
    {!! Form::text('post_title', null, ['class'=>'form-control text-field']) !!}

    {!! Form::hidden('user_id', '1') !!}
    </div>
    <div class="form-group">
    
    {!! Form::label('post_description', 'Post Description') !!}
    {!! Form::textarea('post_description', null, ['class'=>'form-control']) !!}
    @csrf
    </div>

    {!! Form::submit('Submit', ['class'=>'btn btn-success']) !!}
    {!! Form::close() !!}
</div>
</body>
</html>