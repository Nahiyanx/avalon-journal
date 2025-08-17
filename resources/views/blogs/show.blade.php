<x-layout>
    <div class="max-w-2xl mx-auto p-6 bg-white/50 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-2">{{ $post->title }}</h1>
        <p class="text-gray-600 mb-4">By {{ $post->user->name }}</p>

        <!-- Static Categories -->
        <div class="mb-4">
            <span class="bg-yellow-200 text-yellow-800 px-3 py-1 rounded-full text-sm">Technology</span>
            <span class="bg-blue-200 text-blue-800 px-3 py-1 rounded-full text-sm">Lifestyle</span>
        </div>

        <p class="text-lg leading-relaxed whitespace-pre-line">{{ $post->body }}</p>

        <div class="mt-6">
            <a href="{{ url()->previous() }}" class="text-blue-500 hover:underline">← Back</a>
        </div>
    </div>
</x-layout>
