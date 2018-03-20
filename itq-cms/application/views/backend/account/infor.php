
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
        <div class="form-group"><label class="col-lg-2 control-label">Email :</label>
            <div class="col-lg-10">
                <input type="text" value="<?php if(isset($_post['email']) && !empty($_post['email'])){ echo htmlspecialchars($_post['email']); }else{ echo ""; } ?>" name="data[email]" placeholder="Email" class="form-control">
            </div>
        </div>

        <div class="form-group"><label class="col-lg-2 control-label">Tên đầy đủ</label>
            <div class="col-lg-10">
                <input type="text" value="<?php if(isset($_post['fullname']) && !empty($_post['fullname'])){ echo htmlspecialchars($_post['fullname']); }else{ echo ""; } ?>" name="data[fullname]" placeholder="Tên đầy đủ" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-4">
                <input class="btn btn-info" type="submit" name="change" value="Sửa">
            </div>
            <div class="col-lg-offset-2 col-lg-4">
                <input class="btn btn-info" type="reset" name="" value="Làm lại">
            </div>
        </div>
    </form>
</div>
