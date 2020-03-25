<?php 
/* Social Share Buttons template for Wordpress
 * By Daan van den Bergh 
 */ 

$postUrl = 'http' . ( isset( $_SERVER['HTTPS'] ) ? 's' : '' ) . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>

<section class="sharing-box content-margin content-background clearfix">
    <div class="share-button-wrapper">
        <a target="_blank" class="share-button share-facebook secondary-button" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" title="Condividi su Facebook">Condividi</a>
        <a target="_blank" class="share-button share-linkedin secondary-button" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $postUrl; ?>" title="Condividi su Linkedin">Condividi</a>
        <a onclick="copyFunction(this)" class="share-button share-link secondary-button" title="Copia il link">Copia</a>
    </div>
</section>

<script>
// Function to copy the url to the clipboard
// There is no other way other than creating a dummy element and then delete it
function copyFunction(el) {
    el.innerHTML = "Link copiato";
    var dummy = document.createElement('input'),
    text = window.location.href;
    document.body.appendChild(dummy);
    dummy.value = text;
    dummy.select();
    document.execCommand('copy');
    document.body.removeChild(dummy);
} 
</script>