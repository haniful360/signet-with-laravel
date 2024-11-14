@extends('frontend.layouts.website')
@section('content')
    <!-- ====== Hero Section Start -->
    <div id="home" class="relative overflow-hidden bg-primary pt-[120px] md:pt-[130px] lg:pt-[160px]">
        <div class="max-w-[1320px] mx-auto">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4">
                    <div class="hero-content wow flex flex-col fadeInUp mx-auto max-w-[780px] text-center"
                        data-wow-delay=".2s">
                        <h1
                            class="mb-6 text-3xl text-[#FFFFFF] font-bold leading-snug  sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-[1.2]">
                            Signet Ins-Cert SA. is exclusive partner of SIPAS CR PERU S.A.
                        </h1>
                        <p class="mx-auto mb-9 max-w-[600px] text-base font-medium text-white sm:text-lg sm:leading-[1.44]">
                            The main resource of our company is skilled auditors. We have highly qualifed and fully
                            professional auditors.
                        </p>
                        <ul class="mb-10 lg:flex flex-wrap items-center justify-center gap-5">
                            <li>
                                <a href="#"
                                    class="inline-flex items-center justify-center rounded-md bg-white px-7 py-[14px] text-center text-base font-medium text-dark shadow-1 transition duration-300 ease-in-out hover:bg-gray-2 hover:text-body-color">
                                    Get Started
                                </a>
                            </li>
                            <li class='mt-4 md:mt-0'>
                                <a href="#" target="_blank"
                                    class="flex items-center gap-4 rounded-md bg-white/[0.12] px-6 py-[14px] text-base font-medium text-white transition duration-300 ease-in-out hover:bg-white hover:text-dark">
                                    Know More
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="w-full px-4">
                    <div class="relative z-10 mx-auto max-w-[845px]" data-wow-delay=".25s">
                        <div class="h-[450px] relative">
                            <img class='' src="{{ asset('images/logo/hero_image.png') }}" alt="">
                            <p
                                class="absolute lg:top-[150px] top-2 lg:left-6 lg:text-justify text-[14px] lg:w-[550px] text-base font-medium  sm:text-lg sm:leading-[1.44]">
                                Signet Ins-Cert SA. is exclusive partner of SIPAS CR PERU S.A. ,
                                it’s a leading inspection and certification company which are
                                operating their activities by a highly experienced and skilled
                                team of compliance professionals. The team involved in this
                                company are qualied in numerous years of auditing areas &
                                has a prosperity knowledge which will help you to make your
                                business or organizations success. We have numerous services which are designed to make
                                compliance simple and efective for our clients whilst representing excellent value for
                                exchange.
                            </p>
                        </div>
                        <div class="absolute -left-9 bottom-0 z-[-1]">
                            <svg width="134" height="106" viewBox="0 0 134 106" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)"
                                    fill="white" />
                                <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)"
                                    fill="white" />
                                <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)"
                                    fill="white" />
                                <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)"
                                    fill="white" />
                                <circle cx="60.3333" cy="104" r="1.66667" transform="rotate(-90 60.3333 104)"
                                    fill="white" />
                                <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)"
                                    fill="white" />
                                <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)"
                                    fill="white" />
                                <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)"
                                    fill="white" />
                                <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)"
                                    fill="white" />
                                <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)"
                                    fill="white" />
                                <circle cx="1.66667" cy="89.3333" r="1.66667" transform="rotate(-90 1.66667 89.3333)"
                                    fill="white" />
                                <circle cx="16.3333" cy="89.3333" r="1.66667" transform="rotate(-90 16.3333 89.3333)"
                                    fill="white" />
                                <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)"
                                    fill="white" />
                                <circle cx="45.6667" cy="89.3333" r="1.66667" transform="rotate(-90 45.6667 89.3333)"
                                    fill="white" />
                                <circle cx="60.3333" cy="89.3338" r="1.66667" transform="rotate(-90 60.3333 89.3338)"
                                    fill="white" />
                                <circle cx="88.6667" cy="89.3338" r="1.66667" transform="rotate(-90 88.6667 89.3338)"
                                    fill="white" />
                                <circle cx="117.667" cy="89.3338" r="1.66667" transform="rotate(-90 117.667 89.3338)"
                                    fill="white" />
                                <circle cx="74.6667" cy="89.3338" r="1.66667" transform="rotate(-90 74.6667 89.3338)"
                                    fill="white" />
                                <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)"
                                    fill="white" />
                                <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)"
                                    fill="white" />
                                <circle cx="1.66667" cy="74.6673" r="1.66667" transform="rotate(-90 1.66667 74.6673)"
                                    fill="white" />
                                <circle cx="1.66667" cy="31.0003" r="1.66667" transform="rotate(-90 1.66667 31.0003)"
                                    fill="white" />
                                <circle cx="16.3333" cy="74.6668" r="1.66667" transform="rotate(-90 16.3333 74.6668)"
                                    fill="white" />
                                <circle cx="16.3333" cy="31.0003" r="1.66667" transform="rotate(-90 16.3333 31.0003)"
                                    fill="white" />
                                <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)"
                                    fill="white" />
                                <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)"
                                    fill="white" />
                                <circle cx="45.6667" cy="74.6668" r="1.66667" transform="rotate(-90 45.6667 74.6668)"
                                    fill="white" />
                                <circle cx="45.6667" cy="31.0003" r="1.66667" transform="rotate(-90 45.6667 31.0003)"
                                    fill="white" />
                                <circle cx="60.3333" cy="74.6668" r="1.66667" transform="rotate(-90 60.3333 74.6668)"
                                    fill="white" />
                                <circle cx="60.3333" cy="31.0001" r="1.66667" transform="rotate(-90 60.3333 31.0001)"
                                    fill="white" />
                                <circle cx="88.6667" cy="74.6668" r="1.66667" transform="rotate(-90 88.6667 74.6668)"
                                    fill="white" />
                                <circle cx="88.6667" cy="31.0001" r="1.66667" transform="rotate(-90 88.6667 31.0001)"
                                    fill="white" />
                                <circle cx="117.667" cy="74.6668" r="1.66667" transform="rotate(-90 117.667 74.6668)"
                                    fill="white" />
                                <circle cx="117.667" cy="31.0001" r="1.66667" transform="rotate(-90 117.667 31.0001)"
                                    fill="white" />
                                <circle cx="74.6667" cy="74.6668" r="1.66667" transform="rotate(-90 74.6667 74.6668)"
                                    fill="white" />
                                <circle cx="74.6667" cy="31.0001" r="1.66667" transform="rotate(-90 74.6667 31.0001)"
                                    fill="white" />
                                <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)"
                                    fill="white" />
                                <circle cx="103" cy="31.0001" r="1.66667" transform="rotate(-90 103 31.0001)"
                                    fill="white" />
                                <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)"
                                    fill="white" />
                                <circle cx="132" cy="31.0001" r="1.66667" transform="rotate(-90 132 31.0001)"
                                    fill="white" />
                                <circle cx="1.66667" cy="60.0003" r="1.66667" transform="rotate(-90 1.66667 60.0003)"
                                    fill="white" />
                                <circle cx="1.66667" cy="16.3336" r="1.66667" transform="rotate(-90 1.66667 16.3336)"
                                    fill="white" />
                                <circle cx="16.3333" cy="60.0003" r="1.66667" transform="rotate(-90 16.3333 60.0003)"
                                    fill="white" />
                                <circle cx="16.3333" cy="16.3336" r="1.66667" transform="rotate(-90 16.3333 16.3336)"
                                    fill="white" />
                                <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)"
                                    fill="white" />
                                <circle cx="31" cy="16.3336" r="1.66667" transform="rotate(-90 31 16.3336)"
                                    fill="white" />
                                <circle cx="45.6667" cy="60.0003" r="1.66667" transform="rotate(-90 45.6667 60.0003)"
                                    fill="white" />
                                <circle cx="45.6667" cy="16.3336" r="1.66667" transform="rotate(-90 45.6667 16.3336)"
                                    fill="white" />
                                <circle cx="60.3333" cy="60.0003" r="1.66667" transform="rotate(-90 60.3333 60.0003)"
                                    fill="white" />
                                <circle cx="60.3333" cy="16.3336" r="1.66667" transform="rotate(-90 60.3333 16.3336)"
                                    fill="white" />
                                <circle cx="88.6667" cy="60.0003" r="1.66667" transform="rotate(-90 88.6667 60.0003)"
                                    fill="white" />
                                <circle cx="88.6667" cy="16.3336" r="1.66667" transform="rotate(-90 88.6667 16.3336)"
                                    fill="white" />
                                <circle cx="117.667" cy="60.0003" r="1.66667" transform="rotate(-90 117.667 60.0003)"
                                    fill="white" />
                                <circle cx="117.667" cy="16.3336" r="1.66667" transform="rotate(-90 117.667 16.3336)"
                                    fill="white" />
                                <circle cx="74.6667" cy="60.0003" r="1.66667" transform="rotate(-90 74.6667 60.0003)"
                                    fill="white" />
                                <circle cx="74.6667" cy="16.3336" r="1.66667" transform="rotate(-90 74.6667 16.3336)"
                                    fill="white" />
                                <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)"
                                    fill="white" />
                                <circle cx="103" cy="16.3336" r="1.66667" transform="rotate(-90 103 16.3336)"
                                    fill="white" />
                                <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)"
                                    fill="white" />
                                <circle cx="132" cy="16.3336" r="1.66667" transform="rotate(-90 132 16.3336)"
                                    fill="white" />
                                <circle cx="1.66667" cy="45.3336" r="1.66667" transform="rotate(-90 1.66667 45.3336)"
                                    fill="white" />
                                <circle cx="1.66667" cy="1.66683" r="1.66667" transform="rotate(-90 1.66667 1.66683)"
                                    fill="white" />
                                <circle cx="16.3333" cy="45.3336" r="1.66667" transform="rotate(-90 16.3333 45.3336)"
                                    fill="white" />
                                <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(-90 16.3333 1.66683)"
                                    fill="white" />
                                <circle cx="31" cy="45.3336" r="1.66667" transform="rotate(-90 31 45.3336)"
                                    fill="white" />
                                <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)"
                                    fill="white" />
                                <circle cx="45.6667" cy="45.3336" r="1.66667" transform="rotate(-90 45.6667 45.3336)"
                                    fill="white" />
                                <circle cx="45.6667" cy="1.66683" r="1.66667" transform="rotate(-90 45.6667 1.66683)"
                                    fill="white" />
                                <circle cx="60.3333" cy="45.3338" r="1.66667" transform="rotate(-90 60.3333 45.3338)"
                                    fill="white" />
                                <circle cx="60.3333" cy="1.66707" r="1.66667" transform="rotate(-90 60.3333 1.66707)"
                                    fill="white" />
                                <circle cx="88.6667" cy="45.3338" r="1.66667" transform="rotate(-90 88.6667 45.3338)"
                                    fill="white" />
                                <circle cx="88.6667" cy="1.66707" r="1.66667" transform="rotate(-90 88.6667 1.66707)"
                                    fill="white" />
                                <circle cx="117.667" cy="45.3338" r="1.66667" transform="rotate(-90 117.667 45.3338)"
                                    fill="white" />
                                <circle cx="117.667" cy="1.66707" r="1.66667" transform="rotate(-90 117.667 1.66707)"
                                    fill="white" />
                                <circle cx="74.6667" cy="45.3338" r="1.66667" transform="rotate(-90 74.6667 45.3338)"
                                    fill="white" />
                                <circle cx="74.6667" cy="1.66707" r="1.66667" transform="rotate(-90 74.6667 1.66707)"
                                    fill="white" />
                                <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)"
                                    fill="white" />
                                <circle cx="103" cy="1.66707" r="1.66667" transform="rotate(-90 103 1.66707)"
                                    fill="white" />
                                <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)"
                                    fill="white" />
                                <circle cx="132" cy="1.66707" r="1.66667" transform="rotate(-90 132 1.66707)"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="absolute -right-6 -top-6 z-[-1]">
                            <svg width="134" height="106" viewBox="0 0 134 106" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)"
                                    fill="white" />
                                <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)"
                                    fill="white" />
                                <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)"
                                    fill="white" />
                                <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)"
                                    fill="white" />
                                <circle cx="60.3333" cy="104" r="1.66667" transform="rotate(-90 60.3333 104)"
                                    fill="white" />
                                <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)"
                                    fill="white" />
                                <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)"
                                    fill="white" />
                                <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)"
                                    fill="white" />
                                <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)"
                                    fill="white" />
                                <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)"
                                    fill="white" />
                                <circle cx="1.66667" cy="89.3333" r="1.66667" transform="rotate(-90 1.66667 89.3333)"
                                    fill="white" />
                                <circle cx="16.3333" cy="89.3333" r="1.66667" transform="rotate(-90 16.3333 89.3333)"
                                    fill="white" />
                                <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)"
                                    fill="white" />
                                <circle cx="45.6667" cy="89.3333" r="1.66667" transform="rotate(-90 45.6667 89.3333)"
                                    fill="white" />
                                <circle cx="60.3333" cy="89.3338" r="1.66667" transform="rotate(-90 60.3333 89.3338)"
                                    fill="white" />
                                <circle cx="88.6667" cy="89.3338" r="1.66667" transform="rotate(-90 88.6667 89.3338)"
                                    fill="white" />
                                <circle cx="117.667" cy="89.3338" r="1.66667" transform="rotate(-90 117.667 89.3338)"
                                    fill="white" />
                                <circle cx="74.6667" cy="89.3338" r="1.66667" transform="rotate(-90 74.6667 89.3338)"
                                    fill="white" />
                                <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)"
                                    fill="white" />
                                <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)"
                                    fill="white" />
                                <circle cx="1.66667" cy="74.6673" r="1.66667" transform="rotate(-90 1.66667 74.6673)"
                                    fill="white" />
                                <circle cx="1.66667" cy="31.0003" r="1.66667" transform="rotate(-90 1.66667 31.0003)"
                                    fill="white" />
                                <circle cx="16.3333" cy="74.6668" r="1.66667" transform="rotate(-90 16.3333 74.6668)"
                                    fill="white" />
                                <circle cx="16.3333" cy="31.0003" r="1.66667" transform="rotate(-90 16.3333 31.0003)"
                                    fill="white" />
                                <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)"
                                    fill="white" />
                                <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)"
                                    fill="white" />
                                <circle cx="45.6667" cy="74.6668" r="1.66667" transform="rotate(-90 45.6667 74.6668)"
                                    fill="white" />
                                <circle cx="45.6667" cy="31.0003" r="1.66667" transform="rotate(-90 45.6667 31.0003)"
                                    fill="white" />
                                <circle cx="60.3333" cy="74.6668" r="1.66667" transform="rotate(-90 60.3333 74.6668)"
                                    fill="white" />
                                <circle cx="60.3333" cy="31.0001" r="1.66667" transform="rotate(-90 60.3333 31.0001)"
                                    fill="white" />
                                <circle cx="88.6667" cy="74.6668" r="1.66667" transform="rotate(-90 88.6667 74.6668)"
                                    fill="white" />
                                <circle cx="88.6667" cy="31.0001" r="1.66667" transform="rotate(-90 88.6667 31.0001)"
                                    fill="white" />
                                <circle cx="117.667" cy="74.6668" r="1.66667" transform="rotate(-90 117.667 74.6668)"
                                    fill="white" />
                                <circle cx="117.667" cy="31.0001" r="1.66667" transform="rotate(-90 117.667 31.0001)"
                                    fill="white" />
                                <circle cx="74.6667" cy="74.6668" r="1.66667" transform="rotate(-90 74.6667 74.6668)"
                                    fill="white" />
                                <circle cx="74.6667" cy="31.0001" r="1.66667" transform="rotate(-90 74.6667 31.0001)"
                                    fill="white" />
                                <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)"
                                    fill="white" />
                                <circle cx="103" cy="31.0001" r="1.66667" transform="rotate(-90 103 31.0001)"
                                    fill="white" />
                                <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)"
                                    fill="white" />
                                <circle cx="132" cy="31.0001" r="1.66667" transform="rotate(-90 132 31.0001)"
                                    fill="white" />
                                <circle cx="1.66667" cy="60.0003" r="1.66667" transform="rotate(-90 1.66667 60.0003)"
                                    fill="white" />
                                <circle cx="1.66667" cy="16.3336" r="1.66667" transform="rotate(-90 1.66667 16.3336)"
                                    fill="white" />
                                <circle cx="16.3333" cy="60.0003" r="1.66667" transform="rotate(-90 16.3333 60.0003)"
                                    fill="white" />
                                <circle cx="16.3333" cy="16.3336" r="1.66667" transform="rotate(-90 16.3333 16.3336)"
                                    fill="white" />
                                <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)"
                                    fill="white" />
                                <circle cx="31" cy="16.3336" r="1.66667" transform="rotate(-90 31 16.3336)"
                                    fill="white" />
                                <circle cx="45.6667" cy="60.0003" r="1.66667" transform="rotate(-90 45.6667 60.0003)"
                                    fill="white" />
                                <circle cx="45.6667" cy="16.3336" r="1.66667" transform="rotate(-90 45.6667 16.3336)"
                                    fill="white" />
                                <circle cx="60.3333" cy="60.0003" r="1.66667" transform="rotate(-90 60.3333 60.0003)"
                                    fill="white" />
                                <circle cx="60.3333" cy="16.3336" r="1.66667" transform="rotate(-90 60.3333 16.3336)"
                                    fill="white" />
                                <circle cx="88.6667" cy="60.0003" r="1.66667" transform="rotate(-90 88.6667 60.0003)"
                                    fill="white" />
                                <circle cx="88.6667" cy="16.3336" r="1.66667" transform="rotate(-90 88.6667 16.3336)"
                                    fill="white" />
                                <circle cx="117.667" cy="60.0003" r="1.66667" transform="rotate(-90 117.667 60.0003)"
                                    fill="white" />
                                <circle cx="117.667" cy="16.3336" r="1.66667" transform="rotate(-90 117.667 16.3336)"
                                    fill="white" />
                                <circle cx="74.6667" cy="60.0003" r="1.66667" transform="rotate(-90 74.6667 60.0003)"
                                    fill="white" />
                                <circle cx="74.6667" cy="16.3336" r="1.66667" transform="rotate(-90 74.6667 16.3336)"
                                    fill="white" />
                                <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)"
                                    fill="white" />
                                <circle cx="103" cy="16.3336" r="1.66667" transform="rotate(-90 103 16.3336)"
                                    fill="white" />
                                <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)"
                                    fill="white" />
                                <circle cx="132" cy="16.3336" r="1.66667" transform="rotate(-90 132 16.3336)"
                                    fill="white" />
                                <circle cx="1.66667" cy="45.3336" r="1.66667" transform="rotate(-90 1.66667 45.3336)"
                                    fill="white" />
                                <circle cx="1.66667" cy="1.66683" r="1.66667" transform="rotate(-90 1.66667 1.66683)"
                                    fill="white" />
                                <circle cx="16.3333" cy="45.3336" r="1.66667" transform="rotate(-90 16.3333 45.3336)"
                                    fill="white" />
                                <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(-90 16.3333 1.66683)"
                                    fill="white" />
                                <circle cx="31" cy="45.3336" r="1.66667" transform="rotate(-90 31 45.3336)"
                                    fill="white" />
                                <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)"
                                    fill="white" />
                                <circle cx="45.6667" cy="45.3336" r="1.66667" transform="rotate(-90 45.6667 45.3336)"
                                    fill="white" />
                                <circle cx="45.6667" cy="1.66683" r="1.66667" transform="rotate(-90 45.6667 1.66683)"
                                    fill="white" />
                                <circle cx="60.3333" cy="45.3338" r="1.66667" transform="rotate(-90 60.3333 45.3338)"
                                    fill="white" />
                                <circle cx="60.3333" cy="1.66707" r="1.66667" transform="rotate(-90 60.3333 1.66707)"
                                    fill="white" />
                                <circle cx="88.6667" cy="45.3338" r="1.66667" transform="rotate(-90 88.6667 45.3338)"
                                    fill="white" />
                                <circle cx="88.6667" cy="1.66707" r="1.66667" transform="rotate(-90 88.6667 1.66707)"
                                    fill="white" />
                                <circle cx="117.667" cy="45.3338" r="1.66667" transform="rotate(-90 117.667 45.3338)"
                                    fill="white" />
                                <circle cx="117.667" cy="1.66707" r="1.66667" transform="rotate(-90 117.667 1.66707)"
                                    fill="white" />
                                <circle cx="74.6667" cy="45.3338" r="1.66667" transform="rotate(-90 74.6667 45.3338)"
                                    fill="white" />
                                <circle cx="74.6667" cy="1.66707" r="1.66667" transform="rotate(-90 74.6667 1.66707)"
                                    fill="white" />
                                <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)"
                                    fill="white" />
                                <circle cx="103" cy="1.66707" r="1.66667" transform="rotate(-90 103 1.66707)"
                                    fill="white" />
                                <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)"
                                    fill="white" />
                                <circle cx="132" cy="1.66707" r="1.66667" transform="rotate(-90 132 1.66707)"
                                    fill="white" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Hero Section End -->


    <!-- ====== About Section Start -->
    <section class="bg-gray-1  pb-8 pt-20 dark:bg-dark-2 lg:pb-[70px] lg:pt-[120px]">
        <div class="max-w-[1280px] mx-auto">
            <div class="" data-wow-delay=".2s">
                <div class=" flex flex-wrap items-center">
                    <div class="w-full px-4 lg:w-1/2">
                        <div class="mb-12 max-w-[540px] lg:mb-0">
                            <!-- <h2 class="mb-5 text-3xl font-bold leading-tight text-dark dark:text-white sm:text-[40px] sm:leading-[1.2]">
                                                Brilliant Toolkit to Build Nextgen Website Faster.
                                            </h2> -->
                            <p class="mb-10 text-base leading-relaxed text-body-color dark:text-dark-6">
                                Signet Ins-Cert SA. is exclusive partner of SIPAS CR PERU S.A. ,
                                it’s a leading inspection and certification company which are
                                operating their activities by a highly experienced and skilled
                                team of compliance professionals. The team involved in this
                                company are qualifed in numerous years of auditing areas &
                                has a prosperity knowledge which will help you to make your
                                business or organizations success. We have numerous services which are designed to make
                                compliance simple and
                                exective for our clients whilst representing excellent value for
                                exchange.
                                The main resource of our company is skilled auditors. We
                                have highly qualifed and fully professional auditors. They are
                                covering the social, technical, security and are & electrical
                                safety, management system certification, product safety &
                                inspection, gots & textile certification audit.
                            </p>

                            <a href="javascript:void(0)"
                                class="inline-flex items-center justify-center rounded-md border border-primary bg-primary px-7 py-3 text-center text-base font-medium text-white hover:border-blue-dark hover:bg-blue-dark">
                                Know More
                            </a>
                        </div>
                    </div>

                    <div class="w-full px-4 lg:w-1/2">
                        <div class="-mx-2 flex flex-wrap sm:-mx-4 lg:-mx-2 xl:-mx-4">
                            <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                                <div class="mb-4 sm:mb-8 sm:h-[400px] md:h-[540px] lg:h-[400px] xl:h-[500px]">
                                    <img src="/images/about/about-image-01.jpg" alt="about image"
                                        class="h-full w-full object-cover object-center" />
                                </div>
                            </div>

                            <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                                <div
                                    class="mb-4 sm:mb-8 sm:h-[220px] md:h-[346px] lg:mb-4 lg:h-[225px] xl:mb-8 xl:h-[310px]">
                                    <img src="https://gscsintl.com/images/banners/20230812-1691850148-1187960.jpg"
                                        alt="about image" class="h-full w-full object-cover object-center" />
                                </div>

                                <div
                                    class="relative z-10 mb-4 flex items-center justify-center overflow-hidden bg-primary px-6 py-12 sm:mb-8 sm:h-[160px] sm:p-5 lg:mb-4 xl:mb-8">
                                    <div>
                                        <span class="block text-5xl font-extrabold text-white">
                                            09
                                        </span>
                                        <span class="block text-base font-semibold text-white">
                                            We have
                                        </span>
                                        <span class="block text-base font-medium text-white text-opacity-70">
                                            Years of experience
                                        </span>
                                    </div>
                                    <div>
                                        <span class="absolute left-0 top-0 -z-10">
                                            <svg width="106" height="144" viewBox="0 0 106 144" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.1" x="-67" y="47.127" width="113.378" height="131.304"
                                                    transform="rotate(-42.8643 -67 47.127)"
                                                    fill="url(#paint0_linear_1416_214)" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1416_214" x1="-10.3111"
                                                        y1="47.127" x2="-10.3111" y2="178.431"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="white" />
                                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="absolute right-0 top-0 -z-10">
                                            <svg width="130" height="97" viewBox="0 0 130 97" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.1" x="0.86792" y="-6.67725" width="155.563"
                                                    height="140.614" transform="rotate(-42.8643 0.86792 -6.67725)"
                                                    fill="url(#paint0_linear_1416_215)" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1416_215" x1="78.6495"
                                                        y1="-6.67725" x2="78.6495" y2="133.937"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="white" />
                                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="absolute bottom-0 right-0 -z-10">
                                            <svg width="175" height="104" viewBox="0 0 175 104" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.1" x="175.011" y="108.611" width="101.246"
                                                    height="148.179" transform="rotate(137.136 175.011 108.611)"
                                                    fill="url(#paint0_linear_1416_216)" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1416_216" x1="225.634"
                                                        y1="108.611" x2="225.634" y2="256.79"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="white" />
                                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== About Section End -->


    <!-- ====== Services Section Start -->

    <section class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] dark:bg-dark">
        <div class="max-w-[1320px] mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-12 max-w-[510px] text-center lg:mb-20">
                        <span class="text-primary mb-2 block text-lg font-semibold">
                            Our Services
                        </span>
                        <h2
                            class="text-dark dark:text-white mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]">
                            What We Offer
                        </h2>
                        <p class="text-body-color text-base dark:text-dark-6">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div
                    class="w-full service-card transition-transform transform duration-300 animate__animated animate__fadeInUp px-4 md:w-1/2 lg:w-1/3">
                    <div
                        class="mb-9 h-[400px] rounded-[10px] text-center bg-white dark:bg-dark-2 p-6 shadow-2 hover:shadow-lg md:px-7 xl:px-10">
                        <div class="mb-8 w-[150px] h-[150px] mx-auto">
                            <img src="https://gscsintl.com/images/services_category/services_category_1f2b18e85a9122a82996899b08abe525.jpg"
                                alt="Service 2 Image"
                                class="w-full h-full rounded-full mb-4 hover:scale-150 transition-transform duration-300" />
                        </div>
                        <h4 class="text-dark dark:text-white mb-[14px] text-2xl font-semibold">
                            Product Certification
                        </h4>
                        <p class="text-body-color dark:text-dark-6">
                            GSCS International Ltd. is Accredited on ISO/IEC 17065, GOTS and
                            Textile Exchange to provide certification on GOTS, GRS, RCS,
                            OCS, RDS, RWS, RMS, and RAS standards.
                        </p>
                    </div>
                </div>
                <div
                    class="w-full service-card transition-transform transform duration-300 animate__animated animate__fadeInUp px-4 md:w-1/2 lg:w-1/3">
                    <div
                        class="mb-9 h-[400px] rounded-[10px] text-center bg-white dark:bg-dark-2 p-6 shadow-2 hover:shadow-lg md:px-7 xl:px-10">
                        <div class="mb-8 w-[150px] h-[150px] mx-auto">
                            <img src="https://gscsintl.com/images/services_category/services_category_a6b0255e26eadfd8afee26c69d2a1b1b.jpg"
                                alt="Service 2 Image"
                                class="w-full h-full rounded-full mb-4 hover:scale-150 transition-transform duration-300" />
                        </div>
                        <h4 class="text-dark dark:text-white mb-[14px] text-2xl font-semibold">
                            Social & Security Audit
                        </h4>
                        <p class="text-body-color dark:text-dark-6">
                            Since 1988, Social Audits has been a tool to measure,
                            understand, report, and ultimately improve an organization's
                            social and ethical performance.
                        </p>
                    </div>
                </div>
                <div
                    class="w-full service-card transition-transform transform duration-300 animate__animated animate__fadeInUp px-4 md:w-1/2 lg:w-1/3">
                    <div
                        class="mb-9 h-[400px] rounded-[10px] text-center bg-white dark:bg-dark-2 p-6 shadow-2 hover:shadow-lg md:px-7 xl:px-10">
                        <div class="mb-8 w-[150px] h-[150px] mx-auto">
                            <img src="https://gscsintl.com/images/services_category/services_category_401107364ff248f60917beeaea8e040a.jpg"
                                alt="Service 2 Image"
                                class="w-full h-full rounded-full mb-4 hover:scale-150 transition-transform duration-300" />
                        </div>
                        <h4 class="text-dark dark:text-white mb-[14px] text-2xl font-semibold">
                            Verification
                        </h4>
                        <p class="text-body-color dark:text-dark-6">
                            Verification gives the self-assessment of facilities, the
                            legitimacy and accuracy needed to share it publicly by ensuring
                            that your facility accurately completed all sections of the Higg
                            FEM and SLCP.
                        </p>
                    </div>
                </div>
                <div
                    class="w-full service-card transition-transform transform duration-300 animate__animated animate__fadeInUp px-4 md:w-1/2 lg:w-1/3">
                    <div
                        class="mb-9 h-[400px] rounded-[10px] text-center bg-white dark:bg-dark-2 p-6 shadow-2 hover:shadow-lg md:px-7 xl:px-10">
                        <div class="mb-8 w-[150px] h-[150px] mx-auto">
                            <img src="https://gscsintl.com/images/services_category/services_category_7d441d8e29479ece4dd6f9b94a4d49cc.jpg"
                                alt="Service 2 Image"
                                class="w-full h-full rounded-full mb-4 hover:scale-150 transition-transform duration-300" />
                        </div>
                        <h4 class="text-dark dark:text-white mb-[14px] text-2xl font-semibold">
                            ISO Management System Certification
                        </h4>
                        <p class="text-body-color dark:text-dark-6">
                            Verification gives the self-assessment of facilities, the
                            legitimacy and accuracy needed to share it publicly by ensuring
                            that your facility accurately completed all .
                        </p>
                    </div>
                </div>
                <div
                    class="w-full service-card transition-transform transform duration-300 animate__animated animate__fadeInUp px-4 md:w-1/2 lg:w-1/3">
                    <div
                        class="mb-9 h-[400px] rounded-[10px] text-center bg-white dark:bg-dark-2 p-6 shadow-2 hover:shadow-lg md:px-7 xl:px-10">
                        <div class="mb-8 w-[150px] h-[150px] mx-auto">
                            <img src="https://gscsintl.com/images/services_category/services_category_667292e6afe1fc2d34fe4e93f951ecc9.jpg"
                                alt="Service 2 Image"
                                class="w-full h-full rounded-full mb-4 hover:scale-150 transition-transform duration-300" />
                        </div>
                        <h4 class="text-dark dark:text-white mb-[14px] text-2xl font-semibold">
                            Product Inspection
                        </h4>
                        <p class="text-body-color dark:text-dark-6">
                            Verification gives the self-assessment of facilities, the
                            legitimacy and accuracy needed to share it publicly by ensuring
                            that your facility accurately completed all sections of the Higg
                            FEM and SLCP.
                        </p>
                    </div>
                </div>
                <div
                    class="w-full service-card transition-transform transform duration-300 animate__animated animate__fadeInUp px-4 md:w-1/2 lg:w-1/3">
                    <div
                        class="mb-9 h-[400px] rounded-[10px] text-center bg-white dark:bg-dark-2 p-6 shadow-2 hover:shadow-lg md:px-7 xl:px-10">
                        <div class="mb-8 w-[150px] h-[150px] mx-auto">
                            <img src="https://gscsintl.com/images/services_category/services_category_ae801b8b6785526dce5e7ca061687eac.jpg"
                                alt="Service 2 Image"
                                class="w-full h-full rounded-full mb-4 hover:scale-150 transition-transform duration-300" />
                        </div>
                        <h4 class="text-dark dark:text-white mb-[14px] text-2xl font-semibold">
                            Traings
                        </h4>
                        <p class="text-body-color dark:text-dark-6">
                            Verification gives the self-assessment of facilities, the
                            legitimacy and accuracy needed to share it publicly by ensuring
                            that your facility accurately completed all sections of the Higg
                            FEM and SLCP.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
