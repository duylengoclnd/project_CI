
<div class="ibox-content" style="margin-top:50px">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Tên bài viết</th>
            <th>Ngày tạo</th>
            <th>Ngày sửa</th>
            <th>Hiển thị</th>
            <th>Mã</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        <?php if (isset($_list) && count($_list)) { ?>
        <tbody>

        <?php foreach ($_list as  $valueList) { ?>
            <tr>
                <td><?php echo $valueList['id'] ?></td>
                <td><?php echo $valueList['title'] ?></td>
                <td><?php echo $valueList['allow'] ?></td>
                <td><?php echo $valueList['created'] ?></td>
                <td><?php echo $valueList['updated'] ?></td>
                <td>gdfgdfD</td>

                <td>
                    <a href=""><span class="btn btn-primary btn-xs"><i class="fa fa-unlock" aria-hidden="true"></i><i class="fa fa-lock" aria-hidden="true"></i></span></a>
                    <a href="" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
                    <a href="" class="btn btn-danger btn-xs check"><i class="fa fa-trash-o "></i></a>
                </td>

            </tr>

        <?php } ?>
        </tbody>
        <?php } ?>
    </table>
<!--  Phân trang  -->
<?php echo $pagination; ?>
</div>