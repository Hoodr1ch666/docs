
document.getElementById('burgerMenu').addEventListener('click', function() {
   var navLinks = document.getElementById('navLinks');
   navLinks.classList.toggle('active');
});

document.getElementById('toggleButton').addEventListener('click', function () {
   document.getElementById('content').style.display = 'flex';
   this.style.display = 'none';
});


