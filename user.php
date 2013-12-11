<div class="user-container">
    <?php
     
     require_once('core/init.php');
     include(resolveHeader('includes/header.php'));
     $user = User::get_user();
     $error = null;
     
     if( $user != null && Input::exists() )
     {
        $validate = new Validate();
        $validate->check( $_POST ,array(
            "name" => array(
                "required"=>true,
                "min"=>1,
                "max"=>30
            )
        ));
        if( $validate->passed() )
        {
            $user->set( 'userrealname' , Input::post('name')  );
            $user->save();
        }
        else
        {
            $error = $validate->errors();
        }
     }

     ?>

    <span align="center"><h1>User Page <?php echo User::get_user()->get('userrealname') ?></h1></span>

    <?php if( $user == null ){ ?> 
            You're not logged in.
    <?php } else {
            
            
            if(Input::get('edit')==1)
            {
            if( $error != null )
            {
                foreach( $error as $err_msg )
                {
                    echo "error : $error<br>";
                }
            }
    ?>
            
             <form class="form-horizontal" method="post" action="" role="form">
                <div class="form-group">
                    <label for="username" class="col-sm-offset-1 col-sm-2 control-label">Username</label>
                    <div class="col-sm-6">
                        <input type="text" name="username" class="form-control" autocomplete="off" value="<?php echo $user->get('username'); ?>" id="username" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-offset-1 col-sm-2 control-label">Name</label> 
                    <div class="col-sm-6">
                        <input type="text" name="name" class="form-control" value="<?php echo $user->get('userrealname'); ?>" id="name">
                    </div>
                </div>
                <input type="submit" value="Edit" class="btn btn-success">
             </form>
            
    <?php 
            
            }
        }       


    $user = User::get_user();
    if($user->is_group("registrar"))
    {
        ?>
        <table border = 0 align="center">
            <tr>
               <td>
                    <div class="block-option">
                        <a href="register.php" class="block-link" style="text-decoration:none;">
                            <div class="block-option-image">
                                <img src="<?php echo resolveURIHeader("image/add_user.png");?>" class="img-circle">
                            </div>
                            <div align="center">
                                <br>
                                <h3>เพิ่มผู้ใช้ใหม่</h3>
                            </div>
                        </a>
                    </div>
                </td>
                <td>
                    <div class="block-option">
                        <a href="register.php" class="block-link" style="text-decoration:none;">
                            <div class="block-option-image">
                              <img src="<?php echo resolveURIHeader("image/edit_user.png");?>" class="img-circle">
                            </div>
                            <div align="center">
                              <br>
                              <h3>จัดการผู้ใช้ในระบบ</h3>
                            </div>
                        </a>
                    </div>
                </td>
            </tr>    
        </table>

        <?php

    }
    else if($user->is_group("client"))
    {
        ?>
        <table border = 0 align="center">
        <tr>
        <td>
            <div class="block-option">
                <a href="register.php" class="block-link" style="text-decoration:none;">
                    <div class="block-option-image">
                       <img src="<?php echo resolveURIHeader("image/edit_user.png");  ?>" class="img-circle">  
                    </div>
                    <div align="center">
                       <br>
                       <h4>ขออนุญาตผลิตวัตถุอันตราย</h4>
                    </div>
                </a>
            </div>
        </td>           
        <td>
            <div class="block-option">
                <a href="register.php" class="block-link" style="text-decoration:none;">
                    <div class ="block-option-image">
                       <img src="<?php echo resolveURIHeader("image/add_user.png");  ?>" class="img-circle">
                    </div>
                    <div align="center">
                       <br>
                       <h4>ขออนุญาตนำเข้าวัตถุอันตราย</h4>
                    </div>
                </a>
            </div>
        </td>
        <td>
            <div class="block-option">
                <a href="register.php" class="block-link" style="text-decoration:none;">
                    <div class ="block-option-image">
                       <img src="<?php echo resolveURIHeader("image/add_user.png");  ?>" class="img-circle">
                    </div>
                    <div align="center">
                       <br>
                       <h4>ขออนุญาตส่งออกวัตถุอันตราย</h4>
                    </div>
                </a>
            </div>
        </td>
        </tr>
        <tr>
        <td>
            <div class="block-option">
                <a href="register.php" class="block-link" style="text-decoration:none;">
                    <div class ="block-option-image">
                       <img src="<?php echo resolveURIHeader("image/add_user.png");  ?>" class="img-circle">
                    </div>
                    <div align="center">
                       <br>
                       <h4>ขออนุญาตครอบครองวัตถุอันตราย</h4>
                    </div>
                </a>
            </div>
        </td>
        <td>
            <div class="block-option">
                <a href="register.php" class="block-link" style="text-decoration:none;">
                    <div class ="block-option-image">
                       <img src="<?php echo resolveURIHeader("image/add_user.png");  ?>" class="img-circle">
                    </div>
                    <div align="center">
                       <br>
                       <h4>ขอขึ้นทะเบียนวัตถุอันตราย</h4>
                    </div>
                </a>
            </div>
        </td>
        <td>
            <div class="block-option">
                <a href="register.php" class="block-link" style="text-decoration:none;">
                    <div class ="block-option-image">
                       <img src="<?php echo resolveURIHeader("image/add_user.png");  ?>" class="img-circle">
                    </div>
                    <div align="center">
                       <br>
                       <h4>ขอต่ออายุทะเบียนวัตถุอันตราย</h4>
                    </div>
                </a>
            </div>
        </td>
                <!--
                <div style="display: inline">
                    <a href="#" class="thumbnail" style="width:256px">
                        <img src="<?php echo resolveURIHeader("image/cl-logo.png");  ?>">
                    </a>
                </div>
                -->
        <?php

    }
    else if($user->is_group("hazcontrol"))
    {
        ?>
        <table border = 0 align="center">
        <tr>
        <td>
                    <a href="register.php" style="width:256px">
                        <div>
                           <img src="<?php echo resolveURIHeader("image/cl-logo.256p.png");  ?>" value="แสดงคำร้องที่เข้ามาใหม่">   
                        </div>
                        <div align="center">
                           <br>แสดงคำร้องที่เข้ามาใหม่
                        </div>
                    </a>
        </td>           
        <td>
                    <a href="register.php" style="width:256px">
                        <div>
                           <img src="<?php echo resolveURIHeader("image/cl-logo.256p.png");  ?>" value="แสดงคำร้องที่ฝ่ายรับดำเนินการอยู่">
                        </div>
                        <div align="center">
                           <br>แสดงคำร้องที่ฝ่ายรับดำเนินการอยู่
                        </div>
                    </a>
        </td>
        <td>
                    <a href="register.php" style="width:256px">
                        <div>
                           <img src="<?php echo resolveURIHeader("image/cl-logo.256p.png");  ?>" value="แสดงคำร้องที่ฉันรับดำเนินการอยู่">
                        </div>
                        <div align="center">
                           <br>แสดงคำร้องที่ฉันรับดำเนินการอยู่
                        </div>
                    </a>            
        </td>
        </tr>

        <?php

    }
    else if($user->is_group("plantprotection"))
    {
        ?>
        <table border = 0 align="center">
        <tr>
        <td>
                    <a href="register.php" style="width:256px">
                        <div>
                           <img src="<?php echo resolveURIHeader("image/cl-logo.256p.png");  ?>" value="แสดงคำร้องที่เข้ามาใหม่">   
                        </div>
                        <div align="center">
                           <br>แสดงคำร้องที่เข้ามาใหม่
                        </div>
                    </a>
        </td>           
        <td>
                    <a href="register.php" style="width:256px">
                        <div>
                           <img src="<?php echo resolveURIHeader("image/cl-logo.256p.png");  ?>" value="แสดงคำร้องที่ฝ่ายรับดำเนินการอยู่">
                        </div>
                        <div align="center">
                           <br>แสดงคำร้องที่ฝ่ายรับดำเนินการอยู่
                        </div>
                    </a>
        </td>
        <td>
                    <a href="register.php" style="width:256px">
                        <div>
                           <img src="<?php echo resolveURIHeader("image/cl-logo.256p.png");  ?>" value="แสดงคำร้องที่ฉันรับดำเนินการอยู่">
                        </div>
                        <div align="center">
                           <br>แสดงคำร้องที่ฉันรับดำเนินการอยู่
                        </div>
                    </a>            
        </td>
        </tr>

        <?php

    }
    else if($user->is_group("agriproduction"))
    {
        ?>
        <table border = 0 align="center">
        <tr>
        <td>
                    <a href="register.php" style="width:256px">
                        <div>
                           <img src="<?php echo resolveURIHeader("image/cl-logo.256p.png");  ?>" value="แสดงคำร้องที่เข้ามาใหม่">   
                        </div>
                        <div align="center">
                           <br>แสดงคำร้องที่เข้ามาใหม่
                        </div>
                    </a>
        </td>           
        <td>
                    <a href="register.php" style="width:256px">
                        <div>
                           <img src="<?php echo resolveURIHeader("image/cl-logo.256p.png");  ?>" value="แสดงคำร้องที่ฝ่ายรับดำเนินการอยู่">
                        </div>
                        <div align="center">
                           <br>แสดงคำร้องที่ฝ่ายรับดำเนินการอยู่
                        </div>
                    </a>
        </td>
        <td>
                    <a href="register.php" style="width:256px">
                        <div>
                           <img src="<?php echo resolveURIHeader("image/cl-logo.256p.png");  ?>" value="แสดงคำร้องที่ฉันรับดำเนินการอยู่">
                        </div>
                        <div align="center">
                           <br>แสดงคำร้องที่ฉันรับดำเนินการอยู่
                        </div>
                    </a>            
        </td>
        </tr>

        <?php

    }
    else if($user->is_group("cashier"))
    {
        ?>
        <table border = 0 align="center">
        <tr>
        <td>
                    <a href="register.php" style="width:256px">
                        <div>
                           <img src="<?php echo resolveURIHeader("image/cl-logo.256p.png");  ?>" value="แสดงคำร้องใหม่ที่รอการชำระเงิน">    
                        </div>
                        <div align="center">
                           <br>แสดงคำร้องใหม่ที่รอการชำระเงิน
                        </div>
                    </a>
        </td>           
        <td>
                    <a href="register.php" style="width:256px">
                        <div>
                           <img src="<?php echo resolveURIHeader("image/cl-logo.256p.png");  ?>" value="แสดงคำร้องใหม่ที่รอการตรวจสอบหลักฐานชำระเงิน">
                        </div>
                        <div align="center">
                           <br>แสดงคำร้องใหม่ที่รอการตรวจสอบหลักฐานชำระเงิน
                        </div>
                    </a>
        </td>
        <td>
                    <a href="register.php" style="width:256px">
                        <div>
                           <img src="<?php echo resolveURIHeader("image/cl-logo.256p.png");  ?>" value="แสดงคำร้องใหม่ที่เกินกำหนดชำระเงิน">
                        </div>
                        <div align="center">
                            <br>แสดงคำร้องใหม่ที่เกินกำหนดชำระเงิน
                        </div>
                    </a>            
        </td>
        </tr>
        <?php
    }



    include(resolveHeader('includes/footer.php'));
     ?>
</div>