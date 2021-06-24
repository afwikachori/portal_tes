$(document).ready(function () {
    // cek_realpage();
});


function cek_realpage(){
    if ($("#indexpageview").length != 0) {
       get_data_salary();
    }
}

function get_data_salary() {
    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: '/get_salary',
        type: 'POST',
        datatype: 'JSON',
        success: function (result) {
            alert("suks");
            console.log(result);
        },
        error: function (result) {
            console.log("Cant Show");
        }
    });
}


function edit_modal_komisi() {
    var jud = $("#lbl_komisi1").val();
    var isi = $("#val_komisi1").val();

    $("#edit_val_komisi").val(isi);
    $("#edit_nama_komisi").val(jud);
    $("#modal_edit_komisi").modal("show");
}


function edit_modal_tanggungan(id) {
    var nam = $("#denda_nama" + id).val();
    var nom = $("#denda_nominal" + id).val();
    var ket = $("#denda_ket" + id).val();

    $("#edit_nam_tanggungan").val();
    $("#edit_nom_tanggungan").val();
    $("#edit_ket_tanggungan").val();

    $("#edit_nam_tanggungan").val(nam);
    $("#edit_nom_tanggungan").val(nom);
    $("#edit_ket_tanggungan").val(ket);

    $("#modal_edit_tanggungan").modal("show");
}


$('#minus').click(function () {
    var $input = $(this).parent().find('input');
    var count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
    return false;
});
$('#plus').click(function () {
    var $input = $(this).parent().find('input');
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
});


function plus_keterlambatan() {
    var inputo = $("#val_terlambat").val();
    var fields = inputo.split(' Hari');

    var dt = parseInt(fields[0]);
    var newval = dt + 1;
    $("#val_terlambat").val(newval + " Hari");

}

function min_keterlambatan() {
    var inputo = $("#val_terlambat").val();
    var fields = inputo.split(' Hari');

    var dt = parseInt(fields[0]);
    var newval = dt - 1;
    $("#val_terlambat").val(newval + " Hari");
}

