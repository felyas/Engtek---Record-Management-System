<!-- Sidebar -->
<nav class="w-16 h-screen bg-[#393E46] flex flex-col justify-between items-center fixed left-0 top-0">
    <div class="flex items-center justify-center py-4 px-2 space-x-2">
        <div class="bg-white rounded-[50%] p-1">
            <img src="/images/logo.png" class="w-4 h-4" alt="">
        </div>
    </div>
    <div class="space-y-6 h-full flex flex-col items-center justify-center">
        <a href="/dashboard" class="<?= urlIs('/dashboard') ? 'bg-gray-900' : '' ?> block rounded-md text-white p-1">
            <img src="/images/dashboard.svg" class="h-5 w-5" alt="">
        </a>
        <a href="/documents" class="<?= urlIs('/documents') ? 'bg-gray-900' : '' ?> block rounded-md text-white p-1">
            <img src="/images/list.svg" class="h-4 w-4" alt="">
        </a>
        <a href="/users" class="<?= urlIs('/users') ? 'bg-gray-900' : '' ?> block rounded-md text-white p-1">
            <img src="/images/user.svg" class="h-4 w-4" alt="">
        </a>
    </div>
    <div class="h-24 flex flex-col items-center justify-center">
        <form action="/logout">
            <button type="submit" class="block rounded-md  text-white cursor-pointer">
                <img src="/images/logout.svg" class="h-4 w-4" alt="">
            </button>
        </form>

    </div>
</nav>