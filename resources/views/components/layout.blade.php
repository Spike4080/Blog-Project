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
                <img src="/logo.svg" alt="logo" class="w-16">
            </div>
            <ul class="flex font-semibold hover">
                <li class="px-6 text-xl p-3"><a href="/">Home</a></li>
                <li class="px-6 text-xl p-3"><a href="/blogs">Blogs</a></li>
                <li class="px-6 text-xl p-3"><a href="">Knowledge</a></li>
                <li class="px-6 text-xl p-3"><a href="">Sport</a></li>
            </ul>
            <div class="flex items-center">
                <div class="px-4">
                    <ul class="flex font-bold">
                        @if(!auth()->user())
                        <li class="mx-5">
                            <a href="/register" class="hover:text-sky-800">Sign Up</a>
                        </li>
                        <li class="mx-5">
                            <a href="/login" class="hover:text-sky-800">Log In</a>
                        </li>
                        @else
                        <li class="px-4 text-4xl">
                            <a href="blogs/blog/create" class="text-sm border border-blue-800 hover:bg-blue-500 px-5 p-3 rounded-lg flex items-center">
                                <span class="material-symbols-outlined"">
                                        edit_square
                                    </span>
                                    <p class=" pl-1">Write</p>
                            </a>
                        </li>
                        @if(auth()->user()->role_id == 1)
                        <li class=" px-4 text-4xl grid place-items-center">
                            <a href="/admin/blogs">
                                <span class="material-symbols-outlined">
                                    person
                                </span>
                            </a>
                        </li>
                        @elseif(auth()->user()->role_id == 2)
                        <li class=" px-4 text-4xl grid place-items-center">
                            <a href="/admin/blogs">
                                <span class="material-symbols-outlined">
                                    person
                                </span>
                            </a>
                        </li>
                        @else
                        <li class=" px-4 text-4xl grid place-items-center">
                            <a href="/users/user/profile">
                                <span class="material-symbols-outlined">
                                    person
                                </span>
                            </a>
                        </li>
                        @endif
                        <li class="px-3 text-red-800 text-4xl items-center flex justify-center">
                            <form action="/logout" method="POST">
                                @csrf
                                <button type=" submit" class="text-sm flex items-center border bg-transparent px-5 p-3 rounded-lg border-red-800 text-white hover:bg-red-800">
                                    <span class="material-symbols-outlined">
                                        logout
                                    </span>
                                    <p>LogOut</p>
                                </button>
                            </form>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        {{$slot}}
    </div>
</body>

</html>