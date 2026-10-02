<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
    include "./navbar.php"
    ?>
<!-- =========================
     PRODUCTS PAGE HERO
========================= -->

<section class="relative overflow-hidden bg-[#5A211D]">

    <!-- Decorative Gold Glow -->
    <div class="absolute -top-32 -right-32
                w-80 h-80
                bg-[#C9A24A]/10
                rounded-full
                blur-3xl">
    </div>

    <div class="absolute -bottom-32 -left-32
                w-80 h-80
                bg-[#A51C30]/20
                rounded-full
                blur-3xl">
    </div>



    <!-- Hero Content -->
    <div class="relative max-w-5xl mx-auto px-5">

        <div class="min-h-[360px] md:min-h-[410px]
                    flex items-center justify-center">

            <div class="text-center max-w-3xl mx-auto">


                <!-- Small Label -->
                <div class="flex items-center justify-center gap-3 mb-5">

                    <span class="w-10 h-[1px] bg-[#D8B866]"></span>

                    <span class="text-[#E2C77D]
                                 text-xs
                                 font-semibold
                                 tracking-[0.22em]
                                 uppercase">

                        Zimpy Chocolates

                    </span>

                    <span class="w-10 h-[1px] bg-[#D8B866]"></span>

                </div>


                <!-- Main Heading -->
                <h1 class="text-3xl
                           sm:text-4xl
                           md:text-5xl
                           font-bold
                           leading-tight
                           text-white">

                    Discover the

                    <span class="block text-[#E2C77D] mt-1">
                        Zimpy Range
                    </span>

                </h1>


                <!-- Description -->
                <p class="mt-5
                          max-w-2xl
                          mx-auto
                          text-sm
                          md:text-base
                          leading-7
                          text-[#F4E5D3]">

                    From everyday favourites to premium chocolates and
                    gifting collections, explore the diverse range of
                    confectionery products from Zimpy.

                </p>


                <!-- Gold Divider -->
                <div class="flex items-center justify-center gap-3 mt-6">

                    <span class="w-14 h-[1px] bg-[#C9A24A]"></span>

                    <span class="w-2 h-2 rotate-45 bg-[#C9A24A]"></span>

                    <span class="w-14 h-[1px] bg-[#C9A24A]"></span>

                </div>


            </div>

        </div>

    </div>

</section>


    <!-- =========================
     ZIMPY PRODUCTS SECTION
========================= -->

<section class="bg-[#FFF8EE] py-16 md:py-20">

    <!-- =========================
         PRODUCT 1 - LOVITA
    ========================== -->

    <div class="max-w-6xl mx-auto px-5 mb-20 md:mb-24">

        <div class="grid md:grid-cols-2 gap-8 md:gap-14 items-center">

            <!-- Image -->
            <div class="overflow-hidden rounded-2xl bg-[#F4E5D3]">
                <img
                    src="images/lovita.jpg"
                    alt="Zimpy Lovita"
                    class="w-full h-[280px] md:h-[380px] object-cover hover:scale-105 transition duration-500"
                >
            </div>

            <!-- Content -->
            <div class="md:pr-10">

                <span class="text-[#C9A24A] text-xs font-semibold uppercase tracking-[0.18em]">
                    Zimpy Collection
                </span>

                <h3 class="mt-2 text-2xl md:text-3xl font-bold text-[#54251F]">
                    Lovita
                </h3>

                <div class="w-12 h-[2px] bg-[#A51C30] mt-4 mb-5"></div>

                <p class="text-sm md:text-base leading-7 text-[#6B4A43]">
                    Discover Lovita, a delightful part of the Zimpy confectionery
                    range, created to bring rich flavour and an enjoyable chocolate
                    experience to every occasion.
                </p>

                <a href="#"
                    class="inline-flex items-center gap-2 mt-7 bg-[#A51C30] hover:bg-[#861626]
                    text-white text-sm font-semibold px-6 py-3 rounded-full transition duration-300">

                    See Product

                    <span class="text-base">→</span>

                </a>

            </div>

        </div>

    </div>


    <!-- =========================
         PRODUCT 2 - DAIRY LUXE
    ========================== -->

    <div class="max-w-6xl mx-auto px-5 mb-20 md:mb-24">

        <div class="grid md:grid-cols-2 gap-8 md:gap-14 items-center">

            <!-- Content -->
            <div class="md:pl-10 md:order-1">

                <span class="text-[#C9A24A] text-xs font-semibold uppercase tracking-[0.18em]">
                    Zimpy Collection
                </span>

                <h3 class="mt-2 text-2xl md:text-3xl font-bold text-[#54251F]">
                    Dairy Luxe
                </h3>

                <div class="w-12 h-[2px] bg-[#A51C30] mt-4 mb-5"></div>

                <p class="text-sm md:text-base leading-7 text-[#6B4A43]">
                    Dairy Luxe brings together a smooth and indulgent chocolate
                    experience, making it a wonderful choice for everyday enjoyment
                    and chocolate lovers.
                </p>

                <a href="#"
                    class="inline-flex items-center gap-2 mt-7 bg-[#A51C30] hover:bg-[#861626]
                    text-white text-sm font-semibold px-6 py-3 rounded-full transition duration-300">

                    See Product

                    <span class="text-base">→</span>

                </a>

            </div>

            <!-- Image -->
            <div class="overflow-hidden rounded-2xl bg-[#F4E5D3] md:order-2">

                <img
                    src="images/dairy-luxe.jpg"
                    alt="Zimpy Dairy Luxe"
                    class="w-full h-[280px] md:h-[380px] object-cover hover:scale-105 transition duration-500"
                >

            </div>

        </div>

    </div>


    <!-- =========================
         PRODUCT 3 - GLORIA
    ========================== -->

    <div class="max-w-6xl mx-auto px-5 mb-20 md:mb-24">

        <div class="grid md:grid-cols-2 gap-8 md:gap-14 items-center">

            <!-- Image -->
            <div class="overflow-hidden rounded-2xl bg-[#F4E5D3]">

                <img
                    src="images/gloria.jpg"
                    alt="Zimpy Gloria"
                    class="w-full h-[280px] md:h-[380px] object-cover hover:scale-105 transition duration-500"
                >

            </div>

            <!-- Content -->
            <div class="md:pr-10">

                <span class="text-[#C9A24A] text-xs font-semibold uppercase tracking-[0.18em]">
                    Zimpy Collection
                </span>

                <h3 class="mt-2 text-2xl md:text-3xl font-bold text-[#54251F]">
                    Gloria
                </h3>

                <div class="w-12 h-[2px] bg-[#A51C30] mt-4 mb-5"></div>

                <p class="text-sm md:text-base leading-7 text-[#6B4A43]">
                    Gloria is part of the Zimpy range, offering a delicious
                    confectionery experience with the rich character and quality
                    associated with the brand.
                </p>

                <a href="#"
                    class="inline-flex items-center gap-2 mt-7 bg-[#A51C30] hover:bg-[#861626]
                    text-white text-sm font-semibold px-6 py-3 rounded-full transition duration-300">

                    See Product

                    <span class="text-base">→</span>

                </a>

            </div>

        </div>

    </div>


    <!-- =========================
         PRODUCT 4 - CHOCO SURFER
    ========================== -->

    <div class="max-w-6xl mx-auto px-5 mb-20 md:mb-24">

        <div class="grid md:grid-cols-2 gap-8 md:gap-14 items-center">

            <!-- Content -->
            <div class="md:pl-10 md:order-1">

                <span class="text-[#C9A24A] text-xs font-semibold uppercase tracking-[0.18em]">
                    Zimpy Collection
                </span>

                <h3 class="mt-2 text-2xl md:text-3xl font-bold text-[#54251F]">
                    Choco Surfer
                </h3>

                <div class="w-12 h-[2px] bg-[#A51C30] mt-4 mb-5"></div>

                <p class="text-sm md:text-base leading-7 text-[#6B4A43]">
                    Choco Surfer adds another exciting choice to the Zimpy chocolate
                    portfolio, bringing together flavour and an enjoyable
                    confectionery experience.
                </p>

                <a href="#"
                    class="inline-flex items-center gap-2 mt-7 bg-[#A51C30] hover:bg-[#861626]
                    text-white text-sm font-semibold px-6 py-3 rounded-full transition duration-300">

                    See Product

                    <span class="text-base">→</span>

                </a>

            </div>

            <!-- Image -->
            <div class="overflow-hidden rounded-2xl bg-[#F4E5D3] md:order-2">

                <img
                    src="images/choco-surfer.jpg"
                    alt="Zimpy Choco Surfer"
                    class="w-full h-[280px] md:h-[380px] object-cover hover:scale-105 transition duration-500"
                >

            </div>

        </div>

    </div>


    <!-- =========================
         PRODUCT 5 - GRACIA
    ========================== -->

    <div class="max-w-6xl mx-auto px-5 mb-20 md:mb-24">

        <div class="grid md:grid-cols-2 gap-8 md:gap-14 items-center">

            <!-- Image -->
            <div class="overflow-hidden rounded-2xl bg-[#F4E5D3]">

                <img
                    src="images/gracia.jpg"
                    alt="Zimpy Gracia"
                    class="w-full h-[280px] md:h-[380px] object-cover hover:scale-105 transition duration-500"
                >

            </div>

            <!-- Content -->
            <div class="md:pr-10">

                <span class="text-[#C9A24A] text-xs font-semibold uppercase tracking-[0.18em]">
                    Zimpy Collection
                </span>

                <h3 class="mt-2 text-2xl md:text-3xl font-bold text-[#54251F]">
                    Gracia
                </h3>

                <div class="w-12 h-[2px] bg-[#A51C30] mt-4 mb-5"></div>

                <p class="text-sm md:text-base leading-7 text-[#6B4A43]">
                    Gracia is crafted as part of the diverse Zimpy confectionery
                    portfolio, offering customers another delicious choice from
                    the brand.
                </p>

                <a href="#"
                    class="inline-flex items-center gap-2 mt-7 bg-[#A51C30] hover:bg-[#861626]
                    text-white text-sm font-semibold px-6 py-3 rounded-full transition duration-300">

                    See Product

                    <span class="text-base">→</span>

                </a>

            </div>

        </div>

    </div>


    <!-- =========================
         PRODUCT 6 - CHOCO LUSH
    ========================== -->

    <div class="max-w-6xl mx-auto px-5 mb-20 md:mb-24">

        <div class="grid md:grid-cols-2 gap-8 md:gap-14 items-center">

            <!-- Content -->
            <div class="md:pl-10">

                <span class="text-[#C9A24A] text-xs font-semibold uppercase tracking-[0.18em]">
                    Zimpy Collection
                </span>

                <h3 class="mt-2 text-2xl md:text-3xl font-bold text-[#54251F]">
                    Choco Lush
                </h3>

                <div class="w-12 h-[2px] bg-[#A51C30] mt-4 mb-5"></div>

                <p class="text-sm md:text-base leading-7 text-[#6B4A43]">
                    Choco Lush brings together the indulgent character of chocolate
                    with a range designed for enjoyable everyday moments.
                </p>

                <a href="#"
                    class="inline-flex items-center gap-2 mt-7 bg-[#A51C30] hover:bg-[#861626]
                    text-white text-sm font-semibold px-6 py-3 rounded-full transition duration-300">

                    See Product

                    <span class="text-base">→</span>

                </a>

            </div>

            <!-- Image -->
            <div class="overflow-hidden rounded-2xl bg-[#F4E5D3]">

                <img
                    src="images/choco-lush.jpg"
                    alt="Zimpy Choco Lush"
                    class="w-full h-[280px] md:h-[380px] object-cover hover:scale-105 transition duration-500"
                >

            </div>

        </div>

    </div>


    <!-- =========================
         PRODUCT 7 - LE REVE
    ========================== -->

    <div class="max-w-6xl mx-auto px-5 mb-20 md:mb-24">

        <div class="grid md:grid-cols-2 gap-8 md:gap-14 items-center">

            <div class="overflow-hidden rounded-2xl bg-[#F4E5D3]">

                <img
                    src="images/le-reve.jpg"
                    alt="Zimpy Le Reve"
                    class="w-full h-[280px] md:h-[380px] object-cover hover:scale-105 transition duration-500"
                >

            </div>

            <div class="md:pr-10">

                <span class="text-[#C9A24A] text-xs font-semibold uppercase tracking-[0.18em]">
                    Zimpy Collection
                </span>

                <h3 class="mt-2 text-2xl md:text-3xl font-bold text-[#54251F]">
                    Le Reve
                </h3>

                <div class="w-12 h-[2px] bg-[#A51C30] mt-4 mb-5"></div>

                <p class="text-sm md:text-base leading-7 text-[#6B4A43]">
                    Le Reve adds a refined touch to the Zimpy portfolio, created
                    for those looking for an indulgent chocolate experience.
                </p>

                <a href="#"
                    class="inline-flex items-center gap-2 mt-7 bg-[#A51C30] hover:bg-[#861626]
                    text-white text-sm font-semibold px-6 py-3 rounded-full transition duration-300">

                    See Product <span>→</span>

                </a>

            </div>

        </div>

    </div>


    <!-- =========================
         PRODUCT 8 - ORLEN
    ========================== -->

    <div class="max-w-6xl mx-auto px-5 mb-20 md:mb-24">

        <div class="grid md:grid-cols-2 gap-8 md:gap-14 items-center">

            <div class="md:pl-10 md:order-1">

                <span class="text-[#C9A24A] text-xs font-semibold uppercase tracking-[0.18em]">
                    Zimpy Collection
                </span>

                <h3 class="mt-2 text-2xl md:text-3xl font-bold text-[#54251F]">
                    Orlen
                </h3>

                <div class="w-12 h-[2px] bg-[#A51C30] mt-4 mb-5"></div>

                <p class="text-sm md:text-base leading-7 text-[#6B4A43]">
                    Orlen is part of the Zimpy confectionery range, offering
                    another distinctive choice for chocolate and confectionery
                    lovers.
                </p>

                <a href="#"
                    class="inline-flex items-center gap-2 mt-7 bg-[#A51C30] hover:bg-[#861626]
                    text-white text-sm font-semibold px-6 py-3 rounded-full transition duration-300">

                    See Product <span>→</span>

                </a>

            </div>

            <div class="overflow-hidden rounded-2xl bg-[#F4E5D3] md:order-2">

                <img
                    src="images/orlen.jpg"
                    alt="Zimpy Orlen"
                    class="w-full h-[280px] md:h-[380px] object-cover hover:scale-105 transition duration-500"
                >

            </div>

        </div>

    </div>


    <!-- =========================
         PRODUCT 9 - GREETINGS
    ========================== -->

    <div class="max-w-6xl mx-auto px-5 mb-20 md:mb-24">

        <div class="grid md:grid-cols-2 gap-8 md:gap-14 items-center">

            <div class="overflow-hidden rounded-2xl bg-[#F4E5D3]">

                <img
                    src="images/greetings.jpg"
                    alt="Zimpy Greetings"
                    class="w-full h-[280px] md:h-[380px] object-cover hover:scale-105 transition duration-500"
                >

            </div>

            <div class="md:pr-10">

                <span class="text-[#C9A24A] text-xs font-semibold uppercase tracking-[0.18em]">
                    Gifting Collection
                </span>

                <h3 class="mt-2 text-2xl md:text-3xl font-bold text-[#54251F]">
                    Greetings
                </h3>

                <div class="w-12 h-[2px] bg-[#A51C30] mt-4 mb-5"></div>

                <p class="text-sm md:text-base leading-7 text-[#6B4A43]">
                    Zimpy Greetings brings together chocolate gifting with a
                    presentation designed for celebrations, occasions and
                    thoughtful moments.
                </p>

                <a href="#"
                    class="inline-flex items-center gap-2 mt-7 bg-[#A51C30] hover:bg-[#861626]
                    text-white text-sm font-semibold px-6 py-3 rounded-full transition duration-300">

                    See Product <span>→</span>

                </a>

            </div>

        </div>

    </div>


    <!-- =========================
         PRODUCT 10 - GOA SPECIAL
    ========================== -->

    <div class="max-w-6xl mx-auto px-5 mb-20 md:mb-24">

        <div class="grid md:grid-cols-2 gap-8 md:gap-14 items-center">

            <div class="md:pl-10 md:order-1">

                <span class="text-[#C9A24A] text-xs font-semibold uppercase tracking-[0.18em]">
                    Special Collection
                </span>

                <h3 class="mt-2 text-2xl md:text-3xl font-bold text-[#54251F]">
                    Goa Special
                </h3>

                <div class="w-12 h-[2px] bg-[#A51C30] mt-4 mb-5"></div>

                <p class="text-sm md:text-base leading-7 text-[#6B4A43]">
                    Goa Special is a distinctive part of the Zimpy collection,
                    bringing together chocolate and regional character in a
                    special product offering.
                </p>

                <a href="#"
                    class="inline-flex items-center gap-2 mt-7 bg-[#A51C30] hover:bg-[#861626]
                    text-white text-sm font-semibold px-6 py-3 rounded-full transition duration-300">

                    See Product <span>→</span>

                </a>

            </div>

            <div class="overflow-hidden rounded-2xl bg-[#F4E5D3] md:order-2">

                <img
                    src="images/goa-special.jpg"
                    alt="Zimpy Goa Special"
                    class="w-full h-[280px] md:h-[380px] object-cover hover:scale-105 transition duration-500"
                >

            </div>

        </div>

    </div>


    <!-- =========================
         PRODUCT 11 - GOLDEN MOMENTS
    ========================== -->

    <div class="max-w-6xl mx-auto px-5 mb-20 md:mb-24">

        <div class="grid md:grid-cols-2 gap-8 md:gap-14 items-center">

            <div class="overflow-hidden rounded-2xl bg-[#F4E5D3]">

                <img
                    src="images/golden-moments.jpg"
                    alt="Zimpy Golden Moments"
                    class="w-full h-[280px] md:h-[380px] object-cover hover:scale-105 transition duration-500"
                >

            </div>

            <div class="md:pr-10">

                <span class="text-[#C9A24A] text-xs font-semibold uppercase tracking-[0.18em]">
                    Gifting Collection
                </span>

                <h3 class="mt-2 text-2xl md:text-3xl font-bold text-[#54251F]">
                    Golden Moments
                </h3>

                <div class="w-12 h-[2px] bg-[#A51C30] mt-4 mb-5"></div>

                <p class="text-sm md:text-base leading-7 text-[#6B4A43]">
                    Golden Moments is created for occasions worth celebrating,
                    adding a premium touch to the Zimpy gifting portfolio.
                </p>

                <a href="#"
                    class="inline-flex items-center gap-2 mt-7 bg-[#A51C30] hover:bg-[#861626]
                    text-white text-sm font-semibold px-6 py-3 rounded-full transition duration-300">

                    See Product <span>→</span>

                </a>

            </div>

        </div>

    </div>


    <!-- =========================
         PRODUCT 12 - PREMIUM PRALINES
    ========================== -->

    <div class="max-w-6xl mx-auto px-5 mb-20 md:mb-24">

        <div class="grid md:grid-cols-2 gap-8 md:gap-14 items-center">

            <div class="md:pl-10 md:order-1">

                <span class="text-[#C9A24A] text-xs font-semibold uppercase tracking-[0.18em]">
                    Premium Collection
                </span>

                <h3 class="mt-2 text-2xl md:text-3xl font-bold text-[#54251F]">
                    Premium Pralines
                </h3>

                <div class="w-12 h-[2px] bg-[#A51C30] mt-4 mb-5"></div>

                <p class="text-sm md:text-base leading-7 text-[#6B4A43]">
                    Premium Pralines add an elegant dimension to the Zimpy range,
                    created for premium chocolate and gifting occasions.
                </p>

                <a href="#"
                    class="inline-flex items-center gap-2 mt-7 bg-[#A51C30] hover:bg-[#861626]
                    text-white text-sm font-semibold px-6 py-3 rounded-full transition duration-300">

                    See Product <span>→</span>

                </a>

            </div>

            <div class="overflow-hidden rounded-2xl bg-[#F4E5D3] md:order-2">

                <img
                    src="images/premium-pralines.jpg"
                    alt="Zimpy Premium Pralines"
                    class="w-full h-[280px] md:h-[380px] object-cover hover:scale-105 transition duration-500"
                >

            </div>

        </div>

    </div>


    <!-- =========================
         PRODUCT 13 - GIFTING COLLECTION
    ========================== -->

    <div class="max-w-6xl mx-auto px-5 mb-20 md:mb-24">

        <div class="grid md:grid-cols-2 gap-8 md:gap-14 items-center">

            <div class="overflow-hidden rounded-2xl bg-[#F4E5D3]">

                <img
                    src="images/gifting-collection.jpg"
                    alt="Zimpy Gifting Collection"
                    class="w-full h-[280px] md:h-[380px] object-cover hover:scale-105 transition duration-500"
                >

            </div>

            <div class="md:pr-10">

                <span class="text-[#C9A24A] text-xs font-semibold uppercase tracking-[0.18em]">
                    Gifting Collection
                </span>

                <h3 class="mt-2 text-2xl md:text-3xl font-bold text-[#54251F]">
                    Gifting Collection
                </h3>

                <div class="w-12 h-[2px] bg-[#A51C30] mt-4 mb-5"></div>

                <p class="text-sm md:text-base leading-7 text-[#6B4A43]">
                    A collection created around gifting occasions, bringing
                    together Zimpy chocolates in carefully presented formats.
                </p>

                <a href="#"
                    class="inline-flex items-center gap-2 mt-7 bg-[#A51C30] hover:bg-[#861626]
                    text-white text-sm font-semibold px-6 py-3 rounded-full transition duration-300">

                    See Product <span>→</span>

                </a>

            </div>

        </div>

    </div>


    <!-- =========================
         PRODUCT 14 - LUXOR
    ========================== -->

    <div class="max-w-6xl mx-auto px-5">

        <div class="grid md:grid-cols-2 gap-8 md:gap-14 items-center">

            <div class="md:pl-10 md:order-1">

                <span class="text-[#C9A24A] text-xs font-semibold uppercase tracking-[0.18em]">
                    Premium Collection
                </span>

                <h3 class="mt-2 text-2xl md:text-3xl font-bold text-[#54251F]">
                    Luxor
                </h3>

                <div class="w-12 h-[2px] bg-[#A51C30] mt-4 mb-5"></div>

                <p class="text-sm md:text-base leading-7 text-[#6B4A43]">
                    Luxor completes the Zimpy portfolio with a refined
                    confectionery offering designed for memorable chocolate
                    moments.
                </p>

                <a href="#"
                    class="inline-flex items-center gap-2 mt-7 bg-[#A51C30] hover:bg-[#861626]
                    text-white text-sm font-semibold px-6 py-3 rounded-full transition duration-300">

                    See Product <span>→</span>

                </a>

            </div>

            <div class="overflow-hidden rounded-2xl bg-[#F4E5D3] md:order-2">

                <img
                    src="images/luxor.jpg"
                    alt="Zimpy Luxor"
                    class="w-full h-[280px] md:h-[380px] object-cover hover:scale-105 transition duration-500"
                >

            </div>

        </div>

    </div>

</section>
<?php  
include "./footer.php"
?>
</body>
</html>