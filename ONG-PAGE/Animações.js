const box = document.getElementById('caixa-nav');

box.addEventListener('mouseover', () => {
    box.style.transform = 'translateX(50px)';
    box.style.backgroundColor = '#e74c3c';
});

box.addEventListener('mouseout', () => {
    box.style.transform = 'translateX(0)';
    box.style.backgroundColor = '#3498db';
});