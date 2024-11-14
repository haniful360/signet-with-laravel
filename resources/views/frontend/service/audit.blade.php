@extends('frontend.layouts.website');
@section('content')
    ;

    <!-- ====== Banner Section Start -->
    <div class="relative z-10 overflow-hidden pt-[120px] pb-[60px] md:pt-[130px] lg:pt-[120px] dark:bg-dark">
        <div
            class="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-stroke/0 via-stroke dark:via-dark-3 to-stroke/0">
        </div>
        <div class="container">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4">
                    <div class="text-center">
                        <h1
                            class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]">
                            Welcome to Audit</h1>
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
                                    Audit
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Banner Section End -->

    <!-- ====== audit Section Start -->
    <section class="pt-20 pb-10  lg:pb-20 dark:bg-dark">
        <div class="max-w-[1280px] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <div class="w-full  p-4 rounded shadow-testimonial ">
                    <div class="mb-10 wow fadeInUp group" data-wow-delay=".1s">
                        <div class="mb-8 overflow-hidden rounded-[5px]">
                            <a href="blog-details.html" class="block">
                                <img src="https://gscsintl.com/images/services_category/infography/services_category_infography_1ea3090c94d500079141ba856c34bb60.jpg"
                                    alt="image"
                                    class="w-full h-[300px] transition group-hover:rotate-6 group-hover:scale-125" />
                            </a>
                        </div>
                        <div>

                            <h3>
                                <a href="blog-details.html"
                                    class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                    SMETA (Sedex Members Ethical Trade)
                                </a>
                            </h3>
                            <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                The auditor will review prior audits in your area and professional literature. The auditor
                                will also research applicable policies and statutes and prepare a basic audit program to
                                follow.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full  p-4 rounded shadow-testimonial ">
                    <div class="mb-10 wow fadeInUp group" data-wow-delay=".1s">
                        <div class="mb-8 overflow-hidden rounded-[5px]">
                            <a href="blog-details.html" class="block">
                                <img src="https://gscsintl.com/images/services_category/infography/services_category_infography_988da316ec060a2cd2a74dd05dd25cc7.png"
                                    alt="image"
                                    class="w-full h-[300px] transition group-hover:rotate-6 group-hover:scale-125" />
                            </a>
                        </div>
                        <div>

                            <h3>
                                <a href="blog-details.html"
                                    class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                    GSCS Genetic Code of Ethics Audit
                                </a>
                            </h3>
                            <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                This meeting will include management, union representative or workers representatives and
                                any administrative personnel involved in the audit. The audit's purpose and objective will
                                be discussed as well as the audit program. The audit program may be adjusted based on
                                information obtained during this meetin
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full  p-4 rounded shadow-testimonial ">
                    <div class="mb-10 wow fadeInUp group" data-wow-delay=".1s">
                        <div class="mb-8 overflow-hidden rounded-[5px]">
                            <a href="blog-details.html" class="block">
                                <img src="https://gscsintl.com/images/services_category/services_category_4bf6b116d92c22b196d31631728437fc.png"
                                    alt="image"
                                    class="w-full h-[300px] transition group-hover:rotate-6 group-hover:scale-125" />
                            </a>
                        </div>
                        <div>

                            <h3>
                                <a href="blog-details.html"
                                    class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                    Social & Labor Convergence Program (SLCP)
                                </a>
                            </h3>
                            <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                This step includes the full facility visit to be performed as well as interviews with
                                appropriate department personnel.The objective of SLCP is to improve social and labor
                                conditions by reducing the number of social and labor audits. This eliminates audits
                                fatigue, enables data comparison, and frees up resources for improvement programs.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ====== audit Section End -->
@endsection
