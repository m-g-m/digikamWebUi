<li class="tag label label-success" id="image_<?php echo $tag['imageid'] ?>_tag_<?php echo $tag ['Tag']['id'] ?>">
     <a href="#" onClick="removeTag(<?php echo $tag['imageid'] ?>, <?php echo $tag['Tag']['id']?> ); return false;" >-</a>
     <a href="<?php echo $this->webroot.'tags/view/'.$tag['Tag']['id'] ?>" >
     <?php   
     echo $tag ['Tag']['name']; 
     ?>
     </a>
     
</li> 