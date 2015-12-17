<header role="navigation">

  <div id="nav">
    <?php foreach($pages->visible() as $p) {
        if (!($p->intendedTemplate() == 'spacer'))  {
    ?>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="#<?php echo $p->title() ?>"><?php echo $p->title()->html() ?></a>
    <?php
        }
    }
    ?>
  </div>

</header>
