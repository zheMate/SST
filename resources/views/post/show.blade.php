@extends('layouts.main')


@section('title', 'Новость || '.  $post->title )


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
                    <mark>Дата публикации: {{ $date->translatedFormat('F') }} {{ $date->day }}
                        , {{ $date->year }} {{$date->format('H:i')}}</mark>
                    <br>

                    <mark>Комментарии: {{ $post->comments->count() }}</mark>
                <section class="single__feedback">

                    @auth()
                        <form action="{{ route('post.like.store', $post->id) }}" method="post">
                            @csrf
                            <mark class="mark__like">
                                <span class="like__counter">{{ $post->liked_users_count }}</span>

                                <button type="submit" class="like">
                                    @if(@auth()->user()->likedPosts->contains($post->id))
                                        <i class="fas fa-heart"></i>
                                    @else
                                        <i class="far fa-heart"></i>
                                    @endif
                                </button>
                            </mark>
                            @endauth
                            @guest()
                                <div class="guest__footer">
                                    <mark class="mark__like">
                                        <span class="like__counter">{{ $post->liked_users_count }}</span>
                                        <i class="far fa-heart"></i>
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
                        <p>Чтобы оставить свой комментарий, <a href="{{ route('personal.main.index') }}"> авторизуйиесь
                                !</a></p>

                    @endguest

                    <div class="comments__block">
                        <section class="comment-list">
                            <h3>Комментарии ({{$post->comments->count() }})</h3>
                            @foreach($post->comments as $comment)
                                <div class="comment-text">
                    <span class="username">
                      <div>
                          {{$comment->user->name}}
                      </div>
                      <span class="text-muted float-right">{{ $comment->dateAsCarbon->diffForHumans() }}</span>
                    </span><!-- /.username -->
                                    <p>
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
                                        <textarea rows="5" id="comment" type="text" name="message"
                                                  placeholder="Поделитесь своим мнением !"
                                                  class="comm-textarea"></textarea>
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