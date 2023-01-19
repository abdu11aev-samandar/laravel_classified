<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cities') }}
        </h2>
    </x-slot>

    <div class="container mx-auto">
        @if(session('message'))
            <div class="bg-indigo-600 text-gray-200 m-2 p-2 rounded-md">{{ session('message') }}</div>
        @endif
        <div class="flex flex-col">
            <div class="overflow-hidden rounded-lg m-5">
                <div class="flex justify-end">
                    <a href="{{ route('cities.create') }}"
                       class="py-2 px-4 m-2 bg-green-500 hover:bg-green-300 text-gray-50">New City</a>
                </div>
            </div>
        </div>

        <!-- component -->
        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">State</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                @forelse($cities as $city)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                {{ $city->name }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                {{ $city->state->name }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('cities.edit',$city->id) }}"
                               class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <form method="POST" action="{{ route('cities.destroy', $city->id) }}">
                                @csrf
                                @method('DELETE')

                                <a class="text-red-600 hover:text-red-900"
                                   href="{{ route('cities.destroy', $city->id) }}"
                                   @click.prevent="$root.submit();">
                                    Delete
                                </a>
                            </form>
                        </td>
                        @empty
                            <td class="px-6 py-4 whitespace-nowrap">No Cities</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            <div class="p-2 m-2">
                {{ $cities->links() }}
            </div>
        </div>

    </div>

</x-app-layout>
