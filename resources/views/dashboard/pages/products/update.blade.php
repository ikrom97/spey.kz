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
        <form class="form" action="{{route('products.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$product->id}}">
            <label class="form-label">Выберите категорию продукта
                <select class="form-select" name="category-id">
                    @php 
                        $old = old('category-id');
                        if ($old == '') {
                            $old = $product->category->id;
                        }
                    @endphp
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{$old == $category->id ? 'selected' : ''}}>{{$category->title}}</option>
                    @endforeach
                </select>
            </label>
            <label class="form-label">Название продукта на русском
                <input class="form-input" type="text" name="ru-title" value="{{old('ru-title') == '' ? $product->ru_title : old('ru-title')}}">
            </label>
            <label class="form-label">Название продукта на английском
                <input class="form-input" type="text" name="en-title" value="{{old('en-title') == '' ? $product->en_title : old('en-title')}}">
            </label>
            <label class="form-label">Выберите картинку для продукта
                <input class="form-input" type="file" name="img">
            </label>
            <label class="form-label">Инструкция на русском
                <input class="form-input" type="file" name="ru-instruction">
            </label>
            <label class="form-label">Инструкция на английском
                <input class="form-input" type="file" name="en-instruction">
            </label>
            <div class="form-item">
                Способ применения:
                <div class="form-item-content">
                    <label class="form-label form-label-radio">
                        <input class="form-input" type="radio" name="recipe" value="true" {{$product->recipe == true ? 'checked' : ''}}> Рецептурный
                    </label>
                    <label class="form-label form-label-radio">
                        <input class="form-input" type="radio" name="recipe" value="false" {{$product->recipe == false ? 'checked' : ''}}> Без рецепта
                    </label>
                </div>
            </div>
            <label class="form-label form-label-textarea">Состав на русском:
                <textarea class="simditor-textarea" name="ru-composition">{{ old('ru-composition') == '' ? $product->ru_composition : old('ru-composition') }}</textarea>
            </label>
            <label class="form-label form-label-textarea">Состав на английском:
                <textarea class="simditor-textarea" name="en-composition">{{ old('en-composition') == '' ? $product->en_composition : old('en-composition') }}</textarea>
            </label>
            <label class="form-label form-label-textarea">Показания к применению на русском:
                <textarea class="simditor-textarea" name="ru-indications">{{ old('ru-indications') == '' ? $product->ru_indications : old('ru-indications') }}</textarea>
            </label>
            <label class="form-label form-label-textarea">Показания к применению на английском:
                <textarea class="simditor-textarea" name="en-indications">{{ old('en-indications') == '' ? $product->en_indications : old('en-indications') }}</textarea>
            </label>
            <label class="form-label form-label-textarea">Описание на русском:
                <textarea class="form-textarea" name="ru-description">{{old('ru-description') == '' ? $product->ru_description : old('ru-description')}}</textarea>
            </label>
            <label class="form-label form-label-textarea">Описание на английском:
                <textarea class="form-textarea" name="en-description">{{old('en-description') == '' ? $product->en_description : old('en-description')}}</textarea>
            </label>
            <div class="form-btn-wrap">
                <button class="form-btn green-bg" type="submit">Редактировать</button>
                <a class="form-btn red-bg" href="{{route('products.delete', $product->id)}}">Удалить</a>
            </div>
        </form>
    </main>
@endsection