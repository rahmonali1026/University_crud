@extends('layouts.main')
@section('content')
<div>
<form action="{{route('post.update', $post-id) }}" method="post">
        @csrf
        @method(patch)
        <div class="form-group">
            <label for="name">Ном</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Ном" value="{{ $post->name }}">  
        </div>
        <div class="form-group">
            <label for="surname">Насаб</label>
            <input type="text" class="form-control" id="surname" name="surname" placeholder="Насаб" value="{{ $post->surname }}">  
        </div>
        <div class="form-group">
            <label for="surname">Курс</label>
            <input type="number" class="form-control" id="course" name="course" placeholder="Курс" value="{{ $post->course }}">  
        </div>
        <div class="form-group">
            <input type="radio" id="taj" name="language" value="{{$post->language}}">
            <label for="select">Select language</label><br>
            <input type="radio" id="taj" name="language" value="Таджикиский">
            <label for="taj">Таджикиский</label><br>
            <input type="radio" id="ru" name="language" value="Русский">
            <label for="ru">Русский</label><br>
            <input type="radio" id="eng" name="language" value="Англиский">
            <label for="eng">Англиский</label>
        </div>
        <div class="form-group">
            <select name="profession" id="profession" class="form-control">
                <option value="{{$post->profession}}">Select Profession</option>
                <option value="Web-Devloper">Web-Developer</option>
                <option value="Web-Disagner">Web-Disagner</option>
                <option value="QA">QA</option>
                <option value="AI">AI</option>
                <option value="UX/UI">UX/UI</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form> 
</div>
@endsection