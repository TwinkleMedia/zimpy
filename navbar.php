<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Zimpy | Confectionery Manufacturer</title>


    <!-- Tailwind CSS -->

    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Google Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet"
    >


    <!-- Tailwind Configuration -->

    <script>

        tailwind.config = {

            theme: {

                extend: {

                    colors: {

                        zimpy: {

                            red: '#ED1C24',

                            darkred: '#C9141B',

                            cocoa: '#351B16',

                            chocolate: '#5A3026',

                            gold: '#E5B85C',

                            cream: '#FFF8EC',

                            text: '#292321'

                        }

                    },


                    fontFamily: {

                        montserrat: ['Montserrat', 'sans-serif'],

                        playfair: ['Playfair Display', 'serif']

                    }

                }

            }

        }

    </script>

</head>


<body class="bg-white text-zimpy-text">


    <!-- ===================================================== -->
    <!-- HEADER -->
    <!-- ===================================================== -->

    <header
        class="sticky top-0 z-50 bg-white border-b border-zimpy-cream shadow-sm"
    >

        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

            <div
                class="h-20 lg:h-24 flex items-center justify-between"
            >


                <!-- ================================================= -->
                <!-- LOGO -->
                <!-- ================================================= -->

                <a
                    href="./index.php"
                    class="flex items-center shrink-0 group"
                >

                    <img
                        src="./assets/Zimpy logo_Final.png"
                        alt="Zimpy"
                        class="w-auto h-14 sm:h-16 lg:h-[72px] object-contain transition-transform duration-300 group-hover:scale-105"
                    >

                </a>



                <!-- ================================================= -->
                <!-- DESKTOP NAVIGATION -->
                <!-- ================================================= -->

                <nav
                    class="hidden lg:flex items-center gap-8 xl:gap-10 font-montserrat"
                >


                    <!-- ============================= -->
                    <!-- HOME -->
                    <!-- ============================= -->

                    <a
                        href="./index.php"
                        class="relative text-sm font-semibold text-zimpy-cocoa hover:text-zimpy-red transition-colors duration-300 py-2 group"
                    >

                        Home

                        <span
                            class="absolute left-0 bottom-0 w-0 h-[2px] bg-zimpy-red transition-all duration-300 group-hover:w-full"
                        ></span>

                    </a>



                    <!-- ============================= -->
                    <!-- ABOUT -->
                    <!-- ============================= -->

                    <a
                        href="./about.php"
                        class="relative text-sm font-semibold text-zimpy-cocoa hover:text-zimpy-red transition-colors duration-300 py-2 group"
                    >

                        About Us

                        <span
                            class="absolute left-0 bottom-0 w-0 h-[2px] bg-zimpy-red transition-all duration-300 group-hover:w-full"
                        ></span>

                    </a>



                    <!-- ================================================= -->
                    <!-- PRODUCTS DROPDOWN -->
                    <!-- ================================================= -->

                    <div class="relative group">


                        <!-- Products Button -->

                        <button
                            type="button"
                            class="flex items-center gap-2 text-sm font-semibold text-zimpy-cocoa hover:text-zimpy-red transition-colors duration-300 py-2"
                        >

                            Products

                            <svg
                                class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M19 9l-7 7-7-7"
                                />

                            </svg>

                        </button>



                        <!-- ================================================= -->
                        <!-- DROPDOWN -->
                        <!-- ================================================= -->

                        <div
                            class="absolute left-1/2 -translate-x-1/2 top-full pt-3 opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200"
                        >


                            <div
                                class="w-[560px] bg-white border border-zimpy-cream shadow-[0_15px_40px_rgba(53,27,22,0.14)] overflow-hidden"
                            >


                                <!-- Gold Top Line -->

                                <div class="h-[2px] bg-zimpy-gold"></div>



                                <!-- Dropdown Header -->

                                <div
                                    class="px-6 py-4 border-b border-zimpy-cream"
                                >

                                    <p
                                        class="font-playfair text-lg font-semibold text-zimpy-cocoa"
                                    >
                                        Our Products
                                    </p>

                                    <p
                                        class="text-[11px] text-gray-500 mt-1 font-montserrat"
                                    >
                                        Explore the Zimpy confectionery collection
                                    </p>

                                </div>



                                <!-- ================================================= -->
                                <!-- PRODUCT LIST -->
                                <!-- ================================================= -->

                                <div
                                    class="grid grid-cols-2 gap-x-6 px-5 py-5"
                                >


                                    <!-- ============================= -->
                                    <!-- CHOCOLATE COLLECTION -->
                                    <!-- ============================= -->

                                    <div>

                                        <p
                                            class="px-2 mb-2 font-montserrat text-[9px] font-semibold uppercase tracking-[0.18em] text-zimpy-gold"
                                        >
                                            Chocolate Collection
                                        </p>


                                        <!-- Lovita -->

                                        <a
                                            href="./lovita.php"
                                            class="block px-3 py-2.5 font-montserrat text-sm text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                                        >
                                            Lovita
                                        </a>


                                        <!-- Dairy Luxe -->

                                        <a
                                            href="product-details-dairy-luxe.php"
                                            class="block px-3 py-2.5 font-montserrat text-sm text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                                        >
                                            Dairy Luxe
                                        </a>


                                        <!-- Gloria -->

                                        <a
                                            href="./product-details-gloria.php"
                                            class="block px-3 py-2.5 font-montserrat text-sm text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                                        >
                                            Gloria
                                        </a>


                                        <!-- Choco Surfer -->

                                        <a
                                            href="./product-details-choco-surfer.php"
                                            class="block px-3 py-2.5 font-montserrat text-sm text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                                        >
                                            Choco Surfer
                                        </a>


                                        <!-- Gracia -->

                                        <a
                                            href="./product-details-gracia.php"
                                            class="block px-3 py-2.5 font-montserrat text-sm text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                                        >
                                            Gracia
                                        </a>


                                        <!-- Choco Lush -->

                                        <a
                                            href="./product-details-choco-lush.php"
                                            class="block px-3 py-2.5 font-montserrat text-sm text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                                        >
                                            Choco Lush
                                        </a>

                                    </div>



                                    <!-- ============================= -->
                                    <!-- PREMIUM & GIFTING -->
                                    <!-- ============================= -->

                                    <div>

                                        <p
                                            class="px-2 mb-2 font-montserrat text-[9px] font-semibold uppercase tracking-[0.18em] text-zimpy-gold"
                                        >
                                            Premium & Gifting
                                        </p>


                                        <!-- Le Reve -->

                                        <a
                                            href="./product-details-le-reve.php"
                                            class="block px-3 py-2.5 font-montserrat text-sm text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                                        >
                                            Le Reve
                                        </a>


                                        <!-- Orlen -->

                                        <a
                                            href="./product-details-orlen.php"
                                            class="block px-3 py-2.5 font-montserrat text-sm text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                                        >
                                            Orlen
                                        </a>


                                        <!-- Greetings -->

                                        <a
                                            href="./product-details-greetings.php"
                                            class="block px-3 py-2.5 font-montserrat text-sm text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                                        >
                                            Greetings
                                        </a>


                                        <!-- Goa Special -->

                                        <a
                                            href="./product-details-goa.php"
                                            class="block px-3 py-2.5 font-montserrat text-sm text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                                        >
                                            Goa Special
                                        </a>


                                        <!-- Golden Moments -->

                                        <a
                                            href="./productdetailsgolden-moments.php"
                                            class="block px-3 py-2.5 font-montserrat text-sm text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                                        >
                                            Golden Moments
                                        </a>


                                        <!-- Premium Pralines -->

                                        <a
                                            href="./PremiumPralines.php"
                                            class="block px-3 py-2.5 font-montserrat text-sm text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                                        >
                                            Premium Pralines
                                        </a>


                                        <!-- Gifting Collection -->

                                        <a
                                            href="./gifting-collection.php"
                                            class="block px-3 py-2.5 font-montserrat text-sm text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                                        >
                                            Gifting Collection
                                        </a>

                                    </div>

                                </div>



                                <!-- ================================================= -->
                                <!-- VIEW ALL PRODUCTS -->
                                <!-- ================================================= -->

                                <div
                                    class="border-t border-zimpy-cream"
                                >

                                    <a
                                        href="./product.php"
                                        class="group flex items-center justify-between px-6 py-3.5 bg-zimpy-cream hover:bg-[#fff0d8] transition-colors"
                                    >

                                        <span
                                            class="font-montserrat text-xs font-semibold text-zimpy-cocoa"
                                        >
                                            View All Products
                                        </span>


                                        <svg
                                            class="w-4 h-4 text-zimpy-gold group-hover:translate-x-1 transition-transform"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.8"
                                                d="M5 12h14M13 6l6 6-6 6"
                                            />

                                        </svg>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- ============================= -->
                    <!-- CONTACT -->
                    <!-- ============================= -->

                    <a
                        href="./content.php"
                        class="relative text-sm font-semibold text-zimpy-cocoa hover:text-zimpy-red transition-colors duration-300 py-2 group"
                    >

                        Contact Us

                        <span
                            class="absolute left-0 bottom-0 w-0 h-[2px] bg-zimpy-red transition-all duration-300 group-hover:w-full"
                        ></span>

                    </a>

                </nav>



                <!-- ================================================= -->
                <!-- DESKTOP CTA -->
                <!-- ================================================= -->

                <div class="hidden lg:block">

                    <a
                        href="./assets/zimpyProducts.pdf"
                        class="inline-flex items-center gap-2 bg-zimpy-red hover:bg-zimpy-darkred text-white font-montserrat font-semibold text-sm px-6 py-3.5 rounded-full shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-0.5"
                    >

                       Download brochure

                        <svg
                            class="w-4 h-4"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"
                            />

                        </svg>

                    </a>

                </div>



                <!-- ================================================= -->
                <!-- MOBILE MENU BUTTON -->
                <!-- ================================================= -->

                <button
                    id="mobileMenuButton"
                    type="button"
                    aria-label="Open menu"
                    class="lg:hidden w-11 h-11 rounded-full bg-zimpy-cream text-zimpy-cocoa flex items-center justify-center hover:bg-zimpy-red hover:text-white transition-all duration-300"
                >

                    <!-- Hamburger -->

                    <svg
                        id="menuIcon"
                        class="w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />

                    </svg>


                    <!-- Close -->

                    <svg
                        id="closeIcon"
                        class="hidden w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />

                    </svg>

                </button>

            </div>



            <!-- ================================================= -->
            <!-- MOBILE MENU -->
            <!-- ================================================= -->

            <div
                id="mobileMenu"
                class="hidden lg:hidden border-t border-zimpy-cream"
            >

                <div
                    class="py-5 space-y-1 font-montserrat"
                >


                    <!-- HOME -->

                    <a
                        href="./index.php"
                        class="block px-4 py-3 rounded-xl text-sm font-semibold text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                    >
                        Home
                    </a>



                    <!-- ABOUT -->

                    <a
                        href="./about.php"
                        class="block px-4 py-3 rounded-xl text-sm font-semibold text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                    >
                        About Us
                    </a>



                    <!-- ================================================= -->
                    <!-- MOBILE PRODUCTS -->
                    <!-- ================================================= -->

                    <div>


                        <button
                            id="mobileProductsButton"
                            type="button"
                            class="w-full flex items-center justify-between px-4 py-3 rounded-xl text-sm font-semibold text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                        >

                            Products

                            <svg
                                id="productsArrow"
                                class="w-4 h-4 transition-transform duration-300"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M19 9l-7 7-7-7"
                                />

                            </svg>

                        </button>



                        <!-- Product List -->

                        <div
                            id="mobileProducts"
                            class="hidden mt-1 ml-4 pl-4 border-l-2 border-zimpy-gold space-y-1"
                        >


                            <!-- Lovita -->

                            <a
                                href="./lovita.php"
                                class="block px-4 py-2.5 text-sm text-gray-600 hover:text-zimpy-red transition-colors"
                            >
                                Lovita
                            </a>


                            <!-- Dairy Luxe -->

                            <a
                                href="product-details-dairy-luxe.php"
                                class="block px-4 py-2.5 text-sm text-gray-600 hover:text-zimpy-red transition-colors"
                            >
                                Dairy Luxe
                            </a>


                            <!-- Gloria -->

                            <a
                                href="./product-details-gloria.php"
                                class="block px-4 py-2.5 text-sm text-gray-600 hover:text-zimpy-red transition-colors"
                            >
                                Gloria
                            </a>


                            <!-- Choco Surfer -->

                            <a
                                href="./product-details-choco-surfer.php"
                                class="block px-4 py-2.5 text-sm text-gray-600 hover:text-zimpy-red transition-colors"
                            >
                                Choco Surfer
                            </a>


                            <!-- Gracia -->

                            <a
                                href="./product-details-gracia.php"
                                class="block px-4 py-2.5 text-sm text-gray-600 hover:text-zimpy-red transition-colors"
                            >
                                Gracia
                            </a>


                            <!-- Choco Lush -->

                            <a
                                href="./product-details-choco-lush.php"
                                class="block px-4 py-2.5 text-sm text-gray-600 hover:text-zimpy-red transition-colors"
                            >
                                Choco Lush
                            </a>


                            <!-- Le Reve -->

                            <a
                                href="./product-details-le-reve.php"
                                class="block px-4 py-2.5 text-sm text-gray-600 hover:text-zimpy-red transition-colors"
                            >
                                Le Reve
                            </a>


                            <!-- Orlen -->

                            <a
                                href="./product-details-orlen.php"
                                class="block px-4 py-2.5 text-sm text-gray-600 hover:text-zimpy-red transition-colors"
                            >
                                Orlen
                            </a>


                            <!-- Greetings -->

                            <a
                                href="./product-details-greetings.php"
                                class="block px-4 py-2.5 text-sm text-gray-600 hover:text-zimpy-red transition-colors"
                            >
                                Greetings
                            </a>


                            <!-- Goa Special -->

                            <a
                                href="./product-details-goa.php"
                                class="block px-4 py-2.5 text-sm text-gray-600 hover:text-zimpy-red transition-colors"
                            >
                                Goa Special
                            </a>


                            <!-- Golden Moments -->

                            <a
                                href="./productdetailsgolden-moments.php"
                                class="block px-4 py-2.5 text-sm text-gray-600 hover:text-zimpy-red transition-colors"
                            >
                                Golden Moments
                            </a>


                            <!-- Premium Pralines -->

                            <a
                                href="./PremiumPralines.php"
                                class="block px-4 py-2.5 text-sm text-gray-600 hover:text-zimpy-red transition-colors"
                            >
                                Premium Pralines
                            </a>


                            <!-- Gifting Collection -->

                            <a
                                href="./gifting-collection.php"
                                class="block px-4 py-2.5 text-sm text-gray-600 hover:text-zimpy-red transition-colors"
                            >
                                Gifting Collection
                            </a>


                            <!-- View All -->

                            <div class="pt-2">

                                <a
                                    href="./product.php"
                                    class="block px-4 py-2.5 text-xs font-semibold text-zimpy-red"
                                >
                                    View All Products →
                                </a>

                            </div>

                        </div>

                    </div>


                    <!-- ================================================= -->
                    <!-- CONTACT -->
                    <!-- ================================================= -->

                    <a
                        href="./content.php"
                        class="block px-4 py-3 rounded-xl text-sm font-semibold text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                    >
                        Contact Us
                    </a>



                    <!-- ================================================= -->
                    <!-- MOBILE CTA -->
                    <!-- ================================================= -->

                    <div class="pt-4">

                        <a
                            href="#contact"
                            class="flex items-center justify-center gap-2 w-full bg-zimpy-red hover:bg-zimpy-darkred text-white font-semibold text-sm px-6 py-3.5 rounded-full transition-all duration-300"
                        >

                            Download brochure

                            <svg
                                class="w-4 h-4"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"
                                />

                            </svg>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </header>



    <!-- ===================================================== -->
    <!-- JAVASCRIPT -->
    <!-- ===================================================== -->

    <script>


        /* ================================================= */
        /* MOBILE MENU */
        /* ================================================= */


        const mobileMenuButton =
            document.getElementById('mobileMenuButton');


        const mobileMenu =
            document.getElementById('mobileMenu');


        const menuIcon =
            document.getElementById('menuIcon');


        const closeIcon =
            document.getElementById('closeIcon');


        mobileMenuButton.addEventListener('click', () => {

            mobileMenu.classList.toggle('hidden');

            menuIcon.classList.toggle('hidden');

            closeIcon.classList.toggle('hidden');

        });



        /* ================================================= */
        /* MOBILE PRODUCTS DROPDOWN */
        /* ================================================= */


        const mobileProductsButton =
            document.getElementById('mobileProductsButton');


        const mobileProducts =
            document.getElementById('mobileProducts');


        const productsArrow =
            document.getElementById('productsArrow');


        mobileProductsButton.addEventListener('click', () => {

            mobileProducts.classList.toggle('hidden');

            productsArrow.classList.toggle('rotate-180');

        });



        /* ================================================= */
        /* CLOSE MOBILE MENU AFTER CLICKING LINK */
        /* ================================================= */


        const mobileLinks =
            mobileMenu.querySelectorAll('a');


        mobileLinks.forEach(link => {

            link.addEventListener('click', () => {

                mobileMenu.classList.add('hidden');

                menuIcon.classList.remove('hidden');

                closeIcon.classList.add('hidden');

            });

        });

    </script>

</body>

</html>