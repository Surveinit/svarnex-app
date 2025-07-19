<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Entire Client base of svarnex from Book Consultation.') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($clients->isEmpty())
                        <p>No clients found.</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="min-w-full border border-gray-300">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-6 border border-gray-300 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Name</th>
                                        <th scope="col" class="px-6 py-6 border border-gray-300 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Email</th>
                                        <th scope="col" class="px-6 py-6 border border-gray-300 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Description</th>
                                        <th scope="col" class="px-6 py-6 border border-gray-300 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Date & Time</th>
                                        <th scope="col" class="px-6 py-6 border border-gray-300 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($clients as $client)
                                        <tr>
                                            <td class="px-6 py-4 border border-gray-300 whitespace-nowrap text-sm font-medium text-gray-900">{{ $client->name }}</td>
                                            <td class="px-6 py-4 border border-gray-300 whitespace-nowrap text-sm text-gray-500">{{ $client->email }}</td>
                                            <td class="px-6 py-4 border border-gray-300 whitespace-nowrap text-sm text-gray-500">{{ $client->phone }}</td>
                                            <td class="px-6 py-4 border border-gray-300 whitespace-nowrap text-sm text-gray-500">{{ $client->date_time->format('M d, Y H:i A') }}</td>
                                            <td class="px-6 py-4 border border-gray-300 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="{{ route('admin.client.show', $client) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>

    <div>
        {{ $clients->links()  }}
    </div>
            </div>
        </div>
    </div>
</x-app-layout>
