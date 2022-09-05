<?php
ob_start();
// include header.php file
include("header.php");
?>

<?php
/*include _banner-area.php file */
include("Template/_banner-area.php");
/*End of _banner-area.php file */

/*include _top-sale.php file */
include("Template/_top-sale.php");
/*End of _top-sale.php file */

/*include _special-price.php file */
include("Template/_special-price.php");
/*End of _special-price.php file */

/*include _banner-ads.php file */
include("Template/_banner-ads.php");
/*End of _banner-ads.php file */

/*include _new-phones.php file */
include("Template/_new-phones.php");
/*End of _new-phones.php file */

/*include _blogs.php file */
include("Template/_blogs.php");
/*End of _blogs.php file */

?>

<?php
// include footer.php file
include("footer.php");
?>