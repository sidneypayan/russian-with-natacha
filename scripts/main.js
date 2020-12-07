const musicContainer = document.querySelector("#music-container");
const playBtn = document.querySelector("#play");
const prevBtn = document.querySelector("#prev");
const nextBtn = document.querySelector("#next");

const audio = document.querySelector("#audio");
const progress = document.querySelector("#progress");
const progressContainer = document.querySelector("#progress-container");
const title = document.querySelector("#title");
const cover = document.querySelector("#cover");

// Play song
function playSong() {
  musicContainer.classList.add("play");
  playBtn.querySelector("i.fas").classList.remove("fa-play");
  playBtn.querySelector("i.fas").classList.add("fa-pause");

  audio.play();
}

function pauseSong() {
  musicContainer.classList.remove("play");
  playBtn.querySelector("i.fas").classList.remove("fa-pause");
  playBtn.querySelector("i.fas").classList.add("fa-play");

  audio.pause();
}

// Update progress bar
function updateProgress(e) {
  const { duration, currentTime } = e.srcElement;
  const progressPercent = (currentTime / duration) * 100;
  progress.style.width = `${progressPercent}%`;
}

// Set progress bar
function setProgress(e) {
  const width = this.clientWidth;
  const clickX = e.offsetX;
  const duration = audio.duration;

  audio.currentTime = (clickX / width) * duration;
}

// Event listeners
playBtn.addEventListener("click", () => {
  const isPlaying = musicContainer.classList.contains("play");

  if (isPlaying) {
    pauseSong();
  } else {
    playSong();
  }
});

prevBtn.addEventListener("click", () => {
  audio.currentTime -= 5;
});

nextBtn.addEventListener("click", () => {
  audio.currentTime += 5;
});

// Time/song update
audio.addEventListener("timeupdate", updateProgress);

// Lick on progress bar
progressContainer.addEventListener("click", setProgress);

// Song ends
audio.addEventListener("ended", pauseSong);
