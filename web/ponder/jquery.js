$(document).ready(function(){
  $(".tab-list").on("click", ".tab", function(e) {
      e.preventDefault();

      $(".tab").removeClass("active");
      $(".tab-content").removeClass("show");
      $(this).addClass("active");
      $($(this).attr("href")).addClass("show");
});

 $(".accordion").on("click", ".accordion-header", function() {
     $(this).toggleClass("active").next().slideToggle();
 });
});
