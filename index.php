<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zimpy | Confectionery Manufacturer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include "./navbar.php"
    ?>

    <!-- ============ HERO IMAGE CAROUSEL ============ -->
    <section class="relative w-full h-[240px] sm:h-[380px] md:h-[500px] lg:h-[620px] overflow-hidden">

        <div id="carouselTrack" class="flex h-full w-full transition-transform duration-700 ease-in-out">
            <img src="./assets/banner1.png" alt="" class="w-full h-full object-cover flex-shrink-0">
            <img src="./assets/banner2.png" alt="" class="w-full h-full object-cover flex-shrink-0">
            <!-- <img src="./assets/banner3.jpg" alt="" class="w-full h-full object-cover flex-shrink-0">
    <img src="./assets/banner4.jpg" alt="" class="w-full h-full object-cover flex-shrink-0"> -->
        </div>

        <!-- prev / next -->
        <button id="prevBtn" aria-label="Previous slide"
            class="hidden sm:flex absolute left-3 md:left-6 top-1/2 -translate-y-1/2 w-10 h-10 md:w-11 md:h-11 items-center justify-center rounded-full bg-white/70 hover:bg-white text-dreizack-dark backdrop-blur-sm shadow-md transition-colors">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
        </button>
        <button id="nextBtn" aria-label="Next slide"
            class="hidden sm:flex absolute right-3 md:right-6 top-1/2 -translate-y-1/2 w-10 h-10 md:w-11 md:h-11 items-center justify-center rounded-full bg-white/70 hover:bg-white text-dreizack-dark backdrop-blur-sm shadow-md transition-colors">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </button>

        <!-- dots -->
        <div id="dots" class="absolute bottom-3 md:bottom-5 left-1/2 -translate-x-1/2 flex gap-2 z-10">
            <button class="dot w-2 h-2 md:w-2.5 md:h-2.5 rounded-full bg-white transition-all scale-125" data-index="0" aria-label="Go to slide 1"></button>
            <button class="dot w-2 h-2 md:w-2.5 md:h-2.5 rounded-full bg-white/60 hover:bg-white transition-all" data-index="1" aria-label="Go to slide 2"></button>
            <button class="dot w-2 h-2 md:w-2.5 md:h-2.5 rounded-full bg-white/60 hover:bg-white transition-all" data-index="2" aria-label="Go to slide 3"></button>
            <button class="dot w-2 h-2 md:w-2.5 md:h-2.5 rounded-full bg-white/60 hover:bg-white transition-all" data-index="3" aria-label="Go to slide 4"></button>
        </div>
    </section>


    <!-- ========================================= -->
    <!-- ZIMPY ABOUT SECTION -->
    <!-- ========================================= -->
    <section
        id="about"
        class="bg-zimpy-cream py-20 sm:py-24 lg:py-28">

        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-center">


                <!-- ================================= -->
                <!-- LEFT CONTENT -->
                <!-- ================================= -->

                <div class="lg:col-span-5">

                    <!-- Small Heading -->

                    <div class="flex items-center gap-3 mb-6">

                        <span class="w-8 h-[2px] bg-zimpy-red"></span>

                        <span
                            class="font-montserrat text-xs font-semibold uppercase tracking-[0.18em] text-zimpy-red">
                            About Zimpy
                        </span>

                    </div>


                    <!-- Main Heading -->

                    <h2
                        class="font-playfair text-4xl sm:text-5xl lg:text-[54px] leading-[1.1] font-semibold text-zimpy-cocoa">
                        Made with care.
                        <span class="block text-zimpy-red">
                            Made for business.
                        </span>
                    </h2>


                    <!-- Paragraph -->

                    <p
                        class="mt-7 font-montserrat text-sm sm:text-base leading-7 text-zimpy-chocolate/75 max-w-lg">
                        Zimpy is a confectionery company focused on creating
                        chocolates, toffees and sweet treats that businesses
                        can rely on.
                    </p>


                    <p
                        class="mt-4 font-montserrat text-sm sm:text-base leading-7 text-zimpy-chocolate/65 max-w-lg">
                        From product development to manufacturing, we bring
                        together quality ingredients, careful processes and
                        a passion for making confectionery people love.
                    </p>


                    <!-- Link -->

                    <a
                        href="#about-company"
                        class="inline-flex items-center gap-2 mt-8 font-montserrat text-sm font-semibold text-zimpy-cocoa hover:text-zimpy-red transition-colors duration-300 group">

                        More About Zimpy

                        <svg
                            class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M5 12h14M13 6l6 6-6 6" />
                        </svg>

                    </a>

                </div>


                <!-- ================================= -->
                <!-- RIGHT IMAGE -->
                <!-- ================================= -->

                <div class="lg:col-span-7">

                    <div class="relative">

                        <img
                            src="assets/aboutus.png"
                            alt="Zimpy confectionery"
                            class="w-full h-[320px] sm:h-[430px] lg:h-[500px] object-cover" />


                        <!-- Simple Caption -->

                        <div
                            class="absolute bottom-0 left-0 bg-white px-6 py-5 sm:px-8 sm:py-6">

                            <p
                                class="font-montserrat text-xs uppercase tracking-[0.16em] text-zimpy-red font-semibold">
                                Our Approach
                            </p>

                            <p
                                class="font-playfair text-xl sm:text-2xl text-zimpy-cocoa font-semibold mt-1">
                                Quality in every batch.
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================================= -->
            <!-- BOTTOM LINE -->
            <!-- ================================= -->

            <div
                class="mt-16 lg:mt-20 pt-8 border-t border-zimpy-cocoa/10">

                <div
                    class="grid grid-cols-1 sm:grid-cols-3 gap-8">

                    <div>

                        <p
                            class="font-montserrat text-xs uppercase tracking-[0.15em] text-zimpy-red font-semibold">
                            Quality
                        </p>

                        <p
                            class="font-montserrat text-sm text-zimpy-cocoa/70 mt-2">
                            Consistent products, every time.
                        </p>

                    </div>


                    <div>

                        <p
                            class="font-montserrat text-xs uppercase tracking-[0.15em] text-zimpy-red font-semibold">
                            Manufacturing
                        </p>

                        <p
                            class="font-montserrat text-sm text-zimpy-cocoa/70 mt-2">
                            Built to support growing businesses.
                        </p>

                    </div>


                    <div>

                        <p
                            class="font-montserrat text-xs uppercase tracking-[0.15em] text-zimpy-red font-semibold">
                            Partnership
                        </p>

                        <p
                            class="font-montserrat text-sm text-zimpy-cocoa/70 mt-2">
                            Reliable relationships beyond the order.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ========================================= -->
    <!-- WHY CHOOSE ZIMPY -->
    <!-- ========================================= -->

    <section
        class="relative overflow-hidden bg-[#351B16] py-14 sm:py-20 lg:py-28">

        <!-- ========================================= -->
        <!-- DECORATIVE GOLD CIRCLES -->
        <!-- ========================================= -->

        <div
            class="absolute -top-24 -right-24 w-72 h-72 rounded-full border border-[#C9A227]/20"></div>

        <div
            class="absolute -bottom-32 -left-32 w-80 h-80 rounded-full border border-[#C9A227]/10"></div>


        <!-- ========================================= -->
        <!-- MAIN CONTAINER -->
        <!-- ========================================= -->

        <div
            class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">


            <!-- ========================================= -->
            <!-- SECTION HEADER -->
            <!-- ========================================= -->

            <div
                class="max-w-3xl mx-auto text-center mb-10 sm:mb-14 lg:mb-20">

                <!-- Small Label -->

                <div
                    class="flex items-center justify-center gap-3 mb-4 sm:mb-5">

                    <span
                        class="w-7 sm:w-8 h-[1px] bg-[#C9A227]"></span>

                    <span
                        class="font-montserrat text-[20px] sm:text-xs font-semibold uppercase tracking-[0.2em] text-[#D4AF37]">
                        Why Choose Zimpy
                    </span>

                    <span
                        class="w-7 sm:w-8 h-[1px] bg-[#C9A227]"></span>

                </div>

            </div>



            <!-- ========================================= -->
            <!-- BENEFITS GRID -->
            <!-- ========================================= -->

            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">


                <!-- ===================================== -->
                <!-- 01 QUALITY -->
                <!-- ===================================== -->

                <div
                    class="group relative px-5 sm:px-8 lg:px-7 py-6 sm:py-8 lg:py-6 border-b sm:border-r lg:border-b-0 border-[#C9A227]/20">

                    <!-- Number + Icon -->

                    <div
                        class="flex items-center justify-between mb-6 sm:mb-9">

                        <span
                            class="font-montserrat text-[10px] sm:text-xs font-semibold tracking-[0.18em] 0">
                            01
                        </span>


                        <!-- Icon -->

                        <div
                            class="w-9 h-9 sm:w-11 sm:h-11 rounded-full border border-[#C9A227]/40 flex items-center justify-center text-[#D4AF37] group-hover:bg-[#C9A227] group-hover:text-[#351B16] transition-all duration-300">

                            <svg
                                class="w-4 h-4 sm:w-5 sm:h-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M12 3l2.7 5.47L21 9.38l-4.5 4.39 1.06 6.2L12 17.05 6.44 20l1.06-6.23L3 9.38l6.3-.91L12 3z" />

                            </svg>

                        </div>

                    </div>


                    <!-- Heading -->

                    <h3
                        class="font-playfair text-[21px] sm:text-2xl lg:text-[26px] font-semibold text-white mb-3 sm:mb-4">
                        Quality You Can Trust
                    </h3>


                    <!-- Description -->

                    <p
                        class="font-montserrat text-[12px] sm:text-sm leading-5 sm:leading-6 text-white/55">
                        Carefully crafted confectionery with a focus
                        on consistent taste, presentation and quality
                        across every batch.
                    </p>

                </div>



                <!-- ===================================== -->
                <!-- 02 VARIETY -->
                <!-- ===================================== -->

                <div
                    class="group relative px-5 sm:px-8 lg:px-7 py-6 sm:py-8 lg:py-6 border-b lg:border-b-0 lg:border-r border-[#C9A227]/20">

                    <!-- Number + Icon -->

                    <div
                        class="flex items-center justify-between mb-6 sm:mb-9">

                        <span
                            class="font-montserrat text-[10px] sm:text-xs font-semibold tracking-[0.18em] text-[#C9A227]">
                            02
                        </span>


                        <!-- Icon -->

                        <div
                            class="w-9 h-9 sm:w-11 sm:h-11 rounded-full border border-[#C9A227]/40 flex items-center justify-center text-[#D4AF37] group-hover:bg-[#C9A227] group-hover:text-[#351B16] transition-all duration-300">

                            <svg
                                class="w-4 h-4 sm:w-5 sm:h-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M4 7h16M4 12h16M4 17h16" />

                                <circle
                                    cx="8"
                                    cy="7"
                                    r="1"
                                    fill="currentColor" />

                                <circle
                                    cx="16"
                                    cy="12"
                                    r="1"
                                    fill="currentColor" />

                                <circle
                                    cx="10"
                                    cy="17"
                                    r="1"
                                    fill="currentColor" />

                            </svg>

                        </div>

                    </div>


                    <!-- Heading -->

                    <h3
                        class="font-playfair text-[21px] sm:text-2xl lg:text-[26px] font-semibold text-white mb-3 sm:mb-4">
                        A Range for Every Market
                    </h3>


                    <!-- Description -->

                    <p
                        class="font-montserrat text-[12px] sm:text-sm leading-5 sm:leading-6 text-white/55">
                        From everyday chocolate favourites to premium
                        pralines and gifting collections, find products
                        suited to different customers and occasions.
                    </p>

                </div>



                <!-- ===================================== -->
                <!-- 03 CONSISTENCY -->
                <!-- ===================================== -->

                <div
                    class="group relative px-5 sm:px-8 lg:px-7 py-6 sm:py-8 lg:py-6 border-b sm:border-r lg:border-b-0 border-[#C9A227]/20">

                    <!-- Number + Icon -->

                    <div
                        class="flex items-center justify-between mb-6 sm:mb-9">

                        <span
                            class="font-montserrat text-[10px] sm:text-xs font-semibold tracking-[0.18em] text-[#C9A227]">
                            03
                        </span>


                        <!-- Icon -->

                        <div
                            class="w-9 h-9 sm:w-11 sm:h-11 rounded-full border border-[#C9A227]/40 flex items-center justify-center text-[#D4AF37] group-hover:bg-[#C9A227] group-hover:text-[#351B16] transition-all duration-300">

                            <svg
                                class="w-4 h-4 sm:w-5 sm:h-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M12 3v18M3 12h18" />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M5.5 7.5L8 10l3-4M18.5 16.5L16 14l-3 4" />

                            </svg>

                        </div>

                    </div>


                    <!-- Heading -->

                    <h3
                        class="font-playfair text-[21px] sm:text-2xl lg:text-[26px] font-semibold text-white mb-3 sm:mb-4">
                        Consistency That Matters
                    </h3>


                    <!-- Description -->

                    <p
                        class="font-montserrat text-[12px] sm:text-sm leading-5 sm:leading-6 text-white/55">
                        A dependable product experience helps your
                        customers recognise and return to the taste
                        they already know.
                    </p>

                </div>



                <!-- ===================================== -->
                <!-- 04 PARTNERSHIP -->
                <!-- ===================================== -->

                <div
                    class="group relative px-5 sm:px-8 lg:px-7 py-6 sm:py-8 lg:py-6">

                    <!-- Number + Icon -->

                    <div
                        class="flex items-center justify-between mb-6 sm:mb-9">

                        <span
                            class="font-montserrat text-[10px] sm:text-xs font-semibold tracking-[0.18em] text-[#C9A227]">
                            04
                        </span>


                        <!-- Icon -->

                        <div
                            class="w-9 h-9 sm:w-11 sm:h-11 rounded-full border border-[#C9A227]/40 flex items-center justify-center text-[#D4AF37] group-hover:bg-[#C9A227] group-hover:text-[#351B16] transition-all duration-300">

                            <svg
                                class="w-4 h-4 sm:w-5 sm:h-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M20 11.5V7l-8-4-8 4v4.5" />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M4 11.5L12 16l8-4.5" />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M12 16v6" />

                            </svg>

                        </div>

                    </div>


                    <!-- Heading -->

                    <h3
                        class="font-playfair text-[21px] sm:text-2xl lg:text-[26px] font-semibold text-white mb-3 sm:mb-4">
                        Built for Business
                    </h3>


                    <!-- Description -->

                    <p
                        class="font-montserrat text-[12px] sm:text-sm leading-5 sm:leading-6 text-white/55">
                        We understand the needs of distributors,
                        retailers, corporate gifting partners and
                        businesses looking for dependable confectionery.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <?php
    include "./productHome.php"
    ?>

    

    

