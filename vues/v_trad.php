<div class="container">


	<div class="row-fluid">

		<div id="toTranslate" class="span6">
			<div class="row-fluid languages"></div>
			<textarea rows="8" cols="40"><?php echo $aPad; ?></textarea>
		</div>
		<div class="span6">
			<div class="row-fluid languages">	
				<div id="fr" class="flag"><img src="include/img/img_site/flag_fr.jpg"></div>
				<div id="en" class="flag"><img src="include/img/img_site/flag_En.jpg"></div>
			</div>
			<textarea id="translated" rows="8" cols="40"></textarea>
		</div>	
	</div>	
</div>
<script>
	$('.flag').click(function(){
	    $.ajax({
	        type:"POST",
	        data:"lang="+$(this).attr('id')+"&text="+$('#toTranslate').text(),
	        url:"model/m_trad.php",
	        dataType:"html",
	        success:function(data){
	          $('#translated').text(data);
	        }
	    });   
    });  


</script>