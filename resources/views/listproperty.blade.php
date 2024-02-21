<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>FindFlat</title>


   <link rel="stylesheet" href="{{ asset('css/app.css') }}">


   <script src="https://cdn.tailwindcss.com"></script>
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body class="bg-gray-200">
{{-- ito yung header ng page 1 --}}
   <header class="py-1 shadow-sm bg-white">
       <div class="container flex items-center justify-between">
           {{-- logo --}}
           <a href="#">
               <img src="https://www.svgrepo.com/show/272028/houses-home.svg" alt="homelogo" class="w-16">
               <h1 class="text-gray-700 hover:text-red-500 transision">FindFlat</h1>
           </a>


           {{-- search area --}}
           <div class="w-full max-w-xl relative flex">
               <span class="absolute left-4 top-3 text-lg text-gray-400">
                   <i class="fas fa-search"></i>
               </span>
               <input type="text" class="w-full border border-primary border-r-0 pl-12 py-3 pr-3 rounded-1-md focus:outline-none" placeholder="Search">
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

{{-- Listing Area --}}

{{-- basic info --}}
    <div class="container mx-auto p-6 bg-white">
        <div class="text-lg font-bold mb-4 my-10 mx-20 border-b">Basic Information</div>

        <div class="mx-36 my-20">
            <div class="mb-6 mx-10 flex items-center">
                <div class="text-base font-semibold mb-2">Property Type:</div>
                    <select class="ml-7 rounded-md border border-gray-300 p-2 w-96">
                        <option>Apartment</option>
                        <option>Condominium</option>
                        <option>House</option>
                    </select>
            </div>

            <div class="mb-6 mx-10">
                <div class="text-base font-semibold mb-2">Rental Terms:</div>
                <div class="ml-36">
                    <label class="flex items-center mb-2">
                        <input type="checkbox" class="mr-2">
                        <span class="font-semibold text-sm">For Long Term</span>
                        <span class="text-xs text-gray-600 ml-1">(minimum of 6 months)</span>
                    </label>

                    <label class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        <span class="font-semibold text-sm">For Short Term</span>
                        <span class="text-xs text-gray-600 ml-1">(available for daily, weekly or monthly rent)</span>
                    </label>
                    <div class="text-xs text-gray-600 mt-1">Tip: You can pick both if applies.</div>
                </div>
            </div>

            <div class="mx-10">

                <div class="flex items-center">
                    <div class="text-base font-semibold mb-2">Minimum Stay:</div>
                    <input type="text" placeholder="ex: 2 months" class="rounded-md border border-gray-300 mx-7 w-96">
                </div>

                <div class="text-xs text-gray-600 ml-36 mt-1">Tip: Indicate how long is your minimum required stay for this property.</div>
            </div>
        </div>
    </div>
{{-- end of Basic Info --}}

{{-- Rental Rates --}}
    <div class="container mx-auto p-6 bg-white">
        <div class="text-lg font-bold mb-4 my-10 mx-20 border-b">Rental Rates</div>

        <div class="mx-36 my-20">

            <div class="mx-10 mt-5 p-10 border border-black rounded-md">

                <div class="text-xs text-gray-600 ml-56 mt-1">Monthly Rate</div>

                <div class="flex items-center">
                    <div class="text-base font-semibold mb-2">Long Term Rental Rates:</div>
                    <i class="fa-solid fa-peso-sign ml-4"></i>
                    <input type="text" placeholder="" class="rounded-md border border-gray-300 ml-6 w-96">
                </div>
            </div>

            <div class="mx-10 mt-5 p-10 border border-black rounded-md">

                <div class="text-xs text-gray-600 ml-56 mt-1">Daily Rate</div>

                <div class="flex items-center">
                    <div class="text-base font-semibold mb-2">Short Term Rental Rates:</div>
                    <i class="fa-solid fa-peso-sign ml-4"></i>
                    <input type="text" placeholder="" class="rounded-md border border-gray-300 ml-6 w-96">
                </div>

                <div class="text-xs text-gray-600 ml-56 mt-5">Weekly Rate</div>
                <div class="mx-48">
                    <i class="fa-solid fa-peso-sign ml-3"></i>
                    <input type="text" placeholder="" class="rounded-md border border-gray-300 ml-5 w-96">
                </div>

                <div class="text-xs text-gray-600 ml-56 mt-5">Monthly Rate</div>
                <div class="mx-48">
                    <i class="fa-solid fa-peso-sign ml-3"></i>
                    <input type="text" placeholder="" class="rounded-md border border-gray-300 ml-5 w-96">
                </div>

            </div>

            </div>
        </div>
    </div>
{{-- end of Rental Rates --}}

{{-- Location and Address --}}
    <div class="container mx-auto p-6 bg-white">
        <div class="text-lg font-bold mb-4 my-10 mx-20 border-b">Location and Address</div>

        <div class="mx-36 my-20">
            <div class="flex items-center py-3">
                <div class="text-base font-semibold mr-1 mb-2">Uni Number or House Number: </div>
                <input type="text" placeholder="" class="rounded-md border border-gray-300 ml-12 w-96">
            </div>

            <div class="flex items-center py-3">
                <div class="text-base font-semibold mb-2">Floor: </div>
                <input type="text" placeholder="" class="rounded-md border border-gray-300 ml-60 w-96">
            </div>

            <div class="flex items-center py-3">
                <div class="text-base font-semibold mb-2">Street, neighborhood & Barangay: </div>
                <input type="text" placeholder="" class="rounded-md border border-gray-300 ml-7 w-96">
            </div>

            <div class="flex items-center py-3">
                <div class="text-base font-semibold mr-3 mb-2">City: </div>
                <input type="text" placeholder="" class="rounded-md border border-gray-300 ml-60 w-96">
            </div>
        </div>
    </div>
{{-- end of Location and Address --}}

{{-- Property Details --}}
    <div class="container mx-auto p-6 bg-white">
        <div class="text-lg font-bold mb-4 my-10 mx-20 border-b">Property Details</div>

        <div class="col-span-2 bg-white px-4 pb-2 shadow rounded-xl overflow-hidden">
            <div class="grid grid-cols-1 gap-6 pt-4 pb-2 items-start">

            </div>
        </div>

    </div>
{{-- end of Property Details --}}


{{-- End of Listing Area --}}

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