<!-- ========================================= -->
<!-- B2B SOLUTIONS -->
<!-- ========================================= -->

<section
    class="relative overflow-hidden bg-[#F8F3EC] py-14 sm:py-20 lg:py-28"
>

    <!-- ========================================= -->
    <!-- DECORATIVE BACKGROUND -->
    <!-- ========================================= -->

    <div
        class="absolute -top-24 -right-24 w-64 h-64 sm:w-80 sm:h-80 rounded-full border border-[#C9A227]/10"
    ></div>

    <div
        class="absolute -bottom-32 -left-32 w-72 h-72 sm:w-96 sm:h-96 rounded-full border border-[#C9A227]/10"
    ></div>


    <!-- ========================================= -->
    <!-- MAIN CONTAINER -->
    <!-- ========================================= -->

    <div
        class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-8"
    >


        <!-- ========================================= -->
        <!-- SECTION HEADER -->
        <!-- ========================================= -->

        <div
            class="max-w-3xl mx-auto text-center mb-10 sm:mb-14 lg:mb-16"
        >

            <!-- Label -->

            <div
                class="flex items-center justify-center gap-3 mb-4 sm:mb-5"
            >

                <span
                    class="w-7 sm:w-8 h-[1px] bg-[#C9A227]"
                ></span>

                <span
                    class="font-montserrat text-[10px] sm:text-xs font-semibold uppercase tracking-[0.2em] text-[#ED1C24]"
                >
                    B2B Solutions
                </span>

                <span
                    class="w-7 sm:w-8 h-[1px] bg-[#C9A227]"
                ></span>

            </div>


            <!-- Heading -->

            <h2
                class="font-playfair text-[30px] sm:text-4xl lg:text-[52px] leading-[1.12] font-semibold text-[#351B16]"
            >

                Chocolate made for
                <span class="text-[#ED1C24]">
                    business.
                </span>

            </h2>


            <!-- Description -->

            <p
                class="mt-4 sm:mt-6 font-montserrat text-[12px] sm:text-sm lg:text-base leading-6 sm:leading-7 text-[#351B16]/60 max-w-2xl mx-auto"
            >
                Whether you are a retailer, distributor, hospitality
                business or corporate buyer, Zimpy offers confectionery
                solutions designed around your business needs.
            </p>

        </div>



        <!-- ========================================= -->
        <!-- SOLUTIONS GRID -->
        <!-- ========================================= -->

        <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4"
        >


            <!-- ===================================== -->
            <!-- 01 RETAIL & DISTRIBUTION -->
            <!-- ===================================== -->

            <div
                class="group relative overflow-hidden bg-white border border-[#351B16]/8 p-6 sm:p-7 lg:p-8 min-h-[240px] sm:min-h-[260px] transition-all duration-500 hover:-translate-y-1 hover:shadow-xl"
            >

                <div
                    class="flex items-start justify-between"
                >

                    <span
                        class="font-montserrat text-[10px] sm:text-xs font-semibold tracking-[0.18em] text-[#C9A227]"
                    >
                        01
                    </span>


                    <!-- Icon -->

                    <div
                        class="w-10 h-10 sm:w-11 sm:h-11 rounded-full border border-[#C9A227]/40 flex items-center justify-center text-[#9B7614] group-hover:bg-[#351B16] group-hover:text-[#D4AF37] group-hover:border-[#351B16] transition-all duration-300"
                    >

                        <svg
                            class="w-4 h-4 sm:w-5 sm:h-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M3 21h18M5 21V8l7-4 7 4v13M9 21v-6h6v6M8 10h1M12 10h1M16 10h1"
                            />

                        </svg>

                    </div>

                </div>


                <div class="mt-10 sm:mt-12">

                    <h3
                        class="font-playfair text-[22px] sm:text-2xl font-semibold text-[#351B16]"
                    >
                        Retail & Distribution
                    </h3>

                    <p
                        class="mt-3 font-montserrat text-[12px] sm:text-sm leading-5 sm:leading-6 text-[#351B16]/55"
                    >
                        A diverse range of confectionery products
                        for retailers and distribution partners.
                    </p>

                </div>


                <!-- Bottom Hover Line -->

                <div
                    class="absolute bottom-0 left-0 w-0 h-[2px] bg-[#C9A227] group-hover:w-full transition-all duration-500"
                ></div>

            </div>



            <!-- ===================================== -->
            <!-- 02 WHOLESALE -->
            <!-- ===================================== -->

            <div
                class="group relative overflow-hidden bg-white border border-[#351B16]/8 p-6 sm:p-7 lg:p-8 min-h-[240px] sm:min-h-[260px] transition-all duration-500 hover:-translate-y-1 hover:shadow-xl"
            >

                <div
                    class="flex items-start justify-between"
                >

                    <span
                        class="font-montserrat text-[10px] sm:text-xs font-semibold tracking-[0.18em] text-[#C9A227]"
                    >
                        02
                    </span>


                    <!-- Icon -->

                    <div
                        class="w-10 h-10 sm:w-11 sm:h-11 rounded-full border border-[#C9A227]/40 flex items-center justify-center text-[#9B7614] group-hover:bg-[#351B16] group-hover:text-[#D4AF37] group-hover:border-[#351B16] transition-all duration-300"
                    >

                        <svg
                            class="w-4 h-4 sm:w-5 sm:h-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M4 7h16M4 12h16M4 17h16"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M7 4v16M17 4v16"
                            />

                        </svg>

                    </div>

                </div>


                <div class="mt-10 sm:mt-12">

                    <h3
                        class="font-playfair text-[22px] sm:text-2xl font-semibold text-[#351B16]"
                    >
                        Wholesale
                    </h3>

                    <p
                        class="mt-3 font-montserrat text-[12px] sm:text-sm leading-5 sm:leading-6 text-[#351B16]/55"
                    >
                        Flexible confectionery supply for businesses
                        looking for reliable wholesale partnerships.
                    </p>

                </div>


                <!-- Bottom Hover Line -->

                <div
                    class="absolute bottom-0 left-0 w-0 h-[2px] bg-[#C9A227] group-hover:w-full transition-all duration-500"
                ></div>

            </div>



            <!-- ===================================== -->
            <!-- 03 CORPORATE GIFTING -->
            <!-- ===================================== -->

            <div
                class="group relative overflow-hidden bg-white border border-[#351B16]/8 p-6 sm:p-7 lg:p-8 min-h-[240px] sm:min-h-[260px] transition-all duration-500 hover:-translate-y-1 hover:shadow-xl"
            >

                <div
                    class="flex items-start justify-between"
                >

                    <span
                        class="font-montserrat text-[10px] sm:text-xs font-semibold tracking-[0.18em] text-[#C9A227]"
                    >
                        03
                    </span>


                    <!-- Icon -->

                    <div
                        class="w-10 h-10 sm:w-11 sm:h-11 rounded-full border border-[#C9A227]/40 flex items-center justify-center text-[#9B7614] group-hover:bg-[#351B16] group-hover:text-[#D4AF37] group-hover:border-[#351B16] transition-all duration-300"
                    >

                        <svg
                            class="w-4 h-4 sm:w-5 sm:h-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M20 12v8a1 1 0 01-1 1H5a1 1 0 01-1-1v-8M3 7h18v5H3V7zM12 7v14M7.5 7C6.67 7 6 6.33 6 5.5S6.67 4 7.5 4c1.5 0 4.5 3 4.5 3s-3-3-4.5-3zM16.5 7c.83 0 1.5-.67 1.5-1.5S17.33 4 16.5 4c-1.5 0-4.5 3-4.5 3s3-3 4.5-3z"
                            />

                        </svg>

                    </div>

                </div>


                <div class="mt-10 sm:mt-12">

                    <h3
                        class="font-playfair text-[22px] sm:text-2xl font-semibold text-[#351B16]"
                    >
                        Corporate Gifting
                    </h3>

                    <p
                        class="mt-3 font-montserrat text-[12px] sm:text-sm leading-5 sm:leading-6 text-[#351B16]/55"
                    >
                        Thoughtful chocolate collections for corporate
                        gifts, festive occasions and special events.
                    </p>

                </div>


                <!-- Bottom Hover Line -->

                <div
                    class="absolute bottom-0 left-0 w-0 h-[2px] bg-[#C9A227] group-hover:w-full transition-all duration-500"
                ></div>

            </div>



            <!-- ===================================== -->
            <!-- 04 HOTELS / CAFES / HOSPITALITY -->
            <!-- ===================================== -->

            <div
                class="group relative overflow-hidden bg-white border border-[#351B16]/8 p-6 sm:p-7 lg:p-8 min-h-[240px] sm:min-h-[260px] transition-all duration-500 hover:-translate-y-1 hover:shadow-xl"
            >

                <div
                    class="flex items-start justify-between"
                >

                    <span
                        class="font-montserrat text-[10px] sm:text-xs font-semibold tracking-[0.18em] text-[#C9A227]"
                    >
                        04
                    </span>


                    <!-- Icon -->

                    <div
                        class="w-10 h-10 sm:w-11 sm:h-11 rounded-full border border-[#C9A227]/40 flex items-center justify-center text-[#9B7614] group-hover:bg-[#351B16] group-hover:text-[#D4AF37] group-hover:border-[#351B16] transition-all duration-300"
                    >

                        <svg
                            class="w-4 h-4 sm:w-5 sm:h-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M4 10h16M5 10v9M19 10v9M3 19h18M6 7l6-4 6 4v3H6V7z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M9 19v-5h6v5"
                            />

                        </svg>

                    </div>

                </div>


                <div class="mt-10 sm:mt-12">

                    <h3
                        class="font-playfair text-[22px] sm:text-2xl font-semibold text-[#351B16]"
                    >
                        Hotels, Cafés & Hospitality
                    </h3>

                    <p
                        class="mt-3 font-montserrat text-[12px] sm:text-sm leading-5 sm:leading-6 text-[#351B16]/55"
                    >
                        Confectionery solutions for hospitality,
                        cafés, hotels and guest experiences.
                    </p>

                </div>


                <!-- Bottom Hover Line -->

                <div
                    class="absolute bottom-0 left-0 w-0 h-[2px] bg-[#C9A227] group-hover:w-full transition-all duration-500"
                ></div>

            </div>



            <!-- ===================================== -->
            <!-- 05 EVENTS & CELEBRATIONS -->
            <!-- ===================================== -->

            <div
                class="group relative overflow-hidden bg-white border border-[#351B16]/8 p-6 sm:p-7 lg:p-8 min-h-[240px] sm:min-h-[260px] transition-all duration-500 hover:-translate-y-1 hover:shadow-xl"
            >

                <div
                    class="flex items-start justify-between"
                >

                    <span
                        class="font-montserrat text-[10px] sm:text-xs font-semibold tracking-[0.18em] text-[#C9A227]"
                    >
                        05
                    </span>


                    <!-- Icon -->

                    <div
                        class="w-10 h-10 sm:w-11 sm:h-11 rounded-full border border-[#C9A227]/40 flex items-center justify-center text-[#9B7614] group-hover:bg-[#351B16] group-hover:text-[#D4AF37] group-hover:border-[#351B16] transition-all duration-300"
                    >

                        <svg
                            class="w-4 h-4 sm:w-5 sm:h-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M12 3l1.9 5.9H20l-4.8 3.5 1.8 5.9L12 14.8l-5 3.5 1.8-5.9L4 8.9h6.1L12 3z"
                            />

                        </svg>

                    </div>

                </div>


                <div class="mt-10 sm:mt-12">

                    <h3
                        class="font-playfair text-[22px] sm:text-2xl font-semibold text-[#351B16]"
                    >
                        Events & Celebrations
                    </h3>

                    <p
                        class="mt-3 font-montserrat text-[12px] sm:text-sm leading-5 sm:leading-6 text-[#351B16]/55"
                    >
                        Make celebrations memorable with chocolate
                        collections designed for special occasions.
                    </p>

                </div>


                <!-- Bottom Hover Line -->

                <div
                    class="absolute bottom-0 left-0 w-0 h-[2px] bg-[#C9A227] group-hover:w-full transition-all duration-500"
                ></div>

            </div>



            <!-- ===================================== -->
            <!-- 06 BUSINESS PARTNERSHIPS -->
            <!-- ===================================== -->

            <div
                class="group relative overflow-hidden bg-white border border-[#351B16]/8 p-6 sm:p-7 lg:p-8 min-h-[240px] sm:min-h-[260px] transition-all duration-500 hover:-translate-y-1 hover:shadow-xl"
            >

                <div
                    class="flex items-start justify-between"
                >

                    <span
                        class="font-montserrat text-[10px] sm:text-xs font-semibold tracking-[0.18em] text-[#C9A227]"
                    >
                        06
                    </span>


                    <!-- Icon -->

                    <div
                        class="w-10 h-10 sm:w-11 sm:h-11 rounded-full border border-[#C9A227]/40 flex items-center justify-center text-[#9B7614] group-hover:bg-[#351B16] group-hover:text-[#D4AF37] group-hover:border-[#351B16] transition-all duration-300"
                    >

                        <svg
                            class="w-4 h-4 sm:w-5 sm:h-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"
                            />

                            <circle
                                cx="9"
                                cy="7"
                                r="4"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"
                            />

                        </svg>

                    </div>

                </div>


                <div class="mt-10 sm:mt-12">

                    <h3
                        class="font-playfair text-[22px] sm:text-2xl font-semibold text-[#351B16]"
                    >
                        Business Partnerships
                    </h3>

                    <p
                        class="mt-3 font-montserrat text-[12px] sm:text-sm leading-5 sm:leading-6 text-[#351B16]/55"
                    >
                        Build a long-term relationship with Zimpy
                        around your business and market requirements.
                    </p>

                </div>


                <!-- Bottom Hover Line -->

                <div
                    class="absolute bottom-0 left-0 w-0 h-[2px] bg-[#C9A227] group-hover:w-full transition-all duration-500"
                ></div>

            </div>

        </div>


        <!-- ========================================= -->
        <!-- BOTTOM STATEMENT -->
        <!-- ========================================= -->

        <div
            class="mt-10 sm:mt-14 lg:mt-16 flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 text-center"
        >

            <span
                class="w-8 h-[1px] bg-[#C9A227]"
            ></span>

            <p
                class="font-montserrat text-[10px] sm:text-xs uppercase tracking-[0.16em] text-[#351B16]/45"
            >
                One confectionery partner. Multiple possibilities.
            </p>

            <span
                class="w-8 h-[1px] bg-[#C9A227]"
            ></span>

        </div>

    </div>

