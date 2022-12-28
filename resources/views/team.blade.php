@extends('layouts.app')
@section('main')
			<main class="main">
				<div class="content">
					<div class="content__header">
						<picture class="content__bg">
							<source srcset="{{ asset('images/content/team/bg.jpg') }}" media="(min-width: 768px)"><img src="{{ asset('images/content/team/bg-mob.jpg') }}" alt="bg">
						</picture>
						<div class="container">
							<div class="content__block">
								<div class="breadcrumbs content__breadcrumbs">
									<div class="breadcrumbs__item"><a class="breadcrumbs__link" href="{{ route('main', $locale) }}">{{ __('teamPage.home') }}</a></div>
									<div class="breadcrumbs__item"><span class="breadcrumbs__link breadcrumbs--active">{{ __('teamPage.our team') }}</span></div>
								</div>
								<h2 class="content__title">{{ __('teamPage.our team') }}</h2>
								<p class="content__subtitle">{{ __('teamPage.our team desc') }}</p>
							</div>
						</div>
					</div>
					<div class="content__body">
						<div class="container">
							<div class="team__items">
								<div class="team__block" data-aos="fade-up" data-aos-delay="0"><img class="team__picture" src="{{ asset('images/content/team/avatar-1.jpg') }}" alt="{{ __('teamPage.name 1') }}">
									<div class="team__info">
										<h2 class="team__title">{{ __('teamPage.teamates.name 1') }}</h2>
										<p class="team__state">{{ __('teamPage.teamates.post 1') }}</p>
										<p class="team__desc">{{ __('teamPage.teamates.desc 1') }}</p>
									</div>
								</div>
								<div class="team__block team__block--reverse" data-aos="fade-up" data-aos-delay="2"><img class="team__picture" src="{{ asset('images/content/team/avatar-2.jpg') }}" alt="{{ __('teamPage.name 2') }}">
									<div class="team__info">
										<h2 class="team__title">{{ __('teamPage.teamates.name 2') }}</h2>
										<p class="team__state">{{ __('teamPage.teamates.post 2') }}</p>
										<p class="team__desc">{{ __('teamPage.teamates.desc 2') }}</p>
									</div>
								</div>
								<div class="team__block" data-aos="fade-up" data-aos-delay="4"><img class="team__picture" src="{{ asset('images/content/team/avatar-3.jpg') }}" alt="{{ __('teamPage.name 3') }}">
									<div class="team__info">
										<h2 class="team__title">{{ __('teamPage.teamates.name 3') }}</h2>
										<p class="team__state">{{ __('teamPage.teamates.post 3') }}</p>
										<p class="team__desc">{{ __('teamPage.teamates.desc 3') }}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
@endsection