
<form class="form-horizontal" role="form" method="post" action="">
	<div class="form-group" >
    	<label for="hazardno" class="col-sm-6"><?php echo doc('print_label');?></label>
    	 <?php if(count(doc('cert')) > 0){ ?>
       <div class="col-sm-8">
      <select name="hazardno" class="form-control">
        <?php
          foreach (doc('cert') as $cert) {
            echo '<option value="'.$cert->certid.'">'.$cert->certno.'</option>';
          }
        ?>
      </select>
      </div>
      <?php }
      else
        { ?>
          <div class="col-sm-8">คุณยังไม่มีใบที่สามารถต่ออายุได้</div>
      <?php } ?>
      
  </div>