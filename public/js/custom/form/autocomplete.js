$(document).ready(function () {
    const dataCrew = [
        'Angela',
        'Aurel',
        'Artha',
        'Bryan',
        // 'Amran',
        // 'Hanzel',
        'Hizkia',
        'Kevin',
        'Nicky',
        'David',
        'Tius',
        'Filia',
        'Marcella',
        'Nuel',
        'Susi',
        'Reza',
        // 'Karmel',
        // 'Rindi',
        'Roy',
        'Stephanie',
        'Ricky',
        'Vennian',
        'Fredy',
        // 'Nuke',
        'Rika',
        'Deddy',
        'Diesce',
        // 'Evy',
        // 'Rio',
        'Iwan'
    ];

    $("#name").autocomplete({
        source: dataCrew
    });
})