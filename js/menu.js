document.addEventListener('DOMContentLoaded', () => {
    const menuIcon = document.getElementById('menuIcon');
    const mobileMenu = document.getElementById('mobileMenu');
    const closeMenuButton = document.getElementById('closeMenu');

    menuIcon.addEventListener('click', () => {
        mobileMenu.style.display = 'block';
    });

    closeMenuButton.addEventListener('click', () => {
        mobileMenu.style.display = 'none';
    });
});