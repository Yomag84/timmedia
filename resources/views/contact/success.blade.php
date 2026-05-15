<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Sent - TIMMedia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .hero-bg {
            background:
                radial-gradient(ellipse 80% 50% at 20% 30%, rgba(37,99,168,0.18) 0%, transparent 60%),
                radial-gradient(ellipse 60% 60% at 80% 70%, rgba(245,158,11,0.12) 0%, transparent 60%),
                linear-gradient(160deg, #0a1f40 0%, #0f2d5e 40%, #1a4480 100%);
        }
    </style>
</head>
<body class="hero-bg min-h-screen flex items-center justify-center px-4">
    <div class="max-w-xl w-full bg-white rounded-2xl shadow-2xl p-10 text-center">
        <div class="w-16 h-16 rounded-2xl bg-green-100 mx-auto mb-6 flex items-center justify-center">
            <svg class="w-9 h-9 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        <h1 class="text-3xl font-black text-gray-900 mb-3">Message Sent Successfully</h1>
        <p class="text-gray-600 leading-relaxed mb-8">
            Thank you for contacting TIMMedia. Your message has been sent directly to our team email address, and we will respond as soon as possible.
        </p>
        <a href="{{ route('home') }}"
           class="inline-flex items-center gap-2 bg-blue-900 hover:bg-blue-800 text-white font-semibold px-6 py-3 rounded-xl transition-all hover:-translate-y-0.5">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Back to Homepage
        </a>
    </div>
</body>
</html>
