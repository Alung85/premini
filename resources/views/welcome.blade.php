<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Our Hospital</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Tailwind CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans antialiased bg-gray-100">
    <nav class="bg-white shadow-md fixed w-full z-10 top-0">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{ asset('img/hospital.png') }}" alt="Hospital Logo" class="logo">
                <h1 class="text-2xl font-bold text-gray-900 ml-4">Our Hospital</h1>
            </div>
            <div class="flex items-center space-x-4">
                <a href="/" class="text-blue-500 hover:text-blue-700">Home</a>
                <a href="/services" class="text-blue-500 hover:text-blue-700">Services</a>
                <a href="/about" class="text-blue-500 hover:text-blue-700">About Us</a>
                <a href="/contact" class="text-blue-500 hover:text-blue-700">Contact</a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-blue-500 hover:text-blue-700">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>
    <br>
    <br>
    <div class="min-h-screen flex flex-col items-center justify-center bg-cover bg-center" style="background-image: url('https://example.com/hospital-background.jpg');">
        <div class="bg-white bg-opacity-90 shadow-lg rounded-lg p-6 max-w-4xl w-full mt-8">
            <main>
                <div class="grid gap-6 lg:grid-cols-3 lg:gap-8">
                    <div class="card">
                        <img src="https://example.com/services.jpg" alt="Our Services" class="card-img">
                        <div class="card-content">
                            <h2 class="card-title">Our Services</h2>
                            <p class="card-text">Learn more about the medical services we offer at our hospital.</p>
                            <a href="https://hospital.com/services" class="card-link">Read more</a>
                        </div>
                    </div>

                    <div class="card">
                        <img src="https://example.com/about.jpg" alt="About Us" class="card-img">
                        <div class="card-content">
                            <h2 class="card-title">About Us</h2>
                            <p class="card-text">Get to know more about our hospital's history and mission.</p>
                            <a href="https://hospital.com/about" class="card-link">Read more</a>
                        </div>
                    </div>

                    <div class="card">
                        <img src="https://example.com/contact.jpg" alt="Contact Us" class="card-img">
                        <div class="card-content">
                            <h2 class="card-title">Contact Us</h2>
                            <p class="card-text">Reach out to us for any inquiries or appointments.</p>
                            <a href="https://hospital.com/contact" class="card-link">Read more</a>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="mt-6 text-center text-sm text-gray-600">
                &copy; 2024 Our Hospital. All rights reserved.
            </footer>
        </div>
    </div>
    <style>
        .card {
            display: flex;
            flex-direction: column;
            overflow: hidden;
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-0.5rem);
            box-shadow: 0 1.5rem 3rem rgba(0, 0, 0, 0.1);
        }
        .card-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card-content {
            padding: 1.5rem;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        .card-text {
            font-size: 1rem;
            margin-bottom: 1rem;
            color: #6B7280;
        }
        .card-link {
            font-size: 1rem;
            font-weight: 600;
            color: #3B82F6;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .card-link:hover {
            color: #1D4ED8;
        }

        footer {
            text-align: center;
        }

        .logo {
            width: 50px;
            height: auto;
        }
    </style>
</body>
</html>
