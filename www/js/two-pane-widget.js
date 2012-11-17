(function() {
  $(document).ready(function() {
    showContent('default');
    $('.tpNavLink').mouseenter(function() {
      updatePreview($(this));
    });
    
    $('.tpContent').height($('.tpNav').height());
  });
  
  function showContent(name) {
    $('.tpContent').hide();
    $('.tpContent[name="' + name + '"]').show();
  }
  
  function updatePreview(link) {
    var name = link.attr('name');
    showContent(name);
  }
})();