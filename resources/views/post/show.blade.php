@extends('layouts.main')


@section('title', 'Новость || '. $post->title )


@section('meta')

<meta name="description" content="Новости ССТ Авиатехникума, на повестке дня, {{ $post->title }}">
<meta name="keywords" content="Новости, ССТ, Авиатехникум, Студенческий совет авиатехникума, Взлёт в будущее, ямы актив, {{ $post->title }}">
@endsection

@section('content')




<div class="article">
    <div class="wrapper" style="--url: url('{{asset('storage/'.$post->main_image)  }}');">
        <div class="wrapperText">
            <h1>
                <mark>{{ $post->title }}</mark>
            </h1>
            <p id="date">
                <mark>Дата публикации: {{ $date->day }} {{ $date->getTranslatedMonthName('Do MMMM') }}
                    , {{ $date->year }} {{$date->format('H:i')}}</mark>
                <br>

                <mark>Комментарии: {{ $post->comments->count() }}</mark>
            <section class="single__feedback">

                @auth()
                <div class="single__show__like">
                    <form action="{{ route('post.like.store', $post->id) }}" method="post">
                        @csrf
                        <mark class="mark__like">
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
                        </mark>
                </div>
                @endauth
                @guest()
                <div class="single__show">
                    <mark class="mark__like">
                        <span class="like__counter">{{ $post->liked_users_count }}</span>
                        <svg class="like__wrapper" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path class="like__path" d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z" />
                        </svg>
                    </mark>
                </div>
                @endguest
                </form>
            </section>
            </p>

        </div>
    </div>

    <div class="articleText">
        <h4 class="introduction">{{ $post->title }}</h4>

        <p>{!! $post->content !!}</p>

    </div>


    <div class="info-single">
        @if($relatedPosts->count() > 0)
        <h1>Схожие посты</h1>
        <div class="rec-container">
            @foreach($relatedPosts as $relatedPost)
            <div class="rec rec-1" style="--reci: url('{{asset('storage/'.$relatedPost->main_image)  }}');">
                <div class="rec-img"></div>
                <a href="{{ route('post.show', $relatedPost->id) }}" class="rec-link">
                    <div class="rec-img-hovered"></div>
                </a>
                <div class="rec-info">
                    <div class="rec-about">
                        <a class="rec-tag tag-news">{{ $relatedPost->category->title }}</a>

                    </div>
                    <h1 class="rec-title">{{ $relatedPost->title }}</h1>

                </div>
            </div>
            @endforeach
        </div>





        @endif

        @guest()
        <p>Чтобы оставить свой комментарий, <a href="{{ route('personal.main.index') }}"> авторизуйтесь
                !</a></p>

        @endguest

        <div class="comments__block">
            <section class="comment-list">
                <h3>Комментарии ({{$post->comments->count() }})</h3>
                @foreach($post->comments as $comment)
                <div class="comment-text">
                    <span class="username">
                        <div>
                            <b>
                                {{$comment->user->name}}
                            </b>
                        </div>
                        <div class="date__of__enter">
                            <span class="text-muted float-right">{{ $comment->dateAsCarbon->diffForHumans() }}</span>
                        </div>
                    </span><!-- /.username -->

                    <p class="comment__message">
                        <svg class="message__icon__wrapper" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path class="message__icon" d="M448 0H64C28.7 0 0 28.7 0 64v288c0 35.3 28.7 64 64 64h96v84c0 7.1 5.8 12 12 12 2.4 0 4.9-.7 7.1-2.4L304 416h144c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64zm16 352c0 8.8-7.2 16-16 16H288l-12.8 9.6L208 428v-60H64c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16h384c8.8 0 16 7.2 16 16v288z" />
                        </svg>

                        {{ $comment->message }}
                    </p>
                </div>
                @endforeach
            </section>

            @auth()
            <div class="comment-section">
                <h3 class="comment-section-title">Отправьте комментарий</h3>
                <div class="comment-content">
                    <form action="{{ route('post.comment.store', $post->id) }}" method="post">
                        @csrf
                        <label for="comment">Ваш комментарий:</label>
                        <textarea rows="5" id="comment" type="text" name="message" placeholder="Поделитесь своим мнением !" class="comm-textarea"></textarea>
                        <input type="submit" value="Отправить" class="btn">
                    </form>
                </div>


            </div>
            @endauth
        </div>
    </div>
</div>
</div>




@endsection
