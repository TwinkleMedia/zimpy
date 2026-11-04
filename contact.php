<?php
// ---------- Settings ----------
$to = 'info@zimpychocolates.com';   // where enquiries are sent

$businessTypes = [
    'distributor' => 'Distributor', 'wholesaler' => 'Wholesaler', 'retailer' => 'Retailer',
    'supermarket' => 'Supermarket', 'corporate' => 'Corporate Buyer', 'hospitality' => 'Hospitality', 'other' => 'Other',
];
$productOptions = [
    'lovita' => 'Lovita', 'dairy-luxe' => 'Dairy Luxe', 'gloria' => 'Gloria', 'choco-surfer' => 'Choco Surfer',
    'gracia' => 'Gracia', 'choco-lush' => 'Choco Lush', 'le-reve' => 'Le Reve', 'orlen' => 'Orlen',
    'greetings' => 'Greetings', 'goa-special' => 'Goa Special', 'golden-moments' => 'Golden Moments',
    'premium-pralines' => 'Premium Pralines', 'gifting-collection' => 'Gifting Collection',
    'luxor' => 'Luxor', 'private-label' => 'Private Label',
];

// ---------- Form handling ----------
$e = fn($s) => htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
$clean = fn($s) => trim(str_replace(["\r", "\n"], ' ', (string)$s));   // blocks header injection
$old = ['name' => '', 'company' => '', 'email' => '', 'phone' => '', 'business_type' => '', 'product' => '', 'message' => ''];
$errors = [];
$sent = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($old as $k => $_) { $old[$k] = $k === 'message' ? trim($_POST[$k] ?? '') : $clean($_POST[$k] ?? ''); }

    if (!empty($_POST['website'])) { $sent = true; }   // honeypot: bots fill this hidden field
    else {
        if ($old['name'] === '')                              $errors['name'] = 'Please enter your name.';
        if (!filter_var($old['email'], FILTER_VALIDATE_EMAIL)) $errors['email'] = 'Please enter a valid email address.';
        if (!preg_match('/^[0-9+\-\s()]{7,20}$/', $old['phone'])) $errors['phone'] = 'Please enter a valid phone number.';
        if (mb_strlen($old['message']) < 10)                  $errors['message'] = 'Please tell us a little about your requirement.';

        if (!$errors) {
            $body = "Name: {$old['name']}\nCompany: {$old['company']}\nEmail: {$old['email']}\nPhone: {$old['phone']}\n"
                  . 'Business type: ' . ($businessTypes[$old['business_type']] ?? '-') . "\n"
                  . 'Product interest: ' . ($productOptions[$old['product']] ?? '-') . "\n\nMessage:\n{$old['message']}\n";
            $headers = "From: Zimpy Website <$to>\r\nReply-To: {$old['email']}\r\nContent-Type: text/plain; charset=UTF-8";
            if (mail($to, 'New website enquiry from ' . $old['name'], $body, $headers)) {
                $sent = true;
                $old = array_map(fn() => '', $old);
            } else {
                $errors['form'] = 'We could not send your enquiry just now. Please call or email us directly.';
            }
        }
    }
}

