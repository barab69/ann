'use strict';

$(document).ready(function () {

    $('#bloodGroup').select2({
        width: '100%',
    });

    $('#departmentId,#doctorDepartmentId').select2({
        width: '100%',
    });

    $('#birthDate').flatpickr({
        maxDate: new Date(),
    });

    $('#createDoctorForm, #editDoctorForm').submit(function () {
        if ($('#error-msg').text() !== '') {
            $('#phoneNumber').focus();
            return false;
        }
    });

    $('#createDoctorForm, #editDoctorForm').find('input:text:visible:first').focus();

    $(document).on('click', '.remove-image', function () {
        defaultImagePreview('#previewImage', 1);
    });

});
