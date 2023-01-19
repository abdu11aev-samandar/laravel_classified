<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Listing') }}
        </h2>
    </x-slot>

    <div class="container mx-auto">

        <div class="flex flex-col">

            <!-- component -->
            <div class="overflow-hidden rounded-lg m-5">

                <div>
                    <div class="md:grid md:grid-cols-3">
                        <div class="md:col-span-2">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Create New Listing</h3>
                            </div>
                        </div>
                        <div class="mt-5 md:col-span-2 md:mt-0">
                            <form action="#" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="shadow sm:overflow-hidden sm:rounded-md">
                                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">

                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="name"
                                                   class="block text-sm font-medium text-gray-700">Category</label>
                                            <div class="mt-1 flex items-center">
                                                <select name="category_id">
                                                    @foreach(\App\Models\Category::all() as $category)
                                                        <option
                                                            value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id') <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="name"
                                                   class="block text-sm font-medium text-gray-700">Sub Category</label>
                                            <div class="mt-1 flex items-center">
                                                <select name="category_id">
                                                    @foreach(\App\Models\Category::all() as $category)
                                                        <option
                                                            value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id') <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="name"
                                                   class="block text-sm font-medium text-gray-700">Child
                                                Category</label>
                                            <div class="mt-1 flex items-center">
                                                <select name="category_id">
                                                    @foreach(\App\Models\Category::all() as $category)
                                                        <option
                                                            value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id') <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="name"
                                                   class="block text-sm font-medium text-gray-700">Title</label>
                                            <div class="mt-1 flex items-center">
                                                <input type="text" name="name" id="name"
                                                       class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                                          placeholder="Title">
                                            </div>
                                            @error('name') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="name"
                                                   class="block text-sm font-medium text-gray-700">Description</label>
                                            <div class="mt-1 flex items-center">
                                                <textarea type="text" name="name" id="name"
                                                       class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                                          placeholder="Description"></textarea>
                                            </div>
                                            @error('name') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="name"
                                                   class="block text-sm font-medium text-gray-700">Price</label>
                                            <div class="mt-1 flex items-center">
                                                <input type="text" name="name" id="name"
                                                       class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                                          placeholder="Price">
                                            </div>
                                            @error('name') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="name"
                                                   class="block text-sm font-medium text-gray-700">Price
                                                Negotiable</label>
                                            <div class="mt-1 flex items-center">
                                                <select name="category_id">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="negotiable">Negotiable</option>
                                                </select>
                                                @error('category_id') <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="name"
                                                   class="block text-sm font-medium text-gray-700">Condition</label>
                                            <div class="mt-1 flex items-center">
                                                <select name="category_id">
                                                    <option value="new">New</option>
                                                    <option value="used">Used</option>
                                                </select>
                                                @error('category_id') <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="name"
                                                   class="block text-sm font-medium text-gray-700">Location</label>
                                            <div class="mt-1 flex items-center">
                                                <input type="text" name="name" id="name"
                                                       class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                                       placeholder="Title">
                                            </div>
                                            @error('name') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="name"
                                                   class="block text-sm font-medium text-gray-700">Country</label>
                                            <div class="mt-1 flex items-center">
                                                <select name="category_id">
                                                    @foreach(\App\Models\Country::all() as $country)
                                                        <option
                                                            value="{{ $country->id }}">{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id') <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="name"
                                                   class="block text-sm font-medium text-gray-700">State</label>
                                            <div class="mt-1 flex items-center">
                                                <select name="category_id">
                                                    @foreach(\App\Models\Category::all() as $category)
                                                        <option
                                                            value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id') <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="name"
                                                   class="block text-sm font-medium text-gray-700">City</label>
                                            <div class="mt-1 flex items-center">
                                                <select name="category_id">
                                                    @foreach(\App\Models\Category::all() as $category)
                                                        <option
                                                            value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id') <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="name"
                                                   class="block text-sm font-medium text-gray-700">Phone Number</label>
                                            <div class="mt-1 flex items-center">
                                                <input type="number" name="name" id="name"
                                                       class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                                       placeholder="Title">
                                            </div>
                                            @error('name') <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="name"
                                                   class="block text-sm font-medium text-gray-700">Published</label>
                                            <div class="mt-1 flex items-center">
                                                <select name="category_id">
                                                    <option value="0">Unpublished</option>
                                                    <option value="1">Published</option>
                                                </select>
                                                @error('category_id') <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-span-3 sm:col-span-2">
                                            <label class="block text-sm font-medium text-gray-700">Featured
                                                Image</label>
                                            <div class="mt-1 flex items-center">
                                                <input type="file" id="image" name="image"
                                                       class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                                            </div>
                                        </div>

                                        <div class="col-span-3 sm:col-span-2">
                                            <label class="block text-sm font-medium text-gray-700">Image One</label>
                                            <div class="mt-1 flex items-center">
                                                <input type="file" id="image" name="image"
                                                       class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                                            </div>
                                        </div>

                                        <div class="col-span-3 sm:col-span-2">
                                            <label class="block text-sm font-medium text-gray-700">Image Two</label>
                                            <div class="mt-1 flex items-center">
                                                <input type="file" id="image" name="image"
                                                       class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                                            </div>
                                        </div>

                                        <div class="col-span-3 sm:col-span-2">
                                            <label class="block text-sm font-medium text-gray-700">Image Three</label>
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
    </div>

</x-app-layout>

