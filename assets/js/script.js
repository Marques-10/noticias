let teste = document.querySelectorAll("div.options > ul");
teste = teste[0].children;
teste = [... teste];
let url = window.location.href;
teste.forEach(e => {
    if (e.children[0].href == url) {
        e.children[0].classList.add("selected");
    }
});