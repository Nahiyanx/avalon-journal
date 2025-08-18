<x-layout>
    <div  class="mt-10 flex flex-col items-center">
        <h1 class="text-2xl font-bold mb-4">Create A New Post</h1>
        <form action="{{ route('postBlog.store') }}" method="POST" class="w-full max-w-xl">
            @csrf
            <div>
                <label for="title" class="font-bold">Title</label>
                <input class="bg-white/40 px-4 py-2 rounded-lg mt-2 mb-4 w-full" type="text" name="title" placeholder="Please Enter Blog Title">
                <label for="categories" class="font-bold">Category</label>
                <div class="bg-white/40 px-4 py-2 rounded-lg mt-2">
                    <select name="categories[]" id="categories" class="w-full" multiple>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <h3>Hold CTRL to select multiple categories (For Windows)</h3>
                <br>
                <label for="body" class="font-bold">Blog Description</label>
                <textarea class="bg-white/40 px-4 py-2 rounded-lg mt-2 w-full " name="body" id="body" rows="10" placeholder="Enter Blog Description..."></textarea>
                <button class="mt-5 rounded-lg px-2 py-1 bg-white/40 hover:bg-black/30 hover:text-yellow-400 transition-colors duration-300 hover:cursor-pointer">Submit</button>
            </div>
        </form>
    </div>
</x-layout>