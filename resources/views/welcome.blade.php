<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- for Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <!-- for Google Fonts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

    </style>
</head>

<body>
    <header class='pt-10 pb-10 bg-gradient-to-l from-green-900 to-indigo-200'>
        <div class='container mx-auto'>
            <nav class='flex justify-between'>
                <a>
                    <img src='{{ asset('images/logo.jpg') }}'>
                </a>
                <div>
                    <a href='#' class='ml-4 text-white font-bold hover:text-green-200'>Accueil</a>
                    <a href='#cursus' class='ml-4 text-white font-bold hover:text-green-200'>Cursus</a>
                    <a href='#todo' class='ml-4 text-white font-bold hover:text-green-200'>Réalisations</a>
                    <a href='#testimony' class='ml-4 text-white font-bold hover:text-green-200'>Témoignages</a>
                    <a href='#' class='ml-4 text-white font-bold hover:text-green-200'>Services proposés</a>
                    <a href='#' class='ml-4 text-white font-bold hover:text-green-200'>Contact</a>
                </div>
            </nav>
            <div class='mt-28 flex items-center'>
                <div>
                    <img src='{{ asset('images/mobile.svg') }}'>
                </div>
                <div>
                    <h1 class='text-xl text-white font-bold'>Hello, je suis Da Sié Roger.</h1>
                    <h2 class='text-2xl text-green-900 font-bold mb-2'>Développeur & Formateur</h2>
                    <p class='text-sm md:text-base text-white'>
                        Je suis un jeune dynamique, passionné par le developpement d'application web & mobile ainsi que 
                        de nouvelles technologies.
                    </p>
                    <div class='mt-10'>
                        <a href='#'
                            class='bg-transparent hover:bg-green-900 text-white font-bold hover:text-white py-4 px-6 border border-green-900 hover:border-transparent rounded'>
                            Telecharger mon cv
                        </a>
                    </div>
                </div>
                <div>
                    <img class='h-25' src='{{ asset('images/barner-2.svg') }}'>
                </div>
            </div>
        </div>
    </header>
    <div class='pt-10 pb-10'>
        <div class='container mx-auto'>
            <div class="text-center">
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl mb-6">Mon cursus
                </h2>
            </div>
            <div id='todo' class="flow-root mx-6">
                <ul role="list" class="-mb-8">
                    <li class='items-center'>
                        <div class="relative pb-8">
                            <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200"
                                aria-hidden="true"></span>
                            <div class="relative flex items-start space-x-3">
                                <div class="relative">
                                    <img class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white"
                                        src="{{ asset('images/cursus.png') }}" alt="">
                                </div>
                                <div class="min-w-0 flex-1">
                                    <div>
                                        <div class="text-sm">
                                            <a href="#" class="font-bold text-gray-900">LICENCE en Méthode Informatique
                                                Appliquée a la Gestion des Entreprises</a>
                                        </div>
                                        <p class="mt-0.5 text-sm text-gray-500">2018-2022</p>
                                    </div>
                                    <div class="mt-1 text-sm text-gray-700">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt nunc ipsum
                                            tempor purus vitae id. Morbi in vestibulum nec varius. Et diam cursus quis
                                            sed purus nam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class='items-center'>
                        <div class="relative pb-8">
                            <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200"
                                aria-hidden="true"></span>
                            <div class="relative flex items-start space-x-3">
                                <div class="relative">
                                    <img class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white"
                                        src="{{ asset('images/cursus.png') }}" alt="">
                                </div>
                                <div class="min-w-0 flex-1">
                                    <div>
                                        <div class="text-sm">
                                            <a href="#" class="font-bold text-gray-900">LICENCE en Méthode Informatique
                                                Appliquée a la Gestion des Entreprises</a>
                                        </div>
                                        <p class="mt-0.5 text-sm text-gray-500">2018-2022</p>
                                    </div>
                                    <div class="mt-1 text-sm text-gray-700">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt nunc ipsum
                                            tempor purus vitae id. Morbi in vestibulum nec varius. Et diam cursus quis
                                            sed purus nam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class='items-center'>
                        <div class="relative pb-8">
                            <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200"
                                aria-hidden="true"></span>
                            <div class="relative flex items-start space-x-3">
                                <div class="relative">
                                    <img class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white"
                                        src="{{ asset('images/cursus.png') }}" alt="">
                                </div>
                                <div class="min-w-0 flex-1">
                                    <div>
                                        <div class="text-sm">
                                            <a href="#" class="font-bold text-gray-900">LICENCE en Méthode Informatique
                                                Appliquée a la Gestion des Entreprises</a>
                                        </div>
                                        <p class="mt-0.5 text-sm text-gray-500">2018-2022</p>
                                    </div>
                                    <div class="mt-1 text-sm text-gray-700">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt nunc ipsum
                                            tempor purus vitae id. Morbi in vestibulum nec varius. Et diam cursus quis
                                            sed purus nam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class='container mx-auto'>
        <div>
            <div class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
                <div class="absolute inset-0">
                    <div class="bg-white h-1/3 sm:h-2/3"></div>
                </div>
                <div class="relative max-w-7xl mx-auto">
                    <div class="text-center">
                        <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">Mes Réalisations
                        </h2>
                    </div>
                    <div class="mt-12 max-w-sm mx-auto grid gap-4 lg:grid-cols-4 lg:max-w-none">
                        <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                            <div class="flex-shrink-0">
                                <img class="h-48 w-full object-cover"
                                    src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80"
                                    alt="">
                            </div>
                            <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-indigo-600">
                                        <a href="#" class="hover:underline"> Article </a>
                                    </p>
                                    <a href="#" class="block mt-2">
                                        <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
                                        <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga
                                            culpa, similique sequi cum eos quis dolorum.</p>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                            <div class="flex-shrink-0">
                                <img class="h-48 w-full object-cover"
                                    src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80"
                                    alt="">
                            </div>
                            <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-indigo-600">
                                        <a href="#" class="hover:underline"> Article </a>
                                    </p>
                                    <a href="#" class="block mt-2">
                                        <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
                                        <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga
                                            culpa, similique sequi cum eos quis dolorum.</p>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                            <div class="flex-shrink-0">
                                <img class="h-48 w-full object-cover"
                                    src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80"
                                    alt="">
                            </div>
                            <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-indigo-600">
                                        <a href="#" class="hover:underline"> Article </a>
                                    </p>
                                    <a href="#" class="block mt-2">
                                        <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
                                        <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga
                                            culpa, similique sequi cum eos quis dolorum.</p>
                                    </a>
                                </div>

                            </div>
                        </div>
                         <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                            <div class="flex-shrink-0">
                                <img class="h-48 w-full object-cover"
                                    src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80"
                                    alt="">
                            </div>
                            <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-indigo-600">
                                        <a href="#" class="hover:underline"> Article </a>
                                    </p>
                                    <a href="#" class="block mt-2">
                                        <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
                                        <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga
                                            culpa, similique sequi cum eos quis dolorum.</p>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class='container mx-auto'>
        <div class="text-center">
            <h2  class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl mb-6">Ce que disent mes
                collaborateurs
            </h2>
            <!-- This example requires Tailwind CSS v2.0+ -->
            <section id='testimony' class="bg-green-50">
                <div class="max-w-7xl mx-auto md:grid md:grid-cols-2 md:px-6 lg:px-8">
                    <div
                        class="py-8 px-4 sm:px-6 md:flex md:flex-col md:py-16 md:pl-0 md:pr-10 md:border-r md:border-indigo-900 lg:pr-16">
                        <blockquote class="mt-6 md:flex-grow md:flex md:flex-col">
                            <div class="relative text-lg font-medium text-white md:flex-grow">
                                <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-green-500"
                                    fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                    <path
                                        d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                </svg>
                                <p class="relative text-green-900 font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo
                                    expedita voluptas culpa sapiente alias molestiae. Numquam corrupti in laborum sed
                                    rerum et corporis.</p>
                            </div>
                            <footer class="mt-8">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 inline-flex rounded-full border-2 border-white">
                                        <img class="h-12 w-12 rounded-full"
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-base font-medium">Judith Black</div>
                                        <div class="text-base font-medium">CEO, Tuple</div>
                                    </div>
                                </div>
                            </footer>
                        </blockquote>
                    </div>
                    <div
                        class="py-12 px-4 border-t-2 border-indigo-900 sm:px-6 md:py-16 md:pr-0 md:pl-10 md:border-t-0 md:border-l lg:pl-16">
                        <div class="md:flex-shrink-0">
                            <img class="h-12"
                                src="https://tailwindui.com/img/logos/workcation-logo-indigo-300.svg" alt="Workcation">
                        </div>
                        <blockquote class="mt-6 md:flex-grow md:flex md:flex-col">
                            <div class="relative text-lg font-medium text-white md:flex-grow">
                                <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-indigo-600"
                                    fill="currentColor" viewBox="0 0 32 32">
                                    <path
                                        d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                </svg>
                                <p class="relative">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo
                                    expedita voluptas culpa sapiente alias molestiae. Numquam corrupti in laborum sed
                                    rerum et corporis. Nemo expedita voluptas culpa sapiente alias molestiae.</p>
                            </div>
                            <footer class="mt-8">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 inline-flex rounded-full border-2 border-white">
                                        <img class="h-12 w-12 rounded-full"
                                            src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-base font-medium text-white">Joseph Rodriguez</div>
                                        <div class="text-base font-medium text-indigo-200">CEO, Workcation</div>
                                    </div>
                                </div>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </section>
        </div>
    </div>

@include('partials.footer')
</body>
</html>
