<form method="post" action="/controller/submit/">

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
   $('.tes').click (function(event){
    var output =$('.output', this);
    console.log(output);
	var e = $('.color', this).html();
	console.log(e);
	
	$.post( "color/color1", {color : e}, function( data ) {
		output.html(data) + "<a  class='one'>total</a>"
	;});

 

    event.stopPropagation();
    if(output.css('display') == 'none'){
        $(".output").hide();
        output.show();
    }else{
    output.hide();
    }
});




$('.one').click(function(event){
    var total = 0;
    event.stopPropagation();
    if (this === event.target) {
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
    }
});
</script>