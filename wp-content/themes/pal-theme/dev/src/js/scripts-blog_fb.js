//= partials/popup.js

document.querySelector('.nav-btn').onclick = e => {
  document.querySelector('.nav-top').classList.toggle('nav-top-hide');
}

document.addEventListener("DOMContentLoaded", () => {
  setTimeout(()=>{
    document.querySelector('.btn-video').classList.add('btn-video-show');
  }, 10000);
});