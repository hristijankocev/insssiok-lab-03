@php use Illuminate\Support\Facades\Route; @endphp
@props(['posts'])
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @if(Route::current()->getName() === 'post.index')
                {{ __('Latest 3 posts') }}
            @else
                {{ __('All posts') }}
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="md:w-full max-w-sm md:max-w-4xl mx-auto py-5">
                    @foreach($posts as $post)
                        <x-post-card :post="$post"></x-post-card>
                    @endforeach
                    @if(method_exists($posts, 'links'))
                        {{ $posts->links() }}
                    @endif
                </div>
            </div>
        </div>

    </div>

</x-app-layout>
