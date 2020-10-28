<div class="col-lg-3 mb-4 mb-lg-0">
    <style scoped>
        .cs-widget-categories .cs-widget-link::before {
            top: 0.9rem!important;
            left: 0.1rem!important;
        }
    </style>
    <div class="bg-light rounded-lg box-shadow-lg">
        <div class="px-4 py-4 mb-1 text-center">
            <img class="d-block rounded-circle mx-auto my-2" width="110" src="http://placehold.it/80x80/?text=U">
            <h6 class="mb-0 pt-1">{{-- Auth::user()->name --}}
            </h6>
        </div>
        <div class="d-lg-block collapse pb-2" id="account-menu">
            <div class="cs-widget cs-widget-categories mb-5 pl-3">
                <ul id="menu">
                    <li><a class="cs-widget-link px-4 py-3 collapsed" href="#gestion" data-toggle="collapse">Gestión de innovación</a>
                        <ul class="collapse" id="gestion" data-parent="#menu">
                            <li><a class="cs-widget-link" href="#">Innovación abierta <small class="text-muted pl-1 ml-2">5</small></a></li>
                            <li><a class="cs-widget-link" href="#">Innovación pública <small class="text-muted pl-1 ml-2">12</small></a></li>
                            <li><a class="cs-widget-link" href="#">Innovación social <small class="text-muted pl-1 ml-2">0</small></a></li>
                        </ul>
                    </li>
                    <li><a class="cs-widget-link px-4 py-3 collapsed" href="#ecosistema" data-toggle="collapse">Ecosistema de innovación</a>
                        <ul class="collapse" id="ecosistema" data-parent="#menu">
                            <li><a class="cs-widget-link" href="#">Mapa de iniciativas</a></li>
                            <li><a class="cs-widget-link" href="#">Analítica</a></li>
                        </ul>
                    </li>
                    <li><a class="cs-widget-link px-4 py-3 collapsed" href="#recursos" data-toggle="collapse">Recursos</a>
                        <ul class="collapse" id="recursos" data-parent="#menu">
                            <li><a class="cs-widget-link" href="{{ route('app.escritorio.fondos') }}">Fondos <small class="text-muted pl-1 ml-2">{{ App\Models\Fondo::count() }}</small></a></li>
                            <li><a class="cs-widget-link" href="#{{ route('app.escritorio.eventos') }}">Eventos <small class="text-muted pl-1 ml-2">{{ App\Models\Evento::count() }}</small></a></li>
                            <li><a class="cs-widget-link" href="{{ route('app.escritorio.material') }}">Publicaciones y Herramientas <small class="text-muted pl-1 ml-2">{{ App\Models\MaterialAprendizaje::count() }}</small></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <?php /*
            {{-- <span
                    class="text-muted font-size-sm font-weight-normal ml-auto">{{ App\Models\::count() }}</span>
                --}}
            </a>
            <a class="d-flex align-items-center nav-link-style px-4 py-3" href="{{ route('app.escritorio.fondos') }}">
                Fondos registrados
                <span class="text-muted font-size-sm font-weight-normal ml-auto">{{ App\Models\Fondo::count() }}</span>
            </a>
            <a class="d-flex align-items-center nav-link-style px-4 py-3" href="{{ route('app.escritorio.eventos') }}">
                Eventos registrados
                <span class="text-muted font-size-sm font-weight-normal ml-auto">{{ App\Models\Evento::count() }}</span>
            </a>
            <a class="d-flex align-items-center nav-link-style px-4 py-3" href="{{ route('app.escritorio.material') }}">
                Materiales registrados
                <span
                    class="text-muted font-size-sm font-weight-normal ml-auto">{{ App\Models\MaterialAprendizaje::count() }}</span>
            </a>
            {{-- <a class="d-flex align-items-center nav-link-style px-4 py-3"
                href="{{ route('app.registro') }}">Mi Perfil</a>
            <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="{{ route('logout') }}">
                Cerrar sesión
            </a> --}}
            */
            ?>
        </div>
    </div>
</div>