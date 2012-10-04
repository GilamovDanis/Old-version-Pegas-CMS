<?php 
if (!empty($error)) {
   foreach ($error as $errors) {
   ?> 
   <div class="post_error">
   <span><?php echo $errors; ?></span>
   </div>
   <?php
   }
}