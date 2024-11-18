@extends('partials.layout')
@section('title', 'Home page')
@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-12">
        <h1 class="text-4xl font-bold text-center mb-4">Latest Posts</h1>
        <div class="w-24 h-1 bg-primary mx-auto"></div>
    </div>

    <div class="my-6 text-center">
        {{ $posts->links() }}
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach ($posts as $post)
            <div class="card bg-base-100 hover:shadow-2xl transition-shadow duration-300">
                <figure class="px-4 pt-4">
                    <img class="rounded-xl h-48 w-full object-cover"
                        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="{{ $post->title }}" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-lg font-semibold hover:text-primary cursor-pointer transition-colors">
                        {{ $post->title }}
                    </h2>
                    <p class="text-base-content/70 text-sm line-clamp-3">
                        {{ $post->snippet }}
                    </p>
                    <div class="card-actions justify-end mt-4">
                        <button class="btn btn-primary btn-sm">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-8 text-center">
        {{ $posts->links() }}
    </div>
</div>
@endsection