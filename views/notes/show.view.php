<?php require base_path('views/partials/head.php'); ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p>Note</p>

    <p><?= htmlspecialchars($note['body']) ?></p>

    <div class="mt-6">
      <a href="/note/edit?id=<?= $note['id'] ?>" class="text-green-500">Edit</a>
    </div>
    <!-- <form class="mt-2" method="POST">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="id" value="<?= $note['id'] ?>">
      <button type="submit" class="text-red-500">Delete</button>
    </form> -->
  </div>
</main>

<?php require base_path("views/partials/footer.php"); ?>