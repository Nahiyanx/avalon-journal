<x-layout>
    <form action="{{ route('search') }}" method="GET" class="flex items-center justify-center mt-6">
        <input type="text" name="query" placeholder="Search blogs..."
            class="px-4 py-2 rounded-lg border border-gray-300 w-1/2">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg ml-2">
            Search
        </button>
    </form>
    @foreach ($posts as $post)
        <div class="bg-white/40 p-4 rounded-lg shadow mt-4 hover:bg-black/30 hover:text-yellow-400 transition-colors duration-300">
            <h2 class="text-xl font-bold">{{ $post->title }}</h2>
            <p class="text-gray-900">
                By 
                <a href="{{ route('profile.show', $post->user) }}" 
                class="hover:underline">
                {{ $post->user->name }}
                </a>
            </p>
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