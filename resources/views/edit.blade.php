@extends('layout.app')
@section('content')
<div class="container">
<form action="{{route('editPost')}}" method="post">
        @csrf
        <input type="hidden" name="id" value={{$post->id}}>

        <input type="text" name="post" class="form-control" id="post" placeholder="{{$post->title}}">
    <button type="submit" class="btn btn-primary mt-3 mb-3" >Save Changes</button>
</form>
</div>

@endsection