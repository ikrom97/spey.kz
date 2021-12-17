@extends('layouts.master')

@section('title', __('Industry news'))

@section('content')
    <main class="news-page">
        <section class="vitrin">
            <img class="vitrin-img" src="{{asset('img/news-vitrin-bg.jpg')}}">
            <div class="container vitrin-container">
                <div class="vitrin-left">
                    <h1 class="vitrin-title">{{__('Industry news')}}</h1>
                    <p class="vitrin__text">
                        {{__('To achieve our goals in the field of healthcare, we work together with representatives of large pharmacy chains and medical structures from different countries.')}}
                    </p>
                    <div class="vitrin__link-wrap">
                        <div class="vitrin-dropdown" data-family="vitrin-dropdown">
                            <button class="button vitrin-dropdown__button" data-family="vitrin-dropdown" type="button">{{__('Select category')}}</button>
                            <div class="vitrin-dropdown__content" data-family="vitrin-dropdown">
                                <ul class="vitrin-dropdown__list" data-family="vitrin-dropdown">
                                    @foreach ($newsCategories as $category)
                                        <li class="vitrin-dropdown__item" data-family="vitrin-dropdown">
                                            <a class="vitrin-dropdown__link" data-family="vitrin-dropdown" href="{{route('news')}}?category={{$category->id}}#all-news">{{$category->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="all-news" id="all-news">
            <div class="container">
                @if (isset($currentCategory))
                    <h2 class="all-news__title">{{$currentCategory->title}}</h2> 
                @else
                    <h2 class="all-news__title">{{__('All news')}}</h2>
                @endif
                <ul class="all-news__list">
                    @foreach ($allNews as $news)
                        <li class="all-news__item">
                            <x-news-card :news="$news" />
                        </li>
                    @endforeach
                </ul>
                {{$allNews->links('components/pagination')}}
            </div>
        </section>
    </main>
@endsection