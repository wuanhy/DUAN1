<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="public/css/style.css"> 
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-2">
            <?php include "views/admin/sidebar.php"; ?>
        </div>
        <div class="col-10" style="padding-top: 100px;  ">
        <div class="list-booking">
            <form action="<?=BASE_URL .'admin-hdv'  ?>" method="post">
                     <div>
                        <div class="card-body">
                            <table class="table">
                        <tr>
                            <th>ID Booking</th>
                            <th>Tên Tour</th>
                            <th>Ngày diễn ra</th>
                            <th>Số chỗ</th>
                            <th>Trạng thái</th>
                            <th>Phân Công</th>
                            <th>Action</th>
                        </tr>

                        <?php foreach($listdata as $row): ?>
                        <tr>
                            <td><?= $row['booking_id'] ?></td>
                            <td><?= $row['ten_tour'] ?></td>
                            <td><?= $row['ngay_dien_ra'] ?></td>
                            <td><?= $row['so_cho'] ?></td>
                            <td>
                                <?php if ($row['status']=="done") echo "✔ Hoàn thành" ?>
                                <?php if ($row['status']=="pending") echo "⌛ Sắp diễn ra" ?>
                                <?php if ($row['status']=="in_progress") echo "🔥 Đang diễn ra" ?>
                            </td>
                            <td>
                                <form action="<?= BASE_URL .'admin-hdv' ?>" method="post">
                                <input type="hidden" name="booking_id" value="<?= $row['booking_id'] ?>">
                                <select name="guide_id" class="form-control">
                                    <option value="">--Chọn HDV--</option>
                                    <?php foreach($listHdv as $hdv): ?>
                                        <option value="<?= $hdv['id'] ?>"><?= $hdv['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                             <td>
                                 <button class="btn btn-primary btn-sm" type="submit">Lưu</button>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </table>
                                
                        </div>
            </form>
        </div>
        </div>
        </div>
</div>
<style>
    body {
   background: linear-gradient(to right, #CFE8FF, #FAD4EC);
    min-height: 100vh;
    margin: 0;
    padding: 0;
}



</style>
    <?php if(!empty($_SESSION['success'])) :?>
    <script>
        setTimeout(()=>{
            Swal.fire({
            toast : true,
            position : 'top-end',
            icon: 'success',
            title : '<?= $_SESSION['success'] ?>',
            showConfirmButton : false,
            timer : 2000,
            timerProgressBar:true,
            didOpen:(toast)=>{
                const progress = toast.querySelector('.swal2-timer-progress-bar');
                if(progress){
                    progress.style.background='#28a745';
                }
            }
            });

        },100);
    </script>
<?php unset($_SESSION['success']); ?>
<?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>