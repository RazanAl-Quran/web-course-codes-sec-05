// document.querySelector('#image1').addEventListener('mouseover',function(){
//     document.querySelector('#bigimg').src = document.querySelector('#image1').src;
// });

// document.querySelector('#image2').addEventListener('mouseover',function(){
//     document.querySelector('#bigimg').src = document.querySelector('#image2').src;
// });

// document.querySelector('#image3').addEventListener('mouseover',function(){
//     document.querySelector('#bigimg').src = document.querySelector('#image3').src;
// });

let iphoneGallery = document.querySelectorAll('.gallery');
console.log(iphoneGallery);


iphoneGallery.forEach(function (item) {
    console.log(item);
   item.addEventListener('mouseover', function () {
        document.querySelector('#bigimg').src = item.src;
    });

})
