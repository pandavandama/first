'use strict';

let btn_form1 = document.getElementById('btn_form1');
let hide_form_add = document.getElementById('hide_form_add');
let form_add = document.querySelector('.form_add');
function show_form_add(status){
    if(status){
        form_add.style.display = 'block';
    }
    else form_add.style.display = 'none';
}

