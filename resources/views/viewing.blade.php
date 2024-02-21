<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Page1</title>


   <link rel="stylesheet" href="{{ asset('css/app.css') }}">


   <script src="https://cdn.tailwindcss.com"></script>
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
{{-- ito yung header ng page 1 --}}
   <header class="py-1 shadow-sm bg-white">
       <div class="container flex items-center justify-between">
           {{-- logo --}}
           <a href="#">
               <img src="https://www.svgrepo.com/show/272028/houses-home.svg" alt="homelogo" class="w-16">
               <h1 class="text-gray-700 hover:text-primary transision">FindFlat</h1>
           </a>


           {{-- search area --}}
           <div class="w-full max-w-xl relative flex">
               <span class="absolute left-4 top-3 text-lg text-gray-400">
                   <i class="fas fa-search"></i>
               </span>
               <input type="text" class="w-full border border-primary border-r-l-0 pl-12 py-3 pr-3 rounded-1-md focus:outline-none" placeholder="Search">
               <button class="bg-primary border border-primary text-white px-8 rounded-r-md hover:bg-transparent hover:text-primary transition">Search</button>
           </div>


           {{-- yung icons --}}
           <div class="flex items-center space-x-4">


               {{-- listing a property button --}}
               <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                   <div class="text-2xl">
                       <i class="fas fa-house-flag"></i>
                   </div>
                   <div class="text-sx leading-3">Property</div>
               </a>


               {{-- account button --}}
               <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                   <div class="text-2xl">
                       <i class="fas fa-user"></i>
                   </div>
                   <div class="text-sx leading-3">Account</div>
               </a>
           </div>
       </div>
   </header>

{{-- navbar (1) --}}
   <div class="bg-gray-700">
       <div class="container flex">

            {{-- categories --}}
            <div class="mr-5">
                <div class="px-8 py-4 hover:bg-primary flex items-center cursor-pointer relative group">
                    <span class="text-white">
                        <i class="fas fa-bars"></i>
                    </span>
                    <span class="capitalize ml-2 text-white">All Categories</span>

                    <div class="absolute w-full left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-solid hidden group-hover:block transition">

                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-map-location-dot w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Location</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-list w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Property Type</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-peso-sign w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Price</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-bed w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Bedrooms</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-calendar-days w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Short Term</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-bath w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Bathrooms</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-ruler-combined w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Floor Area</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-person-shelter w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Amenities</span>
                        </a>
                    </div>
                </div>
            </div>
            {{-- end of categories --}}

            {{-- navbar links --}}
            <div class="flex items-center justify-between flex-grow pl-12">
                <div class="flex items-center space-x-6 capitalize">
                    <a href="index" class="text-gray-200 hover:underline hover:text-white transition">Home</a>
                    <a href="rentals" class="text-gray-200 hover:underline hover:text-white transition">Rent</a>
                    <a href="#" class="text-gray-200 hover:underline hover:text-white transition">About Us</a>
                    <a href="#" class="text-gray-200 hover:underline hover:text-white transition">Contact Us</a>
                </div>
                {{-- login and register --}}
                <a href="login" class="text-gray-200 hover:underline hover:text-white transition">Login/Register</a>
                {{-- end of login and register --}}
            </div>
            {{-- end of navbar links --}}
       </div>
   </div>
{{-- end of navbar --}}

