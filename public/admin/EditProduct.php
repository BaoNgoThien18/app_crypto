<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'CHỈNH SỬA TÀI KHOẢN | '.$CMSNT->site('tenweb');
?>

<?php


/* BẢN QUYỀN THUỘC VỀ CMSNT.CO | NTTHANH LEADER NT TEAM */
if(isset($_GET['id']) && $getUser['level'] == 'admin')
{
    $row = $CMSNT->get_row(" SELECT * FROM `product` WHERE `id` = '".check_string($_GET['id'])."'  ");
    if(!$row)
    {
        header("Location: /Admin");
    }
}



if(isset($_POST['LuuTaiKhoan']) && $getUser['level'] == 'admin' )
{
    $listimg = $row['listimg'];
  
    if (isset($_FILES['listimg']['name'][0]) && $_FILES['listimg']['name'][0] != '') {
        $listimg = '';
        foreach($_FILES['listimg']['name'] as $name => $value)
        {
            $rand = random("QWERTYUIOPASDFGHJKLZXCVBNM0123456789", 6);
            $uploads_dir = '../../assets/storage/images';
            $tmp_name = $_FILES['listimg']['tmp_name'][$name];
            $url_listimg = "/product_".$rand.".png";
            $isUpload = move_uploaded_file($tmp_name, $uploads_dir.$url_listimg);
            $listimg = $listimg.PHP_EOL.$url_listimg;
            if($isUpload)
            {
                $CMSNT->update("accounts", array(
                'listimg' => $listimg
                ), " `id` = '".$row['id']."' ");
            }
            
        }
    }
    $CMSNT->update("product", array(
        'name'       => $_POST['name'],
        'price'         => check_string($_POST['price']),
        'chitiet'       => $_POST['chitiet'],
        'view'         => check_string($_POST['view']),
        'demo'         => check_string($_POST['demo']),
        'download'         => check_string($_POST['download']),
        'taoweb'         => check_string($_POST['taoweb']),
        'luotmua'         => check_string($_POST['luotmua']),
        'listimg'       => check_string($listimg),
        'created'       => time(),
    ), " `id` = '".$row['id']."' ");
    header("Location: /Admin/Product/Edit/" . $_GET['id']);

}

if (isset($_POST['delete'])) {
    $CMSNT->remove('product', " `id` = '".$_GET['id']."' ");
    header("Location: /Admin/Product/" . $row['category']);
}

?>


<?php
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
?>
<?php

?>



<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chỉnh sửa tài khoản</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">CHỈNH SỬA TÀI KHOẢN</h3>
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
                                        <input type="text" value="<?=$row['name']?>" name="name" class="form-control" >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Giá bán</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="number" value="<?=$row['price']?>" name="price" class="form-control" >
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Lượt xem</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="number" value="<?=$row['view']?>" name="view" class="form-control" >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Lượt mua</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="number" value="<?=$row['luotmua']?>" name="luotmua" class="form-control" >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Demo</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" value="<?=$row['demo']?>" name="demo" class="form-control" >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Download</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" value="<?=$row['download']?>" name="download" class="form-control" >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tạo web</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="number" value="<?=$row['taoweb']?>" name="taoweb" class="form-control" >
                                    </div>
                                </div>
                            </div>



                          
                        
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Chi tiết</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <textarea name="chitiet"  rows="5" class="form-control" ><?=$row['chitiet']?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">List ảnh mô tả</label>

                                <div class="col-12 py-3">
                                    <div class="m-2 rounded">
                                        <?php foreach(explode(PHP_EOL, $row['listimg']) as $img) { ?>
                                            <img width="128px" src="<?=BASE_URL('assets/storage/images/'.$img);?>" alt="">
                                         <?php } ?>
                                    </div>
                                </div>

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

                            <button type="submit" name="LuuTaiKhoan" class="btn btn-primary btn-block">
                                <span>LƯU NGAY</span></button>
                            <a type="button" href="<?=BASE_URL('Admin/Product/'.$row['category']);?>"
                                class="btn btn-danger btn-block waves-effect">
                                <span>TRỞ LẠI</span>
                            </a>
                            <button name="delete" type="submit"
                                class="btn btn-danger waves-effect mt-2">
                                <span>XÓA</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
</div>


<script>
$(function() {
    $("#datatable").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
});
</script>






<?php 
    require_once(__DIR__."/Footer.php");
?>