@extends('admin.layout')

@section('header')
    <h1>
        POSTS
        <small>Listado</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Posts</li>
    </ol>
@endsection

@section('content')
    <div class="box box-danger">
        <div class="box-header">
            <h3 class="box-title">Listado de publicaciones</h3>
            <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal3"><i class="fa fa-plus"></i> Crear Publicación</button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="post-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Extracto</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->excerpt }}</td>
                            <td>
                                <a href="{{ route('posts.show', $post) }}"
                                    class="btn btn-default btn-xs"
                                    target="_blank">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

@endsection

@push('styles')
<!-- DataTables -->
<link rel="stylesheet" href="/admin/plugins/datatables/dataTables.bootstrap.css">
@endpush

@push('scripts')
<script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>
    $(function () {
        $('#post-table').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
@endpush


