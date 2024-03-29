'use strict';

$(document).ready(function () {
    let tableName = '#pathologyTestsTable';
    let tbl = $('#pathologyTestsTable').DataTable({
        processing: true,
        serverSide: true,
        searchDelay: 500,
        'language': {
            'lengthMenu': 'Show _MENU_',
        },
        'order': [[0, 'asc'], [3, 'asc']],
        ajax: {
            url: pathologyTestUrl,
        },
        columnDefs: [
            {
                'targets': [5],
                'orderable': false,
                'className': 'text-center text-nowrap',
                'width': '8%',
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
                    return '<a href="#" class="show-btn" data-id="' + row.id + '">' + row.test_name +
                        '</a>';
                },
                name: 'test_name',
            },
            {
                data: 'short_name',
                name: 'short_name',
            },
            {
                data: 'test_type',
                name: 'test_type',
            },
            {
                data: 'pathologycategory.name',
                name: 'pathologycategory.name',
            },
            {
                data: 'chargecategory.name',
                name: 'chargecategory.name',
            },
            {
                data: function (row) {
                    let url = pathologyTestUrl + '/' + row.id;
                    let data = [
                        {
                            'id': row.id,
                            'url': url + '/edit',
                        }];
                    return prepareTemplateRender('.pageActionTemplate',
                        data);
                }, name: 'id',
            },
        ],
    });
    handleSearchDatatable(tbl);
});

$(document).on('click', '.delete-btn', function (event) {
    let pathologyTestId = $(event.currentTarget).data('id');
    deleteItem(pathologyTestUrl + '/' + pathologyTestId, '#pathologyTestsTable',
        'Pathology Test');
});

$(document).on('click', '.show-btn', function (event) {
    let pathologyTestId = $(event.currentTarget).attr('data-id');
    renderData(pathologyTestId);
});

window.renderData = function (id) {
    $.ajax({
        url: route('pathology.test.show.modal', id),
        type: 'GET',
        success: function (result) {
            if (result.success) {
                $('#test_name').text(result.data.test_name);
                $('#short_name').text(result.data.short_name);
                $('#test_type').text(result.data.test_type);
                $('#category_name').text(result.data.pathologycategory.name);
                $('#test_unit').text(result.data.unit);
                $('#subcategory').text(result.data.subcategory);
                $('#test_method').text(result.data.method);
                $('#report_days').text(result.data.report_days);
                $('#charge_category').text(result.data.chargecategory.name);
                $('#standard_charge').text(result.data.standard_charge);
                $('#created_on').
                    text(moment(result.data.created_at).fromNow());
                $('#updated_on').
                    text(moment(result.data.updated_at).fromNow());

                setValueOfEmptySpan();
                $('#showPathologyTest').appendTo('body').modal('show');
            }
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message);
        },
    });
};
