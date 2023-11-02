@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Blog Posts') }}<a class="" href="{{ route('home') }}">
                    create Blog Post
                </a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table id="myDataTable" class="table table-dark">
                        <thead>
                          <tr>
                             <th>#</th>
                             <th>Title</th>
                             <th>Description</th>
                          </tr>
                        </thead>
                         
                        <tbody>
                        @foreach($blogs as $blog)
                           <tr>
                             <td>{{ $blog->id }}</td>
                             <td>{{ $blog->title  }}</td>
                             <td>{{ $blog->description  }}</td>
                           </tr>
                        @endforeach
                        </tbody>
                     </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
