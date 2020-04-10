<?php require_once("test_header.php");
session_start();
 ?> 

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div id="content">

							<!-- Content -->
								<article>
								
									
								<?php print $_SESSION["contents"];?>
									
								</article>

						</div>
					</div>
				</div>
<?php require_once("test_footer.php"); ?> 
