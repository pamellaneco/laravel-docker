<x-layout>

    <h1>Testando conhecimentos dos estudos - Laracasts Laravel from scratch</h1>

    <h5><a href="/welcome">Go to Laravel home/documentation</a></h5>

    @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'foobar': '' }}">
            <h1>
                <a href="/posts/{{ $post->slug }}">
                {{ $post->title }}
            </a>
        </h1>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout>