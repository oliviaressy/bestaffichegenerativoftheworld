var typo = ['autopia', 'charis', 'clearsans', 'combat', 'eczar', 'fengardo', 'gapsans', 'lilgrotesk', 'manifont', 'pressuru', 'savate', 'sinkin'];

function resizeFont(elemToR){
   var parentW = elemToR.offsetWidth;
    
    $(elemToR).find('.row').each(function(n) {
      var newFontSize = (parentW / this.offsetWidth) * 9.9;
        
      this.style.fontSize = newFontSize + 'px';
      this.style.lineHeight = '120%'; //ça vous pouvez changer
    });
}

function randomType(elem){
  $(elem).find('.row').each(function(n) {
    var font = typo[Math.floor(Math.random()*typo.length)];
    $(this).css('font-family', font);

  });
}

$(document).ready(function() {
    $('.justify').each(function() {
      resizeFont(this);
      randomType(this);
    });
});