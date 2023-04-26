<x-layout>
    <div>
        <div class="container mx-auto">
            <div class="py-16 lg:py-20">
                <div>
                    <img src="/assets/img/icon-blog.png" alt="icon envelope" />
                </div>

                <h1 class="pt-5 font-body text-4xl font-semibold text-primary dark:text-white md:text-5xl lg:text-6xl">
                    Blog
                </h1>

                <div class="pt-3 sm:w-3/4">
                    <p class="font-body text-xl font-light text-primary dark:text-white">
                        Articles, tutorials, snippets, rants, and everything else.
                    </p>
                </div>

                @foreach ($posts as $post)
                    <x-blog-item :post="$post" />
                @endforeach

                <div class="flex justify-center"> {{ $posts->links() }}</div>
            </div>
        </div>
    </div>

    

</x-layout>


