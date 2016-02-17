</section>
</section>
 <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
    
  <script type="text/javascript">
      //custom select box
/*
      $(function(){
          $('select.styled').customSelect();
      });
	  */
	  
	//hilight current page in sidebar
	var cur = $('a[href^="<?php echo basename($_SERVER['PHP_SELF']); ?>"]');
	console.log(cur);
	cur.each(function( index ) {
  
	innera=$( this );
	categorya=innera.parent().parent();
	if(categorya.is(".sub")){
		innera.parent().addClass("active");
		categorya.prev().addClass("active");
	}
	else
		
		innera.addClass("active");
});
  </script> 
</body>

</html>
