const rows = document.querySelectorAll("tbody tr");

rows.forEach(row => {
    row.addEventListener('mouseover', () => {
        row.classList.add('bg-success', 'bg-gradient', 'bg-opacity-50');
    });

    row.addEventListener('mouseout', () => {
        row.classList.remove('bg-success', 'bg-gradient', 'bg-opacity-50');
    });
});

const ahover = document.querySelectorAll("tbody tr td a");

ahover.forEach(link => {
    link.addEventListener('mouseover', () => {
        link.classList.add('text-primary');
    });

    link.addEventListener('mouseout', () => {
        link.classList.remove('text-primary');
    });
});