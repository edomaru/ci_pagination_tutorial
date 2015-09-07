		</div>
	</div>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script>
	    $("body").on("click", ".pagination a", function() {
	        var url = $(this).attr('href');
	        $("#the-content").load(url);
	        return false;
	    });
	</script>

  </body>
</html>