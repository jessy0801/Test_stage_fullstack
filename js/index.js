body = document.getElementById('body');
prev = document.getElementById('program-prev');
next = document.getElementById('program-next');
btn = document.getElementById('btn-billet');
btn_dropdown = document.getElementById('btn-dropdown');
menu_dropdown = document.getElementById('menu-dropdown');
menu = document.getElementById('menu-trigger');
slide = document.getElementById('present-slide');
prog_ul = document.getElementById('program-ul');
present_sec = document.getElementById('present-section');


/* &&&&&&&&&&      event DropDown menu      $$$$$$$$$$$$$$$$$$$$*/
menu.onmouseover = function () {
    menu_dropdown.style.display = 'block';
};
menu_dropdown.onmouseover = function () {
    menu_dropdown.style.display = 'block';
};
menu_dropdown.onmouseout = function () {
    menu_dropdown.style.display = 'none';
};
menu.onmouseout = function () {
    menu_dropdown.style.display = 'none';
};

btn.onmouseover = function () {
    btn_dropdown.style.display = 'block';
};
btn_dropdown.onmouseover = function () {
    btn_dropdown.style.display = 'block';
};
btn_dropdown.onmouseout = function () {
    btn_dropdown.style.display = 'none';
};
btn.onmouseout = function () {
    btn_dropdown.style.display = 'none';
};



/* &&&&&&&&&&      Slide Prensentation film        $$$$$$$$$$$$$$$$$$$$*/
present_sec.addEventListener('transitionend', function () {
    present_sec.classList.remove("move");
}, false);

function updateSlider(pos){
    temp = 1;
    present_sec.classList.add("move");
    for (var i = 0; i < slide.childNodes.length; i++) {
        if (slide.childNodes[i].nodeName === 'LI') {
            if (temp == pos) {
                slide.childNodes[i].innerHTML='•';
                slide.childNodes[i].style.color = 'black';
            } else {
                slide.childNodes[i].innerHTML='◦';
                slide.childNodes[i].style.color = 'white';
            }

            temp++;
        }
    }

}


/* &&&&&&&&&&      Slider Programation       $$$$$$$$$$$$$$$$$$$$*/

totalnbrProg = 0;
for (var i = 0; i < prog_ul.childNodes.length; i++) {
    if (prog_ul.childNodes[i].className === 'program-ul-item') {
        totalnbrProg++
    }
}
function updateUl(at) {
    var dif=0;
    if (at>7){
        dif = at-7;
    }
    nbrProg=1;
    for (var i = 0; i < prog_ul.childNodes.length; i++) {
        if (prog_ul.childNodes[i].className === 'program-ul-item') {
            if (nbrProg > at) {
                prog_ul.childNodes[i].style.display = 'none';
            } else if (nbrProg<=dif){
                prog_ul.childNodes[i].style.display = 'none';
            } else {
                prog_ul.childNodes[i].style.display = 'block';
            }
            nbrProg++;
        }
    }
}
updateUl(7);
pos = 7;
next.onclick = function () {
    if (pos < totalnbrProg) {
        pos++;
        updateUl(pos);

    }
};
prev.onclick = function () {
    if (pos>7){
        pos--;
        updateUl(pos)
    }
};
