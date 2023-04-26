@extends('layouts.main')

@section('title', 'Новости студенческого совета Авиатехникума' )

@section('meta')

<meta name="description" content="Новости студенческого совета Авиатехникума">
<meta name="keywords" content="Новости, ССТ, Авиатехникум, Студенческий совет авиатехникума, Взлёт в будущее, ямы актив">
@endsection

@section('content')

<div class="news">
    <div class="info">
        <h1>Новости студенческого совета Авиатехникума</h1>
    </div>
    <section class="cards-wrapper">
        @foreach($posts as $post)
        <div class="card-grid-space">

            <a class="card" href="{{ route('post.show', $post->id) }}" style="--bg-img: url('{{asset('storage/'.$post->preview_image)  }}');">
                <div>
                    <h1>{{ $post->title }}</h1>
                    <p>{!! Str::limit($post->content, '2', '...') !!}</p>

                    <div class="card__footer">
                        <div class="tags">
                            <div class="tag">{{ $post->category->title }}</div>
                        </div>
                        @auth()
                        <form action="{{ route('post.like.store', $post->id) }}" method="post">
                            @csrf
                            <span class="like__counter">{{ $post->liked_users_count }}</span>
                            <button class="like" type="submit">
                                @if(@auth()->user()->likedPosts->contains($post->id))
                                <svg class="like__wrapper" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path class="like__path" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
                                </svg>

                                @else
                                <svg class="like__wrapper" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path class="like__path" d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z" />
                                </svg>

                                @endif

                            </button>
                        </form>
                        @endauth
                        @guest()
                        <div class="guest__footer">
                            <span class="like__counter">{{ $post->liked_users_count }}</span>
                            <svg class="like__wrapper" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path class="like__path" d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z" />
                            </svg>
                        </div>
                        @endguest
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </section>
    <div class="pagination">
        <div class="pagination__wrapper">
            {{ $posts->links('custom-pagination-links-sst') }}
        </div>
    </div>
</div>
<div class="news">
    <div class="info">
        <h1>Рандомный порядок</h1>
    </div>
    <section class="cards-wrapper">
        @foreach($randomPosts as $post)
        <div class="card-grid-space">

            <a class="card" href="{{ route('post.show', $post->id) }}" style="--bg-img: url('{{asset('storage/'.$post->preview_image)  }}');">
                <div>
                    <h1>{{ $post->title }}</h1>
                    <p>{!! Str::limit($post->content, '2', '...') !!}</p>
                    <div class="card__footer">
                        <div class="tags">
                            <div class="tag">{{ $post->category->title }}</div>
                        </div>
                        @auth()
                        <form action="{{ route('post.like.store', $post->id) }}" method="post">
                            @csrf
                            <span class="like__counter">{{ $post->liked_users_count }}</span>
                            <button class="like" type="submit">
                                @if(@auth()->user()->likedPosts->contains($post->id))
                                <svg class="like__wrapper" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path class="like__path" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
                                </svg>

                                @else
                                <svg class="like__wrapper" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path class="like__path" d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z" />
                                </svg>

                                @endif

                            </button>
                        </form>
                        @endauth
                        @guest()
                        <div class="guest__footer">
                            <span class="like__counter">{{ $post->liked_users_count }}</span>
                            <svg class="like__wrapper" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path class="like__path" d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z" />
                            </svg>
                        </div>
                        @endguest
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </section>
</div>
<div class="news">
    <div class="info">
        <h1>Топ постов От самого залайконного</h1>
    </div>
    <section class="cards-wrapper">
        @foreach($likedPosts as $post)
        <div class="card-grid-space">

            <a class="card" href="{{ route('post.show', $post->id) }}" style="--bg-img: url('{{asset('storage/'.$post->preview_image)  }}');">
                <div>
                    <h1>{{ $post->title }}</h1>
                    <p>{!! Str::limit($post->content, '2', '...') !!}</p>
                    <div class="card__footer">
                        <div class="tags">
                            <div class="tag">{{ $post->category->title }}</div>
                        </div>
                        @auth()
                        <form action="{{ route('post.like.store', $post->id) }}" method="post">
                            @csrf
                            <span class="like__counter">{{ $post->liked_users_count }}</span>
                            <button class="like" type="submit">
                                @if(@auth()->user()->likedPosts->contains($post->id))
                                <svg class="like__wrapper" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path class="like__path" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
                                </svg>
                                @else
                                <svg class="like__wrapper" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path class="like__path" d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z" />
                                </svg>
                                @endif
                            </button>
                        </form>
                        @endauth
                        @guest()
                        <div class="guest__footer">
                            <span class="like__counter">{{ $post->liked_users_count }}</span>
                            <svg class="like__wrapper" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path class="like__path" d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z" />
                            </svg>
                        </div>
                        @endguest
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </section>
</div>



@endsection
