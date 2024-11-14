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
                            Certifications</h1>
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
                                    Certifications
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Banner Section End -->

    <!-- ====== certifications  Section Start -->
    <section class="pt-20 pb-10  lg:pb-20 dark:bg-dark">
        <div class="max-w-[1280px] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <div class="w-full  p-4 rounded shadow-testimonial ">
                    <div class="mb-10 wow fadeInUp group" data-wow-delay=".1s">
                        <div class="mb-8 overflow-hidden rounded-[5px]">
                            <a href="blog-details.html" class="block">
                                <img src="https://gscsintl.com/images/services_category/services_category_c991b6375e2ca25438007ffee41f41c3.png"
                                    alt="image"
                                    class="w-full h-[300px] transition group-hover:rotate-6 group-hover:scale-125" />
                            </a>
                        </div>
                        <div>

                            <h3>
                                <a href="blog-details.html"
                                    class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                    Global Recycled Standard (GRS)
                                </a>
                            </h3>
                            <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                The Global Recycled Standard (GRS) is an international, voluntary, full-product standard
                                that sets requirements for third-party certification of Recycled Content, Chain of Custody,
                                Social and Environmental Practices, and Chemical Restrictions.


                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full  p-4 rounded shadow-testimonial ">
                    <div class="mb-10 wow fadeInUp group" data-wow-delay=".1s">
                        <div class="mb-8 overflow-hidden rounded-[5px]">
                            <a href="blog-details.html" class="block">
                                <img src="https://gscsintl.com/images/services_category/services_category_1e627329dc7c1df5222494cd34d561e1.png"
                                    alt="image"
                                    class="w-full h-[300px] transition group-hover:rotate-6 group-hover:scale-125" />
                            </a>
                        </div>
                        <div>

                            <h3>
                                <a href="blog-details.html"
                                    class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                    Recycled Claim Standard (RCS)
                                </a>
                            </h3>
                            <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                The Recycled Claim Standard (RCS) is an international, voluntary standard that sets
                                requirements for third-party certification of Recycled input and chain of custody. The goal
                                of the RCS is to increase the use of Recycled materials.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full  p-4 rounded shadow-testimonial ">
                    <div class="mb-10 wow fadeInUp group" data-wow-delay=".1s">
                        <div class="mb-8 overflow-hidden rounded-[5px]">
                            <a href="blog-details.html" class="block">
                                <img src="https://gscsintl.com/images/services_category/services_category_e2877396f32cd8d3cd0c5552b971b15f.png"
                                    alt="image"
                                    class="w-full h-[300px] transition group-hover:rotate-6 group-hover:scale-125" />
                            </a>
                        </div>
                        <div>

                            <h3>
                                <a href="blog-details.html"
                                    class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                    Responsible Wool Standard (RWS)
                                </a>
                            </h3>
                            <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                The Responsible Wool Standard (RWS) is an international, voluntary standard that addresses
                                animal welfare in sheep farms and the "Chain of Custody" of wool from certified farms to the
                                final product.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full  p-4 rounded shadow-testimonial ">
                    <div class="mb-10 wow fadeInUp group" data-wow-delay=".1s">
                        <div class="mb-8 overflow-hidden rounded-[5px]">
                            <a href="blog-details.html" class="block">
                                <img src="https://gscsintl.com/images/services_category/services_category_0e77acdd256a597bd9c48c7e083ee462.png"
                                    alt="image"
                                    class="w-full h-[300px] transition group-hover:rotate-6 group-hover:scale-125" />
                            </a>
                        </div>
                        <div>

                            <h3>
                                <a href="blog-details.html"
                                    class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                    Responsible Down Standard (RDS)
                                </a>
                            </h3>
                            <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                The Responsible Down Standard (RDS) is an international, voluntary standard that addresses
                                animal welfare in the duck and geese supply chain and the "Chain of Custody" of down and
                                feather material from certified farms to the final product.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full  p-4 rounded shadow-testimonial ">
                    <div class="mb-10 wow fadeInUp group" data-wow-delay=".1s">
                        <div class="mb-8 overflow-hidden rounded-[5px]">
                            <a href="blog-details.html" class="block">
                                <img src="https://gscsintl.com/images/services_category/services_category_fa37acd55c46824396f90594f0746050.png"
                                    alt="image"
                                    class="w-full h-[300px] transition group-hover:rotate-6 group-hover:scale-125" />
                            </a>
                        </div>
                        <div>

                            <h3>
                                <a href="blog-details.html"
                                    class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                    Organic Content Standard (OCS)
                                </a>
                            </h3>
                            <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                The Organic Content Standard (OCS) is an international, voluntary standard that provides
                                "Chain of Custody verification" for materials originating on a farm certified to recognized
                                national organic standards. The standard is used to verify organically grown raw materials
                                from the farm to the final product.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full  p-4 rounded shadow-testimonial ">
                    <div class="mb-10 wow fadeInUp group" data-wow-delay=".1s">
                        <div class="mb-8 overflow-hidden rounded-[5px]">
                            <a href="blog-details.html" class="block">
                                <img src="https://gscsintl.com/images/services_category/services_category_5bfe5b880bedf001a8faedd11a64c8ea.png"
                                    alt="image"
                                    class="w-full h-[300px] transition group-hover:rotate-6 group-hover:scale-125" />
                            </a>
                        </div>
                        <div>

                            <h3>
                                <a href="blog-details.html"
                                    class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                    The Responsible Alpaca Standard (RAS)
                                </a>
                            </h3>
                            <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                The Responsible Alpaca Standard (RAS) is a voluntary standard that requires all sites, from
                                alpaca farms through to the seller in the final business-to-business transaction, to be
                                certified. RAS farmers and ranchers must meet "Animal Welfare,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full  p-4 rounded shadow-testimonial ">
                    <div class="mb-10 wow fadeInUp group" data-wow-delay=".1s">
                        <div class="mb-8 overflow-hidden rounded-[5px]">
                            <a href="blog-details.html" class="block">
                                <img src="https://gscsintl.com/images/services_category/services_category_2b5381cf23e0a7981f98a0b431dbda3c.png"
                                    alt="image"
                                    class="w-full h-[300px] transition group-hover:rotate-6 group-hover:scale-125" />
                            </a>
                        </div>
                        <div>

                            <h3>
                                <a href="blog-details.html"
                                    class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                    The Responsible Mohair Standard (RMS)
                                </a>
                            </h3>
                            <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                The Responsible Mohair Standard (RMS) is a voluntary standard that requires all sites, from
                                farms through to the seller in the final business-to-business transaction, to be certified.
                                RMS farmers and ranchers must meet "Animal Welfare, Land Management, and Social
                                Requirements".
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full  p-4 rounded shadow-testimonial ">
                    <div class="mb-10 wow fadeInUp group" data-wow-delay=".1s">
                        <div class="mb-8 overflow-hidden rounded-[5px]">
                            <a href="blog-details.html" class="block">
                                <img src="https://gscsintl.com/images/services_category/services_category_b7963c6817adc091f6380a24f53276fc.jpg"
                                    alt="image"
                                    class="w-full h-[300px] transition group-hover:rotate-6 group-hover:scale-125" />
                            </a>
                        </div>
                        <div>

                            <h3>
                                <a href="blog-details.html"
                                    class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                    Global Organic Textile Standard (GOTS)
                                </a>
                            </h3>
                            <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                The Global Organic Textile Standard (GOTS) is an international, transparent, and voluntary
                                standard that addresses the four distinctive and unique features of textile production,
                                Organic Fibres, Ecological and Social Criteria, All Processing Stage, and Third-Party
                                Certification.
                            </p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>
    <!-- ====== Certifications Section End -->
@endsection
