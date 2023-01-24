@extends('layuts.main')
@section('content')
<div>
    <a href="{{route('post.create') }}" class="btn btn-primary mb-5">Add a New Student</a>
</div>
<div>
    @foreach($posts as $post)
        <div><a href="{{route('post.show', $post->id) }}"></a>{{$post ->id}}. {{$post->name}}</div>
    @endforeach
</div>
@endsection