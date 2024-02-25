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

<body>
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
                <a href="listproperty" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i class="fas fa-house-flag"></i>
                    </div>
                    <div class="text-sx leading-3">Property</div>
                </a>


                {{-- account button --}}
                <a href="user" class="text-center text-gray-700 hover:text-primary transition relative">
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

    {{-- primary photo --}}
    <div class="container mx-auto p-6 bg-white">
        <div class="text-lg font-bold mb-4 my-10 mx-20 border-b">Adding Photos</div>

        <div class="mx-36 my-20">
            <div class="mb-6 mx-10 flex items-center">
                <div class="text-base font-semibold mb-2 mr-16">Primary Photo:</div>

                <!-- File input button -->
                <input type="file" accept=".png, .jpg" id="primaryimg" style="display: none;">
                <button onclick="document.getElementById('imageInput').click();" class="bg-gray-500 hover:bg-transparent text-white hover:text-primary border hover:border-primary font-bold py-2 px-56 rounded-xl">
                    <i class="fa-solid fa-image mr-2"></i>
                    Select Image
                </button>
            </div>
        </div>
    </div>
{{-- end of primary photo --}}

    {{-- Living Room & Interior Photos --}}
    <div class="container mx-auto p-6 bg-white">
        <div class="text-lg font-bold mb-4 my-10 mx-20 border-b">Living Room & Interior Photos</div>

        <div class="mx-36 my-20">
            <div class="mb-6 mx-10 flex items-center">
                <div class="text-base font-semibold mb-2 mr-44">1 </div>

                <!-- File input button -->
                <input type="file" accept=".png, .jpg" id="interior1" style="display: none;">
                <button onclick="document.getElementById('imageInput').click();" class="bg-gray-500 hover:bg-transparent text-white hover:text-primary border hover:border-primary font-bold py-2 px-56 rounded-xl">
                    <i class="fa-solid fa-image mr-2"></i>
                    Select Image
                </button>
            </div>

            <div class="mb-6 mx-10 flex items-center">
                <div class="text-base font-semibold mb-2 mr-44">2 </div>

                <!-- File input button -->
                <input type="file" accept=".png, .jpg" id="interior2" style="display: none;">
                <button onclick="document.getElementById('imageInput').click();" class="bg-gray-500 hover:bg-transparent text-white hover:text-primary border hover:border-primary font-bold py-2 px-56 rounded-xl">
                    <i class="fa-solid fa-image mr-2"></i>
                    Select Image
                </button>
            </div>

            <div class="mb-6 mx-10 flex items-center">
                <div class="text-base font-semibold mb-2 mr-44">3 </div>

                <!-- File input button -->
                <input type="file" accept=".png, .jpg" id="interior3" style="display: none;">
                <button onclick="document.getElementById('imageInput').click();" class="bg-gray-500 hover:bg-transparent text-white hover:text-primary border hover:border-primary font-bold py-2 px-56 rounded-xl">
                    <i class="fa-solid fa-image mr-2"></i>
                    Select Image
                </button>
            </div>
        </div>
    </div>
    {{-- end of Living Room & Interior Photos --}}

    {{-- Bedroom Photos --}}
    <div class="container mx-auto p-6 bg-white">
        <div class="text-lg font-bold mb-4 my-10 mx-20 border-b">Bedroom Photos</div>

        <div class="mx-36 my-20">
            <div class="mb-6 mx-10 flex items-center">
                <div class="text-base font-semibold mb-2 mr-44">1 </div>

                <!-- File input button -->
                <input type="file" accept=".png, .jpg" id="bed1" style="display: none;">
                <button onclick="document.getElementById('imageInput').click();" class="bg-gray-500 hover:bg-transparent text-white hover:text-primary border hover:border-primary font-bold py-2 px-56 rounded-xl">
                    <i class="fa-solid fa-image mr-2"></i>
                    Select Image
                </button>
            </div>

            <div class="mb-6 mx-10 flex items-center">
                <div class="text-base font-semibold mb-2 mr-44">2 </div>

                <!-- File input button -->
                <input type="file" accept=".png, .jpg" id="bed2" style="display: none;">
                <button onclick="document.getElementById('imageInput').click();" class="bg-gray-500 hover:bg-transparent text-white hover:text-primary border hover:border-primary font-bold py-2 px-56 rounded-xl">
                    <i class="fa-solid fa-image mr-2"></i>
                    Select Image
                </button>
            </div>

            <div class="mb-6 mx-10 flex items-center">
                <div class="text-base font-semibold mb-2 mr-44">3 </div>

                <!-- File input button -->
                <input type="file" accept=".png, .jpg" id="bed3" style="display: none;">
                <button onclick="document.getElementById('imageInput').click();" class="bg-gray-500 hover:bg-transparent text-white hover:text-primary border hover:border-primary font-bold py-2 px-56 rounded-xl">
                    <i class="fa-solid fa-image mr-2"></i>
                    Select Image
                </button>
            </div>
        </div>
    </div>
    {{-- end of Bedroom Photos --}}

    {{-- Bathroom Photos --}}
    <div class="container mx-auto p-6 bg-white">
        <div class="text-lg font-bold mb-4 my-10 mx-20 border-b">Bathroom Photos</div>

        <div class="mx-36 my-20">
            <div class="mb-6 mx-10 flex items-center">
                <div class="text-base font-semibold mb-2 mr-44">1 </div>

                <!-- File input button -->
                <input type="file" accept=".png, .jpg" id="bath1" style="display: none;">
                <button onclick="document.getElementById('imageInput').click();" class="bg-gray-500 hover:bg-transparent text-white hover:text-primary border hover:border-primary font-bold py-2 px-56 rounded-xl">
                    <i class="fa-solid fa-image mr-2"></i>
                    Select Image
                </button>
            </div>

            <div class="mb-6 mx-10 flex items-center">
                <div class="text-base font-semibold mb-2 mr-44">2 </div>

                <!-- File input button -->
                <input type="file" accept=".png, .jpg" id="bath2" style="display: none;">
                <button onclick="document.getElementById('imageInput').click();" class="bg-gray-500 hover:bg-transparent text-white hover:text-primary border hover:border-primary font-bold py-2 px-56 rounded-xl">
                    <i class="fa-solid fa-image mr-2"></i>
                    Select Image
                </button>
            </div>

            <div class="mb-6 mx-10 flex items-center">
                <div class="text-base font-semibold mb-2 mr-44">3 </div>

                <!-- File input button -->
                <input type="file" accept=".png, .jpg" id="bath3" style="display: none;">
                <button onclick="document.getElementById('imageInput').click();" class="bg-gray-500 hover:bg-transparent text-white hover:text-primary border hover:border-primary font-bold py-2 px-56 rounded-xl">
                    <i class="fa-solid fa-image mr-2"></i>
                    Select Image
                </button>
            </div>
        </div>
    </div>
    {{-- end of Bathroom Photos --}}

    {{-- Amenities Photos --}}
    <div class="container mx-auto p-6 bg-white">
        <div class="text-lg font-bold mb-4 my-10 mx-20 border-b">Amenities Photos</div>

        <div class="mx-36 my-20">
            <div class="mb-6 mx-10 flex items-center">
                <div class="text-base font-semibold mb-2 mr-44">1 </div>

                <!-- File input button -->
                <input type="file" accept=".png, .jpg" id="amen1" style="display: none;">
                <button onclick="document.getElementById('imageInput').click();" class="bg-gray-500 hover:bg-transparent text-white hover:text-primary border hover:border-primary font-bold py-2 px-56 rounded-xl">
                    <i class="fa-solid fa-image mr-2"></i>
                    Select Image
                </button>
            </div>

            <div class="mb-6 mx-10 flex items-center">
                <div class="text-base font-semibold mb-2 mr-44">2 </div>

                <!-- File input button -->
                <input type="file" accept=".png, .jpg" id="amen2" style="display: none;">
                <button onclick="document.getElementById('imageInput').click();" class="bg-gray-500 hover:bg-transparent text-white hover:text-primary border hover:border-primary font-bold py-2 px-56 rounded-xl">
                    <i class="fa-solid fa-image mr-2"></i>
                    Select Image
                </button>
            </div>

            <div class="mb-6 mx-10 flex items-center">
                <div class="text-base font-semibold mb-2 mr-44">3 </div>

                <!-- File input button -->
                <input type="file" accept=".png, .jpg" id="amen3" style="display: none;">
                <button onclick="document.getElementById('imageInput').click();" class="bg-gray-500 hover:bg-transparent text-white hover:text-primary border hover:border-primary font-bold py-2 px-56 rounded-xl">
                    <i class="fa-solid fa-image mr-2"></i>
                    Select Image
                </button>
            </div>
        </div>
    </div>
    {{-- end of Amenities Photos --}}

    {{-- Building / Exterior Photos --}}
    <div class="container mx-auto p-6 bg-white">
        <div class="text-lg font-bold mb-4 my-10 mx-20 border-b">Building / Exterior Photos</div>

        <div class="mx-36 my-20">
            <div class="mb-6 mx-10 flex items-center">
                <div class="text-base font-semibold mb-2 mr-44">1 </div>

                <!-- File input button -->
                <input type="file" accept=".png, .jpg" id="ext1" style="display: none;">
                <button onclick="document.getElementById('imageInput').click();" class="bg-gray-500 hover:bg-transparent text-white hover:text-primary border hover:border-primary font-bold py-2 px-56 rounded-xl">
                    <i class="fa-solid fa-image mr-2"></i>
                    Select Image
                </button>
            </div>

            <div class="mb-6 mx-10 flex items-center">
                <div class="text-base font-semibold mb-2 mr-44">2 </div>

                <!-- File input button -->
                <input type="file" accept=".png, .jpg" id="ext2" style="display: none;">
                <button onclick="document.getElementById('imageInput').click();" class="bg-gray-500 hover:bg-transparent text-white hover:text-primary border hover:border-primary font-bold py-2 px-56 rounded-xl">
                    <i class="fa-solid fa-image mr-2"></i>
                    Select Image
                </button>
            </div>

            <div class="mb-6 mx-10 flex items-center">
                <div class="text-base font-semibold mb-2 mr-44">3 </div>

                <!-- File input button -->
                <input type="file" accept=".png, .jpg" id="ext3" style="display: none;">
                <button onclick="document.getElementById('imageInput').click();" class="bg-gray-500 hover:bg-transparent text-white hover:text-primary border hover:border-primary font-bold py-2 px-56 rounded-xl">
                    <i class="fa-solid fa-image mr-2"></i>
                    Select Image
                </button>
            </div>
        </div>
    </div>
    {{-- end of Building / Exterior  Photos --}}

    {{-- Other Photos --}}
    <div class="container mx-auto p-6 bg-white">
        <div class="text-lg font-bold mb-4 my-10 mx-20 border-b">Other Photos</div>

        <div class="mx-36 my-20">
            <div class="mb-6 mx-10 flex items-center">
                <div class="text-base font-semibold mb-2 mr-44">1 </div>

                <!-- File input button -->
                <input type="file" accept=".png, .jpg" id="other1" style="display: none;">
                <button onclick="document.getElementById('imageInput').click();" class="bg-gray-500 hover:bg-transparent text-white hover:text-primary border hover:border-primary font-bold py-2 px-56 rounded-xl">
                    <i class="fa-solid fa-image mr-2"></i>
                    Select Image
                </button>
            </div>

            <div class="mb-6 mx-10 flex items-center">
                <div class="text-base font-semibold mb-2 mr-44">2 </div>

                <!-- File input button -->
                <input type="file" accept=".png, .jpg" id="other2" style="display: none;">
                <button onclick="document.getElementById('imageInput').click();" class="bg-gray-500 hover:bg-transparent text-white hover:text-primary border hover:border-primary font-bold py-2 px-56 rounded-xl">
                    <i class="fa-solid fa-image mr-2"></i>
                    Select Image
                </button>
            </div>

            <div class="mb-6 mx-10 flex items-center">
                <div class="text-base font-semibold mb-2 mr-44">3 </div>

                <!-- File input button -->
                <input type="file" accept=".png, .jpg" id="other3" style="display: none;">
                <button onclick="document.getElementById('imageInput').click();" class="bg-gray-500 hover:bg-transparent text-white hover:text-primary border hover:border-primary font-bold py-2 px-56 rounded-xl">
                    <i class="fa-solid fa-image mr-2"></i>
                    Select Image
                </button>
            </div>
        </div>
    </div>
    {{-- end of Other Photos --}}

    {{-- upload Button mag save niya lang yung mga images--}}
    <div class="container mx-auto p-6 bg-white">
        <a href="">
            <button class="bg-primary hover:bg-transparent border hover:border-primary text-white hover:text-primary font-bold py-2 px-4 rounded-md mt-20 mx-auto block">
                Upload Photos
            </button>
        </a>
    </div>

    {{-- Go to MAP Button --}}
    <div class="container p-6 bg-white flex justify-end">
        <button class="bg-gray-500 hover:bg-transparent border hover:border-primary text-white hover:text-primary font-bold py-2 px-4 rounded-md block">
            Map
            <i class="fa-solid fa-caret-right"></i>
        </button>
    </div>


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
                    <i class="fab fa-square-instagram"></i>
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
