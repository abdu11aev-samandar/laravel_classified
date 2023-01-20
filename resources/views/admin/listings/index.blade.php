<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Listings') }}
        </h2>
    </x-slot>

    <div class="container mx-auto">
        @if (session('message'))
            <div class="bg-indigo-600 text-gray-100 m-2 p-2 text-lg text-center">{{ session('message') }}</div>
        @endif
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                    <div class="flex justify-end">
                        <a href="{{ route('listings.create') }}"
                           class="py-2 px-4 m-2 bg-green-500 hover:bg-green-300 text-gray-50">New
                            Listing</a>
                    </div>
                </div>
            </div>
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Slug
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Image
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($listings as $listing)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            {{ $listing->title }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            {{ $listing->slug }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <img class="h-12 w-12 rounded-md"
                                                 src="{{ Storage::url($listing->featured_image) }}">
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ route('listings.edit', $listing->id) }}"
                                           class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        <form method="POST"
                                              action="{{ route('listings.destroy', $listing->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <a class="text-red-500 hover:text-red-900"
                                               href="{{ route('listings.destroy', $listing->id) }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                Delete
                                            </a>
                                        </form>
                                    </td>
                                    @empty
                                        <td class="px-6 py-4 whitespace-nowrap">No Listings</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        <div class="p-2 m-2">
                            {{ $listings->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
