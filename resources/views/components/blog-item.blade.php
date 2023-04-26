@props(['post'])

<div class="pt-8 lg:pt-12">
    <div class="border-b border-grey-lighter pb-8">
        <span
            class="mb-4 inline-block rounded-full bg-green-light px-2 py-1 font-body text-sm text-green">{{ $post->category->title }}</span>
        <a href="/blog/{{ $post->id }}"
            class="block font-body text-lg font-semibold text-primary transition-colors hover:text-green dark:text-white dark:hover:text-secondary">
            <div class="flex">
                <div class=" w-1/3">
                    <img src="{{ $post->image_url }}" alt="image" width="150" style="border-radius: 0.5rem">
                </div>
                <div class="w-2/3 pl-5">
                    <h1 class="text-4xl">{{ $post->title }}</h1>
                    <p class="mt-5">{{ $post->excerpt }}</p>
                </div>
            </div>
        </a>
        <div class="flex items-center pt-4">
            <p class="pr-2 font-body font-light text-primary dark:text-white">
                {{ $post->created_at->format('M d, Y') }}
            </p>
            <span class="font-body text-grey dark:text-white">//</span>
            <p class="pl-2 font-body font-light text-primary dark:text-white">
                4 mon read
            </p>
        </div>
    </div>
