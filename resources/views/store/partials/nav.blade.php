<section class="bg-transparent" id="nav-bar">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand ml-3 text-uppercase font-weight-bold" href="{{route('home.index')}}"><img src="{{asset('img/maternity.png')}}" height="70" alt="">Mi bebé y yo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto text-center text-uppercase">
        <li class="nav-item p-3">
          <a class="nav-link text-dark font-weight-bold" href="#calendar">Calendario </a>
        </li>
        <li class="nav-item p-3">
          <a class="nav-link text-dark font-weight-bold" href="#footer">Contacto </a>
        </li>
        @include('store.partials.menu-user')        
      </ul>
    </div>
  </nav>
</section>
<!-- <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand main-title" href="">Mi bebé y yo <img src="{{asset('img/')}}" alt=""></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class="navbar-text"></p>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="">Calendario <i class="fa fa-calendar"></i></a></li>
        <li><a href="#">Conocenos</a></li>
        <li><a href="#">Contacto</a></li>
        @include('store.partials.menu-user')
      </ul>
    </div>
  </div>
</nav> -->