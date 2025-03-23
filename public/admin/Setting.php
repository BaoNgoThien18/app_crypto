<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    require_once("../../public/admin/Header.php");
    require_once("../../public/admin/Sidebar.php");
?>
<?php
if(isset($_POST['update']) && $user['level'] == 'admin')
    
{
    foreach ($_POST as $key => $value)
    {
        $BNZ->update("setting", array(
            'value' => $value
        ), " `name` = '$key' ");
    }
    admin_msg_success('Lưu thành công', '', 1);
}

?>



<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cấu hình</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">CẤU HÌNH THÔNG TIN WEBSITE</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên website</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="webname" value="<?=$BNZ->site('webname');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mô tả website</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="description" value="<?=$BNZ->site('description');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Từ khóa tìm kiếm</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="keywords" value="<?=$BNZ->site('keywords');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Logo website</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="logo" value="<?=$BNZ->site('logo');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Favicon website</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="favicon" value="<?=$BNZ->site('favicon');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Ảnh giới thiệu website</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="image" value="<?=$BNZ->site('image');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ETH_address</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="ETH_address" value="<?=$BNZ->site('ETH_address');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ETH_qr</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="ETH_qr" value="<?=$BNZ->site('ETH_qr');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Config mail stmp</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <textarea type="text" name="mail_smtp"  class="form-control " rows="7"><?=$BNZ->site('mail_smtp');?></textarea>
                                           
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Plugin</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <textarea class="form-control" name="plugin"><?=$BNZ->site('plugin');?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>


                            <br>

                            <button type="submit" name="update" class="btn btn-primary btn-block">
                                <span>LƯU</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<?php 
    require_once("../../public/admin/Footer.php");
?>