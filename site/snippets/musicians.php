<section class="text" id="Musiker" style="text-align: left">
    <h1>Musiker</h1>

    <div class="content">
        <div class="float_container">
            <?php foreach (page('musicians')->children()->visible()->limit(10) as $musician): ?>
                <!-- Musician start -->
                <div class="musician">
                    <span>
                        <h3><?php echo $musician->title()->html() ?></h3>
                        <?php echo $musician->text(); ?>
                        <!-- Demos -->
                        <?php foreach($musician->audio() as $audio): ?>
                            <?php snippet('audio', array('source' => $audio->url(), 'mime' => $audio->mime(), 'title' => explode(".", $audio->filename())[0])) ?>
                        <?php endforeach ?>
                    </span>
                    <?php if ($image = $musician->images()->sortBy('sort', 'asc')->first()): ?>
                        <img src="<?php echo $image->url() ?>">
                    <?php endif ?>
                </div>
                <!-- Musician end -->
            <?php endforeach ?>
        </div>
    </div>
</section>
