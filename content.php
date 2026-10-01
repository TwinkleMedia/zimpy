<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Us Page </title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">
</head>
<body>
    <?php 
    include "./navbar.php"
    ?>
    <!-- ========================================================= -->
<!-- CONTACT HERO -->
<!-- ========================================================= -->

<section
    class="relative bg-zimpy-cocoa overflow-hidden"
>

    <!-- Decorative Circle -->

    <div
        class="absolute -right-32 -top-32 w-96 h-96 rounded-full border border-zimpy-gold/10"
    ></div>


    <div
        class="absolute -right-20 -top-20 w-72 h-72 rounded-full border border-zimpy-gold/10"
    ></div>


    <div
        class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24"
    >

        <div class="max-w-3xl">

            <div class="flex items-center gap-3 mb-5">

                <span
                    class="w-8 h-px bg-zimpy-gold"
                ></span>

                <span
                    class="font-montserrat text-[10px] sm:text-xs font-semibold uppercase tracking-[0.25em] text-zimpy-gold"
                >
                    Contact Zimpy
                </span>

            </div>


            <h1
                class="font-playfair text-4xl sm:text-5xl lg:text-6xl leading-[1.08] font-semibold text-white"
            >

                Let's Build Something

                <span class="text-zimpy-gold">
                    Sweet Together
                </span>

            </h1>


            <p
                class="mt-6 max-w-2xl font-montserrat text-sm sm:text-base leading-7 text-white/65"
            >
                Whether you're looking for confectionery products,
                business solutions, private-label manufacturing,
                or a long-term partnership, we'd love to hear from you.
            </p>


            <a
                href="#contact-form"
                class="inline-flex items-center gap-2 mt-8 bg-zimpy-red hover:bg-zimpy-darkred text-white font-montserrat font-semibold text-sm px-6 py-3.5 rounded-full transition-all duration-300 hover:-translate-y-0.5"
            >

                Send an Enquiry

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

</section>


<!-- ========================================================= -->
<!-- CONTACT INFORMATION -->
<!-- ========================================================= -->

<section class="bg-zimpy-cream">

    <div
        class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-12 sm:py-16"
    >

        <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4"
        >


            <!-- ADDRESS -->

            <div
                class="bg-white p-6 border border-zimpy-cocoa/5"
            >

                <div
                    class="w-10 h-10 flex items-center justify-center bg-zimpy-cream text-zimpy-red mb-5"
                >

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.7"
                            d="M12 21s7-5.2 7-11a7 7 0 10-14 0c0 5.8 7 11 7 11z"
                        />

                        <circle
                            cx="12"
                            cy="10"
                            r="2.5"
                        />

                    </svg>

                </div>


                <p
                    class="font-montserrat text-[9px] font-semibold uppercase tracking-[0.18em] text-zimpy-gold"
                >
                    Visit Us
                </p>


                <h3
                    class="mt-2 font-playfair text-xl text-zimpy-cocoa"
                >
                    Our Address
                </h3>


                <p
                    class="mt-2 font-montserrat text-xs leading-5 text-gray-500"
                >
                    Your company address goes here.
                </p>

            </div>



            <!-- PHONE -->

            <div
                class="bg-white p-6 border border-zimpy-cocoa/5"
            >

                <div
                    class="w-10 h-10 flex items-center justify-center bg-zimpy-cream text-zimpy-red mb-5"
                >

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.7"
                            d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6A19.8 19.8 0 012.1 4.2 2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 2 .7 2.9a2 2 0 01-.5 2.1L8 9.9a16 16 0 006 6l1.2-1.2a2 2 0 012.1-.5c.9.3 1.9.6 2.9.7a2 2 0 011.8 2z"
                        />

                    </svg>

                </div>


                <p
                    class="font-montserrat text-[9px] font-semibold uppercase tracking-[0.18em] text-zimpy-gold"
                >
                    Call Us
                </p>


                <h3
                    class="mt-2 font-playfair text-xl text-zimpy-cocoa"
                >
                    Phone
                </h3>


                <p
                    class="mt-2 font-montserrat text-xs text-gray-500"
                >
                    +91 XXXXX XXXXX
                </p>

            </div>



            <!-- EMAIL -->

            <div
                class="bg-white p-6 border border-zimpy-cocoa/5"
            >

                <div
                    class="w-10 h-10 flex items-center justify-center bg-zimpy-cream text-zimpy-red mb-5"
                >

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.7"
                            d="M4 4h16a2 2 0 012 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2z"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.7"
                            d="M22 6l-10 7L2 6"
                        />

                    </svg>

                </div>


                <p
                    class="font-montserrat text-[9px] font-semibold uppercase tracking-[0.18em] text-zimpy-gold"
                >
                    Write To Us
                </p>


                <h3
                    class="mt-2 font-playfair text-xl text-zimpy-cocoa"
                >
                    Email
                </h3>


                <p
                    class="mt-2 font-montserrat text-xs text-gray-500 break-all"
                >
                    info@yourcompany.com
                </p>

            </div>



            <!-- BUSINESS -->

            <div
                class="bg-zimpy-red p-6 text-white"
            >

                <div
                    class="w-10 h-10 flex items-center justify-center bg-white/10 text-zimpy-gold mb-5"
                >

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.7"
                            d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6M8 10h1M8 13h1M15 10h1M15 13h1"
                        />

                    </svg>

                </div>


                <p
                    class="font-montserrat text-[9px] font-semibold uppercase tracking-[0.18em] text-white/60"
                >
                    B2B Enquiries
                </p>


                <h3
                    class="mt-2 font-playfair text-xl"
                >
                    Business With Us
                </h3>


                <p
                    class="mt-2 font-montserrat text-xs leading-5 text-white/75"
                >
                    Talk to our team about products,
                    distribution and business opportunities.
                </p>

            </div>

        </div>

    </div>

