$(document).ready(function(){
    $(".btn").on("click", function(){       
        $(".menu").toggleClass("open-menu");
      });   
})
$(document).on("click", function(event){
  const currentTag = event.target.tagName;
  const isOpen = document.querySelector(".open-menu"); //check if menu is open  
  if(currentTag === 'BODY' && isOpen){
    $(".menu").toggleClass("open-menu");
  }
});
