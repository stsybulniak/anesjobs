<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('styles')
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @show
    <title>@yield('title')</title>
</head>

<body style="font-family: Inter;"
    class="text-base text-black bg-white antialiased font-feature-default p-12 flex flex-col h-full">
    <header>
        <nav class="flex items-center relative">
            <div id="menu" class="absolute hidden p-6 rounded-lg bg-primary left-6 right-6 top-[4rem] z-100">
                <div
                    class="flex flex-col bg-primary items-center justify-center w-full space-y-6 font-bold text-white rounded-sm py-2">
                    <a href="#" class="w-full text-center menu-item">Search Jobs</a>
                    <a href="#" class="w-full text-center menu-item">Post Jobs</a>
                    <a href="/login" class="w-full pt-6 border-t border-gray-400 text-center menu-item">Login</a>
                    <a href="/sign-up" class="w-full py-3 text-center rounded-full bg-cyan menu-item">Sign Up</a>
                </div>
            </div>
            <div><img title="Logo" src="/images/logo.svg" /></div>
            <div class="hidden lg:flex justify-end items-center grow gap-6 text-primary font-bold">
                <a href="#" class="hover:text-primaryLight">Search Jobs</a>
                <a href="#" class="hover:text-primaryLight">Post Jobs</a>
                <button class="anes-btn">Login</button>
            </div>
            <div class="tham tham-e-squeeze tham-w-9 ml-auto lg:hidden">
                <div class="tham-box">
                    <div class="tham-inner bg-primary">
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="my-10 h-full">
