<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Accordion Item #1
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <table class="table table-sm table-borderless">
                    <tbody>
                        <!-- begin user crud access -->
                        <tr>
                            <th>کاربر - ایجاد</th>
                            <td>
                                <div class="dropdown checklist">
                                    <div class="form-select" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        انتخاب
                                    </div>
                                    <div class="dropdown-menu p-2">
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" value="all" class="form-check-input">
                                                <label class="form-check-label">دسترسی کامل</label>
                                            </div>
                                        </div>
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" value="forbidden" class="form-check-input">
                                                <label class="form-check-label">بدون دسترسی</label>
                                            </div>
                                        </div>
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" name="userAccess_create_team[]" value="cat1" class="form-check-input">
                                                <label class="form-check-label">تیم 1</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown checklist">
                                    <div class="form-select" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        انتخاب
                                    </div>
                                    <div class="dropdown-menu p-2">
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" value="all" class="form-check-input">
                                                <label class="form-check-label">دسترسی کامل</label>
                                            </div>
                                        </div>
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" value="forbidden" class="form-check-input">
                                                <label class="form-check-label">بدون دسترسی</label>
                                            </div>
                                        </div>
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" name="userAccess_create_categroy[]" value="cat1" class="form-check-input">
                                                <label class="form-check-label">دسته بندی 1</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>کاربر - مشاهده</th>
                            <td>
                                <div class="dropdown checklist">
                                    <div class="form-select" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        انتخاب
                                    </div>
                                    <div class="dropdown-menu p-2">
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" value="all" class="form-check-input">
                                                <label class="form-check-label">دسترسی کامل</label>
                                            </div>
                                        </div>
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" value="forbidden" class="form-check-input">
                                                <label class="form-check-label">بدون دسترسی</label>
                                            </div>
                                        </div>
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" name="userAccess_read_team[]" value="cat1" class="form-check-input">
                                                <label class="form-check-label">تیم 1</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown checklist">
                                    <div class="form-select" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        انتخاب
                                    </div>
                                    <div class="dropdown-menu p-2">
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" value="all" class="form-check-input">
                                                <label class="form-check-label">دسترسی کامل</label>
                                            </div>
                                        </div>
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" value="forbidden" class="form-check-input">
                                                <label class="form-check-label">بدون دسترسی</label>
                                            </div>
                                        </div>
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" name="userAccess_read_categroy[]" value="cat1" class="form-check-input">
                                                <label class="form-check-label">دسته بندی 1</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>کاربر - ویرایش</th>
                            <td>
                                <div class="dropdown checklist">
                                    <div class="form-select" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        انتخاب
                                    </div>
                                    <div class="dropdown-menu p-2">
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" value="all" class="form-check-input">
                                                <label class="form-check-label">دسترسی کامل</label>
                                            </div>
                                        </div>
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" value="forbidden" class="form-check-input">
                                                <label class="form-check-label">بدون دسترسی</label>
                                            </div>
                                        </div>
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" name="userAccess_update_team[]" value="cat1" class="form-check-input">
                                                <label class="form-check-label">تیم 1</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown checklist">
                                    <div class="form-select" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        انتخاب
                                    </div>
                                    <div class="dropdown-menu p-2">
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" value="all" class="form-check-input">
                                                <label class="form-check-label">دسترسی کامل</label>
                                            </div>
                                        </div>
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" value="forbidden" class="form-check-input">
                                                <label class="form-check-label">بدون دسترسی</label>
                                            </div>
                                        </div>
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" name="userAccess_update_categroy[]" value="cat1" class="form-check-input">
                                                <label class="form-check-label">دسته بندی 1</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>کاربر - حذف</th>
                            <td>
                                <div class="dropdown checklist">
                                    <div class="form-select" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        انتخاب
                                    </div>
                                    <div class="dropdown-menu p-2">
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" value="all" class="form-check-input">
                                                <label class="form-check-label">دسترسی کامل</label>
                                            </div>
                                        </div>
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" value="forbidden" class="form-check-input">
                                                <label class="form-check-label">بدون دسترسی</label>
                                            </div>
                                        </div>
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" name="userAccess_delete_team[]" value="cat1" class="form-check-input">
                                                <label class="form-check-label">تیم 1</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown checklist">
                                    <div class="form-select" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        انتخاب
                                    </div>
                                    <div class="dropdown-menu p-2">
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" value="all" class="form-check-input">
                                                <label class="form-check-label">دسترسی کامل</label>
                                            </div>
                                        </div>
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" value="forbidden" class="form-check-input">
                                                <label class="form-check-label">بدون دسترسی</label>
                                            </div>
                                        </div>
                                        <div class="my-1">
                                            <div class="form-check">
                                                <input type="checkbox" name="userAccess_delete_categroy[]" value="cat1" class="form-check-input">
                                                <label class="form-check-label">دسته بندی 1</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- end user crud access -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Accordion Item #2
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Accordion Item #3
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
</div>