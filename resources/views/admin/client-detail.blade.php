<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Client Details: ') . $client->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (session('success'))
                        <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Client Information</h3>
                            <p><strong>Name:</strong> {{ $client->name }}</p>
                            <p><strong>Email:</strong> {{ $client->email }}</p>
                            <p><strong>Description:</strong> {{ $client->phone }}</p>
                            <p><strong>Requested Date/Time:</strong> {{ $client->date_time->format('M d, Y H:i A') }}</p>
                            <p><strong>Current Status:</strong> <span class="font-bold">{{ $client->status->status }}</span></p>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Update Status</h3>
                            <form method="POST" action="{{ route('admin.client.updateStatus', $client) }}">
                                @csrf
                                @method('PATCH')

<div class="w-full">
    <div class="flex flex-wrap gap-4">
        <div>
            <button type="submit" name="status_code" value="MT" class="text-blue-200 font-semibold">
                Approved (Meeting Scheduled)
            </button>
        </div>

        <div>
            <button type="submit" name="status_code" value="PD" class="text-green-600 font-semibold">
                Deliver (Product Delivered)
            </button>
        </div>

        <div>
            <button type="submit" name="status_code" value="CL" class="text-red-600 font-semibold">
                Lost (Client Lost)
            </button>
        </div>
    </div>
</div>

                                @error('status_code')
                                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                                @enderror
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
