<?php $page_title = "Minting"; include ('header.php'); ?>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<img class="svg-fullwidth" src="assets/img/minting/banner.svg">
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-md-offset-1 col-sm-4 text-center svg-container vcenter">
			<img class="svg-fullwidth" src="assets/img/minting/closeup.svg">
		</div><!--
		--><div class="col-md-4 col-sm-7 vcenter">
			<h3><?php echo $Locale->getText("minting.mint_anywhere"); ?></h3>
			<p>
				<?php echo $Locale->getText("minting.mint_anywhere_desc"); ?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5 col-md-offset-3 col-sm-7 col-sm-offset-1 vcenter">
			<h3><?php echo $Locale->getText("minting.secure_the_network"); ?></h3>
			<p>
				<?php echo $Locale->getText("minting.secure_the_network_desc"); ?>
			</p>
		</div><!--
		--><div class="col-md-3 col-sm-4 text-center svg-container vcenter">
			<img class="svg-fullwidth" src="assets/img/minting/security.svg">
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-md-offset-1 col-sm-4 text-center svg-container vcenter">
			<img class="svg-threeq" src="assets/img/minting/dividend.svg">
		</div><!--
		--><div class="col-md-5 col-sm-7 vcenter">
			<h3><?php echo $Locale->getText("minting.earn_reward"); ?></h3>
			<p>
				<?php echo $Locale->getText("minting.earn_reward_desc"); ?>
			</p>
		</div>
	</div>
</div>
<?php include ('footer.php'); ?>
