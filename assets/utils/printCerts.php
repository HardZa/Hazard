
<div class="form-group" >
      <label for="certidref" class="col-sm-4 control-label"><?php echo doc('print_label');?></label>
      <div class="col-sm-8">
          <?php if(count(doc('cert')) > 0){ ?>
       <div class="col-sm-8">
      <select name="certidref" class="form-control">
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
</div>
