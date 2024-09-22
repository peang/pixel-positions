<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-black text-white pb-20" font-hanken-grotesk>

    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div> 
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="space-x-10 font-bold">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salary</a>
                <a href="">Companies</a>
            </div>

            @auth
                <div class="space-x-6 flex">
                    <a href="/jobs/create">Post a Job</a>

                    <form action="/logout" method="POST">
                        @csrf
                        @method('DELETE')

                        <button>Logout</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-10 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Login</a>
                </div>
            @endguest
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
