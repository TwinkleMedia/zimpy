<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lovita | Zimpy</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        .font-montserrat { font-family: 'Montserrat', sans-serif; }
        .font-playfair { font-family: 'Playfair Display', serif; }

        /* Soft light behind the product */
        .product-stage {
            background:
                radial-gradient(circle at 50% 45%, #FFFFFF 0%, #FBF6EA 55%, #F3EAD6 100%);
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
            Lovita
        </h1>
        <p class="mt-4 font-montserrat text-sm sm:text-base text-white/60">Heart-shaped chocolates at ₹1 a piece</p>
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
                    <img src="./assets/Lovita.png" alt="Zimpy Lovita Dark Choco Heart"
                         class="float-in w-full max-w-[300px] sm:max-w-[380px] h-auto object-contain drop-shadow-[0_24px_28px_rgba(53,27,22,0.25)]">
                </div>
                <div class="absolute -bottom-3 -right-3 w-20 h-20 sm:w-24 sm:h-24 border border-[#C9A227]/50 -z-10 pointer-events-none"></div>
                <div class="absolute -top-3 -left-3 w-12 h-12 border-t border-l border-[#C9A227]/60 pointer-events-none"></div>
            </div>

            <!-- DETAILS -->
            <div>
                <p class="font-montserrat text-sm font-semibold text-[#8C6D18]">Zimpy Chocolate</p>

                <h2 class="mt-3 font-playfair text-[34px] sm:text-4xl lg:text-5xl leading-[1.1] font-semibold text-[#351B16]">
                    Lovita Choco Heart
                </h2>

                <p class="mt-5 font-montserrat text-sm sm:text-[15px] leading-7 text-[#351B16]/70 max-w-xl">
                    Lovita is a pack of heart-shaped chocolates, each one individually
                    wrapped and sold at just ₹1 a piece. The heart-window box makes it
                    an eye-catching choice for the counter, gifting and everyday sharing.
                </p>

                <!-- Variants -->
                <div class="mt-8">
                    <p class="font-montserrat text-sm font-semibold text-[#351B16]">Available variants</p>
                    <div class="mt-3 flex flex-wrap gap-2.5">
                        <span class="inline-flex items-center gap-2.5 bg-white border border-[#351B16]/15 hover:border-[#C9A227] px-4 py-2.5 font-montserrat text-xs font-semibold text-[#351B16] transition-colors">
                            <span class="w-3 h-3 rounded-full bg-[#4A1F18]"></span> Dark Choco
                        </span>
                        <span class="inline-flex items-center gap-2.5 bg-white border border-[#351B16]/15 hover:border-[#C9A227] px-4 py-2.5 font-montserrat text-xs font-semibold text-[#351B16] transition-colors">
                            <span class="w-3 h-3 rounded-full bg-[#E8D9A8] border border-[#C9A227]/40"></span> White Choco
                        </span>
                        <span class="inline-flex items-center gap-2.5 bg-white border border-[#351B16]/15 hover:border-[#C9A227] px-4 py-2.5 font-montserrat text-xs font-semibold text-[#351B16] transition-colors">
                            <span class="w-3 h-3 rounded-full bg-[#E87BA0]"></span> Rose Choco
                        </span>
                    </div>
                </div>

                <!-- Specs -->
                <dl class="mt-8 grid grid-cols-2 bg-white border border-[#351B16]/10">
                    <div class="p-5 sm:p-6 border-b border-r border-[#351B16]/10">
                        <dt class="font-montserrat text-[13px] font-medium text-[#351B16]/60">MRP</dt>
                        <dd class="mt-1.5 font-montserrat text-[22px] sm:text-2xl font-bold tracking-tight text-[#351B16]">₹ 125</dd>
                    </div>
                    <div class="p-5 sm:p-6 border-b border-[#351B16]/10">
                        <dt class="font-montserrat text-[13px] font-medium text-[#351B16]/60">Price per piece</dt>
                        <dd class="mt-1.5 font-montserrat text-[22px] sm:text-2xl font-bold tracking-tight text-[#351B16]">₹ 1/-</dd>
                    </div>
                    <div class="p-5 sm:p-6 border-r border-[#351B16]/10">
                        <dt class="font-montserrat text-[13px] font-medium text-[#351B16]/60">Net weight</dt>
                        <dd class="mt-1.5 font-montserrat text-[22px] sm:text-2xl font-bold tracking-tight text-[#351B16]">
                            325 gm <span class="font-montserrat text-[13px] font-medium tracking-normal text-[#351B16]/60">(125 pcs)</span>
                        </dd>
                    </div>
                    <div class="p-5 sm:p-6">
                        <dt class="font-montserrat text-[13px] font-medium text-[#351B16]/60">Pack</dt>
                        <dd class="mt-1.5 font-montserrat text-[22px] sm:text-2xl font-bold tracking-tight text-[#351B16]">
                            36 boxes <span class="font-montserrat text-[13px] font-medium tracking-normal text-[#351B16]/60">per carton</span>
                        </dd>
                    </div>
                </dl>

                <!-- Buttons -->
                <div class="mt-8 flex flex-col sm:flex-row gap-3">
                    <a href="/contact.php"
                       class="group inline-flex items-center justify-center gap-2 bg-[#351B16] hover:bg-[#4A241D] text-white px-8 py-4 font-montserrat text-xs font-semibold transition-colors duration-300">
                        Enquire Now
                        <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M5 12h14M13 6l6 6-6 6" />
                        </svg>
                    </a>
                    <a href="/product.php"
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
                    Small hearts, big impact.
                </h3>
            </div>

            <div class="lg:col-span-3 space-y-4 font-montserrat text-sm sm:text-[15px] leading-7 text-[#351B16]/70">
                <p>
                    Lovita brings together a simple idea: a small chocolate heart that anyone
                    can enjoy and share. Each piece is individually wrapped, which keeps it easy
                    to hand out, display and sell.
                </p>
                <p>
                    The box features a heart-shaped window, so customers can see the chocolates
                    inside. Each box holds 125 pieces with a net weight of 325 gm, and cartons
                    are packed with 36 boxes for easy distribution and stocking.
                </p>
                <p>
                    Lovita comes in three variants: Dark Choco, White Choco and Rose Choco.
                    This lets retailers and distributors offer a choice of flavours under one
                    product line.
                </p>
            </div>
        </div>

        <!-- Highlights -->
        <div class="mt-12 grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="border border-[#351B16]/10 bg-[#F8F3EA] p-6 hover:border-[#C9A227]/60 transition-colors">
                <svg class="w-6 h-6 text-[#C9A227]" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 21s-7.5-4.6-9.5-9.2C1.2 8.6 3 5 6.4 5c2 0 3.5 1.1 5.6 3.2C14.1 6.1 15.600 5 17.600 5 21 5 22.800 8.600 21.500 11.800 19.500 16.400 12 21 12 21z"/></svg>
                <p class="mt-4 font-playfair text-lg font-semibold text-[#351B16]">Heart shaped</p>
                <p class="mt-2 font-montserrat text-xs leading-5 text-[#351B16]/60">Distinctive heart-shaped chocolates in every box.</p>
            </div>
            <div class="border border-[#351B16]/10 bg-[#F8F3EA] p-6 hover:border-[#C9A227]/60 transition-colors">
                <svg class="w-6 h-6 text-[#C9A227]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 7.500 12 3 4 7.500v9L12 21l8-4.500v-9z"/><path d="M4 7.500 12 12l8-4.500M12 12v9"/></svg>
                <p class="mt-4 font-playfair text-lg font-semibold text-[#351B16]">Individually wrapped</p>
                <p class="mt-2 font-montserrat text-xs leading-5 text-[#351B16]/60">125 wrapped pieces, easy to share and sell.</p>
            </div>
            <div class="border border-[#351B16]/10 bg-[#F8F3EA] p-6 hover:border-[#C9A227]/60 transition-colors">
                <svg class="w-6 h-6 text-[#C9A227]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="7" cy="12" r="4"/><circle cx="17" cy="12" r="4"/></svg>
                <p class="mt-4 font-playfair text-lg font-semibold text-[#351B16]">Three variants</p>
                <p class="mt-2 font-montserrat text-xs leading-5 text-[#351B16]/60">Dark, White and Rose Choco to suit every taste.</p>
            </div>
        </div>
    </div>
</section>

<?php include "./footer.php"; ?>

</body>
</html>