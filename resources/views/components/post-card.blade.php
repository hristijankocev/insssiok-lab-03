@props(['post'])

<article
    {{$attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-600 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl'])}}>
    <div class="py-6 px-5">
        <div>
            {{--            <img--}}
            {{--                src="{{ $post->thumbnail != null ? asset('/storage/' . $post->thumbnail) : '/storage/site/illustration-2.jpg' }}"--}}
            {{--                alt="Blog Post illustration" class="rounded-xl">--}}
        </div>

        <div class="mt-4 flex flex-col justify-between">
            <header>
                {{--                <div class="space-x-2">--}}
                {{--                    <a href="/?category={{ $post->category->slug }}"--}}
                {{--                       class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"--}}
                {{--                       style="font-size: 10px">{{ $post->category->name }}</a>--}}
                {{--                </div>--}}

                <div class="mt-2">
                    <h1 class="text-3xl dark:text-gray-200">
                        {{ ucfirst($post->title) }}
                    </h1>

                    <span class="mt-2 block dark:text-gray-300 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="space-y-4 lg:text-lg leading-loose dark:text-gray-200">
                {!! substr($post->body, 0, 200) . '...' !!}
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <div class="ml-3">

                        <h5 class="font-bold dark:text-gray-300">By: {{ $post->user->name }}</h5>
                    </div>
                </div>

                <div>
                    <a href="/posts/{{ $post->id }}"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">
                        Read More
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article>
