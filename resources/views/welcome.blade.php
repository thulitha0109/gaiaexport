<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GaiaExport | Coming Soon</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Tailwind Script added for standalone instant visualization if Vite isn't serving/compiled -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #0f172a;
            color: #f8fafc;
        }

        /* Animated Blob Background */
        .blob-bg {
            position: absolute;
            width: 80vw;
            height: 80vw;
            max-width: 800px;
            max-height: 800px;
            background: linear-gradient(135deg, rgba(56, 189, 248, 0.4) 0%, rgba(129, 140, 248, 0.4) 50%, rgba(192, 132, 252, 0.4) 100%);
            filter: blur(100px);
            border-radius: 50%;
            animation: pulse-morph 10s infinite alternate cubic-bezier(0.4, 0, 0.2, 1);
            z-index: -1;
        }

        @keyframes pulse-morph {
            0% { transform: scale(1) translate(0, 0) rotate(0deg); opacity: 0.7; }
            50% { transform: scale(1.1) translate(-20px, 30px) rotate(45deg); opacity: 0.9; }
            100% { transform: scale(0.9) translate(20px, -30px) rotate(-45deg); opacity: 0.7; }
        }

        /* Glassmorphism Styling */
        .glass-card {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .text-gradient {
            background: linear-gradient(to right, #38bdf8, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hover-lift {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px -10px rgba(56, 189, 248, 0.4);
        }

        /* Fade entry animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(2rem); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="antialiased min-h-screen flex items-center justify-center overflow-hidden relative selection:bg-sky-500/30">
    
    <!-- Atmospheric Background -->
    <div class="blob-bg top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
    
    <div class="relative z-10 w-full max-w-4xl p-6 mx-auto">
        <main class="glass-card rounded-3xl p-10 md:p-16 text-center transform transition-all duration-700 opacity-0" style="animation: fadeInUp 1s ease-out forwards; animation-delay: 0.1s;">
            
            <!-- Logo area -->
            <div class="flex justify-center mb-8">
                <div class="w-20 h-20 rounded-2xl bg-gradient-to-tr from-sky-400 via-indigo-400 to-fuchsia-500 flex items-center justify-center shadow-[0_0_40px_-5px_rgba(56,189,248,0.5)]">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>

            <!-- Titles -->
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-4 tracking-tighter">
                <span class="block text-white mb-2 pb-1">GaiaExport</span>
                <span class="block text-gradient">Coming Soon</span>
            </h1>
            
            <p class="mt-6 text-lg md:text-xl text-slate-300/90 max-w-2xl mx-auto leading-relaxed font-light">
                We are building something extraordinary
            </p>

            <!-- Subscribe Action -->
            <div class="mt-12 max-w-md mx-auto">
                <form onsubmit="event.preventDefault(); alert('Almost there! We will notify you once we launch.');" class="flex flex-col sm:flex-row gap-3">
                    <input type="email" required placeholder="name@company.com" class="w-full px-5 py-4 bg-slate-900/60 border border-slate-700/80 rounded-xl text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-sky-500/50 focus:border-sky-500 transition-all shadow-inner">
                    <button type="submit" class="hover-lift flex-shrink-0 px-8 py-4 bg-white text-slate-950 font-semibold rounded-xl hover:bg-slate-100 transition-colors shadow-lg">
                        Notify Me
                    </button>
                </form>
            </div>
            
            <!-- Socials -->
            <div class="mt-14 flex justify-center space-x-6">
                <a href="#" class="text-slate-400 hover:text-sky-400 transition-colors transform hover:scale-110">
                    <span class="sr-only">Twitter</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg>
                </a>
                <a href="#" class="text-slate-400 hover:text-sky-400 transition-colors transform hover:scale-110">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </main>
        
        <footer class="mt-8 text-center text-slate-500 text-sm opacity-0" style="animation: fadeInUp 1s ease-out forwards; animation-delay: 0.4s;">
            &copy; {{ date('Y') }} GaiaExport. All rights reserved. Let's make an impact globally.
        </footer>
    </div>
</body>
</html>
