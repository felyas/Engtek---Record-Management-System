<?php require base_path('views/components/header.php'); ?>
<?php require base_path('views/components/nav.php'); ?>
<?php require base_path('views/components/banner.php'); ?>

<main class="flex-1 p-4 h-screen">
    <div class="max-w-7xl mx-auto space-y-4">

        <!-- Dashboard Illustaton and Line Chart -->
        <div class="grid grid-cols-1">
            <div class="col-span-4 flex flex-col h-auto bg-white p-4 space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <!-- <div class="w-9 py-2 rounded-l-lg bg-[#393E46] flex items-center justify-center">
                            <img src="/images/search-solid.svg" class="h-4 w-4" alt="">
                        </div> -->
                        <input type="text" id="document-search-bar" class="w-66 border border-gray-100 focus:outline-none rounded-r-lg text-sm py-1 px-2" placeholder="Search...">
                    </div>
                    <a href="/documents/create" class="text-xs font-bold py-2 px-4 bg-[#45D4A4] text-white flex items-center space-x-2 rounded">
                        <img src="images/plus-solid.svg" class="w-3 h-3" alt="">
                        <p>New Document</p>
                    </a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm text-left border border-gray-200">
                        <thead class="bg-gray-100 text-gray-700">
                            <tr>
                                <th class="px-4 py-2 border">Date</th>
                                <th class="px-4 py-2 border">Series No. <br> ( Part No. )</th>
                                <th class="px-4 py-2 border">Model <br> ( Part Name )</th>
                                <th class="px-4 py-2 border">Control No.</th>
                                <th class="px-4 py-2 border">
                                    <div class="flex items-center justify-center">
                                        Status
                                    </div>
                                </th>
                                <th class="px-4 py-2 border text-center">More</th>
                            </tr>
                        </thead>

                        <tbody id="tbody">
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 border">2025-04-01</td>
                                <td class="px-4 py-2 border">00-0000</td>
                                <td class="px-4 py-2 border">LSP 1286-02</td>
                                <td class="px-4 py-2 border">00-0000</td>
                                <td class="px-4 py-2 border">
                                    <div class="flex items-center justify-center">
                                        <div class="px-2 text-xs font-semibold text-[#F9B908] bg-[#FFF5D6] rounded-lg">
                                            Pending
                                        </div>
                                    </div>
                                </td>

                                <td class="px-4 py-2 border">
                                    <div class="flex items-center justify-center">
                                        <div class="w-7 h-7 text-xs font-semibold bg-gray-200 rounded-[50%] flex items-center justify-center">
                                            <button class="see-more-btn">
                                                <img src="images/caret-down-solid.svg" class="h-4 w-4 caret-img" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class="hidden bg-gray-100">
                                <td colspan="6" class="p-3">
                                    <div class="w-full grid grid-cols-1 w-full space-y-2">
                                        <div class="grid grid-cols-2 w-full">
                                            <p class="font-semibold">Disposition:</p>
                                            <div class="flex justify-end">test</div>
                                        </div>

                                        <div class="grid grid-cols-2 w-full">
                                            <p class="font-semibold">Description:</p>
                                            <div class="flex justify-end">test</div>
                                        </div>

                                        <div class="grid grid-cols-2 w-full">
                                            <p class="font-semibold">Remarks:</p>
                                            <div class="flex justify-end">test</div>
                                        </div>

                                        <div class="grid grid-cols-2 w-full">
                                            <p class="font-semibold">Verified By:</p>
                                            <div class="flex justify-end">test</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 border">2025-04-01</td>
                                <td class="px-4 py-2 border">00-0000</td>
                                <td class="px-4 py-2 border">LSP 1286-02</td>
                                <td class="px-4 py-2 border">00-0000</td>
                                <td class="px-4 py-2 border">
                                    <div class="flex items-center justify-center">
                                        <div class="px-2 text-xs font-semibold text-[#2E9A6E] bg-[#B3EAD0] rounded-lg">
                                            Approved
                                        </div>
                                    </div>
                                </td>

                                <td class="px-4 py-2 border">
                                    <div class="flex items-center justify-center">
                                        <div class="w-7 h-7 text-xs font-semibold bg-gray-200 rounded-[50%] flex items-center justify-center">
                                            <button class="see-more-btn">
                                                <img src="images/caret-down-solid.svg" class="h-4 w-4 caret-img" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class="hidden bg-gray-100">
                                <td colspan="6" class="p-3">
                                    <div class="w-full grid grid-cols-1 w-full space-y-2">
                                        <div class="grid grid-cols-2 w-full">
                                            <p class="font-semibold">Disposition:</p>
                                            <div class="flex justify-end">test</div>
                                        </div>

                                        <div class="grid grid-cols-2 w-full">
                                            <p class="font-semibold">Description:</p>
                                            <div class="flex justify-end">test</div>
                                        </div>

                                        <div class="grid grid-cols-2 w-full">
                                            <p class="font-semibold">Remarks:</p>
                                            <div class="flex justify-end">test</div>
                                        </div>

                                        <div class="grid grid-cols-2 w-full">
                                            <p class="font-semibold">Verified By:</p>
                                            <div class="flex justify-end">test</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div id="pagination" class="flex items-center justify-between">
                    <div class="flex items-center justify-center text-sm">
                        <p class="text-xs">Showing 1 of 3 pages</p>
                    </div>

                    <div class="pagination flex space-x-2">
                        <a href="#" class="w-7 h-7 flex items-center justify-center bg-gray-100 text-[#393E46] text-lg rounded-lg hover:font-semibold">&#8249;</a>
                        <a href="#" class="w-7 h-7 flex items-center justify-center bg-gray-100 text-[#393E46] text-sm rounded-lg hover:font-semibold">1</a>
                        <a href="#" class="w-7 h-7 flex items-center justify-center bg-gray-100 text-[#393E46] text-sm rounded-lg hover:font-semibold">2</a>
                        <a href="#" class="w-7 h-7 flex items-center justify-center bg-gray-100 text-[#393E46] text-sm rounded-lg hover:font-semibold">3</a>
                        <a href="#" class="w-7 h-7 flex items-center justify-center bg-gray-100 text-[#393E46] text-sm rounded-lg hover:font-semibold">4</a>
                        <a href="#" class="w-7 h-7 flex items-center justify-center bg-gray-100 text-[#393E46] text-lg rounded-lg hover:font-semibold">&#8250;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require base_path('views/components/footer.php'); ?>