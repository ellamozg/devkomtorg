
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
	
	<style>
   body {
    background-image: url(images/2.jpg); /* Путь к фоновому изображению */
    background-attachment: fixed; /* Фиксируем фон веб-страницы */
	background-repeat: round;
   }
  </style>
	
	<!-- Scripts -->
    
    <script defer src="js/material.min.js"></script>
    

	
    
	
</head>
<body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="">
       
			<div class="">
			        <!-- Title -->
                    <h1>КОМТОРГ</h1>
					<!-- Add spacer, to align navigation to the right -->
					<div class="mdl-layout-spacer"></div>
					
				   
					
					<!-- Add spacer, to align navigation to the right -->
					<div class="mdl-layout-spacer"></div>
					<!-- Navigation. We hide it in small screens. -->
					<nav class="mdl-navigation mdl-layout--large-screen-only">        
						<!--Right Side Of Navbar -->
                                                 <div>
                                                    <!-- Authentication Links -->
                                                    @if (Auth::guest())
                                                        <a style="align: right;" href="{{ route('login') }}">Login</a>
                                                        <a style="align: right;" href="{{ route('register') }}">Register</a>
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
                                                    <div id="tt4" class="icon material-icons">share</div>
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
												<div align="right">
												<ul class="mdl-mega-footer__link-list">
													<li><a href="#">Как можно оплатить товар</a></li>
													<li><a href="#">Способы и условия доставки</a></li>
													<li><a href="#">Гарантии и сервисное обслуживание</a></li>
													<li><a href="#">Условия возвврата товара</a></li>
												  </ul>
												</div>
                                                
					</nav>            
					
			</div>
        
		<!-- Колапсирующее боковое меню -->
		<div class="mdl-layout__drawer">
			<span class="mdl-layout-title"></span>
			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" href="">Профиль</a>
				<a class="mdl-navigation__link" href="product">Объекты</a>
				<a class="mdl-navigation__link" href="report">Отчеты</a>
				<a class="mdl-navigation__link" href="productList">Экспорт/Импорт</a>
				<a class="mdl-navigation__link" href="">Сообщения</a>
				<a class="mdl-navigation__link" href="">История действий</a>
				<a class="mdl-navigation__link" href="">Друзья</a>
				<a class="mdl-navigation__link" href="">Медиа-файлы</a>
			</nav>
		</div>
        <main class="mdl-layout__content">
			
			<div class="page-content"><!-- Your content goes here -->
				
				    
			</div>
			<!-- Footer 
			<footer class="mdl-mega-footer">
				<div class="mdl-mega-footer__middle-section">
					<div class="mdl-mega-footer__drop-down-section">
					  <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
					  <h1 class="mdl-mega-footer__heading">Как это работает?</h1>
					  <ul class="mdl-mega-footer__link-list">
						<li><a href="#">Как можно оплатить товар</a></li>
						<li><a href="#">Способы и условия доставки</a></li>
						<li><a href="#">Гарантии и сервисное обслуживание</a></li>
						<li><a href="#">Условия возвврата товара</a></li>
					  </ul>
					</div>
					<div class="mdl-mega-footer__drop-down-section">
					    <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
					    <h1 class="mdl-mega-footer__heading">Больше возможностей и удобства</h1>
					    <ul class="mdl-mega-footer__link-list">
                                                        <li><a href="#">Списки желаний</a></li>
							<li><a href="#">История покупок</a></li>
                                                        <li><a href="#">Контроль вашего заказа</a></li>
					    </ul>
					</div>
					<div class="mdl-mega-footer__drop-down-section">
					  <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
					    <h1 class="mdl-mega-footer__heading">Почему КОМТОРГ?</h1>
					    <ul class="mdl-mega-footer__link-list">
							<li><a href="#">О нас</a></li>
							<li><a href="#">Контакты</a></li>
					    </ul>
					</div>
					<div class="mdl-mega-footer__drop-down-section">
					    <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
					    <h1 class="mdl-mega-footer__heading">Есть вопросы?</h1>
					    <ul class="mdl-mega-footer__link-list">
							<li><a href="#">Популярные вопросы</a></li>
							<li><a href="#">Задать вопрос</a></li>
                                            </ul>
					</div>
			    </div>
			    <div class="mdl-mega-footer__bottom-section">
                                <div class="mdl-logo">
                                    
                                    <div id="tt3" class="icon material-icons">cloud_upload</div>
                                    <div class="mdl-tooltip" data-mdl-for="tt3">
                                    Upload <strong>file.zip</strong>
                                    </div>
                                </div>                          
                                <ul class="mdl-mega-footer__link-list">
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Privacy & Terms</a></li>
                                </ul>
			    </div>
			</footer>-->
	    </main>
    </div>
    
    
</body>