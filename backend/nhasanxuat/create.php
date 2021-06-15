<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salomon</title>

    <?php include_once __DIR__ . '/../layout/meta.php'; ?>



    <!-- css sử dụng cho toàn hệ thống STAR -->
    <!-- CSS boostrap -->
    <!-- Font awesome -->
    <?php include_once __DIR__ . '/../layout/styles.php'; ?>
    <!-- css sử dụng cho toàn hệ thống END -->
    <style>
        div {
            border: 1px solid red;
        }
    </style>
</head>

<body>
    <!-- Header star -->
    <?php include_once __DIR__ . '/../layout/partials/header.php  '; ?>
    <!-- Header end -->

    <!-- Content star -->
    <div class="container-fluid">
        <div class="row">
            <!-- SideBar Star -->
            <?php include_once __DIR__ . '/../layout/partials/sliderbar.php'; ?>
            <!-- Sidebar End -->

            <!-- Main Content Star -->
            <div class="col-md 9">
                <h1>Thên mới nhà sản xuất</h1>

                <form id="frmcreat" method="post" action="">
                    <div class="form-group">
                        <label for="nsx_ten">tên nhà sản xuất</label>
                        <input type="text" class="form-control" id="nsx_ten" name="nsx_ten">
                    </div>

                    <div class="form-group">
                    <button type="submit" name ="btnSave" id="btnSave" class="btn btn-primary">Lưu dữ liệu</button>
                    </div>
                </form>

                <?php 
                    if(isset($_POST['btnSave'] )) {

                        include_once __DIR__ . '/../../dbconnect.php';
                        //2  chuẩn bị câu lệnh select
                        $nxs_ten = $_POST['nsx_ten'];

                        //kiểm tra validate
                        // kiểm tra ràng buộc dữ liệu
                        // tạo biến lỗi để thồn báo lỗi

                        $errors = [];
                        
                        if(empty($nsx_ten) ) {
                            $errors['nsx_ten'][] = [
                                'rule' => 'required',
                                'rule_value' => true,
                                'value' => $nsx_ten,
                                'msg' => 'Vui lòng nhập tên nhà sản xuất'
                            ];
                        }

                        //minlength 3
                        if( !empty($nsx_ten) && strlen($nsx_ten) <3 ) {
                            $errors['nsx_ten'][] = [
                                'rule' => 'minlength',
                            'rule_value' => 3,
                            'value' => $nsx_ten_ten,
                            'msg' => 'Vui lòng nhập tên nsx phải có ít nhất 3 ký tự'
                            ];
                        }
                        
                        // max length
                        if( !empty($nsx_ten) && strlen($nsx_ten) > 50 ) {
                            $errors['nsx_ten'][] = [
                                'rule' => 'maxlength',
                                'rule_value' => 50,
                                'value' => $nsx_ten,
                                'msg' => 'Vui lòng nhập tên nsx không được vượt quá 50 ký tự'
                            ];

                        }
                    // nếu như không có lỗi gì thì thực hienj các thao tác logic
                    if(empty($errors)) {
                        $sql = <<<EOT
                        INSERT INTO nhasanxuat(nsx_ten) VALUES('$nxs_ten');          
EOT;
                        // 3
                        mysqli_query($conn,$sql);
                        //
                        echo '<script>location.href = "index.php";</script';
                    }
                    }
                ?>
            <?php if( !empty($errors)): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                <ul>
                    <?php foreach($errors as $field): ?>
                        <?php foreach($field as $rule): ?>
                            <li> <?= $rule['msg']?> </li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

            </div>
            <!-- Main Content end -->
        </div>

         <!-- Footer Star -->
        <div class="row">
            <?php include_once __DIR__ . '/../layout/partials/footer.php'; ?>
        </div>
           <!-- Footer end -->
    </div>
    <!-- Content end -->

    <!-- JS sử dụng cho toàn hệ thống STAR -->
    <!-- JQUERY JS & BOOSTRAP -->
    <?php include_once __DIR__ . '/../layout/scripts.php'; ?>
    <!-- JS sử dụng cho toàn hệ thống END -->


    <!-- <script>
    $(function() {
        $('#frmcreat').validate({
            rules: {
                nsx_ten:{
                    required: true,
                    minlength: 3,
                    maxlength:70
            }
        },
        messages: {
            nsx_ten: {
                required: "Vui lòng nhập tên nhà sản xuất",
                minlength: " Vui lòng nhập ít nhất 3 ký tự",
                maxlength: "Vui lòng nhập không quá 60 ký tự"
            }

        },
        errorElement: "em",
        errorPlacement: function(error, element) {
            // Thêm class `invalid-feedback` cho field đang có lỗi
            error.addClass("invalid-feedback");
            if (element.prop("type") === "checkbox") {
            error.insertAfter(element.parent("label"));
            } else {
            error.insertAfter(element);
            }
        },
        success: function(label, element) {},
        highlight: function(element, errorClass, validClass) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
        });
    });
     -->
    </script>
</body>

</html>