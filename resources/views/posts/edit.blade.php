@extends ("layouts.app")

@section('content')
    <div class="pt-2">
        <h1>Create Post</h1>
        <form method="post" action="/posts/{{$post->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value={{$post->title}}>
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea name="body" id="summary-ckeditor" class="form-control" rows="10">{{$post->body}}</textarea>
            </div>
            <div class="form-group">
                <input type="file" name="cover_image">
            </div>
            <button class="btn btn-outline-primary">Create</button>
        </form>
    </div>
@endsection