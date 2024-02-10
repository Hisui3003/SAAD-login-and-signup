<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* Custom styles */
        body {
            background: linear-gradient(to bottom right, #ff4444, #8b0000);
        }
    </style>
</head>
<body class="flex justify-center items-center h-screen">
    <div class="bg-white rounded-lg p-8 shadow-lg" style="width: 95%; max-width: 1200px; height: 80%; max-height: 600px;">
        <div class="flex justify-center items-center h-full">
            <div class="bg-gray-100 rounded-lg p-6 shadow-lg" style="width: 35%;">
                <h2 class="text-xl font-bold text-center mb-4 text-red-600">Rental House System</h2>
                <h1 class="text-2xl font-bold text-center mb-8 text-gray-800">Sign Up</h1>
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div class="ml-10 mt-3 justify-between items-center">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="username" id="username" class="mt-1 w-64 border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring focus:ring-red-500 focus:ring-opacity-50">
                    </div>
                    <hr class="m-5">
                    <div class="ml-10 mt-3 justify-between items-center">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" id="password" class="mt-1 w-64 border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring focus:ring-red-500 focus:ring-opacity-50">
                    </div>
                    <div class="ml-10 mt-3 justify-between items-center">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" id="password" class="mt-1 w-64 border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring focus:ring-red-500 focus:ring-opacity-50">
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit" class="w-full py-2 px-4 bg-red-600 hover:bg-red-700 text-white rounded-md focus:outline-none focus:ring focus:ring-red-500 focus:ring-opacity-50">Sign Up</button>
                    </div>
                </form>
                <div class="mt-4 flex items-center justify-center">
                    <p class="text-gray-700">Already got an account?</p>
                    <a href="#" class="text-red-600 ml-1 hover:text-red-700">Login</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>

    <div class="bg-red-800 flex justify-center items-center h-screen">
        <div class="bg-slate-100 rounded-lg p-8 flex justify-center items-center" style="width: 90%; height: 90vh;">
            <div class="bg-white shadow-lg rounded-lg p-8" style="width: 40%; height: 70vh;">
                <h1 class="my-10 text-left text-5xl font-semibold leading-9 tracking-tight text-red-800">Sing up</h1>

                <div class="m-2 mb-4 justify-between items-center">
                    <div class="text-3xl">
                        <i class="ml-7 fa-solid fa-user-large"></i>
                        <input type="text" id="username" class="w-80 text-base px-2 py-1 rounded-md border border-white hover:border-red-800" placeholder="">
                        <hr class="m-2 mb-10 w-96">
                    </div>
                </div>

                <div class="m-2 mb-4 justify-between items-center">
                    <div class="text-3xl">
                        <i class="ml-7 fa-solid fa-lock"></i>
                        <input type="password" id="password" class="w-80 text-base px-2 py-1 rounded-md border border-white hover:border-red-800" placeholder="">
                        <hr class="m-2 mb-10 w-96">
                    </div>
                </div>
                <div class="m-2 mb-4 justify-between items-center">
                    <div class="text-3xl">
                        <i class="ml-7 fa-solid fa-lock"></i>
                        <input type="password" id="password" class="w-80 text-base px-2 py-1 rounded-md border border-white hover:border-red-800" placeholder="">
                        <hr class="m-2 mb-10 w-96">
                    </div>
                </div>

                <div class="mt-5 text-2xl">
                    <button type="submit" class="bg-red-800 border border-red-800 font-semibold text-white py-3 w-full rounded-md hover:bg-transparent hover:text-red-800 hover:border-red-800 transition-all duration-300">Sign up</button>
                </div>
                <div class="text-center m-10 underline hover:text-red-800 ">
                    <a href="#">Already got an Account?</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html> --}}
