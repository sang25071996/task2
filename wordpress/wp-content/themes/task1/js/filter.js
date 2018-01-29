$(document).ready(function(){
    $('#menu2').hide();
});
$("a[href='#menu1'], #tab-menu1, #character").click(function(){
    $('#menu2').hide();
    $('#menu1').show(700);
});
$("a[href='#menu2'], #tab-menu2, #artwork").click(function(){
    $('#menu1').hide();
    $('#menu2').show(700);
});