</section>



<!-- ========================================================= -->
<!-- ENQUIRY SECTION -->
<!-- ========================================================= -->

<section
    id="contact-form"
    class="bg-white"
>

    <div
        class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-16 sm:py-20"
    >

        <div
            class="grid grid-cols-1 lg:grid-cols-[0.75fr_1.25fr] gap-12 lg:gap-20"
        >


            <!-- ================================================= -->
            <!-- LEFT CONTENT -->
            <!-- ================================================= -->

            <div>

                <div class="flex items-center gap-3 mb-4">

                    <span
                        class="w-7 h-px bg-zimpy-gold"
                    ></span>

                    <span
                        class="font-montserrat text-[9px] font-semibold uppercase tracking-[0.2em] text-zimpy-gold"
                    >
                        Get In Touch
                    </span>

                </div>


                <h2
                    class="font-playfair text-3xl sm:text-4xl leading-tight font-semibold text-zimpy-cocoa"
                >
                    Tell Us About
                    <span class="text-zimpy-red">
                        Your Requirements
                    </span>
                </h2>


                <p
                    class="mt-5 font-montserrat text-sm leading-6 text-gray-500"
                >
                    Share a few details about your business and
                    requirements. Our team can get in touch to
                    understand how we can work together.
                </p>


                <!-- B2B POINTS -->

                <div class="mt-8 space-y-5">


                    <div class="flex gap-4">

                        <div
                            class="w-8 h-8 shrink-0 rounded-full bg-zimpy-cream text-zimpy-red flex items-center justify-center"
                        >

                            <span
                                class="font-playfair text-sm"
                            >
                                01
                            </span>

                        </div>


                        <div>

                            <h3
                                class="font-montserrat text-sm font-semibold text-zimpy-cocoa"
                            >
                                Product Enquiries
                            </h3>

                            <p
                                class="mt-1 font-montserrat text-xs leading-5 text-gray-500"
                            >
                                Tell us which products or categories
                                you're interested in.
                            </p>

                        </div>

                    </div>



                    <div class="flex gap-4">

                        <div
                            class="w-8 h-8 shrink-0 rounded-full bg-zimpy-cream text-zimpy-red flex items-center justify-center"
                        >

                            <span
                                class="font-playfair text-sm"
                            >
                                02
                            </span>

                        </div>


                        <div>

                            <h3
                                class="font-montserrat text-sm font-semibold text-zimpy-cocoa"
                            >
                                Business Partnerships
                            </h3>

                            <p
                                class="mt-1 font-montserrat text-xs leading-5 text-gray-500"
                            >
                                Discuss distribution, retail and
                                other business opportunities.
                            </p>

                        </div>

                    </div>



                    <div class="flex gap-4">

                        <div
                            class="w-8 h-8 shrink-0 rounded-full bg-zimpy-cream text-zimpy-red flex items-center justify-center"
                        >

                            <span
                                class="font-playfair text-sm"
                            >
                                03
                            </span>

                        </div>


                        <div>

                            <h3
                                class="font-montserrat text-sm font-semibold text-zimpy-cocoa"
                            >
                                Private Label
                            </h3>

                            <p
                                class="mt-1 font-montserrat text-xs leading-5 text-gray-500"
                            >
                                Discuss private-label and custom
                                confectionery requirements.
                            </p>

                        </div>

                    </div>

                </div>

            </div>



            <!-- ================================================= -->
            <!-- FORM -->
            <!-- ================================================= -->

            <div
                class="bg-zimpy-cream p-6 sm:p-8 lg:p-10"
            >

                <form
                    action=""
                    method="POST"
                    class="space-y-5"
                >


                    <!-- NAME + COMPANY -->

                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 gap-5"
                    >

                        <div>

                            <label
                                for="name"
                                class="block mb-2 font-montserrat text-xs font-semibold text-zimpy-cocoa"
                            >
                                Your Name
                                <span class="text-zimpy-red">*</span>
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                required
                                placeholder="Enter your name"
                                class="w-full bg-white border border-zimpy-cocoa/10 px-4 py-3 text-sm font-montserrat text-zimpy-cocoa placeholder:text-gray-400 outline-none focus:border-zimpy-red transition-colors"
                            >

                        </div>


                        <div>

                            <label
                                for="company"
                                class="block mb-2 font-montserrat text-xs font-semibold text-zimpy-cocoa"
                            >
                                Company Name
                            </label>

                            <input
                                type="text"
                                id="company"
                                name="company"
                                placeholder="Your company"
                                class="w-full bg-white border border-zimpy-cocoa/10 px-4 py-3 text-sm font-montserrat text-zimpy-cocoa placeholder:text-gray-400 outline-none focus:border-zimpy-red transition-colors"
                            >

                        </div>

                    </div>



                    <!-- EMAIL + PHONE -->

                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 gap-5"
                    >

                        <div>

                            <label
                                for="email"
                                class="block mb-2 font-montserrat text-xs font-semibold text-zimpy-cocoa"
                            >
                                Business Email
                                <span class="text-zimpy-red">*</span>
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                required
                                placeholder="you@company.com"
                                class="w-full bg-white border border-zimpy-cocoa/10 px-4 py-3 text-sm font-montserrat text-zimpy-cocoa placeholder:text-gray-400 outline-none focus:border-zimpy-red transition-colors"
                            >

                        </div>


                        <div>

                            <label
                                for="phone"
                                class="block mb-2 font-montserrat text-xs font-semibold text-zimpy-cocoa"
                            >
                                Phone Number
                                <span class="text-zimpy-red">*</span>
                            </label>

                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                required
                                placeholder="+91 XXXXX XXXXX"
                                class="w-full bg-white border border-zimpy-cocoa/10 px-4 py-3 text-sm font-montserrat text-zimpy-cocoa placeholder:text-gray-400 outline-none focus:border-zimpy-red transition-colors"
                            >

                        </div>

                    </div>



                    <!-- BUSINESS TYPE + PRODUCT -->

                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 gap-5"
                    >

                        <div>

                            <label
                                for="business_type"
                                class="block mb-2 font-montserrat text-xs font-semibold text-zimpy-cocoa"
                            >
                                Business Type
                            </label>

                            <select
                                id="business_type"
                                name="business_type"
                                class="w-full bg-white border border-zimpy-cocoa/10 px-4 py-3 text-sm font-montserrat text-zimpy-cocoa outline-none focus:border-zimpy-red transition-colors"
                            >

                                <option value="">
                                    Select business type
                                </option>

                                <option value="distributor">
                                    Distributor
                                </option>

                                <option value="wholesaler">
                                    Wholesaler
                                </option>

                                <option value="retailer">
                                    Retailer
                                </option>

                                <option value="supermarket">
                                    Supermarket
                                </option>

                                <option value="corporate">
                                    Corporate Buyer
                                </option>

                                <option value="hospitality">
                                    Hospitality
                                </option>

                                <option value="other">
                                    Other
                                </option>

                            </select>

                        </div>



                        <div>

                            <label
                                for="product"
                                class="block mb-2 font-montserrat text-xs font-semibold text-zimpy-cocoa"
                            >
                                Product Interest
                            </label>

                            <select
                                id="product"
                                name="product"
                                class="w-full bg-white border border-zimpy-cocoa/10 px-4 py-3 text-sm font-montserrat text-zimpy-cocoa outline-none focus:border-zimpy-red transition-colors"
                            >

                                <option value="">
                                    Select a product
                                </option>

                                <option value="lovita">
                                    Lovita
                                </option>

                                <option value="dairy-luxe">
                                    Dairy Luxe
                                </option>

                                <option value="gloria">
                                    Gloria
                                </option>

                                <option value="choco-surfer">
                                    Choco Surfer
                                </option>

                                <option value="gracia">
                                    Gracia
                                </option>

                                <option value="choco-lush">
                                    Choco Lush
                                </option>

                                <option value="le-reve">
                                    Le Reve
                                </option>

                                <option value="orlen">
                                    Orlen
                                </option>

                                <option value="greetings">
                                    Greetings
                                </option>

                                <option value="goa-special">
                                    Goa Special
                                </option>

                                <option value="golden-moments">
                                    Golden Moments
                                </option>

                                <option value="premium-pralines">
                                    Premium Pralines
                                </option>

                                <option value="gifting-collection">
                                    Gifting Collection
                                </option>

                                <option value="luxor">
                                    Luxor
                                </option>

                                <option value="private-label">
                                    Private Label
                                </option>

                            </select>

                        </div>

                    </div>



                    <!-- MESSAGE -->

                    <div>

                        <label
                            for="message"
                            class="block mb-2 font-montserrat text-xs font-semibold text-zimpy-cocoa"
                        >
                            Tell Us About Your Requirement
                            <span class="text-zimpy-red">*</span>
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            required
                            placeholder="Tell us about your business, products required, quantity or any other requirements..."
                            class="w-full bg-white border border-zimpy-cocoa/10 px-4 py-3 text-sm font-montserrat text-zimpy-cocoa placeholder:text-gray-400 outline-none focus:border-zimpy-red transition-colors resize-none"
                        ></textarea>

                    </div>



                    <!-- SUBMIT -->

                    <button
                        type="submit"
                        class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-zimpy-red hover:bg-zimpy-darkred text-white font-montserrat font-semibold text-sm px-7 py-3.5 rounded-full transition-all duration-300 hover:-translate-y-0.5"
                    >

                        Send Enquiry

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

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>



<!-- ========================================================= -->
<!-- PRODUCT INTEREST STRIP -->
<!-- ========================================================= -->

<section
    class="bg-zimpy-cocoa"
>

    <div
        class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-12 sm:py-14"
    >

        <div
            class="flex flex-col md:flex-row md:items-center md:justify-between gap-6"
        >

            <div>

                <p
                    class="font-montserrat text-[9px] font-semibold uppercase tracking-[0.2em] text-zimpy-gold"
                >
                    Looking For Something Specific?
                </p>

                <h2
                    class="mt-2 font-playfair text-2xl sm:text-3xl text-white"
                >
                    Explore the Zimpy Collection
                </h2>

            </div>


            <a
                href="./products.php"
                class="inline-flex items-center justify-center gap-2 shrink-0 border border-zimpy-gold text-zimpy-gold hover:bg-zimpy-gold hover:text-zimpy-cocoa font-montserrat text-sm font-semibold px-6 py-3 rounded-full transition-all duration-300"
            >

                View Products

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
                        d="M5 12h14M13 6l6 6-6 6"
                    />

                </svg>

            </a>

        </div>

    </div>

</section>
<?php 
include "./footer.php"
?>
    
</body>
</html>