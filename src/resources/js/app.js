import './bootstrap';
import '../scss/app.scss'; 

const tham = document.querySelector(".tham");
const menu = document.getElementById('menu')

function navToggle() {
  tham.classList.toggle('tham-active');
  menu.classList.toggle('flex');
  menu.classList.toggle('hidden');
}
  
tham.addEventListener('click', navToggle);
