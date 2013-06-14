<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
	
	if(isMobile()) {
		include "mobile/footer.php";
	} else {
?>
			</div>
		</div>

		<footer>
			<p>&copy; <?php print __("All rights reserved"); ?> <?php echo date('Y');?> - <?php print __("Powered by"); ?> <a href="#" title="MilkZoft">Sialen Ingenieros</a></p>
		</footer>
	  
		</div>
	</body>
</html>
<?php } ?>