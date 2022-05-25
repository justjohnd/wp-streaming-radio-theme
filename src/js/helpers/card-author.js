const image = document.querySelector(".image");
const circle = document.querySelector(".circle");
const container = document.querySelector(".container");
const textBox = document.querySelector(".text-box");

if (image === null) {
  textBox.classList.remove("js-text-box-img");
  container.classList.remove("js-con-img");
  circle.classList.add("js-circle-no-img");
}
