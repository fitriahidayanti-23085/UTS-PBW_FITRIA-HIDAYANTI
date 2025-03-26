document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.contact-form');

    form.addEventListener('submit', function (event) {
        let valid = true;

       
        const nama = form.querySelector('input[name="nama"]');
        if (nama.value.trim() === '') {
            valid = false;
            alert('Nama harus diisi.');
            nama.focus();
            return;
        }

        
        const email = form.querySelector('input[name="email"]');
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email.value.trim())) {
            valid = false;
            alert('Email tidak valid.');
            email.focus();
            return;
        }

      
        const subjek = form.querySelector('input[name="subjek"]');
        if (subjek.value.trim() === '') {
            valid = false;
            alert('Subjek harus diisi.');
            subjek.focus();
            return;
        }

     
        const pesan = form.querySelector('textarea[name="pesan"]');
        if (pesan.value.trim() === '') {
            valid = false;
            alert('Pesan harus diisi.');
            pesan.focus();
            return;
        }

        if (!valid) {
            event.preventDefault();
        }
    });
});
