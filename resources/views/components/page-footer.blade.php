<div class="container mx-auto">
    <div class="flex flex-col items-center justify-between border-t border-grey-lighter py-10 sm:flex-row sm:py-12">
        <div class="mr-auto flex flex-col items-center sm:flex-row">
            <a href="/" class="mr-auto sm:mr-6">
                <img src="{{env('profile_logo')}}" alt="logo" width="50"/>
            </a>
            <p class="pt-5 font-body font-light text-primary dark:text-white sm:pt-0">
                ©2020 {{env('profile_name')}}.
            </p>
        </div>
        <div class="mr-auto flex items-center pt-5 sm:mr-0 sm:pt-0">

            <a href="https://github.com/ " target="_blank">
                <i
                    class="text-4xl text-primary dark:text-white pl-5 hover:text-secondary dark:hover:text-secondary transition-colors bx bxl-github"></i>
            </a>

            <a href="https://facebook.com/ " target="_blank">
                <i
                    class="text-4xl text-primary dark:text-white pl-5 hover:text-secondary dark:hover:text-secondary transition-colors bx bxl-facebook"></i>
            </a>

            <a href="https://www.linkedin.com/ " target="_blank">
                <i
                    class="text-4xl text-primary dark:text-white pl-5 hover:text-secondary dark:hover:text-secondary transition-colors bx bxl-linkedin"></i>
            </a>

        </div>
    </div>
</div>