<?php
/*
Template Name: Pagebuilder
 */

get_header(); ?>

<!-- Section : Banner -->
<div class="site-banner" data-uk-slideshow>
    <ul class="uk-slideshow">
        <li class="uk-overlay uk-height-viewport">
			<img class="" src="<?php echo get_template_directory_uri();?>/assets/dummy-images/banner-img-1.png">
			<div class="uk-overlay-panel uk-flex uk-flex-center uk-flex-middle">
				<div class="uk-width-medium-9-10 uk-text-center">
					<h1>Customers fel valued when you <strong>understand</strong> them.<br>Listen to your customers and deliver the promisr of AI in voice</h1>
					<div class="spacer-v-3"></div>
					<a class="uk-button uk-button-default">Get started</a>
				</div>
			</div>
        </li>
    </ul>
</div>
<!-- End -->

<!-- Section : Self-service block -->
<div class="uk-block tm-self-service-block">
	<div class="uk-container uk-container-center">
		<div class="uk-grid uk-grid-large" data-uk-margin>
			<div class="uk-width-medium-1-2">
				<h2 class="uk-h1">Your Self-Service Wish List.<br><strong class="tm-color">SOLVED.</strong></h2>
				<div class="spacer-v-5"></div>
				<img src="<?php echo get_template_directory_uri();?>/assets/dummy-images/dummy-2.png">
			</div>
			<div class="uk-width-medium-1-2">
				<h6>The promise of AI can be delivered in voice. It all starts with listening to your customers. Speakeasy AI’s speech-to-intent technology enables a solution that solves your customer support wish list.</h6>
				<ul class="tm-styled-bullets">
					<li>I wish I knew exactly what our customers were asking in the IVR.</li>
					<li>I wish I knew why my customers aren’t using our IVR self-help?</li>
					<li>I wish I knew what % of calls that hit the call center could have been self serviced </li>
					<li>I wish I knew why customers keep ending up at a Billing Agent when they need Technical Support!</li>
					<li>I wish I knew why I can’t just plug our chat bot into our IVR.</li>
				</ul>
				<div class="uk-text-center">
					<a class="uk-button uk-button-default">Share my wish list</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End -->

<!-- Section : Help at Hello -->
<div class="uk-block tm-hah">
	<div class="uk-container uk-container-center">
		<div class="tm-panel-box">
			<div class="spacer-v-1"></div>
			<h2 class="uk-text-center">Help at <strong>hello</strong></h2>
			<div class="spacer-v-3"></div>
			<div class="uk-width-8-10 uk-container-center">
				<div class="uk-grid uk-text-center" data-uk-margin>
					<div class="uk-width-medium-1-3">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/numbered-icon-1.png">
						<h4>intent match</h4>
					</div>
					<div class="uk-width-medium-1-3">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/numbered-icon-2.png">
						<h4>Click to train</h4>
					</div>
					<div class="uk-width-medium-1-3">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/numbered-icon-3.png">
						<h4>Improvement cycle</h4>
					</div>
				</div>
				<div class="uk-margin-large-top">
					<div class="uk-grid uk-grid-large uk-flex-middle uk-grid-divider uk-grid-match" data-uk-margin data-uk-grid-match>
						<div class="uk-width-medium-1-2">
							Speakeasy AI will give your customers the voice experience they deserve (expect). Speech-to-intent-powered AI enables understanding of complete audio sentences, despite background noise, accents or length. 
						</div>
						<div class="uk-width-medium-1-2 tm-quote">
							<h4>
								Your customers won’t miss “pressing 1 for help” “screaming agent”
							</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="spacer-v-3"></div>
		</div>
	</div>
</div>
<!-- End -->

