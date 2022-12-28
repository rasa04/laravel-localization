@extends('layouts.app')
@section('main')
			
			<main class="main">
				<!-- Hero Section Start-->
				<section class="hero">
					<img class="hero__icon hero__icon--first" src="{{ asset('./images/content/hero/dot-1.svg') }}" alt="dot">
					<img class="hero__icon hero__icon--second" src="{{ asset('./images/content/hero/dot-1.svg') }}" alt="dot">
					<img class="hero__icon hero__icon--three" src="{{ asset('./images/content/hero/dot-1.svg') }}" alt="dot">
					<img class="hero__icon hero__icon--four" src="{{ asset('./images/content/hero/dot-1.svg') }}" alt="dot">
					<div class="container">
						<div class="hero__block">
							<h1 class="hero__title"><span class="primary-text">{{ __('hero') }}</span><br>{{ __('mainPage.hero.hero_title 2') }}</h1>
							<p class="hero__subtitle">{{ __('mainPage.hero.hero_title sub') }}</p>
							<a class="btn btn__primary hero__btn js-to-anchor" href="#services">{{ __('mainPage.hero.more') }}</a>
						</div>
					</div>
				</section>
				<!-- Hero Section End-->
				<!-- Services Section Start-->
				<section class="services-section" id="services" data-aos="fade-up">
					<div class="container">
						<div class="border-text services-section--absolute services-section--first">{{ __('mainPage.services.DESIGN') }}</div>
						<div class="border-text services-section--absolute services-section--second">{{ __('mainPage.services.CODE') }}</div>
						<div class="border-text services-section--absolute services-section--third">{{ __('mainPage.services.IMPLEMENT') }}</div>
						<div class="services-section__wrapper">
							<div class="heading services-section__title">
								<div class="header__block">
									<p class="heading__subtitle" data-aos="fade-up" data-aos-delay="100">{{ __('mainPage.services.heading__subtitle') }}</p>
									<h2 class="heading__title" data-aos="fade-up" data-aos-delay="300">{{ __('mainPage.services.heading__title') }}</h2>
								</div>
								<div class="heading__other">
									<div class="swiper-buttons">
										<div class="swiper-button-prev">
											<svg>
												<use xlink:href="{{ asset('./images/sprites.svg#arrow-left') }}"></use>
											</svg>
										</div>
										<div class="swiper-button-next">
											<svg>
												<use xlink:href="{{ asset('./images/sprites.svg#arrow-right') }}"></use>
											</svg>
										</div>
									</div>
								</div>
							</div>
							<div class="services-section__slider">
								<div class="swiper">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<article class="card" data-aos="fade-up" data-aos-delay="400"><img class="card__icon" src="{{ asset('images/content/hero/dot-1.svg') }}" alt="dot" width="29" height="29">
												<h3 class="card__title">{{ __("mainPage")["services"]["card 1"] }}</h3>
												<p class="card__subtitle">{{ __('mainPage.services.card 1 desc') }}</p>
											</article>
										</div>
										<div class="swiper-slide">
											<article class="card" data-aos="fade-up" data-aos-delay="500"><img class="card__icon" src="{{ asset('images/content/hero/dot-1.svg') }}" alt="dot" width="29" height="29">
												<h3 class="card__title">{{ __("mainPage")["services"]["card 2"] }}</h3>
												<p class="card__subtitle">{{ __('mainPage.services.card 2 desc') }}</p>
											</article>
										</div>
										<div class="swiper-slide">
											<article class="card" data-aos="fade-up" data-aos-delay="600"><img class="card__icon" src="{{ asset('images/content/hero/dot-1.svg') }}" alt="dot" width="29" height="29">
												<h3 class="card__title">{{ __("mainPage")["services"]["card 3"] }}</h3>
												<p class="card__subtitle">{{ __('mainPage.services.card 3 desc') }}</p>
											</article>
										</div>
										<div class="swiper-slide">
											<article class="card" data-aos="fade-up" data-aos-delay="700"><img class="card__icon" src="{{ asset('images/content/hero/dot-1.svg') }}" alt="dot" width="29" height="29">
												<h3 class="card__title">{{ __("mainPage")["services"]["card 4"] }}</h3>
												<p class="card__subtitle">{{ __('mainPage.services.card 4 desc') }}</p>
											</article>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- Services Section End-->
				<!-- Projects Section Start-->
				<section class="projects" data-aos="fade-up">
					<div class="container">
						<div class="heading">
							<div class="header__block">
								<p class="heading__subtitle" data-aos="fade-up" data-aos-delay="100">{{ __('mainPage.projects.Portfolio') }}</p>
								<h2 class="heading__title" data-aos="fade-up" data-aos-delay="300">{{ __('mainPage.projects.Our work') }}</h2>
							</div>
							<div class="heading__other for-desktop is-hidden"><a class="btn btn__primary projects__btn" href="#">{{ __('mainPage.projects.view all') }}</a></div>
						</div>
						<div class="projects__row">
							<div class="projects__col projects__col-5"><a class="project-card js-project" href="javascript:void(0);" data-image="{{ asset('images/content/projects/project-1.jpg') }}" data-title="Название проекта" data-subtitle="Lorem ipsum dolor sit amet consectetur. Eget at dictum feugiat amet semper tristique at suspendisse. Sagittis." data-link="https://test.com" data-aos="fade-up" data-aos-delay="200">
									<div class="project-card__picture"><img class="image js-lazy project-card__image" draggable="false" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAQAAAAnOwc2AAAAD0lEQVR42mNkwAIYh7IgAAVVAAuInjI5AAAAAElFTkSuQmCC" data-src="./images/content/projects/project-1.jpg" alt=""/>
									</div>
									<h4 class="project-card__title">{{ __('mainPage.projects.Project name1') }}</h4>
									<p class="project-card__subtitle">{{ __('mainPage.projects.Project desc1') }}</p></a><a class="project-card js-project" href="javascript:void(0);" data-image="{{ asset('images/content/projects/project-2.jpg') }}" data-title="Название проекта" data-subtitle="Lorem ipsum dolor sit amet consectetur. Eget at dictum feugiat amet semper tristique at suspendisse. Sagittis." data-link="https://test.com" data-aos="fade-up" data-aos-delay="300">
									<div class="project-card__picture"><img class="image js-lazy project-card__image" draggable="false" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAQAAAAnOwc2AAAAD0lEQVR42mNkwAIYh7IgAAVVAAuInjI5AAAAAElFTkSuQmCC" data-src="./images/content/projects/project-2.jpg" alt=""/>
									</div>
									<h4 class="project-card__title">{{ __('mainPage.projects.Project name2') }}</h4>
									<p class="project-card__subtitle">{{ __('mainPage.projects.Project desc2') }}</p></a>
							</div>
							<div class="projects__col projects__col-7"><a class="project-card js-project" href="javascript:void(0);" data-image="{{ asset('images/content/projects/project-3.jpg') }}" data-title="Название проекта" data-subtitle="Lorem ipsum dolor sit amet consectetur. Eget at dictum feugiat amet semper tristique at suspendisse. Sagittis." data-link="https://test.com" data-aos="fade-up" data-aos-delay="400">
									<div class="project-card__picture"><img class="image js-lazy project-card__image" draggable="false" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAQAAAAnOwc2AAAAD0lEQVR42mNkwAIYh7IgAAVVAAuInjI5AAAAAElFTkSuQmCC" data-src="./images/content/projects/project-3.jpg" alt=""/>
									</div>
									<h4 class="project-card__title">{{ __('mainPage.projects.Project name3') }}</h4>
									<p class="project-card__subtitle">{{ __('mainPage.projects.Project desc3') }}</p></a><a class="project-card js-project" href="javascript:void(0);" data-image="{{ asset('images/content/projects/project-4.jpg') }}" data-title="Название проекта" data-subtitle="Lorem ipsum dolor sit amet consectetur. Eget at dictum feugiat amet semper tristique at suspendisse. Sagittis." data-link="https://test.com" data-aos="fade-up" data-aos-delay="500">
									<div class="project-card__picture"><img class="image js-lazy project-card__image" draggable="false" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAQAAAAnOwc2AAAAD0lEQVR42mNkwAIYh7IgAAVVAAuInjI5AAAAAElFTkSuQmCC" data-src="./images/content/projects/project-4.jpg" alt=""/>
									</div>
									<h4 class="project-card__title">{{ __('mainPage.projects.Project name4') }}</h4>
									<p class="project-card__subtitle">{{ __('mainPage.projects.Project desc4') }}</p></a>
							</div>
						</div>
						<div class="for-mobile mt-20"><a class="btn btn__primary projects__btn is-hidden" href="#" data-aos="fade-up">{{ __('mainPage.projects.view all') }}</a></div>
					</div>
				</section>
				<!-- Projects Section End-->
				<!-- Callback Section Start-->
				<section class="callback" data-aos="fade-up">
					<div class="container">
						<div class="callback__section">
							<form class="callback__block">
								<h2 class="callback__title">{{ __('mainPage.callback.callback__title') }}</h2>
								<p class="callback__subtitle">{{ __('mainPage.callback.callback__subtitle') }}</p>
								<div class="callback__group form-input">
									<input type="email" name="email" placeholder="{{ __('mainPage.callback.Email address') }}">
									<button class="btn btn__primary" type="submit">{{ __('mainPage.callback.Request a call') }}</button>
								</div>
							</form>
						</div>
					</div>
				</section>
				<!-- Callback Section End-->
				<!-- Advantage Section Start-->
				<section class="advantage" data-aos="fade-up">
					<div class="container">
						<div class="advantage__wrapper">
							<div class="heading heading--center">
								<div class="header__block">
									<p class="heading__subtitle text-center" data-aos="fade-up" data-aos-delay="100">{{ __('mainPage.advantage.Advantages') }}</p>
									<h2 class="heading__title text-center" data-aos="fade-up" data-aos-delay="300">{{ __('mainPage.advantage.Why choose us') }}</h2>
								</div>
							</div>
							<div class="advantage__items">
								<div class="advantage__item" data-aos="fade-up" data-aos-delay="400">
									<div class="advantage__block"><img class="advantage__icon" src="./images/icons/advantage-1.svg" alt="" width="80" height="80">
										<h3 class="advantage__title">{{ __('mainPage.advantage.Benefit Name1') }}</h3>
										<p class="advantage__subtitle">{{ __('mainPage.advantage.Benefit desc1') }}</p>
									</div>
								</div>
								<div class="advantage__item" data-aos="fade-up" data-aos-delay="500">
									<div class="advantage__block"><img class="advantage__icon" src="./images/icons/advantage-2.svg" alt="" width="80" height="80">
										<h3 class="advantage__title">{{ __('mainPage.advantage.Benefit Name2') }}</h3>
										<p class="advantage__subtitle">{{ __('mainPage.advantage.Benefit desc2') }}</p>
									</div>
								</div>
								<div class="advantage__item" data-aos="fade-up" data-aos-delay="600">
									<div class="advantage__block"><img class="advantage__icon" src="./images/icons/advantage-3.svg" alt="" width="80" height="80">
										<h3 class="advantage__title">{{ __('mainPage.advantage.Benefit Name3') }}</h3>
										<p class="advantage__subtitle">{{ __('mainPage.advantage.Benefit desc3') }}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- Advantage Section End-->
				<!-- Clients section Start-->
				<section class="clients  is-hidden" data-aos="fade-up">
					<div class="container">
						<div class="clients__wrapper">
							<div class="heading">
								<div class="header__block">
									<p class="heading__subtitle" data-aos="fade-up" data-aos-delay="100">{{ __('mainPage.clients.our clients') }}</p>
									<h2 class="heading__title" data-aos="fade-up" data-aos-delay="300">{{ __('mainPage.clients.Who did we work with') }}</h2>
								</div>
								<div class="heading__other">
									<div class="swiper-buttons">
										<div class="swiper-button-prev">
											<svg>
												<use xlink:href="{{ asset('images/sprites.svg#arrow-left') }}"></use>
											</svg>
										</div>
										<div class="swiper-button-next">
											<svg>
												<use xlink:href="{{ asset('images/sprites.svg#arrow-right') }}"></use>
											</svg>
										</div>
									</div>
								</div>
							</div>
							<div class="clients__slider swiper">
								<div class="swiper-wrapper">
									<div class="swiper-slide" data-aos="fade-up" data-aos-delay="400"><img src="{{ asset('images/content/clients/client-1.png') }}" alt=""></div>
									<div class="swiper-slide" data-aos="fade-up" data-aos-delay="500"><img src="{{ asset('images/content/clients/client-2.png') }}" alt=""></div>
									<div class="swiper-slide" data-aos="fade-up" data-aos-delay="600"><img src="{{ asset('images/content/clients/client-3.png') }}" alt=""></div>
									<div class="swiper-slide" data-aos="fade-up" data-aos-delay="700"><img src="{{ asset('images/content/clients/client-4.png') }}" alt=""></div>
									<div class="swiper-slide" data-aos="fade-up" data-aos-delay="800"><img src="{{ asset('images/content/clients/client-5.png') }}" alt=""></div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- Clients section End-->
				<!-- Form Section Start-->
				<section class="section-form" data-aos="fade-up">
					<div class="container">
						<form class="section-form__block js-validation" action="/">
							<h2 class="section-form__title" data-aos="fade-up" data-aos-delay="100">{{ __('mainPage.form.Do you have any questions') }}</h2>
							<p class="section-form__subtitle" data-aos="fade-up" data-aos-delay="300">{{ __('mainPage.form.Do you have any questions subtitle') }}</p>
							<div class="checkboxs-group section-form__checkboxs">
								<div class="checkbox-group" data-aos="fade-up" data-aos-delay="400">
									<input type="checkbox" name="choice" id="choice-0" value="mob&web&design">
									<label for="choice-0">{{ __('mainPage.form.Mobile App & Web Design') }}</label>
								</div>
								<div class="checkbox-group" data-aos="fade-up" data-aos-delay="500">
									<input type="checkbox" name="choice" id="choice-1" value="saas">
									<label for="choice-1">{{ __('mainPage.form.SAAS') }}</label>
								</div>
								<div class="checkbox-group" data-aos="fade-up" data-aos-delay="600">
									<input type="checkbox" name="choice" id="choice-2" value="webdev">
									<label for="choice-2">{{ __('mainPage.form.Website Development') }}</label>
								</div>
								<div class="checkbox-group" data-aos="fade-up" data-aos-delay="700">
									<input type="checkbox" name="choice" id="choice-3" value="dessys">
									<label for="choice-3">{{ __('mainPage.form.Design Systems') }}</label>
								</div>
								<div class="checkbox-group" data-aos="fade-up" data-aos-delay="800">
									<input type="checkbox" name="choice" id="choice-4" value="crm&cms&webapp">
									<label for="choice-4">{{ __('mainPage.form.CRM, CMS, Web Apps') }}</label>
								</div>
								<div class="checkbox-group" data-aos="fade-up" data-aos-delay="900">
									<input type="checkbox" name="choice" id="choice-5" value="strategy&design">
									<label for="choice-5">{{ __('mainPage.form.Strategy & Design') }}</label>
								</div>
								<div class="checkbox-group" data-aos="fade-up" data-aos-delay="1000">
									<input type="checkbox" name="choice" id="choice-6" value="branding">
									<label for="choice-6">{{ __('mainPage.form.Branding & Visual Identity') }}</label>
								</div>
								<div class="checkbox-group" data-aos="fade-up" data-aos-delay="1100">
									<input type="checkbox" name="choice" id="choice-7" value="wireframing&usertesting">
									<label for="choice-7">{{ __('mainPage.form.Wireframing & User Testing') }}</label>
								</div>
							</div>
							<div class="inputs-group section-form__inputs">
								<div class="form-group inputs-group__col inputs-group__col-6" data-aos="fade-up" data-aos-delay="100">
									<input type="text" name="name" placeholder="{{ __('mainPage.form.your name') }}">
								</div>
								<div class="form-group inputs-group__col inputs-group__col-6" data-aos="fade-up" data-aos-delay="200">
									<input type="email" name="email" placeholder="{{ __('mainPage.form.your email') }}">
								</div>
								<div class="form-group inputs-group__col" data-aos="fade-up" data-aos-delay="300">
									<textarea name="message" id="message" placeholder="{{ __('mainPage.form.Write here') }}"></textarea>
								</div>
							</div>
							<div class="section-form__bottom">
								<div class="agree" data-aos="fade-up" data-aos-delay="300">
									<input type="checkbox" name="agree" id="agree">
									<label for="agree">{{ __('mainPage.form.form agreement') }}</label>
								</div>
								<button class="btn btn__primary" type="submit" data-aos="fade-up" data-aos-delay="400">{{ __('mainPage.form.send') }}</button>
							</div>
						</form>
					</div>
				</section>
				<!-- Form Section End-->
			</main>
			

@endsection