</section

<!-- ========================================= -->
<!-- CLIENT TESTIMONIALS -->
<!-- ========================================= -->

<section
    class="relative overflow-hidden bg-[#F8F3EC] py-14 sm:py-20 lg:py-28"
>

    <!-- ========================================= -->
    <!-- DECORATIVE BACKGROUND -->
    <!-- ========================================= -->

    <div
        class="absolute -top-20 -right-20 w-56 h-56 sm:w-72 sm:h-72 rounded-full border border-[#C9A227]/10"
    ></div>

    <div
        class="absolute -bottom-24 -left-24 w-64 h-64 sm:w-80 sm:h-80 rounded-full border border-[#C9A227]/10"
    ></div>


    <!-- ========================================= -->
    <!-- CONTAINER -->
    <!-- ========================================= -->

    <div
        class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-8"
    >


        <!-- ========================================= -->
        <!-- SECTION HEADER -->
        <!-- ========================================= -->

        <div
            class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6 mb-9 sm:mb-12 lg:mb-14"
        >

            <!-- LEFT -->

            <div class="max-w-2xl">

                <!-- Label -->

                <div
                    class="flex items-center gap-3 mb-4"
                >

                    <span
                        class="w-8 h-[1px] bg-[#C9A227]"
                    ></span>

                    <span
                        class="font-montserrat text-[10px] sm:text-xs font-semibold uppercase tracking-[0.2em] text-[#ED1C24]"
                    >
                        Client Testimonials
                    </span>

                </div>


                <!-- Heading -->

                <h2
                    class="font-playfair text-[30px] sm:text-4xl lg:text-[50px] leading-[1.12] font-semibold text-[#351B16]"
                >
                    Trusted by
                    <span class="text-[#ED1C24]">
                        businesses.
                    </span>
                </h2>


                <!-- Description -->

                <p
                    class="mt-4 font-montserrat text-[12px] sm:text-sm lg:text-base leading-6 sm:leading-7 text-[#351B16]/60 max-w-xl"
                >
                    Hear from businesses and partners who have
                    experienced Zimpy's products and confectionery
                    solutions.
                </p>

            </div>


            <!-- ========================================= -->
            <!-- NAVIGATION BUTTONS -->
            <!-- ========================================= -->

            <div
                class="flex items-center gap-2 shrink-0"
            >

                <!-- Previous -->

                <button
                    id="testimonialPrev"
                    type="button"
                    aria-label="Previous testimonial"
                    class="w-10 h-10 sm:w-11 sm:h-11 rounded-full border border-[#351B16]/15 bg-white flex items-center justify-center text-[#351B16] hover:bg-[#351B16] hover:text-white hover:border-[#351B16] transition-all duration-300"
                >

                    <svg
                        class="w-4 h-4"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.7"
                            d="M15 18l-6-6 6-6"
                        />

                    </svg>

                </button>


                <!-- Next -->

                <button
                    id="testimonialNext"
                    type="button"
                    aria-label="Next testimonial"
                    class="w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-[#351B16] text-white flex items-center justify-center border border-[#351B16] hover:bg-[#C9A227] hover:border-[#C9A227] hover:text-[#351B16] transition-all duration-300"
                >

                    <svg
                        class="w-4 h-4"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.7"
                            d="M9 18l6-6-6-6"
                        />

                    </svg>

                </button>

            </div>

        </div>



        <!-- ========================================= -->
        <!-- TESTIMONIAL CAROUSEL -->
        <!-- ========================================= -->

        <div
            id="testimonialCarousel"
            class="flex gap-4 sm:gap-5 overflow-x-auto snap-x snap-mandatory scroll-smooth cursor-grab active:cursor-grabbing pb-3
                   [scrollbar-width:none]
                   [-ms-overflow-style:none]
                   [&::-webkit-scrollbar]:hidden"
        >


            <!-- ===================================== -->
            <!-- TESTIMONIAL 01 -->
            <!-- ===================================== -->

            <article
                class="testimonial-card group relative flex-none w-[88%] sm:w-[48%] lg:w-[32%] snap-start bg-white border border-[#351B16]/8 p-6 sm:p-7 lg:p-8"
            >

                <!-- Quote -->

                <div
                    class="absolute top-5 right-6 sm:top-6 sm:right-7 font-playfair text-5xl sm:text-6xl leading-none text-[#C9A227]/20 select-none"
                >
                    “
                </div>


                <!-- Stars -->

                <div
                    class="flex gap-1 mb-6"
                >

                    <span class="text-[#ED1C24] text-sm">★</span>
                    <span class="text-[#ED1C24] text-sm">★</span>
                    <span class="text-[#ED1C24] text-sm">★</span>
                    <span class="text-[#ED1C24] text-sm">★</span>
                    <span class="text-[#ED1C24] text-sm">★</span>

                </div>


                <!-- Testimonial -->

                <p
                    class="font-playfair text-[17px] sm:text-lg lg:text-xl leading-7 sm:leading-8 text-[#351B16]"
                >
                    “Zimpy has been a dependable confectionery
                    partner for our business. The product range
                    and consistency have made working together
                    a smooth experience.”
                </p>


                <!-- Divider -->

                <div
                    class="w-10 h-[1px] bg-[#C9A227] my-6"
                ></div>


                <!-- Client -->

                <div>

                    <h3
                        class="font-montserrat text-sm font-semibold text-[#351B16]"
                    >
                        Rajesh Mehta
                    </h3>

                    <p
                        class="mt-1 font-montserrat text-[11px] uppercase tracking-[0.12em] text-[#351B16]/45"
                    >
                        Retail Partner
                    </p>

                </div>

            </article>



            <!-- ===================================== -->
            <!-- TESTIMONIAL 02 -->
            <!-- ===================================== -->

            <article
                class="testimonial-card group relative flex-none w-[88%] sm:w-[48%] lg:w-[32%] snap-start bg-white border border-[#351B16]/8 p-6 sm:p-7 lg:p-8"
            >

                <div
                    class="absolute top-5 right-6 sm:top-6 sm:right-7 font-playfair text-5xl sm:text-6xl leading-none text-[#ED1C24]/20 select-none"
                >
                    “
                </div>


                <div
                    class="flex gap-1 mb-6"
                >

                    <span class="text-[#ED1C24] text-sm">★</span>
                    <span class="text-[#ED1C24] text-sm">★</span>
                    <span class="text-[#ED1C24] text-sm">★</span>
                    <span class="text-[#ED1C24] text-sm">★</span>
                    <span class="text-[#ED1C24] text-sm">★</span>

                </div>


                <p
                    class="font-playfair text-[17px] sm:text-lg lg:text-xl leading-7 sm:leading-8 text-[#351B16]"
                >
                    “The variety of products gives us the
                    flexibility to serve different customer
                    requirements. Zimpy has been a valuable
                    addition to our product portfolio.”
                </p>


                <div
                    class="w-10 h-[1px] bg-[#C9A227] my-6"
                ></div>


                <div>

                    <h3
                        class="font-montserrat text-sm font-semibold text-[#351B16]"
                    >
                        Amit Shah
                    </h3>

                    <p
                        class="mt-1 font-montserrat text-[11px] uppercase tracking-[0.12em] text-[#351B16]/45"
                    >
                        Distribution Partner
                    </p>

                </div>

            </article>



            <!-- ===================================== -->
            <!-- TESTIMONIAL 03 -->
            <!-- ===================================== -->

            <article
                class="testimonial-card group relative flex-none w-[88%] sm:w-[48%] lg:w-[32%] snap-start bg-white border border-[#351B16]/8 p-6 sm:p-7 lg:p-8"
            >

                <div
                    class="absolute top-5 right-6 sm:top-6 sm:right-7 font-playfair text-5xl sm:text-6xl leading-none text-[#ED1C24]/20 select-none"
                >
                    “
                </div>


                <div
                    class="flex gap-1 mb-6"
                >

                    <span class="text-[#ED1C24] text-sm">★</span>
                    <span class="text-[#ED1C24] text-sm">★</span>
                    <span class="text-[#ED1C24] text-sm">★</span>
                    <span class="text-[#ED1C24] text-sm">★</span>
                    <span class="text-[#ED1C24] text-sm">★</span>

                </div>


                <p
                    class="font-playfair text-[17px] sm:text-lg lg:text-xl leading-7 sm:leading-8 text-[#351B16]"
                >
                    “The gifting collections are well presented
                    and work beautifully for festive and
                    corporate occasions. The team has been
                    responsive throughout our association.”
                </p>


                <div
                    class="w-10 h-[1px] bg-[#C9A227] my-6"
                ></div>


                <div>

                    <h3
                        class="font-montserrat text-sm font-semibold text-[#351B16]"
                    >
                        Neha Kapoor
                    </h3>

                    <p
                        class="mt-1 font-montserrat text-[11px] uppercase tracking-[0.12em] text-[#351B16]/45"
                    >
                        Corporate Client
                    </p>

                </div>

            </article>



            <!-- ===================================== -->
            <!-- TESTIMONIAL 04 -->
            <!-- ===================================== -->

            <article
                class="testimonial-card group relative flex-none w-[88%] sm:w-[48%] lg:w-[32%] snap-start bg-white border border-[#351B16]/8 p-6 sm:p-7 lg:p-8"
            >

                <div
                    class="absolute top-5 right-6 sm:top-6 sm:right-7 font-playfair text-5xl sm:text-6xl leading-none text-[#ED1C24]/20 select-none"
                >
                    “
                </div>


                <div
                    class="flex gap-1 mb-6"
                >

                    <span class="text-[#ED1C24] text-sm">★</span>
                    <span class="text-[#ED1C24] text-sm">★</span>
                    <span class="text-[#ED1C24] text-sm">★</span>
                    <span class="text-[#ED1C24] text-sm">★</span>
                    <span class="text-[#ED1C24] text-sm">★</span>

                </div>


                <p
                    class="font-playfair text-[17px] sm:text-lg lg:text-xl leading-7 sm:leading-8 text-[#351B16]"
                >
                    “Zimpy offers a strong combination of
                    product variety and presentation. Their
                    collections have worked well for our
                    seasonal requirements.”
                </p>


                <div
                    class="w-10 h-[1px] bg-[#C9A227] my-6"
                ></div>


                <div>

                    <h3
                        class="font-montserrat text-sm font-semibold text-[#351B16]"
                    >
                        Priya Desai
                    </h3>

                    <p
                        class="mt-1 font-montserrat text-[11px] uppercase tracking-[0.12em] text-[#351B16]/45"
                    >
                        Hospitality Partner
                    </p>

                </div>

            </article>



            <!-- ===================================== -->
            <!-- TESTIMONIAL 05 -->
            <!-- ===================================== -->

            <article
                class="testimonial-card group relative flex-none w-[88%] sm:w-[48%] lg:w-[32%] snap-start bg-white border border-[#351B16]/8 p-6 sm:p-7 lg:p-8"
            >

                <div
                    class="absolute top-5 right-6 sm:top-6 sm:right-7 font-playfair text-5xl sm:text-6xl leading-none text-[#ED1C24]/20 select-none"
                >
                    “
                </div>


                <div
                    class="flex gap-1 mb-6"
                >

                    <span class="text-[#ED1C24] text-sm">★</span>
                    <span class="text-[#ED1C24] text-sm">★</span>
                    <span class="text-[#ED1C24] text-sm">★</span>
                    <span class="text-[#ED1C24] text-sm">★</span>
                    <span class="text-[#ED1C24] text-sm">★</span>

                </div>


                <p
                    class="font-playfair text-[17px] sm:text-lg lg:text-xl leading-7 sm:leading-8 text-[#351B16]"
                >
                    “We appreciate the range of options available
                    across different price points. It makes
                    planning our chocolate requirements much
                    easier.”
                </p>


                <div
                    class="w-10 h-[1px] bg-[#C9A227] my-6"
                ></div>


                <div>

                    <h3
                        class="font-montserrat text-sm font-semibold text-[#351B16]"
                    >
                        Kunal Patil
                    </h3>

                    <p
                        class="mt-1 font-montserrat text-[11px] uppercase tracking-[0.12em] text-[#351B16]/45"
                    >
                        Wholesale Partner
                    </p>

                </div>

            </article>

        </div>



        <!-- ========================================= -->
        <!-- DOT INDICATORS -->
        <!-- ========================================= -->

        <div
            id="testimonialDots"
            class="flex items-center justify-center gap-2 mt-6 sm:mt-8"
        >

            <button
                type="button"
                data-slide="0"
                aria-label="Go to testimonial 1"
                class="testimonial-dot w-6 h-1.5 rounded-full bg-[#351B16] transition-all duration-300"
            ></button>

            <button
                type="button"
                data-slide="1"
                aria-label="Go to testimonial 2"
                class="testimonial-dot w-1.5 h-1.5 rounded-full bg-[#351B16]/20 transition-all duration-300"
            ></button>

            <button
                type="button"
                data-slide="2"
                aria-label="Go to testimonial 3"
                class="testimonial-dot w-1.5 h-1.5 rounded-full bg-[#351B16]/20 transition-all duration-300"
            ></button>

            <button
                type="button"
                data-slide="3"
                aria-label="Go to testimonial 4"
                class="testimonial-dot w-1.5 h-1.5 rounded-full bg-[#351B16]/20 transition-all duration-300"
            ></button>

            <button
                type="button"
                data-slide="4"
                aria-label="Go to testimonial 5"
                class="testimonial-dot w-1.5 h-1.5 rounded-full bg-[#351B16]/20 transition-all duration-300"
            ></button>

        </div>

    </div>

