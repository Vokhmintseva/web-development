function run() {
  const form = document.querySelector('form');
  form.addEventListener('submit', processFormData);
  const leftArrow = document.getElementById('left_arrow');
  leftArrow.addEventListener('click', onScrollLeft);
  const rightArrow = document.getElementById('right_arrow');
  rightArrow.addEventListener('click', onScrollRight);
}

async function processFormData(event) {
  if (event.cancelable) {
    event.preventDefault();
  }
  const name = document.getElementById('name');
  const email = document.getElementById('email');
  const country = document.getElementById('country');
  const gender = document.querySelector('input[name="gender"]:checked');
  const message = document.getElementById('message');
  const data = {
    'name': name.value,
    'email': email.value,
    'country': country.value,
    'gender': gender.value,
    'message': message.value
  };
  const response = await ajaxSend(data);
  (response['name'] == 'error')
    ? name.classList.add('error')
    : name.classList.remove('error');
  (response['email'] == 'error')
    ? email.classList.add('error')
    : email.classList.remove('error');
  const notice = document.getElementById('notice')
  if (response['name'] == 'correct' && response['email'] == 'correct') {
    notice.innerHTML = 'Ваше сообщение успешно отправлено';
  } else {
    notice.innerHTML = '';
  }
}

async function ajaxSend(data) {
  let response = await fetch('http://localhost:8080/index.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(data)
  })
  if (response.ok) {
    let json = await response.json();
    return json;
  } else {
    alert("Ошибка HTTP: " + response.status);
  }
}

window.onload = run;