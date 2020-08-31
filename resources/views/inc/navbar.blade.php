	<!-- Header section  -->
	<nav class="nav-section">
		<div class="container">
			<!--div class="nav-right"-->
			<div class="nav-right">


			</div>
			<ul class="main-menu">
				<li class="active"><a href="/acceuil">Accueil</a></li>


				<li class="nav-item dropdown" style="margin-left: 5px">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						PROGRAMMES
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #020031;">
						<a class="dropdown-item" href="/programme.Technique" style="max-height: 5px">Techniques</a>
						<hr style="background-color: orange;max-height: 2px" style="max-height: 5px">
						<a class="dropdown-item " href="/programme.programmeProf" style="max-height: 5px">Professionnels</a>
						@if(!Auth::guard('utilisateur')->user());
						<a class="dropdown-item " href="/utilisateur/login" style="max-height: 5px">Mon Espace</a>
						@endif
					</div>
				</li>

				<li><a href="EFPT.show">EFPT</a></li>
				<li><a href=""> Projets</a></li>
				<li><a href="/documents.documents">DOCUMENTATION</a></li>

				<li class="nav-item dropdown" style="margin-left: 5px">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Partenaires
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #020031;">
						<a class="dropdown-item" href="#" style="max-height: 5px">Collectivités</a>
						<hr style="background-color: orange;max-height: 2px" style="max-height: 5px">
						<a class="dropdown-item" href="#" style="max-height: 5px">Ministéres</a>
						<hr style="background-color: orange;max-height: 2px">
						<a class="dropdown-item" href="#" style="max-height: 5px">PTF</a>
					</div>
				</li>



				@if(Auth::guard('utilisateur')->user());
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::guard('utilisateur')->user()->nom }} <span class="caret"></span>
					</a>


					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item  text-dark" href="{{ route('UtilisateurProgramme') }}">
							{{ __('Mes programmes demandés') }}
						</a>
						<a class="dropdown-item  text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
							{{ __('Deconnexion') }}
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>
				</li>
				@endif

				<!-- @auth
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>


					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item  text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
							{{ __('Deconnection') }}
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>
				</li>
				@endauth -->



			</ul>
		</div>
	</nav>
	<!-- Header section end -->