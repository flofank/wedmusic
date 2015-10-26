/**
 * Created by flofa_000 on 26.10.2015.
 */
var activePlayer;
function playSong(player) {
    if (activePlayer) {
        pauseSong();
    }
    activePlayer = player;
    $(activePlayer).find("audio")[0].play();
    $(activePlayer).find(".fa-pause").show();
    $(activePlayer).find(".fa-play").hide();
    refreshActivePlayer();
}
function pauseSong() {
    $(activePlayer).find("audio")[0].pause();
    $(activePlayer).find(".fa-play").show();
    $(activePlayer).find(".fa-pause").hide();
    activePlayer = undefined;
}
function refreshPlayer(player) {
    var duration = $(player).find("audio")[0].duration;
    var played = $(player).find("audio")[0].currentTime;
    var percentPlayed = played / duration * 100;
    var volume = $(player).find("audio")[0].volume * 100;
    $(player).find(".played").html(formatSeconds(played));
    $(player).find(".duration").html(formatSeconds(duration));
    $(player).find(".audio-player-progress-played").css("width", percentPlayed + "%");
    $(player).find(".audio-player-volume-set").css("width", volume + "%");
}
function refreshActivePlayer() {
    if (activePlayer) {
        refreshPlayer(activePlayer);
        setTimeout(refreshActivePlayer, 500);
    }
}
function setPlayerPosition(player, percentage) {
    var duration = $(player).find("audio")[0].duration;
    var newPos = duration * percentage;
    $(player).find("audio")[0].currentTime = newPos;
    refreshPlayer(player);
}
function setPlayerVolume(player, percentage) {
    $(player).find("audio")[0].volume = percentage;
    refreshPlayer(player);
}
function changePlayerVolume(player, diff) {
    var newVolume = $(player).find("audio")[0].volume + diff;
    newVolume = newVolume < 0 ? 0 : newVolume > 1 ? 1 : newVolume;
    $(player).find("audio")[0].volume = newVolume;
    refreshPlayer(player);
}
function formatSeconds(seconds) {
    console.log(seconds);
    var date = new Date(1970,0,1);
    date.setSeconds(seconds);
    return date.toTimeString().replace(/.*(\d{2}:\d{2}).*/, "$1")
}
$(function() {
    $(".audio-player i.fa-play").click(function() {
        playSong($(this).closest(".audio-player"));
    });
    $(".audio-player i.fa-pause").click(function() {
        pauseSong();
    });
    $(".audio-player i.fa-volume-down").click(function() {
        changePlayerVolume($(this).closest(".audio-player"), -0.1);
    });
    $(".audio-player i.fa-volume-up").click(function() {
        changePlayerVolume($(this).closest(".audio-player"), 0.1);
    });
    $(".audio-player .audio-player-progress").click(function(event) {
        setPlayerPosition($(this).closest(".audio-player"), (event.pageX - $(this).position().left) / $(this).width());
    });
    $(".audio-player .audio-player-volume").click(function(event) {
        setPlayerVolume($(this).closest(".audio-player"), (event.pageX - $(this).position().left) / $(this).width());
    });
    setTimeout(function() { // for some reason the duration is not set at the very beginning
        $(".audio-player").each(function() {refreshPlayer(this);});
    }, 500);
});