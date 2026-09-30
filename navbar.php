<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Zimpy | Confectionery Manufacturer</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet"
    >

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

    <!-- ============================= -->
    <!-- HEADER -->
    <!-- ============================= -->

    <header class="sticky top-0 z-50 bg-white border-b border-zimpy-cream shadow-sm">

        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

            <div class="h-20 lg:h-24 flex items-center justify-between">

                <!-- ============================= -->
                <!-- LOGO -->
                <!-- ============================= -->

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


                <!-- ============================= -->
                <!-- DESKTOP NAVIGATION -->
                <!-- ============================= -->

                <nav class="hidden lg:flex items-center gap-8 xl:gap-10 font-montserrat">

                    <!-- Home -->

                    <a
                        href="#"
                        class="relative text-sm font-semibold text-zimpy-cocoa hover:text-zimpy-red transition-colors duration-300 py-2 group"
                    >
                        Home

                        <span
                            class="absolute left-0 bottom-0 w-0 h-[2px] bg-zimpy-red transition-all duration-300 group-hover:w-full"
                        ></span>
                    </a>


                    <!-- About -->

                    <a
                        href="#about"
                        class="relative text-sm font-semibold text-zimpy-cocoa hover:text-zimpy-red transition-colors duration-300 py-2 group"
                    >
                        About Us

                        <span
                            class="absolute left-0 bottom-0 w-0 h-[2px] bg-zimpy-red transition-all duration-300 group-hover:w-full"
                        ></span>
                    </a>


                    <!-- Products Dropdown -->

                    <div class="relative group">

                        <button
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


                        <!-- Dropdown -->

                        <div
                            class="absolute left-1/2 -translate-x-1/2 top-full pt-4 opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-300"
                        >

                            <div
                                class="w-64 bg-white rounded-2xl border border-zimpy-cream shadow-xl overflow-hidden"
                            >

                                <div class="px-5 py-4 border-b border-zimpy-cream">

                                    <p class="font-playfair text-lg font-semibold text-zimpy-cocoa">
                                        Our Products
                                    </p>

                                    <p class="text-xs text-gray-500 mt-1 font-montserrat">
                                        Explore our confectionery range
                                    </p>

                                </div>


                                <a
                                    href="#"
                                    class="flex items-center gap-4 px-5 py-4 hover:bg-zimpy-cream transition-colors duration-200 group/item"
                                >

                                    <span
                                        class="w-10 h-10 rounded-full bg-red-50 flex items-center justify-center text-zimpy-red"
                                    >
                                        🍫
                                    </span>

                                    <div>
                                        <p class="font-montserrat text-sm font-semibold text-zimpy-cocoa">
                                            Chocolates
                                        </p>

                                        <p class="text-xs text-gray-500 mt-1">
                                            Premium chocolates
                                        </p>
                                    </div>

                                </a>


                                <a
                                    href="#"
                                    class="flex items-center gap-4 px-5 py-4 hover:bg-zimpy-cream transition-colors duration-200"
                                >

                                    <span
                                        class="w-10 h-10 rounded-full bg-yellow-50 flex items-center justify-center"
                                    >
                                        🍬
                                    </span>

                                    <div>
                                        <p class="font-montserrat text-sm font-semibold text-zimpy-cocoa">
                                            Toffees
                                        </p>

                                        <p class="text-xs text-gray-500 mt-1">
                                            Delicious toffees
                                        </p>
                                    </div>

                                </a>


                                <a
                                    href="#"
                                    class="flex items-center gap-4 px-5 py-4 hover:bg-zimpy-cream transition-colors duration-200"
                                >

                                    <span
                                        class="w-10 h-10 rounded-full bg-orange-50 flex items-center justify-center"
                                    >
                                        🍭
                                    </span>

                                    <div>
                                        <p class="font-montserrat text-sm font-semibold text-zimpy-cocoa">
                                            Candies
                                        </p>

                                        <p class="text-xs text-gray-500 mt-1">
                                            Fun & flavorful
                                        </p>
                                    </div>

                                </a>


                                <a
                                    href="#"
                                    class="flex items-center gap-4 px-5 py-4 hover:bg-zimpy-cream transition-colors duration-200"
                                >

                                    <span
                                        class="w-10 h-10 rounded-full bg-amber-50 flex items-center justify-center"
                                    >
                                        ✨
                                    </span>

                                    <div>
                                        <p class="font-montserrat text-sm font-semibold text-zimpy-cocoa">
                                            Custom Products
                                        </p>

                                        <p class="text-xs text-gray-500 mt-1">
                                            Private label solutions
                                        </p>
                                    </div>

                                </a>

                            </div>

                        </div>

                    </div>


                    <!-- Manufacturing -->

                    <a
                        href="#manufacturing"
                        class="relative text-sm font-semibold text-zimpy-cocoa hover:text-zimpy-red transition-colors duration-300 py-2 group"
                    >
                        Manufacturing

                        <span
                            class="absolute left-0 bottom-0 w-0 h-[2px] bg-zimpy-red transition-all duration-300 group-hover:w-full"
                        ></span>
                    </a>




                    <!-- Contact -->

                    <a
                        href="#contact"
                        class="relative text-sm font-semibold text-zimpy-cocoa hover:text-zimpy-red transition-colors duration-300 py-2 group"
                    >
                        Contact Us

                        <span
                            class="absolute left-0 bottom-0 w-0 h-[2px] bg-zimpy-red transition-all duration-300 group-hover:w-full"
                        ></span>
                    </a>

                </nav>


                <!-- ============================= -->
                <!-- DESKTOP CTA -->
                <!-- ============================= -->

                <div class="hidden lg:block">

                    <a
                        href="#contact"
                        class="inline-flex items-center gap-2 bg-zimpy-red hover:bg-zimpy-darkred text-white font-montserrat font-semibold text-sm px-6 py-3.5 rounded-full shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-0.5"
                    >

                        Get a Quote

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


                <!-- ============================= -->
                <!-- MOBILE MENU BUTTON -->
                <!-- ============================= -->

                <button
                    id="mobileMenuButton"
                    type="button"
                    aria-label="Open menu"
                    class="lg:hidden w-11 h-11 rounded-full bg-zimpy-cream text-zimpy-cocoa flex items-center justify-center hover:bg-zimpy-red hover:text-white transition-all duration-300"
                >

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


            <!-- ============================= -->
            <!-- MOBILE MENU -->
            <!-- ============================= -->

            <div
                id="mobileMenu"
                class="hidden lg:hidden border-t border-zimpy-cream"
            >

                <div class="py-5 space-y-1 font-montserrat">


                    <!-- Home -->

                    <a
                        href="#"
                        class="block px-4 py-3 rounded-xl text-sm font-semibold text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                    >
                        Home
                    </a>


                    <!-- About -->

                    <a
                        href="#about"
                        class="block px-4 py-3 rounded-xl text-sm font-semibold text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                    >
                        About Us
                    </a>


                    <!-- Mobile Products -->

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


                        <div
                            id="mobileProducts"
                            class="hidden mt-1 ml-4 pl-4 border-l-2 border-zimpy-gold space-y-1"
                        >

                            <a
                                href="#"
                                class="block px-4 py-2.5 text-sm text-gray-600 hover:text-zimpy-red transition-colors"
                            >
                                Chocolates
                            </a>

                            <a
                                href="#"
                                class="block px-4 py-2.5 text-sm text-gray-600 hover:text-zimpy-red transition-colors"
                            >
                                Toffees
                            </a>

                            <a
                                href="#"
                                class="block px-4 py-2.5 text-sm text-gray-600 hover:text-zimpy-red transition-colors"
                            >
                                Candies
                            </a>

                            <a
                                href="#"
                                class="block px-4 py-2.5 text-sm text-gray-600 hover:text-zimpy-red transition-colors"
                            >
                                Custom Products
                            </a>

                        </div>

                    </div>


                    <!-- Manufacturing -->

                    <a
                        href="#manufacturing"
                        class="block px-4 py-3 rounded-xl text-sm font-semibold text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                    >
                        Manufacturing
                    </a>


                    <!-- Private Label -->

                    <a
                        href="#private-label"
                        class="block px-4 py-3 rounded-xl text-sm font-semibold text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                    >
                        Private Label
                    </a>


                    <!-- Contact -->

                    <a
                        href="#contact"
                        class="block px-4 py-3 rounded-xl text-sm font-semibold text-zimpy-cocoa hover:bg-zimpy-cream hover:text-zimpy-red transition-colors"
                    >
                        Contact Us
                    </a>


                    <!-- Mobile CTA -->

                    <div class="pt-4">

                        <a
                            href="#contact"
                            class="flex items-center justify-center gap-2 w-full bg-zimpy-red hover:bg-zimpy-darkred text-white font-semibold text-sm px-6 py-3.5 rounded-full transition-all duration-300"
                        >

                            Get a Quote

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


   


    <!-- ============================= -->
    <!-- JAVASCRIPT -->
    <!-- ============================= -->

    <script>

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


        /* Mobile Products Dropdown */

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


        /* Close mobile menu after clicking a link */

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