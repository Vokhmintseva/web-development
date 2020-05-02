function run() {
  const form = document.querySelector('form');
  form.addEventListener('submit', preventEvent);
  const leftArrow = document.getElementById('left_arrow');
  leftArrow.addEventListener('click', onScrollLeft);
  const rightArrow = document.getElementById('right_arrow');
  rightArrow.addEventListener('click', onScrollRight);
}

async function preventEvent(event) {
  if (event.cancelable) {
    event.preventDefault();
  }
  const formData = new FormData(this);
  const object = {};
  formData.forEach((value, key) => {
    object[key] = value
  });
  const name = document.getElementById('name');
  const email = document.getElementById('email');
  /*var json = JSON.stringify(object);*/
  console.log(object);
  /*var data = {};

  const country = document.getElementById('country');
  const gender = document.querySelector('input[name="gender"]:checked');
  const message = document.getElementById('message');
  const gender = document.getElementsByName('gender');

  data =
      {
        'name': name.value,
        'email': email.value,
        'country': country.value,
        'gender': gender.value,
        'message': message.value
      }*/

  const response = await ajaxSend(object);

  if (response['name'] == 'error') {
    name.classList.add('error');
  }
  if (response['email'] == 'error') {
    email.classList.add('error');
  }


  if (response['name'] == 'correct' && response['email'] == 'correct') {
    const message = document.getElementById('sent_message');
    const message_text = 'Ваше сообщение успешно отправлено';
    message.innerHTML = message_text;
  }
}

window.onload = run;


  async function ajaxSend(data) {
    let response = await fetch('http://localhost:8080/index.php', { // файл-обработчик
      method: 'POST',
      headers: {
        'Content-Type': 'application/json', // отправляемые данные
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