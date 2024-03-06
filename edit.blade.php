@extends('layouts.frontendLayout')
@section('title', "add post")
@section('content')
      


 <section>
     <div class="container">
         <div class="card col-lg-5 mx-auto mt-5">
             <div class="card-header">
                   edit post
             </div>
                <div class="card-body">
                 @if (session()->has('msg'))
                     <div class="alert alert-success">
                         {{ session('msg') }}
                     </div>
                 @endif
                  <form action="" method="POST">
                         @csrf
                             <input value="{{ $post->title  }}" name="title" type="text" placeholder="post title" class="form-control mb-2">
                             @error('title')
                                  <span class="text-danger">
                                     {{$message}}
                                  </span>
                             @enderror
                             <input value="{{ $post->detail }}" name="detail" type="text" placeholder="post detail" class="form-control mb-2">
                             @error('detail')
                             <span class="text-danger">
                                {{$message}}
                             </span>
                        @enderror
                             <input value="{{ $post->author }}" name="author" type="text" placeholder="author name" class="form-control mb-2">
                             <button type="submit" class="btn btn-primary">
                                 update
                             </button>
                        </form>
                </div>
         </div>
     </div>   
 </section>


 @endsection