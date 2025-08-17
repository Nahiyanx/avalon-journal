<x-layout>
    @foreach ($posts as $post)
        <div class="bg-white/40 p-4 rounded-lg shadow mt-4 hover:bg-black/30 hover:text-yellow-400 transition-colors duration-300">
            <h2 class="text-xl font-bold">{{ $post->title }}</h2>
            <p class="text-gray-800 mt-2">{{ Str::limit($post->body, 100) }}</p>
            <div class="mt-4 self-start">
                <a href="{{ route('postBlog.show', $post) }}" class="text-blue-500 hover:underline">Read More</a>
            </div>
        </div>
    @endforeach
    <div class="mt-4">
        {{ $posts->links() }}
    </div>
</x-layout>