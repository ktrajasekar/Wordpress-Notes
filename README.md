# Wordpress-Notes


```
<?php
$fields = CFS()->get( 'before_after_image_upload' );
foreach ( $fields as $field ) {
echo '<div class="item">';
$imageinput = $field['image_upload'];
echo '<div align="center">';
               echo '<img src="'.$imageinput.'" alt="Cover" class="img-responsive">';
               echo '</div></div>';
}
?>
```

Home URL

```
<?php echo esc_url( home_url( '/' ) ); ?>

```


##New Clients 

Custom field suite

###CFS code for import 

```
[{"post_title":"service landing","post_name":"service-landing","cfs_fields":[{"id":1,"name":"client_logo","label":"Client Logo","type":"loop","notes":"All logo must same size","parent_id":0,"weight":0,"options":{"row_display":"0","row_label":"Client Logo","button_label":"Add","limit_min":"","limit_max":""}},{"id":2,"name":"client_logo1","label":"Client Logo","type":"file","notes":"","parent_id":1,"weight":1,"options":{"file_type":"image","return_value":"url","required":"0"}}],"cfs_rules":{"page_templates":{"operator":"==","values":["service-landing.php"]}},"cfs_extras":{"order":"0","context":"normal","hide_editor":"0"}}]

```

###PHP Code

```
<!--Clients  -->
<?php
   $fields = CFS()->get( 'client_logo' );
if (is_array($fields)) { ?>
   <div class="container-fluid clients white" data-scrollreveal="enter top 0.2s">
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="text-center">
              <h2 >Our Clients</h2>
      </div>
      <div class="owl-carousel owl-theme homePagelist">
      <?php
    $fields = CFS()->get( 'client_logo' );
foreach ( $fields as $field ) {
    echo '<div class="item"><img src="'.$field['client_logo1'].'"/> </div>';
}
?>
</div>
    </div>
  </div>
</div>
</div>
<?php } ?>
<!--End  -->

```
###Jquery Code

```
    j('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1,
                dots: false
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    });

    ```

https://gist.github.com/alenabdula/426e8e375e0e9108cb34


Home URL

```
<?php echo esc_url( home_url( '/' ) ); ?>

```

### Contact Form 

```
    <?php echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]'); ?>

.contactus input[type="text"], .contactus input[type="email"], .contactus textarea {
  border: #ccc 1px solid;
  border-radius: 0;
  padding: 5px;
  max-width: 290px;
}

.contactus textarea {
  height: 80px;
}

.wpcf7-submit {
  background: #dc758f;
  padding: 10px;
  border-radius: 0;
  border: 0;
  color: #fff;
  text-transform: uppercase;
  font-size: 16px;
}

.google-maps {
  position: relative;
  padding-bottom: 25%; // This is the aspect ratio
  height: 0;
  overflow: hidden;
}

.google-maps iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100% !important;
  height: 100% !important;
}

```

###Mega Menu Code

```

{"title":"Default","container_background_from":"rgba(255, 255, 255, 0)","container_background_to":"rgba(255, 255, 255, 0)","container_padding_left":"10px","container_padding_right":"10px","menu_item_background_hover_from":"rgba(255, 255, 255, 0)","menu_item_background_hover_to":"rgba(255, 255, 255, 0)","menu_item_link_height":"30px","menu_item_link_padding_left":"20px","menu_item_link_padding_right":"20px","menu_item_divider":"on","menu_item_divider_color":"rgb(241, 241, 241)","panel_header_border_color":"#555","panel_font_size":"14px","panel_font_color":"#666","panel_font_family":"inherit","panel_second_level_font_color":"#555","panel_second_level_font_color_hover":"#555","panel_second_level_text_transform":"uppercase","panel_second_level_font":"inherit","panel_second_level_font_size":"16px","panel_second_level_font_weight":"bold","panel_second_level_font_weight_hover":"bold","panel_second_level_text_decoration":"none","panel_second_level_text_decoration_hover":"none","panel_second_level_border_color":"#555","panel_third_level_font_color":"#666","panel_third_level_font_color_hover":"#666","panel_third_level_font":"inherit","panel_third_level_font_size":"14px","flyout_link_size":"14px","flyout_link_color":"#666","flyout_link_color_hover":"#666","flyout_link_family":"inherit","toggle_background_from":"#222","toggle_background_to":"#222","toggle_font_color":"#ffffff","mobile_background_from":"#222","mobile_background_to":"#222","mobile_menu_item_link_font_size":"14px","mobile_menu_item_link_color":"#ffffff","mobile_menu_item_link_text_align":"left","custom_css":"\/** Push menu onto new line **\/ \r\n#{$wrap} { \r\n    clear: both; \r\n}"}

``` 

### Clients Page

```
[{"post_title":"clientspage","post_name":"1329","cfs_fields":[{"id":"6","name":"clientpage","label":"clientpage","type":"loop","notes":"","parent_id":0,"weight":0,"options":{"row_display":"0","row_label":"Loop Row","button_label":"Add Row","limit_min":"","limit_max":""}},{"id":"7","name":"image","label":"image","type":"file","notes":"","parent_id":6,"weight":1,"options":{"file_type":"image","return_value":"url","required":"0"}}],"cfs_rules":{"page_templates":{"operator":"==","values":["clients.php"]}},"cfs_extras":{"order":"0","context":"normal","hide_editor":"0"}}]

```

