<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Avalon Journal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAABqAAAA2gAAAOAAAAB9AAAAJAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAAAAG8AAADeAAAA/wAAAPcAAACdAAAAWAAAAC4AAAALAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgAAAFAAAADQAAAA/wAAAP8AAAD/AAAA/gAAANgAAACMAAAAIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwAAAHAAAAD2AAAA/wAAAP8AAAD/AAAA/wAAAPcAAABvAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAARwAAAPUAAAD/AAAA/wAAAP8AAAD/AAAA/wAAAHoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHAAAAlAAAAPwAAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD7AAAAIQAAAAAAAAAAAAAAAAAAAAAAAAAJAAAAuwAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAHsAAAAAAAAAAAAAAAAAAAABAAAAqgAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAADfAAAA6gAAAP8AAAD2AAAASAAAAAAAAAAAAAAAbQAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAAqAAAADsAAADbAAAApQAAAAAAAAAAAAAAHQAAAPQAAAD/AAAA/QAAANgAAACWAAAA8gAAAP8AAAD/AAAA/wAAAKoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHcAAAClAAAAUAAAAA4AAAAAAAAAHgAAAP4AAAD/AAAA/wAAAP8AAACSAAAAAAAAAAAAAAAAAAAAAAAAAAMAAAAQAAAAAAAAAAAAAAAAAAAAAAAAADYAAAD/AAAA/wAAAP8AAAD8AAAAMQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/AAAA/wAAAP8AAAD/AAAAcgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEwAAAP8AAAD/AAAAeAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACuAAAApgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAcAAAADQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAn/8AAMP/AADwHwAA/A8AAP4HAAD4AwAA8AMAAOABAADgCQAAwA8AAN4PAAD+HwAA/j8AAP5/AAD+fwAA//8AAA==" rel="icon" type="image/x-icon">
</head>
<body class="bg-black/50">
    <div class="px-6">
        <nav class="flex justify-between items-center border-b-2 border-white/50 text-[20px] py-4">
            <div>
                @auth
                    <a href="/">
                    <img src="" alt="Avalon Journal" class="font-oswald font-bold hover:text-yellow-400 transition-colors duration-300 mr-39">
                    </a>
                @endauth
                @guest
                    <a href="/">
                        <img src="" alt="Avalon Journal" class="font-oswald font-bold hover:text-yellow-400 transition-colors duration-300">
                    </a>
                @endguest
            </div>
            <div class="space-x-6 font-bold">
                <a href="/" class="hover:bg-black/30 hover:text-yellow-400 transition-colors duration-300 rounded p-1">Home</a>
                <a href="/blogs" class="hover:bg-black/30 hover:text-yellow-400 transition-colors duration-300 rounded p-1">Blogs</a>
                <a href="/users" class="hover:bg-black/30 hover:text-yellow-400 transition-colors duration-300 rounded p-1">Authors</a>
                <a href="/about" class="hover:bg-black/30 hover:text-yellow-400 transition-colors duration-300 rounded p-1">About</a>
            </div>
            <div class="font-bold flex items-center space-x-2 text-xs">
                @guest
                    <a href="/login" class="bg-black p-1 rounded-md text-white hover:bg-black/30 hover:text-yellow-400 transition-colors duration-300">Log In</a>
                    <a href="/register" class="bg-black p-1 rounded-md text-white hover:bg-black/30 hover:text-yellow-400 transition-colors duration-300">Register</a>
                @endguest
                @auth
                    <span class="text-yellow-400">Hello, {{Auth::user()->name}}</span>
                    <a href="{{ url('/postBlog') }}"  class="bg-black p-1 rounded-md text-white hover:bg-black/30 hover:text-yellow-400 transition-colors duration-300">Post A Blog</a>
                    <a href="{{ route('myBlogs') }}" class="bg-black p-1 rounded-md text-white hover:bg-black/30 hover:text-yellow-400 transition-colors duration-300 ">My Blogs</a>
                    <form action="{{ route('auth.destroy') }}" method="POST">
                        @csrf
                        <button class="bg-black p-1 rounded-md text-white hover:bg-black/30 hover:text-yellow-400 transition-colors duration-300" type="submit">
                        Log Out
                        </button>
                    </form>
                @endauth
            </div>
        </nav>
        <main class="py-6 font-oswald mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>