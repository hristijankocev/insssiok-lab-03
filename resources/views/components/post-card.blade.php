@props(['post'])

<article
    {{$attributes->merge(['class' => 'transition-colors my-2 duration-300 dark:bg-gray-700 hover:bg-gray-600 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl'])}}>
    <div class="py-6 px-5">
        <div class="mt-4 flex flex-col justify-between">
            <header>
                <div class="mt-2">
                    <span class="mt-2 block dark:text-gray-300 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="space-y-4 lg:text-lg leading-loose dark:text-gray-200">
                {!! $post->body !!}
            </div>

            <footer class="flex justify-between mt-8">
                <div class="text-sm">
                    <div class="">
                        <h5 class="font-bold dark:text-gray-300">By: {{ $post->user->name }}</h5>
                    </div>
                </div>

                <div>
                    <a href="/post/{{ $post->id }}"
                       class="transition-colors duration-300 text-xs dark:text-gray-800 font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">
                        Read More
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article>
