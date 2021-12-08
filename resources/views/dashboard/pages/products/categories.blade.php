@extends('dashboard.layouts.master')

@section('content')
    <header class="header">
        <form class="search-form" action="#">
            @csrf
            <input class="search-input" type="search" placeholder="Поиск по Категориям...">
            <button class="visually-hidden" type="submit">Искать</button>
        </form>
        <ul class="header-navigation">
            <li class="header-navigation-item">
                <a class="header-navigation-link" href="{{route('dashboard')}}">Продукты: {{$productsQuantity}}</a>
            </li>
            <li class="header-navigation-item">
                <a class="header-navigation-link current" href="{{route('dashboard.products.categories')}}">Категории: {{$categoriesQuantity}}</a>
            </li>
            <li class="header-navigation-item">
                <a class="header-navigation-link green-bg white" href="{{route('dashboard.products.create')}}">Добавить новую категорию</a>
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
                <a class="breadcrumbs-link current" href="{{route('dashboard.products.categories')}}">Категории</a>
            </li>
        </ul>
    <main class="products-categories-page">
        <ul class="list">
            @foreach ($categories as $category)
                <li class="list-item">
                    <span class="list-item-title">{{$rank++}}. {{$category->title}}</span>
                    <button class="list-action" type="button">
                        <svg fill="#fff" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 217.855 217.855">
                            <path d="M215.658 53.55L164.305 2.196a7.5 7.5 0 00-10.606 0L3.809 152.086a7.505 7.505 0 00-2.193 5.075L.005 210.127a7.502 7.502 0 007.725 7.724l52.964-1.613a7.502 7.502 0 005.075-2.192l149.89-149.889a7.501 7.501 0 00-.001-10.607zM57.264 201.336l-42.024 1.28 1.279-42.026 91.124-91.125 40.75 40.743-91.129 91.128zM159 99.602L118.249 58.86l40.752-40.753 40.746 40.747L159 99.602z"/>
                        </svg>
                    </button>
                    <button class="list-action red-bg" type="button">
                        <svg width="25" height="25" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash-alt" class="svg-inline--fa fa-trash-alt fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="#fff" d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z"></path>
                        </svg>
                    </button>
                </li>
            @endforeach
        </ul>
        {{$categories->links('components/pagination')}}
    </main>
@endsection