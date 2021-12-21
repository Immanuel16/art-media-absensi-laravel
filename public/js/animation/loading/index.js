$(window).on('load', function () {
    setTimeout(() => {
        $('.bg-loader').fadeOut('slow');
    }, 2800);
    let listMonth = [
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember"
    ];
    let dateNow = new Date();
    let month = dateNow.getMonth() === 11 ? listMonth[0] : listMonth[dateNow.getMonth() + 1];
    $(".month").html(month);
})