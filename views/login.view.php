<?php require base_path('views/components/header.php'); ?>

<main class="flex-1 p-4 relavite">
    <div class="absolute inset-0 bg-[url('/images/glass-2.jpg')] bg-cover bg-center opacity-40 z-0"></div>
    <section class="min-h-[calc(100vh-2rem)] flex items-center justify-center relative z-10">
        <div class="bg-white h-auto w-1/3 shadow-lg flex items-center justify-center p-8">
            <form class="w-full flex flex-col justify-center space-y-4" action="" method="POST">
                <div class="flex items-center justify-center">
                    <p class="text-xl font-bold">Login</p>
                </div>

                <div class="grid grid-cols-1 gap-y-4">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center p-2 h-full w-10 border border-[#393E46] border-r-0">
                            <img src="/images/user-solid.svg" class="w-4 h-4" alt="">
                        </div>
                        <input type="text" name="id_number" class="flex-1 p-2 border border-[#393E46] focus:outline-none" placeholder="ID Number" value="<?= $_POST['id_number'] ?? '' ?>">
                    </div>

                    <div class="flex items-center relative">
                        <div class="flex items-center justify-center p-2 h-full w-10 border border-[#393E46] border-r-0">
                            <img src="/images/lock-solid.svg" class="w-4 h-4" alt="">
                        </div>
                        <input type="password" id="password-input" name="password" class="flex-1 p-2 pr-8 border border-[#393E46] focus:outline-none" placeholder="password" value="<?= $_POST['password'] ?? '' ?>">
                        <button type="button" id="show-password-button" class="absolute top-0 right-2 transform translate-y-1/2">
                            <img id="show-hide-img" src="/images/hide-black.svg" class="w-5 h-5 flex items-center justify-center" alt="">
                        </button>
                    </div>
                </div>

                <?php if (isset($errors['error'])) : ?>
                    <div class="text-red-600 text-xs">
                        <p><?= $errors['error'] ?></p>
                    </div>
                <?php endif; ?>

                <div class="grid grid-cols-1 gap-y-2">
                    <input type="submit" class="py-2 px-4 text-white bg-[#45D4A4] cursor-pointer">
                </div>
            </form>
        </div>
    </section>
</main>

<?php require base_path('views/components/footer.php'); ?>