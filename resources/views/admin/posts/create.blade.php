<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
    <form action="{{ route('admin.posts.store') }}" method="post">
        {{ csrf_field() }}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal3Label">Agrega el título de la nueva Publicación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                        {{--<label for="title">Titulo de la publicación</label>--}}
                        <input type="text" id="title"
                               class="form-control"
                               name="title"
                               value="{{ old('title') }}"
                               placeholder="Ingresa aquí el titulo de la publicación" required>
                        {!! $errors->first('title', '<span class="help-block">:message</span>') !!}


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Crear publicación</button>
                </div>
            </div>
        </div>
    </form>
</div>