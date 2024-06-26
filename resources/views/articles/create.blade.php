@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Article</h1>
        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="contentArticles">Content</label>
                <textarea name="contentArticles" id="contentArticles" class="form-control" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
