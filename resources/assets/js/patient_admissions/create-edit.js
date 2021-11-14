$(document).ready(function () {
    'use strict';

    $('#patientId, #doctorId, #packageId, #insuranceId, #bedId').select2({
        width: '100%',
    });

    $('#admissionDate').flatpickr({
        dateFormat: "Y-m-d H:i",
        sideBySide: true,
        enableTime: true,
    });

    $('#patientId').focus();

    if (isEdit) {
        setTimeout(function () {
            $('#admissionDate').trigger('dp.change');
        }, 300);
        let dischargeDate = undefined;

        $("#admissionDate").flatpickr({
            dateFormat: "Y-m-d H:i",
            sideBySide: true,
            enableTime: true,
            onChange: function (selectedDates, dateStr, instance) {
                let minDate = moment($('#admissionDate').val()).add(1, 'days').format();
                if (typeof dischargeDate != "undefined") {
                    dischargeDate.set('minDate', minDate)
                }
            }
        });

        dischargeDate = $("#dischargeDate").flatpickr({
            dateFormat: "Y-m-d H:i",
            sideBySide: true,
            minDate: minDate,
            useCurrent: false,
            enableTime: true,
        });
        let minDate = moment($('#admissionDate').val()).add(1, 'days').format();
        dischargeDate.set('minDate', minDate)
    }

    $('#createPatientAdmission, #editPatientAdmission').submit(function () {
        if ($('#error-msg').text() !== '') {
            $('#phoneNumber').focus();
            return false;
        }
    });
});
