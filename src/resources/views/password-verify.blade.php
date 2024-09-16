@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <section class="flex text-primary flex-col mx-auto items-center p-7 pt-0 mt-12 bg-white anes-shadow-1 md:w-[37.5rem] gap-14 rounded-2xl">
        <div class="mt-14 text-3xl font-bold text-center">Verify Your Email Address</div>
        <div class="text-base text-center">We emailed you a four digit code to my@mail.com. Enter the codebelow to confirm your email address</div>
        <form class="w-full p-10">
            <div class="mb-6 flex justify-between shrink-0">
                <input type="number" id="one" class="anes-input !size-16 sm:!size-20 md:!size-24 !text-3xl rounded-lg" required />
                <input type="number" id="two" class="anes-input !size-16 sm:!size-20 md:!size-24 !text-3xl rounded-lg" required />
                <input type="number" id="three" class="anes-input !size-16 sm:!size-20 md:!size-24 !text-3xl rounded-lg" required />
                <input type="number" id="four" class="anes-input !size-16 sm:!size-20 md:!size-24 !text-3xl rounded-lg" required />
            </div>
            <div class="flex justify-center"><button class="text-black text-xs my-5 content-center underline" type="button">Resend Code</button></div>
            <button class="anes-btn-primary w-full mb-6">Submit</button>
            <div class="text-xs text-black text-center text-textGrey mb-2">Already have an account? <a href="/login">Sign In</a></div>
        </form>
    </section>
@endsection
