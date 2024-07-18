<!DOCTYPE html>
<html lang="en">
<?php require('partials/head.php') ?>
<body>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <div class="bg-gray-50 px-4 py-4 sm:px-6">
            <div class="text-sm">
                <a href="/notes" class="font-medium text-indigo-600 hover:text-indigo-500">👈 Go Back</a>
            </div>
        </div>


        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:px-6">

                <h3 class="text-lg font-medium leading-6 text-gray-900"><span class="text-2xl"> 📝</span> <?php echo $note['body']; ?></h3>
            </div>
        </div>
    </div>
</main>

</body>
</html>
