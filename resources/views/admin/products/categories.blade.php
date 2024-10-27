@extends('admin.layouts.app')

@section('title', 'Rare Gem - Admin Dashboard')

@section('content')
    <div class="page-content">
        <div class="header h-12 px-10 py-8 my-4 border-b-2 border-gray-200 flex items-center justify-between">
            <div class="flex items-center space-x-2 text-gray-400">
                <span class="text-blue-700 tracking-wider text-lg"><a href="/admin/dashboard">Home</a></span>
                <span>/</span>
                <span class="tracking-wide text-md ">
                    <span class="text-base">Categories</span>
                </span>
                <span>/</span>
            </div>
            <div>
                <a href="{{ url('/admin/categories/add') }}" class="appearance-none block w-full bg-blue-700 text-gray-100 font-bold border border-gray-200 rounded-lg py-3 px-5 leading-tight hover:bg-blue-600 focus:outline-none focus:bg-blue-600 focus:border-gray-400">Add Category</a>
            </div>
        </div>
        <div class="header bg-white m-4 rounded-md p-4 h-12 px-10 flex items-center justify-between">
            <h1 class="font-medium text-2xl">Categories</h1>
        </div>

        <div class="header bg-white m-4 rounded-md p-4 px-10 flex">
            <table class="table-auto w-full">
                <thead class="text-sm font-semibold uppercase text-gray-800 mx-auto">
                    <tr>
                        <th class="p-2">
                            <div class="font-semibold text-left">Image</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-left">Category</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-left">Description</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-left">Status</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Action</div>
                        </th>
                    </tr>
                    
                </thead>
                <tbody class="text-sm">
                    <tr class="border-b border-gray-200 py-4">
                        <td class="text-center"><img src="https://images.pexels.com/photos/25652584/pexels-photo-25652584/free-photo-of-elegant-man-wearing-navy-suit.jpeg?auto=compress&cs=tinysrgb&w=400" class="h-auto w-8" /></td>
                        <td>Sample Name</td>
                        <td>Sample Description</td>
                        <td>
                            <span href="#" class="text-xs rounded-lg h-auto w-24 bg-green-100 text-green-600 p-2 items-center">
                                Active
                            </span>
                        </td>
                        <td class="">
                            {{-- <div class="flex justify-center">
                                <a href="#" class="rounded-md hover:bg-green-100 text-green-600 p-2 flex justify-between items-center">
                                    <span><FaEdit class="w-4 h-4 mr-1"/>
                                    </span> Edit
                                </a>
                                <button class="rounded-md hover:bg-blue-100 text-blue-600 p-2 flex justify-between items-center">
                                    <span><FaTrash class="w-4 h-4 mr-1" /></span> Delete
                                </button>
                            </div> --}}
                            <div class="dropdown p-2 text-center">
                                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i class="ri-more-2-fill"></i></button>
                                <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Edit</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Deactivate</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-red-600 hover:text-red-500 hover:bg-gray-50">Delete</a>
                                    </li>
                                </ul>
                            </div>                             
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection