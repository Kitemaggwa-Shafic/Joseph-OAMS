<?php
unset($_SESSION['id']);
session_start();
session_destroy();
			echo '<script type="text/javascript">
									var myVar=setInterval(function(){myTimer()},100);

							function myTimer()
							{
								window.location="index.php";

								}
							</script>';
?>
