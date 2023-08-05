<?php

require_once "inc/actions.php";
require_once "class/student.class.php";
$students = new Student();
$students = $students->getStudent();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./allassets/fonts/inter/inter.css" rel="stylesheet" type="text/css">
    <link href="./allassets/icons/phosphor/styles.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ltr/all.min.css" id="stylesheet" rel="stylesheet" type="text/css">
    <link href="customcss/customcss.css" id="stylesheet" rel="stylesheet" type="text/css">
    <!-- /global-->
</head>

<body>
<style>
    body {
        direction: rtl;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>


<table style="width:50%">
    <tr>
        <th>نام</th>
        <th>رشته تحصیلی</th>
        <th>سن</th>
        <th>حذف و ویرایش</th>
    </tr>

    <?php foreach ($students as $row){  ?>
    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td><?php echo $row['field']; ?></td>

        <td class="d-flex">
            <div>
                <button type="button" class="btn btn-light" data-bs-toggle="modal"
                        data-bs-target="#modal_small">ویرایش
                    <i class="ph-play-circle ms-2"></i></button>

                <!-- Small modal -->
                <div id="modal_small" class="modal fade" tabindex="-1">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Small modal</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <form action="index.php" method="post">
                                <div class="modal-body">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input type="text" name="name" placeholder="نام"  value="<?php echo $row['name']; ?>">
                                    <input type="text" name="age" placeholder="سن"  value="<?php echo $row['age']; ?>">
                                    <input type="text" name="field" placeholder="رشته تحصیلی"  value="<?php echo $row['field']; ?>">
                                </div>

                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">بستن</button>
                                    <input type="submit" value="ذخیره" name="update" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /small modal -->
            </div>
            <div>
                <a href="?deleteStudent=<?php echo $row['id']; ?>" type="button" class="btn btn-light">حذف
                    <i class="ph-play-circle ms-2"></i></a>


            </div>
        </td>
    </tr>
    <?php } ?>


</table>
<hr />
<form action="index.php" method="post">
    <input type="text" name="name" placeholder="نام">
    <input type="text" name="age" placeholder="سن">
    <input type="text" name="field" placeholder="رشته تحصیلی">
    <input type="submit" name="addStudent" value="وارد کردن">
</form>
<hr />

</body>

<script src="./allassets/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="assets/js/app.js"></script>
<script src="allassets/js/jquery/jquery.min.js"></script>
<script src="allassets/js/vendor/forms/selects/select2.min.js"></script>
<script src="allassets/demo/pages/form_layouts.js"></script>

</html>