var typo = ['autopia', 'charis', 'clearsans', 'combat', 'eczar', 'fengardo', 'gapsans', 'lilgrotesk', 'manifont', 'pressuru', 'savate', 'sinkin'];

function resizeFont(elemToR){
   var parentW = elemToR.offsetWidth;
    
    $(elemToR).find('.row').each(function(n) {

      var newFontSize = (parentW / this.offsetWidth) * 9.9*3;


      console.log(parentW,this.offsetWidth,newFontSize);
        
      this.style.fontSize = newFontSize + 'px';
      this.style.lineHeight = '1em'; //ça vous pouvez changer
    });
}

function randomType(elem){
  $(elem).find('.row').each(function(n) {
    var font = typo[Math.floor(Math.random()*typo.length)];
    $(this).css('font-family', font);

  });
}

$(document).ready(function() {
    $(window).load(function(){
      $('.justify').each(function() {
        randomType(this);
        resizeFont(this);
      });
    });
});