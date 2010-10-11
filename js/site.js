// JavaScript Document

$(document).ready(function(){
    Cufon.replace('h1.title');
    Cufon.replace('.header h1');
    Cufon.replace('h2.title');
    $('.gallery a').attr('rel', 'fancybox');
    $('a[rel=fancybox]').fancybox({'padding' : '0'})
    $('#searchform #s').click(function(){
    	$(this).val('');
   	})
   	$('img').parent('a').css('border', 'none');
});