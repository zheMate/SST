@extends('layouts.main')


@section('content')

    <div class="categories__page">
        <div class="category__title">
            <h1>Категории</h1>
        </div>
<div class="category__block">
            <ul class="category__list">
                @foreach($categories as $category)
                <li><a href="{{ route('category.post.index', $category->id) }}">{{ $category->title }}</a></li>
                @endforeach
            </ul>
    <ul>

    </ul>
</div>

    </div>



@endsection

