function onScrollLeft() {
  let parentElement = document.getElementById('movie_holder');
  let firstChild = (parentElement.firstElementChild);
  parentElement.removeChild(firstChild);
  parentElement.appendChild(firstChild);
}

function onScrollRight() {
  let parentElement = document.getElementById('movie_holder');
  let lastChild = (parentElement.lastElementChild);
  parentElement.removeChild(lastChild);
  parentElement.prepend(lastChild);
}

function run() {
  const leftArrow = document.getElementById('left_arrow');
  leftArrow.addEventListener('click', onScrollLeft);
  const rightArrow = document.getElementById('right_arrow');
  rightArrow.addEventListener('click', onScrollRight);
}

window.onload = run;