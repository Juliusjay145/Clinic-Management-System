$('#dob').datepicker({
    onSelect: function(value, ui) {
        var today = new Date(), 
            age = today.getFullYear() - ui.selectedYear;
        $('#age').text(age);
    },
    maxDate: '+0d',
    changeMonth: true,
    changeYear: true,
    defaultDate: '-18yr',
});