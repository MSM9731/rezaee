window.addEventListener('load', function () {
    // checklists
    const checklists = this.document.getElementsByClassName('checklist');
    if (!checklists) return;
    Array.from(checklists).forEach(function (checklist) {
        // form-select
        const
            formSelect = checklist.getElementsByClassName('form-select')[0],
            formSelectText = formSelect.innerHTML;
        // checkboxs
        const checkboxs = Array.from(checklist.querySelectorAll('input[type="checkbox"]'));
        if (!checkboxs) return;
        checkboxs.forEach(function (checkbox) {
            checkbox.addEventListener('change', function (e) {
                if (this.value === 'all' && this.checked) {
                    if (this.checked) {
                        formSelect.innerHTML = 'دسترسی کامل';
                        checkboxs.forEach(function (checkbox) {
                            if (checkbox.value === 'all') return;
                            checkbox.checked = true;
                            checkbox.disabled = true;
                        });
                    }
                } else {
                    let strShow = '';
                    checkboxs.forEach(function (checkbox, index) {
                        checkbox.disabled = false;
                        if (!checkbox.checked || checkbox.value === 'all') return;
                        strShow += checkbox.parentElement.textContent.trim() + ', '
                    });
                    strShow = strShow.substring(0, strShow.length - 2)
                    formSelect.innerHTML = strShow === '' ? formSelectText : strShow
                }
            });
        }); // end checkboxs
    }); // end checklists
});