@extends("layouts.layout")

@section("title", "Home")

@section("content")
<section class="flex flex-col items-center mt-12 mx-12">
    <div class="text-[#21478A] font-bold text-[30px]">AnesthesiaJobs.com is the premier anesthesia job search website</div>
    <div class="font-normal	text-[#21478A] mt-6">Find Your Ideal Anesthesia Position</div>
    <section class="flex w-full rounded-[40px] mt-12" style="box-shadow: 0px 0px 20px 0px rgba(1, 16, 39, 0.1);">
        <div class="job-section grow flex flex-col p-[40px] basis-0">
            <div class="job-section-title font-bold text-[#4474C8] text-2xl">Anesthesiologist Jobs</div>
            <div class="job-section-jobs mt-5 text-[#21478A] text-lg font-medium">500+ Jobs</div>
            <div class="mt-8">
                <button class="border-solid border border-[#4474C8] text-[#4474C8] font-bold py-4 px-8 text-base bg-white rounded-full">Browse Jobs</button>
            </div>
        </div>
        <div class="job-section grow flex flex-col p-[40px] basis-0">
            <div class="job-section-title font-bold text-[#4474C8] text-2xl">CRNA Jobs</div>
            <div class="job-section-jobs mt-5 text-[#21478A] text-lg font-medium">3,100 Jobs</div>
            <div class="mt-8">
                <button class="border-solid border border-[#4474C8] text-[#4474C8] font-bold py-4 px-8 text-base bg-white rounded-full">Browse Jobs</button>
            </div>
        </div>
        <div class="job-section grow flex flex-col p-[40px] basis-0">
            <div class="job-section-title font-bold text-[#4474C8] text-2xl">CAA Jobs</div>
            <div class="job-section-jobs mt-5 text-[#21478A] text-lg font-medium">234 Jobs</div>
            <div class="mt-8">
                <button class="border-solid border border-[#4474C8] text-[#4474C8] font-bold py-4 px-8 text-base bg-white rounded-full">Browse Jobs</button>
            </div>
        </div>
    </section>
</section>
@endsection