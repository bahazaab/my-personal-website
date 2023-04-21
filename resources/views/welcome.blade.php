<x-layout>
    <div>
        <div class="container mx-auto">
            <div class="border-b border-grey-lighter py-16 lg:py-20">
                <div>
                    <img src="/assets/img/author.png" class="h-16 w-16" alt="author" />
                </div>
                <h1 class="pt-3 font-body text-4xl font-semibold text-primary dark:text-white md:text-5xl lg:text-6xl">
                    Hi, I`m {{fake()->name()}}.
                </h1>
                <p class="pt-3 font-body text-xl font-light text-primary dark:text-white">
                    A software engineer and {{fake()->words(40,true)}}, {{fake()->country()}}.
                </p>

            </div>

            <div class="border-b border-grey-lighter py-16 lg:py-20">
                <div class="flex items-center pb-6">
                    <img src="/assets/img/icon-story.png" alt="icon story" />
                    <h3 class="ml-3 font-body text-2xl font-semibold text-primary dark:text-white">
                        My Story
                    </h3>
                </div>
                <div>
                    <p class="font-body font-light text-primary dark:text-white">
                        {{fake()->paragraph(5)}}
                        <br />
                        <br />
                        {{fake()->paragraph(5)}}
                        <br />
                        <br />
                        {{fake()->paragraph(5)}}
                    </p>
                </div>
            </div>

            <div class="pb-16 lg:pb-20 py-10">
                <div class="flex items-center pb-6">
                    <img src="/assets/img/icon-project.png" alt="icon story" />
                    <h3 class="ml-3 font-body text-2xl font-semibold text-primary dark:text-white">
                        My Projects
                    </h3>
                </div>

                <div>
                    @for ($i = 0; $i < 6; $i++)
                        <x-project-item :path="'/'" :title="'TailwindCSS'" :description="'Rapidly build modern websites without ever leaving your HTML.'" />
                    @endfor
                </div>

            </div>
        </div>
    </div>
</x-layout>
