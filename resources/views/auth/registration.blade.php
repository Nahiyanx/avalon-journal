<x-layout>
    <form action="/register" method="POST">
        @csrf
        <div class="flex flex-col items-center mt-20 pl-15">
            <div class="bg-white/20 px-30 py-10 rounded-lg flex flex-col text-black">
                <input class=" bg-white/40 px-4 py-2 rounded-lg text-left" type="text" name="name" placeholder="Username">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                <input class=" bg-white/40 px-4 py-2 rounded-lg text-left mt-5" type="text" name="email" placeholder="E-mail"> 
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                <input class="bg-white/40 px-4 py-2 rounded-lg text-left mt-5" type="password" name="password" placeholder="Password">
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                <input class="bg-white/40 px-4 py-2 rounded-lg text-left mt-5" type="password" name="password_confirmation" placeholder="Confirm Password">
                
                <button class="mt-5 rounded-lg px-2 py-1 bg-white/40 hover:bg-black/30 hover:text-yellow-400 transition-colors duration-300 hover:cursor-pointer" type="submit">Register</button>
            </div>
        </div>
    </form>
</x-layout>