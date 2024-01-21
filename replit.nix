{ pkgs }: {
	deps = [
   pkgs.openssh_with_kerberos
   pkgs.php80Packages.composer
   pkgs.wget
		pkgs.php74
	];
}