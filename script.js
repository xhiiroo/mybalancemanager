const rows = document.querySelectorAll("tbody tr");

rows.forEach(row => {
    row.addEventListener('mouseover', () => {
        row.classList.add('highlight');
    });

    row.addEventListener('mouseout', () => {
        row.classList.remove('highlight');
    });
});