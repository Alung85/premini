<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
</head>
<body class="bg-white dark:bg-gray-800">

<div class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-800">
    <div class="max-w-md w-full bg-white dark:bg-gray-900 rounded-lg shadow-lg overflow-hidden mx-8">
        <div class="px-6 py-8">
            <h2 class="text-2xl font-bold mb-8 text-center text-gray-900 dark:text-gray-200">Create an account</h2>

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                    <input id="name" name="name" type="text" autocomplete="name" required autofocus class="mt-1 px-3 py-2 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email Address</label>
                    <input id="email" name="email" type="email" autocomplete="email" required class="mt-1 px-3 py-2 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
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

                <!-- Confirm Password -->
                <div class="relative">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Confirm Password</label>
                    <div class="flex items-center border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus-within:ring-indigo-500 focus-within:border-indigo-500">
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required class="px-3 py-2 block w-full focus:outline-none sm:text-sm">
                        <button type="button" id="toggleConfirmPassword" class="flex items-center px-3 py-2 text-gray-400 dark:text-gray-600" aria-label="Toggle confirm password visibility">
                            <i class="fas fa-eye-slash"></i>
                        </button>
                    </div>
                    @error('password_confirmation')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between mt-4">
                    <a href="{{ route('login') }}" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                        Already registered?
                    </a>

                    <button type="submit" class="w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 dark:bg-gray-800 dark:hover:bg-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

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

    const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
    const confirmPassword = document.getElementById('password_confirmation');

    toggleConfirmPassword.addEventListener('click', function() {
        const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
        confirmPassword.setAttribute('type', type);
        this.querySelector('i').classList.toggle('fa-eye-slash');
        this.querySelector('i').classList.toggle('fa-eye');
    });
</script>

</body>
</html>
