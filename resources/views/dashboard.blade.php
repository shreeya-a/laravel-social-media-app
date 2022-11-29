@extends('layout.app')

@section('content')
<style>
    h1{
        text-align: center;
        margin-bottom: 5px;
        /* margin-top: 5px; */

    }
     h3{
        text-align: center;
        margin-bottom: 5px;
        margin-top: 15px;

    }
    .sub-container{
        padding: 30px;
        align-items: center;
    }
    textarea{
        resize: none;
        height: 100px;
        width: 100px;
    }
</style>
<div class="container mt-10 p-5">
    <h1 >Welcome {{auth()->user()->name}}</h1>

    <form action="{{route('newPost')}}" method="post" class="mt-5 mb-5">
        @csrf
        <fieldset style="border:solid 1px black ; padding: 5px">
        <h3>What's On Your Mind?</h3>
        <div class="sub-container">
        <textarea name="post" class="form-control" id="post"  placeholder="Let us know here..."></textarea>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-primary mt-3" >Add Post</button>
        </div>
   </div>
   </fieldset>
</form>
@php
     $SN=1;
@endphp
<table class="table table-bordered">
        <thead>
            <th>SN</th>
            <th>Post Title</th>
            <th>Created by</th>
            <th>User ID</th>
            <th colspan="2">Action</th>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{$SN++}}</td>
                <td>{{$post->title}}</td>
                <!-- user because user.php ma hamile function ko naam user deko cha -->
                <!-- relationship bata taneko data -->
                <td>{{$post->user->name}}</td> 
                <td>{{$post->user_id}}</td>
                @if(auth()->user()->id == $post->user->id)
                <td>
                   <!-- <button class="btn btn-primary"><a href="{{url('/edit/'.$post->id)}}" class="text-white"><span class="fas fa-pencil ml-3"></a></button>
                   <button class="btn btn-primary"><a href="{{url('/delete/'.$post->id)}}" class="text-white"><span class="fas fa-trash ml-3"></a></button> -->
                   <a href="{{url('/edit/'.$post->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{url('/delete/'.$post->id)}}" class="btn btn-danger">Delete</a>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection