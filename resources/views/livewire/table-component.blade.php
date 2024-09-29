<div>
    <section class="mt-10">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-black shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex items-center justify-between p-4 w-full">
                    <div class="flex">
                        <div class="relative w-full">
                            <input type="search"
                                class="bg-white dark:bg-black border dark:text-white border-gray-300 text-black text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 "
                                placeholder="Search" required="">
                        </div>
                    </div>
                    <div class="flex space-x-3">
                        <div class="flex space-x-3 items-center">
                            <label class="text-sm font-medium text-black dark:text-white" style="width: 90px;">Sort
                                By</label>
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
                                @foreach ($columns as $column)
                                    <th scope="col" class="px-4 py-3">{{ $column['label'] }}</th>
                                @endforeach
                                <th scope="col" class="px-4 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    @foreach ($columns as $column)
                                        <td class="px-4 py-3">{{ $item[$column['field']] }}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="py-4 px-3">
                    <div class="flex">
                        <div class="flex space-x-4 items-center mb-3">
                            <label class="text-sm font-medium text-black dark:text-white" style="width: 112px">Per
                                Page</label>
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
