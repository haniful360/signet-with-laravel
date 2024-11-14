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
                            Verifications</h1>
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
                                    Verifications
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Banner Section End -->

    <!-- ====== verifications   Section Start -->
    <section class="pt-20 pb-10  lg:pb-20 dark:bg-dark">
        <div class="max-w-[1280px] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <div class="w-full  p-4 rounded shadow-testimonial ">
                    <div class="mb-10 wow fadeInUp group" data-wow-delay=".1s">
                        <div class="mb-8 overflow-hidden rounded-[5px]">
                            <a href="blog-details.html" class="block">
                                <img src="https://gscsintl.com/images/services_category/services_category_782ba16099b39350563750b9a72463ec.png"
                                    alt="image"
                                    class="w-full h-[300px] transition group-hover:rotate-6 group-hover:scale-125" />
                            </a>
                        </div>
                        <div>

                            <h3>
                                <a href="blog-details.html"
                                    class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                    SLCP Verification
                                </a>
                            </h3>
                            <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                The Social and Labor Convergence Program (SLCP) aims to bring together unique perspectives
                                to create an efficient, scalable, and sustainable solution for social audits. Together, we
                                are working to implement the first industry-wide framework to assess social and labor
                                conditions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full  p-4 rounded shadow-testimonial ">
                    <div class="mb-10 wow fadeInUp group" data-wow-delay=".1s">
                        <div class="mb-8 overflow-hidden rounded-[5px]">
                            <a href="blog-details.html" class="block">
                                <img src="https://gscsintl.com/images/services_category/infography/services_category_infography_97935c7259ce6c05d93ffe5d58dc6800.png"
                                    alt="image"
                                    class="w-full h-[300px] transition group-hover:rotate-6 group-hover:scale-125" />
                            </a>
                        </div>
                        <div>

                            <h3>
                                <a href="blog-details.html"
                                    class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                    SAC Higg FEM Verification
                                </a>
                            </h3>
                            <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                SAC BRM Verifier Body- The Higg BRM creates an international benchmark for measuring and
                                discussing sustainability performance among retailers and fashion brands.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full  p-4 rounded shadow-testimonial ">
                    <div class="mb-10 wow fadeInUp group" data-wow-delay=".1s">
                        <div class="mb-8 overflow-hidden rounded-[5px]">
                            <a href="blog-details.html" class="block">
                                <img src="https://gscsintl.com/images/services_category/services_category_e08d466256b911074d318a08075dd518.png"
                                    alt="image"
                                    class="w-full h-[300px] transition group-hover:rotate-6 group-hover:scale-125" />
                            </a>
                        </div>
                        <div>

                            <h3>
                                <a href="blog-details.html"
                                    class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                    ZDHC InCheck Level 1 Verification
                                </a>
                            </h3>
                            <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                GSCS is now ZDHC InCheck Level 1 Verification Body.
                                ZDHC InCheck Verification Level 1 helps to create a traceable chemical inventory in order to
                                lessen the impact of harsh & hazardous chemicals on environment.
                            </p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>
    <!-- ====== verifications Section End -->
@endsection
