$(function () {
  $(".tampilModalTambah").on("click", (e) => {
    e.preventDefault();
    $("#judulModal").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
  });

  $(".tampilModalUbah").on("click", (e) => {
    e.preventDefault();
    $("#judulModal").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/phpmvc/public/mahasiswa/ubah"
    );

    const id = $(e.target).data("id");
    $.ajax({
      url: "http://localhost/phpmvc/public/mahasiswa/getubah",
      data: {
        id: id,
      },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id);
        $("#nama").val(data.nama);
        $("#npm").val(data.npm);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
      },
    });
  });
});