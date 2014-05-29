		<footer>
			<div class="footer__wrapper">
				<article class="footer__content">
					<p><a href="mailto:jeffrey@jeffreysmithdesigner.com"><span class=" icon-envelope"></span>Get in touch</a><p>
					
				</article>
				<article class="footer__content">
					
					<p><a href="smithJeffreyResume.pdf"><span class="icon-download"></span>Download my r&eacute;sum&eacute;</a></p>
				</article>
				
			</div>
			<div class="footer__wrapper">
				<p class="copy">Jeffrey Smith Designer &copy; <?php echo date('Y'); ?></p>
			</div>
		</footer>
	</div>

<script>
var menuButton = document.getElementById('menuButton');
menuButton.addEventListener('click', function (e) {
    menuButton.classList.toggle('is-active');
    e.preventDefault();
});

var menuBox = document.getElementById('menuBox');
menuButton.addEventListener('click', function() { 
	menuBox.classList.toggle('active');

});



var menuText = document.getElementById("menuBoxP");
menuButton.addEventListener('click', function() {
  if (menuText.getAttribute("data-text-swap") == menuText.innerHTML) {
    menuText.innerHTML = menuText.getAttribute("data-text-original");
  } else {
    menuText.setAttribute("data-text-original", menuText.innerHTML);
    menuText.innerHTML = menuText.getAttribute("data-text-swap");
  }
}, false);

</script>

</body>
</html>