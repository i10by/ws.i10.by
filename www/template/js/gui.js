$('form#reg').on("submit", function() {
    var arr_inp = [$('#email'), $('#fname'), $('#sname'), $('#pass')];

    is_valid_inp(arr_inp);
});

function is_valid_inp(arr) {
    for(var i = 0; i < arr.length; i++) {
        if(arr[i].val() == "" || arr[i].val() == null) {

        }
    }
}