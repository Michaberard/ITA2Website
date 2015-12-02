var myGal=document.getElementById("gal");

var GalArray=["Pic/gal1.jpg",  "Pic/gal2.jpg", "Pic/backg_stad.jpg", "Pic/gal3.jpg", "Pic/alflo.jpg", "Pic/Roma-sept-2015.jpg"];

var imageIndex=0;

function changeImage(){
gal.setAttribute("src", GalArray[imageIndex])
imageIndex++;
    if(imageIndex>=GalArray.length)
        imageIndex=0;
}

var intervalChange = setInterval(changeImage, 2000);

myGal.onclick=function(){
clearInterval(intervalChange)
}