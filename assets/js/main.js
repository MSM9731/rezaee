function send_ajax_request(file, data, success_callback, error_callback, warning_callback, info_callback, always_callback) {
    if (!file) {
        console.log('file name is required');
        return;
    }
    if (!data) data = {}
    if (!success_callback) success_callback = function () { }
    if (!error_callback) error_callback = function () { }
    if (!warning_callback) warning_callback = function () { }
    if (!info_callback) info_callback = function () { }
    if (!always_callback) always_callback = function () { }
    xhr({
        url: '../api/' + file,
        method: 'post',
        Async: false,
        data: data,
        success: function (res) {
            // console.log(res);
            let
                icon = '', // success | error | warning | info
                text = '';
            try {
                res = JSON.parse(res);
                switch (res.status) {
                    case 'success':
                        icon = 'success';
                        text = 'عملیات موفقیت آمیز!';
                        if (res.message) text = res.message;
                        success_callback(res);
                        break;
                    case 'error':
                        icon = 'error';
                        text = 'خطا حین انجام عملیات';
                        error_callback(res);
                        break;
                    case 'warning':
                        icon = 'warning';
                        text = 'حین انجام عملیات مشکلی به وجود آمد. لطفا مجددا امتحان کنید';
                        if (res.message) text = res.message;
                        warning_callback(res);
                        break;
                    case 'info':
                        icon = 'info';
                        text = 'اطلاعیه';
                        if (res.message) text = res.message;
                        info_callback(res);
                        break;
                    default:
                        break;
                }
            } catch (error) {
                console.log(error);
                console.log(res);
                icon = 'error';
                text = 'خطا حین انجام عملیات';
            }
            try {
                swal({
                    text: text,
                    icon: icon,
                    button: 'باشه',
                });
            } catch (error) {
                alert(text);
            }
        },
        fail: function (res) {
            console.log(res);
        },
        always: function (res) {
            always_callback(res);
        }
    });
}