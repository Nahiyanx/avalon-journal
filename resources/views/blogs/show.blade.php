<x-layout>
    <div class="max-w-2xl mx-auto p-6 bg-white/50 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-2">{{ $post->title }}</h1>
        <p class="text-gray-600 mb-4">
            By 
            <a href="{{ route('profile.show', $post->user) }}" 
            class="hover:underline">
            {{ $post->user->name }}
            </a>
        </p>

        <!-- Static Categories -->
        <div class="mb-4">
            @foreach ($post->categories as $category)
                <a href="{{ route('categories.show', $category) }}" 
                class="bg-yellow-200 text-yellow-800 px-3 py-1 rounded-full text-sm hover:bg-yellow-300 mr-1">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>

        <p class="text-lg leading-relaxed whitespace-pre-line">{{ $post->body }}</p>

        <div class="mt-6">
            <a href="{{ url()->previous() }}" class="text-blue-500 hover:underline">← Back</a>
        </div>
        <hr class="mt-6 border-t border-gray-500">
        <div class="mt-8 bg-black/20 p-2 rounded-lg">
            <h2 class="text-xl font-bold mb-4">Comments</h2>
            @foreach($post->comments as $comment)
                <div class="mb-4 p-3 border rounded-lg bg-gray-200">
                    <p class="text-gray-800">{{ $comment->body }}</p>
                    <small class="text-gray-500">By {{ $comment->user->name }} | {{ $comment->created_at->diffForHumans() }}</small>
                </div>
            @endforeach
            @auth
                <form method="POST" action="{{ route('comments.store', $post) }}">
                    @csrf
                    <textarea name="body" rows="3" class="w-full border rounded-lg p-2 mb-2" placeholder="Write a comment..."></textarea>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Post Comment</button>
                </form>
            @else
                <p class="text-gray-600">Please <a href="{{ route('login') }}" class="text-blue-500">login</a> to comment.</p>
            @endauth
        </div>
    </div>
</x-layout>
