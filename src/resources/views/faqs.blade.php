@extends('layouts.layout')

{{-- @section('styles')
    @parent
    @vite(['resources/scss/advertise.scss'])
@endsection --}}

@section('title', 'FAQS')

@section('content')
    <img src="/images/faqs-img.svg" class="mx-auto" />
    <section class="flex flex-col items-center justify-center text-primary max-w-5xl mx-auto">
        <div class=" font-bold text-center leading-9 text-[30px] mt-10">Frequently Asked Questions</div>
        <section class="w-full mt-8 mb-12">
            <div class="font-bold text-2xl my-5 ml-7 self-start">Job Seekers:</div>

            <div id="accordionExample" class="flex flex-col gap-5 mx-7">
                @foreach ($faqs as $faq)
                    <div class="rounded-lg bg-white anes-shadow-1 ">
                        <h2 class="mb-0" id="headingOne{{ $loop->index }}">
                            <button
                                class="group relative  flex w-full text-xl font-semibold items-center rounded-lg border-0 bg-white px-5 py-4 text-left text-primary transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none  [&:not([data-twe-collapse-collapsed])]:bg-white [&:not([data-twe-collapse-collapsed])]:text-primary"
                                type="button" data-twe-collapse-init data-twe-collapse-collapsed data-twe-target="#collapseOne{{ $loop->index }}" aria-expanded="false"
                                aria-controls="collapseOne{{ $loop->index }}">
                                {{ $faq->name }}
                                <span
                                    class="-me-1 ms-auto h-5 w-5 shrink-0 rotate-[-180deg] transition-transform duration-200 ease-in-out group-data-[twe-collapse-collapsed]:me-0 group-data-[twe-collapse-collapsed]:rotate-0 motion-reduce:transition-none [&>svg]:h-6 [&>svg]:w-6">
                                    <img src="/images/arrow-circle-down.svg" />
                                </span>
                            </button>
                        </h2>
                        <div id="collapseOne{{ $loop->index }}" class="!visible hidden" data-twe-collapse-item
                            aria-labelledby="headingOne{{ $loop->index }}" data-twe-parent="#accordionExample">
                            <div class="px-5 py-4 text-greyText text-base">
                                {!! nl2br(e($faq->text)) !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="w-full mt-8 mb-12">
            <div class="font-bold text-2xl my-5 ml-7 self-start">Job Poster:</div>

            <div id="accordionExamplePost" class="flex flex-col gap-5 mx-7">
                @foreach ($posters as $faq)
                    <div class="rounded-lg bg-white anes-shadow-1 ">
                        <h2 class="mb-0" id="headingOnePost{{ $loop->index }}">
                            <button
                                class="group relative  flex w-full text-xl font-semibold items-center rounded-lg border-0 bg-white px-5 py-4 text-left text-primary transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none  [&:not([data-twe-collapse-collapsed])]:bg-white [&:not([data-twe-collapse-collapsed])]:text-primary"
                                type="button" data-twe-collapse-init data-twe-collapse-collapsed data-twe-target="#collapseOnePost{{ $loop->index }}" aria-expanded="false"
                                aria-controls="collapseOnePost{{ $loop->index }}">
                                {{ $faq->name }}
                                <span
                                    class="-me-1 ms-auto h-5 w-5 shrink-0 rotate-[-180deg] transition-transform duration-200 ease-in-out group-data-[twe-collapse-collapsed]:me-0 group-data-[twe-collapse-collapsed]:rotate-0 motion-reduce:transition-none [&>svg]:h-6 [&>svg]:w-6">
                                    <img src="/images/arrow-circle-down.svg" />
                                </span>
                            </button>
                        </h2>
                        <div id="collapseOnePost{{ $loop->index }}" class="!visible hidden" data-twe-collapse-item
                            aria-labelledby="headingOnePost{{ $loop->index }}" data-twe-parent="#accordionExamplePost">
                            <div class="px-5 py-4 text-greyText text-base">
                                {!! nl2br(e($faq->text)) !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </section>
@endsection
