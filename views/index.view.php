<?php require base_path('views/components/header.php'); ?>
<?php require base_path('views/components/nav.php'); ?>

<main class="flex-1 p-4">
    <div class="max-w-7xl mx-auto space-y-4">

        <!-- Summary Cards -->
        <div class="gap-x-8">
            <div class="grid grid-cols-3 gap-x-8 justify-center rounded-md h-24">
                <div class="bg-white flex items-center p-4">
                    <div class="flex flex-col flex-2">
                        <div class="flex space-x-2 items-center">
                            <div class="flex items-center space-x-2">
                                <div class="p-1 w-2 h-2 rounded-[50%] bg-[#F9B908]"></div>
                                <p class="text-xs">Total no. of pending documents</p>
                            </div>
                        </div>
                        <p class="text-2xl font-semibold px-4">12</p>
                    </div>
                    <div class="flex items-center justify-center flex-1">
                        <div class="relative pl-4">
                            <img src="images/file-regular.svg" class="w-8 h-8" alt="">
                            <img src="images/clock-solid.svg" class="w-4 h-4 absolute -bottom-1 -right-1" alt="">
                        </div>
                    </div>
                </div>
                <div class="bg-white flex items-center p-4">
                    <div class="flex flex-col flex-2">
                        <div class="flex space-x-2 items-center">
                            <div class="flex items-center space-x-2">
                                <div class="p-1 w-2 h-2 rounded-[50%] bg-[#2E9A6E]"></div>
                                <p class="text-xs">Total no. of documents</p>
                            </div>
                        </div>
                        <p class="text-2xl font-semibold px-4">12</p>
                    </div>
                    <div class="flex items-center justify-center flex-1">
                        <div class="pl-4">
                            <img src="images/folder-open-regular.svg" class="w-8 h-8" alt="">
                        </div>
                    </div>
                </div>
                <div class="bg-white flex items-center p-4">
                    <div class="flex flex-col flex-2">
                        <div class="flex space-x-2 items-center">
                            <div class="flex items-center space-x-2">
                                <div class="p-1 w-2 h-2 rounded-[50%] bg-[#2E609A]"></div>
                                <p class="text-xs">Total no. of Users</p>
                            </div>
                        </div>
                        <p class="text-2xl font-semibold px-4">12</p>
                    </div>
                    <div class="flex items-center justify-center flex-1">
                        <div class="pl-4">
                            <img src="images/users-solid.svg" class="w-8 h-8" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashboard Illustaton and Pie Chart -->
        <div class="grid grid-cols-6 gap-x-8">
            <div class="col-span-4 flex items-center h-auto bg-white">
                <div class="flex flex-col flex-1 items-start space-y-2 p-8">
                    <h1 class="text-3xl font-bold">Record Management</h1>
                    <p class="text-4xl font-bold text-[#45D4A4] pb-8">Dashboard</p>
                    <hr class="w-full">
                    <p class="text-sm">Secure and Simplify Records!</p>
                </div>
                <div class="flex items-center justify-center flex-1">
                    <img src="images/dashboard-illustration.svg" class="w-60 h-60" alt="">
                </div>
            </div>
            <div class="col-span-2 flex items-center justify-center bg-white">
                <div>Pie chart</div>
            </div>
        </div>

        <!-- Dashboard Illustaton and Line Chart -->
        <div class="grid grid-cols-6 gap-x-8">
            <div class="col-span-4 flex flex-col h-auto bg-white p-4 space-y-4">
                <div class="flex items-center justify-between">
                    <p class="text-lg font-semibold">Latest Documents</p>
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
                                <th class="px-4 py-2 border">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 border">2025-04-01</td>
                                <td class="px-4 py-2 border">00-0000</td>
                                <td class="px-4 py-2 border">LSP 1286-02</td>
                                <td class="px-4 py-2 border">00-0000</td>
                                <td class="px-4 py-2 border">
                                    <div class="flex items-center">
                                        <div class="px-2 text-xs font-semibold text-[#F9B908] bg-[#FFF5D6] rounded-lg">
                                            Pending
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 border">2025-03-28</td>
                                <td class="px-4 py-2 border">00-0000</td>
                                <td class="px-4 py-2 border">LBH 0359-05</td>
                                <td class="px-4 py-2 border">00-0000</td>
                                <td class="px-4 py-2 border">
                                    <div class="flex items-center">
                                        <div class="px-2 text-xs font-semibold text-[#2E9A6E] bg-[#B3EAD0] rounded-lg">
                                            Approved
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 border">2025-03-25</td>
                                <td class="px-4 py-2 border">00-0000</td>
                                <td class="px-4 py-2 border">B.HOUSING</td>
                                <td class="px-4 py-2 border">00-0000</td>
                                <td class="px-4 py-2 border">
                                    <div class="flex items-center">
                                        <div class="px-2 text-xs font-semibold text-[#2E9A6E] bg-[#B3EAD0] rounded-lg">
                                            Approved
                                        </div>
                                    </div>
                                </td>

                                <!-- Action Buttons -->
                                <!-- <td class="px-4 py-2 border min-w-24">
                                    <div class="flex items-center space-x-2">
                                        <a href="" class="rounded-lg p-2 bg-[#D44545]">
                                            <img src="/images/xmark-solid.svg" class="w-4 h-4" alt="">
                                        </a>

                                        <a href="" class="rounded-lg p-2 bg-[#2E9A6E]">
                                            <img src="/images/edit-solid.svg" class="w-4 h-4" alt="">
                                        </a>

                                        <a href="" class="rounded-lg p-2 bg-[#2E609A]">
                                            <img src="/images/download-solid.svg" class="w-4 h-4" alt="">
                                        </a>

                                    </div>
                                </td> -->
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-span-2 flex items-center justify-center bg-white">
                <div>Line chart</div>
            </div>
        </div>
    </div>
</main>

<?php require base_path('views/components/footer.php'); ?>