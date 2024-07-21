<!DOCTYPE html>
<html lang="en">
<?php require('partials/head.php') ?>
<body>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-10 flex items-center justify-start gap-x-6">
            <a href="/notes/create" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Note 📝</a>
        </div>

       <?php foreach ($notes as $note) : ?>
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900"><?php echo $note['body']; ?></h3>
<!--                <p class="mt-1 max-w-2xl text-sm text-gray-500">--><?php //echo $note['content']; ?><!--</p>-->
            </div>
            <div class="bg-gray-50 px-4 py-4 sm:px-6">
                <div class="text-sm">
                    <a href="/note?id=<?= $note['id'] ?>" class="font-medium text-indigo-600 hover:text-indigo-500">Read more</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

    </div>

</main>

</body>
</html>
