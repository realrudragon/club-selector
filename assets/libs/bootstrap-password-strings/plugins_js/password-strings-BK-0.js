$(function(){

    /* <input id="$("#xxxxx")" type="password" class="form-control" name="password" value="jQueryScript.Net"> */

    $("#password1").peeper({
        mask: false
    });

    $("#password2").peeper({
        mask: false,
        showPasswordBtn: false
    });

    $("#password3").peeper({
        mask: false,
        showPasswordCss: 'fa fa-eye',
        showCopyBtn: false
    });

    $("#password4").peeper({
        mask: true,
        maskCss: 'gray'
    });

    $("#password5").peeper({
        maskCss: 'gray',
        showEvent: 'click',
        showPasswordBtn: true
    });

    $("#password6").peeper({
        maskCss: 'gray',
        showPasswordBtn: false,
        showCopyBtn: false,
        showElement: '.peeper-mask',
        showEvent: 'click'
    });

    $("#password7").peeper({
        maskCss: 'blue',
        showPasswordBtn: true,
        showCopyBtn: false,
        showPasswordCss: 'fa fa-lock',
        showEvent: 'click'
    });
    $("#password8").peeper({
        maskCss: 'red',
        showPasswordBtn: true,
        showCopyBtn: false,
        showPasswordCss: 'fa fa-lock',
        showEvent: 'click'
    });
    $("#password9").peeper({
        maskCss: 'green',
        showPasswordBtn: true,
        showCopyBtn: false,
        showPasswordCss: 'fa fa-lock',
        showEvent: 'click'
    });

    $("#password10").peeper({
        maskCss: 'green',
        maskOpacity: 0.25,
        showPasswordBtn: false,
        showCopyBtn: true,
        showEvent: 'click'
    });
    $("#password11").peeper({
        maskCss: 'gray',
        maskOpacity: 0.25,
        showPasswordBtn: false,
        showCopyBtn: true,
        showEvent: 'click'
    });

    $("#password12").peeper({
        maskCss: 'blue',
        maskOpacity: 0.25,
        showPasswordBtn: true,
        showCopyBtn: true,
        showEvent: 'click'
    });
});
