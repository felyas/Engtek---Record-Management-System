<?php require base_path('views/components/header.php'); ?>
<?php require base_path('views/components/nav.php'); ?>

<main class="flex-1 p-4">
    <div class="grid grid-cols-2">
        <div class="p-12 flex flex-col items-start space-y-8">
            <h1 class="text-2xl font-bold">
                EDIT USER FORM
            </h1>
            <p class="text-md">Use this form to update details for a user. Accurate data helps maintain organized records and supports the purging and sorting process.</p>
            <p class="text-md">All required fields must be completed with valid information before submission.</p>
        </div>

        <div class="p-12 overflow-y-auto max-h-[calc(100vh-4rem)] flex items-center justify-center">
            <form id="add-new-user-form" action="/users/update" method="POST">
                <div class="flex flex-col space-y-8">

                    <div class="flex flex-col space-y-2">
                        <h1 class="font-semibold pb-2 text-lg">User's Information</h1>

                        <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">

                        <div class="grid grid-cols-2 gap-x-8">
                            <div class="flex flex-col space-y-1">
                                <label for="" class="text-sm text-gray-500">Name</label>
                                <input type="text" name="username" class="text-sm p-2 border border-[#393E46] text-[#393E46] rounded focus:outline-none" value="<?= $user['username'] ?>">
                                <?php if (isset($error['username'])) : ?>
                                    <p class="text-xs text-red-600"><?= $error['username'] ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="flex flex-col space-y-1">
                                <label for="" class="text-sm text-gray-500">ID No.</label>
                                <input type="text" name="id_number" class="text-sm p-2 border border-[#393E46] text-[#393E46] rounded focus:outline-none" value="<?= ($_POST['id_number'] ?? $user['id_number']) ?? '' ?>">
                                <?php if (isset($error['id_number'])) : ?>
                                    <p class="text-xs text-red-600"> <?= $error['id_number'] ?> </p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="grid grid-cols-1">
                            <div class="flex flex-col space-y-1">
                                <label for="" class="text-sm text-gray-500">Role</label>
                                <select name="role" class="text-sm p-2 border border-[#393E46] text-[#393E46] rounded focus:outline-none">
                                    <option class="text-sm" value="user" <?= $user['role'] === 'user' ? 'selected' : '' ?>>User</option>
                                    <option class="text-sm" value="admin" <?= $user['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
                                </select>
                                <!-- <input type="text" name="control_number" class="text-sm p-2 border border-[#393E46] text-[#393E46] rounded focus:outline-none"> -->
                                <?php if (isset($error['role'])) : ?>
                                    <p class="text-xs text-red-600"><?= $error['role'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-x-8">
                            <div class="flex flex-col space-y-1">
                                <label for="" class="text-sm text-gray-500">Password</label>
                                <div class="relative password-section">
                                    <input type="password" name="password" class="password-input text-sm p-2 pr-10 border  border-[#393E46] text-[#393E46] rounded focus:outline-none" value="<?= $_POST['password'] ?? '' ?>" placeholder="New password">
                                    <button type="button" class="absolute transform translate-y-1/2 right-2 show-password">
                                        <img src="/images/show-black.svg" class="w-5 h-5 show-password-img" alt="">
                                    </button>
                                </div>
                                <?php if (isset($error['password'])) : ?>
                                    <p class="text-xs text-red-600"><?= $error['password'] ?></p>
                                <?php endif; ?>

                            </div>
                            <div class="flex flex-col space-y-1">
                                <label for="" class="text-sm text-gray-500">Confirm Password</label>
                                <div class="relative password-section">
                                    <input type="password" name="confirm_password" class="password-input text-sm p-2 pr-10 border border-[#393E46] text-[#393E46] rounded focus:outline-none" value="<?= $_POST['confirm_password'] ?? '' ?>" placeholder="Confirm password">
                                    <button type="button" class="absolute transform translate-y-1/2 right-2 show-password">
                                        <img src="/images/show-black.svg" class="w-5 h-5 show-password-img" alt="">
                                    </button>
                                </div>
                                <?php if (isset($error['confirm_password'])) : ?>
                                    <p class="text-xs text-red-600"><?= $error['confirm_password'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-center w-full">
                        <button type="submit" class="p-2 w-full bg-gray-600 hover:bg-[#45D4A4] text-white flex items-center justify-center rounded cursor-pointer transition">Save</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

</main>

<?php require base_path('views/components/footer.php'); ?>