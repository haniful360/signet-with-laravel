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
                            Trainings</h1>
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
                                    Trainings
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Banner Section End -->

    <!-- ====== Trainings Section Start -->

    <section class="pt-20 pb-12  lg:pb-[90px] dark:bg-dark bg-[#F9FAFB]">
        <div class="max-w-[1320px] mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-12 max-w-[510px] text-center ">
                        <h2
                            class="text-dark dark:text-white mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]">
                            Our Trainings
                        </h2>
                        <p class="text-body-color text-base dark:text-dark-6">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <div
                    class="dark:bg-dark dark:text-dark-6 w-full bg-[#FFFFFF] shadow-testimonial rounded-lg border-b-[3px] border-[#01549F]">
                    <div class="training ">
                        <div class="training-image">
                            <img class=''
                                src="https://gscsintl.com/images/services_category/services_category_78b92df9158b0c57d12839ae01e1ad94.png"
                                alt="Service Image">
                        </div>
                        <div class="training-description">
                            <h3 class="font-semibold">ISO 9001 Lead Auditor Training</h3>
                            <p>GSCS provides a comprehensive range of courses for ISO 9001 with many clients returning to
                                update their skills on a regular basis. Whether the delegate is being introduced to ISO
                                9001:2015 or they are looking to extend their knowledge and become a lead auditor, GSCS can
                                help</p>
                        </div>
                    </div>
                </div>
                <div
                    class="dark:bg-dark  dark:text-dark-6 w-full bg-[#FFFFFF] shadow-testimonial rounded-lg border-b-[3px] border-[#01549F]">
                    <div class="training ">
                        <div class="training-image">
                            <img src="https://gscsintl.com/images/services_category/services_category_fe16510626f3d2f0b7ed51eb6c869056.png"
                                alt="Service Image">
                        </div>
                        <div class="training-description">
                            <h3 class="font-semibold">ISO 45001 Occupational Health & Safety Management Systems Training
                            </h3>
                            <p>Course Overview
                                The purpose of this training course is to provide delegates with the skills and knowledge
                                necessary to plan organize and conduct an internal or external OH&S Management System audit
                                and to report the results.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="dark:bg-dark  dark:text-dark-6 w-full bg-[#FFFFFF] shadow-testimonial rounded-lg border-b-[3px] border-[#01549F]">
                    <div class="training ">
                        <div class="training-image">
                            <img src="https://gscsintl.com/images/services_category/services_category_537c06a455b603e2e77afc50b7335f4c.png"
                                alt="Service Image">
                        </div>
                        <div class="training-description">
                            <h3 class="font-semibold">ISO 14001 Environmental Management System Training</h3>
                            <p>Course Overview
                                The purpose of this training course is to provide delegates with the skills and knowledge
                                necessary to plan organize and conduct an internal or external Environmental Management
                                System (EMS) audit and to report the results.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="dark:bg-dark  dark:text-dark-6 w-full bg-[#FFFFFF] shadow-testimonial rounded-lg border-b-[3px] border-[#01549F]">
                    <div class="training ">
                        <div class="training-image">
                            <img src="https://gscsintl.com/images/services_category/services_category_591e50f31d475dc3cd07c7fba9d29ea4.png"
                                alt="Service Image">
                        </div>
                        <div class="training-description">
                            <h3 class="font-semibold">ISO 22000 Food Safety Management System Training</h3>
                            <p>Course Overview
                                The purpose of this lead auditor training course is to provide delegates with the skills and
                                knowledge necessary to plan organize and conduct an internal or external Food Safety
                                Management System audit and to report the results.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="dark:bg-dark  dark:text-dark-6 w-full bg-[#FFFFFF] shadow-testimonial rounded-lg border-b-[3px] border-[#01549F]">
                    <div class="training ">
                        <div class="training-image">
                            <img src="https://gscsintl.com/images/services_category/services_category_349f00e7ff78c4391c52569ba4f27bc0.png"
                                alt="Service Image">
                        </div>
                        <div class="training-description">
                            <h3 class="font-semibold">ISO 19011 Auditing Management System Training</h3>
                            <p>What is ISO 19011?
                                ISO 19011 is an international standard that sets forth guidelines for management systems
                                auditing, including the principles of auditing, managing an audit program and conducting
                                management system audits, as well as guidance on the evaluation of competence of individuals
                                involved in the audit process.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="dark:bg-dark  dark:text-dark-6 w-full bg-[#FFFFFF] shadow-testimonial rounded-lg border-b-[3px] border-[#01549F]">
                    <div class="training ">
                        <div class="training-image">
                            <img src="https://gscsintl.com/images/services_category/services_category_d7b5247d4b32e877984eb11cb0b2ae1c.png"
                                alt="Service Image">
                        </div>
                        <div class="training-description">
                            <h3 class="font-semibold">Chemical Management Training</h3>
                            <p>GCS International Ltd. conducts different types of training on chemical management system to
                                help and train personnel on chemical management system. GSCS has a pool of chemical experts,
                                competent and capable enough in the field of chemical management.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="dark:bg-dark  dark:text-dark-6 w-full bg-[#FFFFFF] shadow-testimonial rounded-lg border-b-[3px] border-[#01549F]">
                    <div class="training ">
                        <div class="training-image">
                            <img src="https://gscsintl.com/images/services_category/services_category_dcb463e10bbb0483f4891eeaf7a4687b.png"
                                alt="Service Image">
                        </div>
                        <div class="training-description">
                            <h3 class="font-semibold">Higg Facility Environmental Module (Higg FEM) Training</h3>
                            <p>SAC Higg Index FEM (Facility Environmental Module)

                                GSCS is SAC (Sustainable Apparel Coalition) approved trainer body (TB). GSCS provide
                                SAC-approved Higg Index training.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="dark:bg-dark  dark:text-dark-6 w-full bg-[#FFFFFF] shadow-testimonial rounded-lg border-b-[3px] border-[#01549F]">
                    <div class="training ">
                        <div class="training-image">
                            <img src="https://gscsintl.com/images/services_category/services_category_caebd93937e28e86dddfa84b25f8eb06.png"
                                alt="Service Image">
                        </div>
                        <div class="training-description">
                            <h3 class="font-semibold">SLCP Trainings</h3>
                            <p>SLCP Training
                                The SLCP’s (Social and Labor Convergence Program) mission is to implement a Converged
                                Assessment Framework (CAF) that supports stakeholders’ efforts to improve working conditions
                                in global supply chains.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Trainings Section End -->
@endsection