</section>



<!-- ========================================= -->
<!-- TESTIMONIAL CAROUSEL JAVASCRIPT -->
<!-- ========================================= -->

<script>

    const testimonialCarousel =
        document.getElementById("testimonialCarousel");

    const testimonialPrev =
        document.getElementById("testimonialPrev");

    const testimonialNext =
        document.getElementById("testimonialNext");

    const testimonialCards =
        document.querySelectorAll(".testimonial-card");

    const testimonialDots =
        document.querySelectorAll(".testimonial-dot");


    let testimonialIndex = 0;


    /* ========================================= */
    /* GET CARD POSITION */
    /* ========================================= */

    function getCardPosition(index) {

        const card =
            testimonialCards[index];

        if (!card) return;

        const carouselLeft =
            testimonialCarousel.getBoundingClientRect().left;

        const cardLeft =
            card.getBoundingClientRect().left;

        const scrollAmount =
            cardLeft - carouselLeft +
            testimonialCarousel.scrollLeft;

        testimonialCarousel.scrollTo({

            left: scrollAmount,

            behavior: "smooth"

        });

    }


    /* ========================================= */
    /* UPDATE DOTS */
    /* ========================================= */

    function updateTestimonialDots(index) {

        testimonialDots.forEach((dot, i) => {

            if (i === index) {

                dot.classList.remove(
                    "w-1.5",
                    "bg-[#351B16]/20"
                );

                dot.classList.add(
                    "w-6",
                    "bg-[#351B16]"
                );

            } else {

                dot.classList.remove(
                    "w-6",
                    "bg-[#351B16]"
                );

                dot.classList.add(
                    "w-1.5",
                    "bg-[#351B16]/20"
                );

            }

        });

    }


    /* ========================================= */
    /* NEXT */
    /* ========================================= */

    testimonialNext.addEventListener(
        "click",
        () => {

            testimonialIndex++;

            if (
                testimonialIndex >=
                testimonialCards.length
            ) {

                testimonialIndex = 0;

            }

            getCardPosition(testimonialIndex);

            updateTestimonialDots(
                testimonialIndex
            );

        }
    );


    /* ========================================= */
    /* PREVIOUS */
    /* ========================================= */

    testimonialPrev.addEventListener(
        "click",
        () => {

            testimonialIndex--;

            if (
                testimonialIndex < 0
            ) {

                testimonialIndex =
                    testimonialCards.length - 1;

            }

            getCardPosition(testimonialIndex);

            updateTestimonialDots(
                testimonialIndex
            );

        }
    );


    /* ========================================= */
    /* DOT CLICK */
    /* ========================================= */

    testimonialDots.forEach(
        (dot) => {

            dot.addEventListener(
                "click",
                () => {

                    const index =
                        Number(
                            dot.dataset.slide
                        );

                    testimonialIndex =
                        index;

                    getCardPosition(
                        testimonialIndex
                    );

                    updateTestimonialDots(
                        testimonialIndex
                    );

                }
            );

        }
    );


    /* ========================================= */
    /* DETECT MANUAL SWIPE / SCROLL */
    /* ========================================= */

    let scrollTimeout;

    testimonialCarousel.addEventListener(
        "scroll",
        () => {

            clearTimeout(
                scrollTimeout
            );

            scrollTimeout = setTimeout(
                () => {

                    let closestIndex = 0;

                    let closestDistance =
                        Infinity;

                    testimonialCards.forEach(
                        (card, index) => {

                            const distance =
                                Math.abs(
                                    card.offsetLeft -
                                    testimonialCarousel.scrollLeft
                                );

                            if (
                                distance <
                                closestDistance
                            ) {

                                closestDistance =
                                    distance;

                                closestIndex =
                                    index;

                            }

                        }
                    );


                    testimonialIndex =
                        closestIndex;

                    updateTestimonialDots(
                        closestIndex
                    );

                },
                100
            );

        }
    );

