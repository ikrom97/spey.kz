<a class="product-card" href="{{route('products.read', $product->id)}}">
    <img class="product-card__img" src="{{asset('img/products/' . $product->img)}}" alt="{{$product->title}}">
    <div class="product-card__body">
        <h3 class="product-card__title">
            {{$product->title}}
            <div class="product-card__mode">
                @if ($product->recipe)
                    {!!__('Medicine with <br> prescription')!!}
                @endif
                @if (!$product->recipe)
                    {!!__('Medicine without <br> prescription')!!}
                @endif  
            </div>
        </h3>
        <div class="view-more">
            <span class="view-more__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14.525" viewBox="0 0 8 14.525"><g transform="translate(0 14.525) rotate(-90)"><path d="M13.276.216,7.263,6.229,1.251.215A.733.733,0,0,0,.214,1.253l6.53,6.532h0a.732.732,0,0,0,1.036,0l6.53-6.532A.733.733,0,1,0,13.276.216Z" fill="#fff"></path></g></svg>
            </span>
            {{__('View product')}}
        </div>
        <span class="product-card__category-icon">
            {!!$product->category->icon!!}
        </span>
    </div>
</a>