$input = 'w-full bg-white border border-[#351B16]/15 rounded-xl px-4 py-3.5 text-[15px] text-[#351B16] placeholder:text-[#351B16]/40 outline-none transition focus:border-zimpy-red focus:ring-4 focus:ring-zimpy-red/10';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Zimpy Chocolates</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Defines the zimpy-* colours and font classes this page relies on
        tailwind.config = {
            theme: { extend: {
                colors: { zimpy: { cocoa: '#351B16', gold: '#C9A227', red: '#C0182B', darkred: '#9E1222', cream: '#F8F3EA' } },
                fontFamily: { playfair: ['"Playfair Display"', 'Georgia', 'serif'], montserrat: ['Montserrat', 'system-ui', 'sans-serif'] },
            } }
        };
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">

    <style>
        .font-playfair { font-family: 'Playfair Display', Georgia, serif; }
        .font-montserrat { font-family: 'Montserrat', system-ui, sans-serif; }
        a:focus-visible, button:focus-visible { outline: 2px solid #C9A227; outline-offset: 3px; }
        @keyframes up { from { opacity: 0; transform: translateY(22px); } to { opacity: 1; transform: none; } }
        .hero-in { animation: up .85s cubic-bezier(.22, 1, .36, 1) both; animation-delay: var(--d, 0ms); }
        .info-card { transition: transform .3s ease, box-shadow .3s ease; }
        .info-card:hover { transform: translateY(-4px); box-shadow: 0 18px 30px -18px rgba(53, 27, 22, .35); }
        @media (prefers-reduced-motion: reduce) { .hero-in { animation: none; } .info-card { transition: none; } .info-card:hover { transform: none; } }
    </style>
</head>

<body class="font-montserrat bg-zimpy-cream text-zimpy-cocoa">
    <?php include "./navbar.php"; ?>

    <!-- ========== HERO ========== -->
    <section class="relative overflow-hidden bg-zimpy-cocoa">
        <div class="absolute -right-32 -top-32 w-96 h-96 rounded-full border border-zimpy-gold/20" aria-hidden="true"></div>
        <div class="absolute -right-16 -top-16 w-72 h-72 rounded-full border border-zimpy-gold/20" aria-hidden="true"></div>
        <div class="absolute -left-24 -bottom-24 w-72 h-72 rounded-full bg-zimpy-red/20 blur-3xl" aria-hidden="true"></div>

        <div class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 pt-16 sm:pt-20 lg:pt-24 pb-32 sm:pb-36">
            <div class="max-w-3xl">
                <p class="hero-in text-sm font-semibold text-zimpy-gold" style="--d:80ms">Contact Zimpy</p>

                <h1 class="hero-in font-playfair mt-4 text-4xl sm:text-5xl lg:text-6xl leading-[1.06] font-semibold text-white" style="--d:200ms">
                    Let's build something sweet together.
                </h1>

                <p class="hero-in mt-6 max-w-2xl text-base sm:text-lg leading-8 text-white/70" style="--d:340ms">
                    Looking for confectionery products, business solutions, private-label manufacturing or a long-term partnership? We'd love to hear from you.
                </p>

                <a href="#contact-form" class="hero-in group mt-9 inline-flex items-center gap-2 bg-zimpy-red hover:bg-zimpy-darkred text-white font-semibold text-sm px-7 py-3.5 rounded-full transition-colors" style="--d:480ms">
                    Send an enquiry
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ========== CONTACT CARDS (overlap the hero) ========== -->
    <section class="relative -mt-20 sm:-mt-24">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-5">

                <!-- Address -->
                <div class="info-card bg-white rounded-2xl p-7 shadow-lg shadow-zimpy-cocoa/10">
                    <div class="w-12 h-12 rounded-full bg-zimpy-cream text-zimpy-red flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M12 21s7-5.2 7-11a7 7 0 10-14 0c0 5.8 7 11 7 11z" /><circle cx="12" cy="10" r="2.5" /></svg>
                    </div>
                    <h2 class="font-playfair mt-5 text-xl">Visit us</h2>
                    <address class="mt-2 not-italic text-sm leading-6 text-zimpy-cocoa/70">
                        A-10, Kripa Industrial Complex, Sonale Village, Thane, Bhiwandi – 421 302, Maharashtra, India
                    </address>
                    <a href="https://www.google.com/maps/search/?api=1&query=<?= rawurlencode('Kripa Industrial Complex, Sonale Village, Bhiwandi 421302') ?>" target="_blank" rel="noopener"
                       class="mt-3 inline-block text-sm font-semibold text-zimpy-red hover:underline">Open in Maps</a>
                </div>

                <!-- Phone -->
                <div class="info-card bg-white rounded-2xl p-7 shadow-lg shadow-zimpy-cocoa/10">
                    <div class="w-12 h-12 rounded-full bg-zimpy-cream text-zimpy-red flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6A19.8 19.8 0 012.1 4.2 2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 2 .7 2.9a2 2 0 01-.5 2.1L8 9.9a16 16 0 006 6l1.2-1.2a2 2 0 012.1-.5c.9.3 1.9.6 2.9.7a2 2 0 011.8 2z" /></svg>
                    </div>
                    <h2 class="font-playfair mt-5 text-xl">Call us</h2>
                    <p class="mt-2 text-sm leading-7">
                        <a href="tel:+917400440978" class="block hover:text-zimpy-red transition-colors">+91 7400440978</a>
                        <a href="tel:+919892549023" class="block hover:text-zimpy-red transition-colors">+91 9892549023</a>
                    </p>
                </div>

                <!-- Email -->
                <div class="info-card bg-white rounded-2xl p-7 shadow-lg shadow-zimpy-cocoa/10">
                    <div class="w-12 h-12 rounded-full bg-zimpy-cream text-zimpy-red flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M4 4h16a2 2 0 012 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M22 6l-10 7L2 6" /></svg>
                    </div>
                    <h2 class="font-playfair mt-5 text-xl">Email</h2>
                    <p class="mt-2 text-sm leading-6 break-all">
                        <a href="mailto:<?= $e($to) ?>" class="hover:text-zimpy-red transition-colors"><?= $e($to) ?></a>
                    </p>
                </div>

                <!-- B2B -->
                <div class="info-card bg-zimpy-red rounded-2xl p-7 text-white shadow-lg shadow-zimpy-red/20">
                    <div class="w-12 h-12 rounded-full bg-white/15 text-zimpy-gold flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6M8 10h1M8 13h1M15 10h1M15 13h1" /></svg>
                    </div>
                    <h2 class="font-playfair mt-5 text-xl">Business with us</h2>
                    <p class="mt-2 text-sm leading-6 text-white/85">Talk to our team about products, distribution and business opportunities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== ENQUIRY ========== -->
    <section id="contact-form" class="scroll-mt-6">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-20 lg:py-28">
            <div class="grid lg:grid-cols-[0.8fr_1.2fr] gap-12 lg:gap-20 items-start">

                <!-- Left -->
                <div class="lg:sticky lg:top-8">
                    <h2 class="font-playfair text-3xl sm:text-4xl lg:text-[42px] leading-[1.1] font-semibold">
                        Tell us about your requirements
                    </h2>
                    <p class="mt-5 text-base leading-7 text-zimpy-cocoa/70 max-w-md">
                        Share a few details about your business and what you need. Our team will get in touch to understand how we can work together.
                    </p>

                    <ul class="mt-9 space-y-6 max-w-md">
                        <?php
                        $topics = [
                            ['Product enquiries',      "Tell us which products or categories you're interested in."],
                            ['Business partnerships',  'Discuss distribution, retail and other business opportunities.'],
                            ['Private label',          'Discuss private-label and custom confectionery requirements.'],
                        ];
                        foreach ($topics as [$t, $d]): ?>
                            <li class="flex gap-4">
                                <span class="mt-0.5 w-8 h-8 shrink-0 rounded-full bg-zimpy-gold/20 text-zimpy-red flex items-center justify-center" aria-hidden="true">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" d="M5 13l4 4L19 7" /></svg>
                                </span>
                                <div>
                                    <h3 class="text-base font-semibold"><?= $t ?></h3>
                                    <p class="mt-1 text-sm leading-6 text-zimpy-cocoa/65"><?= $d ?></p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Form card -->
                <div class="bg-white rounded-3xl p-6 sm:p-9 lg:p-11 shadow-xl shadow-zimpy-cocoa/10 border border-zimpy-cocoa/5">

                    <?php if ($sent): ?>
                        <div class="rounded-2xl bg-green-50 border border-green-200 text-green-900 p-6 mb-6" role="status">
                            <p class="font-playfair text-2xl">Thank you, your enquiry is on its way.</p>
                            <p class="mt-2 text-sm leading-6">Our team will review it and get back to you. For anything urgent, call us on +91 7400440978.</p>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($errors['form'])): ?>
                        <div class="rounded-2xl bg-red-50 border border-red-200 text-red-900 p-5 mb-6 text-sm leading-6" role="alert"><?= $e($errors['form']) ?></div>
                    <?php endif; ?>

                    <form action="#contact-form" method="POST" class="space-y-6" novalidate>

                        <!-- Honeypot: hidden from people, filled by bots -->
                        <div class="hidden" aria-hidden="true">
                            <label>Leave this empty <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block mb-2 text-sm font-semibold">Your name <span class="text-zimpy-red" aria-hidden="true">*</span></label>
                                <input type="text" id="name" name="name" required autocomplete="name" placeholder="Enter your name"
                                       value="<?= $e($old['name']) ?>" class="<?= $input ?>" <?= isset($errors['name']) ? 'aria-invalid="true"' : '' ?>>
                                <?php if (isset($errors['name'])): ?><p class="mt-1.5 text-sm text-zimpy-red"><?= $e($errors['name']) ?></p><?php endif; ?>
                            </div>
                            <div>
                                <label for="company" class="block mb-2 text-sm font-semibold">Company name</label>
                                <input type="text" id="company" name="company" autocomplete="organization" placeholder="Your company"
                                       value="<?= $e($old['company']) ?>" class="<?= $input ?>">
                            </div>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-semibold">Business email <span class="text-zimpy-red" aria-hidden="true">*</span></label>
                                <input type="email" id="email" name="email" required autocomplete="email" placeholder="you@company.com"
                                       value="<?= $e($old['email']) ?>" class="<?= $input ?>" <?= isset($errors['email']) ? 'aria-invalid="true"' : '' ?>>
                                <?php if (isset($errors['email'])): ?><p class="mt-1.5 text-sm text-zimpy-red"><?= $e($errors['email']) ?></p><?php endif; ?>
                            </div>
                            <div>
                                <label for="phone" class="block mb-2 text-sm font-semibold">Phone number <span class="text-zimpy-red" aria-hidden="true">*</span></label>
                                <input type="tel" id="phone" name="phone" required autocomplete="tel" placeholder="+91 XXXXX XXXXX"
                                       value="<?= $e($old['phone']) ?>" class="<?= $input ?>" <?= isset($errors['phone']) ? 'aria-invalid="true"' : '' ?>>
                                <?php if (isset($errors['phone'])): ?><p class="mt-1.5 text-sm text-zimpy-red"><?= $e($errors['phone']) ?></p><?php endif; ?>
                            </div>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label for="business_type" class="block mb-2 text-sm font-semibold">Business type</label>
                                <select id="business_type" name="business_type" class="<?= $input ?>">
                                    <option value="">Select business type</option>
                                    <?php foreach ($businessTypes as $v => $l): ?>
                                        <option value="<?= $e($v) ?>" <?= $old['business_type'] === $v ? 'selected' : '' ?>><?= $e($l) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div>
                                <label for="product" class="block mb-2 text-sm font-semibold">Product interest</label>
                                <select id="product" name="product" class="<?= $input ?>">
                                    <option value="">Select a product</option>
                                    <?php foreach ($productOptions as $v => $l): ?>
                                        <option value="<?= $e($v) ?>" <?= $old['product'] === $v ? 'selected' : '' ?>><?= $e($l) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block mb-2 text-sm font-semibold">Your requirement <span class="text-zimpy-red" aria-hidden="true">*</span></label>
                            <textarea id="message" name="message" rows="5" required placeholder="Tell us about your business, the products you need and the quantities."
                                      class="<?= $input ?> resize-y" <?= isset($errors['message']) ? 'aria-invalid="true"' : '' ?>><?= $e($old['message']) ?></textarea>
                            <?php if (isset($errors['message'])): ?><p class="mt-1.5 text-sm text-zimpy-red"><?= $e($errors['message']) ?></p><?php endif; ?>
                        </div>

                        <button type="submit" class="group w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-zimpy-red hover:bg-zimpy-darkred text-white font-semibold text-sm px-8 py-4 rounded-full transition-colors">
                            Send enquiry
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== PRODUCTS CTA ========== -->
    <section class="bg-zimpy-cocoa border-y border-zimpy-gold">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-14 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
            <div>
                <h2 class="font-playfair text-2xl sm:text-3xl text-white">Looking for something specific?</h2>
                <p class="mt-2 text-base text-white/65">Browse the full Zimpy collection before you get in touch.</p>
            </div>
            <a href="./products.php" class="group inline-flex items-center justify-center gap-2 shrink-0 border border-zimpy-gold text-zimpy-gold hover:bg-zimpy-gold hover:text-zimpy-cocoa text-sm font-semibold px-7 py-3.5 rounded-full transition-colors">
                View products
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M13 6l6 6-6 6" /></svg>
            </a>
        </div>
    </section>

    <?php include "./footer.php"; ?>
</body>

</html>