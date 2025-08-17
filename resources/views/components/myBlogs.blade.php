<x-layout>
    <div class="mt-10 mx-auto max-w-4xl">
        <h1 class="text-3xl font-bold mb-6">My Blog Posts</h1>

        @if ($posts->isEmpty())
            <p class="text-white/90 text-3xl">You haven't written any posts yet.</p>
        @else
            <div class="space-y-4">
                @foreach ($posts as $post)
                    <div class="bg-white/40 p-4 rounded-lg shadow hover:bg-black/30 hover:text-yellow-400 transition-colors duration-300">
                        <h2 class="text-xl font-bold">{{ $post->title }}</h2>
                        <p class="text-gray-800 mt-2">{{ Str::limit($post->body, 100) }}</p>
                        <div class="mt-4 self-start">
                            <a href="{{ route('postBlog.show', $post) }}" class="text-blue-500 hover:underline">Read More</a>
                        </div>
                        <div class="flex gap-4 mt-4">
                            <a href="{{ route('postBlog.edit', $post->id) }}" class="text-blue-500 hover:underline">Edit</a>

                            <form action="{{ route('postBlog.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-layout>
