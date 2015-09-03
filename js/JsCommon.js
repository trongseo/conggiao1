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
    MyAlert: function(yourMessage){
        BootstrapDialog.alert(yourMessage);
    }
};


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