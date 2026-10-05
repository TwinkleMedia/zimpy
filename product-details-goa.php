<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goa Special | Zimpy</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        .font-montserrat { font-family: 'Montserrat', sans-serif; }
        .font-playfair { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body>
<?php include "./navbar.php"; ?>

<!-- ========================================= -->
<!-- SIMPLE BANNER HERO -->
<!-- ========================================= -->
<section class="relative bg-[#351B16] overflow-hidden">
    <div class="absolute -top-20 -right-20 w-56 h-56 rounded-full border border-[#C9A227]/20"></div>
    <div class="absolute -bottom-24 -left-24 w-64 h-64 rounded-full border border-[#C9A227]/10"></div>

    <div class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-14 sm:py-16 lg:py-20 text-center">
        <h1 class="font-playfair text-[44px] sm:text-6xl lg:text-7xl font-semibold text-[#C9A227] leading-none">
            Goa Special
        </h1>
        <div class="mt-5 flex items-center justify-center gap-3">
            <span class="w-10 h-[1px] bg-[#C9A227]"></span>
            <span class="w-2 h-2 rotate-45 bg-[#C9A227]"></span>
            <span class="w-10 h-[1px] bg-[#C9A227]"></span>
        </div>
    </div>
</section>


<!-- ========================================= -->
<!-- PRODUCT INFORMATION -->
<!-- ========================================= -->
<section class="bg-[#F8F3EA] py-14 sm:py-20 lg:py-24">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <!-- IMAGE -->
            <div class="relative">
                <div class="bg-white border border-[#351B16]/10 p-8 sm:p-12 flex items-center justify-center min-h-[320px] sm:min-h-[440px]">
                    <img src="./assets/ZimpyGoaSpecial.png" alt="Zimpy Goa Special Milk Choco Chocolates"
                         class="w-full max-w-[300px] sm:max-w-[360px] h-auto object-contain drop-shadow-[0_20px_25px_rgba(53,27,22,0.2)]">
                </div>
                <div class="absolute -bottom-3 -right-3 w-20 h-20 sm:w-24 sm:h-24 border border-[#C9A227]/40 -z-0 pointer-events-none"></div>
            </div>

            <!-- DETAILS -->
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="w-8 h-[1px] bg-[#C9A227]"></span>
                    <span class="font-montserrat text-[10px] sm:text-xs font-semibold uppercase tracking-[0.2em] text-[#8C6D18]">Zimpy Chocolate</span>
                </div>

                <h2 class="font-playfair text-[32px] sm:text-4xl lg:text-[44px] leading-[1.1] font-semibold text-[#351B16]">
                    Goa Special
                    <span class="block text-[#C9A227]">Milk Choco</span>
                </h2>

                <p class="mt-5 font-montserrat text-sm sm:text-[15px] leading-7 text-[#351B16]/70 max-w-xl">
                    Goa Special is a milk chocolate range in three flavours.
                    It comes in three pack formats, a pouch, a tub and a jar,
                    so there is a size for every need and budget.
                </p>

                <!-- Flavours -->
                <div class="mt-7">
                    <p class="font-montserrat text-[11px] font-semibold uppercase tracking-[0.18em] text-[#351B16]/50">Available Flavours</p>
                    <div class="mt-3 flex flex-wrap gap-2.5">
                        <span class="inline-flex items-center gap-2 bg-white border border-[#351B16]/15 px-4 py-2 font-montserrat text-xs font-semibold text-[#351B16]">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#4E9A4A]"></span> Pistachio
                        </span>
                        <span class="inline-flex items-center gap-2 bg-white border border-[#351B16]/15 px-4 py-2 font-montserrat text-xs font-semibold text-[#351B16]">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#8B4A22]"></span> Coffee
                        </span>
                        <span class="inline-flex items-center gap-2 bg-white border border-[#351B16]/15 px-4 py-2 font-montserrat text-xs font-semibold text-[#351B16]">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#D9304F]"></span> Fruit Punch
                        </span>
                    </div>
                </div>

                <!-- Pack options -->
                <div class="mt-8">
                    <p class="font-montserrat text-[11px] font-semibold uppercase tracking-[0.18em] text-[#351B16]/50">Pack Options</p>

                    <div class="mt-3 border-t border-[#351B16]/10">

                        <!-- Pouch -->
                        <div class="py-5 border-b border-[#351B16]/10">
                            <div class="flex items-center justify-between gap-4">
                                <p class="font-playfair text-lg font-semibold text-[#351B16]">Pouch</p>
                                <p class="font-playfair text-lg font-semibold text-[#C9A227]">₹ 350</p>
                            </div>
                            <div class="mt-2 flex flex-wrap gap-x-6 gap-y-1 font-montserrat text-xs text-[#351B16]/60">
                                <span>Net Wt: <strong class="text-[#351B16]">600 gm</strong> (60 pieces)</span>
                                <span>Pack: <strong class="text-[#351B16]">16 Pouches</strong> per carton</span>
                            </div>
                        </div>

                        <!-- Tub -->
                        <div class="py-5 border-b border-[#351B16]/10">
                            <div class="flex items-center justify-between gap-4">
                                <p class="font-playfair text-lg font-semibold text-[#351B16]">Tub</p>
                                <p class="font-playfair text-lg font-semibold text-[#C9A227]">₹ 200</p>
                            </div>
                            <div class="mt-2 flex flex-wrap gap-x-6 gap-y-1 font-montserrat text-xs text-[#351B16]/60">
                                <span>Net Wt: <strong class="text-[#351B16]">250 gm</strong> (25 pieces)</span>
                                <span>Pack: <strong class="text-[#351B16]">24 Tubs</strong> per carton</span>
                            </div>
                        </div>

                        <!-- Jar -->
                        <div class="py-5 border-b border-[#351B16]/10">
                            <div class="flex items-center justify-between gap-4">
                                <p class="font-playfair text-lg font-semibold text-[#351B16]">Jar</p>
                                <p class="font-playfair text-lg font-semibold text-[#C9A227]">₹ 250</p>
                            </div>
                            <div class="mt-2 flex flex-wrap gap-x-6 gap-y-1 font-montserrat text-xs text-[#351B16]/60">
                                <span>Net Wt: <strong class="text-[#351B16]">500 gm</strong> (50 pieces)</span>
                                <span>Pack: <strong class="text-[#351B16]">12 Jars</strong> per carton</span>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Buttons -->
                <div class="mt-8 flex flex-col sm:flex-row gap-3">
                    <a href="/contact.html"
                       class="group inline-flex items-center justify-center gap-2 bg-[#351B16] hover:bg-[#4A241D] text-white px-7 py-3.5 font-montserrat text-xs font-semibold transition-colors duration-300">
                        Enquire Now
                        <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M5 12h14M13 6l6 6-6 6" />
                        </svg>
                    </a>
                    <a href="/products.html"
                       class="inline-flex items-center justify-center border border-[#351B16]/20 hover:border-[#C9A227] text-[#351B16] hover:text-[#8C6D18] px-7 py-3.5 font-montserrat text-xs font-semibold transition-colors duration-300">
                        All Products
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ========================================= -->
<!-- DESCRIPTION -->
<!-- ========================================= -->
<section class="bg-white py-14 sm:py-20 lg:py-24">
    <div class="max-w-4xl mx-auto px-5 sm:px-6 lg:px-8">

        <div class="flex items-center gap-3 mb-4">
            <span class="w-8 h-[1px] bg-[#C9A227]"></span>
            <span class="font-montserrat text-[10px] sm:text-xs font-semibold uppercase tracking-[0.2em] text-[#8C6D18]">Description</span>
        </div>

        <h3 class="font-playfair text-[28px] sm:text-4xl leading-[1.15] font-semibold text-[#351B16]">
            A taste of the coast, <span class="text-[#C9A227]">in every piece.</span>
        </h3>

        <div class="mt-6 space-y-4 font-montserrat text-sm sm:text-[15px] leading-7 text-[#351B16]/70">
            <p>
                Goa Special is made of individually wrapped milk chocolates in three flavours:
                Pistachio, Coffee and Fruit Punch. The packs carry a bright Goa beach theme
                that makes them stand out on the shelf.
            </p>
            <p>
                The product is available as a 600 gm pouch, a 250 gm tub and a 500 gm jar.
                Cartons hold 16 pouches, 24 tubs or 12 jars, depending on the pack.
            </p>
            <p>
                With three pack types and three flavours, Goa Special suits retail, gifting
                and travel occasions, and gives businesses a range at different price points.
            </p>
        </div>

        <!-- Highlights -->
        <div class="mt-10 grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="border border-[#351B16]/10 bg-[#F8F3EA] p-6">
                <p class="font-playfair text-lg font-semibold text-[#351B16]">Milk Choco</p>
                <p class="mt-2 font-montserrat text-xs leading-5 text-[#351B16]/55">Individually wrapped milk chocolate pieces.</p>
            </div>
            <div class="border border-[#351B16]/10 bg-[#F8F3EA] p-6">
                <p class="font-playfair text-lg font-semibold text-[#351B16]">Three Flavours</p>
                <p class="mt-2 font-montserrat text-xs leading-5 text-[#351B16]/55">Pistachio, Coffee and Fruit Punch.</p>
            </div>
            <div class="border border-[#351B16]/10 bg-[#F8F3EA] p-6">
                <p class="font-playfair text-lg font-semibold text-[#351B16]">Three Packs</p>
                <p class="mt-2 font-montserrat text-xs leading-5 text-[#351B16]/55">Pouch, tub and jar.</p>
            </div>
        </div>
    </div>
</section>

<?php include "./footer.php"; ?>

</body>
</html>