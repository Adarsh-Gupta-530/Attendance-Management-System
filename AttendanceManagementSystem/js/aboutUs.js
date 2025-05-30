document.querySelectorAll('.member').forEach(member => {
    member.addEventListener('click', () => {
        member.classList.toggle('active');
        if (member.classList.contains('active')) {
            member.style.backgroundColor = '#e0f7fa';
        } else {
            member.style.backgroundColor = '#fafafa';
        }
    });
});