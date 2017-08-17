<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'Laravel') }}</title>-->

    

    <!-- Scripts -->
	
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    
     <!-- Styles-->
    <link href="{{ asset('css/appMaterialFormat.css') }}" rel="stylesheet"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	@yield('css')
	<!-- Scripts -->
    
    <script defer src="js/material.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>



	@yield('script')
    
	
</head>
<body>
   
    <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Title</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
            
						<!--Right Side Of Navbar -->
                                                 <div>
                                                    <!-- Authentication Links -->
                                                    @if (Auth::guest())
                                                        <a class="mdl-navigation__link mdl-logo" href="{{ route('login') }}">Login</a>
                                                        <a class="mdl-navigation__link mdl-logo" href="{{ route('register') }}">Register</a>
                                                    @else
                                                            
                                                                <a href="#" class="mdl-navigation__link mdl-logo" data-toggle="dropdown" role="button" aria-expanded="false">
                                                                   <span class="mdl-badge" data-badge="4"> {{ Auth::user()->name }} </span>
                                                                </a>
                                                           
                                                            <a class="mdl-navigation__link mdl-logo" href="{{ route('logout') }} "
                                                                        onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                                                                        Logout
                                                            </a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                        {{ csrf_field() }}
                                                            </form>
                                                    @endif
                                                </div>
                                                <!-- Multiline Tooltip -->
                                                <div class="mdl-logo">
                                                    <div id="tt4" class="icon material-icons">person</div>
                                                    <div class="mdl-tooltip" for="tt4">
                                                        Share your content<br>via social media
                                                    </div>   
                                                </div>
                                                <!-- Expandable Textfield -->
                                                <form action="#">
                                                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                                                    <label class="mdl-button mdl-js-button mdl-button--icon" for="sample6">
                                                      <i class="material-icons">search</i>
                                                    </label>
                                                    <div class="mdl-textfield__expandable-holder">
                                                      <input class="mdl-textfield__input" type="text" id="sample6">
                                                      <label class="mdl-textfield__label" for="sample-expandable">Expandable Input</label>
                                                    </div>
                                                  </div>
                                                </form>
                                                
					</nav>            
					
			</div>
        </header>
		<!-- Колапсирующее боковое меню -->
		<div class="mdl-layout__drawer">
			<span class="mdl-layout-title"></span>
			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" href="">Профиль</a>
				<a class="mdl-navigation__link" href="product">Объекты</a>
				<a class="mdl-navigation__link" href="report">Отчеты</a>
				<a class="mdl-navigation__link" href="productList">Экспорт/Импорт</a>
				<a class="mdl-navigation__link" href="productItems">Сообщения</a>
				<a class="mdl-navigation__link" href="draft">История действий</a>
				<a class="mdl-navigation__link" href="">Друзья</a>
				<a class="mdl-navigation__link" href="">Медиа-файлы</a>
			</nav>
		</div>
		
		<main class="mdl-layout__content">
					
					<div class="page-content"><!-- Your content goes here -->
						@yield('content')
							
					
					</div>
					@yield('footer')
		</main>
		
				
		
		
	
	
	</div>
		
    
</body>
    

</html>
