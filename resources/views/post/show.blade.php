@extends('layouts.main');
@section('content');
    <div>
        <div>{{$post->id}}. {{$post->name}}. {{$post->surname}}</div>
        <div>{{$post->course}}</div>
        <div>{{$post->language}}</div>
        <div>{{$post->profession}}</div>
    </div>
    <div>
        <a href="{{ route('post.edit', $post->id) }}">Edit</a>
    </div>
    <div>
        <form action="{{ route('post.delete', $post->id) }}" method="post">
            @scrf
            @method('delete');
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
    <div>
        <a href="{{route('post.index') }}">Back</a>
    </div>
    @endsection
