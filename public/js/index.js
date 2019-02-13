$(document).on("ready",function()
{
        // start up hidden
$('.interface').hide();
$('.centered').hide();
$('.centered2').hide();
$('div[id]').hide();
$('.btn').hide();
    // coloring the code
    var words=['using','return','namespace','if','else','double','for','while','do','&quot;','char','float','int','long','void','string','iostream','#','include','cin','cout','std','endl','{','}','&lt;','&gt;'];  
   $('.code').each(function() {
    var m=$(this);
       var i;
for (i = 0; i <words.length; i++) { 
        var te = $(this).html();
    // this for taking every instance of the word
     var re = new RegExp(words[i],"g");
      
    if(i<=14){$(m).html(te.replace(re,'<span class="bl">'+words[i]+'</span>'));} 
    else if (i<=22){$(m).html(te.replace(re,'<span class="gr">'+words[i]+'</span>'));}
    else {$(m).html(te.replace(re,'<span class="re">'+words[i]+'</span>'));}
    }
   });


    // showing the page
$('.interface').slideDown(2000);
$('.centered').slideDown(3000);
$('.centered2').slideDown(3000);
$('.btn').slideDown(2500);
    // sliding the buttons when clicked
$('.btn').on('click',function(){    
       var pos = $('.btn').index(this);
       $('div[id]').hide();
       $('.btn').removeClass('active');
       $('.btn').eq(pos).addClass('active');
       $('div[id]').eq(pos).slideDown(2500);
       
});
    $('.menu').on('click',function(){    
      $(this).next().toggleClass('active');
});
    
    
$('.codeim').on('click',function()
{
   
$(this).addClass('modal');
    var m=$(this); 
    $(document).mouseup(function(e) 
{
    var container = $(m);
    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        container.removeClass('modal');
    }
});

}
);
});
