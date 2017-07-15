# Wordpress-Notes


```
<?php
$fields = CFS()->get( 'before_after_image_upload' );
foreach ( $fields as $field ) {
echo '<div class="item">';
$imageinput = $field['image_upload'];
echo '<div align="center">';
               echo '<img src="'.$imageinput.'" alt="Cover">';
               echo '</div></div>';
}
?>
```
