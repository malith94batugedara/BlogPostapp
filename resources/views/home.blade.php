@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Blog Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach($errors->all() as $error)
                              <div> {{ $error }} </div>
                            @endforeach
                        </div>
                    @endif
                <form action="{{ route('admin.addblogs') }}" method="post">
                    @csrf
                        <div class="form-group col-md-8">
                            <label for="title">Blog Title</label>
                            <input type="text" class="form-control" placeholder="Enter title" name="title">
                        </div><br>
                        <div class="form-group col-md-8">
                          <label for="description">Blog Content</label>
                          <textarea name="description" id="my_summernote" class="form-control" placeholder="Enter Description" rows="3" ></textarea>
                        </div><br/>
                        <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
