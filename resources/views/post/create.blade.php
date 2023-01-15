<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add a new post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="md:w-full max-w-sm md:max-w-4xl mx-auto">
                    <form class="py-10" action="{{ route('post.create') }}" method="post">
                        @csrf
                        <div class="mb-6">
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" id="title" value="{{ old('title') }}" name="title"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Lorem Ipsum Dolor Sit Amet" required>
                            <x-input-error :messages="$errors->get('title')" class="mt-2"></x-input-error>
                        </div>

                        <div class="mb-6">
                            <label for="body"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
                            <textarea type="text" id="title" rows="5" name="body"
                                      style="min-height: 100px;"
                                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                      placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, perspiciatis..."
                                      required>{{ old('body') }}</textarea>
                            <x-input-error :messages="$errors->get('body')" class="mt-2"></x-input-error>
                        </div>
                        <x-primary-button>
                            {{ __('Create') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
