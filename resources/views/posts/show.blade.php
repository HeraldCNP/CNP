@extends('layout')

@section('contenido')
    <div class="row">

        <div class="col">
            <article class="post">
                @if($post->photos->count() === 1)
                    {{--<img class="img-fluid" src="{{ $post->photos->first()->url }}" alt="Card image">--}}
                    <figure class=""><img class="img-fluid" src="{{ $post->photos->first()->url }}" alt=""></figure>
                @elseif($post->photos->count() > 1)
                    @include('posts.slider')
                @elseif($post->iframe)
                    <div class="embed-responsive embed-responsive-16by9">
                        {!! $post->iframe !!}
                    </div>
                @endif
                <div class="content-post">
                    <header class="container-flex space-between">
                        <div class="date">
                            <span class="c-gris">{{ $post->published_at->format('d M Y') }}</span>
                        </div>
                        <div class="post-category">
                            <span class="category">{{ $post->category->name }}</span>
                        </div>
                    </header>
                    <h1>{{ $post->title }}</h1>
                    <div class="divider"></div>
                    <div class="image-w-text">
                        {!! $post->body !!}
                    </div>
                    <div class="divider"></div>
                    <footer class="container-flex space-between">
                        @include('partials.social-links', ['description' => $post->title])
                        <div class="tags container-flex">
                            @foreach($post->tags as $tag)
                                <span class="tag">#{{ $tag->name }}</span>
                            @endforeach
                        </div>
                    </footer>
                    <div class="comments">
                        <div class="divider"></div>
                        <div id="disqus_thread"></div>
                        @include('partials.disqus-script')

                    </div><!-- .comments -->
                </div>
            </article>
        </div>

    </div>
    <!-- /.row -->
@endsection

@section('title', $post->title)

@section('meta-tags')
    <meta name="description" content="{{ $post->excerpt }} - Colegio Nacional Pichincha"/>
    <meta name="keywords" content="pichincha, potosí, bolivia, 7 de mayo"/>
    <meta name="author" content="HeraldCNP - Herald Choque Vargas" />

    <!-- OPENGRAPH -->
    <meta property="og:title" content="{{ $post->title }} | Colegio Nacional Pichincha" />
    <meta property="og:type" content="Post" />
    <meta property="og:site_name" content="Colegio Nacional Pichincha" />
    <meta property="og:description" content="{{ $post->excerpt }} - Colegio Nacional Pichincha"/>
    <meta property="og:image" content="{{ url($post->photos->first()->url) }}" />
@endsection


@push('styles')
<link href="/css/normalize.css" rel="stylesheet">
<link href="/css/framework.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">
<link href="/css/responsive.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<![endif]-->
@endpush

@push('scripts')
<script src="/js/disqus/html5shiv.min.js"></script>
<script src="/js/disqus/respond.min.js"></script>

<script id="dsq-count-scr" src="/js/disqus/count.js" async></script>
@endpush