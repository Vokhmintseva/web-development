let firstMovie;
const MoviesNumber = document.getElementsByClassName("movie").length

function onScrollLeft() {
  let parentElement = document.getElementById('movie_holder');
  let lastChild = (parentElement.lastElementChild);
  parentElement.removeChild(lastChild);
  parentElement.prepend(lastChild);
  firstMovie = firstMovie - 1;
  if (firstMovie < 0)
  {
    firstMovie = MoviesNumber - 1;
  }
  setSwitchers();
}

function onScrollRight() {
  let parentElement = document.getElementById('movie_holder');
  let firstChild = (parentElement.firstElementChild);
  parentElement.removeChild(firstChild);
  parentElement.appendChild(firstChild);
   firstMovie++;
  if (firstMovie == MoviesNumber)
  {
    firstMovie = 0;
  }
  setSwitchers();
}

function setSwitchers() {
  let width = window.innerWidth; //текущий размер окна браузера
  let i;
  let dotsCollection = document.getElementsByClassName("slider-dots_item");
  for (i = 0; i < dotsCollection.length; i++)
  {
    dotsCollection[i].className = dotsCollection[i].className.replace(" active", "");
  }
  dotsCollection[firstMovie].className += " active";
  if (width >= 550 && width < 768) {
    let next = firstMovie + 1;
    if (next  == MoviesNumber) {
      next = 0;
    }
    dotsCollection[next].className += " active";
  } else if (width >= 768 && width < 1200 ) {
    let next = firstMovie + 1;
    let nextnext = next + 1;
    if (next  == MoviesNumber - 1) {
      nextnext = 0;
    }
    if (next == MoviesNumber) {
      next = 0;
      nextnext = 1;
    }
    dotsCollection[next].className += " active";
    dotsCollection[nextnext].className += " active";
  }
}

function run() {
  firstMovie = 0;
  setSwitchers();
  window.addEventListener('resize', setSwitchers, false);
  const leftArrow = document.getElementById('left_arrow');
  leftArrow.addEventListener('click', onScrollLeft);
  const rightArrow = document.getElementById('right_arrow');
  rightArrow.addEventListener('click', onScrollRight);
}

window.onload = run;