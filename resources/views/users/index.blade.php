<x-layout>
    <div class="flex flex-col items-center mt-10">
        <h1 class="text-2xl font-bold mb-4">
            Authors
        </h1>
        <div class="bg-black/20 px-30 py-10 rounded-lg">
            <ul class="list-disc">
                @foreach($users as $user)
                    <li class="mb-2 text-2xl">
                        <a href="{{ route('profile.show', $user) }}" class="text-black hover:underline hover:text-yellow-400">
                            {{ $user->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-layout>