<!-- Section : What we do -->
<div class="uk-block tm-wwd">
	<div class="uk-container uk-container-center">
		<div class="uk-flex uk-flex-center">
			<div class="uk-text-center tm-panel-heading">
				<h4 class="tm-color">What we do</h4>
				<h2 class="uk-h1">We’ve Got Everything You Need!</h2>
			</div>
		</div>
		<div class="spacer-v-3"></div>
		<div class="uk-grid" data-uk-margin="{cls:'tm-margin-large-top'}">
			<div class="uk-width-medium-1-2">
				<div class="tm-panel-box">
					<div class="uk-clearfix">
						<img class="uk-float-left" src="<?php echo get_template_directory_uri();?>/assets/images/chat-icon-1.png">
						<div class="tm-overflow-hidden tm-margin-large-top">
							<h4>Listen</h4>
							<p class="tm-minimize">
								Speakeasy AI can listen to an entire sentence  about their experience and turn that into ranked intents. Our system is takes three speech components and uses them all to understand what a users is saying. Our solution delivers up to 50% greater accuracy for understanding customer intent. Our dashboard provides real time data showing  what your customers are trying to.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="uk-width-medium-1-2">
				<div class="tm-panel-box">
					<div class="uk-clearfix">
						<img class="uk-float-left" src="<?php echo get_template_directory_uri();?>/assets/images/help-icon.png">
						<div class="tm-overflow-hidden tm-margin-large-top">
							<h4>Help</h4>
							<p>
								Speakeasy AI can listen to an entire sentence  about their experience and turn that into ranked intents. Our system is takes three speech components and uses them all to understand what a users is saying. Our solution delivers up to 50% greater accuracy for understanding customer intent. Our dashboard provides real time data showing  what your customers are trying to.
							</p>
							<a  data-uk-toggle="{target:'#toggle-two'}">Read more</a>
							<div id="toggle-two" class="uk-hidden">
								<p>
									lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="uk-width-medium-1-2">
				<div class="tm-panel-box">
					<div class="uk-clearfix">
						<img class="uk-float-left" src="<?php echo get_template_directory_uri();?>/assets/images/remember-icon.png">
						<div class="tm-overflow-hidden tm-margin-large-top">
							<h4>Remember</h4>
							<p>
								Speakeasy AI can listen to an entire sentence  about their experience and turn that into ranked intents. Our system is takes three speech components and uses them all to understand what a users is saying. Our solution delivers up to 50% greater accuracy for understanding customer intent. Our dashboard provides real time data showing  what your customers are trying to.
							</p>
							<a  data-uk-toggle="{target:'#toggle-three'}">Read more</a>
							<div id="toggle-three" class="uk-hidden">
								<p>
									lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="uk-width-medium-1-2">
				<div class="tm-panel-box">
					<div class="uk-clearfix">
						<img class="uk-float-left" src="<?php echo get_template_directory_uri();?>/assets/images/improve-icon.png">
						<div class="tm-overflow-hidden tm-margin-large-top">
							<h4>Improve</h4>
							<p>
								Speakeasy AI can listen to an entire sentence  about their experience and turn that into ranked intents. Our system is takes three speech components and uses them all to understand what a users is saying. Our solution delivers up to 50% greater accuracy for understanding customer intent. Our dashboard provides real time data showing  what your customers are trying to.
							</p>
							<a  data-uk-toggle="{target:'#toggle-four'}">Read more</a>
							<div id="toggle-four" class="uk-hidden">
								<p>
									lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End -->

<!-- Section : Get demo block -->
<div class="uk-block tm-demo-block">
	<div class="uk-container uk-container-center">
		<div class="uk-width-medium-7-10 uk-container-center">	
			<div class="uk-grid uk-grid-large" data-uk-margin>
				<div class="uk-width-medium-1-2">
					<img src="<?php echo get_template_directory_uri();?>/assets/dummy-images/dummy-3.png">
				</div>
				<div class="uk-width-medium-1-2">
					<h2 class="uk-h1">BOT BETTER.</h2>
					<p>
						Alexa can turn on your customer’s lights, Siri can tell their friend they’re late for lunch, chatbots can give order status in Facebook - why do your customers yell “agent” whenever they call you? Deliver the promise of AI in voice with solutions that meet customers’ expectations and wants. Seamlessly integrate existing AI investment in voice channels with Speakeasy AI’s intent-as-a-service solution.
					</p>
					<div class="">
						<a class="uk-button uk-button-default">Get a demo</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End -->

<!-- Section : Blog Section -->
<div class="uk-block tm-blog-section">
	<div class="uk-container uk-container-center">
		<div class="uk-flex uk-flex-center">
			<div class="uk-width-large-3-10 uk-width-medium-5-10 uk-text-center">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/blog-chat-icon.png">
				<h2 class="uk-h1"><strong>latest blog posts</strong></h2>
				<p>
					Read up about AI & related posts in our blog. Stay in the loop about all Speakeasy AI has to offer.
				</p>
			</div>
		</div>
		<div class="spacer-v-3"></div>
		<div class="uk-grid" data-uk-grid-match="" data-uk-margin="{cls:'uk-margin-large-top'}">
			<div class="uk-width-medium-1-3">
				<div class="tm-blog-card">
					<img class="uk-width-1-1" src="<?php echo get_template_directory_uri();?>/assets/dummy-images/dummy-4.png">
					<div class="tm-card-content">
						<h3>Post Title 1</h3>
						<div class="uk-text-uppercase">
							BY ADAM SMITH  |  10 DECEMBER
						</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit,  sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aliquam.
						</p>
						<div class="spacer-v-3"></div>
						<a href="#"> Read more</a>
					</div>
				</div>
			</div>
			<div class="uk-width-medium-1-3">
				<div class="tm-blog-card">
					<img class="uk-width-1-1" src="<?php echo get_template_directory_uri();?>/assets/dummy-images/dummy-4.png">
					<div class="tm-card-content">
						<h3>Post Title 2</h3>
						<div class="uk-text-uppercase">
							BY ADAM SMITH  |  10 DECEMBER
						</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit,  sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aliquam.
						</p>
						<div class="spacer-v-3"></div>
						<a href="#"> Read more</a>
					</div>
				</div>
			</div>
			<div class="uk-width-medium-1-3">
				<div class="tm-blog-card">
					<img class="uk-width-1-1" src="<?php echo get_template_directory_uri();?>/assets/dummy-images/dummy-4.png">
					<div class="tm-card-content">
						<h3>Post Title 3</h3>
						<div class="uk-text-uppercase">
							BY ADAM SMITH  |  10 DECEMBER
						</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit,  sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aliquam.
						</p>
						<div class="spacer-v-3"></div>
						<a href="#"> Read more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End -->

