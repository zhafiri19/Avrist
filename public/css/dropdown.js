 // JavaScript to handle submenu toggle
 document.addEventListener('DOMContentLoaded', function() {
    var dropdownSubmenus = document.querySelectorAll('.dropdown-submenu');
    dropdownSubmenus.forEach(function(submenu) {
        submenu.addEventListener('click', function(e) {
            e.stopPropagation();
            var dropdownMenu = submenu.querySelector('.dropdown-menu');
            if (dropdownMenu.classList.contains('show')) {
                dropdownMenu.classList.remove('show');
            } else {
                dropdownMenu.classList.add('show');
            }
        });
    });
});