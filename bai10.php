<!DOCTYPE html>
<html>
<head>
    <!-- Tiêu đề trang -->
    <title>Trang giới thiệu cá nhân</title>
</head>
<body>
    <?php
    // Khai báo thông tin cá nhân
    $ho_ten = "Nguyễn Văn A";
    $nam_sinh = 2003;
    $so_thich = "Lập trình, đọc sách và đá bóng";
    ?>

    <h1>Giới thiệu cá nhân</h1>
    <p><strong>Họ và tên:</strong> <?php echo $ho_ten; ?></p>
    <p><strong>Năm sinh:</strong> <?php echo $nam_sinh; ?></p>
    <p><strong>Sở thích:</strong> <?php echo $so_thich; ?></p>
</body>
</html>