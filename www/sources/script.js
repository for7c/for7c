/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-js', '/testtt/www/assets/particles/config.json', function() {
  console.log('callback - particles.js config loaded');
});
$(document).ready(function () {
$('input,textarea').focus(function(){
$(this).data('placeholder',$(this).attr('placeholder'))
$(this).attr('placeholder','');
});
$('input,textarea').blur(function(){
$(this).attr('placeholder',$(this).data('placeholder'));
});
});