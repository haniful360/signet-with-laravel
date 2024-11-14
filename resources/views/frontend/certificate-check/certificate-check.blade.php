@extends('frontend.layouts.website')
@section('content')

<!-- ====== Banner Section Start -->
<div class="relative z-10 overflow-hidden pt-[120px] pb-[60px] md:pt-[130px] lg:pt-[160px] dark:bg-dark">
    <div
        class="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-stroke/0 via-stroke dark:via-dark-3 to-stroke/0">
    </div>
    <div class="container">
        <div class="flex flex-wrap items-center -mx-4">
            <div class="w-full px-4">
                <div class="text-center">
                    <h1
                        class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]">
                        Certificate Check</h1>
                    <p class="mb-5 text-base text-body-color dark:text-dark-6">
                        There are many variations of passages of Lorem Ipsum available.
                    </p>

                    <ul class="flex items-center justify-center gap-[10px]">
                        <li>
                            <a href="{{url('/')}}"
                                class="flex items-center gap-[10px] text-base font-medium text-dark dark:text-white">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="flex items-center gap-[10px] text-base font-medium text-body-color">
                                <span class="text-body-color dark:text-dark-6"> / </span>
                                Certificate Check
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====== Banner Section End -->


<section class='bg-[#F9FAFB] py-10 dark:bg-dark'>
    <div class="max-w-[1100px] mx-auto">
        <div class=' shadow-testimonial bg-[#FFFFFF] py-20 px-10 rounded dark:bg-dark'>
            <form action="">
                <div class='flex justify-between gap-3 lg:gap-0'>
                    <select
                        class="select border dark:bg-dark dark:text-white border-gray-300 w-full max-w-[500px] focus:outline-none focus:border-blue-500">
                        <option disabled selected>Select Certificate Type</option>
                        <option>Signet SA</option>
                        <option>Signet SA</option>
                        <option>Signet SA</option>
                        <option>Signet SA</option>
                        <option>Signet SA</option>
                    </select>
                    <div class="w-full max-w-[500px]  h-[46px] ">
                        <input type="text"
                            class="w-full dark:bg-dark py-2 px-4 h-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                            placeholder='Enter your certificate number'>
                    </div>
                </div>
                <button
                    class="btn block w-full mx-auto text-[#FFFFFF] hover:bg-[#3758F9] font-semibold mt-5 lg:mt-10 bg-[#3757f9dc]">Submit</button>
            </form>

        </div>
    </div>
</section>


@endsection