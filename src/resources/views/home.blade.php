@extends('layouts.layout')

@section('styles')
    @parent
    @vite(['resources/scss/home.scss'])
@endsection

@section('title', 'Home')

@section('content')
    <section class="flex flex-col items-center mt-12 mx-12">
        <div class="text-primary font-bold text-center leading-9 text-[30px]">AnesthesiaJobs.com is the premier anesthesia job search website</div>
        <div class="font-normal	text-primary mt-6">Find Your Ideal Anesthesia Position</div>
        <section class="flex flex-col xl:flex-row w-full rounded-[40px] mt-12 overflow-hidden anes-shadow-1">
            @foreach ($jobs as $job)
                <div class="home__job-section grow flex flex-col p-[40px] basis-0">
                    <div class="home__job-section-title font-bold text-primaryLight text-2xl">{{ $job->name }}</div>
                    <div class="home__job-section-jobs my-5 text-primary text-lg font-medium">{{ $job->cnt }} Jobs</div>
                    <div class="mt-auto">
                        <button class="anes-btn hover:bg-white hover:text-primaryLight">Browse Jobs</button>
                    </div>
                </div>
            @endforeach
        </section>
    </section>
@endsection
