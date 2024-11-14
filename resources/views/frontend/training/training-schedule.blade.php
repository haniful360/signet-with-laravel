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
                        Trainings Schedule</h1>
                    <p class="mb-5 text-base text-body-color dark:text-dark-6">
                        There are many variations of passages of Lorem Ipsum available.
                    </p>

                    <ul class="flex items-center justify-center gap-[10px]">
                        <li>
                            <a href="index.html"
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

<section class=" dark:bg-dark">
    <div class='container mx-auto lg:pb-20 overflow-x-auto dark:text-white'>
        <table class="table">
            <thead class='bg-[#e0ebf7]'>
                <tr class='text-black text-[15px]'>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>Duration</th>
                    <th>Registration</th>
                </tr>
            </thead>
            <tbody class='text-[15px]'>
                <tr>
                    <td> APSCA Approved CPD training on Social & Ethical Auditing Principles (SEAP)</td>
                    <td>Uttara, Dhaka</td>
                    <td> $ 350</td>
                    <td>05 January2024.</td>
                    <td>01 Day</td>
                    <td><button class='bg-[#e5ecf4] p-2 rounded-sm font-semibold'>Book Now</button></td>
                    <td><button class='bg-[#e6ef65] p-2 rounded-sm font-semibold hidden'>Closed</button></td>
                </tr>
                <tr>
                    <td> Training on Standard Requirements of GOTS v7.0</td>
                    <td> Online</td>
                    <td>$45</td>
                    <td>12 January2024.</td>
                    <td>01 Day</td>
                    <td><button class='bg-[#e5ecf4] p-2 rounded-sm font-semibold'>Book Now</button></td>
                    <td><button class='bg-[#e6ef65] p-2 rounded-sm font-semibold hidden'>Closed</button></td>
                </tr>
                <tr>
                    <td>SAC Approved training on Higg FEM 4.0</td>
                    <td> Dhaka, Bangladesh</td>
                    <td>$45</td>
                    <td>12 January2024.</td>
                    <td>01 Day</td>
                    <!-- <td><button class='bg-[#e5ecf4] p-2 rounded-sm font-semibold hidden'>Book Now</button></td> -->
                    <td><button class='bg-[#e6ef65] p-2 rounded-sm font-semibold w-[88px]'>Closed</button></td>
                </tr>
                <tr>
                    <td>SAC Approved training on Higg FEM 4.0</td>
                    <td> Dhaka, Bangladesh</td>
                    <td>$45</td>
                    <td>12 January2024.</td>
                    <td>01 Day</td>
                    <td><button class='bg-[#e5ecf4] p-2 rounded-sm font-semibold'>Book Now</button></td>
                    <td><button class='bg-[#e6ef65] p-2 rounded-sm font-semibold hidden'>Closed</button></td>
                </tr>
                <tr>
                    <td>SAC Approved training on Higg FEM 4.0</td>
                    <td> Dhaka, Bangladesh</td>
                    <td>$45</td>
                    <td>12 January2024.</td>
                    <td>01 Day</td>
                    <!-- <td><button class='bg-[#e5ecf4] p-2 rounded-sm font-semibold hidden'>Book Now</button></td> -->
                    <td><button class='bg-[#e6ef65] p-2 rounded-sm font-semibold w-[88px]'>Closed</button></td>
                </tr>
                <tr>
                    <td>SAC Approved training on Higg FEM 4.0</td>
                    <td> Dhaka, Bangladesh</td>
                    <td>$45</td>
                    <td>12 January2024.</td>
                    <td>01 Day</td>
                    <td><button class='bg-[#e5ecf4] p-2 rounded-sm font-semibold'>Book Now</button></td>
                    <td><button class='bg-[#e6ef65] p-2 rounded-sm font-semibold hidden'>Closed</button></td>
                </tr>
                <tr>
                    <td>SAC Approved training on Higg FEM 4.0</td>
                    <td> Dhaka, Bangladesh</td>
                    <td>$45</td>
                    <td>12 January2024.</td>
                    <td>01 Day</td>
                    <td><button class='bg-[#e5ecf4] p-2 rounded-sm font-semibold'>Book Now</button></td>
                    <td><button class='bg-[#e6ef65] p-2 rounded-sm font-semibold hidden'>Closed</button></td>
                </tr>
                <tr>
                    <td>SAC Approved training on Higg FEM 4.0</td>
                    <td> Dhaka, Bangladesh</td>
                    <td>$45</td>
                    <td>12 January2024.</td>
                    <td>01 Day</td>
                    <td><button class='bg-[#e5ecf4] p-2 rounded-sm font-semibold'>Book Now</button></td>
                    <td><button class='bg-[#e6ef65] p-2 rounded-sm font-semibold hidden'>Closed</button></td>
                </tr>
                <tr>
                    <td>SAC Approved training on Higg FEM 4.0</td>
                    <td> Dhaka, Bangladesh</td>
                    <td>$45</td>
                    <td>12 January2024.</td>
                    <td>01 Day</td>
                    <td><button class='bg-[#e5ecf4] p-2 rounded-sm font-semibold'>Book Now</button></td>
                    <td><button class='bg-[#e6ef65] p-2 rounded-sm font-semibold hidden'>Closed</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

@endsection
