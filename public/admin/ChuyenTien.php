<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'CẤU HÌNH | '.$CMSNT->site('tenweb');


    if(isset($_POST['btnSaveOption']) && $getUser['level'] == 'admin')
{
   
    $CMSNT->insert("server", array(
        'site' => check_string($_POST['site']),
        'token' => check_string($_POST['token']),
        'password' => check_string($_POST['password']),
        'time' => time(),
    ));
  
}

if (isset($_GET['remove'])) {
    $CMSNT->remove("server"," `id` = '".$_GET['remove']."' ");
}




if (isset($_POST['getmoney'])) {
    $tokens = $CMSNT->get_list(" SELECT * FROM `server` ");
    foreach( $tokens as $token ) {
        $CMSNT->update('server', array(
            'money' => getMoney($token['token']),
            ), " `id` = '".$token['id']."' "
        );
    }
}

if (isset($_POST['chuyentien'])) {

    
    $token = check_string($_POST['token']);
    $money = check_string($_POST['money']);
    $sdtnguoinhan = check_string($_POST['sdt']);
    $password = check_string($_POST['password']);
    $noidung = check_string($_POST['noidung']);

    $data = payment_momo($token, $sdtnguoinhan, $password, $money, $noidung);

    $CMSNT->insert("chuyentien", array(
        'money' => $money,
        'sdt' => $sdtnguoinhan,
        'noidung' => $noidung,
        'status' => $data['status'],
        'msg' => $data['msg'],
        'time' => time(),
    ));
    
    
}

    require_once("../../public/admin/Header.php");
    require_once("../../public/admin/Sidebar.php");
?>
<?php


?>


<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Server</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thêm api momo</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Site</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" required name="site" value=""
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Token momo</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" required name="token" value=""
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password momo</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" required name="password" value=""
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            </div>
                            <button type="submit" name="btnSaveOption" class="btn btn-primary btn-block">
                                <span>Thêm</span></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Chuyển tiền</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Token momo</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" required name="token" value="<?=$_GET['token']?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password momo</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" required name="password" value="<?=$_GET['password']?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Money </label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" required name="money" value="<?=$_GET['money']?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">SĐT</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" required name="sdt" value=""
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                          

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nội dung</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" required name="noidung" value=""
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            </div>
                            <button type="submit" name="chuyentien" class="btn btn-primary btn-block">
                                <span>Chuyển</span></button>
                        </form>
                    </div>
            </div>


            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">DANH SÁCH Token</h3>
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
                                        <th>Site</th>
                                        <th>Token</th>
                                        <th>Password</th>
                                        <th>Money</th>
                                        <th>Status</th>
                                        <th>THAO TÁC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach($CMSNT->get_list(" SELECT * FROM `server` ORDER BY id DESC ") as $row){
                                    ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td><a target="_blank" href="//<?=$row['site'];?>"><?=$row['site'];?></a></td>
                                        <td><?=$row['token'];?></td>
                                        <td><?=$row['password'];?></td>
                                        <td class="text-success"><?=number_format($row['money']) ? : $row['money']?></td>
                                        <td><?=$row['status'];?></td>
                                        <td>
                                            <a type="button" onclick="return  confirm('Confirm')" href="<?=BASE_URL('Admin/ChuyenTien?remove=');?><?=$row['id'];?>"
                                                class="btn btn-sm btn-danger">
                                                <span>Remove</span>
                                            </a>
                                            <a type="button"  href="<?=BASE_URL('Admin/ChuyenTien?pay=');?><?=$row['id'];?>&token=<?=$row['token'];?>&password=<?=$row['password'];?>&money=<?=$row['money'];?>"
                                                class="btn btn-sm btn-success">
                                                <span>Pay</span>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <form action="" method="post">
                        <button name="getmoney" class="btn btn-sm btn-success m-3">
                            Check money
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Chuyển tiền</h3>
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
                                        <th>#</th>
                                        <th>Money</th>
                                        <th>Nội dung</th>
                                        <th>Số đt Nhận</th>
                                        <th>Status</th>
                                        <th>Message</th>
                                        <th>Time</th>
                                   
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach($CMSNT->get_list(" SELECT * FROM `chuyentien` ORDER BY id DESC ") as $row){
                                    ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td class="text-bold text-success"><?=format_cash($row['money']);?></td>
                                        <td><?=$row['sdt'];?></td>
                                        <td><?=$row['noidung'];?></td>
                                        <td><?=$row['status'];?></td>
                                        <td><?=$row['msg'];?></td>
                                        <td><?=gettime($row['time'])?></td>
                                    
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php 
    require_once("../../public/admin/Footer.php");
?>