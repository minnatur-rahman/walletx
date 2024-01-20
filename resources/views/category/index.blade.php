@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('category.create')}}" class="btn btn-success">Create</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
          <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            <td>{{$category->created_at}}</td>
            <td><a class="btn btn-danger" href="#">Delete</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection

