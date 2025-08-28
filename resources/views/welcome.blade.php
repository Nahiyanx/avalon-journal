<x-layout>
    <h1 class="font-bold text-center text-6xl text-white/90">Thoughts Worth Sharing</h1>
    <h1 class="mt-4 text-center text-2xl text-black/90">Your blog, your style-made simple.</h1>
    <form action="{{ route('search') }}" method="GET" class="flex items-center justify-center mt-6">
        <input type="text" name="query" placeholder="Search blogs..."
            class="px-4 py-2 rounded-lg border border-gray-300 w-1/2">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg ml-2">
            Search
        </button>
    </form>
    <section>
        <div>
            <h1 class="mt-20 font-bold text-xl text-black/90 mb-6">Recent Blogs</h1>
        </div>
        <div class="grid lg:grid-cols-3 gap-8">
            @foreach ($posts as $post)
                <x-blog-card :post="$post"/>
            @endforeach
        </div>
    </section>
    <section>
        <div>
            <h1 class="mt-10 font-bold text-xl text-black/90 mb-6">Category</h1>
        </div>
        <div class="flex flex-wrap gap-2">
            @foreach ($categories as $category)
                <a href="{{ route('categories.show', $category) }}" 
                class="bg-yellow-200 text-yellow-800 px-3 py-1 rounded-full text-sm hover:bg-yellow-300">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>
    </section>
    <section>
    </section>
</x-layout>