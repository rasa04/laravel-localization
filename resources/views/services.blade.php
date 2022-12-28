@extends('layouts.app')
@section('main')

			<main class="main">
				<main class="main"></main>
				<div class="content">
					<div class="content__header">
						<picture class="content__bg">
							<source srcset="{{ asset('images/content/services/bg.jpg') }}" media="(min-width: 768px)"><img src="{{ asset('images/content/services/bg-mob.jpg') }}" alt="bg">
						</picture>
						<div class="container">
							<div class="content__block">
								<div class="breadcrumbs content__breadcrumbs">
									<div class="breadcrumbs__item"><a class="breadcrumbs__link" href="{{ route('main', $locale) }}">{{ __('servicesPage/servicesPage.main') }}</a></div>
									<div class="breadcrumbs__item"><span class="breadcrumbs__link breadcrumbs--active">{{ __('servicesPage/servicesPage.our services') }}</span></div>
								</div>
								<h2 class="content__title">{{ __('servicesPage/servicesPage.our services') }}</h2>
								<p class="content__subtitle">{{ __('servicesPage/servicesPage.our services subtitle') }}</p>
							</div>
						</div>
					</div>
					<div class="content__body">
						<div class="container">
							<div class="services__grid">
								<aside class="services__aside">
									<nav class="services__nav">
										<a class="services__link js-tab-link is-active" href="tab-site" title="{{ __('servicesPage/servicesPage.Website development') }}">{{ __('servicesPage/servicesPage.Website development') }}</a>
										<a class="services__link js-tab-link" href="tab-seo" title="{{ __('servicesPage/servicesPage.SEO promotion') }}">{{ __('servicesPage/servicesPage.SEO promotion') }}</a>
										<a class="services__link js-tab-link" href="tab-reklama" title="{{ __('servicesPage/servicesPage.contextual advertising') }}">{{ __('servicesPage/servicesPage.contextual advertising') }}</a>
										<a class="services__link js-tab-link" href="tab-target" title="{{ __('servicesPage/servicesPage.Targeted advertising') }}">{{ __('servicesPage/servicesPage.Targeted advertising') }}</a>
									</nav>
								</aside>
								<section class="services__content">
									<div class="services__block js-tab-block is-active" data-id="tab-site">
										<div class="tabs__links tabs__links--hidden">
											<a class="tabs__link js-tab-link is-active" href="tab-catalog" title={{ __('servicesPage/blocks.block1.tab1.name') }}>{{ __('servicesPage/blocks.block1.tab1.name') }}</a>
											<a class="tabs__link js-tab-link" href="tab-corporate" title={{ __('servicesPage/blocks.block1.tab2.name') }}>{{ __('servicesPage/blocks.block1.tab2.name') }}</a>
											<a class="tabs__link js-tab-link" href="tab-landing" title={{ __('servicesPage/blocks.block1.tab3.name') }}>{{ __('servicesPage/blocks.block1.tab3.name') }}</a>
										</div>
										<div class="tabs__select for-mobile-tablet">
											<select name="tabs-link">
												<option value="tab-catalog">{{ __('servicesPage/blocks.block1.tab1.name') }}</option>
												<option value="tab-corporate">{{ __('servicesPage/blocks.block1.tab2.name') }}</option>
												<option value="tab-landing">{{ __('servicesPage/blocks.block1.tab3.name') }}</option>
											</select>
										</div>
										<div class="tabs__lists">
											<div class="tabs__list js-tab-block is-active" data-id="tab-catalog">
												<div class="default-section">
													<h5>{{ __('servicesPage/blocks.block1.tab1.Development Website catalog on a turnkey basis') }}</h5>
													<p>
														 {{ __('servicesPage/blocks.block1.tab1.Creation') }}</p>
													<div class="advantage__lists services__advantage">
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-1.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block1.tab1.advantage name 1') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block1.tab1.advantage desc 1') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-2.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block1.tab1.advantage name 2') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block1.tab1.advantage desc 2') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-3.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block1.tab1.advantage name 3') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block1.tab1.advantage desc 3') }}</div>
															</div>
														</div>
													</div>
													<div class="prices__wrapper services__prices">
														<div class="prices__left">
															<div class="prices__subtitle">{{ __('servicesPage/blocks.block1.tab1.prices') }}</div>
															<div class="prices__title">{{ __('servicesPage/blocks.block1.tab1.our prices') }}</div>
															<div class="prices__desc">{{ __('servicesPage/blocks.block1.tab1.prices desc') }}</div>
															<ul class="prices__lists">
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block1.tab1.Unlimited Bandwitch') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block1.tab1.Encrypted Connection') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block1.tab1.Yes Traffic Logs') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block1.tab1.Works on All Devices') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block1.tab1.Connect Anyware') }}</li>
															</ul>
														</div>
														<div class="prices__right">
															<div class="prices__block prices__block--basic">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block1.tab1.Basic') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block1.tab1.Basic desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">120$</b>/ {{ __('servicesPage/blocks.block1.tab1.per month') }}</div>
															</div>
															<div class="prices__block prices__block--plus">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block1.tab1.Plus') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block1.tab1.Plus desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">150$</b>/ {{ __('servicesPage/blocks.block1.tab1.per month') }}</div>
															</div>
															<div class="prices__block prices__block--premium">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block1.tab1.Premium') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block1.tab1.Premium desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">180$</b>/ {{ __('servicesPage/blocks.block1.tab1.per month') }}</div>
															</div>
														</div>
													</div>
													<div class="services__title">{{ __('servicesPage/blocks.block1.tab1.Advantages') }}</div>
													<div class="services__subtitle">{{ __('servicesPage/blocks.block1.tab1.Advantages how') }}</div>
													<p>{{ __('servicesPage/blocks.block1.tab1.Advantages desc') }}</p>
													<div class="services__items">
														<div class="services__item">
															<div class="services__item-block services__item--first">
																<div class="services__item-number">01</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block1.tab1.Advantage 1') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block1.tab1.Advantage 1 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--second">
																<div class="services__item-number">02</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block1.tab1.Advantage 2') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block1.tab1.Advantage 2 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--third">
																<div class="services__item-number">03</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block1.tab1.Advantage 3') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block1.tab1.Advantage 3 desc') }}</div>
															</div>
														</div>
													</div>
													<form class="services__form js-validation" action="/">
														<div class="services__form-title">{{ __('servicesPage/blocks.block1.tab1.order a consultation') }}</div>
														<div class="services__form-subtitle">{{ __('servicesPage/blocks.block1.tab1.order desc') }}</div>
														<div class="services__form-group form-input">
															<input type="email" name="email" placeholder="{{ __('servicesPage/blocks.block1.tab1.your email') }}">
															<button class="btn btn__primary" type="submit">{{ __('servicesPage/blocks.block1.tab1.request a call') }}</button>
														</div>
													</form>
												</div>
											</div>
											<div class="tabs__list js-tab-block" data-id="tab-corporate">
												<div class="default-section">
													<h5>{{ __('servicesPage/blocks.block1.tab2.Development Website catalog on a turnkey basis') }}</h5>
													<p>
														 {{ __('servicesPage/blocks.block1.tab2.Creation') }}</p>
													<div class="advantage__lists services__advantage">
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-1.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block1.tab2.advantage name 1') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block1.tab2.advantage desc 1') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-2.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block1.tab2.advantage name 2') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block1.tab2.advantage desc 2') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-3.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block1.tab2.advantage name 3') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block1.tab2.advantage desc 3') }}</div>
															</div>
														</div>
													</div>
													<div class="prices__wrapper services__prices">
														<div class="prices__left">
															<div class="prices__subtitle">{{ __('servicesPage/blocks.block1.tab2.prices') }}</div>
															<div class="prices__title">{{ __('servicesPage/blocks.block1.tab2.our prices') }}</div>
															<div class="prices__desc">{{ __('servicesPage/blocks.block1.tab2.prices desc') }}</div>
															<ul class="prices__lists">
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block1.tab2.Unlimited Bandwitch') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block1.tab2.Encrypted Connection') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block1.tab2.Yes Traffic Logs') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block1.tab2.Works on All Devices') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block1.tab2.Connect Anyware') }}</li>
															</ul>
														</div>
														<div class="prices__right">
															<div class="prices__block prices__block--basic">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block1.tab2.Basic') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block1.tab2.Basic desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">120$</b>/ {{ __('servicesPage/blocks.block1.tab2.per month') }}</div>
															</div>
															<div class="prices__block prices__block--plus">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block1.tab2.Plus') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block1.tab2.Plus desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">150$</b>/ {{ __('servicesPage/blocks.block1.tab2.per month') }}</div>
															</div>
															<div class="prices__block prices__block--premium">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block1.tab2.Premium') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block1.tab2.Premium desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">180$</b>/ {{ __('servicesPage/blocks.block1.tab2.per month') }}</div>
															</div>
														</div>
													</div>
													<div class="services__title">{{ __('servicesPage/blocks.block1.tab2.Advantages') }}</div>
													<div class="services__subtitle">{{ __('servicesPage/blocks.block1.tab2.Advantages how') }}</div>
													<p>{{ __('servicesPage/blocks.block1.tab2.Advantages desc') }}</p>
													<div class="services__items">
														<div class="services__item">
															<div class="services__item-block services__item--first">
																<div class="services__item-number">01</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block1.tab2.Advantage 1') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block1.tab2.Advantage 1 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--second">
																<div class="services__item-number">02</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block1.tab2.Advantage 2') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block1.tab2.Advantage 2 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--third">
																<div class="services__item-number">03</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block1.tab2.Advantage 3') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block1.tab2.Advantage 3 desc') }}</div>
															</div>
														</div>
													</div>
													<form class="services__form js-validation" action="/">
														<div class="services__form-title">{{ __('servicesPage/blocks.block1.tab2.order a consultation') }}</div>
														<div class="services__form-subtitle">{{ __('servicesPage/blocks.block1.tab2.order desc') }}</div>
														<div class="services__form-group form-input">
															<input type="email" name="email" placeholder="{{ __('servicesPage/blocks.block1.tab2.your email') }}">
															<button class="btn btn__primary" type="submit">{{ __('servicesPage/blocks.block1.tab2.request a call') }}</button>
														</div>
													</form>
												</div>
											</div>
											<div class="tabs__list js-tab-block" data-id="tab-landing">
												<div class="default-section">
													<h5>{{ __('servicesPage/blocks.block1.tab3.Development Website catalog on a turnkey basis') }}</h5>
													<p>
														 {{ __('servicesPage/blocks.block1.tab3.Creation') }}</p>
													<div class="advantage__lists services__advantage">
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-1.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block1.tab3.advantage name 1') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block1.tab3.advantage desc 1') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-2.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block1.tab3.advantage name 2') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block1.tab3.advantage desc 2') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-3.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block1.tab3.advantage name 3') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block1.tab3.advantage desc 3') }}</div>
															</div>
														</div>
													</div>
													<div class="prices__wrapper services__prices">
														<div class="prices__left">
															<div class="prices__subtitle">{{ __('servicesPage/blocks.block1.tab3.prices') }}</div>
															<div class="prices__title">{{ __('servicesPage/blocks.block1.tab3.our prices') }}</div>
															<div class="prices__desc">{{ __('servicesPage/blocks.block1.tab3.prices desc') }}</div>
															<ul class="prices__lists">
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block1.tab3.Unlimited Bandwitch') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block1.tab3.Encrypted Connection') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block1.tab3.Yes Traffic Logs') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block1.tab3.Works on All Devices') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block1.tab3.Connect Anyware') }}</li>
															</ul>
														</div>
														<div class="prices__right">
															<div class="prices__block prices__block--basic">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block1.tab3.Basic') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block1.tab3.Basic desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">120$</b>/ {{ __('servicesPage/blocks.block1.tab3.per month') }}</div>
															</div>
															<div class="prices__block prices__block--plus">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block1.tab3.Plus') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block1.tab3.Plus desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">150$</b>/ {{ __('servicesPage/blocks.block1.tab3.per month') }}</div>
															</div>
															<div class="prices__block prices__block--premium">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block1.tab3.Premium') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block1.tab3.Premium desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">180$</b>/ {{ __('servicesPage/blocks.block1.tab3.per month') }}</div>
															</div>
														</div>
													</div>
													<div class="services__title">{{ __('servicesPage/blocks.block1.tab3.Advantages') }}</div>
													<div class="services__subtitle">{{ __('servicesPage/blocks.block1.tab3.Advantages how') }}</div>
													<p>{{ __('servicesPage/blocks.block1.tab3.Advantages desc') }}</p>
													<div class="services__items">
														<div class="services__item">
															<div class="services__item-block services__item--first">
																<div class="services__item-number">01</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block1.tab3.Advantage 1') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block1.tab3.Advantage 1 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--second">
																<div class="services__item-number">02</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block1.tab3.Advantage 2') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block1.tab3.Advantage 2 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--third">
																<div class="services__item-number">03</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block1.tab3.Advantage 3') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block1.tab3.Advantage 3 desc') }}</div>
															</div>
														</div>
													</div>
													<form class="services__form js-validation" action="/">
														<div class="services__form-title">{{ __('servicesPage/blocks.block1.tab3.order a consultation') }}</div>
														<div class="services__form-subtitle">{{ __('servicesPage/blocks.block1.tab3.order desc') }}</div>
														<div class="services__form-group form-input">
															<input type="email" name="email" placeholder="{{ __('servicesPage/blocks.block1.tab3.your email') }}">
															<button class="btn btn__primary" type="submit">{{ __('servicesPage/blocks.block1.tab3.request a call') }}</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<div class="services__block js-tab-block" data-id="tab-seo">
										<div class="tabs__links tabs__links--hidden">
											<a class="tabs__link js-tab-link is-active" href="tab-catalog" title={{ __('servicesPage/blocks.block2.tab1.name') }}>{{ __('servicesPage/blocks.block2.tab1.name') }}</a>
											<a class="tabs__link js-tab-link" href="tab-corporate" title={{ __('servicesPage/blocks.block2.tab2.name') }}>{{ __('servicesPage/blocks.block2.tab2.name') }}</a>
											<a class="tabs__link js-tab-link" href="tab-landing" title={{ __('servicesPage/blocks.block2.tab3.name') }}>{{ __('servicesPage/blocks.block2.tab3.name') }}</a>
										</div>
										<div class="tabs__select for-mobile-tablet">
											<select name="tabs-link">
												<option value="tab-catalog">{{ __('servicesPage/blocks.block2.tab1.name') }}</option>
												<option value="tab-corporate">{{ __('servicesPage/blocks.block2.tab2.name') }}</option>
												<option value="tab-landing">{{ __('servicesPage/blocks.block2.tab3.name') }}</option>
											</select>
										</div>
										<div class="tabs__lists">
											<div class="tabs__list js-tab-block is-active" data-id="tab-catalog">
												<div class="default-section">
													<h5>{{ __('servicesPage/blocks.block2.tab1.Development Website catalog on a turnkey basis') }}</h5>
													<p>
														 {{ __('servicesPage/blocks.block2.tab1.Creation') }}</p>
													<div class="advantage__lists services__advantage">
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-1.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block2.tab1.advantage name 1') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block2.tab1.advantage desc 1') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-2.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block2.tab1.advantage name 2') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block2.tab1.advantage desc 2') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-3.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block2.tab1.advantage name 3') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block2.tab1.advantage desc 3') }}</div>
															</div>
														</div>
													</div>
													<div class="prices__wrapper services__prices">
														<div class="prices__left">
															<div class="prices__subtitle">{{ __('servicesPage/blocks.block2.tab1.prices') }}</div>
															<div class="prices__title">{{ __('servicesPage/blocks.block2.tab1.our prices') }}</div>
															<div class="prices__desc">{{ __('servicesPage/blocks.block2.tab1.prices desc') }}</div>
															<ul class="prices__lists">
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block2.tab1.Unlimited Bandwitch') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block2.tab1.Encrypted Connection') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block2.tab1.Yes Traffic Logs') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block2.tab1.Works on All Devices') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block2.tab1.Connect Anyware') }}</li>
															</ul>
														</div>
														<div class="prices__right">
															<div class="prices__block prices__block--basic">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block2.tab1.Basic') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block2.tab1.Basic desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">120$</b>/ {{ __('servicesPage/blocks.block2.tab1.per month') }}</div>
															</div>
															<div class="prices__block prices__block--plus">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block2.tab1.Plus') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block2.tab1.Plus desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">150$</b>/ {{ __('servicesPage/blocks.block2.tab1.per month') }}</div>
															</div>
															<div class="prices__block prices__block--premium">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block2.tab1.Premium') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block2.tab1.Premium desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">180$</b>/ {{ __('servicesPage/blocks.block2.tab1.per month') }}</div>
															</div>
														</div>
													</div>
													<div class="services__title">{{ __('servicesPage/blocks.block2.tab1.Advantages') }}</div>
													<div class="services__subtitle">{{ __('servicesPage/blocks.block2.tab1.Advantages how') }}</div>
													<p>{{ __('servicesPage/blocks.block2.tab1.Advantages desc') }}</p>
													<div class="services__items">
														<div class="services__item">
															<div class="services__item-block services__item--first">
																<div class="services__item-number">01</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block2.tab1.Advantage 1') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block2.tab1.Advantage 1 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--second">
																<div class="services__item-number">02</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block2.tab1.Advantage 2') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block2.tab1.Advantage 2 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--third">
																<div class="services__item-number">03</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block2.tab1.Advantage 3') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block2.tab1.Advantage 3 desc') }}</div>
															</div>
														</div>
													</div>
													<form class="services__form js-validation" action="/">
														<div class="services__form-title">{{ __('servicesPage/blocks.block2.tab1.order a consultation') }}</div>
														<div class="services__form-subtitle">{{ __('servicesPage/blocks.block2.tab1.order desc') }}</div>
														<div class="services__form-group form-input">
															<input type="email" name="email" placeholder="{{ __('servicesPage/blocks.block2.tab1.your email') }}">
															<button class="btn btn__primary" type="submit">{{ __('servicesPage/blocks.block2.tab1.request a call') }}</button>
														</div>
													</form>
												</div>
											</div>
											<div class="tabs__list js-tab-block" data-id="tab-corporate">
												<div class="default-section">
													<h5>{{ __('servicesPage/blocks.block2.tab2.Development Website catalog on a turnkey basis') }}</h5>
													<p>
														 {{ __('servicesPage/blocks.block2.tab2.Creation') }}</p>
													<div class="advantage__lists services__advantage">
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-1.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block2.tab2.advantage name 1') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block2.tab2.advantage desc 1') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-2.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block2.tab2.advantage name 2') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block2.tab2.advantage desc 2') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-3.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block2.tab2.advantage name 3') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block2.tab2.advantage desc 3') }}</div>
															</div>
														</div>
													</div>
													<div class="prices__wrapper services__prices">
														<div class="prices__left">
															<div class="prices__subtitle">{{ __('servicesPage/blocks.block2.tab2.prices') }}</div>
															<div class="prices__title">{{ __('servicesPage/blocks.block2.tab2.our prices') }}</div>
															<div class="prices__desc">{{ __('servicesPage/blocks.block2.tab2.prices desc') }}</div>
															<ul class="prices__lists">
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block2.tab2.Unlimited Bandwitch') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block2.tab2.Encrypted Connection') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block2.tab2.Yes Traffic Logs') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block2.tab2.Works on All Devices') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block2.tab2.Connect Anyware') }}</li>
															</ul>
														</div>
														<div class="prices__right">
															<div class="prices__block prices__block--basic">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block2.tab2.Basic') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block2.tab2.Basic desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">120$</b>/ {{ __('servicesPage/blocks.block2.tab2.per month') }}</div>
															</div>
															<div class="prices__block prices__block--plus">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block2.tab2.Plus') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block2.tab2.Plus desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">150$</b>/ {{ __('servicesPage/blocks.block2.tab2.per month') }}</div>
															</div>
															<div class="prices__block prices__block--premium">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block2.tab2.Premium') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block2.tab2.Premium desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">180$</b>/ {{ __('servicesPage/blocks.block2.tab2.per month') }}</div>
															</div>
														</div>
													</div>
													<div class="services__title">{{ __('servicesPage/blocks.block2.tab2.Advantages') }}</div>
													<div class="services__subtitle">{{ __('servicesPage/blocks.block2.tab2.Advantages how') }}</div>
													<p>{{ __('servicesPage/blocks.block2.tab2.Advantages desc') }}</p>
													<div class="services__items">
														<div class="services__item">
															<div class="services__item-block services__item--first">
																<div class="services__item-number">01</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block2.tab2.Advantage 1') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block2.tab2.Advantage 1 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--second">
																<div class="services__item-number">02</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block2.tab2.Advantage 2') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block2.tab2.Advantage 2 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--third">
																<div class="services__item-number">03</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block2.tab2.Advantage 3') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block2.tab2.Advantage 3 desc') }}</div>
															</div>
														</div>
													</div>
													<form class="services__form js-validation" action="/">
														<div class="services__form-title">{{ __('servicesPage/blocks.block2.tab2.order a consultation') }}</div>
														<div class="services__form-subtitle">{{ __('servicesPage/blocks.block2.tab2.order desc') }}</div>
														<div class="services__form-group form-input">
															<input type="email" name="email" placeholder="{{ __('servicesPage/blocks.block2.tab2.your email') }}">
															<button class="btn btn__primary" type="submit">{{ __('servicesPage/blocks.block2.tab2.request a call') }}</button>
														</div>
													</form>
												</div>
											</div>
											<div class="tabs__list js-tab-block" data-id="tab-landing">
												<div class="default-section">
													<h5>{{ __('servicesPage/blocks.block2.tab3.Development Website catalog on a turnkey basis') }}</h5>
													<p>
														 {{ __('servicesPage/blocks.block2.tab3.Creation') }}</p>
													<div class="advantage__lists services__advantage">
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-1.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block2.tab3.advantage name 1') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block2.tab3.advantage desc 1') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-2.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block2.tab3.advantage name 2') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block2.tab3.advantage desc 2') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-3.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block2.tab3.advantage name 3') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block2.tab3.advantage desc 3') }}</div>
															</div>
														</div>
													</div>
													<div class="prices__wrapper services__prices">
														<div class="prices__left">
															<div class="prices__subtitle">{{ __('servicesPage/blocks.block2.tab3.prices') }}</div>
															<div class="prices__title">{{ __('servicesPage/blocks.block2.tab3.our prices') }}</div>
															<div class="prices__desc">{{ __('servicesPage/blocks.block2.tab3.prices desc') }}</div>
															<ul class="prices__lists">
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block2.tab3.Unlimited Bandwitch') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block2.tab3.Encrypted Connection') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block2.tab3.Yes Traffic Logs') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block2.tab3.Works on All Devices') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block2.tab3.Connect Anyware') }}</li>
															</ul>
														</div>
														<div class="prices__right">
															<div class="prices__block prices__block--basic">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block2.tab3.Basic') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block2.tab3.Basic desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">120$</b>/ {{ __('servicesPage/blocks.block2.tab3.per month') }}</div>
															</div>
															<div class="prices__block prices__block--plus">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block2.tab3.Plus') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block2.tab3.Plus desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">150$</b>/ {{ __('servicesPage/blocks.block2.tab3.per month') }}</div>
															</div>
															<div class="prices__block prices__block--premium">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block2.tab3.Premium') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block2.tab3.Premium desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">180$</b>/ {{ __('servicesPage/blocks.block2.tab3.per month') }}</div>
															</div>
														</div>
													</div>
													<div class="services__title">{{ __('servicesPage/blocks.block2.tab3.Advantages') }}</div>
													<div class="services__subtitle">{{ __('servicesPage/blocks.block2.tab3.Advantages how') }}</div>
													<p>{{ __('servicesPage/blocks.block2.tab3.Advantages desc') }}</p>
													<div class="services__items">
														<div class="services__item">
															<div class="services__item-block services__item--first">
																<div class="services__item-number">01</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block2.tab3.Advantage 1') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block2.tab3.Advantage 1 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--second">
																<div class="services__item-number">02</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block2.tab3.Advantage 2') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block2.tab3.Advantage 2 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--third">
																<div class="services__item-number">03</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block2.tab3.Advantage 3') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block2.tab3.Advantage 3 desc') }}</div>
															</div>
														</div>
													</div>
													<form class="services__form js-validation" action="/">
														<div class="services__form-title">{{ __('servicesPage/blocks.block2.tab3.order a consultation') }}</div>
														<div class="services__form-subtitle">{{ __('servicesPage/blocks.block2.tab3.order desc') }}</div>
														<div class="services__form-group form-input">
															<input type="email" name="email" placeholder="{{ __('servicesPage/blocks.block2.tab3.your email') }}">
															<button class="btn btn__primary" type="submit">{{ __('servicesPage/blocks.block2.tab3.request a call') }}</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<div class="services__block js-tab-block" data-id="tab-reklama">
										<div class="tabs__links tabs__links--hidden">
											<a class="tabs__link js-tab-link is-active" href="tab-catalog" title={{ __('servicesPage/blocks.block3.tab1.name') }}>{{ __('servicesPage/blocks.block3.tab1.name') }}</a>
											<a class="tabs__link js-tab-link" href="tab-corporate" title={{ __('servicesPage/blocks.block3.tab2.name') }}>{{ __('servicesPage/blocks.block3.tab2.name') }}</a>
											<a class="tabs__link js-tab-link" href="tab-landing" title={{ __('servicesPage/blocks.block3.tab3.name') }}>{{ __('servicesPage/blocks.block3.tab3.name') }}</a>
										</div>
										<div class="tabs__select for-mobile-tablet">
											<select name="tabs-link">
												<option value="tab-catalog">{{ __('servicesPage/blocks.block3.tab1.name') }}</option>
												<option value="tab-corporate">{{ __('servicesPage/blocks.block3.tab2.name') }}</option>
												<option value="tab-landing">{{ __('servicesPage/blocks.block3.tab3.name') }}</option>
											</select>
										</div>
										<div class="tabs__lists">
											<div class="tabs__list js-tab-block is-active" data-id="tab-catalog">
												<div class="default-section">
													<h5>{{ __('servicesPage/blocks.block3.tab1.Development Website catalog on a turnkey basis') }}</h5>
													<p>
														 {{ __('servicesPage/blocks.block3.tab1.Creation') }}</p>
													<div class="advantage__lists services__advantage">
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-1.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block3.tab1.advantage name 1') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block3.tab1.advantage desc 1') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-2.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block3.tab1.advantage name 2') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block3.tab1.advantage desc 2') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-3.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block3.tab1.advantage name 3') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block3.tab1.advantage desc 3') }}</div>
															</div>
														</div>
													</div>
													<div class="prices__wrapper services__prices">
														<div class="prices__left">
															<div class="prices__subtitle">{{ __('servicesPage/blocks.block3.tab1.prices') }}</div>
															<div class="prices__title">{{ __('servicesPage/blocks.block3.tab1.our prices') }}</div>
															<div class="prices__desc">{{ __('servicesPage/blocks.block3.tab1.prices desc') }}</div>
															<ul class="prices__lists">
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block3.tab1.Unlimited Bandwitch') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block3.tab1.Encrypted Connection') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block3.tab1.Yes Traffic Logs') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block3.tab1.Works on All Devices') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block3.tab1.Connect Anyware') }}</li>
															</ul>
														</div>
														<div class="prices__right">
															<div class="prices__block prices__block--basic">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block3.tab1.Basic') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block3.tab1.Basic desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">120$</b>/ {{ __('servicesPage/blocks.block3.tab1.per month') }}</div>
															</div>
															<div class="prices__block prices__block--plus">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block3.tab1.Plus') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block3.tab1.Plus desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">150$</b>/ {{ __('servicesPage/blocks.block3.tab1.per month') }}</div>
															</div>
															<div class="prices__block prices__block--premium">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block3.tab1.Premium') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block3.tab1.Premium desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">180$</b>/ {{ __('servicesPage/blocks.block3.tab1.per month') }}</div>
															</div>
														</div>
													</div>
													<div class="services__title">{{ __('servicesPage/blocks.block3.tab1.Advantages') }}</div>
													<div class="services__subtitle">{{ __('servicesPage/blocks.block3.tab1.Advantages how') }}</div>
													<p>{{ __('servicesPage/blocks.block3.tab1.Advantages desc') }}</p>
													<div class="services__items">
														<div class="services__item">
															<div class="services__item-block services__item--first">
																<div class="services__item-number">01</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block3.tab1.Advantage 1') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block3.tab1.Advantage 1 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--second">
																<div class="services__item-number">02</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block3.tab1.Advantage 2') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block3.tab1.Advantage 2 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--third">
																<div class="services__item-number">03</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block3.tab1.Advantage 3') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block3.tab1.Advantage 3 desc') }}</div>
															</div>
														</div>
													</div>
													<form class="services__form js-validation" action="/">
														<div class="services__form-title">{{ __('servicesPage/blocks.block3.tab1.order a consultation') }}</div>
														<div class="services__form-subtitle">{{ __('servicesPage/blocks.block3.tab1.order desc') }}</div>
														<div class="services__form-group form-input">
															<input type="email" name="email" placeholder="{{ __('servicesPage/blocks.block3.tab1.your email') }}">
															<button class="btn btn__primary" type="submit">{{ __('servicesPage/blocks.block3.tab1.request a call') }}</button>
														</div>
													</form>
												</div>
											</div>
											<div class="tabs__list js-tab-block" data-id="tab-corporate">
												<div class="default-section">
													<h5>{{ __('servicesPage/blocks.block3.tab2.Development Website catalog on a turnkey basis') }}</h5>
													<p>
														 {{ __('servicesPage/blocks.block3.tab2.Creation') }}</p>
													<div class="advantage__lists services__advantage">
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-1.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block3.tab2.advantage name 1') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block3.tab2.advantage desc 1') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-2.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block3.tab2.advantage name 2') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block3.tab2.advantage desc 2') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-3.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block3.tab2.advantage name 3') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block3.tab2.advantage desc 3') }}</div>
															</div>
														</div>
													</div>
													<div class="prices__wrapper services__prices">
														<div class="prices__left">
															<div class="prices__subtitle">{{ __('servicesPage/blocks.block3.tab2.prices') }}</div>
															<div class="prices__title">{{ __('servicesPage/blocks.block3.tab2.our prices') }}</div>
															<div class="prices__desc">{{ __('servicesPage/blocks.block3.tab2.prices desc') }}</div>
															<ul class="prices__lists">
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block3.tab2.Unlimited Bandwitch') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block3.tab2.Encrypted Connection') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block3.tab2.Yes Traffic Logs') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block3.tab2.Works on All Devices') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block3.tab2.Connect Anyware') }}</li>
															</ul>
														</div>
														<div class="prices__right">
															<div class="prices__block prices__block--basic">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block3.tab2.Basic') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block3.tab2.Basic desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">120$</b>/ {{ __('servicesPage/blocks.block3.tab2.per month') }}</div>
															</div>
															<div class="prices__block prices__block--plus">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block3.tab2.Plus') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block3.tab2.Plus desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">150$</b>/ {{ __('servicesPage/blocks.block3.tab2.per month') }}</div>
															</div>
															<div class="prices__block prices__block--premium">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block3.tab2.Premium') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block3.tab2.Premium desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">180$</b>/ {{ __('servicesPage/blocks.block3.tab2.per month') }}</div>
															</div>
														</div>
													</div>
													<div class="services__title">{{ __('servicesPage/blocks.block3.tab2.Advantages') }}</div>
													<div class="services__subtitle">{{ __('servicesPage/blocks.block3.tab2.Advantages how') }}</div>
													<p>{{ __('servicesPage/blocks.block3.tab2.Advantages desc') }}</p>
													<div class="services__items">
														<div class="services__item">
															<div class="services__item-block services__item--first">
																<div class="services__item-number">01</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block3.tab2.Advantage 1') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block3.tab2.Advantage 1 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--second">
																<div class="services__item-number">02</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block3.tab2.Advantage 2') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block3.tab2.Advantage 2 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--third">
																<div class="services__item-number">03</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block3.tab2.Advantage 3') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block3.tab2.Advantage 3 desc') }}</div>
															</div>
														</div>
													</div>
													<form class="services__form js-validation" action="/">
														<div class="services__form-title">{{ __('servicesPage/blocks.block3.tab2.order a consultation') }}</div>
														<div class="services__form-subtitle">{{ __('servicesPage/blocks.block3.tab2.order desc') }}</div>
														<div class="services__form-group form-input">
															<input type="email" name="email" placeholder="{{ __('servicesPage/blocks.block3.tab2.your email') }}">
															<button class="btn btn__primary" type="submit">{{ __('servicesPage/blocks.block3.tab2.request a call') }}</button>
														</div>
													</form>
												</div>
											</div>
											<div class="tabs__list js-tab-block" data-id="tab-landing">
												<div class="default-section">
													<h5>{{ __('servicesPage/blocks.block3.tab3.Development Website catalog on a turnkey basis') }}</h5>
													<p>
														 {{ __('servicesPage/blocks.block3.tab3.Creation') }}</p>
													<div class="advantage__lists services__advantage">
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-1.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block3.tab3.advantage name 1') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block3.tab3.advantage desc 1') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-2.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block3.tab3.advantage name 2') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block3.tab3.advantage desc 2') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-3.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block3.tab3.advantage name 3') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block3.tab3.advantage desc 3') }}</div>
															</div>
														</div>
													</div>
													<div class="prices__wrapper services__prices">
														<div class="prices__left">
															<div class="prices__subtitle">{{ __('servicesPage/blocks.block3.tab3.prices') }}</div>
															<div class="prices__title">{{ __('servicesPage/blocks.block3.tab3.our prices') }}</div>
															<div class="prices__desc">{{ __('servicesPage/blocks.block3.tab3.prices desc') }}</div>
															<ul class="prices__lists">
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block3.tab3.Unlimited Bandwitch') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block3.tab3.Encrypted Connection') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block3.tab3.Yes Traffic Logs') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block3.tab3.Works on All Devices') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block3.tab3.Connect Anyware') }}</li>
															</ul>
														</div>
														<div class="prices__right">
															<div class="prices__block prices__block--basic">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block3.tab3.Basic') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block3.tab3.Basic desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">120$</b>/ {{ __('servicesPage/blocks.block3.tab3.per month') }}</div>
															</div>
															<div class="prices__block prices__block--plus">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block3.tab3.Plus') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block3.tab3.Plus desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">150$</b>/ {{ __('servicesPage/blocks.block3.tab3.per month') }}</div>
															</div>
															<div class="prices__block prices__block--premium">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block3.tab3.Premium') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block3.tab3.Premium desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">180$</b>/ {{ __('servicesPage/blocks.block3.tab3.per month') }}</div>
															</div>
														</div>
													</div>
													<div class="services__title">{{ __('servicesPage/blocks.block3.tab3.Advantages') }}</div>
													<div class="services__subtitle">{{ __('servicesPage/blocks.block3.tab3.Advantages how') }}</div>
													<p>{{ __('servicesPage/blocks.block3.tab3.Advantages desc') }}</p>
													<div class="services__items">
														<div class="services__item">
															<div class="services__item-block services__item--first">
																<div class="services__item-number">01</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block3.tab3.Advantage 1') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block3.tab3.Advantage 1 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--second">
																<div class="services__item-number">02</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block3.tab3.Advantage 2') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block3.tab3.Advantage 2 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--third">
																<div class="services__item-number">03</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block3.tab3.Advantage 3') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block3.tab3.Advantage 3 desc') }}</div>
															</div>
														</div>
													</div>
													<form class="services__form js-validation" action="/">
														<div class="services__form-title">{{ __('servicesPage/blocks.block3.tab3.order a consultation') }}</div>
														<div class="services__form-subtitle">{{ __('servicesPage/blocks.block3.tab3.order desc') }}</div>
														<div class="services__form-group form-input">
															<input type="email" name="email" placeholder="{{ __('servicesPage/blocks.block3.tab3.your email') }}">
															<button class="btn btn__primary" type="submit">{{ __('servicesPage/blocks.block3.tab3.request a call') }}</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<div class="services__block js-tab-block" data-id="tab-target">
										<div class="tabs__links tabs__links--hidden">
											<a class="tabs__link js-tab-link is-active" href="tab-catalog" title={{ __('servicesPage/blocks.block4.tab1.name') }}>{{ __('servicesPage/blocks.block4.tab1.name') }}</a>
											<a class="tabs__link js-tab-link" href="tab-corporate" title={{ __('servicesPage/blocks.block4.tab2.name') }}>{{ __('servicesPage/blocks.block4.tab2.name') }}</a>
											<a class="tabs__link js-tab-link" href="tab-landing" title={{ __('servicesPage/blocks.block4.tab3.name') }}>{{ __('servicesPage/blocks.block4.tab3.name') }}</a>
										</div>
										<div class="tabs__select for-mobile-tablet">
											<select name="tabs-link">
												<option value="tab-catalog">{{ __('servicesPage/blocks.block4.tab1.name') }}</option>
												<option value="tab-corporate">{{ __('servicesPage/blocks.block4.tab2.name') }}</option>
												<option value="tab-landing">{{ __('servicesPage/blocks.block4.tab3.name') }}</option>
											</select>
										</div>
										<div class="tabs__lists">
											<div class="tabs__list js-tab-block is-active" data-id="tab-catalog">
												<div class="default-section">
													<h5>{{ __('servicesPage/blocks.block4.tab1.Development Website catalog on a turnkey basis') }}</h5>
													<p>
														 {{ __('servicesPage/blocks.block4.tab1.Creation') }}</p>
													<div class="advantage__lists services__advantage">
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-1.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block4.tab1.advantage name 1') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block4.tab1.advantage desc 1') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-2.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block4.tab1.advantage name 2') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block4.tab1.advantage desc 2') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-3.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block4.tab1.advantage name 3') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block4.tab1.advantage desc 3') }}</div>
															</div>
														</div>
													</div>
													<div class="prices__wrapper services__prices">
														<div class="prices__left">
															<div class="prices__subtitle">{{ __('servicesPage/blocks.block4.tab1.prices') }}</div>
															<div class="prices__title">{{ __('servicesPage/blocks.block4.tab1.our prices') }}</div>
															<div class="prices__desc">{{ __('servicesPage/blocks.block4.tab1.prices desc') }}</div>
															<ul class="prices__lists">
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block4.tab1.Unlimited Bandwitch') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block4.tab1.Encrypted Connection') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block4.tab1.Yes Traffic Logs') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block4.tab1.Works on All Devices') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block4.tab1.Connect Anyware') }}</li>
															</ul>
														</div>
														<div class="prices__right">
															<div class="prices__block prices__block--basic">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block4.tab1.Basic') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block4.tab1.Basic desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">120$</b>/ {{ __('servicesPage/blocks.block4.tab1.per month') }}</div>
															</div>
															<div class="prices__block prices__block--plus">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block4.tab1.Plus') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block4.tab1.Plus desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">150$</b>/ {{ __('servicesPage/blocks.block4.tab1.per month') }}</div>
															</div>
															<div class="prices__block prices__block--premium">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block4.tab1.Premium') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block4.tab1.Premium desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">180$</b>/ {{ __('servicesPage/blocks.block4.tab1.per month') }}</div>
															</div>
														</div>
													</div>
													<div class="services__title">{{ __('servicesPage/blocks.block4.tab1.Advantages') }}</div>
													<div class="services__subtitle">{{ __('servicesPage/blocks.block4.tab1.Advantages how') }}</div>
													<p>{{ __('servicesPage/blocks.block4.tab1.Advantages desc') }}</p>
													<div class="services__items">
														<div class="services__item">
															<div class="services__item-block services__item--first">
																<div class="services__item-number">01</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block4.tab1.Advantage 1') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block4.tab1.Advantage 1 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--second">
																<div class="services__item-number">02</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block4.tab1.Advantage 2') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block4.tab1.Advantage 2 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--third">
																<div class="services__item-number">03</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block4.tab1.Advantage 3') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block4.tab1.Advantage 3 desc') }}</div>
															</div>
														</div>
													</div>
													<form class="services__form js-validation" action="/">
														<div class="services__form-title">{{ __('servicesPage/blocks.block4.tab1.order a consultation') }}</div>
														<div class="services__form-subtitle">{{ __('servicesPage/blocks.block4.tab1.order desc') }}</div>
														<div class="services__form-group form-input">
															<input type="email" name="email" placeholder="{{ __('servicesPage/blocks.block4.tab1.your email') }}">
															<button class="btn btn__primary" type="submit">{{ __('servicesPage/blocks.block4.tab1.request a call') }}</button>
														</div>
													</form>
												</div>
											</div>
											<div class="tabs__list js-tab-block" data-id="tab-corporate">
												<div class="default-section">
													<h5>{{ __('servicesPage/blocks.block4.tab2.Development Website catalog on a turnkey basis') }}</h5>
													<p>
														 {{ __('servicesPage/blocks.block4.tab2.Creation') }}</p>
													<div class="advantage__lists services__advantage">
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-1.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block4.tab2.advantage name 1') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block4.tab2.advantage desc 1') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-2.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block4.tab2.advantage name 2') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block4.tab2.advantage desc 2') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-3.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block4.tab2.advantage name 3') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block4.tab2.advantage desc 3') }}</div>
															</div>
														</div>
													</div>
													<div class="prices__wrapper services__prices">
														<div class="prices__left">
															<div class="prices__subtitle">{{ __('servicesPage/blocks.block4.tab2.prices') }}</div>
															<div class="prices__title">{{ __('servicesPage/blocks.block4.tab2.our prices') }}</div>
															<div class="prices__desc">{{ __('servicesPage/blocks.block4.tab2.prices desc') }}</div>
															<ul class="prices__lists">
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block4.tab2.Unlimited Bandwitch') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block4.tab2.Encrypted Connection') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block4.tab2.Yes Traffic Logs') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block4.tab2.Works on All Devices') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block4.tab2.Connect Anyware') }}</li>
															</ul>
														</div>
														<div class="prices__right">
															<div class="prices__block prices__block--basic">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block4.tab2.Basic') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block4.tab2.Basic desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">120$</b>/ {{ __('servicesPage/blocks.block4.tab2.per month') }}</div>
															</div>
															<div class="prices__block prices__block--plus">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block4.tab2.Plus') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block4.tab2.Plus desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">150$</b>/ {{ __('servicesPage/blocks.block4.tab2.per month') }}</div>
															</div>
															<div class="prices__block prices__block--premium">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block4.tab2.Premium') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block4.tab2.Premium desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">180$</b>/ {{ __('servicesPage/blocks.block4.tab2.per month') }}</div>
															</div>
														</div>
													</div>
													<div class="services__title">{{ __('servicesPage/blocks.block4.tab2.Advantages') }}</div>
													<div class="services__subtitle">{{ __('servicesPage/blocks.block4.tab2.Advantages how') }}</div>
													<p>{{ __('servicesPage/blocks.block4.tab2.Advantages desc') }}</p>
													<div class="services__items">
														<div class="services__item">
															<div class="services__item-block services__item--first">
																<div class="services__item-number">01</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block4.tab2.Advantage 1') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block4.tab2.Advantage 1 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--second">
																<div class="services__item-number">02</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block4.tab2.Advantage 2') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block4.tab2.Advantage 2 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--third">
																<div class="services__item-number">03</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block4.tab2.Advantage 3') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block4.tab2.Advantage 3 desc') }}</div>
															</div>
														</div>
													</div>
													<form class="services__form js-validation" action="/">
														<div class="services__form-title">{{ __('servicesPage/blocks.block4.tab2.order a consultation') }}</div>
														<div class="services__form-subtitle">{{ __('servicesPage/blocks.block4.tab2.order desc') }}</div>
														<div class="services__form-group form-input">
															<input type="email" name="email" placeholder="{{ __('servicesPage/blocks.block4.tab2.your email') }}">
															<button class="btn btn__primary" type="submit">{{ __('servicesPage/blocks.block4.tab2.request a call') }}</button>
														</div>
													</form>
												</div>
											</div>
											<div class="tabs__list js-tab-block" data-id="tab-landing">
												<div class="default-section">
													<h5>{{ __('servicesPage/blocks.block4.tab3.Development Website catalog on a turnkey basis') }}</h5>
													<p>
														 {{ __('servicesPage/blocks.block4.tab3.Creation') }}</p>
													<div class="advantage__lists services__advantage">
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-1.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block4.tab3.advantage name 1') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block4.tab3.advantage desc 1') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-2.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block4.tab3.advantage name 2') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block4.tab3.advantage desc 2') }}</div>
															</div>
														</div>
														<div class="advantage__list">
															<div class="advantage__box"><img class="advantage__img" src="{{ asset('images/icons/advantage-3.svg') }}" alt="" width="80" height="80">
																<div class="advantage__name">{{ __('servicesPage/blocks.block4.tab3.advantage name 3') }}</div>
																<div class="advantage__desc">{{ __('servicesPage/blocks.block4.tab3.advantage desc 3') }}</div>
															</div>
														</div>
													</div>
													<div class="prices__wrapper services__prices">
														<div class="prices__left">
															<div class="prices__subtitle">{{ __('servicesPage/blocks.block4.tab3.prices') }}</div>
															<div class="prices__title">{{ __('servicesPage/blocks.block4.tab3.our prices') }}</div>
															<div class="prices__desc">{{ __('servicesPage/blocks.block4.tab3.prices desc') }}</div>
															<ul class="prices__lists">
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block4.tab3.Unlimited Bandwitch') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block4.tab3.Encrypted Connection') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block4.tab3.Yes Traffic Logs') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block4.tab3.Works on All Devices') }}</li>
																<li class="prices__list"><span class="checked"></span>{{ __('servicesPage/blocks.block4.tab3.Connect Anyware') }}</li>
															</ul>
														</div>
														<div class="prices__right">
															<div class="prices__block prices__block--basic">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block4.tab3.Basic') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block4.tab3.Basic desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">120$</b>/ {{ __('servicesPage/blocks.block4.tab3.per month') }}</div>
															</div>
															<div class="prices__block prices__block--plus">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block4.tab3.Plus') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block4.tab3.Plus desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">150$</b>/ {{ __('servicesPage/blocks.block4.tab3.per month') }}</div>
															</div>
															<div class="prices__block prices__block--premium">
																<div class="prices__block-info">
																	<div class="prices__block-title">{{ __('servicesPage/blocks.block4.tab3.Premium') }}</div>
																	<div class="prices__block-subtitle">{{ __('servicesPage/blocks.block4.tab3.Premium desc') }}</div>
																</div>
																<div class="prices__block-price"><b class="prices__block-strong">180$</b>/ {{ __('servicesPage/blocks.block4.tab3.per month') }}</div>
															</div>
														</div>
													</div>
													<div class="services__title">{{ __('servicesPage/blocks.block4.tab3.Advantages') }}</div>
													<div class="services__subtitle">{{ __('servicesPage/blocks.block4.tab3.Advantages how') }}</div>
													<p>{{ __('servicesPage/blocks.block4.tab3.Advantages desc') }}</p>
													<div class="services__items">
														<div class="services__item">
															<div class="services__item-block services__item--first">
																<div class="services__item-number">01</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block4.tab3.Advantage 1') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block4.tab3.Advantage 1 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--second">
																<div class="services__item-number">02</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block4.tab3.Advantage 2') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block4.tab3.Advantage 2 desc') }}</div>
															</div>
														</div>
														<div class="services__item">
															<div class="services__item-block services__item--third">
																<div class="services__item-number">03</div>
																<div class="services__item-title">{{ __('servicesPage/blocks.block4.tab3.Advantage 3') }}</div>
																<div class="services__item-subtitle">{{ __('servicesPage/blocks.block4.tab3.Advantage 3 desc') }}</div>
															</div>
														</div>
													</div>
													<form class="services__form js-validation" action="/">
														<div class="services__form-title">{{ __('servicesPage/blocks.block4.tab3.order a consultation') }}</div>
														<div class="services__form-subtitle">{{ __('servicesPage/blocks.block4.tab3.order desc') }}</div>
														<div class="services__form-group form-input">
															<input type="email" name="email" placeholder="{{ __('servicesPage/blocks.block4.tab3.your email') }}">
															<button class="btn btn__primary" type="submit">{{ __('servicesPage/blocks.block4.tab3.request a call') }}</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
			</main>

@endsection