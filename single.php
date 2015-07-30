<?php include 'header.php' ?>
<section id="blog">
	<section class="title-section">
		<div class="blog-wrapper">
			<h3 class="title wow fadeInDown">My Blog</h3>
			<span class=" subtitle wow fadeInDown" data-wow-delay="400ms">Posted on  July, 8th, 2015</span>
		</div>
	</section>

	<div class="blog-wrapper">
		<?php include 'sidebar.php' ?>
		<section class="post-content">
			<h3>Hear's a Section</h3>
			<p>
				Tofu church-key health goth plaid. 90's lumbersexual migas typewriter, wolf kale chips direct trade pour-over drinking vinegar literally. Vice banh mi single-origin coffee, Wes Anderson kale chips messenger bag stumptown Blue Bottle literally XOXO authentic 8-bit Banksy kitsch McSweeney's. Pour-over normcore VHS gluten-free, tilde sustainable Vice plaid fashion axe single-origin coffee. Kale chips Echo Park church-key, PBR tousled put a bird on it Pinterest migas Tumblr roof party post-ironic sustainable. Seitan fap salvia, VHS tousled swag tote bag. Tofu chia art party beard wolf, listicle deep v crucifix drinking vinegar freegan typewriter Schlitz.
			</p>

			<p>
				Hoodie chia vinyl, Truffaut semiotics Echo Park before they sold out retro. Gastropub Godard pickled cardigan Bushwick Williamsburg banjo. 8-bit cornhole direct trade, art party plaid wayfarers mixtape fashion axe bicycle rights tousled biodiesel before they sold out sustainable keffiyeh Neutra. Tilde Wes Anderson disrupt, skateboard small batch tofu Williamsburg. DIY food truck lumbersexual tote bag kitsch. Seitan keffiyeh Brooklyn pour-over vegan, Bushwick polaroid kitsch. Quinoa kogi four dollar toast beard fap, cred readymade Blue Bottle gastropub occupy scenester polaroid.
			</p>

			<pre>
function megaHoverOver(){
		$(this).find(".sub").stop().fadeTo('fast', 1).show();
			
		//Calculate width of all ul's
		(function($) { 
			jQuery.fn.calcSubWidth = function() {
				rowWidth = 0;
				//Calculate row
				$(this).find("ul").each(function() {					
					rowWidth += $(this).width(); 
				});	
			};
		})(jQuery); 
		
		if ( $(this).find(".row").length > 0 ) { //If row exists...
			var biggestRow = 0;	
			//Calculate each row
			$(this).find(".row").each(function() {							   
				$(this).calcSubWidth();
				//Find biggest row
				if(rowWidth > biggestRow) {
					biggestRow = rowWidth;
				}
			});
			//Set width
			$(this).find(".sub").css({'width' :biggestRow});
			$(this).find(".row:last").css({'margin':'0'});
			
		} else { //If row does not exist...
			
			$(this).calcSubWidth();
			//Set Width
			$(this).find(".sub").css({'width' : rowWidth});
			
		}
	}</pre>

			<p>
				Lomo plaid street art fingerstache, brunch freegan Banksy jean shorts drinking vinegar skateboard narwhal typewriter pork belly Pinterest. Quinoa Echo Park irony kitsch selfies paleo cronut. Thundercats synth lo-fi slow-carb cardigan wolf ennui. Banksy occupy mustache irony Schlitz, bicycle rights Kickstarter XOXO synth. PBR&B health goth single-origin coffee, literally tousled asymmetrical banh mi authentic master cleanse church-key normcore Pinterest. Godard fashion axe flannel mixtape, Wes Anderson pop-up brunch. Banjo synth vinyl Carles.
			</p>

			<p>
				Bushwick squid scenester, vegan disrupt Shoreditch paleo viral banh mi twee wayfarers. Lomo Carles you probably haven't heard of them raw denim roof party, tousled cray Banksy jean shorts keytar mustache drinking vinegar wayfarers aesthetic. Art party roof party viral PBR, chia Brooklyn before they sold out flannel 90's tilde semiotics master cleanse chambray banh mi distillery. Scenester cred Intelligentsia, Neutra keytar wolf cornhole actually beard locavore Carles post-ironic bespoke. IPhone brunch lomo before they sold out hoodie. Messenger bag kale chips quinoa, iPhone farm-to-table asymmetrical cardigan Banksy viral. Typewriter narwhal next level Odd Future food truck YOLO, drinking vinegar iPhone aesthetic.
			</p>
		</section>
	</div>
</section>

<script>//for the pre tags
$("pre").html(function (index, html) {
	return html.replace(/^(.*)$/mg, "<span class=\"line\">$1</span>")
});
</script>
<?php include 'footer.php' ?>