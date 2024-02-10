<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>navbar</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.5.1/tailwind.min.css" />
</head>
<body>

    <nav class="bg-red-800 shadow-lg">
        <div class="container mx-auto">
            <div class="sm:flex justify-left">
                <a href="#" class="text-white text-2xl font-semibold ">HOUSE RENTAL SYSTEM</a>
            </div>
        </div>
    </nav>

    {{-- <nav class="bg-red-600 shadow-lg">
        <div>

        </div>
    </nav> --}}

    <nav class="bg-red-600 shadow-lg">
        <div class="flex justify-between items-center">
            <div class="flex justify-between space-x-4 w-3/4 mx-auto">
                <div class="relative flex-1">
                    <button class="text-white hover:text-red-600 py-2 font-semibold w-full hover:bg-gray-200">Property Type</button>
                    <div class="absolute bg-white shadow-lg rounded-lg mt-2 w-48 py-1 z-10 hidden">
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Option 1</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Option 2</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Option 3</a>
                    </div>
                </div>

                <div class="relative flex-1">
                    <button class="text-white hover:text-red-600 py-2 font-semibold w-full hover:bg-gray-200">Bedroom</button>
                    <div class="absolute bg-white shadow-lg rounded-lg mt-2 w-48 py-1 z-10 hidden">
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Option 1</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Option 2</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Option 3</a>
                    </div>
                </div>

                <div class="relative flex-1">
                    <button class="text-white hover:text-red-600 py-2 font-semibold w-full hover:bg-gray-200">Price</button>
                    <div class="absolute bg-white shadow-lg rounded-lg mt-2 w-48 py-1 z-10 hidden">
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Option 1</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Option 2</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Option 3</a>
                    </div>
                </div>

                <div class="relative flex-1">
                    <button class="bg-orange-500 text-white hover:text-red-600 py-2 font-semibold w-full hover:bg-orange-300">Search</button>
                </div>
            </div>
        </div>
    </nav>

    <script>
        document.querySelectorAll('.relative').forEach((dropdown) => {
            const button = dropdown.querySelector('button');
            const menu = dropdown.querySelector('.hidden');

            button.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });

            window.addEventListener('click', (event) => {
                if (!dropdown.contains(event.target)) {
                    menu.classList.add('hidden');
                }
            });
        });
    </script>

<div class="float-left mt-5 ml-20">
    <div class="bg-gray-300 rounded-lg shadow-lg h-auto w-60 mb-4 p-4">
        <h2 class="text-base font-semibold">NEAREST LANDMARK</h2>
        <div class="ml-4">
            <a href="#" class="text-gray-700 text-sm block mb-1 hover:text-gray-900 hover:underline">Fisher Valley College</a>
            <a href="#" class="text-gray-700 text-sm block mb-1 hover:text-gray-900 hover:underline">San Antonio Central School</a>
            <a href="#" class="text-gray-700 text-sm block mb-1 hover:text-gray-900 hover:underline">Phase 2 Basketball Court</a>
            <a href="#" class="text-gray-700 text-sm block mb-1 hover:text-gray-900 hover:underline">Western Bicutan National High School</a>
            <a href="#" class="text-gray-700 text-sm block mb-1 hover:text-gray-900 hover:underline">D Carmelite School Inc.</a>
        </div>
    </div>

    <div class="bg-gray-300 rounded-lg shadow-lg h-auto w-60 mb-4 p-4">
        <h2 class="text-base font-semibold">TYPE OF HOUSES</h2>
        <div class="ml-4">
            <a href="#" class="text-gray-700 text-sm block mb-1 hover:text-gray-900 hover:underline">Townhouse for Rent in Taguig</a>
            <a href="#" class="text-gray-700 text-sm block mb-1 hover:text-gray-900 hover:underline">Single-family House for Rent in Taguig</a>
            <a href="#" class="text-gray-700 text-sm block mb-1 hover:text-gray-900 hover:underline">Beach House for Rent in Taguig</a>
            <a href="#" class="text-gray-700 text-sm block mb-1 hover:text-gray-900 hover:underline">Villas for Rent in Taguig</a>
        </div>
    </div>
</div>

<div class="max-w-md mt-5 ml-5 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="md:flex">
        <div class="md:flex-shrink-0">
            <img class="h-48 w-full object-cover md:w-48" src="your-image-url.jpg" alt="Product Image">
        </div>
        <div class="p-8">
            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Product Category</div>
            <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Product Name</a>
            <p class="mt-2 text-gray-600">Product Description goes here. You can provide some details about the product.</p>
            <div class="mt-2">
                <span class="text-gray-600 font-medium">$99.99</span>
                <span class="text-gray-500 ml-2">In stock</span>
            </div>
            <div class="mt-4">
                <button class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600">Add to Cart</button>
            </div>
        </div>
    </div>
</div>


</body>
</html>
