// public/js/search.js

// Function to perform client-side filtering
function filterTable() {
    var keyword = $('#searchInput').val().toLowerCase();

    $('tbody tr').each(function () {
        var rowText = $(this).text().toLowerCase();
        if (rowText.includes(keyword)) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
}

// Attach the filter function to the input's keyup event
$('#searchInput').on('keyup', filterTable);
