var image = document.getElementById("slide");
function showSlide(num){
    // console.log(num);
    switch (num){
        case 1: {
            image.src="asset/images/slide1.jpg";
            break;
        }
        case 2: {
            image.src="asset/images/slide7.jpg";
            break;
        }
        case 3: {
            image.src="asset/images/slide5.jpg";
            break;
        }
        case 4: {
            image.src="asset/images/logo.jpg";
            break;
        }
    }
}
function showInfo(){
    alert("Liên hệ: 0342609687 | 0838 538 558 hoặc facebook bên dưới");
}
