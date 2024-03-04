document.addEventListener('DOMContentLoaded', function () {
        // Get all navbar links
        var navbarLinks = document.querySelectorAll('.navbar-nav .nav-link');

        // Add click event listener to each navbar link
        navbarLinks.forEach(function (link) {
          link.addEventListener('click', function () {
            // Close the navbar when a link is clicked
            var navbarCollapse = document.querySelector('.navbar-collapse');
            if (navbarCollapse.classList.contains('show')) {
              // Check if the navbar is currently expanded (open)
              navbarCollapse.classList.remove('show');
            }
          });
        });
      });