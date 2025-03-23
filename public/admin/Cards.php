<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'QUẢN LÝ NẠP THẺ | '.$CMSNT->site('tenweb');
    require_once("../../public/admin/Header.php");
    require_once("../../public/admin/Sidebar.php");
?>
<?php

if(isset($_POST['btnSaveOption']) && $getUser['level'] == 'admin')
{
    if($CMSNT->site('status_demo') == 'ON')
    {
        msg_error("Chức năng này không khả dụng trên trang web DEMO!", "", 2000);
    }
    foreach ($_POST as $key => $value)
    {
        $CMSNT->update("options", array(
            'value' => $value
        ), " `key` = '$key' ");
    }
    msg_success('Lưu thành công', '', 500);
}
?>



<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Nạp thẻ cào</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">CẤU HÌNH NẠP THẺ</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                        <div class="mb-3 col-12">
                            <select class="form-control" aria-label="Default select example" name="bengachthe">
                            <?php if ($CMSNT->site('bengachthe') == 'thesieure.com') { ?>
                                <option selected value="thesieure.com">Thẻ siêu rẻ</option>
                                <option value="napthe1s.vn">Napthe1s</option>
                                   <option  value="webthe.vn">webthe.vn</option>
                            <?php } elseif ($CMSNT->site('bengachthe') == 'napthe1s.vn') { ?>
                               <option  value="webthevn">webthe.vn</option>
                                <option selected value="napthe1s.vn">Napthe1s</option>
                                <option value="thesieure.com">Thẻ siêu rẻ</option>
                       
                             <?php } elseif ($CMSNT->site('bengachthe') == 'webthe.vn') { ?>
                                <option selected value="webthe.vn">webthe.vn</option>
                                <option value="thesieure.com">Thẻ siêu rẻ</option>
                                 <option  value="napthe1s.vn">Napthe1s</option>
                            <?php } ?>
                            
                            </select>   
                        </div>
                        <div class="mb-3 col-12">
                            <div class="form-group">
                                <label>Partner ID</label>           
                                <input name="partnerid" type="text" class="form-control" value="<?=$CMSNT->site('partnerid')?>">
                            </div>
                        </div>
                        <div class="mb-3 col-12">
                            <div class="form-group">
                                <label>Partner Key</label>
                                <input name="partnerkey" type="text" class="form-control" value="<?=$CMSNT->site('partnerkey')?>">
                            </div>
                        </div>
                        <div class="mb-3 col-12">
                            <div class="form-group">
                                <label>Chiết khấu nạp thẻ</label>
                                <input name="chietkhau_napthe" type="number" class="form-control" value="<?=$CMSNT->site('chietkhau_napthe')?>">
                            </div>
                        </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Lưu ý nạp tiền</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <textarea class="textarea"
                                            name="luuy_naptien"><?=$CMSNT->site('luuy_naptien');?></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" name="btnSaveOption" class="btn btn-primary btn-block">
                                <span>LƯU</span></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">LỊCH SỬ NẠP THẺ</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>USERNAME</th>
                                        <th>SERI</th>
                                        <th>PIN</th>
                                        <th>LOẠI THẺ</th>
                                        <th>MỆNH GIÁ</th>
                                        <th>THỰC NHẬN</th>
                                        <th>THỜI GIAN</th>
                                        <th>TRẠNG THÁI</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach($CMSNT->get_list(" SELECT * FROM `cards` WHERE `username` IS NOT NULL ORDER BY id DESC ") as $row){
                                    ?>
                                    <tr>
                                        <td><?=$i;?> <?php $i++;?></td>
                                        <td><a href="<?=BASE_URL('Admin/User/Edit/'.$CMSNT->getUser($row['username'])['id']);?>"><?=$row['username'];?></a></td>
                                        <td><?=$row['seri'];?></td>
                                        <td><?=$row['pin'];?></td>
                                        <td><?=$row['loaithe']?></td>
                                        <td><?=format_cash($row['menhgia']);?></td>
                                        <td><?=format_cash($row['thucnhan']);?></td>
                                        <td><span class="badge badge-dark"><?=gettime($row['time'])?></span></td>
                                        <td><?=status($row['status']);?></td>
                                       
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
    require_once("./Footer.php");
?>