```

 <section class="wow fadeInDown" data-wow-duration="2s" data-wow-delay="1s">
 <!--Clients  -->
<?php
   $fields = CFS()->get( 'clientpage' );
if (is_array($fields)) { ?>
   <div class="container-fluid white" data-scrollreveal="enter top 0.2s">
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-xs-12">
      <?php
    $fields = CFS()->get( 'clientpage' );
foreach ( $fields as $field ) {
    echo '<div class="col-sm-3 col-xs-6"><img class="img-responsive" src="'.$field['image'].'"/> </div>';
}
?>
    </div>
  </div>
</div>
</div>
<?php } ?>
<!--End  -->
</section>
```

--------------------------------
Career Pop Up
--------------------------------

```
[{"post_title":"careers-technology","post_name":"careers-technology","cfs_fields":[{"id":"8","name":"careers_tech","label":"careers-tech","type":"loop","notes":"","parent_id":0,"weight":0,"options":{"row_display":"0","row_label":"Add New","button_label":"Add Row","limit_min":"","limit_max":""}},{"id":"9","name":"careers_tech_title","label":"careers-tech-title","type":"text","notes":"","parent_id":8,"weight":1,"options":{"default_value":"","required":"0"}},{"id":"10","name":"careers_tech_desc","label":"careers-tech-desc","type":"wysiwyg","notes":"","parent_id":8,"weight":2,"options":{"formatting":"none","required":"0"}}],"cfs_rules":{"page_templates":{"operator":"==","values":["careers.php"]}},"cfs_extras":{"order":"0","context":"normal","hide_editor":"0"}}]

```

```
  <!--Tech  -->
  <div>
                        <?php
                        $loop = CFS()->get( 'careers_tech' );
                        echo '<ul class="career-list">' ;
                        foreach ( $loop as $row ) {
                            $careertitle =$row['careers_tech_title'] ;
                            $careerdesc =$row['careers_tech_desc'] ; ?>
                           <li data-toggle="modal" data-target="#<?php echo preg_replace('/\s+/', '', $careertitle); ?>"> 
                         <?php echo "<div class='career-list'>$careertitle</div>" ; ?>
                            <div id="<?php echo preg_replace('/\s+/', '', $careertitle); ?>" class="modal" role="dialog">
                            <div class="modal-dialog modal-lg careerModel">
                            <div class="modal-content">
                            <a href="javascript:void(0);" class="close careerClose" data-dismiss="modal"> <span class="glyphicon glyphicon-remove"></span></a>
                                  <div class="modal-body careerContents">
                            <?php echo $careerdesc ; ?>
                        </div>
                        </div></div>
                        </div>
                        <?php  echo '</li>';              
           } ?>
    <?php echo '</ul>'?>

    ```
 --------------------------------
Career Pop Up end
---------------------------------


------------------
Max Mega Menu
----------------------
```
#mega-menu-wrap-primary #mega-menu-primary>li.mega-menu-flyout ul.mega-sub-menu {
  width: 300px !important;
}
```
### Check Page 

```

      <?php if(!is_page( array( 'about-us', 'contact', 'management' )) ) :?>
     <?php endif; ?>

```

### Check title and expert

```
          if ( get_the_title() != '' ) {
            echo '<h2 class="entry-title">' . get_the_title() . '</h2>';
          }
          if ( get_the_excerpt() != '' ) {
            echo '<div class="excerpt">' . get_the_excerpt() . '</div>';
          }
```


### Animation Test

```

---------
<div class="container-fluid animationcss np">
<div class="container" style="min-height: 450px; margin-top: 40px;">
  <div class="row">
    <div class="col-sm-12 ">
<div class="ani"> 
  <span>Contact Coming Soon</span>
</div>

    </div>
  </div>
</div>
</div>
-------------------


.animationcss {
  text-align:center;
  background:linear-gradient(120deg, #eee 25%, #eee 40%, #ddd 55%);
  color:#555;
  font-family:'Roboto';
  font-weight:300;
  font-size:32px;
  padding-top:30vh;
  height:80vh;
  overflow:hidden;
  -webkit-backface-visibility: hidden;
  -webkit-perspective: 1000;
  -webkit-transform: translate3d(0,0,0);
}

div.ani {
  display:inline-block;
  overflow:hidden;
  white-space:nowrap;
}

div.ani:first-of-type {    /* For increasing performance 
                       ID/Class should've been used. 
                       For a small demo 
                       it's okaish for now */
  animation: showup 7s infinite;
}

div.ani:last-of-type {
  width:0px;
  animation: reveal 7s infinite;
}

div.ani:last-of-type span {
  margin-left:-355px;
  animation: slidein 7s infinite;
}

@keyframes showup {
    0% {opacity:0;}
    20% {opacity:1;}
    80% {opacity:1;}
    100% {opacity:0;}
}

@keyframes slidein {
    0% { margin-left:-800px; }
    20% { margin-left:-800px; }
    35% { margin-left:0px; }
    100% { margin-left:0px; }
}

@keyframes reveal {
    0% {opacity:0;width:0px;}
    20% {opacity:1;width:0px;}
    30% {width:355px;}
    80% {opacity:1;}
    100% {opacity:0;width:355px;}
}


p {
  font-size:12px;
  color:#999;
  margin-top:200px;
}

```

```
					<?php echo get_post_meta($post->ID, 'EventDate', true); ?>
```
