$(document).ready(function () {
    var audio = document.getElementById("myAudio");
    var toggleBtn = $(".toggle-btn");

    toggleBtn.click(function () {
        if (audio.paused) {
            audio.play();
            toggleBtn.html("&#10074;&#10074;"); // Mengubah ikon menjadi pause
        } else {
            audio.pause();
            audio.currentTime = 0;
            toggleBtn.html("&#9658;"); // Mengubah ikon menjadi play
        }
    });
});
