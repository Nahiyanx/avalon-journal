<x-layout>
    <div class="max-w-3xl mx-auto p-6">
        <h1 class="text-3xl font-bold mb-4">Posts in "{{ $category->name }}"</h1>

        @forelse ($posts as $post)
            <div class="bg-white/60 p-4 mb-4 rounded shadow">
                <h2 class="text-xl font-bold">{{ $post->title }}</h2>
                <p class="text-gray-600">By {{ $post->user->name }}</p>
                <p class="mt-2">{{ Str::limit($post->body, 120) }}</p>
                <a href="{{ route('postBlog.show', $post) }}" class="text-blue-500 hover:underline">Read More</a>
            </div>
        @empty
            <p>No posts in this category yet.</p>
        @endforelse
    </div>
</x-layout>