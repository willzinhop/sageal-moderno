const input = document.querySelector('input[name="cpf"]');


input.addEventListener('keypress', () => {
  let inputLength = parseInt(input.value.length);


  // MAX LENGHT 14  CPF
  if (inputLength === 3 || inputLength === 7) {
    input.value += '.';
  } else if (inputLength === 11) {
    input.value += '-';
  }
});
const checkbox = document.querySelector('input[name="password"]');
const mostrar = document.querySelector('input[name="senha"]');


checkbox.addEventListener('change', function() {
  if (this.checked) {
    mostrar.setAttribute('type', 'text');
  } else {
    mostrar.setAttribute('type', 'password');
  }
});