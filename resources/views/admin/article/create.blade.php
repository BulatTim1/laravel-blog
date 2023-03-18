@extends('layout.layout')

@section('title', 'Create Article Page')

@section('content')

@extends('layout.layout')

@section('title', 'Create Article Page')

@section('content')
    <section style="padding-top: 120px;" class="section">
        <div class="container">
            <h2>Create new article</h2>


            <form enctype="multipart/form-data" action="{{route('posts.store')}}" method="post">

                @csrf
                @include('components.Errors')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" type="text" class="form-control" id="title">
                </div>

                <div class="form-group">
                    <label for="theme">Theme</label>
                    <input name="theme" type="text" class="form-control" id="theme">
                </div>

                <div class="form-group">
                    <label for="theme">Slug</label>
                    <input name="slug" type="text" class="form-control" id="slug" readonly>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" id="content" rows="3"></textarea>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input multiple name="photos[]" type="file" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary">
                                Create new article
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="{{asset('assets/js/slug.js')}}"></script>
@endsection