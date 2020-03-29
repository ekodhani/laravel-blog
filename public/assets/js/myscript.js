const flashdata = $('.flash-data').data('flashdata');

if (flashdata) {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: flashdata,
    });
}

const flash = $('.flash-data-success').data('flashdata');

if (flash) {
    Swal.fire({
        icon: 'success',
        title: 'Terima Kasih',
        text: flash,
    });
}


// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apakah Kamu Yakin ?',
        text: "Data Akan Di Hapus Loh ??",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Aja Deh'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    });
});
