


let block_auth = document.querySelector('.block_auth');
let div_auth = document.getElementById('Auth');
let i=0;
div_auth.addEventListener('click',open_modal,false)


function open_modal(status)
{
    i++;
    if(i%2==0){ status=false;}else status=true;

    if(status){
        block_auth.style.display = 'block';
    }
    if(!status){
        block_auth.style.display = 'none';
    }
}
