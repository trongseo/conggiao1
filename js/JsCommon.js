/**
 * Created by PHAT on 9/3/15.
 */
function checkEmptyItem(objid,titleobj){
    var plsa='Vui lòng nhập!';
    var objval = $("#"+objid).val();
    if(objval == ""){
        $("#"+objid).bt(plsa,{
            trigger: 'none',
            clickAnywhereToClose : false,
            positions: ['top'],
            fill: 'rgba(33, 33, 33, .8)',
            spikeLength: 10,
            spikeGirth: 10,
            cssStyles: {color: '#FFF', fontSize: '11px',textAlign:'justify',width:'auto'}
        });
        $("#"+objid).btOn();
        $("#"+objid).focus();
        return false;
    }
    return true;
}
var ClassMyValidate = {
    checkEmptyItem: function (objid,titleobj) {
        var plsa='Vui lòng nhập!';
        var objval = $("#"+objid).val();
        if(objval == ""){
            $("#"+objid).bt(plsa,{
                trigger: 'none',
                clickAnywhereToClose : false,
                positions: ['top'],
                fill: 'rgba(33, 33, 33, .8)',
                spikeLength: 10,
                spikeGirth: 10,
                cssStyles: {color: '#FFF', fontSize: '11px',textAlign:'justify',width:'auto'}
            });
            $("#"+objid).btOn();
            $("#"+objid).focus();
            return false;
        }
        $("#"+objid).btOff();
        return true;
    },
    checkSamePassN: function ( objid, objid1) {
        var plsa='Vui lòng nhập mật khẩu giống nhau!';
        var title = $("#"+objid).val();
        var title1 = $("#"+objid1).val();
        var reVal=true;
        if (title!=title1) {

            $("#"+objid).bt(plsa,{
                trigger: 'none',
                clickAnywhereToClose : false,
                positions: ['top'],
                fill: 'rgba(33, 33, 33, .8)',
                spikeLength: 10,
                spikeGirth: 10,
                cssStyles: {color: '#FFF', fontSize: '11px',textAlign:'justify',width:'auto'}
            });
            $("#"+objid).btOn();
            $("#"+objid).focus();
            reVal=false;
        }
        return reVal;
    },
    checkValidEmail: function (objid,titleobj) {
        var emailv = $("#"+objid).val();
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        var isvalid= re.test(emailv);


        var plsa='Email chưa chính xác!';

        if(isvalid == false){
            $("#"+objid).bt(plsa,{
                trigger: 'none',
                clickAnywhereToClose : false,
                positions: ['top'],
                fill: 'rgba(33, 33, 33, .8)',
                spikeLength: 10,
                spikeGirth: 10,
                cssStyles: {color: '#FFF', fontSize: '11px',textAlign:'justify',width:'auto'}
            });
            $("#"+objid).btOn();
            $("#"+objid).focus();
            return false;
        }
        $("#"+objid).btOff();
        return isvalid;
    },
    ShowError: function (objid,message) {

        var plsa=message;
        var objval = '';
        if(objval == ""){
            $("#"+objid).bt(plsa,{
                trigger: 'none',
                clickAnywhereToClose : false,
                positions: ['top'],
                fill: 'rgba(33, 33, 33, .8)',
                spikeLength: 10,
                spikeGirth: 10,
                cssStyles: {color: '#FFF', fontSize: '11px',textAlign:'justify',width:'auto'}
            });
            $("#"+objid).btOn();
            $("#"+objid).focus();

        }

    },
    MyAlert: function(yourMessage){
        BootstrapDialog.alert(yourMessage);
    }
};
function alertMore(yourMessage){
    BootstrapDialog.alert(yourMessage);
}
/////
var myApp;
myApp = myApp || (function () {

        var pleaseWaitDiv = $('<div class="modal hide" id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false"><div class="modal-header"><h1>Processing...</h1></div><div class="modal-body"><div class="progress progress-striped active"><div class="bar" style="width: 100%;"></div></div></div></div>');
        return {
            showPleaseWait: function() {
                pleaseWaitDiv.modal();
            },
            hidePleaseWait: function () {
                pleaseWaitDiv.modal('hide');
            },

        };
    })();
////

function wailtLoad(){
   // $('body').append('<div  class="overlay" style="position:absolute;top:10;left:10;width:100%;height:100%;z-index:1000;color: #000;width:0px">Đang tải....... </div>');
    $('#bodyEnd').show();
    document.body.style.cursor='wait';
 //   myApp.showPleaseWait();
}
function wailtLoadEnd(){
   // $('.overlay').hide();
 $('#bodyEnd').hide();
    document.body.style.cursor='default';
   // myApp.hidePleaseWait();
}
function checkSamePassN( objid, objid1){
    var plsa='Vui lòng nhập mật khẩu giống nhau!';
    var title = $("#"+objid).val();
    var title1 = $("#"+objid1).val();
    var reVal=true;
    if (title!=title1) {

        $("#"+objid).bt(plsa,{
            trigger: 'none',
            clickAnywhereToClose : false,
            positions: ['top'],
            fill: 'rgba(33, 33, 33, .8)',
            spikeLength: 10,
            spikeGirth: 10,
            cssStyles: {color: '#FFF', fontSize: '11px',textAlign:'justify',width:'auto'}
        });
        $("#"+objid).btOn();
        $("#"+objid).focus();
        reVal=false;
    }
    return reVal;
}