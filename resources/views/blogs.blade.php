<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<style>
    .hover li:hover {
        border-bottom: 3px solid blue;
    }
</style>

<body class="h-screen">
    <nav class="h-24 bg-slate-800 text-white">
        <div class=" mx-28 flex justify-between items-center p-2">
            <div>
                <img src="logo.svg" alt="logo" class="w-16">
            </div>
            <ul class="flex font-semibold hover">
                <li class="px-6 text-xl p-3"><a href="/home">Home</a></li>
                <li class="px-6 text-xl p-3"><a href="/blogs">Blogs</a></li>
                <li class="px-6 text-xl p-3"><a href="">Home</a></li>
                <li class="px-6 text-xl p-3"><a href="">Home</a></li>
            </ul>
            <div class="flex items-center">
                <div class="px-4">
                    <a href="#">
                        <ul class="flex font-bold">
                            <li class="px-4 text-4xl">
                                <span class="material-symbols-outlined"">
                                    settings
                                </span>
                            </li>
                            <li class=" px-4 text-4xl">
                                    <span class="material-symbols-outlined">
                                        person
                                    </span>
                            </li>
                            <li class="px-4 text-red-800 text-4xl">
                                <span class="material-symbols-outlined">
                                    logout
                                </span>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Search Bar -->
    <div class="grid place-items-center p-8">
        <div class="flex">
            <h1 class="text-6xl text-blue-600 font-semibold">Top Trending</h1>
            <h1 class="text-6xl px-2 font-semibold">Blogs</h1>
        </div>
        <p class="p-8 text-xl font-semibold">Join the millions tuning in to captivating blogs where are you waiting to find your next favorite read?</p>

        <div class="flex items-center">
            <div>
                <div>
                    <div class="flex items-center space-x-2 cursor-pointer bg-slate-400 text-white p-4 border" onclick="document.getElementById('dropdown').classList.toggle('hidden')">
                        <span class="text-semibold px-8">Categories</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>

                    </div>
                    <ul id="dropdown" class="w-52 max-h-[400px] absolute bg-gray-100 border shadow overflow-auto mt-4 hidden">

                        <a href="">
                            <li class=" px-3 py-3 bg-gray-100 hover:bg-gray-200">Home</li>
                            <li class=" px-3 py-3 bg-gray-100 hover:bg-gray-200">Home</li>
                            <li class=" px-3 py-3 bg-gray-100 hover:bg-gray-200">Home</li>
                        </a>

                    </ul>
                </div>
            </div>
            <div>
                <input type="text" placeholder="Search" class="w-96 bg-slate-400 border text-white p-4 ">
            </div>
        </div>
    </div>
    <!-- Blogs Show Pages -->
    <div>
        <div class="p-8 mx-8 h-screen">
            <div class="h-80 w-{850px} grid grid-cols-5 gap-x-6 mb-12">
                @foreach($blogs as $blog)
                <div class="bg-white border rounded-xl shadow-lg">
                    <img class="w-full border rounded-xl" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU5UnTcMhr5DSJmr1UyLyTxrsZcTJKvjPUmGNNjfdRYA&s" alt="" />
                    <h1 class="text-xl font-semibold p-2">
                        {{$blog->title}}
                    </h1>
                    <p class="text-slate-800 p-2">{{$blog->intro}}</p>

                    <div class="flex justify-evenly">
                        <div class="flex">
                            <span class="material-symbols-outlined text-yellow-400 font-bold">
                                grade
                            </span>
                            <p class="text-yellow-400">4.5</p>
                        </div>

                        <div class="flex">
                            <span class="material-symbols-outlined text-slate-500">
                                visibility
                            </span>
                            <p class="text-slate-500">106</p>
                        </div>
                    </div>

                    <div class="border border-black mx-4 my-3"></div>
                    <div class="px-3 pb-1 flex items-center">
                        <img class="w-10 border rounded-md" src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?cs=srgb&dl=pexels-simon-robben-614810.jpg&fm=jpg" alt="" />
                        <p class="font-bold px-2">Mr.Jones</p>
                    </div>
                </div>
                @endforeach
            </div>
</body>

</html>