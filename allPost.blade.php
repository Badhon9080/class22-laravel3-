 @extends('layouts.frontendLayout')
 @section('title', "all post")
 @section('content')
 
    <section>
        <div class="container">
            <div class="table-responsive mt-5 text-center">
             <table class="table">
                     <tr>
                          <th>#</th>
                          <th>name</th>
                          <th>detail</th>
                          <th>author</th>
                          <th></th>
                     </tr>
                      @foreach ($posts as $key=>$post)
                    <tr> <td>{{$posts->firstItem()+$key}}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ str($post->detail)->substr(0, 10)->lower(). '...'  }}</td>
                        <td>{{ $post->author }}</td>
                        <td>
                           <div class="btn-group">
                            <a class="btn btn-sm btn-warning" href="{{ route('edit', $post->id) }}">
                                edit
                            </a>
                            <a class="btn btn-sm btn-danger" href="{{ route('delete', $post->id) }}">
                                delete
                            </a>
                           </div>
                        </td>
                   </tr>
                   @endforeach
             </table>
          {{ $posts->links() }}

            </div>
        </div>   
    </section>
@endsection