<!-- Section : Subscribe to blog -->
<div class="uk-block uk-padding-top-remove tm-subscribe">
	<div class="uk-container uk-container-center">
		<div class="uk-width-medium-7-10 uk-container-center uk-text-center">
			<h2 class="uk-h1 uk-text-uppercase">SUBSCRIBE TO OUR BLOG</h2>
			 <?php echo do_shortcode('[mc4wp_form id="57"] '); ?>
		</div>
	</div>
</div>
<!-- End -->


<!--Tour Page start from here-->

<!-- Section : Get to know block -->
<div class="uk-block-large c_d-gtk">
	<div class="uk-container uk-container-center">
		<div class="uk-text-center">
			<h1 class="uk-text-uppercase">Get to know Speakeasy AI</h1>
			<div class="uk-width-medium-4-10 uk-container-center">
				<h6 class="tm-small-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</h6>
			</div>
		</div>
		<div class="spacer-v-4"></div>
		<div class="uk-grid uk-grid-collapse" data-uk-margin="{cls:'uk-margin-top'}">
			<div class="uk-width-medium-6-10 uk-push-4-10">
				<img class="uk-width-1-1" src="<?php echo get_template_directory_uri();?>/assets/dummy-images/dummy-5.png">
			</div>
			<div class="uk-width-medium-4-10 uk-pull-6-10">
				<h2>Data is Improvement.</h2>
				<p>
					Our dashboard gives you real-time access to data showing what your customers are trying to do when they dial into your IVR, instantly. The analytics we provide are tied into an improvement cycle solution that enables changes as rapidly as your customers and business require. Voice and other self-serve solutions can now be updated in minutes.
				</p>
			</div>
		</div>
	</div>
</div>
<!-- End -->

<!-- Section : Get demo block -->
<div class="uk-block tm-demo-block">
	<div class="uk-container uk-container-center">	
		<div class="uk-width-medium-8-10 uk-container-center">
			<div class="uk-grid uk-grid-large" data-uk-margin>
				<div class="uk-width-medium-1-2">
					<img src="<?php echo get_template_directory_uri();?>/assets/dummy-images/dummy-6.png">
				</div>
				<div class="uk-width-medium-1-2">
					<h2>Intent as a Service.</h2>
					<p>
						Listening to your customers is always better than typing what they say. Leveraging full audio files, context and memory, our AI delivers speech-to -intent to deliver trust and confidence to customers in voice self-service.
					</p>
					<div class="spacer-v-2"></div>
					<div class="uk-text-center-small">
						<a class="uk-button uk-button-default">LET’S TALK</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End -->

<!-- Section : Our Team -->
<div class="uk-block tm-our-team uk-text-center">
	<div class="uk-container uk-container-center">
		<h2>BYOB/AI.</h2>
		<div class="uk-width-medium-7-10 uk-container-center">
			<p>
				Our team can expertly craft an approach to AI solutions that interweaves voice and and analytics throughout your AI strategy, so you can Bring Your Own Bot. Our team has been delivering enterprise AI wins for 10+ years and built SE AI to deliver the promise of AI within voice. It’s all about the how. SE AI can integrate with any existing AI corpus to re-leverage your prior investments in voice channels - connecting the dots like never before.
			</p>
		</div>
		<div class="spacer-v-2"></div>
		<ul class="uk-grid uk-grid-width-medium-1-5 uk-flex-middle" data-uk-margin="{cls:'uk-margin-top'}">
			<li><img src="<?php echo get_template_directory_uri();?>/assets/dummy-images/dummy-7.png"></li>
			<li><img src="<?php echo get_template_directory_uri();?>/assets/dummy-images/dummy-8.png"></li>
			<li><img src="<?php echo get_template_directory_uri();?>/assets/dummy-images/dummy-7.png"></li>
			<li><img src="<?php echo get_template_directory_uri();?>/assets/dummy-images/dummy-8.png"></li>
			<li><img src="<?php echo get_template_directory_uri();?>/assets/dummy-images/dummy-8.png"></li>
		</ul>
	</div>
