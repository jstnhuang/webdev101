(function() {
  $(document).ready(function() {
    $("#sidebar").hide();
    $("#navBar a.logo").click(toggleSidebar);
    $("#header").click(scrollToTop);
  });
  
  function scrollToTop() {
    $("body").animate({scrollTop: 0}, 200);
  }
  
  function toggleSidebar() {
    var sidebarWidth = 185;
    var sidebarExtraWidth = 15;
    var animationSpeed = 100;
    
    // Open sidebar.
    if ($("#sidebar").width() == 0) {
      $("#sidebar").show();
      $("#sidebar").animate({
        width: sidebarWidth + "px"
      }, animationSpeed);
    }
    
    // Close sidebar.
    else {
      $("#sidebar").animate({
        width: "0px"
      }, animationSpeed, function() {
        $("#sidebar").hide();
      });
    }
    return false;
  }
})();