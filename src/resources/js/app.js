import './bootstrap';
import '../scss/app.scss'; 
import {
  Collapse,
  initTWE,
} from "tw-elements";

const tham = document.querySelector(".tham");
const menu = document.getElementById('menu')

function navToggle() {
  tham.classList.toggle('tham-active');
  menu.classList.toggle('flex');
  menu.classList.toggle('hidden');
}
  
tham.addEventListener('click', navToggle);

initTWE({ Collapse });