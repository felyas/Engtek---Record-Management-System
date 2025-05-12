<?php require base_path('views/components/header.php'); ?>
<?php require base_path('views/components/nav.php'); ?>

<main class="flex-1 p-4">
    <div class="grid grid-cols-2">
        <div class="p-12 flex flex-col items-start space-y-8">
            <h1 class="text-2xl font-bold">
               UPDATE PURGING AND SORTING FORM
                <span class="text-sm font-normal"> is the first step in recording important information related to purging and sorting.</span>
            </h1>
            <p class="text-md">Make sure to fill in all the required fields with valid data before submitting the form.</p>

        </div>

        <div class="p-12 overflow-y-auto max-h-[calc(100vh-4rem)]">
            <form id="test-form" action="" method="POST">
                <div class="flex flex-col space-y-8">

                    <div class="flex flex-col space-y-2">
                        <h1 class="font-semibold pb-2 text-lg">Details</h1>
                        <div class="grid grid-cols-2 gap-x-8">
                            <div class="flex flex-col space-y-1">
                                <label for="" class="text-sm text-gray-500">Name ( Production )</label>
                                <input type="text" name="name_production" class="text-sm py-2 px-4 border border-[#393E46] text-[#393E46] rounded focus:outline-none">
                            </div>
                            <div class="flex flex-col space-y-1">
                                <label for="" class="text-sm text-gray-500">Name ( IPQC )</label>
                                <input type="text" name="name_ipqc" class="text-sm py-2 px-4 border border-[#393E46] text-[#393E46] rounded focus:outline-none">
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-x-8">
                            <div class="flex flex-col space-y-1">
                                <label for="" class="text-sm text-gray-500">Control Number</label>
                                <input type="text" name="control_number" class="text-sm py-2 px-4 border border-[#393E46] text-[#393E46] rounded focus:outline-none">
                            </div>
                            <div class="flex flex-col space-y-1">
                                <label for="" class="text-sm text-gray-500">Current Time</label>
                                <input type="text" name="current_time" class="text-sm py-2 px-4 border border-[#393E46] text-[#393E46] rounded focus:outline-none">
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-x-8">
                            <div class="flex flex-col space-y-1">
                                <label for="" class="text-sm text-gray-500">Part Name</label>
                                <input type="text" name="part_name" class="text-sm py-2 px-4 border border-[#393E46] text-[#393E46] rounded focus:outline-none">
                            </div>
                            <div class="flex flex-col space-y-1">
                                <label for="" class="text-sm text-gray-500">Part Number</label>
                                <input type="text" name="part_number" class="text-sm py-2 px-4 border border-[#393E46] text-[#393E46] rounded focus:outline-none">
                            </div>
                        </div>

                        <div class="grid grid-cols-1">
                            <div class="flex flex-col space-y-1">
                                <label for="" class="text-sm text-gray-500">Customer ( Supplier Name )</label>
                                <input type="text" name="customer_name" class="text-sm py-2 px-4 border border-[#393E46] text-[#393E46] rounded focus:outline-none">
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col space-y-2">
                        <h1 class="font-semibold pb-2 text-lg">Problem / Defects</h1>
                        <div class="grid grid-cols-2 gap-x-8">

                            <div class="flex flex-col space-y-1">
                                <h3 class="font-semibold pb-2 text-sm text-gray-500">Category</h3>

                                <div class="grid grid-cols-1 w-full gap-4">
                                    <label class="flex items-center space-x-4 cursor-pointer">
                                        <input type="radio" name="category" value="dimension" class="p-2 accent-[#393E46] cursor-pointer peer">
                                        <div class="py-1 px-4 flex items-center justify-center border border-[#393E46] text-[#393E46] w-full rounded peer-checked:bg-[#393E46] peer-checked:text-white">
                                            Dimension
                                        </div>
                                    </label>

                                    <label class="flex items-center space-x-4 cursor-pointer">
                                        <input type="radio" name="category" value="visual" class="p-2 accent-[#393E46] cursor-pointer peer">
                                        <div class="py-1 px-4 flex items-center justify-center border border-[#393E46] text-[#393E46] w-full rounded peer-checked:bg-[#393E46] peer-checked:text-white">
                                            Visual
                                        </div>
                                    </label>

                                    <label class="flex items-center space-x-4 cursor-pointer">
                                        <input type="radio" name="category" value="functional" class="p-2 accent-[#393E46] cursor-pointer peer">
                                        <div class="py-1 px-4 flex items-center justify-center border border-[#393E46] text-[#393E46] w-full rounded peer-checked:bg-[#393E46] peer-checked:text-white">
                                            Functional
                                        </div>
                                    </label>


                                </div>

                            </div>

                            <div class="flex flex-col space-y-1">
                                <h3 class="font-semibold pb-2 text-sm text-gray-500">Submission</h3>

                                <div class="grid grid-cols-1 w-full gap-4">
                                    <label class="flex items-center space-x-4 cursor-pointer">
                                        <input type="radio" name="submission" value="sub-1" class="p-2 accent-[#393E46] cursor-pointer peer">
                                        <div class="py-1 px-4 flex items-center justify-center border border-[#393E46] text-[#393E46] w-full rounded peer-checked:bg-[#393E46] peer-checked:text-white">
                                            1st Sub
                                        </div>
                                    </label>

                                    <label class="flex items-center space-x-4 cursor-pointer">
                                        <input type="radio" name="submission" value="sub-2" class="p-2 accent-[#393E46] cursor-pointer peer">
                                        <div class="py-1 px-4 flex items-center justify-center border border-[#393E46] text-[#393E46] w-full rounded peer-checked:bg-[#393E46] peer-checked:text-white">
                                            2nd Sub
                                        </div>
                                    </label>

                                    <label class="flex items-center space-x-4 cursor-pointer">
                                        <input type="radio" name="submission" value="sub-3" class="p-2 accent-[#393E46] cursor-pointer peer">
                                        <div class="py-1 px-4 flex items-center justify-center border border-[#393E46] text-[#393E46] w-full rounded peer-checked:bg-[#393E46] peer-checked:text-white">
                                            3rd Sub
                                        </div>
                                    </label>


                                </div>

                            </div>
                        </div>

                        <div class="grid grid-cols-1">
                            <div class="flex flex-col space-y-1">
                                <label for="" class="text-sm text-gray-500">Remarks</label>
                                <input type="text" name="remarks" class="text-sm py-2 px-4 border border-[#393E46] text-[#393E46] rounded focus:outline-none">
                            </div>
                        </div>
                    </div>

                    <div id="risk-assessment-group" class="flex flex-col space-y-2">
                        <div class="flex items-center justify-between">
                            <h1 class="font-semibold pb-2 text-lg">Risk Assessment</h1>
                            <button id="add-new-row-risk-assessment" type="button" class="h-8 w-8 p-2 bg-gray-600 hover:bg-[#393E46] text-white flex items-center justify-center rounded">+</button>
                        </div>

                        <div class="grid grid-cols-2">
                            <h3 class="text-sm font-semibold pb-2 text-gray-500">Affected Lot Number</h3>
                            <h3 class="text-sm font-semibold pb-2 flex items-center justify-center text-gray-500">Area</h3>
                        </div>

                        <div class="grid grid-cols-5 gap-x-8 gap-y-2">
                            <div class="col-span-3 flex flex-col space-y-1">
                                <div class="grid grid-cols-1 w-full gap-4">
                                    <input type="text" name="risk-assessment-affected-1" class="text-sm py-2 px-4 border border-[#393E46] text-[#393E46] rounded focus:outline-none">
                                </div>
                            </div>

                            <div class="col-span-2 flex flex-col space-y-1">
                                <div class="flex items-center justify-center h-full">
                                    <div class="grid grid-cols-2 w-full gap-4">
                                        <label class="flex items-center space-x-4 cursor-pointer">
                                            <input type="radio" name="risk-assessment-area-1" value="a" class="p-2 accent-[#393E46] cursor-pointer peer">
                                            <div class="py-1 px-4 text-xs flex items-center justify-center border border-[#393E46] text-[#393E46] w-full rounded peer-checked:bg-[#393E46] peer-checked:text-white">
                                                A
                                            </div>
                                        </label>

                                        <label class="flex items-center space-x-4 cursor-pointer">
                                            <input type="radio" name="risk-assessment-area-1" value="b" class="p-2 accent-[#393E46] cursor-pointer peer">
                                            <div class="py-1 px-4 text-xs flex items-center justify-center border border-[#393E46] text-[#393E46] w-full rounded peer-checked:bg-[#393E46] peer-checked:text-white">
                                                B
                                            </div>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-center w-full">
                        <button id="dummy-submit" type="button" class="p-2 w-full bg-gray-600 hover:bg-[#45D4A4] text-white flex items-center justify-center rounded">Create</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</main>

<?php require base_path('views/components/footer.php'); ?>