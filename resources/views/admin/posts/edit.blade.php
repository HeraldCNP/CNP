@extends('admin.layout')

@section('header')
    <h1>
        POSTS
        <small>Crear Publicación</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="{{ route('admin.posts.index') }}"><i class="fa fa-list"></i> Posts</a></li>
        <li class="active">Crear</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        @if($post->photos->count())
            <div class="col-md-12">
                <div class="box box-danger">
                    <div class="box-body">
                        <div class="row">
                            @foreach($post->photos as $photo)
                                <form method="post" action="{{ route('admin.photo.destroy', $photo) }}">
                                    {{ method_field('DELETE') }} {{ csrf_field() }}
                                    <div class="col-md-2">
                                        <button class="btn btn-danger btn-xs" style="position: absolute">
                                            <i class="fa fa-remove"></i>
                                        </button>
                                        <img src="{{ url($photo->url) }}" class="img-responsive" alt="">
                                    </div>
                                </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <form action="{{ route('admin.posts.update', $post) }}" method="post">
            {{ csrf_field() }} {{ method_field('PUT') }}
            <div class="col-md-8">
                <div class="box box-danger">
                    <div class="box-body">
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                            <label for="title">Titulo de la publicación</label>
                            <input type="text" id="title"
                                   class="form-control"
                                   name="title"
                                   value="{{ old('title', $post->title) }}"
                                   placeholder="Ingresa aquí el titulo de la publicación">
                            {!! $errors->first('title', '<span class="help-block">:message</span>') !!}

                        </div>
                        <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
                            <label for="editor">Contenido de la publicación</label>
                            <textarea name="body" rows="10" id="editor" class="form-control" placeholder="Ingresa aquí el contenido completo de la publicación">{{ old('body', $post->body) }}</textarea>
                            {!! $errors->first('body', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('iframe') ? 'has-error' : ''}}">
                            <label for="iframe">Contenido embebido</label>
                            <textarea name="iframe" rows="2" id="iframe" class="form-control" placeholder="Ingresa aquí contenido embebido (iframe) de audio o video">{{ old('iframe', $post->iframe) }}</textarea>
                            {!! $errors->first('iframe', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box box-danger">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="datepicker">Fecha de Publicación:</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text"
                                       name="published_at"
                                       value="{{ old('published_at', $post->published_at ? $post->published_at->format('m/d/Y') : null) }}"
                                       class="form-control pull-right"
                                       id="datepicker">
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
                            <label for="category">Categorias</label>
                            <select name="category" id="category" class="form-control">
                                <option value="">Selecciona una categoria</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                            {{ old('category', $post->category_id) == $category->id ? 'selected' : '' }}
                                    >{{ $category->name }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('category', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('tags') ? 'has-error' : ''}}">
                            <label for="tags">Etiquetas</label>
                            <select class="form-control select2"
                                    multiple="multiple"
                                    id="tags"
                                    name="tags[]"
                                    data-placeholder="Selecciona una o más etiquetas" style="width: 100%;">
                                @foreach($tags as $tag)
                                    <option {{ collect(old('tags', $post->tags->pluck('id')))->contains($tag->id) ? 'selected' : '' }} value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('tags', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('excerpt') ? 'has-error' : ''}}">
                            <label for="excerpt">Extracto de la publicación</label>
                            <textarea name="excerpt" id="excerpt" class="form-control" placeholder="Ingresa aquí el extracto de la publicación">{{ old('excerpt', $post->excerpt) }}</textarea>

                            {!! $errors->first('excerpt', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group">
                            <div class="dropzone"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger btn-block">Guardar Publicación</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


@endsection

@push('styles')
<!-- dropzone -->
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">--}}
<link rel="stylesheet" href="/admin/css/dropzone.css">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="/admin/plugins/datepicker/datepicker3.css">
<!-- Select2 -->
<link rel="stylesheet" href="/admin/plugins/select2/select2.min.css">
@endpush

@push('scripts')
<!-- dropzone -->
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>--}}
<script src="/admin/js/dropzone.min.js"></script>
<!-- bootstrap datepicker -->
<script src="/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- ckeditor -->
{{--<script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>--}}
<script src="/admin/js/ckeditor.js"></script>
<!-- Select2 -->
<script src="/admin/plugins/select2/select2.full.min.js"></script>
<script>
    //Date picker
    $('#datepicker').datepicker({
        autoclose: true
    });
    $(".select2").select2();
    CKEDITOR.replace('editor');
    CKEDITOR.config.height = 315;

    //dropzone
    var myDropzone = new Dropzone('.dropzone', {
        url: '/admins/posts/{{ $post->url }}/photos',
        acceptedFiles: 'image/*',
        maxFilesize: 2,
        paramName: 'photo',
        headers:{
           'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        dictDefaultMessage: 'Arrastra las imágenes aqui para subirlas'
    });
    myDropzone.on('error', function(file, res){
        var msg = res.errors.photo[0];
//        console.log(res.errors.photo[0]);
        $('.dz-error-message:last > span').text(msg);
    });
    Dropzone.autoDiscover = false;
</script>
@endpush

