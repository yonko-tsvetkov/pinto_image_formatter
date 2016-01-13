<?php

/**
 * @file
 * Template file for Pinto Image Formatter module.
 *
 * Available variables:
 * - $link_to: Type ot linking.
 * - $node_path: Node path.
 * - $url_original: The url of the original image.
 * - $url_styled: The url of the styled image.
 * - $title: Image title used for caption and image.
 * - $alt: Image alt.
 * - $image_style: The Image style being used.
 * - $width: Image thumbnail width in pixels.
 * - $height: Image thumbnail height in pixels.
 * - $delta: Item.
 * - $label_type: Label type.
 * - $label_text: Label text.
 */

?>

<?php if($label_type !== "hidden" && $delta == 0): ?>
  <label class="pinto-label field-label"><?php print $label_text; ?>:</label>
<?php  endif; ?>
<div class="pinto-main-box">
 <?php if($link_to == "none"): ?>
   <div class="pinto-image-box">
      <img src="<?php print $url_styled; ?>" width="<?php print $width; ?>" height="<?php print $height; ?>" alt="<?php print $alt; ?>" title="<?php print $title; ?>" class="pinto-image" />
   </div>   
  <?php  elseif($link_to == "file"): ?>
   <div class="pinto-image-box">
       <a rel="shadowbox" title="<?php print $title; ?>" href="<?php print $url_original; ?>" class="pinto-link">
          <img src="<?php print $url_styled; ?>" width="<?php print $width; ?>" height="<?php print $height; ?>" alt="<?php print $alt; ?>" title="<?php print $title; ?>" class="pinto-image"  />
       </a>
   </div>
  <?php elseif($link_to == "content"): ?>
    <div class="pinto-image-box">
        <a href="<?php print $node_path; ?>"  class="pinto-link" title="<?php print $title; ?>">
          <img src="<?php print $url_styled; ?>" width="<?php print $width; ?>" height="<?php print $height; ?>" alt="<?php print $alt; ?>" title="<?php print $title; ?>" class="pinto-image"  />
        </a>
    </div>
  <?php elseif($link_to == "colorbox_modal"): ?>
    <div class="pinto-image-box">
       <a href="<?php print $url_original; ?>" rel="gallery-node-1" class="pinto-link colorbox" title="<?php print $title; ?>">
         <img src="<?php print $url_styled; ?>" width="<?php print $width; ?>" height="<?php print $height; ?>" alt="<?php print $alt; ?>" title="<?php print $title; ?>" class="pinto-image"  />
       </a>
    </div>
  <?php  else : ?>
    <div class="pinto-image-box">
        <img src="<?php print $url_styled; ?>" width="<?php print $width; ?>" height="<?php print $height; ?>" alt="<?php print $alt; ?>" title="<?php print $title; ?>" class="pinto-image" />
    </div>
  <?php endif; ?>
  <?php if(!empty($title)): ?>
    <div class="pinto-caption"><?php print $title; ?></div>
  <?php  endif; ?>
</div>
