<!DOCTYPE html>
<html lang="en">
<?php require base_path('views/partials/head.php') ?>
<body>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <div class="bg-gray-50 px-4 py-4 sm:px-6">
            <div class="text-sm">
                <a href="/notes" class="font-medium text-indigo-600 hover:text-indigo-500">👈 Go Back</a>
            </div>
        </div>


        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:px-6 flex justify-between">

                <h3 class="text-lg font-medium leading-6 text-gray-900"><span class="text-2xl"> 📝</span> <?php echo $note['body']; ?></h3>

                <form action="" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="<?= $note['id']; ?>">
                    <button class="text-sm hover:bg-red-500 hover:text-white rounded text-red-800 p-2 bg-red-200">🗑️  <span class="ml-1">Delete</span></button>
                </form>
            </div>
        </div>
    </div>
</main>

</body>
</html>
