<!--sidenav -->
<div class="fixed left-0 top-0 w-64 h-full bg-[#f8f4f3] p-4 z-50 sidebar-menu transition-transform">
    <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">

        <h2 class="font-bold text-2xl">Rare <span class="bg-blue-700 text-white px-2 rounded-md">Gem</span></h2>
    </a>
    <ul class="mt-4">
        <span class="text-gray-400 font-bold">ADMIN</span>
        <li class="mb-1 group">
            <a href="{{ url('/admin/dashboard') }}" class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="bx bx-home-alt bx-sm mr-2 text-lg"></i>
                <span class="text-sm">Dashboard</span>
            </a>
        </li>
        {{-- <li class="mb-1 group">
            <a href="" class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="bx bxs-cart bx-sm mr-2 text-lg"></i>
                <span class="text-sm">Products</span>
            </a>
        </li> --}}
        <li class="mb-1 group">
            <a href="" class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                <i class="bx bxs-cart bx-sm mr-2 text-lg"></i>
                <span class="text-sm">Products</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="" class="text-gray-900 text-sm flex items-center hover:text-blue-500 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">All Products</a>
                </li> 
                <li class="mb-4">
                    <a href="{{ url('/admin/categories') }}" class="text-gray-900 text-sm flex items-center hover:text-blue-500 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Categories</a>
                </li> 
                <li class="mb-4">
                    <a href="" class="text-gray-900 text-sm flex items-center hover:text-blue-500 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Tags</a>
                </li> 
            </ul>
        </li>
        <li class="mb-1 group">
            <a href="" class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                <i class="bx bx-user bx-sm mr-2 text-lg"></i>
                <span class="text-sm">Users</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="" class="text-gray-900 text-sm flex items-center hover:text-blue-500 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Users</a>
                </li> 
                <li class="mb-4">
                    <a href="" class="text-gray-900 text-sm flex items-center hover:text-blue-500 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Admins</a>
                </li> 
            </ul>
        </li>
        <li class="mb-1 group">
            <a href="" class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="bx bxs-shopping-bag-alt bx-sm mr-2 text-lg"></i>
                <span class="text-sm">Orders</span>
            </a>
        </li>
        <li class="mb-1 group">
            <a href="" class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class='bx bx-list-ul mr-3 text-lg'></i>                
                <span class="text-sm">Settings</span>
            </a>
        </li>
        <span class="text-gray-400 font-bold">BLOG</span>
        <li class="mb-1 group">
            <a href="" class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                <i class='bx bxl-blogger mr-3 text-lg' ></i>                 
                <span class="text-sm">Post</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="" class="text-gray-900 text-sm flex items-center hover:text-blue-500 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">All</a>
                </li> 
                <li class="mb-4">
                    <a href="" class="text-gray-900 text-sm flex items-center hover:text-blue-500 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Categories</a>
                </li> 
            </ul>
        </li>
        <li class="mb-1 group">
            <a href="" class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class='bx bx-archive mr-3 text-lg'></i>                
                <span class="text-sm">Archive</span>
            </a>
        </li>
        <span class="text-gray-400 font-bold">PERSONAL</span>
        <li class="mb-1 group">
            <a href="" class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class='bx bx-bell mr-3 text-lg' ></i>                
                <span class="text-sm">Notifications</span>
                <span class=" md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-600 bg-blue-200 rounded-full">5</span>
            </a>
        </li>
        {{-- <li class="mb-1 group">
            <a href="" class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class='bx bx-envelope mr-3 text-lg' ></i>                
                <span class="text-sm">Messages</span>
                <span class=" md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-green-600 bg-green-200 rounded-full">2 New</span>
            </a>
        </li> --}}
    </ul>
</div>
<div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
<!-- end sidenav -->