

	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
	<script src="<?= base_url('public/assets/js/bootstrap.bundle.min.js')?>"></script>

	<script>
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
	  return new bootstrap.Tooltip(tooltipTriggerEl)
	})
	</script>

  </body>
</html>