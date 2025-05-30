// Simple form validation with light effect on submit
document.getElementById('contact-form').addEventListener('submit', function (e) {
    e.preventDefault();
    alert('Form Submitted Successfully!');

    // Light effect animation
    this.classList.add('submitted');
    setTimeout(() => {
        this.classList.remove('submitted');
    }, 1000);
});