</div>
<!-- End -->

<!-- Section : Two column with image -->
<div class="uk-block uk-padding-bottom-remove c_d-tci">
	<div class="uk-container uk-container-center">
		<div class="uk-grid uk-flex-middle" data-uk-margin="{cls:'uk-margin-top'}">
			<div class="uk-width-medium-1-2">
				<h2>What is Speech-to-intent?<br><strong>Glad You Asked!</strong></h2>
				<div class="uk-width-medium-7-10">
					<p>
						IVRs, much like many current voice assistants, require voice transcription via traditional speech to text to access a conversational knowledge base that may or may not match the transcribed words. 
					</p>
				</div>
			</div>
			<div class="uk-width-medium-1-2 uk-text-center">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/mobile.png">
			</div>
		</div>
	</div>
</div>
<!-- End -->

<!-- Section : Callout -->
<div class="uk-block tm-callout uk-text-center">
	<div class="uk-container uk-container-center">
		<div class="uk-width-medium-6-10 uk-container-center">
			<h2>Don’t just see customer words, understand their needs.</h2>
			<p>
				Speakeasy AI’s speech-to-intent looks at the entire spoken voice of the customer, leveraging our technical solution, context and memory to deliver the promise of speaking AI starting with listening, not reading.
			</p>
			<div class="spacer-v-3"></div>
			<a class="uk-button uk-button-secondary">Get a Demo</a>
		</div>
	</div>
</div>
<!-- End -->

<!-- Section : Image with text -->
<div class="uk-block-large tm-large-callout">
	<div class="uk-container uk-container-center">
		<h2 class="uk-text-center">Transcription isn’t enough.</h2>
		<div class="spacer-v-4"></div>
		<div class="uk-grid uk-grid-large" data-uk-margin="{cls:'uk-margin-top'}">
			<div class="uk-width-medium-6-10">
				<img class="uk-width-1-1" src="<?php echo get_template_directory_uri();?>/assets/dummy-images/dummy-9.png">
			</div>
			<div class="uk-width-medium-4-10">
				<p>
					Our speech-to-intent solution bypasses the issues of traditional speech to text where accents or poor audio signal can greatly affect the outcome. The recognition process funnels the audio file through a pipeline of different microservices that are mapped directly onto the corpus used to train the system. This intent recognition process includes a supervised machine learning neural net to provide an advanced and shortened continual improvement loop.
				</p>
				<p>
					<strong>You don’t listen without context and memory, why should your bot?</strong>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- End -->

<!-- Section : Comparision table -->
<div class="uk-block tm-ctable uk-margin-large-bottom">
	<div class="uk-container uk-container-center">
		<div class="uk-width-large-4-10 uk-width-medium-5-10 uk-text-center uk-container-center">
			<h2>COMPARING COMPETITORS</h2>
			<p>
				This new-found knowledge may then be used by engineers to create new tools and machines,
			</p>
		</div>
		<div class="spacer-v-4"></div>
			<div class="uk-grid uk-grid-collapse uk-flex-middle" data-uk-margin>
				<div class="uk-width-medium-1-3">
					<div class="tm-card uk-text-center c_d-faded">
						<h6>competitor 1</h6>
						<ul>
							<li class="tm-right">This is where Option 1 goes</li>
							<li class="tm-right">This is where Option 2 goes</li>
							<li class="tm-wrong">This is where Option 3 goes</li>
							<li class="tm-wrong">This is where Option 4 goes</li>
						</ul>
					</div>
				</div>
				<div class="uk-width-medium-1-3">
					<div class="tm-card uk-text-center">
						<h4>SPEAKEASY AI</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
						</p>
						<ul>
							<li class="tm-right">This is where Option 1 goes</li>
							<li class="tm-right">This is where Option 2 goes</li>
							<li class="tm-right">This is where Option 3 goes</li>
							<li class="tm-right">This is where Option 4 goes</li>
						</ul>
						<div>
							<a class="uk-button uk-button-default">Get a demo</a>
						</div>
					</div>
				</div>
				<div class="uk-width-medium-1-3">
					<div class="tm-card uk-text-center c_d-faded">
						<h6>competitor 2</h6>
						<ul>
							<li class="tm-right">This is where Option 1 goes</li>
							<li class="tm-right">This is where Option 2 goes</li>
							<li class="tm-wrong">This is where Option 3 goes</li>
							<li class="tm-wrong">This is where Option 4 goes</li>
						</ul>
					</div>
				</div>
			</div>
	</div>
</div>
<!-- End -->

<?php
get_footer();
