@extends('layouts.main')


@section('content')

    <div class="news">
        <div class="info">
            <h1>Новости студенческого совета Авиатехникума</h1>
        </div>
        <section class="cards-wrapper">
            @foreach($posts as $post)
                <div class="card-grid-space">

                    <a class="card" href="#" style="--bg-img: url('{{asset('storage/'.$post->preview_image)  }}');">
                        <div>
                            <h1>{{ $post->title }}</h1>
                            <p>{{ $post->content }}</p>

                            <div class="tags">
                                <div class="tag">{{ $post->category->title }}</div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </section>
        <div class="pagination">
            {{ $posts->links('custom-pagination-links-sst') }}
        </div>
    </div>
    <div class="news">
        <div class="info">
            <h1>Рандомный порядок</h1>
        </div>
        <section class="cards-wrapper">
            @foreach($randomPosts as $post)
                <div class="card-grid-space">

                    <a class="card" href="#" style="--bg-img: url('{{asset('storage/'.$post->preview_image)  }}');">
                        <div>
                            <h1>{{ $post->title }}</h1>
                            <p>{{ $post->content }}</p>

                            <div class="tags">
                                <div class="tag">{{ $post->category->title }}</div>
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

                    <a class="card" href="#" style="--bg-img: url('{{asset('storage/'.$post->preview_image)  }}');">
                        <div>
                            <h1>{{ $post->title }}</h1>
                            <p>{{ $post->content }}</p>

                            <div class="tags">
                                <div class="tag">{{ $post->category->title }}</div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </section>
    </div>



@endsection

