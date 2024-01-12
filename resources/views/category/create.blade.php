
@extends('layouts.app')
@section('content')
<div class="container">
    <form method="post" action="{{route('category.store')}}">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
          @error('name')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Rank</label>
            <input type="number" value="{{old('rank')}}" name="rank" class="form-control @error('rank') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('rank')
            <span class="text-danger">{{$message}}</span>
           @enderror
          </div>
        <div class="mb-3">
          <label for="desc" class="form-label">Description</label>
          <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="desc" cols="30" rows="10">{{old('description')}}</textarea>
          @error('description')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection

