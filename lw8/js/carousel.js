function run() {
  const leftArrow = document.getElementById('left_arrow');
  leftArrow.addEventListener('click', onScrollLeft);
  const rightArrow = document.getElementById('right_arrow');
  rightArrow.addEventListener('click', onScrollRight);
}

function onScrollRight() {
  let parentElement = document.getElementById('movie_holder');
  let currentFirstChild = (parentElement.firstElementChild);
  let newLastChildObjectIndex = getNewLastChildObjectIndex(currentFirstChild);
  parentElement.removeChild(currentFirstChild);
  let NewLastChild = createNewChild(newLastChildObjectIndex);
  parentElement.appendChild(NewLastChild);
}

function onScrollLeft() {
  let parentElement = document.getElementById('movie_holder');
  let currentLastChild = (parentElement.lastElementChild);
  let newFirstChildObjectIndex = getNewFirstChildObjectIndex(currentLastChild);
  parentElement.removeChild(currentLastChild);
  let NewFirstChild = createNewChild(newFirstChildObjectIndex);
  parentElement.prepend(NewFirstChild);
}

function getNewLastChildObjectIndex(currentChild) { /*ScrollRight*/
  const moviesShown = 4;
  const moviesArrLength = moviesArr.length;
  let currentChildObjectIndex = getCurrentChildObjectIndex(currentChild);
  let newLastChildObjectIndex = currentChildObjectIndex + moviesShown;
  if (newLastChildObjectIndex >= moviesArrLength) {
    newLastChildObjectIndex = newLastChildObjectIndex - moviesArrLength;
  }
  console.log(newLastChildObjectIndex);
  return newLastChildObjectIndex;
}

function getNewFirstChildObjectIndex(currentChild) { /*ScrollLeft*/
  const moviesShown = 4;
  const moviesArrLength = moviesArr.length;
  let currentLastChildObjectIndex = getCurrentChildObjectIndex(currentChild);
  let newFirstChildObjectIndex = currentLastChildObjectIndex - moviesShown;
  if (currentLastChildObjectIndex < moviesShown) {
    newFirstChildObjectIndex = (currentLastChildObjectIndex - moviesShown + moviesArrLength);

  }
  console.log(newFirstChildObjectIndex);
  return newFirstChildObjectIndex;
}

function getCurrentChildObjectIndex(currentChild) {
  let currentChildId = currentChild.id;
  let currentChildObject = moviesArr.find(item => item.id == currentChildId);
  let currentChildObjectIndex = moviesArr.indexOf(currentChildObject);
  return currentChildObjectIndex;
}

function createNewChild(newChildObjectIndex) {
  let NewChild = document.createElement('div');
  NewChild.classList.add('movie');
  NewChild.id = `${moviesArr[newChildObjectIndex].id}`;
  NewChild.innerHTML =
  `<img src="${moviesArr[newChildObjectIndex].image}" alt="true_detective" class="movie_image">
  <h3 class="name_of_the_movie">${moviesArr[newChildObjectIndex].title}</h3>
  <p class="movies_description">${moviesArr[newChildObjectIndex].description}</p>`;
  return NewChild;
}

window.onload = run;