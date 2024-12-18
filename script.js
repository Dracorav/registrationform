// script.js
$(document).ready(function () {
    $('#railwayForm').on('submit', function (event) {
        const age = $('#age').val();
        if (age <= 0) {
            alert('Please enter a valid age.');
            event.preventDefault();
        }
    });
});
