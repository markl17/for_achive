

<section>
	
	
	<table class="table table-striped">
		<tbody>
			<?php  
				foreach($color as $colors){ 
					$output = '';$total=0;
					//foreach( $votes as $array) {
						//if($array->color === $colors->color) {
							//$output .= '<span >'. $array->votes . '</span>' . '<br>';
						//}
					//}
			?>
			<tr>
                <td>
					<div class="tes">
						<a href="#" class="color"><?php echo $colors->color; ?></a>
                        <div class="output" >
                            <div>
								<?php echo $output; ?>
								
                               <div class="something" style="display:none"></div>
							</div> 
                        </div>
					</div>  
				</td>
            </tr>  
			
		</tbody>
	</table>
    <?php } ?>
</section>
<script>

   $('.color').click(function(event){
    
	var output =$(this).siblings('.output');;
	var e = $(this).html();
	
	$.post( "color/color1", {color : e}, function( data ) {
		var out=data + '<a  href="#" class="one">total</a>'+'<div class="something" style="display:none"></div>';
		console.log(output);
		output.html(out);
	});
    event.stopPropagation();
    if(output.css('display') == 'none'){
        $(".output").hide();
        output.show();
    }else{
    output.hide();
    }
});



$(document).on('click', '.one', function(event){
//$('.one').click(function(event){
    var total = 0;
    event.stopPropagation();
    
    $(this).siblings('span').each(function() {
        var x = Number($(this).text());
            total += x;
        });
			
        var output = $(this).siblings(".something");
        output.toggle( ).html(total);
        if(output.css('display') != 'none'){
            $(".something").hide();
            output.show();
        }else{
            output.hide();
        }
    
});

</script>