</script>



    <?php
    include "./footer.php"
    ?>

</body>
<!-- ============ ANIMATIONS (JS) ============ -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;
        const $$ = (s, r = document) => [...r.querySelectorAll(s)];

        /* 1. Scroll progress bar */
        const bar = document.createElement('div');
        bar.id = 'scrollProgress';
        document.body.appendChild(bar);
        const onScroll = () => {
            const h = document.documentElement.scrollHeight - innerHeight;
            bar.style.transform = `scaleX(${h > 0 ? scrollY / h : 0})`;
        };
        addEventListener('scroll', onScroll, {
            passive: true
        });
        onScroll();

        /* 2. Hero push-in synced to the carousel */
        const track = document.getElementById('carouselTrack');
        if (track && !reduce) {
            const imgs = [...track.children];
            const sync = () => {
                const m = /translateX\(-?([\d.]+)%\)/.exec(track.style.transform || '');
                const idx = m ? Math.round(parseFloat(m[1]) / 100) : 0;
                imgs.forEach((img, i) => {
                    if (i === idx) {
                        img.classList.remove('is-active');
                        void img.offsetWidth;
                        img.classList.add('is-active');
                    } else img.classList.remove('is-active');
                });
            };
            new MutationObserver(sync).observe(track, {
                attributes: true,
                attributeFilter: ['style']
            });
            sync();
        }

        if (reduce) return;
        document.documentElement.classList.add('js-anim');

        /* 3. Choose what reveals, and in what order */
        const reveal = (els, cls = '', step = 90) =>
            els.forEach((el, i) => {
                el.classList.add('reveal');
                cls.split(' ').filter(Boolean).forEach(c => el.classList.add(c));
                el.style.setProperty('--d', `${i * step}ms`);
            });

        // About: photo from left, text staggered, offset block slides out
        const about = document.getElementById('about');
        if (about) {
            const img = about.querySelector('.lg\\:col-span-5');
            const txt = about.querySelector('.lg\\:col-span-7');
            if (img) reveal([img], 'from-left');
            if (txt) {
                const strip = txt.querySelector('.mt-10');
                reveal([...txt.children].filter(c => c !== strip), '', 110);
                if (strip) reveal([...strip.children], '', 120);
            }
            const block = about.querySelector('.bg-dreizack-green.absolute');
            if (block) block.classList.add('about-block');
        }

        // Card groups: stagger within each grid
        ['.why-card', '.app-card', '.proj-card', '.feat-card'].forEach(sel => {
            const groups = new Map();
            $$(sel).forEach(el => {
                if (!groups.has(el.parentElement)) groups.set(el.parentElement, []);
                groups.get(el.parentElement).push(el);
            });
            groups.forEach(list => reveal(list, '', 110));
        });

        // Manufacturing process: steps appear in sequence with arrows
        const firstStep = document.querySelector('.step');
        if (firstStep) {
            const flow = firstStep.parentElement;
            [...flow.children].forEach((el, i) => {
                if (el.classList.contains('step')) reveal([el], 'pop');
                else el.classList.add('flow-arrow');
                el.style.setProperty('--d', `${i * 130}ms`);
            });
            const last = flow.querySelector('.step:last-child .step-badge');
            if (last) last.classList.add('pulse-ring');
            const procImg = flow.closest('section')?.querySelector('.lg\\:col-span-6.relative');
            if (procImg) reveal([procImg], 'from-right');
        }

        /* 4. Trigger on scroll; clean up afterwards so your hover styles take over */
        const io = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (!e.isIntersecting) return;
                const el = e.target;
                el.classList.add('in');
                io.unobserve(el);
                const delay = parseFloat(el.style.getPropertyValue('--d')) || 0;
                setTimeout(() => {
                    el.classList.remove('reveal', 'from-left', 'from-right', 'pop', 'flow-arrow', 'about-block', 'in');
                    el.style.removeProperty('--d');
                }, delay + 1100);
            });
        }, {
            threshold: 0.15,
            rootMargin: '0px 0px -8% 0px'
        });

        $$('.reveal, .flow-arrow, .about-block').forEach(el => io.observe(el));
    });
</script>

</html>