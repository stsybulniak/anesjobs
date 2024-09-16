@extends('layouts.layout')

@section('styles')
    @parent
    @vite(['resources/scss/home.scss'])
@endsection

@section('title', 'Search')

@section('content')
    <section class="flex flex-col items-center mt-12 mx-12">
        <div class="text-primary font-bold text-center leading-9 text-[30px]">Save Your Favorite Results by Creating a Profile</div>
        <div class="font-normal	text-primary mt-6">Create Your Profile Here.</div>
        <div class="text-primary font-bold text-sm flex justify-center items-center self-start mt-10">
            <div class="flex justify-center items-center mr-5"><span class="mr-1">Filter by State</span><img src="/images/vector.svg" /></div>
            <div class="flex justify-center items-center mr-5"><span class="mr-1">Filter by State</span><img src="/images/vector.svg" /></div>
            <div class="flex justify-center items-center"><span class="mr-1">Filter by State</span><img src="/images/vector.svg" /></div>
        </div>
        <section class="flex flex-col w-full !gap-7 mt-12">
            @foreach ($jobs as $job)
                <div class="home__job-section grow flex flex-col md:flex-row justify-between items-center p-[40px] basis-0 rounded-[40px] anes-shadow-1">
                    <div>
                        <div class="home__job-section-title font-bold text-primary text-2xl">{{ $job->name }}</div>
                        <div class="home__job-section-jobs my-5 text-primary text-lg font-medium">{{ $job->cnt }} Jobs</div>
                    </div>
                    <div class="mt-auto md:mt-0">
                        <button class="anes-btn hover:bg-white hover:text-primaryLight">Browse Jobs</button>
                    </div>
                </div>
            @endforeach
        </section>
    </section>
@endsection
