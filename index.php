<?php

require_once "inc/actions.php";

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
    <tr>
        <td>زهرا</td>
        <td>دینی</td>
        <td>12</td>
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

                            <div class="modal-body">
                                <input type="text" name="" value="نام" id="">
                                <input type="text" name="" value="سن" id="">
                                <input type="text" name="" value="رشته تحصیلی" id="">
                            </div>

                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">بستن</button>
                                <button type="button" class="btn btn-primary">سیو</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /small modal -->
            </div>
            <div>
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_small">حذف
                    <i class="ph-play-circle ms-2"></i></button>

                <!-- Small modal -->
                <div id="modal_small" class="modal fade" tabindex="-1">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Small modal</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body">
                                <input type="text" name="" value="نام" id="">
                                <input type="text" name="" value="سن" id="">
                                <input type="text" name="" value="رشته تحصیلی" id="">
                            </div>

                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">بستن</button>
                                <button type="button" class="btn btn-primary">سیو</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /small modal -->
            </div>
        </td>
    </tr>
    <tr>
        <td>سمیرا</td>
        <td>دینی</td>
        <td>12</td>
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

                            <div class="modal-body">
                                <input type="text" name="" value="نام" id="">
                                <input type="text" name="" value="سن" id="">
                                <input type="text" name="" value="رشته تحصیلی" id="">
                            </div>

                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">بستن</button>
                                <button type="button" class="btn btn-primary">سیو</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /small modal -->
            </div>
            <div>
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_small">حذف
                    <i class="ph-play-circle ms-2"></i></button>

                <!-- Small modal -->
                <div id="modal_small" class="modal fade" tabindex="-1">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Small modal</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body">
                                <input type="text" name="" value="نام" id="">
                                <input type="text" name="" value="سن" id="">
                                <input type="text" name="" value="رشته تحصیلی" id="">
                            </div>

                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">بستن</button>
                                <button type="button" class="btn btn-primary">سیو</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /small modal -->
            </div>
        </td>
    </tr>
    <tr>
        <td>اصغر</td>
        <td>دینی</td>
        <td>12</td>
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

                            <div class="modal-body">
                                <input type="text" name="" value="نام" id="">
                                <input type="text" name="" value="سن" id="">
                                <input type="text" name="" value="رشته تحصیلی" id="">
                            </div>

                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">بستن</button>
                                <button type="button" class="btn btn-primary">سیو</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /small modal -->
            </div>
            <div>
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal_small">حذف
                    <i class="ph-play-circle ms-2"></i></button>

                <!-- Small modal -->
                <div id="modal_small" class="modal fade" tabindex="-1">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Small modal</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body">
                                <input type="text" name="" value="نام" id="">
                                <input type="text" name="" value="سن" id="">
                                <input type="text" name="" value="رشته تحصیلی" id="">
                            </div>

                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">بستن</button>
                                <button type="button" class="btn btn-primary">سیو</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /small modal -->
            </div>
        </td>
    </tr>

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