@if(Auth::check())
	<li class="nav-item array dropdown p-3">
	    <a class="nav-link dropdown-toggle text-dark font-weight-bold" data-wow-delay="800ms" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	      <i class="fa fa-user"> </i>{{Auth::user()->user}}<span class="carret"></span>
	    </a>
	    <ul class="dropdown-menu" role="menu">
			<li class="nav-item text-center">
				<a href="{{route('pregnancy.index')}}" class="text-dark">{{ Auth::user()->name }}</a>
			</li>
			<li class="nav-item text-center">
				<a href="{{route('pregnancy.create')}}" class="text-dark">Mi historial</a>
			</li>
			<li class="nav-item text-center dropdown">
				<a class="dropdown-item" href="{{ route('logout') }}"
					onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
					<span class="">{{ __('Cerrar sesión') }}</span>
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
			</li>	    	
	    </ul>
	</li>
@else
<li class="nav-item array dropdown p-3">
	<a href="#" class="nav-link dropdown-toggle text-dark font-weight-bold" data-wow-delay="800ms" data-toggle="dropdown" role="button" aria-expanded="false">
		<i class="fa fa-user"></i><span class="carret"></span>
	</a>
	<ul class="dropdown-menu" role="menu">
		<li class="nav-item text-center">
			<a class="text-center text-dark font-weight-bold" href="{{ route('login')}}">Iniciar sesión</a>
		</li>
	</ul>
</li>
@endif