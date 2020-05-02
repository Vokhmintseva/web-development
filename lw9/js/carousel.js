function run() {
  const leftArrow = document.getElementById('left_arrow');
  leftArrow.addEventListener('click', onScrollLeft);
  const rightArrow = document.getElementById('right_arrow');
  rightArrow.addEventListener('click', onScrollRight);
}

function onScrollRight() {
  const parentElement = document.getElementById('movie_holder');
  const currentFirstChild = (parentElement.firstElementChild);
  const newLastChildObject = getNewLastChildObject(currentFirstChild);
  parentElement.removeChild(currentFirstChild);
  const newLastChild = createNewChild(newLastChildObject);
  parentElement.appendChild(newLastChild);
}

function onScrollLeft() {
  const parentElement = document.getElementById('movie_holder');
  const currentLastChild = (parentElement.lastElementChild);
  const newFirstChildObject = getNewFirstChildObject(currentLastChild);
  parentElement.removeChild(currentLastChild);
  const newFirstChild = createNewChild(newFirstChildObject);
  parentElement.prepend(newFirstChild);
}

function getNewLastChildObject(currentChild) { /*ScrollRight*/
  const moviesShown = 4;
  const moviesArrLength = moviesArr.length;
  const currentChildObjectIndex = getCurrentChildObjectIndex(currentChild);
  let newLastChildObjectIndex = currentChildObjectIndex + moviesShown;
  if (newLastChildObjectIndex >= moviesArrLength) {
    newLastChildObjectIndex = newLastChildObjectIndex - moviesArrLength;
  }
  return moviesArr[newLastChildObjectIndex];
}

function getNewFirstChildObject(currentChild) { /*ScrollLeft*/
  const moviesShown = 4;
  const moviesArrLength = moviesArr.length;
  const currentLastChildObjectIndex = getCurrentChildObjectIndex(currentChild);
  let newFirstChildObjectIndex = currentLastChildObjectIndex - moviesShown;
  if (currentLastChildObjectIndex < moviesShown) {
    newFirstChildObjectIndex = (currentLastChildObjectIndex - moviesShown + moviesArrLength);
  }
  return moviesArr[newFirstChildObjectIndex];
}

function getCurrentChildObjectIndex(currentChild) {
  const currentChildId = currentChild.id;
  const currentChildObject = moviesArr.find(item => item.id == currentChildId);
  const currentChildObjectIndex = moviesArr.indexOf(currentChildObject);
  return currentChildObjectIndex;
}

function createNewChild(newChildObject) {
  const newChild = document.createElement('div');
  newChild.classList.add('movie');
  newChild.id = `${newChildObject.id}`;
  newChild.innerHTML =
  `<img src="${newChildObject.image}" alt="true_detective" class="movie_image">
  <h3 class="name_of_the_movie">${newChildObject.title}</h3>
  <p class="movies_description">${newChildObject.description}</p>`;
  return newChild;
}