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
                <a class="header-navigation-link" href="{{route('dashboard.products.categories')}}">Категории: {{$categories->count()}}</a>
            </li>
            <li class="header-navigation-item">
                <a class="header-navigation-link green-bg white current">Добавить новый продукт</a>
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
            <a class="breadcrumbs-link current" href="{{route('dashboard.products.create')}}">Добавление</a>
        </li>
    </ul>
    <main class="products-create-page">
        <form class="form" action="{{route('products.create')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label class="form-label">Выберите категорию продукта
                <select class="form-select" name="category-id">
                    <option value=""></option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{old('category-id') == $category->id ? 'selected' : ''}}>{{$category->title}}</option>
                    @endforeach
                </select>
            </label>
            <label class="form-label">Название продукта на русском
                <input class="form-input" type="text" name="ru-title" value="{{old('ru-title')}}">
            </label>
            <label class="form-label">Название продукта на английском
                <input class="form-input" type="text" name="en-title" value="{{old('en-title')}}">
            </label>
            <label class="form-label">Выберите картинку для продукта
                <input class="form-input" type="file" name="img" value="{{old('img')}}">
            </label>
            <label class="form-label">Инструкция на русском
                <input class="form-input" type="file" name="ru-instruction" value="{{old('ru-instruction')}}">
            </label>
            <label class="form-label">Инструкция на английском
                <input class="form-input" type="file" name="en-instruction" value="{{old('en-instruction')}}">
            </label>
            <div class="form-item">
                Способ применения:
                <div class="form-item-content">
                    <label class="form-label form-label-radio">
                        <input class="form-input" type="radio" name="recipe" value="true" {{old('recipe') == 'true' ? 'checked' : ''}}> Рецептурный
                    </label>
                    <label class="form-label form-label-radio">
                        <input class="form-input" type="radio" name="recipe" value="false" {{old('recipe') == 'false' ? 'checked' : ''}}> Без рецепта
                    </label>
                </div>
            </div>
            <label class="form-label form-label-textarea">Состав на русском:
                <textarea class="simditor-textarea" name="ru-composition">{{old('ru-composition')}}</textarea>
            </label>
            <label class="form-label form-label-textarea">Состав на английском:
                <textarea class="simditor-textarea" name="en-composition">{{old('en-composition')}}</textarea>
            </label>
            <label class="form-label form-label-textarea">Показания к применению на русском:
                <textarea class="simditor-textarea" name="ru-indications">{{old('ru-indications')}}</textarea>
            </label>
            <label class="form-label form-label-textarea">Показания к применению на английском:
                <textarea class="simditor-textarea" name="en-indications">{{old('en-indications')}}</textarea>
            </label>
            <div class="form-btn-wrap">
                <button class="form-btn green-bg" type="submit">Добавить</button>
                <a class="form-btn red-bg" href="javascript:window.location.href=window.location.href">Отмена</a>
            </div>
        </form>
    </main>
@endsection