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
                        <!-- start user access -->
                        <div class="panel">
                            <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                                <h4 class="panel-title">کاربران</h4>
                            </a>
                            <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
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
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_team[]" value="cat2"> تیم 2
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_category" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_create_category[]" value="cat1"> تیم 1
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
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_read_team" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_read_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_read_category" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_read_category[]" value="cat1"> تیم 1
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
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_update_team" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_update_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_update_categroy" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_update_categroy[]" value="cat1"> تیم 1
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
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_delete_team" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_delete_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_delete_categroy" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="userAccess_delete_categroy[]" value="cat1"> تیم 1
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
                        <!-- end user access -->
                        <!-- start news access -->
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
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="newsAccess_create_team" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="newsAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="newsAccess_create_categroy" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="newsAccess_create_categroy[]" value="cat1"> تیم 1
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
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="newsAccess_read_team" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="newsAccess_read_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="newsAccess_read_categroy" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="newsAccess_read_categroy[]" value="cat1"> تیم 1
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
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="newsAccess_update_team" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="newsAccess_update_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="newsAccess_update_categroy" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="newsAccess_update_categroy[]" value="cat1"> تیم 1
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
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="newsAccess_delete_team" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="newsAccess_delete_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="newsAccess_delete_categroy" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="newsAccess_delete_categroy[]" value="cat1"> تیم 1
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
                        <!-- end news access -->
                        <!-- start ruls access -->
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
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="ruleAccess_create_team" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="ruleAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="ruleAccess_create_categroy" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="ruleAccess_create_categroy[]" value="cat1"> تیم 1
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
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="ruleAccess_read_team" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="ruleAccess_read_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="ruleAccess_read_categroy" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="ruleAccess_read_categroy[]" value="cat1"> تیم 1
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
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="ruleAccess_update_team" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="ruleAccess_update_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="ruleAccess_update_categroy" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="ruleAccess_update_categroy[]" value="cat1"> تیم 1
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
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="ruleAccess_delete_team" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="ruleAccess_delete_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="ruleAccess_delete_categroy" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="ruleAccess_delete_categroy[]" value="cat1"> تیم 1
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
                        <!-- end ruls access -->
                        <!-- start categories access -->
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
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="categoryAccess_create_team" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="categoryAccess_create_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="categoryAccess_create_categroy" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="categoryAccess_create_categroy[]" value="cat1"> تیم 1
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
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="categoryAccess_read_team" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="categoryAccess_read_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="categoryAccess_read_categroy" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="categoryAccess_read_categroy[]" value="cat1"> تیم 1
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
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="categoryAccess_update_team" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="categoryAccess_update_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="categoryAccess_update_categroy" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="categoryAccess_update_categroy[]" value="cat1"> تیم 1
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
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="categoryAccess_delete_team" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="categoryAccess_delete_team[]" value="cat1"> تیم 1
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checklist position-relative">
                                                        <button data-toggle="dropdown" class="form-select btn btn-default dropdown-toggle m-0" aria-expanded="false">
                                                            بدون دسترسی <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu p-3">
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="categoryAccess_delete_categroy" value="all"> دسترسی کامل
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
                                                            <li>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="categoryAccess_delete_categroy[]" value="cat1"> تیم 1
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
                        <!-- end categories access -->
                    </div>
                    <!-- end of accordion -->
                    <p>
                        <button type="submit" class="btn btn-success">ارسال</button>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>



<script>
    window.addEventListener("load", function() {
        // submit controller
        const addUserForm = document.getElementById('addUserForm');
        addUserForm.addEventListener('submit', function(e) {
            e.preventDefault();
            let
                data = [], // the form data in type array
                formdata; // the form data in type FormData
            formdata = new FormData(this);
            // console.log(formdata);

            xhr({
                url: '../api/accessManagement.php',
                method: 'post',
                Async: false,
                data: formdata,
                success: function(res) {
                    console.log(res);
                    swal({
                        text: 'دسترسی با موفقیت اضافه شد!',
                        icon: 'success',
                        button: 'باشه',
                    })
                },
                fail: function(res) {
                    // console.log(res);
                }
            });
        });
    });
</script>