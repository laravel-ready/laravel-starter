@extends('web.layouts.layout')

@section('content')
    {{--
        Author: Surjith S M
        Twitter: @surjithctly

        Get more templates on web3templates.com
        Tailwind Play: https://play.tailwindcss.com/O0fbQqzI8M
    --}}
    <section class="flex items-center justify-center min-h-screen py-24 mt-10 light:bg-white dark:bg-gray-900">
        <div class="mx-auto max-w-[43rem]">
            <div class="text-center">
                <p class="text-lg font-medium leading-8 text-indigo-600/95 dark:text-indigo-400/95">
                    Welcome to Quickstart
                </p>

                <h1 class="mt-3 text-[3.5rem] font-bold leading-[4rem] tracking-tight text-gray-900 dark:text-gray-300">
                    Laravel Starter
                </h1>

                <p class="mt-3 text-lg leading-relaxed text-slate-400">
                    You can use this starter template to build your next Laravel project.
                    When you need to documentation you can find it on
                    <a href="https://github.com/laravel-ready/laravel-starter/blob/main/DOCS.md"
                        class="text-indigo-600 hover:underline dark:text-indigo-400/95 dark:hover:text-indigo-300/95">
                        Laravel Ready Docs
                    </a>
                </p>
            </div>

            <div class="flex items-center justify-center gap-4 mt-6">
                <a href="https://github.com/laravel-ready/laravel-starter"
                    class="flex flex-row px-5 py-3 space-x-2 font-medium text-white transition-colors transform rounded-md bg-indigo-600/95 hover:bg-indigo-700">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        width="24" height="24" viewBox="0 0 24 24" class="mr-3 fill-white">
                        <path
                            d="M12,2A10,10 0 0,0 2,12C2,16.42 4.87,20.17 8.84,21.5C9.34,21.58 9.5,21.27 9.5,21C9.5,20.77 9.5,20.14 9.5,19.31C6.73,19.91 6.14,17.97 6.14,17.97C5.68,16.81 5.03,16.5 5.03,16.5C4.12,15.88 5.1,15.9 5.1,15.9C6.1,15.97 6.63,16.93 6.63,16.93C7.5,18.45 8.97,18 9.54,17.76C9.63,17.11 9.89,16.67 10.17,16.42C7.95,16.17 5.62,15.31 5.62,11.5C5.62,10.39 6,9.5 6.65,8.79C6.55,8.54 6.2,7.5 6.75,6.15C6.75,6.15 7.59,5.88 9.5,7.17C10.29,6.95 11.15,6.84 12,6.84C12.85,6.84 13.71,6.95 14.5,7.17C16.41,5.88 17.25,6.15 17.25,6.15C17.8,7.5 17.45,8.54 17.35,8.79C18,9.5 18.38,10.39 18.38,11.5C18.38,15.32 16.04,16.16 13.81,16.41C14.17,16.72 14.5,17.33 14.5,18.26C14.5,19.6 14.5,20.68 14.5,21C14.5,21.27 14.66,21.59 15.17,21.5C19.14,20.16 22,16.42 22,12A10,10 0 0,0 12,2Z" />
                    </svg>

                    Go to Github Repo
                </a>
            </div>
        </div>
    </section>
@endsection
