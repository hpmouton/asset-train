<div class="h-min">
    <!--Sidebar -->
    <aside :class="{ '-translate-x-full': !open }"
        class="bg-white lg:fixed sm:fixed text-gray-900 w-52 px-2 py-4  absolute inset-y-1  top-16 bottom-0 transform md:translate-x-0 overflow-y-auto overflow-x-auto transition ease-in-out duration-200 shadow-lg">
        <!--logo-->
        <div class="flex items-center justify-between px-2">


            <button type="button" @click="open = !open"
                class="md:hidden inline-flex p-2 items-center justify-center rounded-md text-black hover:bg-orange-400 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="block w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <hr class="my-2 w-64 h-px bg-gray-200 border-0 ">


        <!--Nav Links-->
        <nav>
            <x-side-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" icon="home">
                Dashboard
            </x-side-nav-link>





            {{--
            <div class="inline-flex justify-start items-center w-full">
                <span class="absolute  px-3 font-medium text-gray-900 bg-white  ">Skills
                    Audit</span>
                <hr class="my-8 w-64 h-px bg-gray-200 border-0 ">
            </div> --}}


        </nav>
    </aside>
</div>
