<section>
	
	
	<table class="table table-striped">
		
                <tbody>
<?php  foreach($color as $colors){ ?>	
 <?php
$output = '';$total=0;
foreach( $votes as $array) {
    if($array->color === $colors->color) {
        $output .= '<span >'. $array->votes . '</span>' . '<br>';
        //$total = $total + $array->votes;
    }
}
?>
		<tr>
                    <td><div class="tes">
                            <a href="#" ><?php echo $colors->color; ?></a>
                        <div class="output" style="display:none">
                            <div>   <?php echo $output; ?><a  class='tes1'>total</a>
                           
                               
                             <div class="something" style="display:none"><?php  echo $total;?></div>
                           </div> 
                        </div>
                        </div> </td>
              
<?php }?>
<script>
    $('.tes').click (function(){
    var output  = $(this).find(".output");
    if(output.css('display') == 'none'){
        $(".output").hide();
        output.show();
    }else{
        output.hide();
    }
});
    $('.tes1').click(function(){
        //$(this).find('.tes1')(".something").show(); 
		var total = 0;
		$(this).siblings('span').each(function() {

		
			var x = Number($(this).text());
			total += x;
		});
		alert(total);
    });
</script>
		</tr>


		
	
		</tbody>
	</table>
    
</section>


