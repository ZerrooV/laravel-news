@extends('admin.layout.app')
@section( 'content')

<div class="mt-5 text-end">
    <a href="/index" class="btn btn-sm btn-warning">Back</a>
    <a href="{{route('posts.create')}}" class="btn btn-sm btn-warning">Add Post</a>
</div>

@foreach ($posts as $item)
<div class="container mt-3 bg-white" style="min-height: 10vh"> <!-- Container baru untuk setiap item -->

    <tr>
        <td>
            <figure>
                <div>
                    <blockquote class="blockquote mt-3">
                        <p>{{$item['title']}}</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        {{$item['content']}}
                    </figcaption>
                </div>
            </figure>
        </td>
        <td>
            <form class="text-end" action="{{route('posts.destroy', $item->id)}}" method="POST">
                @method('delete')
                @csrf
                <a href="{{route('posts.edit', $item->id)}}" class="btn btn-primary mb-2">Edit</a>
                <button class="btn btn-sm btn-danger mb-2" onclick="return confirm('Yakin deck?')">Delete</button>
            </form>
        </td>
    </tr>

</div>
@endforeach

@endsection
