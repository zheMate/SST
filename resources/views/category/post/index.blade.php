@extends('layouts.main')


@section('content')

    <div class="news">
        <div class="info">
            <h1>{{ $category->title }}</h1>
        </div>
        <section class="cards-wrapper">
            @foreach($posts as $post)
                <div class="card-grid-space">

                    <a class="card" href="{{ route('post.show', $post->id) }}"
                       style="--bg-img: url('{{asset('storage/'.$post->preview_image)  }}');">
                        <div>
                            <h1>{{ $post->title }}</h1>
                            <p>{!! Str::limit($post->content, '2', '...')  !!}</p>

                            <div class="card__footer">
                                <div class="tags">
                                    <div class="tag">{{ $post->category->title }}</div>
                                </div>
                                @auth()
                                <form action="{{ route('post.like.store', $post->id) }}" method="post">
                                    @csrf
                                    <span class="like__counter">{{ $post->liked_users_count }}</span>
                                    <button type="submit">
                                            @if(@auth()->user()->likedPosts->contains($post->id))
                                                <i class="fas fa-heart"></i>
                                            @else
                                                <i class="far fa-heart"></i>
                                            @endif

                                    </button>
                                </form>
                                @endauth
                                @guest()
                                    <div class="guest__footer">
                                        <span class="like__counter">{{ $post->liked_users_count }}</span>
                                        <i class="far fa-heart"></i>
                                    </div>
                                @endguest
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

@endsection

