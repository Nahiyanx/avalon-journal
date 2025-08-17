<x-layout>
    <div class="mt-10 flex flex-col items-center">
        <h1 class="text-2xl font-bold mb-4">Edit Post</h1>
        <form action="{{ route('postBlog.update', $post->id) }}" method="POST" class="w-full max-w-xl">
            @csrf
            @method('PUT')

            <label for="title" class="font-bold">Title</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}" class="bg-white/40 px-4 py-2 rounded-lg mt-2 w-full">

            <label for="body" class="font-bold mt-4">Blog Description</label>
            <textarea name="body" rows="10" class="bg-white/40 px-4 py-2 rounded-lg mt-2 w-full">{{ old('body', $post->body) }}</textarea>

            <button type="submit" class="mt-4 bg-black/30 text-yellow-400 px-4 py-2 rounded hover:bg-black/50">Update</button>
        </form>
    </div>
</x-layout>