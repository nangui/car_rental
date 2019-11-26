require('./bootstrap');

let scrollpos = window.scrollY
const header = document.querySelector(".main-navigation-header-wrapper")
const header_height = header.offsetHeight
const add_class_on_scroll = () => header.classList.add("mt-32")
const remove_class_on_scroll = () => header.classList.remove("mt-32")

window.addEventListener('scroll', function() { 
  scrollpos = window.scrollY;
  if (scrollpos < header_height) { add_class_on_scroll() }
  else { remove_class_on_scroll() }
  console.log(scrollpos)
})