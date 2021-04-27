<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <h1 class="text-4xl font-bold mb-4">Blocco note</h1>

        <a href="/posts/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Aggiungi</a>

        @foreach($posts as $post)
            <article class="mb-2">
                <a href="/posts/{{ $post->id }}/edit" class="text-xl font-bold text-blue-500">{{ $post->title }}</a>
                <p class="text-md text-gray-600">{{ $post->content }}</p>

                <form method="post" action="/posts/{{ $post->id }}">
                    @csrf
                    @method('DELETE')

                    <button class="ml-4 bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Elimina</button>
                </form>

                 <hr class="mt-2">
            </article>
        @endforeach
    </div>
</body>
</html>
