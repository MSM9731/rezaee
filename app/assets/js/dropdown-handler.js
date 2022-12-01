window.addEventListener('load', function () {
    // checklists
    const checklists = this.document.getElementsByClassName('checklist');
    if (!checklists) return;
    Array.from(checklists).forEach(function (checklist) {
        // form-select
        const formSelect = checklist.getElementsByClassName('form-select')[0],
            formSelectText = formSelect.innerHTML;
        // checkboxs
        const checkboxs = Array.from(checklist.querySelectorAll('input[type="checkbox"]'));
        if (!checkboxs) return;
        let
            forbidden = false,
            all = false;
        checkboxs.forEach(function (checkbox) {
            checkbox.addEventListener('change', function (e) {
                if (this.value === 'forbidden') {
                    forbidden = this.checked;
                    all = false;
                } else if (this.value === 'all') {
                    all = this.checked;
                    forbidden = false;
                    // console.log(forbidden);
                } else { }
                // console.log('all: ', all, ' ; forbidden: ', forbidden);
                checkboxs.forEach(function (checkbox) {
                    if (forbidden) {
                        formSelect.innerHTML = 'بدون دسترسی';
                        checkbox.disabled = forbidden && checkbox.value !== 'forbidden';
                    } else if (all) {
                        formSelect.innerHTML = 'دسترسی کامل';
                        checkbox.checked = all && checkbox.value !== 'forbidden';
                    } else {
                        checkbox.disabled = false;
                    }
                });
            });
        }); // end checkboxs
    }); // end checklists
});