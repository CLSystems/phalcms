jQuery(function ($) {
    $.datepicker.regional['vi'] = {
        closeText: 'Đóng',
        prevText: '&#x3c;Trước',
        nextText: 'Tiếp&#x3e;',
        currentText: 'Hôm nay',
        monthNames: [
            'Tháng Một',
            'Tháng Hai',
            'Tháng Ba',
            'Tháng Tư',
            'Tháng Năm',
            'Tháng Sáu',
            'Tháng Bảy',
            'Tháng Tám',
            'Tháng Chín',
            'Tháng Mười',
            'Tháng Mười Một',
            'Tháng Mười Hai',
        ],
        monthNamesShort: [
            'Th 1',
            'Th 2',
            'Th 3',
            'Th 4',
            'Th 5',
            'Th 6',
            'Th 7',
            'Th 8',
            'Th 9',
            'Th 10',
            'Th 11',
            'Th 12',
        ],
        dayNames: [
            'Chủ Nhật',
            'Thứ Hai',
            'Thứ Ba',
            'Thứ Tư',
            'Thứ Năm',
            'Thứ Sáu',
            'Thứ Bảy',
        ],
        dayNamesShort: [
            'CN',
            'T2',
            'T3',
            'T4',
            'T5',
            'T6',
            'T7',
        ],
        dayNamesMin: [
            'CN',
            'T2',
            'T3',
            'T4',
            'T5',
            'T6',
            'T7',
        ],
        weekHeader: 'Tu',
        dateFormat: 'dd/mm/yy',
        firstDay: 0,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['vi']);
});