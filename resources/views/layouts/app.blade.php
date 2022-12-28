<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
		<meta name="description" content="Описание страницы">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="{{ asset('./favicon/ms-icon-144x144.png') }}">
		<meta name="theme-color" content="#4a61f0">
		<meta name="format-detection" content="telephone=no">
		<title>{{ $title }}</title>
		<link rel="apple-touch-icon" href="{{ asset('./favicon/apple-icon-57x57.png') }}" sizes="57x57">
		<link rel="apple-touch-icon" href="{{ asset('./favicon/apple-icon-60x60.png') }}" sizes="60x60">
		<link rel="apple-touch-icon" href="{{ asset('./favicon/apple-icon-72x72.png') }}" sizes="72x72">
		<link rel="apple-touch-icon" href="{{ asset('./favicon/apple-icon-76x76.png') }}" sizes="76x76">
		<link rel="apple-touch-icon" href="{{ asset('./favicon/apple-icon-114x114.png') }}" sizes="114x114">
		<link rel="apple-touch-icon" href="{{ asset('./favicon/apple-icon-120x120.png') }}" sizes="120x120">
		<link rel="apple-touch-icon" href="{{ asset('./favicon/apple-icon-144x144.png') }}" sizes="144x144">
		<link rel="apple-touch-icon" href="{{ asset('./favicon/apple-icon-152x152.png') }}" sizes="152x152">
		<link rel="apple-touch-icon" href="{{ asset('./favicon/apple-icon-180x180.png') }}" sizes="180x180">
		<link rel="icon" href="{{ asset('./favicon/favicon.ico') }}">
		<link rel="icon" href="{{ asset('./favicon/favicon-16x16.png') }}" sizes="16x16">
		<link rel="icon" href="{{ asset('./favicon/favicon-32x32.png') }}" sizes="32x32">
		<link rel="icon" href="{{ asset('./favicon/favicon-96x96.png') }}" sizes="96x96">
		<link rel="icon" href="{{ asset('./favicon/android-icon') }}-192x192.png" sizes="192x192">
		<link rel="manifest" href="{{ asset('./favicon/site.webmanifest') }}">
		<!-- Fonts-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
		<link href="https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap" rel="stylesheet">
		<!-- Style-->
		<link rel="stylesheet" href="{{ asset('./css/main.css?v=1669497728198') }}">
	</head>
	<body @if (\Request::route()->getName() != 'main')
	class="inner-page"
	@endif>
		<div class="site">
			<!-- Header Start-->
			<header class="header">
				<div class="container">
					<div class="header__wrapper"><a class="header__logo" href="{{ route('main', $locale) }}"><img class="header__logo--white" src="{{ asset('./logo.svg') }}" alt="logo" width="171" height="60"><img class="header__logo--blue" src="{{ asset('logo-3.svg') }}" alt="logo" width="171" height="60"></a>
						<nav class="header__menu">
							<div class="header__border">
								<div class="header__button">
									<button class="header__close btn js-burger" type="button"><span></span><span></span></button>
								</div>
								<div class="header__logos"><a class="header__logo" href="{{ route('main', $locale) }}"><img src="{{ asset('./logo-2.svg') }}" alt="logo" width="135" height="47"></a></div>
							</div>
							<div class="header__border">
								<div class="header__list">
                                    <a class="header__link
									@if (\Request::route()->getName() == 'main')
										header__link--active
									@endif" href="{{ route('main', $locale) }}" title="{{ __('layouts.main') }}">{{ __('layouts.main') }}</a>
                                    <a class="header__link
									@if (\Request::route()->getName() == 'services')
										header__link--active
									@endif" href="{{ route('services', $locale) }}" title="{{ __('layouts.services') }}">{{ __('layouts.services') }}</a>
                                    <a class="header__link
									@if (\Request::route()->getName() == 'team')
										header__link--active
									@endif" href="{{ route('team', $locale) }}" title="{{ __('layouts.team') }}">{{ __('layouts.team') }}</a>
								</div>
							</div>
							<div class="header__border">
								<div class="header__languages">
									<div class="languages js-lang">
                                        <a class="languages__current" href="javascript:void(0);">
                                            <img class="languages__icon" src="{{ asset('images/icons/' . $locale . '.png') }}"
                                            alt="ru" width="22" height="15">
                                            <span class="languages__name">
                                                {{ Illuminate\Support\Str::upper($locale) }}</span>
                                        </a>
                                        <div class="languages__items">
                                            <a class="languages__link languages__link" href="{{ route(\Request::route()->getName(), 'ru') }}">
                                                <img class="languages__icon" src="{{ asset('./images/icons/ru.png') }}" alt="Русский" width="22" height="15">
                                                <span class="languages__name languages__name--secondary">{{ __('layouts.russian') }}</span>
                                            </a>
                                            <a class="languages__link" href="{{ route(\Request::route()->getName(), 'en') }}">
                                                <img class="languages__icon" src="{{ asset('./images/icons/en.png') }}" alt="English" width="22" height="15">
                                                <span class="languages__name languages__name--secondary">{{ __('layouts.english') }}</span>
                                            </a>
                                            <a class="languages__link" href="{{ route(\Request::route()->getName(), 'fi') }}">
                                                <img class="languages__icon" src="{{ asset('./images/icons/fi.png') }}" alt="Suomea" width="22" height="15">
                                                <span class="languages__name languages__name--secondary">{{ __('layouts.finnish') }}</span>
                                            </a>
                                            <a class="languages__link" href="{{ route(\Request::route()->getName(), 'sv') }}">
                                                <img class="languages__icon" src="{{ asset('./images/icons/sv.png') }}" alt="Svensk" width="22" height="15">
                                                <span class="languages__name languages__name--secondary">{{ __('layouts.swedish') }}</span>
                                            </a>
                                            <a class="languages__link" href="{{ route(\Request::route()->getName(), 'uk') }}">
                                                <img class="languages__icon" src="{{ asset('./images/icons/uk.png') }}" alt="Украинский" width="22" height="15">
                                                <span class="languages__name languages__name--secondary">{{ __('layouts.ukrainian') }}</span>
                                            </a>
                                        </div>
									</div>
								</div>
							</div>
							<div class="header__border">
								<div class="header__social">
									<div class="socials">
                                        <div class="socials__title">{{ __('layouts.we are in social networks') }}</div>
                                        <div class="socials__items"><a class="socials__item" href="#"
                                                title="fb" target="_blank" rel="nofollow">
                                                <svg class="socials__icon">
                                                    <use xlink:href="{{ asset('images/sprites.svg#fb') }}"></use>
                                                </svg></a><a class="socials__item" href="#" title="instagram"
                                                target="_blank" rel="nofollow">
                                                <svg class="socials__icon">
                                                    <use xlink:href="{{ asset('images/sprites.svg#instagram') }}"></use>
                                                </svg></a><a class="socials__item" href="#" title="twitter"
                                                target="_blank" rel="nofollow">
                                                <svg class="socials__icon">
                                                    <use xlink:href="{{ asset('images/sprites.svg#twitter') }}"></use>
                                                </svg></a><a class="socials__item" href="#" title="linkedn"
                                                target="_blank" rel="nofollow">
                                                <svg class="socials__icon">
                                                    <use xlink:href="{{ asset('images/sprites.svg#linkedn') }}"></use>
                                                </svg></a>
                                        </div>
                                    </div>
								</div>
							</div>
						</nav>
						<div class="header__right">
							<div class="languages js-lang">
                                <a class="languages__current" href="javascript:void(0);">
                                    <img class="languages__icon" src="{{ asset('images/icons/' . $locale . '.png') }}"
                                    alt="ru" width="22" height="15">
                                    <span class="languages__name">
                                        {{ Illuminate\Support\Str::upper($locale) }}</span>
                                </a>
								<div class="languages__items">
                                    <a class="languages__link languages__link" href="{{ route(\Request::route()->getName(), 'ru') }}">
                                        <img class="languages__icon" src="{{ asset('./images/icons/ru.png') }}" alt="Русский" width="22" height="15">
                                        <span class="languages__name languages__name--secondary">{{ __('layouts.russian') }}</span>
                                    </a>
                                    <a class="languages__link" href="{{ route(\Request::route()->getName(), 'en') }}">
                                        <img class="languages__icon" src="{{ asset('./images/icons/en.png') }}" alt="English" width="22" height="15">
                                        <span class="languages__name languages__name--secondary">{{ __('layouts.english') }}</span>
                                    </a>
                                    <a class="languages__link" href="{{ route(\Request::route()->getName(), 'fi') }}">
                                        <img class="languages__icon" src="{{ asset('./images/icons/fi.png') }}" alt="Suomea" width="22" height="15">
                                        <span class="languages__name languages__name--secondary">{{ __('layouts.finnish') }}</span>
                                    </a>
                                    <a class="languages__link" href="{{ route(\Request::route()->getName(), 'sv') }}">
                                        <img class="languages__icon" src="{{ asset('./images/icons/sv.png') }}" alt="Svensk" width="22" height="15">
                                        <span class="languages__name languages__name--secondary">{{ __('layouts.swedish') }}</span>
                                    </a>
                                    <a class="languages__link" href="{{ route(\Request::route()->getName(), 'uk') }}">
                                        <img class="languages__icon" src="{{ asset('./images/icons/uk.png') }}" alt="Украинский" width="22" height="15">
                                        <span class="languages__name languages__name--secondary">{{ __('layouts.ukrainian') }}</span>
                                    </a>
								</div>
							</div><a class="btn btn__outline js-open-modal" href="#callback">{{ __('layouts.order_now') }}</a>
						</div>
						<button class="header__burger btn js-burger" type="button"><span></span><span></span><span></span></button>
					</div>
				</div>
			</header>
			<!-- Header End-->

        @yield('main')

				<!-- Modal for Callback Start-->
		<div class="modal" id="callback">
			<div class="modal__wrapper">
				<button class="modal__close btn js-close-modal" type="button"><span class="sr-only">close</span></button>
				<div class="modal__block">
					<div class="modal__body">
						<h2 class="modal__title">{{ __('popUpWindow.cost calc') }}</h2>
						<p class="modal__subtitle">{{ __('popUpWindow.cost calc subtitle') }}</p>
						<form class="modal__form js-validation" action="/send.php" method="POST">
							@csrf
							<div class="checkboxs-group">
								<div class="checkbox-group">
									<input type="checkbox" name="choice" id="modalChoise-0" value="mob&web&design">
									<label for="modalChoise-0">{{ __('popUpWindow.Mobile App & Web Design') }}</label>
								</div>
								<div class="checkbox-group">
									<input type="checkbox" name="choice" id="modalChoise-1" value="saas">
									<label for="modalChoise-1">{{ __('popUpWindow.SAAS') }}</label>
								</div>
								<div class="checkbox-group">
									<input type="checkbox" name="choice" id="modalChoise-2" value="webdev">
									<label for="modalChoise-2">{{ __('popUpWindow.Website Development') }}</label>
								</div>
								<div class="checkbox-group">
									<input type="checkbox" name="choice" id="modalChoise-3" value="dessys">
									<label for="modalChoise-3">{{ __('popUpWindow.Design Systems') }}</label>
								</div>
								<div class="checkbox-group">
									<input type="checkbox" name="choice" id="modalChoise-4" value="crm&cms&webapp">
									<label for="modalChoise-4">{{ __('popUpWindow.CRM, CMS, Web Apps') }}</label>
								</div>
								<div class="checkbox-group">
									<input type="checkbox" name="choice" id="modalChoise-5" value="strategy&design">
									<label for="modalChoise-5">{{ __('popUpWindow.Strategy & Design') }}</label>
								</div>
								<div class="checkbox-group">
									<input type="checkbox" name="choice" id="modalChoise-6" value="branding">
									<label for="modalChoise-6">{{ __('popUpWindow.Branding & Visual Identity') }}</label>
								</div>
								<div class="checkbox-group">
									<input type="checkbox" name="choice" id="modalChoise-7" value="wireframing&usertesting">
									<label for="modalChoise-7">{{ __('popUpWindow.Wireframing & User Testing') }}</label>
								</div>
							</div>
							<div class="inputs-group mt-20">
								<div class="form-group inputs-group__col inputs-group__col-6">
									<input type="text" name="name" placeholder="{{ __('popUpWindow.your name') }}">
								</div>
								<div class="form-group inputs-group__col inputs-group__col-6">
									<input type="email" name="email" placeholder="{{ __('popUpWindow.your email') }}">
								</div>
								<div class="form-group inputs-group__col">
									<textarea name="message" id="message" placeholder="{{ __('popUpWindow.Write here') }}"></textarea>
								</div>
							</div>
							<div class="section-form__bottom">
								<div class="agree">
									<input type="checkbox" name="agree" id="agree2">
									<label for="agree2">{{ __('popUpWindow.form agreement') }}</label>
								</div>
								<button class="btn btn__primary" type="submit">{{ __('popUpWindow.send') }}</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal for Callback End-->
		<!-- Modal for success Start-->
		<div class="modal modal--success">
			<div class="modal__wrapper">
				<button class="modal__close btn js-close-modal" type="button"><span class="sr-only">close</span></button>
				<div class="modal__block">
					<div class="modal__body modal--center"><img src="{{ asset('images/icons/success.svg') }}" alt="success icon" width="120" height="120" style="margin-bottom: 20px;">
						<h2 class="modal__title">{{ __('popUpWindow.Message sent successfully') }}</h2>
						<p class="modal__subtitle">{{ __('popUpWindow.We will answer you shortly') }}</p>
						<button class="btn btn__primary js-close-modal" type="button">{{ __('popUpWindow.close') }}</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal for success End-->
		<script>
			if (!('IntersectionObserver' in window)) {
				var script = document.createElement("script");
				script.src = "https://raw.githubusercontent.com/w3c/IntersectionObserver/master/polyfill/intersection-observer.js";
				document.getElementsByTagName('head')[0].appendChild(script);
			}
		</script>
		<script src="{{ asset('js/vendor.js?v=1669061980956') }}"></script>
		<script src="{{ asset('js/main.js?v=1669061980956') }}"></script>
		<script>$(".js-validation").each(function() {
  $(this).validate({
    errorElement: "span",
    rules: {
      name: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
      message: {
        required: true
      },
      agree: {
        required: true
      }
    },
    messages: {
      name: {{ __('popUpWindow.Please enter your name') }},
      email: {
        required: {{ __('popUpWindow.We need your email address to contact you.') }},
        email: {{ __('popUpWindow.Your email address must be in the format name@domain.com') }}
      },
      message: {{ __('popUpWindow.Please write a message') }},
      agree: {{ __('popUpWindow.Accept the privacy policy') }}
    },
    submitHandler: function(form) {
      var serializedData = $(form).serialize();
      $.ajax({
          url: "url.php", 
          type: "POST",             
          data: serializedData,
          success: function(data) {
            $('.modal--success').fadeIn();
          }
      });
      return false;
    },
  });
});
		</script>

			<!-- Footer Start-->
			<footer class="footer">
				<div class="container">
					<div class="footer__wrapper">
						<div class="footer__top">
							<div class="footer__left">
                                <a class="footer__logo" href="{{ route('main', $locale) }}">
                                    <img src="{{ asset('logo.svg') }}" alt="logo" width="172" height="60">
                                </a>
                                <span class="footer__text">{{ __('layouts.footer text') }}</span></div>
							<div class="footer__right">
								<nav class="footer__nav nav">
									<div class="nav__items">
										<div class="nav__item"><a class="nav__link" href="{{ route('main', $locale) }}" title="{{ __('layouts.main') }}">{{ __('layouts.main') }}</a></div>
										<div class="nav__item"><a class="nav__link" href="{{ route('services', $locale) }}" title="{{ __('layouts.services') }}">{{ __('layouts.services') }}</a></div>
										<div class="nav__item"><a class="nav__link" href="{{ route('team', $locale) }}" title="{{ __('layouts.team') }}">{{ __('layouts.team') }}</a></div>
									</div>
								</nav>
								<form class="footer__form form-subs js-validation">
									<div class="form-subs__title">{{ __('layouts.form sub title') }}</div>
									<div class="form-subs__group form-group">
										<input type="email" name="email" placeholder="{{ __('layouts.your email') }}">
										<button class="btn btn__rounded" type="submit">
											<svg>
												<use xlink:href="{{ asset('./images/sprites.svg#send') }}"></use>
											</svg>
										</button>
									</div>
								</form>
							</div>
						</div>
						<div class="footer__bottom">
							<p class="footer__copyright">{{ __('layouts.All Rights Reserved') }}<span data-actual-year></span></p>
							<div class="footer__links">
                                <a class="footer__link" href="#terms" title="Terms &amp; Conditions">{{ __('layouts.Terms & Conditions') }}</a>
                                <a class="footer__link" href="#policy" title="Privacy &amp; Policy">{{ __('layouts.Privacy & Policy') }}</a>
                            </div>
						</div>
					</div>
				</div>
			</footer>
			<!-- Footer End-->
    </div>
</body>

</html>
