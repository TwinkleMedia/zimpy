<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choco Surfer | Zimpy</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        .font-montserrat { font-family: 'Montserrat', sans-serif; }
        .font-playfair { font-family: 'Playfair Display', serif; }

        /* Soft light behind the product */
        .product-stage {
            background: radial-gradient(circle at 50% 45%, #FFFFFF 0%, #FBF6EA 55%, #F3EAD6 100%);
        }
        @keyframes float-in { from { opacity: 0; transform: translateY(14px); } to { opacity: 1; transform: none; } }
        .float-in { animation: float-in .8s cubic-bezier(.2,.8,.2,1) both; }

        a:focus-visible { outline: 2px solid #C9A227; outline-offset: 3px; }
        @media (prefers-reduced-motion: reduce) { .float-in { animation: none; } }
    </style>
</head>
<body class="bg-[#F8F3EA] antialiased">
<?php include "./navbar.php"; ?>

<!-- ========================================= -->
<!-- BANNER HERO -->
<!-- ========================================= -->
<section class="relative bg-[#351B16] overflow-hidden">
    <div class="absolute -top-20 -right-20 w-56 h-56 rounded-full border border-[#C9A227]/20"></div>
    <div class="absolute -bottom-24 -left-24 w-64 h-64 rounded-full border border-[#C9A227]/10"></div>

    <div class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-14 sm:py-16 lg:py-20 text-center">
        <h1 class="font-playfair text-[44px] sm:text-6xl lg:text-7xl font-semibold text-[#C9A227] leading-none">
            Choco Surfer
        </h1>
        <p class="mt-4 font-montserrat text-sm sm:text-base text-white/60">Wrapped centre-fill truffles in five flavours</p>
        <div class="mt-6 flex items-center justify-center gap-3">
            <span class="w-10 h-[1px] bg-[#C9A227]"></span>
            <span class="w-2 h-2 rotate-45 bg-[#C9A227]"></span>
            <span class="w-10 h-[1px] bg-[#C9A227]"></span>
        </div>
    </div>
</section>


<!-- ========================================= -->
<!-- PRODUCT INFORMATION -->
<!-- ========================================= -->
<section class="py-14 sm:py-20 lg:py-24">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <!-- IMAGE -->
            <div class="relative">
                <div class="product-stage border border-[#351B16]/10 p-8 sm:p-12 flex items-center justify-center min-h-[340px] sm:min-h-[480px]">
                    <img src="./assets/Choco  Surfer.png" alt="Zimpy Choco Surfer Centre Fill Truffles Jar"
                         class="float-in w-full max-w-[260px] sm:max-w-[330px] h-auto object-contain drop-shadow-[0_24px_28px_rgba(53,27,22,0.25)]">
                </div>
                <div class="absolute -bottom-3 -right-3 w-20 h-20 sm:w-24 sm:h-24 border border-[#C9A227]/50 -z-10 pointer-events-none"></div>
                <div class="absolute -top-3 -left-3 w-12 h-12 border-t border-l border-[#C9A227]/60 pointer-events-none"></div>
            </div>

            <!-- DETAILS -->
            <div>
                <p class="font-montserrat text-sm font-semibold text-[#8C6D18]">Zimpy Chocolate</p>

                <h2 class="mt-3 font-playfair text-[34px] sm:text-4xl lg:text-5xl leading-[1.1] font-semibold text-[#351B16]">
                    Choco Surfer Centre Fill Truffles
                </h2>

                <p class="mt-5 font-montserrat text-sm sm:text-[15px] leading-7 text-[#351B16]/70 max-w-xl">
                    Choco Surfer is a jar of colourful, individually wrapped centre-fill
                    truffles in five flavours. The bright, playful packaging and the
                    see-through jar make it a lively choice for the counter.
                </p>

                <!-- Flavours -->
                <div class="mt-8">
                    <p class="font-montserrat text-sm font-semibold text-[#351B16]">Available flavours</p>
                    <div class="mt-3 flex flex-wrap gap-2.5">
                        <span class="inline-flex items-center gap-2.5 bg-white border border-[#351B16]/15 hover:border-[#C9A227] px-4 py-2.5 font-montserrat text-xs font-semibold text-[#351B16] transition-colors">
                            <span class="w-3 h-3 rounded-full bg-[#D9304F]"></span> Strawberry
                        </span>
                        <span class="inline-flex items-center gap-2.5 bg-white border border-[#351B16]/15 hover:border-[#C9A227] px-4 py-2.5 font-montserrat text-xs font-semibold text-[#351B16] transition-colors">
                            <span class="w-3 h-3 rounded-full bg-[#3F8FD0]"></span> Caramel
                        </span>
                        <span class="inline-flex items-center gap-2.5 bg-white border border-[#351B16]/15 hover:border-[#C9A227] px-4 py-2.5 font-montserrat text-xs font-semibold text-[#351B16] transition-colors">
                            <span class="w-3 h-3 rounded-full bg-[#F5C230]"></span> Mango
                        </span>
                        <span class="inline-flex items-center gap-2.5 bg-white border border-[#351B16]/15 hover:border-[#C9A227] px-4 py-2.5 font-montserrat text-xs font-semibold text-[#351B16] transition-colors">
                            <span class="w-3 h-3 rounded-full bg-[#6B3A26]"></span> Chocolate
                        </span>
                        <span class="inline-flex items-center gap-2.5 bg-white border border-[#351B16]/15 hover:border-[#C9A227] px-4 py-2.5 font-montserrat text-xs font-semibold text-[#351B16] transition-colors">
                            <span class="w-3 h-3 rounded-full bg-[#F0A030]"></span> Butter Scotch
                        </span>
                    </div>
                </div>

                <!-- Specs -->
                <dl class="mt-8 grid grid-cols-2 bg-white border border-[#351B16]/10">
                    <div class="p-5 sm:p-6 border-b border-r border-[#351B16]/10">
                        <dt class="font-montserrat text-[13px] font-medium text-[#351B16]/60">MRP</dt>
                        <dd class="mt-1.5 font-montserrat text-[22px] sm:text-2xl font-bold tracking-tight text-[#351B16]">₹ 300</dd>
                    </div>
                    <div class="p-5 sm:p-6 border-b border-[#351B16]/10">
                        <dt class="font-montserrat text-[13px] font-medium text-[#351B16]/60">Net weight</dt>
                        <dd class="mt-1.5 font-montserrat text-[22px] sm:text-2xl font-bold tracking-tight text-[#351B16]">900 gm</dd>
                    </div>
                    <div class="p-5 sm:p-6 border-r border-[#351B16]/10">
                        <dt class="font-montserrat text-[13px] font-medium text-[#351B16]/60">Pieces per jar</dt>
                        <dd class="mt-1.5 font-montserrat text-[22px] sm:text-2xl font-bold tracking-tight text-[#351B16]">
                            150 <span class="font-montserrat text-[13px] font-medium tracking-normal text-[#351B16]/60">pieces</span>
                        </dd>
                    </div>
                    <div class="p-5 sm:p-6">
                        <dt class="font-montserrat text-[13px] font-medium text-[#351B16]/60">Pack</dt>
                        <dd class="mt-1.5 font-montserrat text-[22px] sm:text-2xl font-bold tracking-tight text-[#351B16]">
                            12 jars <span class="font-montserrat text-[13px] font-medium tracking-normal text-[#351B16]/60">per carton</span>
                        </dd>
                    </div>
                </dl>

                <!-- Buttons -->
                <div class="mt-8 flex flex-col sm:flex-row gap-3">
                    <a href="./contact.php"
                       class="group inline-flex items-center justify-center gap-2 bg-[#351B16] hover:bg-[#4A241D] text-white px-8 py-4 font-montserrat text-xs font-semibold transition-colors duration-300">
                        Enquire Now
                        <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M5 12h14M13 6l6 6-6 6" />
                        </svg>
                    </a>
                    <a href="./product.php"
                       class="inline-flex items-center justify-center border border-[#351B16]/25 hover:border-[#C9A227] hover:bg-white text-[#351B16] px-8 py-4 font-montserrat text-xs font-semibold transition-colors duration-300">
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
    <div class="max-w-5xl mx-auto px-5 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 lg:gap-16">
            <div class="lg:col-span-2">
                <div class="flex items-center gap-3 mb-4">
                    <span class="w-8 h-[1px] bg-[#C9A227]"></span>
                    <span class="font-montserrat text-sm font-semibold text-[#8C6D18]">Description</span>
                </div>
                <h3 class="font-playfair text-[28px] sm:text-4xl leading-[1.15] font-semibold text-[#351B16]">
                    Fun in every wrapped bite.
                </h3>
            </div>

            <div class="lg:col-span-3 space-y-4 font-montserrat text-sm sm:text-[15px] leading-7 text-[#351B16]/70">
                <p>
                    Choco Surfer is made for fun, everyday chocolate moments. The jar holds
                    individually wrapped centre-fill truffles, with a different colour of
                    wrapper and jar lid for each flavour.
                </p>
                <p>
                    Each jar has a net weight of 900 gm and holds 150 pieces. Cartons are
                    packed with 12 jars, which makes the product easy to stock, display and
                    distribute.
                </p>
                <p>
                    The playful character artwork and see-through jar make it a good fit for
                    shop counters, where it attracts attention and invites impulse purchases.
                </p>
            </div>
        </div>

        <!-- Highlights -->
        <div class="mt-12 grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="border border-[#351B16]/10 bg-[#F8F3EA] p-6 hover:border-[#C9A227]/60 transition-colors">
                <svg class="w-6 h-6 text-[#C9A227]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3.5" fill="currentColor"/></svg>
                <p class="mt-4 font-playfair text-lg font-semibold text-[#351B16]">Centre fill</p>
                <p class="mt-2 font-montserrat text-xs leading-5 text-[#351B16]/60">Truffles with a filled centre in every piece.</p>
            </div>
            <div class="border border-[#351B16]/10 bg-[#F8F3EA] p-6 hover:border-[#C9A227]/60 transition-colors">
                <div class="flex items-center gap-1.5 h-6" aria-hidden="true">
                    <span class="w-3 h-3 rounded-full bg-[#D9304F]"></span>
                    <span class="w-3 h-3 rounded-full bg-[#3F8FD0]"></span>
                    <span class="w-3 h-3 rounded-full bg-[#F5C230]"></span>
                    <span class="w-3 h-3 rounded-full bg-[#6B3A26]"></span>
                    <span class="w-3 h-3 rounded-full bg-[#F0A030]"></span>
                </div>
                <p class="mt-4 font-playfair text-lg font-semibold text-[#351B16]">Five flavours</p>
                <p class="mt-2 font-montserrat text-xs leading-5 text-[#351B16]/60">Strawberry, Caramel, Mango, Chocolate and Butter Scotch.</p>
            </div>
            <div class="border border-[#351B16]/10 bg-[#F8F3EA] p-6 hover:border-[#C9A227]/60 transition-colors">
                <svg class="w-6 h-6 text-[#C9A227]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 3h8M7 6h10v13a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6z"/></svg>
                <p class="mt-4 font-playfair text-lg font-semibold text-[#351B16]">Counter jar</p>
                <p class="mt-2 font-montserrat text-xs leading-5 text-[#351B16]/60">150 pieces per jar, 12 jars per carton.</p>
            </div>
        </div>
    </div>
</section>

<?php include "./footer.php"; ?>

</body>
</html>