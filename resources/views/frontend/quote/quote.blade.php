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
                            Get-Quote</h1>
                        <p class="mb-5 text-base text-body-color dark:text-dark-6">
                            There are many variations of passages of Lorem Ipsum available.
                        </p>

                        <ul class="flex items-center justify-center gap-[10px]">
                            <li>
                                <a href="{{ url('/') }}"
                                    class="flex items-center gap-[10px] text-base font-medium text-dark dark:text-white">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="flex items-center gap-[10px] text-base font-medium text-body-color">
                                    <span class="text-body-color dark:text-dark-6"> / </span>
                                    Get-Quote
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Banner Section End -->


    <!-- quote section start -->

    <section class="bg-[#F9FAFB] px-2 lg:px-0 py-2 lg:py-10 dark:bg-dark">
        <div class=" max-w-7xl mx-auto bg-[#FFFFFF] shadow-testimonial rounded-lg pb-8 md:pb-0 dark:bg-dark">
            <div class="lg:px-28 pt-[40px] dark:bg-dark">
                <div class="text-center mb-8 px-4 md:px-0 ">
                    <h2 class="text-[#374151] dark:text-white text-[45px] font-semibold">Apply for a Quotation</h2>
                </div>
                <form action="">
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 lg:gap-6 md:gap-0 mb-6 dark:text-[#637381]  ">
                        <div class="px-4 w-full mx-auto lg:px-0 max-w-xl ">
                            <label htmlFor="animated-input" class="font-semibold">Organization Name *</label>
                            <input type="text" id="animated-input"
                                class="w-full border border-gray-300 h-12 p-2 mt-4 rounded-md dark:bg-dark  transition-all duration-300 focus:outline-none focus:border-primary focus:ring focus:ring-blue-200"
                                name="name" placeholder="Organization Name" required />
                        </div>
                        <div class="px-4 mx-auto lg:px-0 w-full max-w-xl ">
                            <label htmlFor="animated-input" class="font-semibold ">Organization Address *</label>
                            <input type="text" id="animated-input"
                                class="w-full border border-gray-300 h-12 p-2 mt-4 rounded-md dark:bg-dark transition-all duration-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200"
                                name="" placeholder="Organization Address" required />
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 lg:gap-6 md:gap-0 mb-6 dark:text-[#637381]">
                        <div class="px-4 w-full mx-auto lg:px-0 max-w-xl ">
                            <label htmlFor="animated-input" class="font-semibold ">Contact Person *</label>
                            <input type="number" id="animated-input"
                                class="w-full border border-gray-300 h-12 p-2 mt-4 rounded-md dark:bg-dark transition-all duration-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200"
                                name="" placeholder="Contact Person" required />
                        </div>
                        <div class="px-4 mx-auto lg:px-0 w-full  max-w-xl ">
                            <label htmlFor="animated-input" class="font-semibold ">Email *</label>
                            <input type="email" id="animated-input"
                                class="w-full border border-gray-300 h-12 p-2 mt-4 rounded-md dark:bg-dark transition-all duration-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200"
                                name="" placeholder="Email" required />
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 lg:gap-6 md:gap-0 mb-6 dark:text-[#637381]">
                        <div class="px-4 w-full mx-auto lg:px-0 max-w-xl ">
                            <label htmlFor="animated-input" class="font-semibold ">Phone Number *</label>
                            <input type="text" id="animated-input"
                                class="w-full border border-gray-300 h-12 p-2 mt-4 rounded-md dark:bg-dark  transition-all duration-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200"
                                name="" placeholder="Phone Number" required />
                        </div>
                        <div class="px-4 w-full mx-auto lg:px-0 max-w-xl ">
                            <label htmlFor="animated-input" class="font-semibold ">Comment</label>
                            <textarea name="" id="" cols="30" rows="5"
                                class="w-full border border-gray-300  p-2 mt-4 rounded-md dark:bg-dark  transition-all duration-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200">
                            </textarea>
                        </div>


                    </div>


                    <!-- submit button -->

                    <div class="px-4 mx-auto lg:px-0 w-full  mt-6 dark:bg-dark">
                        <button
                            class="w-full h-12 p-2 mt-4 bg-[#3758F9] border-0 text-xl text-[#FFFFFF] rounded-md  transition-all duration-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200">Submit
                            Quote</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- quote section end -->
@endsection
