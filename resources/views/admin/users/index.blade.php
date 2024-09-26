<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            Tasks List
        </h2>
    </x-slot>

    <div>
        <section class="mt-10">
            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                <!-- Start coding here -->
                <div class="bg-white dark:bg-black shadow-md sm:rounded-lg overflow-hidden">
                    <div class="flex items-center justify-between p-4 w-full">
                        <div class="flex">
                            <div class="relative w-full">
                                <input type="text"
                                    class="bg-white dark:bg-black border dark:text-white border-gray-300 text-black text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 "
                                    placeholder="Search" required="">
                            </div>
                        </div>
                        <div class="flex space-x-3">
                            <div class="flex space-x-3 items-center">
                                <label class="text-sm font-medium text-black dark:text-white" style="width: 90px;">Sort By</label>
                                <select
                                    class="bg-white dark:bg-black dark:text-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                    <option value="">All</option>
                                    <option value="0">A to Z</option>
                                    <option value="1">Z to A</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-black uppercase bg-white dark:bg-black dark:text-white">
                                <tr>
                                    <th scope="col" class="px-4 py-3">Name</th>
                                    <th scope="col" class="px-4 py-3">Email</th>
                                    <th scope="col" class="px-4 py-3">Role</th>
                                    <th scope="col" class="px-4 py-3">Joined</th>
                                    <th scope="col" class="px-4 py-3">Last Update</th>
                                    <th scope="col" class="px-4 py-3">
                                        <span class="sr-only">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        John Doe
                                    </th>
                                    <td class="px-4 py-3">john@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-25</td>
                                    <td class="px-4 py-3">2024-09-26</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b  dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-black whitespace-nowrap dark:text-white">
                                        Jane Smith
                                    </th>
                                    <td class="px-4 py-3">jane@example.com</td>
                                    <td class="px-4 py-3 text-green-500">Admin</td>
                                    <td class="px-4 py-3">2024-09-20</td>
                                    <td class="px-4 py-3">2024-09-24</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
    
                    <div class="py-4 px-3">
                        <div class="flex">
                            <div class="flex space-x-4 items-center mb-3">
                                <label class="text-sm font-medium text-black dark:text-white" style="width: 112px">Per Page</label>
                                <select
                                    class="bg-white dark:bg-black dark:text-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
</x-app-layout>
