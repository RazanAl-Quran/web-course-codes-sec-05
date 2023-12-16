// document.addEventListener('DOMContentLoaded',function(){
//     document.querySelector('#on').addEventListener('click',function(){
//         document.querySelector('#myImage').src = "bulbon.gif";
//     });
//     document.querySelector('#off').addEventListener('click',function(){
//         document.querySelector('#myImage').src = "bulboff.gif";
//     })
// })

document.addEventListener('DOMContentLoaded',function(){
    document.querySelector('#on').addEventListener('click',turnBulbOn);
    document.querySelector('#off').addEventListener('click',turnBulbOff);
})

function turnBulbOn () {
    document.querySelector('#myImage').src = "bulbon.gif";
}

function turnBulbOff () {
    document.querySelector('#myImage').src = "bulboff.gif";
}