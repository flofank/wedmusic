<?php snippet('header') ?>

  <main class="main" role="main">

      <?php foreach($pages->visible() as $subpage): ?>
          <div class="text">
              <h1><?php echo $subpage->title()->html() ?></h1>
              <?php echo $subpage->text()->kirbytext() ?>
          </div>
      <?php endforeach ?>

      <?php snippet('subpages') ?>

      <?php snippet('musicians') ?>


  </main>

<?php snippet('footer') ?>