const moreBtn = document.querySelector(".more-btn");
const hamburger = document.querySelector(".hamburger");
const moreBtnText = document.querySelector(".more-btn-text");
const moreWrapper = document.querySelector(".more-wrapper");
const menuItems = document.querySelectorAll(".menu-item");
const mobileOverlay = document.querySelector(".mobile-overlay");
const moreList = document.querySelector(".more-list");
const moreListWrapper = document.querySelector(".more-list-wrapper");
const streamBtn = document.querySelector(".stream-btn");
const streamBtnStream = document.querySelector(".stream-btn-stream");
const streamBtnBack = document.querySelector(".stream-btn-back");
const subMenuOverlay = document.querySelector(".sub-menu-overlay");
const moreListItems = document.querySelectorAll(".more-list-item");
const streamingWrapper = document.querySelector(".streaming-wrapper");
const playerBtn = document.querySelector(".player-btn");
const containerRadioPlayer = document.querySelector(".container-radio-player");
const footerSocials = document.querySelector(".footer-socials");
const playerBtnMin = document.querySelector(".player-btn-min");

function toggleDisplay(nameOfClass) {
      if (nameOfClass.classList.contains("d-none")) {
        nameOfClass.classList.remove("d-none");
      } else {
        nameOfClass.classList.add("d-none");
      }
}

//Animate hamburger, reveal mobile overlay, and mobile menu
moreBtn.addEventListener("click", () => {
  hamburger.classList.toggle("toggle");
  moreWrapper.classList.toggle("toggle");
  moreListWrapper.classList.toggle("toggle");
  mobileOverlay.classList.toggle("toggle");
  moreList.classList.toggle("toggle");

  //Hide More button text on click
  if (moreBtnText.classList.contains("d-inline-block")) {
    moreBtnText.classList.replace("d-inline-block", "d-none");
  } else {
    moreBtnText.classList.replace("d-none", "d-inline-block");
  }

  if (subMenuOverlay.classList.contains("toggle")) {
    subMenuOverlay.classList.toggle("toggle");
  }
});

//Trigger Streaming submenu
streamBtn.addEventListener("click", () => {
  subMenuOverlay.classList.toggle("toggle");
  moreListItems.forEach((moreListItem) => {
    toggleDisplay(moreListItem);
  });

  toggleDisplay(streamBtnStream);
  toggleDisplay(streamBtnBack);

  menuItems.forEach((menuItem) => {
    if (menuItem.classList.contains("d-none", "d-lg-flex")) {
      menuItem.classList.remove("d-none", "d-lg-flex");
    } else {
      menuItem.classList.add("d-none", "d-lg-flex");
    }
  });

  streamingWrapper.classList.toggle("toggle");
});

//Radio player sticky button
playerBtn.addEventListener("click", () => {
  containerRadioPlayer.classList.remove("d-none");
  footerSocials.classList.replace("d-none", "d-flex");
  playerBtn.classList.replace("d-flex", "d-none");
});

playerBtnMin.addEventListener("click", () => {
  containerRadioPlayer.classList.add("d-none");
  footerSocials.classList.replace("d-flex", "d-none");
  playerBtn.classList.replace("d-none", "d-flex");
});
