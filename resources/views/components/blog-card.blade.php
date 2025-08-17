@props(['post'])
<div class="p-4 bg-white/50 flex flex-col text-center rounded-lg hover:bg-black/30 hover:text-yellow-400 transition-colors duration-300 ">   
    <div class="self-start text-[20px] ">
        <p>
            {{$post->title}}
        </p>
    </div>
    <div class="font-bold self-start text-sm">
        <h1>By {{$post->user->name}}</h1>
    </div> 
    <div class="self-start text-[15px] text-left pt-4">
        <p>
            {{ Str::limit($post->body,100)}}
        </p>
    </div>
    <div class="mt-4 self-start">
        <a href="{{ route('postBlog.show', $post) }}" class="text-blue-500 hover:underline">Read More</a>
    </div>
</div>

