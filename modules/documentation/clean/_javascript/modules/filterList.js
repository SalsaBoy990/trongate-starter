/*
*  Filter / search in table items action
*
* */
export function filterList(fieldId = 'filter-field', sourceId = 'filter-table', dataType = 'table') {
    const input = document.getElementById(fieldId);
    const filter = input.value.toUpperCase();

    if (dataType === 'table') {
        let td;
        const table = document.getElementById(sourceId);
        const tr = table.getElementsByTagName('tr');

        for (let i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName('td')[0];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = '';
                } else {
                    tr[i].style.display = 'none';
                }
            }
        }
    } else if (dataType === 'list') {
        const list = document.getElementById(sourceId);
        const li = list.getElementsByTagName('li');

        for (let i = 0; i < li.length; i++) {
            if (li[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = '';
            } else {
                li[i].style.display = 'none';
            }
        }
    }
}
