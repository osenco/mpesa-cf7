<?php
add_action('wp_footer', function(){
echo '<script>
document.addEventListener( "wpcf7mailsent", function( event ) {
    location = "http://example.com/";
}, false );
</script>';
});
