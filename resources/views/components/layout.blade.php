<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $heading }}</title>
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    </head>

    <body>
        <div class="min-h-full">
            <nav class="bg-gray-800">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <img class="size-8" src="https://tailwindui.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                    <a href="/home" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Accueil</a>
                                    <a href="/about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">A propos</a>
                                    <a href="/contact" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Mobile menu, show/hide based on menu state. -->
                <div class="md:hidden" id="mobile-menu">
                    <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/home" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Accueil</a>
                        <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">A propos</a>
                        <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
                    </div>
                </div>
            </nav>
        
            <header class="bg-white shadow-sm">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
                </div>
            </header>
            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    {{$slot}}
                </div>
            </main>
            <footer>
 
            </footer>
        </div>
    </body>
</html>