{{-- viewing --}}
    <div class="container grid grid-cols-5 gap-6 pt-4 pb-16 items-start">
        {{-- product --}}
        <div class="col-span-3 bg-white px-4 py-6 shadow rounded overflow-hidden">

            {{-- imagess --}}
            <div class="container border-b grid grid-cols-1 gap-6 pt-4 pb-3 items-start">
                <div class="gap-6">
                    <div>
                        <img id="mainImage" class="w-full" src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x6x1200x900/2134e42629d64f.webp" alt="">
                        <div class="grid grid-cols-5 gap-4 mt-4">
                            <img class="w-full cursor-pointer" src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x6x1200x900/0f2247470cb425.webp" alt="" onclick="swapImages(this)">
                            <img class="w-full cursor-pointer" src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x6x1200x900/59610ab9449d3a.webp" alt="" onclick="swapImages(this)">
                            <img class="w-full cursor-pointer" src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x6x1200x900/5237c4147ce4af.webp" alt="" onclick="swapImages(this)">
                            <img class="w-full cursor-pointer" src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x6x1200x900/f1b5cc7d970b7c.webp" alt="" onclick="swapImages(this)">
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function swapImages(element) {
                    var mainImage = document.getElementById('mainImage');
                    var tempSrc = mainImage.src;
                    mainImage.src = element.src;
                    element.src = tempSrc;
                }
            </script>
            {{-- end of images --}}



            {{-- place title --}}
            <div class="grid grid-cols-1 gap-6 py-4 px-5 items-start">
                <h1 class="text-4xl font-bold text-primary">5 Bedroom Mckinley West Village For Rent Brand New House, Taguig City</h1>
            </div>

            {{-- place location/address --}}
            <div class="flex border-b items-center py-2 px-5">
                <i class="text-primary fa-solid fa-location-dot"></i>
                <h1 class="text-xl font-light text-primary px-5">FORT BONIFACIO, TAGUIG</h1>
            </div>


            {{-- place details --}}
            <div class="flex items-center pt-5 px-5">
                <h3 class="boder-b bodr-gray-200 font-roboto text-gray-800 pb-3 font-medium">
                    Place Details
                </h3>


            </div>
        </div>
        {{-- end of product --}}

        {{-- user info --}}
        <div class="col-span-2 bg-white px-4 pb-2 shadow rounded-xl overflow-hidden">
            <div class="grid grid-cols-2 gap-6 pt-4 pb-2 items-start">

                {{-- image --}}
                <div class="col-span-1 bg-white px-2 pb-3 overflow-hidden">
                    <div class="flex items-center justify-center">
                        <img src="https://www.svgrepo.com/show/507442/user-circle.svg" class="w-52" alt="">
                    </div>
                </div>

                {{-- landlord info --}}
                <div class="col-span-1 bg-white px-2 pb-3 overflow-hidden">
                    <div class="divide-y divide-gray-200 space-y-5">
                        <div class="py-10">
                            {{-- name --}}
                            <h2 class="text-2xl font-semibold py-2">
                                Jhon Doe
                            </h2>

                            {{-- status --}}
                            <h4 class="text-md py-2">
                                Landlord
                            </h4>

                            {{-- number --}}
                            <h2 class="text-2xl font-semibold py-2">
                                +63 123 456 7890
                            </h2>
                        </div>
                    </div>
                </div>

                {{-- send inquiry section --}}
                <div class="col-span-2 text-center px-2 pb-3 overflow-hidden">
                    <h3 class="text-xl mb-3 uppercase align-middle font-medium">Send Inquiry</h3>

                    <div class="mt-4 flex items-center">
                        <input type="text" class="w-full border-gray-500 focus:border-primary focus:ring-0 px-3 py-2 text-gray-600 text-sm shadow-sm rounded" placeholder="Your Name">
                    </div>

                    <div class="mt-4 flex items-center">
                        <input type="text" class="w-full border-gray-500 focus:border-primary focus:ring-0 px-3 py-2 text-gray-600 text-sm shadow-sm rounded" placeholder="Email">
                    </div>

                    <div class="mt-4 flex items-center">
                        <input type="text" class="w-full border-gray-500 focus:border-primary focus:ring-0 px-3 py-2 text-gray-600 text-sm shadow-sm rounded" placeholder="Mobile Number">
                    </div>

                    <div class="mt-4">
                        <textarea class="w-full h-20 border-gray-500 focus:border-primary focus:ring-0 px-3 py-2 text-gray-600 text-sm shadow-sm rounded resize-none" placeholder="Message"></textarea>
                    </div>

                    <div class="mt-4">
                        <button class="bg-primary hover:bg-blue-700 text-white font-bold py-2 px-10 rounded">
                            Send
                        </button>
                    </div>

                </div>
                {{-- end of send inquiry section --}}

            </div>

        </div>
        {{-- end of user info --}}
    </div>
{{-- viewing ends --}}

{{-- Footer --}}
<footer class="bg-white pt-16 pb-12 border-t border-gray-100">
    <div class="container grid grdi-cols-3">

        <div class="cons-span-1 space-y-8">
            <img src="https://www.svgrepo.com/show/272028/houses-home.svg" alt="homelogo" class="w-16">
            <p class="text-gray-500">
                What's up madlang people!!!
            </p>

            <div class="flex space-x-6">
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
        </div>

        <div class="cons-span-2 grid grid-cols-2 gap-8">

        </div>

    </div>
</footer>
{{-- end of Footer --}}

</body>
</html>
