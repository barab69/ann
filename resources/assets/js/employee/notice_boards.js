'use strict';

$(document).ready(function () {
    let tbl = $('#employeeNoticeBoardsTable').DataTable({
        processing: true,
        serverSide: true,
        searchDelay: 500,
        'language': {
            'lengthMenu': 'Show _MENU_',
        },
        'order': [[1, 'desc']],
        ajax: {
            url: noticeBoardUrl,
        },
        columnDefs: [
            {
                'targets': [0, 1],
                'width': '50%',
            },
            {
                targets: '_all',
                defaultContent: 'N/A',
                'className': 'text-start align-middle text-nowrap',
            },
        ],
        columns: [
            {
                data: function (row) {
                    let showLink = noticeBoardShowUrl + '/' + row.id;
                    return row.title;
                },
                name: 'title',
            },
            {
                data: function (row) {
                    return row;
                },
                render: function (row) {
                    if (row.created_at === null) {
                        return 'N/A';
                    }

                    return `<div class="badge badge-light">
                                <div class="mb-2">${moment(row.created_at).utc().format('LT')}</div>
                                <div>${moment(row.created_at).utc().format('Do MMM, Y')}</div>
                            </div>`;
                },
                name: 'created_at',
            },
        ],
    });
    handleSearchDatatable(tbl);
});
