@extends('master')

@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>descripton</th>
            <th>cover_image</th>
            <th>created_at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td><a href="{{route('posts.show',[$post->id])}}">{{$post->title}}</a></td>
                <td>{{$post->description}}</td>
                <td>{{$post->cover_image}}</td>
                <td>{{$post->user_id}}</td>
                <td>{{$post->created_at}}</td>
            </tr>
        @endforeach
        </tbody>

    </table>
    {{ $posts->links() }}
@endsection