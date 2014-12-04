$('#reg').on("submit", function() {
    var arr_inp = [$('#email'), $('#fname'), $('#sname'), $('#pass'), $('#rpass')];

    arr_inp[3].removeClass("error");

    if(arr_inp[3].val() != arr_inp[4].val()) {
        arr_inp[4].addClass("error");
        return false;
    }

    is_valid_inp(arr_inp);

    $.post(
        "/s/reg",
        {
            email: arr_inp[0].val(),
            fname: arr_inp[1].val(),
            sname: arr_inp[2].val(),
            pass: arr_inp[3].val()
        },
        reg_success
    );

    return false;
});

function reg_success(res) {
    switch(res) {
        case("-1"):
            break;
        case("5"):
            go("/in");
            break;
        default:
            break;
    }
}

$('#in').on("submit", function() {
    var arr_inp = [$('#email'), $('#pass')];

    is_valid_inp(arr_inp);

    $.post(
        "/s/in",
        {
            email: arr_inp[0].val(),
            pass: arr_inp[1].val()
        },
        in_success
    );

    return false;
});

function in_success(res) {
    switch(res) {
        case("-1"):
            break;
        case("5"):
            go("/ord");
            break;
        default:
            break;
    }
}

function is_valid_inp(arr) {
    var e = false;
    for(var i = 0; i < arr.length; i++) {
        arr[i].removeClass("error");

        if(arr[i].val() == "" || arr[i].val() == null) {
            arr[i].addClass("error");
            e = true;
        }
    }

    if(e)
        return false;
}

function go(link) {
    window.location.href = link;
}