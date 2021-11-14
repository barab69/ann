'use strict';

let tbl = $('#appointmentsTbl').DataTable({
    searchDelay: 500,
    processing: true,
    serverSide: true,
    'language': {
        'lengthMenu': 'Show _MENU_',
    },
    'order': [[3, 'desc']],
    ajax: {
        url: appointmentUrl,
        data: function (data) {
            data.is_completed = $('#status').find('option:selected').val();
        },
    },
    columnDefs: [
        {
            'targets': [0],
            'width': '3%',
            'className': 'text-center',
            'orderable': false,
        },
        {
            'targets': [4],
            'width': '18%',
        },
        {
            'targets': [5],
            'orderable': false,
            'className': 'text-center text-nowrap',
            'width': '12%',
        },
        {
            'targets': [6, 7],
            'visible': false,
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
                let checked = row.is_completed == 0 ? '' : 'checked';
                let data = [{ 'id': row.id, 'checked': checked }];
                return prepareTemplateRender('#appointmentStatusTemplate',
                    data);
            },
            name: 'is_completed',
        },
        {
            data: function (row) {
                let showLink = patientUrl + '/' + row.patient.id;
                return `<div class="d-flex align-items-center">
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                        <a href="${showLink}">
                            <div>
                                <img src="${row.patientImageUrl}" alt=""
                                     class="user-img">
                            </div>
                        </a>
                        </div>
                        <div class="d-flex flex-column">
                            <a href="${showLink}"
                               class="mb-1">${row.patient.user.full_name}</a>
                            <span>${row.patient.user.email}</span>
                        </div>
                    </div>`;
            },
            name: 'patient.user.first_name',
        },
        {
            data: function (row) {
                if (patientRole) {
                    return row.doctor.user.full_name;
                }
                let showLink = doctorUrl + '/' + row.doctor.id;
                return `<div class="d-flex align-items-center">
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                        <a href="${showLink}">
                            <div>
                                <img src="${row.doctorImageUrl}" alt=""
                                     class="user-img">
                            </div>
                        </a>
                        </div>
                        <div class="d-flex flex-column">
                            <a href="${showLink}"
                               class="mb-1">${row.doctor.user.full_name}</a>
                            <span>${row.doctor.user.email}</span>
                        </div>
                    </div>`;
            },
            name: 'doctor.user.first_name',
        },
        {
            data: function (row) {
                let showLink = doctorDepartmentUrl + '/' +
                    row.doctor.department.id;
                return '<a href="' + showLink + '">' +
                    row.doctor.department.title + '</a>';
            },
            name: 'doctor.department.title',
        },
        {
            data: function (row) {
                return row;
            },
            render: function (row) {
                if (row.opd_date === null) {
                    return 'N/A';
                }

                return `<div class="badge badge-light">
                    <div class="mb-2">${moment(row.opd_date).utc().format('LT')}</div>
                    <div>${moment(row.opd_date).utc().format('Do MMM, Y')}</div>
                </div>`;
            },
            name: 'opd_date',
        },
        {
            data: function (row) {
                let url = appointmentUrl + '/' + row.id;
                let data = [
                    {
                        'id': row.id,
                        'url': url + '/edit',
                        'viewUrl': url,
                        'isDoctor': doctorRole,
                    }];
                return prepareTemplateRender('#appointmentActionTemplate', data);
            }, name: 'id',
        },
        {
            data: 'patient.user.last_name',
            name: 'patient.user.last_name',
        },
        {
            data: 'doctor.user.last_name',
            name: 'doctor.user.last_name',
        },
    ],
    'fnInitComplete': function () {
        $('#status').change(function () {
            $('#appointmentsTbl').DataTable().ajax.reload(null, true);
        });
    },
});
handleSearchDatatable(tbl);

$(document).on('click', '.delete-btn', function (event) {
    let appointmentId = $(event.currentTarget).data('id');
    deleteItem(appointmentUrl + '/' + appointmentId, '#appointmentsTbl',
        'Appointment');
});

$(document).on('click', '#resetFilter', function () {
    $('#status').val(2).trigger('change');
});

$('#status').select2();

$(document).on('change', '.status', function (event) {
    let appointmentId = $(event.currentTarget).data('id');
    updateStatus(appointmentId);
});

window.updateStatus = function (id) {
    $.ajax({
        url: appointmentUrl + '/' + id + '/status',
        method: 'post',
        cache: false,
        success: function (result) {
            if (result.success) {
                tbl.ajax.reload(null, false);
            }
        },
    });
};
