
document.addEventListener('DOMContentLoaded', function() {
    alert('Selamat datang di Website Saya!');
});


const profileImg = document.querySelector('.profile-img');
profileImg.addEventListener('mouseover', function() {
    this.style.transform = 'scale(1.1)';
});
profileImg.addEventListener('mouseout', function() {
    this.style.transform = 'scale(1)';
});
