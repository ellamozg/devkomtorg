@extends('layout')

@section('content')
	<img src="" style="min-width: 100%; max-height: 650px; border: none;"></img>
@endsection

@section('footer')


<!-- Footer -->
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
                                    <!-- Rich Tooltip -->
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
			</footer>
@endsection