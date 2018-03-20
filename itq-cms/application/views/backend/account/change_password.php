
<div class="ibox-content" style="margin-top: 100px;">
    <form id="form-add_pr" class="form-horizontal" method="post" action="" >
           <ul class="error" >
                 <?php echo validation_errors(); ?>
            </ul>
        <div class="form-group"><label class="col-lg-2 control-label">Tên sử dụng :</label>
            <div class="col-lg-10">
                <input type="text" value="<?php echo $data['auth']['username']?>" placeholder="Tên sản phẩm" class="form-control" disabled>
            </div>
        </div>
        <div class="form-group"><label class="col-lg-2 control-label">Password :</label>
            <div class="col-lg-10">
                <input type="password" value="<?php if(isset($_post['old_password']) && !empty($_post['old_password'])){ echo htmlspecialchars($_post['old_password']); }else{ echo ""; } ?>" name="data[old_password]" placeholder="Password old" class="form-control">
            </div>
        </div>

        <div class="form-group"><label class="col-lg-2 control-label">Old password :</label>
            <div class="col-lg-10">
                <input type="password" value="<?php if(isset($_post['new_password']) && !empty($_post['new_password'])){ echo htmlspecialchars($_post['new_password']); }else{ echo ""; } ?>" name="data[new_password]" placeholder="Password new" class="form-control">
            </div>
        </div>
        <div class="form-group"><label class="col-lg-2 control-label">Xác nhận password :</label>
            <div class="col-lg-10">
                <input type="password" value="<?php if(isset($_post['confirm_password']) && !empty($_post['confirm_password'])){ echo htmlspecialchars($_post['confirm_password']); }else{ echo ""; } ?>" name="data[confirm_password]" placeholder="Password confirm" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-4">
                <input class="btn btn-info" type="submit" name="change_password" value="Thay đổi">
            </div>
            <div class="col-lg-offset-2 col-lg-4">
                <input class="btn btn-info" type="reset" name="" value="Làm lại">
            </div>
        </div>
    </form>
</div>
