<!DOCTYPE html>
<html lang="en">
<?php require base_path('views/partials/head.php') ?>
<body>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" method="POST">
                <div>
                    <label for="text" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                    <div class="mt-2">
                        <input id="text" value="<?= $_POST['title'] ?? '' ?>" name="title" placeholder="what do you wanna take a note on?" type="text" autocomplete="text"  class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                    </div>
                    <div class="mt-2">
                        <textarea id="body" name="body" placeholder="share more insights" rows="8" autocomplete="current-password"  class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= $_POST['body'] ?? '' ?></textarea>
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
                </div>
            </form>
        </div>
            <?php if(isset($error['body']) && isset($error['title'])) : ?>
                <div class="mt-10 flex flex-col space-y-2 sm:mx-auto sm:w-full sm:max-w-sm">
                    <div class="bg-red-100  p-3 rounded-lg text-red-500 text-sm font-semibold"><?php echo $error['title']; ?></div>
                    <div class="bg-red-100  p-3 rounded-lg text-red-500 text-sm font-semibold"><?php echo $error['body']; ?></div>
                </div>
            <?php endif; ?>
<!--                <div class="mt-10 flex flex-col space-y-2 sm:mx-auto sm:w-full sm:max-w-sm">-->
<!--                     <div class="bg-green-100 p-3 rounded-lg text-green-500 text-sm font-semibold">🎉Note Added🎉 👍 ✅ </div>-->
<!--                 <div class="mt-10 flex flex-col space-y-2 sm:mx-auto sm:w-full sm:max-w-sm">-->
    </div>

</main>

</body>
</html>
