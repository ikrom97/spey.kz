@extends('layouts.master')

@section('title', $product->title)

@section('content')
   <main class="main products-read" data-id="products-read-page">
       <section class="vitrin">
            <img class="vitrin__img" src="{{asset('img/products/default-vitrin-bg.jpg')}}">
            <div class="container vitrin__container">
                <h1 class="vitrin__title">{{$product->title}}</h1>
                <p class="vitrin__text">
                    {{$product->description}}
                </p>
                <div class="vitrin__link-wrap">
                    <a class="button vitrin__link" href="{{route('contacts')}}#cooperation">{{__('Cooperate with us')}}</a>
                </div>
            </div>
        </section>
        <div class="container">
            <ul class="breadcrumbs book-read-page__breadcrumbs">
                <li class="breadcrumbs-item">
                    <a class="breadcrumbs-link" href="{{route('home')}}">{{__('Home')}}</a>
                    <svg width="5" height="10" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 10L5 5L0 0V10Z" fill="#0033ab"/></svg>
                </li>
                <li class="breadcrumbs-item">
                    <a class="breadcrumbs-link" href="{{route('products')}}">{{__('Our products')}}</a>
                    <svg width="5" height="10" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 10L5 5L0 0V10Z" fill="#0033ab"/></svg>
                </li>
                <li class="breadcrumbs-item">
                    <a class="breadcrumbs-link current">{{$product->title}}</a>
                </li>
            </ul>
        </div>
        <section class="product-info" data-id="product-info">
            <div class="container">
                <div class="product-info__title-wrap">
                <h2 class="product-info__title">{{__('Instructions for use')}}</h2>
                <a class="download-link" href="{{route('products.download.instructions')}}?id={{$product->id}}">
                    <span class="download-link__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13.108" height="15" viewBox="0 0 13.108 15"><g transform="translate(-32.304)"><g transform="translate(32.304)"><path d="M45.388,8.315a.313.313,0,0,0-.289-.193H41.676V.312A.313.313,0,0,0,41.364,0h-5a.313.313,0,0,0-.312.312v7.81H32.617a.312.312,0,0,0-.221.533l6.232,6.253a.313.313,0,0,0,.442,0l6.25-6.253A.312.312,0,0,0,45.388,8.315Z" transform="translate(-32.304)" fill="#fff"/></g></g></svg>
                    </span>
                    {{__('Download instruction')}}
                </a>
                </div>
                <ul class="product-instructions" data-id="dropdown-list">
                <li class="instruction-dropdown" data-type="dropdown-item">
                    <div class="instruction-btn" type="button" data-type="dropdown-btn">
                        <span class="instruction__icon" data-type="dropdown-btn">
                            <svg data-type="dropdown-btn" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path data-type="dropdown-btn" d="M17.657,9.414A2.341,2.341,0,0,0,15.4,11.172H14.043a4.678,4.678,0,0,0-4.628-4.1,4.628,4.628,0,0,0-2.264.609L5.093,4.888a2.919,2.919,0,1,0-2.163.971,2.9,2.9,0,0,0,1.22-.275L6.2,8.364a4.628,4.628,0,0,0-.745,5.876l-1.8,1.477a2.343,2.343,0,1,0,1.029,1.939A2.314,2.314,0,0,0,4.427,16.6L6.2,15.148a4.656,4.656,0,0,0,7.847-2.8H15.4a2.34,2.34,0,1,0,2.261-2.93Zm0,0" transform="translate(0)" fill="#fff"/></svg>
                        </span>
                        {{__('Composition')}}
                        <div class="instruction__more-wrap" data-type="dropdown-btn">
                            <span class="instruction__more-icon" data-type="dropdown-btn">
                            <svg data-type="dropdown-btn" xmlns="http://www.w3.org/2000/svg" width="14.525" height="7.102" viewBox="0 0 14.525 7.102"><path data-type="dropdown-btn" d="M13.276.191,7.263,5.53,1.251.191a.8.8,0,0,0-1.037,0,.6.6,0,0,0,0,.921l6.53,5.8h0a.8.8,0,0,0,1.036,0l6.53-5.8a.6.6,0,0,0,0-.922A.8.8,0,0,0,13.276.191Z" transform="translate(0 0)" fill="#fff"/></svg>
                            </span>
                            {{__('Read more')}}
                        </div>
                    </div>
                    <div class="instruction-dropdown-content" data-type="dropdown-content">
                        {!!$product->composition!!}
                    </div>
                </li>
                <li class="instruction-dropdown" data-type="dropdown-item">
                    <div class="instruction-btn" type="button" data-type="dropdown-btn" data-type="dropdown-btn">
                        <span class="instruction__icon" data-type="dropdown-btn">
                            <svg data-type="dropdown-btn" xmlns="http://www.w3.org/2000/svg" width="20" height="24.091" viewBox="0 0 20 24.091"><g transform="translate(-43.474)"><path data-type="dropdown-btn" d="M157.022,15.37V3.456a3.454,3.454,0,1,0-6.908,0V15.37a5.042,5.042,0,1,0,6.908,0Zm-4.16,1.53V3.529a.705.705,0,1,1,1.411,0V16.9a2.278,2.278,0,1,1-1.411,0Z" transform="translate(-100.106 0)" fill="#fff"/><circle cx="0.868" cy="0.868" r="0.868" transform="translate(52.594 18.198)" fill="#fff"/><path d="M46.328,158.312a.706.706,0,0,0-1,0l-1.649,1.649a.706.706,0,0,0,1,1l.443-.443v3.276a.706.706,0,1,0,1.412,0v-3.276l.443.443a.706.706,0,1,0,1-1Z" transform="translate(0 -150.667)" fill="#fff"/><path d="M372.984,159.961l-1.649-1.649a.706.706,0,0,0-1,0l-1.649,1.649a.706.706,0,1,0,1,1l.443-.443v3.276a.706.706,0,1,0,1.412,0v-3.276l.443.443a.706.706,0,0,0,1-1Z" transform="translate(-309.717 -150.667)" fill="#fff"/></g></svg>
                        </span>
                        {{__('Indications for use')}}
                        <div class="instruction__more-wrap" data-type="dropdown-btn">
                            <span class="instruction__more-icon" data-type="dropdown-btn">
                            <svg data-type="dropdown-btn" xmlns="http://www.w3.org/2000/svg" width="14.525" height="7.102" viewBox="0 0 14.525 7.102"><path data-type="dropdown-btn" d="M13.276.191,7.263,5.53,1.251.191a.8.8,0,0,0-1.037,0,.6.6,0,0,0,0,.921l6.53,5.8h0a.8.8,0,0,0,1.036,0l6.53-5.8a.6.6,0,0,0,0-.922A.8.8,0,0,0,13.276.191Z" transform="translate(0 0)" fill="#fff"/></svg>
                            </span>
                            {{__('Read more')}}
                        </div>
                    </div>
                    <div class="instruction-dropdown-content" data-type="dropdown-content">
                        {!!$product->indications!!}
                    </div>
                </li>
                <li class="instruction-dropdown" data-type="dropdown-item">
                    <div class="instruction-btn" type="button" data-type="dropdown-btn">
                        <span class="instruction__icon" data-type="dropdown-btn">
                            <svg data-type="dropdown-btn" xmlns="http://www.w3.org/2000/svg" width="17.036" height="20" viewBox="0 0 17.036 20"><g transform="translate(0)"><path data-type="dropdown-btn" d="M81.678,290.125a5.574,5.574,0,0,1-4.562-8.694.911.911,0,0,1,1.407-.133,8.137,8.137,0,0,0,5.788,2.269,9.013,9.013,0,0,0,1.781-.176.922.922,0,0,1,1.095.864q.008.153.008.307a5.546,5.546,0,0,1-5.517,5.562Zm0,0" transform="translate(-73.161 -270.125)" fill="#fff"/><path d="M15.276,152.6c-.038.12-.076.239-.114.355a2.555,2.555,0,0,1-2.429,1.78h0a2.517,2.517,0,0,1-.736-.11,11.942,11.942,0,0,0-6.983,0,2.517,2.517,0,0,1-.736.11,2.555,2.555,0,0,1-2.43-1.78c-.036-.11-.071-.222-.107-.335A7.2,7.2,0,0,0,0,157.321v7.331a.587.587,0,0,0,.586.588H3.148a6.768,6.768,0,0,1-.178-7.847,2.1,2.1,0,0,1,1.73-.917,2.061,2.061,0,0,1,1.481.623,7.068,7.068,0,0,0,4.982,1.919,7.956,7.956,0,0,0,1.561-.153,2.08,2.08,0,0,1,.409-.041,2.1,2.1,0,0,1,2.09,2c.007.123.01.248.01.372a6.729,6.729,0,0,1-1.345,4.044H16.45a.587.587,0,0,0,.586-.588v-7.331a7.2,7.2,0,0,0-1.76-4.723Zm0,0" transform="translate(0 -146.758)" fill="#fff"/><path d="M60.035.907A18.175,18.175,0,0,0,54.378,0h-.014a18.176,18.176,0,0,0-5.658.907,1.4,1.4,0,0,0-.89,1.768c.177.542.353,1.128.525,1.7.164.547.332,1.1.5,1.623a1.378,1.378,0,0,0,1.708.907,13.1,13.1,0,0,1,3.822-.572h0a13.1,13.1,0,0,1,3.822.572A1.378,1.378,0,0,0,59.9,6c.168-.519.335-1.076.5-1.623.173-.575.349-1.161.525-1.7a1.4,1.4,0,0,0-.89-1.768ZM55.187,3.868h-.219v.221a.585.585,0,1,1-1.169,0V3.868h-.22a.588.588,0,0,1,0-1.177h.22V2.471a.585.585,0,1,1,1.169,0v.221h.219a.588.588,0,0,1,0,1.177Zm0,0" transform="translate(-45.865)" fill="#fff"/></g></svg>
                        </span>
                        {{__('Mode of application')}}
                        <div class="instruction__more-wrap" data-type="dropdown-btn">
                            <span class="instruction__more-icon" data-type="dropdown-btn">
                            <svg data-type="dropdown-btn" xmlns="http://www.w3.org/2000/svg" width="14.525" height="7.102" viewBox="0 0 14.525 7.102"><path data-type="dropdown-btn" d="M13.276.191,7.263,5.53,1.251.191a.8.8,0,0,0-1.037,0,.6.6,0,0,0,0,.921l6.53,5.8h0a.8.8,0,0,0,1.036,0l6.53-5.8a.6.6,0,0,0,0-.922A.8.8,0,0,0,13.276.191Z" transform="translate(0 0)" fill="#fff"/></svg>
                            </span>
                            {{__('Read more')}}
                        </div>
                    </div>
                    <div class="instruction-dropdown-content" data-type="dropdown-content">
                        @if ($product->recipe)
                            {{__('Medicine with prescription')}}
                        @endif
                        @if (!$product->recipe)
                            {{__('Medicine without prescription')}}
                        @endif
                    </div>
                </li>
                </ul>
            </div>
        </section>
        <section class="product-search products-read__product-search" data-id="product-search">
            <div class="container product-search__container">
                <h2 class="title product-search__title" id="products">{{__("Help to find what you're looking for")}}</h2>
                <form class="product-search__form" action="{{route('products.search')}}" method="POST">
                    @csrf
                    <label class="product-search__label">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                            <path d="M19.734,18.448l-6.2-6.2a7.573,7.573,0,1,0-5.959,2.9c1.762,0,4.673-1.617,4.673-1.617l6.2,6.2a.909.909,0,0,0,1.286-1.286ZM1.818,7.576a5.758,5.758,0,1,1,5.758,5.758A5.764,5.764,0,0,1,1.818,7.576Z" fill="#1d1d1d"/>
                        </svg>
                        <input class="product-search__input" data-id="search-input" name="keyword" type="search" placeholder="{{__('Search by Product Name')}}" autocomplete="off">
                    </label>
                    <button class="visually-hidden" data-id="search-submit-btn" type="submit"></button>
                </form>
                <div class="product-filter" data-id="product-filter">
                    <a class="product-filter__link current" data-action="filter" data-filter="all">{{__('All')}}</a>
                    <a class="product-filter__link" data-action="filter" data-filter="with-recipe">{{__('With recipe')}}</a>
                    <a class="product-filter__link" data-action="filter" data-filter="without-recipe">{{__('Without recipe')}}</a>
                </div>
                <div class="product-categories {{isset($currentCategory) ? '' : 'hidden' }}" data-id="products-categories">
                    <button class="product-categories__dropdown-btn" type="button" data-action="categories-btn">
                        <svg data-action="categories-btn" xmlns="http://www.w3.org/2000/svg" width="12.666" height="20" viewBox="0 0 12.666 20"><g data-action="categories-btn" transform="translate(-1026 429) rotate(-90)"><rect data-action="categories-btn" width="20" height="2.5" rx="1" transform="translate(409 1026)" fill="#fff"/><rect data-action="categories-btn" width="14" height="2.5" rx="1" transform="translate(412 1031.083)" fill="#fff"/><rect data-action="categories-btn" width="4" height="2.5" rx="1" transform="translate(417 1036.166)" fill="#fff"/></g></svg>
                        {{__('Search by Categories')}}
                    </button>
                    <div class="product-categories__content-wrap">
                        <ul class="product-categories__content">
                            @foreach ($productsCategories as $category)
                                <li class="product-categories__item">
                                <a class="product-categories__link @isset($currentCategory) {{$currentCategory->id == $category->id ? 'current' : ''}} @endisset" data-name="category-link" data-type="category" data-category="{{$category->id}}" href="#">
                                    <span data-type="category" data-category="{{$category->id}}">{{$category->title}}</span>
                                    <span data-type="category" data-category="{{$category->id}}">{{$category->title}}</span>
                                </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="all-products products-read__all-products" data-id="products-section">
            <input data-id="current-category" type="hidden" value="null">
        </section>
        <section class="similar-products">
            <div class="container">
                <h2 class="title similar-products__title">{{__('Similar products')}}</h2>
                @if ($similarProducts->count() <= 3)
                <ul class="similar-products__list">
                    @foreach ($similarProducts as $product)
                        <li class="similar-products__cards">
                            <x-products-card :product="$product" />
                        </li>
                    @endforeach               
                </ul>
                @else
                <div class="products-carousel__wrap">
                    <div class="owl-carousel products-carousel">
                        @foreach ($similarProducts as $product)
                            <div class="products-carousel__item">
                                <x-products-card :product="$product" />
                            </div>
                        @endforeach
                    </div>
                    <span class="products-carousel__prev-icon">
                        <svg width="14.525" height="8" viewBox="0 0 14.525 8"><path d="M13.276.216,7.263,6.229,1.251.215A.733.733,0,0,0,.214,1.253l6.53,6.532h0a.732.732,0,0,0,1.036,0l6.53-6.532A.733.733,0,1,0,13.276.216Z" fill="#fff"/></svg>
                    </span>
                    <span class="products-carousel__next-icon">
                        <svg width="14.525" height="8" viewBox="0 0 14.525 8"><path d="M13.276.216,7.263,6.229,1.251.215A.733.733,0,0,0,.214,1.253l6.53,6.532h0a.732.732,0,0,0,1.036,0l6.53-6.532A.733.733,0,1,0,13.276.216Z" fill="#fff"/></svg>
                    </span>
                </div>
                @endif
            </div>
        </section>
   </main>
@endsection