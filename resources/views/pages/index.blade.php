@extends('layouts.master')

@section('title', __('Home'))

@section('content')
    <main class="home-page">
        <section class="vitrin">
            <img class="vitrin__img" src="{{asset('img/home-vitrin-bg.jpg')}}">
            <div class="container vitrin__container">
                <h1 class="vitrin__title">{{__('Health is a responsibility')}}</h1>
                <p class="vitrin__text vitrin__text--home">
                    {{__('Our mission is to contribute to improving the health and well-being of people.')}}
                </p>
                <div class="vitrin__link-wrap">
                    <a class="button vitrin__link" href="#">{{__('Cooperate with us')}}</a>
                </div>
            </div>
        </section>
        <section class="our-values">
            <img class="our-values__img" src="{{asset('img/our-values-bg.jpg')}}">
            <div class="our-values__inner">
                <div class="container">
                    <h2 class="our-values__title">{{__('Our values')}}</h2>
                    <ul class="values-list">
                        <li class="values-list__item">
                            <h3 class="values-list__title">{{__('Life')}}</h3>
                            <p class="values-list__text">
                                {{__('We recognize life as a gift that needs to be cherished.')}}
                            </p>
                        </li>
                        <li class="values-list__item">
                            <h3 class="values-list__title">{{__('Creation')}}</h3>
                            <p class="values-list__text">
                                {{__('We are discovering new facets of the possible.')}}
                            </p>
                        </li>
                        <li class="values-list__item">
                            <h3 class="values-list__title">{{__('Responsibility')}}</h3>
                            <p class="values-list__text">
                                {{__('We are responsible for the well-being of society.')}}
                            </p>
                        </li>
                        <li class="values-list__item">
                            <h3 class="values-list__title">{{__('Team spirit')}}</h3>
                            <p class="values-list__text">
                                {{__('We are united and achieve our goals.')}}
                            </p>
                        </li>
                        <li class="values-list__item">
                            <h3 class="values-list__title">{{__('Professionalism')}}</h3>
                            <p class="values-list__text">
                                {{__('We show a high level of working skills.')}}
                            </p>
                        </li>
                        <li class="values-list__item">
                            <h3 class="values-list__title">{{__('Relationship')}}</h3>
                            <p class="values-list__text">
                                {{__("We value everyone's opinion.")}}
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="industry-news">
            <div class="container">
                <h2 class="industry-news__title">{{__('Industry news')}}</h2>
                <ul class="news-categories">
                    @foreach ($industryNews as $newsCategory)
                        <li class="news-categories__item">
                            <a class="news-categories__link" href="#">
                                <h3 class="news-categories__title">{{$newsCategory->title}}</h3>
                                <div class="news-categories__description">{{$newsCategory->description}}</div>
                                <div class="news-categories__read">
                                    <span class="news-categories__read-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14.525" viewBox="0 0 8 14.525"><g transform="translate(0 14.525) rotate(-90)"><path d="M13.276.216,7.263,6.229,1.251.215A.733.733,0,0,0,.214,1.253l6.53,6.532h0a.732.732,0,0,0,1.036,0l6.53-6.532A.733.733,0,1,0,13.276.216Z" fill="#fff"/></g></svg>
                                    </span>
                                    {{__('Read article')}}
                                </div>
                            </a>
                        </li>                    
                    @endforeach
                </ul>
            </div>
        </section>
        <section class="products-block">
            <div class="container">
                <h2 class="products-block__title">{{__('Products')}}</h2>
                <ul class="products-categories">
                    @foreach ($prodCategories as $category)
                        <li class="products-categories__item">
                            <a class="products-categories__link" href="#">
                                <div class="products-categories__icon">{!! $category->icon !!}</div>
                                <span class="products-categories__title">{{$category->title}}</span>
                                <div class="view-more">
                                    <span class="view-more__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14.525" viewBox="0 0 8 14.525"><g transform="translate(0 14.525) rotate(-90)"><path d="M13.276.216,7.263,6.229,1.251.215A.733.733,0,0,0,.214,1.253l6.53,6.532h0a.732.732,0,0,0,1.036,0l6.53-6.532A.733.733,0,1,0,13.276.216Z" fill="#fff"></path></g></svg>
                                    </span>
                                    {{__('View products')}}
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="products-block__info">
                    <p>
                        {{$prodCategoriesQuantity}} {{__('categories')}} {{__('and')}} <br>
                        <b>{{$productsQuantity}} {{__('products')}}</b>
                    </p>
                    <a class="link products-block__link" href="{{route('products')}}#products">{{__('All products')}}</a>
                </div>
            </div>
        </section>
        <section class="popular-products">
            <div class="container">
                <h2 class="popular-products__title">{{__('Most popular products')}}</h2>
                <ul class="popular-products__list">
                @foreach ($popularProducts as $product)
                    <li class="popular-products__item">
                        <x-products-card :product="$product"/>
                    </li>
                @endforeach
                </ul>
                <a class="link popular-products__link" href="{{route('products')}}#products">{{__('All products')}}</a>
            </div>
        </section>
    </main>
@endsection