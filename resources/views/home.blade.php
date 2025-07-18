<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client Booking App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body class="antialiased bg-gray-100">
    <div class="min-h-screen flex flex-col justify-center items-center py-6 sm:pt-0">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">Book Your Slot</h1>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('client.store') }}">
                @csrf

                <div>
                    <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                    <input id="name" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                    @error('name')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                    <input id="email" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                    @error('email')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label for="phone" class="block font-medium text-sm text-gray-700">Phone Number</label>
                    <input id="phone" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="phone" value="{{ old('phone') }}" required />
                    @error('phone')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label for="date_time" class="block font-medium text-sm text-gray-700">Date and Time</label>
                    <input id="date_time" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="date_time" value="{{ old('date_time') }}" required />
                    @error('date_time')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="ms-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        Book Now
                    </button>
                </div>
            </form>
            @if (session('success'))
                <div class="mt-4 p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const now = new Date();
            const minDateTime = new Date(now.getTime() + 3 * 60 * 60 * 1000); // Add 3 hours

            flatpickr("#date_time", {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
                minDate: minDateTime,
                altInput: true, // For better user display
                altFormat: "F j, Y h:i K", // e.g., July 18, 2025 11:30 AM
            });
        });
    </script>
</body>
</html>
