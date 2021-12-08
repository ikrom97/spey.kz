@extends('dashboard.layouts.master')

@section('content')
    <header class="header">
        <form class="search-form" action="#">
            @csrf
            <input class="search-input" type="search" placeholder="Поиск по Продуктам...">
            <button class="visually-hidden" type="submit">Искать</button>
        </form>
        <ul class="header-navigation">
            <li class="header-navigation-item">
                <a class="header-navigation-link" href="{{route('dashboard')}}">Продукты: {{$productsQuantity}}</a>
            </li>
            <li class="header-navigation-item">
                <a class="header-navigation-link" href="{{route('dashboard.products.categories')}}">Категории: {{$categoriesQuantity}}</a>
            </li>
            <li class="header-navigation-item">
                <a class="header-navigation-link green-bg white" href="{{route('dashboard.products.create')}}">Добавить новый продукт</a>
            </li>
        </ul>
    </header>
        <ul class="breadcrumbs book-read-page__breadcrumbs">
            <li class="breadcrumbs-item">
                <a class="breadcrumbs-link" href="{{route('dashboard')}}">Продукты</a>
                <svg width="5" height="10" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 10L5 5L0 0V10Z" fill="#0033ab"></path>
                </svg>
            </li>
            <li class="breadcrumbs-item">
                <a class="breadcrumbs-link current" href="{{route('dashboard.products.update', $product->id)}}">{{$product->ru_title}}</a>
            </li>
        </ul>
    <main class="products-update-page">
        
    </main>
@endsection