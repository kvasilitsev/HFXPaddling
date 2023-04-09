$(document).ready(function(){  
    $(".btn").on("click", function(){         //toogle menu if button onClick event  
        $(".menu").toggleClass("open-menu");
      });   
})
$(document).on("click", function(event){
  const currentTag = event.target.tagName;
  const isOpen = document.querySelector(".open-menu"); //check if menu is open  
  if(currentTag === 'BODY' && isOpen){                 //toogle menu if <BODY> onclick event && menu is open
    $(".menu").toggleClass("open-menu");
  }
});
