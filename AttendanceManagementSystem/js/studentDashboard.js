document.addEventListener('DOMContentLoaded', () => {
    const boxes = document.querySelectorAll('.box');
    boxes.forEach(box => {
        box.addEventListener('mouseover', () => {
            box.classList.add('hovered');
        });
        box.addEventListener('mouseout', () => {
            box.classList.remove('hovered');
        });
    });
});
