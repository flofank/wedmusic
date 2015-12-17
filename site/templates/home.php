<?php snippet('header') ?>

  <main class="main" role="main">

      <?php foreach($pages->visible() as $subpage) {
          if (($subpage->intendedTemplate() == 'spacer')) {
              ?>(
              <div class="image_spacer">
                  <?php foreach ($subpage->images() as $image): ?>
                      <img src="<?php echo $image->url() ?>" alt="">
                  <?php endforeach ?>
              </div>
          <?php
          } else if ($subpage->intendedTemplate() == 'musicians') {
              snippet('musicians');
          } else {
              ?>
              <section class="text" id="<?php echo $subpage->title() ?>">
                  <h1><?php echo $subpage->title()->html() ?></h1>

                  <div class="content">
                      <?php echo $subpage->text()->kirbytext() ?>
                      <ul class="link-list">
                          <?php foreach ($subpage->documents() as $document): ?>
                              <li>
                                  <a href="<?php echo $document->url() ?>"
                                     target="_blank"><?php echo $document->caption() ?></a>
                              </li>
                          <?php endforeach ?>
                      </ul>
                  </div>
              </section>
          <?php
          }
      }
      ?>

  </main>

<?php snippet('footer') ?>