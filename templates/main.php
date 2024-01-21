<!DOCTYPE html>
<html>
<head>
		<title>PHP-Proxy</title>
		<meta name="generator" content="php-proxy.com">
		<meta name="version" content="<?=$version;?>">

		<style type="text/css">
				html, body {
						font-family: Arial, Helvetica, sans-serif;
						font-size: 14px;
						background-color: #000;
						color: #00ffec;
						margin: 0;
						padding: 0;
				}

				#container {
						width: 500px;
						margin: 0 auto;
						margin-top: 50px;
						background-color: #000;
						border: 1px solid #00ffec;
						border-radius: 8px;
						box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
						text-align: center;
				}

				#header {
						background-color: #00ffec;
						color: #000;
						padding: 10px;
						text-align: center;
						border-top-left-radius: 8px;
						border-top-right-radius: 8px;
				}

				#content {
						padding: 20px;
				}

				#error {
						color: #ffcc00;
						font-weight: bold;
				}

				#frm {
						padding: 10px 15px;
						background-color: #000;
						border: 1px solid #00ffec;
						border-radius: 8px;
						text-align: center;
				}

				#url-input {
						width: 100%;
						padding: 5px;
						font-size: 14px;
						border: 1px solid #00ffec;
						border-radius: 4px;
						color: #00ffec;
						background-color: #000;
				}

				#go-button {
						margin-top: 10px;
						background-color: #00ffec;
						color: #000;
						border: none;
						padding: 5px 10px;
						cursor: pointer;
						border-radius: 4px;
				}

				#go-button:hover {
						background-color: #009db7;
				}

				#footer {
						text-align: center;
						font-size: 12px;
						margin-top: 20px;
						color: #00ffec;
				}

				#fun-content {
						background-color: #ffcc00;
						padding: 20px;
						border-radius: 8px;
						margin-top: 20px;
						color: #000;
				}

				#fun-content h2 {
						color: #ff00ff;
				}

				#fun-content p {
						font-size: 16px;
				}

				/* Ajout de l'animation pour la fenêtre modale */
				#url-modal {
						display: none;
						position: fixed;
						top: 0;
						left: 0;
						width: 100%;
						height: 100%;
						background-color: rgba(0, 0, 0, 0.7);
				}

				#url-modal-content {
						position: absolute;
						top: 50%;
						left: 50%;
						transform: translate(-50%, -50%);
						background-color: #fff;
						padding: 20px;
						border-radius: 8px;
						box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
				}

				#close-button {
						position: absolute;
						top: 10px;
						right: 10px;
						cursor: pointer;
				}
		</style>
</head>
<body>
		<div id="container">
				<div id="header">
						<h1>TRHACKNON-Proxy</h1>
				</div>

				<div id="content"><center><img src="logo.png"/></center>

						<?php if(isset($error_msg)){ ?>
								<div id="error">
										<p><?php echo strip_tags($error_msg); ?></p>
								</div>
						<?php } ?>
						<div id="frm">
								<form id="proxy-form" action="index.php" method="post" style="margin-bottom:0;">
									<input id="url-input" name="url" type="text" autocomplete="on" value="https://hastetrkn.replit.app" placeholder="Enter a URL (e.g., http://www.example.com)" />
										<button id="go-button" type="button" onclick="showConfirmationPopup()">Go</button>
								</form>
						</div>
				</div>
		</div>

		<div id="footer">
				Powered by <a href="//www.php-proxy.com/" target="_blank">trhacknon Proxy</a> <?php echo $version; ?>
		</div>

		<div id="fun-content" style="text-align: center; padding: 20px;">
				<h2>Welcome to the trhacknon Proxy</h2>
				<p>Unleash the power of anonymous web browsing!</p>
				<p>Protect your privacy and surf the web securely.</p>
		</div><div style="text-align: center; margin-top: 20px; color: #00ffec;">
		<strong>	<font color="red"><p>This proxy uses sessions for enhanced security and Base64 encoding to protect your privacy.</p></font></strong>
			<p>Your online activities remain anonymous while using this proxy.</p>
			<p>for deploy your own proxy , fork <a href="https://proximity-trkn.replit.app">this repl</a></p>
	</div>

		<!-- Code JavaScript pour afficher la fenêtre modale de confirmation -->
		<script>
				function showConfirmationPopup() {
						const url = document.getElementById("url-input").value;
						if (url) {
								if (confirm(`Voulez-vous accéder à : ${url}?`)) {
										document.getElementById("proxy-form").submit();
								}
						}
				}
		</script>
</body>
</html>