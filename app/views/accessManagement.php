<div class="page-title">
    <div class="title_left">
        <h3>مدیریت دسترسی ها</h3>
    </div>

    <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="جست و جو برای...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">برو!</button>
                </span>
            </div>
        </div>
    </div>
</div>


<div class="clearfix"></div>


<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-align-left"></i> کاربران / اخبار / دسته بندی ها / نقش ها
                    <small>جلسات</small>
                </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <!-- <li><a class="close-link"><i class="fa fa-close"></i></a></li> -->
                </ul>
                <div class="clearfix"></div>
            </div>
            <form id="addUserForm" action="" method="POST">
                <div class="x_content">
                    <!-- start accordion -->
                    <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                        <div class="panel">
                            <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h4 class="panel-title">کاربران</h4>
                            </a>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>تیم</th>
                                                <th>دسته بندی</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">ایجاد</th>
                                                <!-- <td>
                                                    <div class="">
                                                        <div class="control-group">
                                                            <input list="user_team" type="text" class="tag-control tags form-control" value="اجتماعی, تبلیغات, فروش">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="control-group">
                                                        <input type="text" class="tag-control tags form-control" value="اجتماعی, تبلیغات, فروش">
                                                    </div>
                                                </td> -->
                                                <!-- <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td> -->
                                                <!-- <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td> -->
                                            </tr>
                                            <tr>
                                                <th class="col-2" scope="row">مشاهده</th>
                                                <td class="col-5" style="max-width: 100px;">
                                                    <div class="checklist" style="position: relative;">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3" style="max-height: 300px;overflow-y: scroll;">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <!-- <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="select_all"> انتخاب همه
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="unselect_all"> عدم انتخاب همه
                                                                    </label>
                                                                </div>
                                                            </li> -->
                                                            <?php foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30] as $value) : ?>
                                                                <li>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                            <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم <?php echo $value ?>
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="col-5">
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ویرایش</th>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">حذف</th>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <datalist id="user_team">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </datalist>
                                        <datalist id="user_category">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </datalist>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <a class="panel-heading collapsed" role="tab" id="headingTwo1" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
                                <h4 class="panel-title">اخبار</h4>
                            </a>
                            <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>تیم</th>
                                                <th>دسته بندی</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">ایجاد</th>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">مشاهده</th>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ویرایش</th>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">حذف</th>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <a class="panel-heading collapsed" role="tab" id="headingThree1" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">
                                <h4 class="panel-title">نقش</h4>
                            </a>
                            <div id="collapseThree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>تیم</th>
                                                <th>دسته بندی</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">ایجاد</th>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">مشاهده</th>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ویرایش</th>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">حذف</th>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <a class="panel-heading collapsed" role="tab" id="headingThree1" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                <h4 class="panel-title">دسته بندی</h4>
                            </a>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>تیم</th>
                                                <th>دسته بندی</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">ایجاد</th>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">مشاهده</th>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ویرایش</th>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">حذف</th>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group checklist">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                                                            انتخاب <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" class="" value="all"> دسترسی کامل
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="forbidden"> بدون دسنرسی
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of accordion -->
                    <p>
                        <button type="submit" class="btn btn-success">ارسال</button>
                    </p>
                    <p>
                    <div class="control-group">
                        <input type="text" class="tag-control tags form-control" value="اجتماعی, تبلیغات, فروش">
                    </div>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>



<script>
    window.addEventListener("load", function() {
        let
            data = [], // the form data in type array
            formdata; // the form data in type FormData

        // submit controller
        const addUserForm = document.getElementById('addUserForm');
        addUserForm.addEventListener('submit', function(e) {
            e.preventDefault();
            formdata = new FormData(this);

            for (const record of formdata) {
                data.push(record);
            }

            // begin test
            // let xhr = new XMLHttpRequest();
            // xhr.onload = function() {
            //   // console.log(this.response);
            // }
            // xhr.open('post', 'api.php', false);
            // xhr.send(formdata);
            // console.log(data);
            // end test
        });
    });
</script>