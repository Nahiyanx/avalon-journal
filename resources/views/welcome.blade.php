<x-layout>
    <h1 class="font-bold text-center text-4xl text-black/90">Thoughts Worth Sharing</h1>
    <h1 class="mt-4 text-center text-2xl text-black/90">Your blog, your style-made simple.</h1>
    <section>
        <div>
            <h1 class="mt-10 font-bold text-xl text-black/90 mb-6">Recent Blogs</h1>
        </div>
        <div class="grid lg:grid-cols-3 gap-8">
            <x-blog-card />
            <x-blog-card />
            <x-blog-card />
        </div>
    </section>
    <section>
        <div>
            <h1 class="mt-10 font-bold text-xl text-black/90 mb-6">Tags</h1>
        </div>
        <div class="flex flex-wrap gap-2">
            <x-tag>Lifestyle</x-tag>
            <x-tag>Lifestyle</x-tag>
            <x-tag>Lifestyle</x-tag>
        </div>
    </section>
</x-layout>