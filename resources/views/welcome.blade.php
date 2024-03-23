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
                <li class="px-6 text-xl"><a href="/home">Home</a></li>
                <li class="px-6 text-xl"><a href="/blogs">Blogs</a></li>
                <li class="px-6 text-xl"><a href="">Home</a></li>
                <li class="px-6 text-xl"><a href="">Home</a></li>
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
    <div>
        <img src="https://images.pexels.com/photos/262508/pexels-photo-262508.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-full" alt="">
    </div>
</body>

</html>