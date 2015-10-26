<div class="audio-player">
    <audio controls id="myAudio">
        <source src="<?php echo $source ?>" type="<?php echo $mime ?>">
        Your browser does not support the audio element.
    </audio>
    <div class="audio-player-element spacer-after">
        <i class="fa fa-play"></i>
        <i class="fa fa-pause" style="display: none"></i>
    </div>
    <div class="audio-player-element">
        <i class="played">00:00</i>
    </div>
    <div class="audio-player-element audio-player-progress">
        <i class="audio-player-progress-played">&nbsp;&nbsp;<?php echo $title?></i>
    </div>
    <div class="audio-player-element spacer-after">
        <i class="duration">00:00</i>
    </div>
    <div class="audio-player-element">
        <i class="fa fa-volume-down"></i>
    </div>
    <div class="audio-player-element audio-player-volume">
        <i class="audio-player-volume-set">&nbsp;</i>
    </div>
    <div class="audio-player-element">
        <i class="fa fa-volume-up"></i>
    </div>
</div>