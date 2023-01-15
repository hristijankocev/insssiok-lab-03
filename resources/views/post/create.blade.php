<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add a new post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="md:w-full max-w-sm md:max-w-6xl mx-auto">
                    <form class="py-10" action="{{ route('post.create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label>
                            <textarea class="" name="body" id="ckeditor"></textarea>
                        </label>
                        <x-input-error :messages="$errors->get('body')" class="mt-2"></x-input-error>
                        <x-primary-button class="mt-5">
                            {{ __('Create') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            CKEDITOR.replace(document.querySelector('#ckeditor'), {
                filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });
        })
    </script>
</x-app-layout>
