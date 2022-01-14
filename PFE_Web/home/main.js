menu=$("nav ul");
toggle=$("nav ul .menu");

toggle.on("click",function(){
    if(menu.hasClass("active")){
        menu.removeClass("active");
    }else{
        menu.addClass("active");
    }
});
// Navbar end

// conter
    // $(document).ready(function(){
    //     $('.counter').counterUp({
    //       delay: 10,
    //       time: 1200
    //     });
    //   });

//total 
$.ajax({
    url: 'https://api.covid19api.com/summary',
    dataType: 'json',
    cache: false,
    success: function(data , status){
         $("#NewConfirmed").append(data.Global.NewConfirmed);
         $("#TotalConfirmed").append(data.Global.TotalConfirmed);
         $("#TotalDeaths").append(data.Global.TotalDeaths);
         $("#TotalRecovered").append(data.Global.TotalRecovered);
        // document.getElementById("NewConfirmed").innerHTML=data.Global.NewConfirmed;
    },
    error: function(xhr , textSatus,err){
        console.log(xhr);
        console.log(textSatus);
        console.log(err); 
    }
})