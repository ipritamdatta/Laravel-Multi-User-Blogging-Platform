@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Create a new blog</h1>
        </div>

        <div class="col-md-12">
            <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title">
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" class="form-control"></textarea>
                </div>
                
                <button class="btn btn-primary" type="submit">Create a new blog</button>
                @csrf
            </form>
        </div>
    </div>

@endsection