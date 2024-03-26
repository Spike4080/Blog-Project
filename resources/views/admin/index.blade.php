<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<body>
    <div class="h-screen w-{800px}">
        <div class="grid grid-cols-7 h-screen">
            <!-- left side bar -->
            <div class="bg-white">
                <div class="flex items-center p-4">
                    <div>
                        <img class="w-16" src="book.svg" alt="book" />
                    </div>
                    <div class="flex ml-1">
                        <h1 class="text-blue-700 font-bold text-xl">Book</h1>
                        <span class="font-bold text-xl ml-0.5">Store</span>
                    </div>
                </div>
                <div class="border border-black mx-5"></div>

                <div>
                    <ul class="p-4 my-9 font-semibold">
                        <li class="my-5 p-3 flex bg-blue-600 border rounded-xl text-white">
                            <span class="material-symbols-outlined"> home </span>
                            <p class="ml-1">Dashboard</p>
                        </li>
                        <li class="my-5 p-3 flex">
                            <span class="material-symbols-outlined"> add_circle </span>
                            <p class="ml-1">New Posts</p>
                        </li>
                        <li class="my-5 p-3 flex">
                            <span class="material-symbols-outlined"> category </span>
                            <p class="ml-1">Category</p>
                        </li>
                        <li class="my-5 p-3 flex">
                            <span class="material-symbols-outlined"> group </span>
                            <p class="ml-1">Users</p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- left side bar -->
            <!--  -->
            <!-- Right side bar -->
            <div class="bg-slate-200 col-span-6">
                <div class="p-6 flex justify-between">
                    <div class="relative">
                        <input type="text" class="text-black py-2 pr-4 pl-9 bg-white w-80 outline-none border rounded-md text-sm focus:border-blue-500" placeholder="Search.." />
                        <span class="material-symbols-outlined absolute top-1/2 left-3 -translate-y-1/2 text-black">
                            search
                        </span>
                        <button type="submit" class="py-2 p-3 outline-none bg-blue-600 text-white border-gray-50 rounded-e-md text-sm">
                            Search
                        </button>
                    </div>
                    <div class="">
                        <a href="#">
                            <ul class="flex font-bold">
                                <li class="mx-3 text-red-800">
                                    <a href="/">
                                        <span class="material-symbols-outlined"> logout </span>
                                    </a>
                                </li>
                            </ul>
                        </a>
                    </div>
                </div>

                <h1 class="p-6 font-bold text-4xl">Today Trending</h1>
                <div class="flex justify-between mx-16">
                    <div class="p-6 flex">
                        <div class="flex w-48 bg-white p-2 border rounded-xl mx-4">
                            <div>
                                <p class="text-slate-800">Sort :</p>
                            </div>
                            <div class="flex">
                                <p class="mx-3 font-bold">By Popular</p>
                                <span class="material-symbols-outlined font-bold">
                                    expand_more
                                </span>
                            </div>
                        </div>
                        <div class="flex w-48 bg-white p-2 border rounded-xl mx-4">
                            <div>
                                <p class="text-slate-800">Sort :</p>
                            </div>
                            <div class="flex">
                                <p class="mx-3 font-bold">By Popular</p>
                                <span class="material-symbols-outlined font-bold">
                                    expand_more
                                </span>
                            </div>
                        </div>
                        <div class="flex w-48 bg-white p-2 border rounded-xl">
                            <div>
                                <p class="text-slate-800">Sort :</p>
                            </div>
                            <div class="flex">
                                <p class="mx-3 font-bold">By Popular</p>
                                <span class="material-symbols-outlined font-bold">
                                    expand_more
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="flex h-8">
                        <div class="flex bg-white mx-4 p-7 items-center border rounded-xl text-xl">
                            <span class="material-symbols-outlined"> filter_alt </span>
                            <p class="font-bold">Filter</p>
                        </div>
                        <div class="flex bg-white mx-4 p-7 items-center border rounded-xl">
                            <span class="material-symbols-outlined font-bold"> search</span>
                        </div>
                        <div class="flex bg-white mx-4 p-7 items-center border rounded-xl">
                            <span class="material-symbols-outlined font-bold"> apps </span>
                        </div>
                    </div>
                </div>

                <div class="p-8 mx-8 h-screen">
                    <div class="h-80 w-auto grid grid-cols-5 gap-x-6 mb-12">
                        <div class="bg-white border rounded-xl shadow-lg">
                            <img class="w-full border rounded-xl" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU5UnTcMhr5DSJmr1UyLyTxrsZcTJKvjPUmGNNjfdRYA&s" alt="" />
                            <h1 class="text-xl font-semibold p-2">
                                What is Javascript and React ?
                            </h1>

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
                        <div class="bg-white border rounded-xl shadow-lg">
                            <img class="w-full border rounded-xl" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU5UnTcMhr5DSJmr1UyLyTxrsZcTJKvjPUmGNNjfdRYA&s" alt="" />
                            <h1 class="text-xl font-semibold p-2">
                                What is Javascript and React ?
                            </h1>

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

                        <div class="bg-white border rounded-xl shadow-lg">
                            <img class="w-full border rounded-xl" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU5UnTcMhr5DSJmr1UyLyTxrsZcTJKvjPUmGNNjfdRYA&s" alt="" />
                            <h1 class="text-xl font-semibold p-2">
                                What is Javascript and React ?
                            </h1>

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
                        <div class="bg-white border rounded-xl shadow-lg">
                            <img class="w-full border rounded-xl" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU5UnTcMhr5DSJmr1UyLyTxrsZcTJKvjPUmGNNjfdRYA&s" alt="" />
                            <h1 class="text-xl font-semibold p-2">
                                What is Javascript and React ?
                            </h1>

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
                        <div class="bg-white border rounded-xl shadow-lg">
                            <img class="w-full border rounded-xl" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU5UnTcMhr5DSJmr1UyLyTxrsZcTJKvjPUmGNNjfdRYA&s" alt="" />
                            <h1 class="text-xl font-semibold p-2">
                                What is Javascript and React ?
                            </h1>

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
                    </div>
                    <div class="h-80 w-auto grid grid-cols-5 gap-x-6">
                        <div class="bg-white border rounded-xl shadow-lg">
                            <img class="w-full border rounded-xl" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU5UnTcMhr5DSJmr1UyLyTxrsZcTJKvjPUmGNNjfdRYA&s" alt="" />
                            <h1 class="text-xl font-semibold p-2">
                                What is Javascript and React ?
                            </h1>

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
                        <div class="bg-white border rounded-xl shadow-lg">
                            <img class="w-full border rounded-xl" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU5UnTcMhr5DSJmr1UyLyTxrsZcTJKvjPUmGNNjfdRYA&s" alt="" />
                            <h1 class="text-xl font-semibold p-2">
                                What is Javascript and React ?
                            </h1>

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
                        <div class="bg-white border rounded-xl shadow-lg">
                            <img class="w-full border rounded-xl" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU5UnTcMhr5DSJmr1UyLyTxrsZcTJKvjPUmGNNjfdRYA&s" alt="" />
                            <h1 class="text-xl font-semibold p-2">
                                What is Javascript and React ?
                            </h1>

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
                        <div class="bg-white border rounded-xl shadow-lg">
                            <img class="w-full border rounded-xl" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU5UnTcMhr5DSJmr1UyLyTxrsZcTJKvjPUmGNNjfdRYA&s" alt="" />
                            <h1 class="text-xl font-semibold p-2">
                                What is Javascript and React ?
                            </h1>

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
                        <div class="bg-white border rounded-xl shadow-lg">
                            <img class="w-full border rounded-xl" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU5UnTcMhr5DSJmr1UyLyTxrsZcTJKvjPUmGNNjfdRYA&s" alt="" />
                            <h1 class="text-xl font-semibold p-2">
                                What is Javascript and React ?
                            </h1>

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
                    </div>
                </div>
            </div>
            <!-- Right side bar -->
            <!--  -->
        </div>
    </div>
</body>

</html>