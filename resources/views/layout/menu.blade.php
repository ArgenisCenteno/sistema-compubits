<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"
    style="  background-color:rgb(8, 21, 33) !important; color: white !important"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="{{route('home')}}" class="brand-link">
            <!--begin::Brand Image--> <img src="{{asset('iconos/logo-final.png')}}" alt="SIAV"
                class="brand-image opacity-75 shadow" width="600px"> <!--end::Brand Image--> <!--begin::Brand Text-->
            <span class="brand-text fw-light"><strong></strong></span> <!--end::Brand Text--> </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->

            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                @if(Auth::user()->hasRole('superAdmin') || Auth::user()->hasRole('empleado'))
                    <div class="container-fluid">
                        <ul class="nav flex-column">
                            <!-- Gestionar Sistema -->
                            <li class="nav-item">
                                <a href="{{route('categorias.index')}}" class="nav-link">
                                    <i class="nav-icon fas fa-cogs"></i>
                                    <p>Categorías</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('subcategorias.index')}}" class="nav-link">
                                    <i class="nav-icon fas fa-sitemap"></i>
                                    <p>Subcategorías</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('tasas.index')}}" class="nav-link">
                                    <i class="nav-icon fas fa-dollar-sign"></i>
                                    <p>Moneda</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('almacen') }}" class="nav-link">
                                    <i class="nav-icon fas fa-archive"></i>
                                    <p>Inventario</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('usuarios.clientes')}}" class="nav-link">
                                    <i class="nav-icon fas fa-user-friends"></i>
                                    <p>Mis clientes</p>
                                </a>
                            </li>

                            <!-- Ventas -->
                            <li class="nav-item">
                                <a href="{{route('ventas.vender')}}" class="nav-link">
                                    <i class="nav-icon fas fa-cash-register"></i>
                                    <p>Punto de Venta</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('ventas.index')}}" class="nav-link">
                                    <i class="nav-icon fas fa-store"></i>
                                    <p>Ventas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('mantenimientos.index')}}" class="nav-link">
                                    <i class="nav-icon fas fa-wallet"></i>
                                    <p>Mantenimientos</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('mantenimientos.create')}}" class="nav-link">
                                    <i class="nav-icon fas fa-wallet"></i>
                                    <p>Registrar Mantenimiento</p>
                                </a>
                            </li>
                            <!-- Finanzas -->
                            <li class="nav-item">
                                <a href="{{route('aperturas.index')}}" class="nav-link">
                                    <i class="nav-icon fas fa-wallet"></i>
                                    <p>Caja</p>
                                </a>
                            </li>
                         

                            <!-- Administradores (solo para superAdmin) -->
                          
                        </ul>
                    </div>

                @else(Auth::role('cliente'))
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>{{Auth::user()->name ?? ''}}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('ventas.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-shopping-bag"></i>
                            <p>Mis compras</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('carrito.show')}}" class="nav-link">
                            <i class="nav-icon fas fa-shopping-cart"></i>
                            <p>Carrito</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('products')}}" class="nav-link">
                            <i class="nav-icon fas fa-store"></i>
                            <p>Seguir comprando</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('pagos.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-wallet"></i>
                            <p>Gestión de Pagos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('usuarios.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-user-cog"></i>
                            <p>Perfil</p>
                        </a>
                    </li>

                @endif


            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside> <!--end::Sidebar--> <!--begin::App Main-->