$(function () {
  // 1. Saat tombol TAMBAH diklik
  $(".tombolTambahData").on("click", function () {
    $("#formModalLabel").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");

    // Kosongkan form agar data bekas 'Ubah' hilang
    $("#nama").val("");
    $("#nrp").val("");
    $("#email").val("");
    $("#jurusan").val("");
    $("#id").val("");

    // Kembalikan action ke fungsi TAMBAH
    $(".modal-body form").attr(
      "action",
      "http://localhost/BELAJAR-PHP/PHP-MVC/public/mahasiswa/tambah"
    );
  });

  // 2. Saat tombol UBAH diklik
  $(".tampilModalUbah").on("click", function () {
    $("#formModalLabel").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");

    // Ubah action ke fungsi UBAH
    $(".modal-body form").attr(
      "action",
      "http://localhost/BELAJAR-PHP/PHP-MVC/public/mahasiswa/ubah"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/BELAJAR-PHP/PHP-MVC/public/mahasiswa/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        console.log(data);
        $("#nama").val(data.nama);
        $("#nrp").val(data.nrp);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });
});
