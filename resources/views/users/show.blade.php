<x-layout>
    <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow">
        <h1 class="text-2xl font-bold mb-4">
            Profile of {{ $user->name }}
        </h1>

        <h2 class="text-lg font-semibold mb-2">Blogs by {{ $user->name }}</h2>
        @if($user->posts->count())
            <ul class="list-disc pl-6">
                @foreach($user->posts as $post)
                    <li class="mb-2">
                        <a href="{{ route('postBlog.show', $post) }}" class="text-blue-500 hover:underline">
                            {{ $post->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-500">No blogs from this user yet.</p>
        @endif
    </div>
</x-layout>