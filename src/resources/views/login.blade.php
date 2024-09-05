@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <section class="flex flex-col mx-auto items-center mt-12 bg-white anes-shadow-1 md:w-[37.5rem] gap-14 rounded-2xl">
        <div class="mt-14"><img src="/images/logo-full.svg" /></div>
        <form class="w-full p-10">
            <div class="mb-6">
                <label for="email" class="anes-label">Email</label>
                <input type="text" id="email" class="anes-input" placeholder="some@mail.com" required />
            </div>
            <div class="mb-6">
                <label for="pwd" class="anes-label">Password</label>
                <input type="password" id="pwd" class="anes-input" placeholder="********" required />
            </div>
            <button class="anes-btn-primary w-full mb-6">Sign In</button>
            <div class="text-xs text-center text-textGrey mb-2">Dont't have an account? <a href="/sign-up">Sign Up</a></div>
            <div class="text-xs text-center text-textGrey">Forgot password? <a href="/fogot-password">Reset</a></div>
        </form>
    </section>
@endsection
