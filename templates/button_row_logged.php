<div id="navcontainer">
	<ul id="navlist">
		<li <?php if (isset($frontpage_active)) { echo 'id="active"'; } ?>><a href="<?php echo site_url("talkoo/etusivu"); ?>" <?php if (isset($frontpage_active)) { echo 'id="current"'; } ?>>Etusivu</a></li>
		<li <?php if (isset($eventpage_active)) { echo 'id="active"'; } ?>><a href="<?php echo site_url("talkoo/tapahtumat"); ?>" <?php if (isset($eventpage_active)) { echo 'id="current"'; } ?>>Tapahtumat</a></li>
		<li <?php if (isset($accountpage_active)) { echo 'id="active"'; } ?>><a href="<?php echo site_url("talkoo/omatili"); ?>" <?php if (isset($accountpage_active)) { echo 'id="current"'; } ?>>Oman tilin hallinta</a></li>
		<li <?php if (isset($logout_active)) { echo 'id="active"'; } ?>><a href="<?php echo site_url("talkoo/logout"); ?>" <?php if (isset($logout_active)) { echo 'id="current"'; } ?>>:getout:</a></li>
		<li <?php if (isset($aboutpage_active)) { echo 'id="active"'; } ?>><a href="<?php echo site_url("talkoo/about"); ?>" <?php if (isset($aboutpage_active)) { echo 'id="current"'; } ?>>Tietoa j&auml;rjestelm&auml;st&auml;</a></li>
	</ul>
</div>