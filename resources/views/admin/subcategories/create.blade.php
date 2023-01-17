<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Category') }}
        </h2>
    </x-slot>

    <div class="container mx-auto">

        <div class="flex flex-col">
            <div class="overflow-hidden rounded-lg m-5">
                <div class="flex justify-start">
                    <a href="{{ route('subcategories.index') }}"
                       class="py-2 px-4 m-2 bg-green-500 hover:bg-green-300 text-gray-50">Back</a>
                </div>
            </div>
        </div>

        <!-- component -->
        <div class="overflow-hidden rounded-lg m-5">

            <div>
                <div class="md:grid md:grid-cols-3">
                    <div class="md:col-span-2">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Create Sub Category</h3>
                        </div>
                    </div>
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <form action="{{ route('subcategories.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="shadow sm:overflow-hidden sm:rounded-md">
                                <div class="space-y-6 bg-white px-4 py-5 sm:p-6">

                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="name"
                                               class="block text-sm font-medium text-gray-700">Name</label>
                                        <div class="mt-1 flex items-center">
                                            <input type="text" name="name" id="name"
                                                   class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                                   placeholder="Name">
                                        </div>
                                    </div>

                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="name"
                                               class="block text-sm font-medium text-gray-700">Category</label>
                                        <div class="mt-1 flex items-center">
                                            <select name="category_id">
                                                @foreach(\App\Models\Category::all() as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-span-3 sm:col-span-2">
                                        <label class="block text-sm font-medium text-gray-700">Image</label>
                                        <div class="mt-1 flex items-center">
                                            <input type="file" id="image" name="image"
                                                   class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                                        </div>
                                    </div>

                                </div>
                                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                    <button type="submit"
                                            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

</x-app-layout>

