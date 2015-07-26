var Dashboard = function() {
    "use strict";

    //function to return the querystring parameter with a given name.
    var getParameterByName = function(name) {
        name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    };
    var runSetDefaultValidation = function() {
        $.validator.setDefaults({
            errorElement: "span", // contain the error msg in a small tag
            errorClass: 'help-block',
            errorPlacement: function(error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "card_expiry_mm" || element.attr("name") == "card_expiry_yyyy") {
                    error.appendTo($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: ':hidden',
            success: function(label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error');
            },
            highlight: function(element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').addClass('has-error');
                if ($(element).hasClass("select2-offscreen")) {
                    $("#s2id_" + $(element).attr("id") + " ul").addClass('has-error');
                } else {
                    $(element).removeClass('valid');
                }
                // add the Bootstrap error class to the control group
            },
            unhighlight: function(element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            }
        });
    };

    var runUpdateProfileValidator = function() {
        alert("asd");
        var form_update = $('#form_update');
        var errorHandler3 = $('.errorHandler', form_update);
        form_update.validate({
            rules: {
                name: {
                    minlength: 2,
                    required: true
                },
                email: {
                    minlength: 2,
                    required: true
                },
                address: {
                    minlength: 3,
                    required: true
                },

                phone: {
                    required: true
                },
                fax: {
                    required: true
                },
                title: {
                    required: true
                },
                keyword: {
                    required: true
                }

            },
            submitHandler: function(form_update) {
                errorHandler3.hide();
                form_update.submit();

            },
            invalidHandler: function(event, validator) { //display error alert on form submit
                errorHandler3.show();
            }
        });
    };
    var runUpdateProfile1Validator = function() {
        var form_update = $('#form_update');
        var errorHandler3 = $('.errorHandler', form_update);
        form_update.validate({
            rules: {
                NAME: {
                    minlength: 2,
                    required: true
                },
                LAST_NAME: {
                    minlength: 2,
                    required: true
                },
                USER_LOGIN: {
                    minlength: 3,
                    required: true
                },

                PERSONAL_GENDER: {
                    required: true
                },
                PERSONAL_MOBILE: {
                    required: true
                },
                COMMENT: {
                    required: true
                },
                ACTIVE_ROLE: {
                    required: true
                },
                GROUP_USER: {
                    required: true
                },
                WORK_COMPANY: {
                    required: true
                },
                AGENCY_ID: {
                    required: true
                },
                PERSONAL_MANV: {
                    required: true
                },
                PERSONAL_CHUCDANH: {
                    required: true
                },
                USER_REGION: { //USER_REGION
                    required: true
                }
            },
            submitHandler: function(form_update) {
                errorHandler3.hide();
                form_update.submit();

            },
            invalidHandler: function(event, validator) { //display error alert on form submit
                errorHandler3.show();
            }
        });
    };

    var runBankValidator = function() {
        var form_update_bank = $('#form_update_bank');
        var errorHandler3 = $('.errorHandler', form_update_bank);
        form_update_bank.validate({
            rules: {
                NAME: {
                    minlength: 2,
                    //required: true
                },
                BANK_CARD: {
                    minlength: 2,
                    //required: true
                },
                BANK_NAME: {
                    minlength: 3,
                    //required: true
                }

            },
            submitHandler: function(form_update_bank) {
                errorHandler3.hide();
                this.form_update_bank.submit();

            },
            invalidHandler: function(event, validator) { //display error alert on form submit
                errorHandler3.show();
            }
        });
    };
    var runImeiValidator = function() {
        var form_update_imei = $('#form_update_imei');
        var errorHandler3 = $('.errorHandler', form_update_imei);
        form_update_imei.validate({
            rules: {
                IMEI_NUMBER: {
                    minlength: 15,
                    required: true
                },
                IMEI_NAME: {
                    minlength: 2,
                    required: true
                },
                IMEI_PHONE: {
                    minlength: 3,
                    required: true
                }

            },
            submitHandler: function(form_update_imei) {
                errorHandler3.hide();
                this.form_update_imei.submit();

            },
            invalidHandler: function(event, validator) { //display error alert on form submit
                errorHandler3.show();
            }
        });
    };
    var runStep1 = function() {
        var formwizard = $('#formwizard');
        var errorHandler3 = $('.errorHandler', formwizard);
        formwizard.validate({
            rules: {
                USER_APPLY: {
                    required: true
                }

            },
            submitHandler: function(formwizard) {
                errorHandler3.hide();
                $("#USER_STEP").val("2");
                formwizard.submit();

            },
            invalidHandler: function(event, validator) { //display error alert on form submit
                errorHandler3.show();
            }
        });
    };
    var runStep2 = function() {
        var formwizard = $('#formwizard');
        var errorHandler3 = $('.errorHandler', formwizard);
        formwizard.validate({
            rules: {
                USER_APPLY2: {
                    required: true
                }

            },
            submitHandler: function(formwizard) {
                errorHandler3.hide();
                $("#USER_STEP").val("3");
                formwizard.submit();

            },
            invalidHandler: function(event, validator) { //display error alert on form submit
                errorHandler3.show();
            }
        });
    };
    var runStep3 = function() {
        var formwizard = $('#formwizard');
        var errorHandler3 = $('.errorHandler', formwizard);
        formwizard.validate({
            rules: {
                USER_APPLY3: {
                    required: true
                }

            },
            submitHandler: function(formwizard) {
                errorHandler3.hide();
                $("#USER_STEP").val("4");
                formwizard.submit();

            },
            invalidHandler: function(event, validator) { //display error alert on form submit
                errorHandler3.show();
            }
        });
    };
    var runDatePicker = function() {
        $('#IMEI_FROM').datepicker({
            autoclose: true
        });
        $('#IMEI_TO').datepicker({
            autoclose: true
        });
    };
    var runUpdateSaleValidator = function() {
        var form_update_sale = $('#form_update_sale');
        var errorHandler3 = $('.errorHandler', form_update_sale);
        form_update_sale.validate({
            rules: {
                NAME: {
                    minlength: 2,
                    required: true
                },
                LAST_NAME: {
                    minlength: 2,
                    required: true
                },
                USER_LOGIN: {
                    minlength: 3,
                    required: true
                },

                PERSONAL_GENDER: {
                    required: true
                },
                PERSONAL_PHONE: {
                    required: true
                },
                PERSONAL_STREET: {
                    required: true
                },
            },
            submitHandler: function(form_update_sale) {
                errorHandler3.hide();
                form_update_sale.submit();

            },
            invalidHandler: function(event, validator) { //display error alert on form submit
                errorHandler3.show();
            }
        });
    };
    var runUpdateAgencyValidator = function() {
        var form_update_ag = $('#form_update_ag');
        var errorHandler3 = $('.errorHandler', form_update_ag);
        form_update_ag.validate({
            rules: {
                NAME: {
                    minlength: 2,
                    required: true
                },
                LAST_NAME: {
                    minlength: 2,
                    required: true
                },
                USER_LOGIN: {
                    minlength: 3,
                    required: true
                },
                EMAIL: {
                    required: true
                },
                PERSONAL_GENDER: {
                    required: true
                },
                PERSONAL_PHONE: {
                    required: true
                },
                PERSONAL_STREET: {
                    required: true
                },
                GROUP_USER: {
                    required: true
                },
                AGENCY_ID: {
                    required: true
                },
            },
            submitHandler: function(form_update_ag) {
                errorHandler3.hide();
                form_update_ag.submit();

            },
            invalidHandler: function(event, validator) { //display error alert on form submit
                errorHandler3.show();
            }
        });
    };

    var runUpdateStepUp = function() {
        var form_update_stepup = $('#form_update_stepup');
        var errorHandler3 = $('.errorHandler', form_update_stepup);
        form_update_stepup.validate({
            rules: {
                NAME: {
                    minlength: 2,
                    required: true
                },
                LAST_NAME: {
                    minlength: 2,
                    required: true
                },

                PERSONAL_GENDER: {
                    required: true
                },
                PERSONAL_PHONE: {
                    required: true
                },
                COMMENT: {
                    required: true
                },
                ACTIVE_ROLE: {
                    required: true
                },
                CITY_ID: {
                    required: true
                },
                REGION_ID: {
                    required: true
                },
                WORK_STREET: {
                    required: true
                },
                WORK_COMPANY: {
                    required: true
                },
                GROUP_USER: {
                    required: true
                },
                USER_NAME_BANK: {
                    required: true
                },
                BANK_CARD: {
                    required: true
                },
                BANK_NAME: {
                    required: true
                },
                AGENCY_ID: {
                    required: true
                },
                PERSONAL_CMND: {
                    required: true
                },
                PERSONAL_MOBILE: {
                    required: true
                },
            },
            submitHandler: function(form_update_stepup) {
                errorHandler3.hide();

                if (confirm("Bạn có chắc là duyệt hồ sờ này đúng không ?")) {

                    $('#AGENCY_ID').attr('disabled', 'disabled');
                    $('#CITY_ID').attr('disabled', 'disabled');
                    $('#REGION_ID').attr('disabled', 'disabled');

                    $("input").removeAttr('disabled');
                    $("input[type='text']").attr("readonly", "readonly");
                    form_update_stepup.submit();
                    return true;
                } else {
                    return false;
                }



            },
            invalidHandler: function(event, validator) { //display error alert on form submit
                errorHandler3.show();
            }
        });
    };

    var runUpdateStepUp1 = function() {

        var form_update_stepup = $('#form_update_stepup');
        var errorHandler3 = $('.errorHandler', form_update_stepup);
        form_update_stepup.validate({
            rules: {
                NAME: {
                    minlength: 2,
                    required: true
                },
                LAST_NAME: {
                    minlength: 2,
                    required: true
                },

                PERSONAL_GENDER: {
                    required: true
                },
                PERSONAL_PHONE: {
                    required: true
                },
                COMMENT: {
                    required: true
                },
                ACTIVE_ROLE: {
                    required: true
                },
                PERSONAL_MANV: {
                    required: true
                },
                PERSONAL_CHUCDANH: {
                    required: true
                },
                CITY_ID: {
                    required: true
                },
                REGION_ID: {
                    required: true
                },
                WORK_STREET: {
                    required: true
                },
                AGENCY_ID: {
                    required: true
                },
            },
            submitHandler: function(form_update_stepup) {
                errorHandler3.hide();

                if (confirm("Bạn có chắc là duyệt tỉnh/thành này đúng không ?")) {
                    $("input").removeAttr('disabled');
                    $("input[type='text']").attr("readonly", "readonly");

                    form_update_stepup.submit();
                    return true;
                } else {
                    return false;
                }



            },
            invalidHandler: function(event, validator) { //display error alert on form submit
                errorHandler3.show();
            }
        });
    };

    return {
        //main function to initiate template pages
        init: function() {
            runSetDefaultValidation();
            runUpdateProfileValidator();
        },
    };
}();