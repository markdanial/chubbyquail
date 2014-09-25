<?php
/**
 * Template Name: Services
 *
 */

get_header(); ?>


		<!-- slice with media query (columns turn to rows under 600px) --> 
		<div class="slice l-mediaquery">
			<div class="slice-row">
				<div class="slice-item">
				  <div class="block">
					<div class="package">Baby Bird</div>
						<div class="price">$1800</div>
						<div class="details">
							<ul>
								<li>8 hours coverage</li>
								<li>1 shooter</li>
								<li>3-5 minute highlight trailer</li>
							</ul>
						</div>
				  </div>
				</div> 
				<div class="slice-item">
				  <div class="block">
					<div class="package">Big Bird</div>
					<div class="price">$2200</div>
						<div class="details">
							<ul>
								<li>10 hours coverage</li>
								<li>2 shooters</li>
								<li>10-12 minute feature film</li>
							</ul>
						</div>
				  </div>
				</div>
				<div class="slice-item">
				  <div class="block">
					<div class="package">Chubby Quail</div>
					<div class="price">$2800</div>
						<div class="details">
							<ul>
								<li>10 hour coverage</li>
								<li>2 shooters</li>
								<li>3-5 minute highlight trailer</li>
								<li>16-20 minute feature film</li>
							</ul>
						</div>
				  </div>
				</div>
			</div>	
		</div>
		
		<!-- slice item width pays attention to content width -->
		<div class="slice slice-auto l-account">
		  <div class="slice-item l-account-settings"><div class="settings">Beyond the packages listed above, our services can generally be tailored to meet your needs. Email or call to find out more.</div></div>
		</div>

<?php get_footer(); ?>
