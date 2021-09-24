const   commonbtn = document.querySelector('.common-btn');
const myid1  = document.querySelector('#myid1');

commonbtn.addEventListener('click',(e)=>{
    myid1.classList.toggle('show-more');

})