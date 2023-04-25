<x-layout>
    <article>
        <h1> {{ $post->title }} </h1>
        <h6>{{ 'Date:  ' . DateTime::createFromFormat('U', $post->date)->format('d/m/Y') }}</h6>

        <div>
            {!! $post->body !!}
        </div>
    </article>

    <a href="/">Go Back</a>
</x-layout>

