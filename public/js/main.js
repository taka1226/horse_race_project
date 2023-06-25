$(document).ready(function () {
    let slideHeight = parseInt(document.documentElement.clientHeight);
    /**
  $('.side').css('height', slideHeight);

  let side = $('.side').outerWidth();
  let header = $('.header').outerWidth();
  $('.header').css('width', header - side);

  let headerHeight = $('.header').outerHeight();
  $('.main').css({ 'padding-left': side, 'padding-top': headerHeight });
  **/
});

$(function () {
    $(".js-link").each(function () {
        $(this).on("click", function () {
            $(this).toggleClass("on");
            $("+.submenu", this).slideToggle();
            return false;
        });
    });

    $(".sub-js-link").each(function () {
        $(this).on("click", function () {
            $(this).toggleClass("on");
            $("+.s_submenu", this).slideToggle();
            return false;
        });
    });

    $(".side .account.open").each(function () {
        $(this).on("click", function () {
            $(this).toggleClass("active");
            $(".side .setting_box").toggleClass("active");
            return false;
        });
    });

    // $('.js-modal-open').each(function () {
    //   $(this).on('click', function () {
    //     var target = $(this).data('target');
    //     var dismiss = $(this).data('dismiss');
    //     var modal = document.getElementById(target);
    //     let hide = document.getElementById(dismiss);
    //     $(modal).fadeIn();
    //     $(hide).fadeOut();
    //     $('body').addClass('scroll-point');
    //     return false;
    //   });
    // });

    $(".js-modal-close").on("click", function () {
        $(".js-modal").fadeOut();
        $("body").removeClass("scroll-point");
        return false;
    });

    $(".content_block .tab_btn").click(function () {
        var index = $(".content_block .tab_btn").index(this);

        //URLのget パラメータを変更する
        let href = new URL(location.href);
        href.searchParams.set("tab", index);
        let pathname_get_param = href.pathname + href.search; //get パラメータ付きの pathname を所得
        history.replaceState("", "", pathname_get_param);

        $(".content_block .tab_btn, .content_block .tab_panel").removeClass(
            "active"
        );
        $(this).addClass("active");
        $(".content_block .tab_panel").eq(index).addClass("active");
    });
    $(".sub_tab_block .sub_btn").click(function () {
        var index = $(".sub_tab_block .sub_btn").index(this);
        $(".sub_tab_block .sub_btn, .sub_tab_block .sub_panel").removeClass(
            "active"
        );
        $(this).addClass("active");
        $(".sub_tab_block .sub_panel").eq(index).addClass("active");
    });
    $(".prop_block .prop_btn").click(function () {
        var index = $(".prop_block .prop_btn").index(this);
        $(".prop_block .prop_btn, .prop_block .prop_panel").removeClass(
            "active"
        );
        $(this).addClass("active");
        $(".prop_block .prop_panel").eq(index).addClass("active");
    });
    $(".modal_block .tab_btn").click(function () {
        var index = $(".modal_block .tab_btn").index(this);
        $(".modal_block .tab_btn, .modal_block .tab_panel").removeClass(
            "active"
        );
        $(this).addClass("active");
        $(".modal_block .tab_panel").eq(index).addClass("active");
    });
    $("section.count_nav > ul.list > li > p").on("click", function () {
        $('input[name="status_id"]').val($(this).data("status"));
        $("#form_search").submit();
    });
});

function numFormat(value, lower = null, upper = null) {
    const commaFormatter = new Intl.NumberFormat("ja-JP");
    if (value != "") {
        value = numberify(value);
        if (lower != null && !isNaN(lower) && value < lower) {
            value = lower;
        }
        if (upper != null && !isNaN(upper) && value > upper) {
            value = upper;
        }
        num = commaFormatter.format(value);

        return num;
    } else {
        return "";
    }
}

function fourDigit(value) {
    if (value == "000") {
        value = "";
    }
    if (value != "") {
        value = numberify(value);
        value = ("0000" + value).slice(-4);
        return value;
    } else {
        return "";
    }
}

function overFourDigit(value) {
    if (value != "") {
      value = numberify(value);
      return value > 9999 ? value : fourDigit(value);
    } else {
        return "";
    }
}

function oneDecimal(value){
    if (value != "") {
        value = decimalify(value);
        const array = value.split('.');
        if(array.length > 1 ){
            value = array[0] + '.' + array[1].slice(0,1);
        }
        return value;
    } else {
        return "";
    }
}

function numberify(value) {
    if (value != "") {
      value = value.replace(/[０-９]/g, function smallcap (s) { return String.fromCharCode(s.charCodeAt(0) - 0xfee0)});
      value = value.replace(/[^0-9]+/g, "");

      return value;
    } else {
        return 0;
    }
}

function decimalify(value) {
    if (value != "") {
        value = value.replace(/[０-９]/g, function smallcap (s) { return String.fromCharCode(s.charCodeAt(0) - 0xfee0)});
        value = value.replace(/[。．]/, '.');
        value = value.replace(/[^0-9.]+/g, "");
        const array = value.split('.');
        if (array.length > 1){
            let result = '';
            let count = 0;
            array.filter(val => {
                result += val;
                if(count == 0) result += '.';
                count ++;
            });
            value = result;
        }
        
        return value;
    } else {
        return "";
    }
}

// num=値 digit=桁数
function zeroPadding(num, digit) {
    if (num.toString().length > digit) {
        return num;
    }
    return (Array(digit).join("0") + num).slice(-digit);
}
