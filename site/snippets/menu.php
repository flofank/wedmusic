<div class="menu" id="languages" role="navigation">
  <ul>
      <?php foreach($site->languages() as $language): ?>
        <li<?php e($site->language() == $language, ' class="active"') ?>>
          <a id="lang_<?php echo $language->code()?>" href="<?php echo $language->url() ?>" alt="<?php echo html($language->name()) ?>">
          </a>
        </li>
      <?php endforeach ?>
  </ul>
</div>
<div class="menu" role="navigation">
  <ul>
    <?php foreach($pages->visible() as $p) {
        if (!($p->intendedTemplate() == 'spacer'))  {
    ?>
      <li <?php e($p->isOpen(), ' class="active"') ?>>
        <a href="#<?php echo $p->title() ?>"><?php echo $p->title()->html() ?></a>
      </li>
    <?php
        }
    }
    ?>
  </ul>
</div>
