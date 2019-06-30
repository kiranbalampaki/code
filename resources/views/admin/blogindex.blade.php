@extends('admin.dashboard')

@section('content')
<h2 class="text-center py-2">Your Blogs</h2>
<div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-sm table-hover table-bordered">
                <thead class="thead-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($blogs)>0)
                    @foreach ($blogs as $blog)
                    <?php $img = $blog->blog_image; ?>
                    <tr>
                        <td>{{$blog->id}}</td>
                        <td>{{$blog->title}}</td>
                        <td>{!!str_limit($blog->body, 250, '....')!!}</td>
                        <td>
                            <img src="{{asset('assets/uploads/blogimages/'.$img)}}" height="100">                            
                        </td>
                        <td>{{$blog->created_at}}</td>
                        <td class="text-center align-middle">
                        <div class="btn-group">
                            <a href="{{route('blogs.edit',['id'=>$blog->id])}}" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                            <form action="{{ route('blogs.destroy',['id'=>$blog->id]) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                        </td>
                    </tr>                        
                    @endforeach
                    @else
                    <p>no blogs</p>
                    @endif
                </tbody>
                <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
                <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
                <script>
                    $(".table").DataTable();
                </script>
            </table>
        </div>
    </div>
</div>
@endsection