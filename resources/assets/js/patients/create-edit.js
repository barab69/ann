$(document).ready(function () {
    'use strict';

    // $('#bloodGroup').select2({
    //     width: '100%',
    // });
    $('#birthDate').flatpickr({
        maxDate: new Date(),
    });

    // $('#birthDate').datetimepicker(DatetimepickerDefaults({
    //     format: 'YYYY-MM-DD',
    //     useCurrent: true,
    //     sideBySide: true,
    //     maxDate: new Date(),
    // }));
    // $('#departmentId').select2({
    //     width: '100%',
    // });

    $('#createPatientForm, #editPatientForm').submit(function () {
        if ($('#error-msg').text() !== '') {
            $('#phoneNumber').focus();
            return false;
        }
    });
    $('#createPatientForm, #editPatientForm').find('input:text:visible:first').focus();

    $(document).on('click', '.remove-image', function () {
        defaultImagePreview('#previewImage', 1);
    });
});
