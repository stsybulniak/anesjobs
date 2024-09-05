@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <section class="flex flex-col mx-auto items-center mt-12 bg-white anes-shadow-1 md:w-[37.5rem] gap-14 rounded-2xl">
        <div class="mt-14"><img src="/images/logo-full.svg" /></div>
        <form class="w-full p-10">
            <div class="mb-6">
                <label for="name" class="anes-label">Full Name</label>
                <input type="text" id="name" class="anes-input" placeholder="Full Name" required />
            </div>
            <div class="mb-6">
                <label for="email" class="anes-label">Email</label>
                <input type="text" id="email" class="anes-input" placeholder="some@mail.com" required />
            </div>
            <div class="mb-6">
                <label for="phone" class="anes-label">Contact Number</label>
                <input type="text" id="phone" aria-describedby="helper-text-explanation" class="anes-input"
                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" required />
            </div>
             <div class="mb-6">
                <label for="password" class="anes-label">Password</label>
                <input type="password" id="password" class="anes-input" placeholder="********" required />
            </div>
            <button class="anes-btn-primary w-full mb-6">Sign Up</button>
            <div class="flex items-center text-sm gap-2 mb-6">
                <span class="text-xs text-grey">I am a</span>
                <div class="flex items-center gap-1">
                    <input id="poster" type="checkbox" value="" class="w-5 h-5 text-primary bg-white border border-grey rounded-md focus:ring-primary cursor-pointer" />
                    <label for="poster" class="anes-label !mb-0 !text-xs !text-grey">Job Poster</label>
                </div>
                <div class="flex items-center gap-1">
                    <input id="seeker" type="checkbox" value="" class="w-5 h-5 text-primary bg-white border-grey rounded-md focus:ring-primary cursor-pointer" />
                    <label for="seeker" class="anes-label !mb-0 !text-xs !text-grey">Job Seeker</label>
                </div>
            </div>
            <div class="flex items-center gap-1 mb-6">
                    <input id="privacy" type="checkbox" value="" class="w-5 h-5 text-primary bg-white border-grey rounded-md focus:ring-primary cursor-pointer" />
                    <label for="privacy" class="anes-label !mb-0 !text-xs !text-grey">I agree to the Terms and Privacy Policy</label>
                </div>
            <div class="text-xs text-center text-grey mb-2">Already have an account? <a href="/login">Sign In</a></div>
        </form>
    </section>
@endsection
