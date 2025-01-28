<footer>
	<div class="contatiner">
		<div class="row m-0">
			<div class="col d-flex flex-md-row flex-column justify-content-center align-items-center py-5">
				<a href="https://metropolevsech.eu/" target="_blank"><img src="private/img/logos/praha.png" class="footer-logo"/></a>
				<a href="https://www.mk.gov.cz/" target="_blank"><img src="private/img/logos/mk.png" class="footer-logo"/></a>
				<a href="https://www.pomezi.com/" target="_blank"><img src="private/img/logos/pomezi.png" class="footer-logo"/></a>
			</div>
		</div>
	</div>
</footer>
<script>
const navLinks = document.querySelectorAll('.nav-link');
const navbarCollapse = document.querySelector('.navbar-collapse');

navLinks.forEach(link => {
  link.addEventListener('click', () => {
    if (window.innerWidth < 992) { // Zavřít jen na malých obrazovkách
      const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
        toggle: true,
      });
    }
  });
});
</script>