<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-200 h-full font-sans">
    <header>
        <nav class="p-5 flex justify-center sm:justify-between items-center shadow flex-wrap gap-4">
            <input type="text" placeholder="Search" class="w-48 p-2 rounded-lg border-0">
            <h1 class="font-bold text-3xl">the news <br> dispatch.</h1>
            <div class="">
                <a class="me-5" href="{{ route('login') }}">Sign In</a>
                <button id="btn-subscribe" class="bg-black px-4 py-2 text-white rounded-lg">Subscribe</button>
            </div>
        </nav>
        <div class="flex justify-center items-center gap-8 mt-10 text-lg flex-wrap">
            <a class="hover:border-b-4 border-black">LATEST</a>
            <a class="hover:border-b-4 border-black">WORLD</a>
            <a class="hover:border-b-4 border-black">SPORTS</a>
            <a class="hover:border-b-4 border-black">CULTURE</a>
            <a class="hover:border-b-4 border-black">WELLNESS</a>
            <a class="hover:border-b-4 border-black">ECONOMY</a>
        </div>
    </header>
