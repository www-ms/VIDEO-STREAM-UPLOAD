var boxes = document.getElementsByClassName('box');
for (let i = 0; i < boxes.length; i++) {
    boxes[i].setAttribute('onclick','des(this)');
}

$('.box').click(function () {
    $('.boxvid').addClass('boxvidselected');
    $('.box').removeClass('selected');
    $(this).addClass('selected');
});

function des(el) {

    var hidden = el.children[1].children[2].classList.contains('hidden');
    var checkclass = el.classList.contains('selected');

    for (let i = 0; i < boxes.length; i++) {
        if (!checkclass) {
            boxes[i].children[0].removeAttribute('controls');
            boxes[i].children[0].pause();
            // boxes[i].children[0].currentTime = 0;
            boxes[i].children[1].children[2].classList.add('hidden');
        }
    }
    el.children[0].setAttribute('controls','true');
    if (!hidden) {
        el.children[1].children[2].classList.add('hidden');
        el.children[1].children[2].classList.remove('border');
    }else
    if(checkclass){
        el.children[1].children[2].classList.remove('hidden');
        el.children[1].children[2].classList.add('border');
    }
}


document.getElementById('floor').onclick = ()=> {window.location.reload()}
