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