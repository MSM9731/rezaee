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
                    formSelect.innerHTML = 'دسترسی کامل';
                    checkboxs.forEach(function (checkbox) {
                        if (checkbox.value === 'all' || checkbox.value === 'select_all' || checkbox.value === 'unselect_all') return;
                        checkbox.checked = true; // removable
                        checkbox.disabled = true;
                    });
                } else if (this.value === 'select_all' && this.checked) {
                    checkboxs.forEach(function (checkbox) {
                        if (checkbox.value === 'all' || checkbox.value === 'select_all' || checkbox.value === 'unselect_all') return;
                        checkbox.checked = true;
                    });
                } else if (this.value === 'unselect_all' && this.checked) {
                    checkboxs.forEach(function (checkbox) {
                        if (checkbox.value === 'unselect_all') return;
                        // if (checkbox.value === 'all' || checkbox.value === 'select_all')
                        checkbox.checked = false;
                    });
                } else {
                    let strShow = '';
                    checkboxs.forEach(function (checkbox, index) {
                        checkbox.disabled = false;
                        if (!checkbox.checked || checkbox.value === 'all' || checkbox.value === 'select_all' || checkbox.value === 'unselect_all') return;
                        strShow += '<span class="tag">' + checkbox.parentElement.textContent.trim() + '</span>'
                    });
                    strShow = strShow.substring(0, strShow.length - 2)
                    formSelect.innerHTML = strShow === '' ? formSelectText : strShow
                }
            });
        }); // end checkboxs
    }); // end checklists
});