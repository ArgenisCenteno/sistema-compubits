<div class="row"> <!--begin::Col-->
    <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{$ventas}}</h3>
                <p>Ventas</p>
            </div>
            <i class="small-box-icon fas fa-shopping-cart"></i> <!-- Updated icon -->
            <a href="{{route('ventas.index')}}" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                Ver más <i class="bi bi-link-45deg"></i>
            </a>
        </div> <!--end::Small Box Widget 1-->
    </div> <!--end::Col-->

    <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 2-->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{$compras}}<sup class="fs-5"></sup></h3>
                <p>Valor Neto de Inventario</p>
            </div>
            <i class="small-box-icon fas fa-boxes"></i> <!-- Updated icon -->
            <a href="{{route('almacen')}}" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                Ver más <i class="bi bi-link-45deg"></i>
            </a>
        </div> <!--end::Small Box Widget 2-->
    </div> <!--end::Col-->

    <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 3-->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{$dolar}}</h3>
                <p>Tasa del Dollar</p>
            </div>
            <i class="small-box-icon fas fa-dollar-sign"></i> <!-- Updated icon -->
            <a href="{{route('usuarios.index')}}" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                Ver más <i class="bi bi-link-45deg"></i>
            </a>
        </div> <!--end::Small Box Widget 3-->
    </div> <!--end::Col-->

    <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 4-->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{$productos}}</h3>
                <p>Productos</p>
            </div>
            <i class="small-box-icon fas fa-cogs"></i> <!-- Updated icon -->
            <a href="{{route('almacen')}}" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                Ver más <i class="bi bi-link-45deg"></i>
            </a>
        </div> <!--end::Small Box Widget 4-->
    </div> <!--end::Col-->
</div> <!--end::Row-->
