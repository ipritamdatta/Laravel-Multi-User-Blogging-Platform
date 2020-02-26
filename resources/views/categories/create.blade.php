@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Create a category</h1>
        </div>

        <div class="col-md-12">
            <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name">
                </div>

                
                
                <button class="btn btn-primary" type="submit">Create a new category</button>
                @csrf
            </form>
        </div>
    </div>

@endsection