<h2>Latest projects</h2>

<ul class="teaser cf">
  <?php foreach(page('musicians')->children()->visible()->limit(3) as $musician): ?>
  <li>
    <h3><a href="<?php echo $musician->url() ?>"><?php echo $musician->title()->html() ?></a></h3>
    <p><?php echo $musician->text()->excerpt(80) ?> <a href="<?php echo $musician->url() ?>">read&nbsp;more&nbsp;→</a></p>
    <?php if($image = $musician->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $musician->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $musician->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
