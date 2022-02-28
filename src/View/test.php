<main>
  idx: <?= $idx ?>
  <?php
    if ($user) {
  ?>
    email: <?= $user->email ?>
  <?php } else { ?>
    404
  <?php } ?>
</main>