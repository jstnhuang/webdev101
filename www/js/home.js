(function() {
  $(document).ready(function() {
    $(".homeInfoNav a").click(function() {
      location.hash = $(this).attr('name');
      updateInfo();
      return false;
    });
    updateInfo();
  });
  
  function updateInfo() {
    if (location.hash != "") {
      var infoId = location.hash.substring(1);
      loadInfo(infoId);
    }
    else {
      loadInfo();
    }
  }
  
  function loadInfo(id) {
    var backgrounds = {
      "learn": "background1.jpg",
      "experiment": "background3.jpg",
      "personalize": "background2.jpg"
    };
    
    if (id != "learn" && id != "experiment" && id != "personalize") {
      id = "learn";
    }
    
    $(".homeInfoContainer").css('background-image',
      'url("images/home/' + backgrounds[id] + '")');
  
    $(".homeInfoDescription").hide();
    $("#" + id).fadeIn();
    $(".homeInfoNav a").removeClass('active');
    $(".homeInfoNav a[name='"+id+"']").addClass('active');
  }
})();