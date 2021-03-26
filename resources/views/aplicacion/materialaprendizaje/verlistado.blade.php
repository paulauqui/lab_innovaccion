@extends('layouts.aplicacion.app')
@section('header-css')
    <style>
        .cs-sidebar { background: #f2f2f2; }

        .bg-size-contain {
            background-size: contain;
            background-repeat: no-repeat;
            background-position: right;
        }

    </style>
@endsection

@section('content')
<br /><br />
    <section class="container container pt-md-5">
        <div class="row align-items-center">
            <div class="col-lg-5 pt-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5 text-primary">Publicaciones y Herramientas</h1>
                <div class="py-3 text-justify">
                    <div class="cs-callout">¡Compartamos material de lectura y herramientas para fortalecer nuestras habilidades y conocimientos de innovación!</p>

                        Publica artículos, blogs, libros, y herramientas entre otros para construir una cultura de innovación.
                        Deja tus comentarios y reflexiones sobre la utilidad de estos.

                    </div>
                </div>
                <div class="shadow-lg p-3 mb-5 btn-purple-gradient text-color-white rounded text-justify" style="">
                    <strong>Indicaciones</strong>
                    <ul>
                        <li>Publica el artículo o herramienta en el formulario.</li>
                        <li>Revisa y descarga el material de aprendizaje y deja tus comentarios en los foros respectivos de cada publicación.</li>
                    </ul>
                </div>

            </div>
            <div class="d-none d-md-block  col-sm-0 col-md-6 py-8 bg-size-contain order-md-2 overflow-hidden " style="background-image: url({{ asset('img/img_pages/herramientas.png') }})" alt="Side banner"></div>
        </div>

        <div id="video-gallery">
          <a href="https://www.youtube.com/embed/oAzGvQ_2RYM?controls=0" class="mr-3" loadYoutubeThumbnail='false' style="text-decoration:none;">
            <span class="custom-cs-video-btn custom-cs-video-btn-primary"></span>
            <span style="display: inline-flex;" class="font-size-lg p-2">Ver video</span>
          </a>
        </div>

    </section>
    <section class="container bg-overlay-content pt-3 mb-4" >

        <div class="row">
            <div class="text-center  col-12 col-lg-8 offset-lg-2">
                    <a class="btn btn-primary" style="border-color:#FF7F00;background: #FF7F00;"href="{{ route('app.material-de-aprendizaje') }}">Publicar material</a>
            </div>
        </div>

    </section>



    <div class="cs-sidebar-enabled cs-sidebar-right" >

        <div class="container">

            <div class="row">
                <!-- Content-->
                <div class="col-lg-9 cs-content py-4 mb-2 mb-sm-0 pb-sm-5">

                    {{-- <nav aria-label="breadcrumb">
                        <ol class="py-1 my-2 breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">List right sidebar</li>
                        </ol>
                    </nav>
                    <h1 class="mb-5">Blog</h1> --}}

                    <!-- Post-->
                    {{-- <div class="row">
                        <div class="col">

                            <p class="text-center font-size-lg">Publica el artículo o herramienta en el formulario a continuación.</p>
                            @if ($autentificacion)
                            <p class="text-center"><a class="btn" style="background: #a13d8f;color:#fafafc" href="{{route('app.material-de-aprendizaje.post')}}">Publica un artículo o herramienta.</a>
                            </p>
                            <p class="font-size-lg">Revisa y descarga el material de aprendiaje y deja tus comentarios en los foros respectivos de cada publicación.</p>
                        @endif

                        </div>
                    </div> --}}
                    <div class="row">

                        @foreach ($materiales as $material)
                        @php
                            $imagen =  asset('img/logo/favicon/android-chrome-192x192.png');
                            if(isset($material->user->perfil_id)){
                                if(Storage::disk('perfil')->exists($material->user->perfil->avatar)){
                                    $imagen = asset('storage/perfil/'.$material->user->perfil->avatar);
                                }
                            }
                        @endphp
                        <div class="col col-lg-6">
                            <div class="pb-5" style="min-width: 300px;">
                                <article class="card h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                                    @if ($material->tipo==0)
                                        <span class="badge badge-lg badge-floating badge-floating-right text-white" style="background:#ff7f00 ">Publicación</span>
                                    @else
                                        <span class="badge badge-lg badge-floating badge-floating-right text-white" style="background:#ff7f00 ">Herramienta</span>
                                    @endif
                                    <div class="card-body pt-5 px-4 px-xl-5">
                                        <h2 class="h4 nav-heading mb-4 text-primary">
                                            {{$material->nombre_publicacion}}
                                        </h2>

                                        <p><span class="mr-auto">{{$material->categoria->nombre}}</span> </p>
                                        {{-- <p><span class="mr-auto">{{$material->tipodocumento->nombre}}</span></p> --}}

                                    </div>
                                    <div class="px-4 px-xl-5 pt-2">

                                        <div class="row">
                                            <div class="col">
                                                <a class="media meta-link font-size-sm align-items-center">
                                                    <img class="rounded-circle" width="42" src="{{ $imagen }}"
                                                        alt="Sanomi Smith" />
                                                    <div class="media-body pl-2 ml-1 mt-n1 text-primary">por<span class="font-weight-semibold ml-1">{{$material->user->name}}</span></div>
                                                </a>


                                            </div>
                                            <div class="col">
                                                <div class="mt-3 text-right text-nowrap">
                                                    <a class="meta-link font-size-xs">
                                                    <i class="fe-message-square mr-1"></i>&nbsp;{{$material->comentarios->count()}}</a><span class="meta-divider"></span>
                                                    <span class="meta-link font-size-xs " ><i class="fe-calendar mr-1 mt-n1"></i>&nbsp;{{date('M d, Y', strtotime( $material->fecha_publicacion))}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row" style="margin-left:31%">
                                            @if ($material->tipo==0)
                                                <a class="btn btn-primary" href="{{route('material.detalle',$material->id)}}">Ver publicación</a>
                                            @else
                                                <a class="btn btn-primary" href="{{route('material.detalle',$material->id)}}">Ver herramienta</a>
                                            @endif
                                        </div>



                                    </div>





                                </article>

                            </div>
                        </div>


                        @endforeach
                        <div class="col-12">{{ $materiales->links() }}</div>

                    </div>

                </div>
                <!-- Sidebar-->
                <div class="cs-sidebar col-lg-3 pt-lg-5">
                    <div class="cs-offcanvas-collapse cs-offcanvas-right" id="blog-sidebar">
                        <div class="cs-offcanvas-cap navbar-box-shadow px-4 mb-3">
                            <h5 class="mt-1 mb-0">Ver mas</h5>
                            <button class="close lead" type="button" data-toggle="offcanvas"
                                data-offcanvas-id="blog-sidebar"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="cs-offcanvas-body px-4 pt-3 pt-lg-0 pr-lg-0 pl-lg-2 pl-xl-4" data-simplebar>
                            <!-- Search-->

                            <form action="{{route('material.searchnombre')}}" method="POST">
                                @csrf
                                @method("POST")
                                <div class="cs-widget mb-5">
                                    <h3 class="cs-widget-title">Buscar</h3>
                                    <div class="input-group-overlay">
                                        <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                    class="fe-search"></i></span></div>
                                        <input class="form-control prepended-form-control" type="text" name="buscador" placeholder="Buscar">
                                    </div>
                                </div>

                            </form>

                            <!-- Tipos-->
                            <div class="cs-widget cs-widget-categories mb-4">
                                <h3 class="cs-widget-title">Tipos</h3>
                                <ul>
                                    <li><a class="cs-widget-link" href="{{ route('material') }}">Publicaciones y Herramientas<small
                                        class="text-muted pl-1 ml-2">{{ App\Models\MaterialAprendizaje::count() }}</small></a></li>
                                    <li><a class="cs-widget-link" href="{{ route('material.search',0) }}">Publicaciones<small
                                                class="text-muted pl-1 ml-2">{{ App\Models\MaterialAprendizaje::where('tipo','0')->count() }}</small></a></li>
                                    <li><a class="cs-widget-link" href="{{ route('material.search',1) }}">Herramientas<small
                                                class="text-muted pl-1 ml-2">{{ App\Models\MaterialAprendizaje::where('tipo','1')->count() }}</small></a></li>
                                </ul>
                            </div>
                            <!-- Categories-->
                            <div class="cs-widget cs-widget-categories mb-5">
                                <h3 class="cs-widget-title">Categorías</h3>
                                <ul>
                                    {{-- <li><a class="cs-widget-link" href="#">Innovación<small
                                                class="text-muted pl-1 ml-2">23</small></a></li>
                                    <li><a class="cs-widget-link" href="#">Innovación abierta<small
                                                class="text-muted pl-1 ml-2">14</small></a></li>
                                    <li><a class="cs-widget-link" href="#">Design Thinking<small
                                                class="text-muted pl-1 ml-2">7</small></a></li>
                                    <li><a class="cs-widget-link" href="#">Tecnología<small
                                                class="text-muted pl-1 ml-2">19</small></a></li>
                                    <li><a class="cs-widget-link" href="#">Fondos<small
                                                class="text-muted pl-1 ml-2">35</small></a></li>
                                    <li><a class="cs-widget-link" href="#">Servicios &amp; Vacation<small
                                                class="text-muted pl-1 ml-2">28</small></a></li> --}}

                                    @foreach ($categorias as $categoria)
                                        <li><a class="cs-widget-link" href="{{ route('material.searchcategoria',$categoria->id) }}">{{$categoria->nombre}}<small
                                            class="text-muted pl-1 ml-2">{{ App\Models\MaterialAprendizaje::where('tema_tratado',$categoria->id)->count() }}</small></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- Featured posts-->
                            {{-- <div class="cs-widget mt-n1 mb-5">
                                <h3 class="cs-widget-title pb-1">Publicaciones en tendencia</h3>
                                <div class="media align-items-center pb-1 mb-3"><a class="d-block" href="#"><img
                                            class="rounded" width="64" src="img/pexels-pixabay-416405.jpg" alt="Post" /></a>
                                    <div class="media-body pl-2 ml-1">
                                        <h4 class="font-size-md nav-heading mb-1"><a class="font-weight-medium"
                                                href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h4>
                                        <p class="font-size-xs text-muted mb-0">por John Doe</p>
                                    </div>
                                </div>
                                <div class="media align-items-center pb-1 mb-3"><a class="d-block" href="#"><img
                                            class="rounded" width="64" src="img/pexels-pixabay-416405.jpg" alt="Post" /></a>
                                    <div class="media-body pl-2 ml-1">
                                        <h4 class="font-size-md nav-heading mb-1"><a class="font-weight-medium" href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</a></h4>
                                        <p class="font-size-xs text-muted mb-0">por Susan Mayer</p>
                                    </div>
                                </div>
                                <div class="media align-items-center"><a class="d-block" href="#"><img class="rounded"
                                            width="64" src="img/pexels-pixabay-416405.jpg" alt="Post" /></a>
                                    <div class="media-body pl-2 ml-1">
                                        <h4 class="font-size-md nav-heading mb-1"><a class="font-weight-medium"
                                                href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h4>
                                        <p class="font-size-xs text-muted mb-0">por Daniel Adams</p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
  <script>
      lightGallery(document.getElementById('video-gallery'));
  </script>
@endsection
