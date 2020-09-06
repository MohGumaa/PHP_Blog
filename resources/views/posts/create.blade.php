@extends ("layouts.app")

@section('content')
    <div class="pt-2">
        <h1>Create Post</h1>
        <form method="post" action="/posts" enctype="multipart/form-data">
            {{-- <input name="_token" id="title" type="hidden" value="{{ csrf_token() }}"/> --}}
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea name="body" id="summary-ckeditor" class="form-control" rows="10"></textarea>
            </div>

            <div class="form-group">
                <input type="file" name="cover_image">
            </div>
            <button class="btn btn-outline-primary">Create</button>
        </form>
    </div>
@endsection