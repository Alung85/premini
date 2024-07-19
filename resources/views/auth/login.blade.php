<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Dark mode plugin for Tailwind CSS (optional) -->
    <style>
        /* Add this line to enable dark mode */
        @media (prefers-color-scheme: dark) {
            body {
                --tw-bg-opacity: 1 !important;
                background-color: rgba(17, 24, 39, var(--tw-bg-opacity)) !important;
                color: rgba(209, 213, 219, var(--tw-text-opacity)) !important;
            }
        }
    </style>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-white dark:bg-gray-800">

<div class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-800">
    <div class="max-w-md w-full bg-white dark:bg-gray-900 rounded-lg shadow-lg overflow-hidden mx-8">
        <div class="px-6 py-8">
            <!-- Session Status -->
            <div>
                @if(session('status'))
                    <div class="bg-red-500 p-4 rounded-lg mb-4 text-white text-center">
                        {{ session('status') }}
                    </div>
                @endif
            </div>

            <h2 class="text-2xl font-bold mb-8 text-center text-gray-900 dark:text-gray-200">Log in to your account</h2>

            <form id="loginForm" class="space-y-6" method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email Address</label>
                    <input id="email" name="email" type="email" autocomplete="email" required class="mt-1 px-3 py-2 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter your email" value="{{ old('email') }}">
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative">
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                    <div class="flex items-center border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus-within:ring-indigo-500 focus-within:border-indigo-500">
                        <input id="password" name="password" type="password" autocomplete="new-password" required class="px-3 py-2 block w-full focus:outline-none sm:text-sm">
                        <button type="button" id="togglePassword" class="flex items-center px-3 py-2 text-gray-400 dark:text-gray-600" aria-label="Toggle password visibility">
                            <i class="fas fa-eye-slash"></i>
                        </button>
                    </div>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 dark:focus:ring-gray-600 border-gray-300 dark:border-gray-600 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900 dark:text-gray-200">Remember me</label>
                    </div>

                    <a href="{{ route('register') }}" class="text-sm font-medium text-indigo-600 dark:text-gray-300 hover:text-indigo-500 dark:hover:text-gray-200">Create an account</a>
                </div>

                <div>
                    <button type="submit" class="w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 dark:bg-gray-800 dark:hover:bg-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">Log in</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript for password toggle -->
<script>
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    togglePassword.addEventListener('click', function() {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.querySelector('i').classList.toggle('fa-eye-slash');
        this.querySelector('i').classList.toggle('fa-eye');
    });
</script>

</body>
</html>
