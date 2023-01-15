@props(['post'])
<x-app-layout>
    <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10 mt-20">
        <div class="col-span-4 lg:pt-14 mb-10">
            <p class="mt-4 block text-gray-400 text-xs">
                Published
                <time>{{ $post->created_at->diffForHumans() }}</time>
            </p>

            <div class=" text-sm mt-4 dark:text-gray-300">
                <div class="text-left">
                    <h5 class="font-bold">By: {{ $post->user->name }}</h5>
                </div>
            </div>
        </div>

        <div class="col-span-8 lg:pt-5">
            <div class="hidden lg:flex justify-between mb-6">
                <a href="{{ url()->previous() !== url()->current() ? url()->previous() : '/' }}"
                   class="dark:text-gray-100 transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                    <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path class="fill-current"
                                  d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                            </path>
                        </g>
                    </svg>
                    Back to Posts
                </a>
            </div>

            <div class="space-y-3 p-2 rounded-xl lg:text-lg leading-loose dark:text-gray-50 dark:bg-gray-800">
                {!! $post->body !!}
            </div>
        </div>
    </article>
</x-app-layout>
