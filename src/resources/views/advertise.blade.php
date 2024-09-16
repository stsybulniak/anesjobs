@extends('layouts.layout')

{{-- @section('styles')
    @parent
    @vite(['resources/scss/advertise.scss'])
@endsection --}}

@section('title', 'Advertise')

@section('content')
    <section class="flex flex-col items-center justify-center mt-8 mx-12 text-primary max-w-5xl mx-auto">
        <div class="font-normal mt-9 text-[30px] leading-10">Advertise With Us</div>
        <div class=" font-bold text-center leading-9 text-[30px]">The Numbers Don't Lie.</div>
        <section class="flex flex-col md:flex-row w-full mt-12 justify-between gap-6 mb-12">
            @foreach ($features as $feature)
                <div
                    class="advertice__feature-section flex flex-col gap-2 p-5 rounded-2xl bg-white items-center justify-center">
                    <img class="size-10" src="{{ $feature->img }}" />
                    <div class="text-3xl text-black">{{ $feature->cnt }}<span class="text-primary">+</span></div>
                    <div class="text-sm text-black text-center">{{ $feature->name }}</div>
                </div>
            @endforeach
        </section>
        <div class=" font-bold text-center leading-9 text-[30px] mt-10">Frequently Asked Questions</div>
        <section class="w-full mt-8 mb-12">
            <div id="accordionExample" class="flex flex-col gap-5">
                @foreach ($faqs as $faq)
                    <div class="rounded-lg bg-white anes-shadow-1 ">
                        <h2 class="mb-0" id="headingOne{{ $loop->index }}">
                            <button
                                class="group relative flex w-full text-xl font-semibold items-center rounded-lg border-0 bg-white px-5 py-4 text-left text-primary transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none  [&:not([data-twe-collapse-collapsed])]:bg-white [&:not([data-twe-collapse-collapsed])]:text-primary"
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
                                {{ $faq->text }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <div class="font-normal mt-10 text-[30px] leading-10">Trusted By</div>
        <div class="font-bold text-center leading-9 text-[30px]">Leading Hospitals and Healthcare Clinics</div>
        <section class="flex gap-10 mt-10">
            @foreach($trusted as $item)
                <div class="flex flex-col border border-borderPurp items-center gap-4 p-5 rounded-3xl anes-shadow-2">
                    <img class="size-10" src='/images/quote-up.svg' />
                    <div class="text-center text-2xl text-black font-medium">"{!! nl2br(e($item->text)) !!}"</div>
                    <span class="w-3/4 border-b border-colorPurple"></span>
                    <div class="flex justify-center	items-center">
                        <img src='{{ $item->img }}' />
                        <div class="flex flex-col ml-2 text-black">
                            <span class="text-base font-medium">{{ $item->name }}</span>
                            <span class="font-normal text-sm">Anesthesiologist</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    </section>
@endsection
