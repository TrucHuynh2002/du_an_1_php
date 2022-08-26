function danhmuc(abc) {
    var canho = document.querySelectorAll(".canho");
    var dat = document.querySelectorAll(".dat");
    console.log(canho)
    switch(abc.value){
        case "1" :
            dat.forEach(function(a,index){
                a.style.display = "none";
                canho[1].style.display = "block";
                canho[0].style.display = "block";
            });
            break;
        case "2" :
            dat.forEach(function(a,index){
                a.style.display = "none";
                canho[0].style.display = "block";
                canho[1].style.display = "block";
            });
             break;
        case "3" :
            canho.forEach(function(a,index){
              a.style.display = "none";
                dat[index].style.display = "block";
            });
             break;
    }
}