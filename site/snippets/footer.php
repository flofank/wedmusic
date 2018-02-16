<footer class="footer cf" role="contentinfo">
    <a href="#Willkommen">
        <i class="fa fa-chevron-up fa-2x"></i>
    </a>
    <p>
        <?php echo $site->copyright()->kirbytext() ?>
        <span class="small">Powered by Kirby</span>
    </p>
</footer>

<div id="piano-loader">
  <div id="piano-loader_container">
    <h1>Einen Moment bitte ...</h1>
    <canvas id="piano-loader_piano" width="52" height="65">Beispiel für eine Animation mit Canvas.</canvas>
  </div>
</div>

</body>

<?php echo js('assets/js/jquery-2.1.4.min.js') ?>
<?php echo js('assets/js/audio-player.js') ?>
<?php echo js('assets/js/smooth-scroll.js') ?>
<?php echo js('assets/js/parallax.js') ?>
<?php echo js('assets/js/piano-loader.js') ?>
</html>