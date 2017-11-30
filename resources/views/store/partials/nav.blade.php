<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Navegacion</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand main-title" href="{{'http://localhost:8000'}}">SURFHHHHHHHWAVES™</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <p class="navbar-text">SURFWAVES™</p>



      <ul class="nav navbar-nav navbar-right">

         <li><a href="http://localhost:8000/store/partials/info">Acerca de Nosotros</a></li>
           <li><a href="http://localhost:8000/store/partials/about">Contactenos</a></li>


                         @include('admin.partials.menu-user')
      </ul>
    </div>
  </div>
</nav>
