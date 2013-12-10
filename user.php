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
 <span align="center"><h1>User Page</h1></span>

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

            <a href="register.php" style="width:256px">
            <div>
                <img src="<?php echo resolveURIHeader("image/cl-logo.256p.png");  ?>" value="เพิ่มผู้ใช้ใหม่">
            </div>
            <div align="center">
                <br>เพิ่มผู้ใช้ใหม่
            </div>
            </a>
            
        </td>
        <td>
            <a href="register.php" style="width:256px">
                <div>
                  <img src="<?php echo resolveURIHeader("image/cl-logo.256p.png");  ?>" value="จัดการผู้ใช้ในระบบ">
                </div>
                <div align="center">
                  <br>จัดการผู้ใช้ในระบบ
                </div>
            </a>
        </td>
        </tr>    
    </table>
    <!--
    <input type="button" value="เพิ่มผู้ใช้ใหม่" class="btn btn-success" onclick="parent.location='register.php'">
    <br><br>
    <input type="button" value="จัดการผู้ใช้ในระบบ" class="btn btn-success" onclick="parent.location='register.php'">
    -->

    <?php

}
else if($user->is_group("client"))
{
    ?>
    <table border = 0 align="center">
    <tr>
    <td>
                <a href="register.php" style="width:256px">
                    <div>
                       <img src="<?php echo resolveURIHeader("image/cl-logo.256p.png");  ?>" value="ขออนุญาตผลิตวัตถุอันตราย">  
                    </div>
                    <div align="center">
                       <br>ขออนุญาตผลิตวัตถุอันตราย
                    </div>
                </a>
    </td>           
    <td>
                <a href="register.php" style="width:256px">
                    <div>
                       <img src="<?php echo resolveURIHeader("image/cl-logo.256p.png");  ?>" value="ขออนุญาตนำเข้าวัตถุอันตราย">
                    </div>
                    <div align="center">
                       <br>ขออนุญาตนำเข้าวัตถุอันตราย
                    </div>
                </a>
    </td>
    <td>
                <a href="register.php" style="width:256px">
                    <div>
                       <img src="<?php echo resolveURIHeader("image/cl-logo.256p.png");  ?>" value="ขออนุญาตส่งออกวัตถุอันตราย">
                    </div>
                    <div align="center">
                       <br>ขออนุญาตส่งออกวัตถุอันตราย
                    </div>
                </a>            
    </td>
    </tr>
    <tr>
    <td>
                <a href="register.php" style="width:256px">
                    <div>
                       <img src="<?php echo resolveURIHeader("image/cl-logo.256p.png");  ?>" value="ขออนุญาตครอบครองวัตถุอันตราย">  
                    </div>
                    <div align="center">
                       <br>ขออนุญาตครอบครองวัตถุอันตราย
                    </div>
                </a>
    </td>
    <td>
                <a href="register.php" style="width:256px">
                    <div>
                       <img src="<?php echo resolveURIHeader("image/cl-logo.256p.png");  ?>" value="ขอขึ้นทะเบียนวัตถุอันตราย">
                    </div>
                    <div align="center">
                       <br>ขอขึ้นทะเบียนวัตถุอันตราย
                    </div>
                </a>
    </td>
    <td>
                <a href="register.php" style="width:256px">
                    <div>
                       <img src="<?php echo resolveURIHeader("image/cl-logo.256p.png");  ?>" value="ขอต่ออายุทะเบียนวัตถุอันตราย">
                    </div>
                    <div align="center">
                       <br>ขอต่ออายุทะเบียนวัตถุอันตราย
                    </div>
                </a>            
    </td>
            <!--
            <div style="display: inline">
                <a href="#" class="thumbnail" style="width:256px">
                    <img src="<?php echo resolveURIHeader("image/cl-logo.png");  ?>">
                </a>
            </div>
            -->
        
    
    <!--
    <input type="button" value="ขออนุญาตผลิตวัตถุอันตราย" class="btn btn-success" onclick="parent.location='register.php'">
    <br><br>
    <input type="button" value="ขออนุญาตนำเข้าวัตถุอันตราย" class="btn btn-success" onclick="parent.location='register.php'">
    <br><br>
    <input type="button" value="ขออนุญาตส่งออกวัตถุอันตราย" class="btn btn-success" onclick="parent.location='register.php'">
    <br><br>
    <input type="button" value="ขออนุญาตครอบครองวัตถุอันตราย" class="btn btn-success" onclick="parent.location='register.php'">
    <br><br>
    <input type="button" value="ขอขึ้นทะเบียนวัตถุอันตราย" class="btn btn-success" onclick="parent.location='register.php'">
    <br><br>
    <input type="button" value="ขอต่ออายุทะเบียนวัตถุอันตราย" class="btn btn-success" onclick="parent.location='register.php'">
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

<!--
    <input type="button" value="แสดงคำร้องที่เข้ามาใหม่" class="btn btn-success" onclick="parent.location='register.php'">
    <br><br>
    <input type="button" value="แสดงคำร้องที่ฝ่ายรับดำเนินการอยู่" class="btn btn-success" onclick="parent.location='register.php'">
    <br><br>
    <input type="button" value="แสดงคำร้องที่ฉันรับดำเนินการอยู่" class="btn btn-success" onclick="parent.location='register.php'">
-->
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
<!--
    <input type="button" value="แสดงคำร้องที่เข้ามาใหม่" class="btn btn-success" onclick="parent.location='register.php'">
    <br><br>
    <input type="button" value="แสดงคำร้องที่ฝ่ายรับดำเนินการอยู่" class="btn btn-success" onclick="parent.location='register.php'">    
    <br><br>
    <input type="button" value="แสดงคำร้องที่ฉันรับดำเนินการอยู่" class="btn btn-success" onclick="parent.location='register.php'">
-->
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
<!--
    <input type="button" value="แสดงคำร้องที่เข้ามาใหม่" class="btn btn-success" onclick="parent.location='register.php'">
    <br><br>
    <input type="button" value="แสดงคำร้องที่ฝ่ายรับดำเนินการอยู่" class="btn btn-success" onclick="parent.location='register.php'">    
    <br><br>
    <input type="button" value="แสดงคำร้องที่ฉันรับดำเนินการอยู่" class="btn btn-success" onclick="parent.location='register.php'">
-->
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
<!--
    <input type="button" value="แสดงคำร้องใหม่ที่รอการชำระเงิน" class="btn btn-success" onclick="parent.location='register.php'">
    <br><br>
    <input type="button" value="แสดงคำร้องใหม่ที่รอการตรวจสอบหลักฐานชำระเงิน" class="btn btn-success" onclick="parent.location='register.php'"> 
    <br><br>
    <input type="button" value="แสดงคำร้องใหม่ที่เกินกำหนดชำระเงิน" class="btn btn-success" onclick="parent.location='register.php'">
-->
    <?php
}



include(resolveHeader('includes/footer.php'));
 ?>