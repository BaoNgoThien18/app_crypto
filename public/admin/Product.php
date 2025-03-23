<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'QUẢN LÝ NHÓM | '.$CMSNT->site('tenweb');
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
?>

<?php
/* BẢN QUYỀN THUỘC VỀ CMSNT.CO | NTTHANH LEADER NT TEAM */
if(isset($_GET['id']) && $getUser['level'] == 'admin')
{
    $row = $CMSNT->get_row(" SELECT * FROM `category` WHERE `id` = '".check_string($_GET['id'])."'  ");
    if(!$row)
    {
        admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 100);
    }
}
else
{
    admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 0);
}

if(isset($_POST['ThemTaiKhoan']) && $getUser['level'] == 'admin' )
{
    if($CMSNT->site('status_demo') == 'ON')
    {
        admin_msg_warning("Chức năng này không khả dụng trên trang web DEMO!", "", 2000);
    }
 
    $listimg = '';
   
    foreach($_FILES['listimg']['name'] as $name => $value)
    {
        $rand = random("QWERTYUIOPASDFGHJKLZXCVBNM0123456789", 6);
        $uploads_dir = '../../assets/storage/images';
        $tmp_name = $_FILES['listimg']['tmp_name'][$name];
        $url_listimg = "/product_".$rand.".png";
        move_uploaded_file($tmp_name, $uploads_dir.$url_listimg);
        $listimg = $listimg.PHP_EOL.$url_listimg;
    }


    if ( $CMSNT->insert("product", array(
        'name'       => $_POST['name'],
        'price'         => check_string($_POST['price']),
        'chitiet'       => $_POST['chitiet'],
        'view'         => check_string($_POST['view']),
        'luotmua'         => check_string($_POST['luotmua']),
        'demo'         => check_string($_POST['demo']),
        'taoweb'         => check_string($_POST['taoweb']),
        'download'         => check_string($_POST['download']),
        'listimg'       => check_string($listimg),
        'category'        => check_string($_GET['id']),
        'created'    => time(),
    ))) admin_msg_success("Thêm tài khoản thành công", '', 100);

    
}


?>


<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách tài khoản <?=$row['title'];?></h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">THÊM TÀI KHOẢN MỚI</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Giá bán</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="number" value="0" name="price" class="form-control" >
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Lượt xem</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="number" value="0" name="view" class="form-control" >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Lượt mua</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="number" value="0" name="luotmua" class="form-control" >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Demo</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" value="" name="demo" class="form-control" >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Download</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" value="" name="download" class="form-control" >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tạo web</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="number" value="" name="taoweb" class="form-control" >
                                    </div>
                                </div>
                            </div>


                          
                        
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Chi tiết</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <textarea name="chitiet" rows="5" class="form-control" ></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">List ảnh mô tả</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="form-control" id="exampleInputFile"
                                                    name="listimg[]" multiple>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                         

                            <button type="submit" name="ThemTaiKhoan" class="btn btn-primary btn-block">
                                <span>THÊM NGAY</span></button>
                            <a type="button" href="<?=BASE_URL('Admin/Groups/'.$row['id']);?>"
                                class="btn btn-danger btn-block waves-effect">
                                <span>TRỞ LẠI</span>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
           
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">DANH SÁCH TÀI KHOẢN</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>PRICE</th>
                                        <th>THỜI GIAN ĐĂNG</th>
                                        <th>THAO TÁC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach($CMSNT->get_list(" SELECT * FROM `product` WHERE `category` = '".check_string($_GET['id'])."'  ORDER BY id DESC ") as $row){
                                    ?>
                                    <tr>
                                        <td width=""><?=$i++;?></td>
                                        <td width="">#<?=$row['id'];?></td>
                                        <td width=""><?=$row['name'];?></td>
                                        <td width="" class="text-success"><?=number_format($row['price'])?>đ</td>
                                        <td><?=gettime($row['created'])?></td>
                                       
                                        <td>
                                            <a class="btn btn-primary"
                                                href="<?=BASE_URL('Admin/Product/Edit/'.$row['id']);?>">
                                                <span>Chỉnh</span></a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>



<?php 
    require_once(__DIR__."/Footer.php");
?>