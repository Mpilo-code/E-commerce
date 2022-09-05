<?php
ob_start();
// include header.php file
include("header.php");
?>

<?php
/*include _cart-template.php file */
include("Template/_cart-template.php");
/*End of _cart-template.php file */

/*include _wishlist-template.php file */
include("Template/_wishlist-template.php");
/*End of _wishlist-template.php file */

/*include _new-phones.php file */
include("Template/_new-phones.php");
/*End of _new-phones.php file */

?>

<?php
// include footer.php file
include("footer.php");
?>

