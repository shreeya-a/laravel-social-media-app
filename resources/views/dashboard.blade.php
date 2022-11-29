@extends('layout.app')

@section('content')

<div class="container">
    <h1>Welcome to Dashboard</h1>

    <!-- <form action="{{route('logout')}}" method="get">
<button type="submit" class="btn btn-warning" >Logout</button>

</form> -->

    <table class="table">
        <thead>
            <th>Post Title</th>
            <th>Created by</th>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <!-- user because user.php ma hamile function ko naam user deko cha -->
                <!-- relationship bata taneko data -->
                <td>{{$post->user->name}}</td> 
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection