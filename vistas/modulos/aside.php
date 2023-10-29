<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a style="cursor: pointer;" class="brand-link" onclick="CargarContenido('vistas/Menu_principal.php','content-wrapper')">
        <img src="vistas/assets/dist/img/Logo_IGAL.png" alt="IGAL Logo" class="brand-image elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">|</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">USER: ADMIN</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/Menu_principal.php','content-wrapper')">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Menú principal
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Bodega
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/inventario.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inventario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/agregar.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ingreso de productos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/retiro.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Solicitud de productos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/dashboards.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboards</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Producción
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Productos fabricados</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>DASHBOARDS</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<script>
     $(".nav-link").on('click',function(){
        $(".nav-link").removeClass('active');
        $(this).addClass('active');
     })
</script>