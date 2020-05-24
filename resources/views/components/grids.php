<h2 class="font-medium text-3xl my-10">Flexbox Grids</h2>

<div class="container px-4">
    <h3 class="my-8 font-medium text-xl">Basic Grids</h3>
    <!-- Full width column -->
    <div class="flex mb-4">
        <div class="w-full bg-gray-500 h-12"></div>
    </div>

    <!-- Two columns -->
    <div class="flex mb-4">
        <div class="w-1/2 bg-gray-400 h-12"></div>
        <div class="w-1/2 bg-gray-500 h-12"></div>
    </div>

    <!-- Three columns -->
    <div class="flex mb-4">
        <div class="w-1/3 bg-gray-400 h-12"></div>
        <div class="w-1/3 bg-gray-500 h-12"></div>
        <div class="w-1/3 bg-gray-400 h-12"></div>
    </div>

    <!-- Four columns -->
    <div class="flex mb-4">
        <div class="w-1/4 bg-gray-500 h-12"></div>
        <div class="w-1/4 bg-gray-400 h-12"></div>
        <div class="w-1/4 bg-gray-500 h-12"></div>
        <div class="w-1/4 bg-gray-400 h-12"></div>
    </div>

    <!-- Five columns -->
    <div class="flex mb-4">
        <div class="w-1/5 bg-gray-500 h-12"></div>
        <div class="w-1/5 bg-gray-400 h-12"></div>
        <div class="w-1/5 bg-gray-500 h-12"></div>
        <div class="w-1/5 bg-gray-400 h-12"></div>
        <div class="w-1/5 bg-gray-500 h-12"></div>
    </div>

    <!-- Six columns -->
    <div class="flex">
        <div class="w-1/6 bg-gray-400 h-12"></div>
        <div class="w-1/6 bg-gray-500 h-12"></div>
        <div class="w-1/6 bg-gray-400 h-12"></div>
        <div class="w-1/6 bg-gray-500 h-12"></div>
        <div class="w-1/6 bg-gray-400 h-12"></div>
        <div class="w-1/6 bg-gray-500 h-12"></div>
    </div>
</div>

<div class="container px-4">
    <h3 class="my-8 font-medium text-xl">Responsive Grids</h3>
    <div class="flex flex-wrap">
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 bg-gray-500">
            <span class="p-6 block text-center font-bold">grid</span>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 bg-gray-400">
            <span class="p-6 block text-center font-bold">grid</span>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 bg-gray-500">
            <span class="p-6 block text-center font-bold">grid</span>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 bg-gray-400">
            <span class="p-6 block text-center font-bold">grid</span>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/2 xl:w-1/6 mb-4 bg-gray-500">
            <span class="p-6 block text-center font-bold">grid</span>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/2 xl:w-1/6 mb-4 bg-gray-400">
            <span class="p-6 block text-center font-bold">grid</span>
        </div>
    </div>
</div>

<div class="container px-4">
    <h3 class="my-8 font-medium text-xl">Mixed Column Sizes</h3>
    <!-- Narrower side column -->
    <div class="flex mb-4">
        <div class="w-3/4 bg-gray-500 h-12"></div>
        <div class="w-1/4 bg-gray-400 h-12"></div>
    </div>

    <!-- Wide center column -->
    <div class="flex">
        <div class="w-1/5 bg-gray-500 h-12"></div>
        <div class="w-3/5 bg-gray-400 h-12"></div>
        <div class="w-1/5 bg-gray-500 h-12"></div>
    </div>
</div>

<div class="container px-4">
    <h3 class="my-8 font-medium text-xl">Column Spacing</h3>
    <div class="px-2">
        <div class="flex -mx-2">
            <div class="w-1/3 px-2">
                <div class="bg-gray-400 h-12"></div>
            </div>
            <div class="w-1/3 px-2">
                <div class="bg-gray-500 h-12"></div>
            </div>
            <div class="w-1/3 px-2">
                <div class="bg-gray-400 h-12"></div>
            </div>
        </div>
    </div>
</div>

<div class="container px-4">
    <h3 class="my-8 font-medium text-xl">Automatic Column Widths</h3>
    <div class="px-2">
        <!-- Full width column -->
        <div class="flex mb-4">
            <div class="flex-1 bg-gray-500 h-12"></div>
        </div>

        <!-- Five columns -->
        <div class="flex mb-4">
            <div class="flex-1 bg-gray-400 h-12"></div>
            <div class="flex-1 bg-gray-500 h-12"></div>
            <div class="flex-1 bg-gray-400 h-12"></div>
            <div class="flex-1 bg-gray-500 h-12"></div>
            <div class="flex-1 bg-gray-400 h-12"></div>
        </div>

        <!-- Seven columns -->
        <div class="flex mb-4">
            <div class="flex-1 bg-gray-400 h-12"></div>
            <div class="flex-1 bg-gray-500 h-12"></div>
            <div class="flex-1 bg-gray-400 h-12"></div>
            <div class="flex-1 bg-gray-500 h-12"></div>
            <div class="flex-1 bg-gray-400 h-12"></div>
            <div class="flex-1 bg-gray-500 h-12"></div>
            <div class="flex-1 bg-gray-400 h-12"></div>
        </div>

        <!-- Eleven columns -->
        <div class="flex mb-4">
            <div class="flex-1 bg-gray-400 h-12"></div>
            <div class="flex-1 bg-gray-500 h-12"></div>
            <div class="flex-1 bg-gray-400 h-12"></div>
            <div class="flex-1 bg-gray-500 h-12"></div>
            <div class="flex-1 bg-gray-400 h-12"></div>
            <div class="flex-1 bg-gray-500 h-12"></div>
            <div class="flex-1 bg-gray-400 h-12"></div>
            <div class="flex-1 bg-gray-500 h-12"></div>
            <div class="flex-1 bg-gray-400 h-12"></div>
            <div class="flex-1 bg-gray-500 h-12"></div>
            <div class="flex-1 bg-gray-400 h-12"></div>
        </div>
    </div>
</div>

<div class="container px-4">
    <h3 class="my-8 font-medium text-xl">Column Order</h3>
    <div class="px-2">
        <div class="flex md:flex-row-reverse flex-wrap">
          <div class="w-full md:w-3/4 bg-gray-500 p-4 text-center text-gray-200">1</div>
            <div class="w-full md:w-1/4 bg-gray-400 p-4 text-center text-gray-700">2</div>
        </div>
    </div>
</div>

<div class="container px-4">
    <h3 class="my-8 font-medium text-xl">Simple Offsets</h3>
    <div class="px-2">
        <div class="flex flex-wrap">
            <div class="w-1/3 ml-auto bg-gray-500 h-12"></div>
            <div class="w-1/3 mr-auto bg-gray-400 h-12"></div>
        </div>
    </div>
</div>