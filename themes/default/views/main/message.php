<?php 
if (!empty($message)) {
   foreach ($message as $messages) {
   ?> 
   <div class="post_message">
   <span><?php echo $messages; ?></span>
   </div>
   <?php
   }
}