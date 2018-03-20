
<div class="ibox-content" style="margin-top:50px">
    <form id="form-add_pr" class="form-horizontal" method="post" action="" >
        <ul class="error" >
             <?php echo validation_errors(); ?>
        </ul>
        <div class="form-group"><label class="col-lg-2 control-label">Tiêu đề :</label>
            <div class="col-lg-10">
                <input type="text" value="<?php if(isset($_post['title']) && !empty($_post['title'])){ echo htmlspecialchars($_post['title']); }else{ echo ""; } ?>" name="data[title]" placeholder="Tên sản phẩm" class="form-control">
            </div>
        </div>

        <div class="form-group"><label class="col-lg-2 control-label">Nội dung :</label>
            <div class="col-lg-10">
                <textarea class="form-control" rows="7" name="data[groups]" id="" cols="30" placeholder="Nhập text..." value="<?php if(isset($_post['groups']) && !empty($_post['groups'])){ echo htmlspecialchars($_post['groups']); }else{ echo ""; } ?>"></textarea>
            </div>
        </div>

        <div class="form-group"><label class="col-sm-2 control-label">Active :</label>

            <div class="col-sm-10">
                <div class="i-checks"><label> <input type="radio" value="1" name="data[allow]" checked> <i></i>Cho phép</label></div>
                <div class="i-checks"><label> <input type="radio" value="0" name="data[allow]"> <i></i>Không cho phép  </label></div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <input class="btn btn-info" type="submit" name="add" value="Thêm Mới">
            </div>
        </div>
    </form>
</div>
