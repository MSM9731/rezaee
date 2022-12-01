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
                    all = false;
                    forbidden = this.checked;
                } else if (this.value === 'all') {
                    all = this.checked;
                    forbidden = false;
                } else { }
                // console.log('all: ', all, ' ; forbidden: ', forbidden);
                checkboxs.forEach(function (checkbox) {
                    if (forbidden) {
                        formSelect.innerHTML = 'بدون دسترسی';
                        checkbox.disabled = checkbox.value !== 'forbidden';
                    } else if (all) {
                        formSelect.innerHTML = 'دسترسی کامل';
                        checkbox.checked = checkbox.value !== 'forbidden';
                    } else {
                        checkbox.disabled = false;
                        formSelect.innerHTML = formSelectText;
                    }
                });
            });
        }); // end checkboxs
    }); // end checklists
});