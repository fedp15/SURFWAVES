<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <a href="/admin/home"><p class="navbar-text"><i class="fa fa-dashboard"></i> Administrador</p></a>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/">Tienda</a></li>
        <li><a href="/admin/categoria">Categorias</a></li>
        <li><a href="/admin/producto">Productos</a></li>
        <li><a href="#">Pedidos</a></li>
        <li><a href="#">Usuarios</a></li>

              @include('admin.partials.menu-user')
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
