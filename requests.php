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
        $docData = array(
                'requests' => $user->get_requests()
            );
        include(resolveHeader(Config::get('template/list').'list.php'));
    }
    else if($user->is_group("hazcontrol"))
    {
        $docData = array(
                'requests' => Request::get_requests()
            );
        include(resolveHeader(Config::get('template/list').'list.php'));
    }
    else if($user->is_group("plantprotection"))
    {

    }
    else if($user->is_group("agriproduction"))
    {
    }
    else if($user->is_group("cashier"))
    {
        $docData = array(
                'requests' => Request::get_requests_by_progress(array(PRG_WAIT_PAY,PRG_ACCEPT_PAY))
            );
        include(resolveHeader(Config::get('template/list').'list.php'));
    }



    include(resolveHeader('includes/footer.php'));
     ?>
</div>