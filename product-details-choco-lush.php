<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choco Lush | Zimpy</title>

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
            Choco Lush
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
                    <img src="./assets/ZimpyChocoLush.png" alt="Zimpy Choco Lush Creamy Centre Filled Chocolates"
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
                    Choco Lush
                    <span class="block text-[#C9A227]">Creamy Centre Filled</span>
                </h2>

                <p class="mt-5 font-montserrat text-sm sm:text-[15px] leading-7 text-[#351B16]/70 max-w-xl">
                    Choco Lush is a range of creamy centre-filled chocolates in five flavours.
                    It comes in three pack formats, a gift box, a container and a small box,
                    so there is a size for every need and budget.
                </p>

                <!-- Flavours -->
                <div class="mt-7">
                    <p class="font-montserrat text-[11px] font-semibold uppercase tracking-[0.18em] text-[#351B16]/50">Available Flavours</p>
                    <div class="mt-3 flex flex-wrap gap-2.5">
                        <span class="inline-flex items-center gap-2 bg-white border border-[#351B16]/15 px-4 py-2 font-montserrat text-xs font-semibold text-[#351B16]">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#D9304F]"></span> Strawberry
                        </span>
                        <span class="inline-flex items-center gap-2 bg-white border border-[#351B16]/15 px-4 py-2 font-montserrat text-xs font-semibold text-[#351B16]">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#F28C28]"></span> Orange
                        </span>
                        <span class="inline-flex items-center gap-2 bg-white border border-[#351B16]/15 px-4 py-2 font-montserrat text-xs font-semibold text-[#351B16]">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#4E9A4A]"></span> Pistachio
                        </span>
                        <span class="inline-flex items-center gap-2 bg-white border border-[#351B16]/15 px-4 py-2 font-montserrat text-xs font-semibold text-[#351B16]">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#5B3A8C]"></span> Milk
                        </span>
                        <span class="inline-flex items-center gap-2 bg-white border border-[#351B16]/15 px-4 py-2 font-montserrat text-xs font-semibold text-[#351B16]">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#8B4A22]"></span> Hazelnut
                        </span>
                    </div>
                </div>

                <!-- Pack options -->
                <div class="mt-8">
                    <p class="font-montserrat text-[11px] font-semibold uppercase tracking-[0.18em] text-[#351B16]/50">Pack Options</p>

                    <div class="mt-3 border-t border-[#351B16]/10">

                        <!-- Box -->
                        <div class="py-5 border-b border-[#351B16]/10">
                            <div class="flex items-center justify-between gap-4">
                                <p class="font-playfair text-lg font-semibold text-[#351B16]">Gift Box</p>
                                <p class="font-playfair text-lg font-semibold text-[#C9A227]">₹ 350</p>
                            </div>
                            <div class="mt-2 flex flex-wrap gap-x-6 gap-y-1 font-montserrat text-xs text-[#351B16]/60">
                                <span>Net Wt: <strong class="text-[#351B16]">700 gm</strong> (70 pieces)</span>
                                <span>Pack: <strong class="text-[#351B16]">12 Boxes</strong> per carton</span>
                            </div>
                        </div>

                        <!-- Container -->
                        <div class="py-5 border-b border-[#351B16]/10">
                            <div class="flex items-center justify-between gap-4">
                                <p class="font-playfair text-lg font-semibold text-[#351B16]">Container</p>
                                <p class="font-playfair text-lg font-semibold text-[#C9A227]">₹ 350</p>
                            </div>
                            <div class="mt-2 flex flex-wrap gap-x-6 gap-y-1 font-montserrat text-xs text-[#351B16]/60">
                                <span>Net Wt: <strong class="text-[#351B16]">700 gm</strong> (70 pieces)</span>
                                <span>Pack: <strong class="text-[#351B16]">12 Containers</strong> per carton</span>
                            </div>
                        </div>

                        <!-- Small box -->
                        <div class="py-5 border-b border-[#351B16]/10">
                            <div class="flex items-center justify-between gap-4">
                                <p class="font-playfair text-lg font-semibold text-[#351B16]">Small Box</p>
                                <p class="font-playfair text-lg font-semibold text-[#C9A227]">₹ 125</p>
                            </div>
                            <div class="mt-2 flex flex-wrap gap-x-6 gap-y-1 font-montserrat text-xs text-[#351B16]/60">
                                <span>Net Wt: <strong class="text-[#351B16]">200 gm</strong> (20 pieces)</span>
                                <span>Pack: <strong class="text-[#351B16]">35 Boxes</strong> per carton</span>
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
            Creamy centre, <span class="text-[#C9A227]">every time.</span>
        </h3>

        <div class="mt-6 space-y-4 font-montserrat text-sm sm:text-[15px] leading-7 text-[#351B16]/70">
            <p>
                Choco Lush is made of individually wrapped chocolates with a creamy filled
                centre. The range covers fruit, nut and milk flavours: Strawberry, Orange,
                Pistachio, Milk and Hazelnut. Each flavour has its own wrapper and pack colour.
            </p>
            <p>
                The product is available as a 700 gm gift box, a 700 gm container, and a
                200 gm small box. Cartons hold 12 boxes, 12 containers or 35 small boxes,
                depending on the pack.
            </p>
            <p>
                With three pack types and five flavours, Choco Lush suits retail, gifting
                and festive occasions, and gives businesses a range at different price points.
            </p>
        </div>

        <!-- Highlights -->
        <div class="mt-10 grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="border border-[#351B16]/10 bg-[#F8F3EA] p-6">
                <p class="font-playfair text-lg font-semibold text-[#351B16]">Creamy Centre</p>
                <p class="mt-2 font-montserrat text-xs leading-5 text-[#351B16]/55">Filled chocolates in every wrapped piece.</p>
            </div>
            <div class="border border-[#351B16]/10 bg-[#F8F3EA] p-6">
                <p class="font-playfair text-lg font-semibold text-[#351B16]">Five Flavours</p>
                <p class="mt-2 font-montserrat text-xs leading-5 text-[#351B16]/55">Strawberry, Orange, Pistachio, Milk and Hazelnut.</p>
            </div>
            <div class="border border-[#351B16]/10 bg-[#F8F3EA] p-6">
                <p class="font-playfair text-lg font-semibold text-[#351B16]">Three Packs</p>
                <p class="mt-2 font-montserrat text-xs leading-5 text-[#351B16]/55">Gift box, container and small box.</p>
            </div>
        </div>
    </div>
</section>

<?php include "./footer.php"; ?>

</body>
</html>