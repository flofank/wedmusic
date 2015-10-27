<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

      <ul>
      <?php foreach($page->documents() as $document): ?>
          <li>
              <a href="<?php echo $document->url()?>" target="_blank"><?php echo $document->caption()?></a>
          </li>
      <?php endforeach ?>
      </ul>

  </main>

<?php snippet('footer') ?>