$(document).ready(function () {
    'use strict';

    let tableName = '#tblDocuments';
    let tbl = $(tableName).DataTable({
        processing: true,
        serverSide: true,
        searchDelay: 500,
        'language': {
            'lengthMenu': 'Show _MENU_',
        },
        'order': [[0, 'asc']],
        ajax: {
            url: documentsUrl,
        },
        columnDefs: [
            {
                'targets': [4],
                'orderable': false,
                'className': 'text-center text-nowrap',
                'width': '10%',
            },
            {
                'targets': [1],
                'width': '28%',
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
                    let showLink = patientUrl + '/' + row.patient.id;
                    return `<div class="d-flex align-items-center">
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="${showLink}">
                                <div>
                                    <img src="${row.image_url}" alt=""
                                         class="user-img">
                                </div>
                            </a>
                        </div>
                        <div class="d-flex flex-column">
                            <a href="${showLink}" class="mb-1">${row.patient.user.full_name}</a>
                            <span>${row.patient.user.email}</span>
                        </div>
                   </div>`;
                },
                name: 'patient.user.first_name',
            },
            {
                data: function (row) {
                    let downloadLink = downloadDocumentUrl + '/' + row.id;
                    return '<a href="' + downloadLink + '">' + 'Download' +
                        '</a>';
                },
                name: 'title',
            },
            {
                data: 'title',
                name: 'title',
            },
            {
                data: 'document_type.name',
                name: 'documentType.name',
            },
            {
                data: function (row) {
                    let data = [{ 'id': row.id }];
                    return prepareTemplateRender('.modalActionTemplate', data);
                }, name: 'patient.user.last_name',
            },
        ],
    });

    handleSearchDatatable(tbl);

    $('#patientId, #documentTypeId, #editPatientId, #editDocumentTypeId').
        select2({
            width: '100%',
        });

    $(document).on('click', '.delete-btn', function (event) {
        let id = $(event.currentTarget).data('id');
        deleteItem(documentsUrl + '/' + id, tableName, 'Document');
    });

    var filename;
    $('#documentImage').change(function () {
        filename = $(this).val();
    });

    $(document).on('submit', '#addNewForm', function (event) {
        event.preventDefault();
        if (filename == null || filename == '') {
            let message = 'Please select attachment';
            displayErrorMessage(message);
            return false;
        }
        if ($('#validationErrorsBox').text() !== '') {
            $('#documentImage').focus();
            return false;
        }
        let loadingButton = jQuery(this).find('#btnSave');
        loadingButton.button('loading');
        let data = {
            'formSelector': $(this),
            'url': documentsCreateUrl,
            'type': 'POST',
            'tableSelector': tableName,
        };
        newRecord(data, loadingButton, '#addModal');
    });

    $(document).on('click', '.edit-btn', function (event) {
        if (ajaxCallIsRunning) {
            return;
        }
        ajaxCallInProgress();
        let documentId = $(event.currentTarget).data('id');
        renderData(documentId);
    });

    window.renderData = function (id) {
        $.ajax({
            url: documentsUrl + '/' + id + '/edit',
            type: 'GET',
            success: function (result) {
                if (result.success) {
                    let ext = result.data.document_url.split('.').
                        pop().
                        toLowerCase();
                    if (ext == 'pdf') {
                        $('#editPreviewImage').css('background-image', 'url("' + pdfDocumentImageUrl + '")');
                    } else if ((ext == 'docx') || (ext == 'doc')) {
                        $('#editPreviewImage').css('background-image', 'url("' + docxDocumentImageUrl + '")');
                    } else {
                        $('#editPreviewImage').css('background-image', 'url("' + result.data.document_url + '")');
                    }

                    $('#editDocumentTypeId').val(result.data.document_type_id).trigger('change.select2');
                    $('#editPatientId').val(result.data.patient_id).trigger('change.select2');
                    $('#editTitle').val(result.data.title);
                    isEmpty(result.data.document_url) ? $('#documentUrl').hide() : $('#documentUrl').attr('href', result.data.document_url);
                    $('#documentId').val(result.data.id);
                    $('#editNotes').val(result.data.notes);
                    $('#EditModal').modal('show');
                    ajaxCallCompleted();
                }
            },
            error: function (result) {
                manageAjaxErrors(result);
            },
        });
    };

    $(document).on('submit', '#editForm', function (event) {
        event.preventDefault();
        let loadingButton = jQuery(this).find('#btnEditSave');
        loadingButton.button('loading');
        let id = $('#documentId').val();
        let url = documentsUrl + '/' + id + '/update';
        let data = {
            'formSelector': $(this),
            'url': url,
            'type': 'POST',
            'tableSelector': tableName,
        };
        editRecord(data, loadingButton);
    });

    $('#addModal').on('hidden.bs.modal', function () {
        $('#documentTypeId').val(null).trigger('change');
        $('#patientId').val(null).trigger('change');
        $('#previewImage').css('background-image', 'url(' + defaultDocumentImageUrl + ')');
        filename = null;
        resetModalForm('#addNewForm', '#validationErrorsBox');
    });

    $('#editModal').on('hidden.bs.modal', function () {
        resetModalForm('#editForm', '#editDocumentValidationErrorsBox');
    });
});

$(document).on('change', '#documentImage', function () {
    let extension = isValidDocument($(this), '#validationErrorsBox');
    if (!isEmpty(extension) && extension != false) {
        $('#validationErrorsBox').html('').hide();
        displayDocument(this, '#previewImage', extension);
    }
});

$(document).on('change', '#editDocumentImage', function () {
    let extension = isValidDocument($(this),
        '#editDocumentValidationErrorsBox');
    if (!isEmpty(extension) && extension != false) {
        $('#editDocumentValidationErrorsBox').html('').hide();
        displayDocument(this, '#editPreviewImage', extension);
    }
});

window.isValidDocument = function (inputSelector, validationMessageSelector) {
    let ext = $(inputSelector).val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['png', 'jpg', 'jpeg', 'pdf', 'doc', 'docx']) == -1) {
        $(inputSelector).val('');
        $(validationMessageSelector).
            html(
                'The document must be a file of type: jpeg, jpg, png, pdf, doc, docx.').
            show();
        setTimeout(function () {
            $(validationMessageSelector).slideUp(500);
        }, 5000);
        return false;
    }
    return ext;
};
