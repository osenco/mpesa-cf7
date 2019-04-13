<?php
add_action('wp_footer', function(){
echo '<script>
document.addEventListener( "wpcf7mailsent", function( event ) {
    location = "http://example.com/";
}, false );

document.addEventListener( "wpcf7submit", function( event ) {
    var inputs = event.detail.inputs;
 
    for ( var i = 0; i < inputs.length; i++ ) {
        if ( 'your-name' == inputs[i].name ) {
            alert( inputs[i].value );
            break;
        }
    }
}, false );
</script>';
});
