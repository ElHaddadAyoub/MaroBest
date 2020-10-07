<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <title>MaroBest</title>
</head>
<body class="font-sans bg-gray-800 text-white">
    <nav class="border-b border-blue-200 px-20">
        <div class="container mx-auto flex items-center justify-between px-4 py-5">
            <ul class="flex items-center">
                <li>
                    <a href="" class="text-blue-600 text-3xl">
                        Maro<span class="text-orange-500">Best</span>
                    </a>
                </li>
                <li class="ml-10">
                    <a href="" class="hover:text-blue-200">
                        Series
                    </a>
                </li>
                <li class="ml-5" >
                    <a href="" class="hover:text-blue-200">
                        Movies
                    </a>
                </li>
                <li class="ml-5">
                    <a href="" class="hover:text-blue-200">
                        Carton
                    </a>
                </li>
            </ul>
            <div class="flex items-center">
                <div class="relative">
                    <input type="text" class="bg-blue-100 text-black focus:outline-none focus:shadow-outline rounded-full  w-64 px-5 pl-10 py-1" placeholder="Search ..." id="">
                    <div class="absolute top-0">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="svg-inline--fa fa-search fa-w-16 mt-2 ml-2 w-4 h-4 text-gray-400" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>

                    </div>

                </div>
                <div class="ml-4">
                    <a href="">
                        <img src="/img/profile.jpg" class="rounded-full w-8 h-8" alt="avatar">
                    </a>
                </div>
            </div>
        </div>

    </nav>

    @yield('content')


</body>
</html>
