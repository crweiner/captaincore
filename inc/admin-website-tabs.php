<style>
a.nav-tab {
	position: relative;
}
a.nav-tab span {
	display: none;
	position: absolute;
	left: -27px;
	top: -24px;
	background: #fff;
	border-top: 1px solid #ccc;
	padding: 0px 10px;
	border-left: 1px solid #ccc;
	border-right: 1px solid #ccc;
	border-radius: 4px;
	z-index: 9999;
	font-size: 0.8em;
	width: 74px;
	text-align: center;
}
a.nav-tab:hover span {
	display: block;

}
a.nav-tab.nav-tab-active span {
	background: #f1f1f1
}

</style>

<?php $screen = get_current_screen(); ?>
<h2 class="nav-tab-wrapper" style="margin-top:30px;">
  <a class="nav-tab dashicons-before dashicons-admin-multisite<?php if( $screen->post_type == "website" ) { echo " nav-tab-active"; } ?>" href="/wp-admin/edit.php?post_type=website"><span>Websites</span></a>
  <a class="nav-tab dashicons-before dashicons-groups<?php if( $screen->post_type == "customer") { echo " nav-tab-active"; } ?>" href="/wp-admin/edit.php?post_type=customer"><span>Customers</span></a>
	<a class="nav-tab dashicons-before dashicons-admin-users<?php if( $screen->post_type == "contact") { echo " nav-tab-active"; } ?>" href="/wp-admin/edit.php?post_type=contact"><span>Contacts</span></a>
	<a class="nav-tab dashicons-before dashicons-welcome-widgets-menus<?php if( $screen->post_type == "domain") { echo " nav-tab-active"; } ?>" href="/wp-admin/edit.php?post_type=domain"><span>Domains</span></a>
	<a class="nav-tab dashicons-before dashicons-media-spreadsheet<?php if( $screen->post_type == "changelog") { echo " nav-tab-active"; } ?>" href="/wp-admin/edit.php?post_type=changelog"><span>Web Logs</span></a>
	<a class="nav-tab dashicons-before dashicons-controls-repeat<?php if( $screen->post_type == "process") { echo " nav-tab-active"; } ?>" href="/wp-admin/edit.php?post_type=process"><span>Processes</span></a>
	<a class="nav-tab dashicons-before dashicons-media-spreadsheet<?php if( $screen->post_type == "process_log") { echo " nav-tab-active"; } ?>" href="/wp-admin/edit.php?post_type=process_log"><span>Process Logs</span></a>
	<a class="nav-tab dashicons-before dashicons-building<?php if( $screen->post_type == "server") { echo " nav-tab-active"; } ?>" href="/wp-admin/edit.php?post_type=server"><span>Servers</span></a>
	<a class="nav-tab dashicons-before dashicons-backup<?php if( $screen->post_type == "snapshot") { echo " nav-tab-active"; } ?>" href="/wp-admin/edit.php?post_type=snapshot"><span>Snapshots</span></a>
	<a class="nav-tab dashicons-before dashicons-backup<?php if( $screen->post_type == "cc_quicksave") { echo " nav-tab-active"; } ?>" href="/wp-admin/edit.php?post_type=cc_quicksave"><span>Quicksaves</span></a>
</h2>
<script>
jQuery(document).ready(function() {
	jQuery('li#toplevel_page_captaincore').removeClass("wp-not-current-submenu").addClass("wp-has-current-submenu wp-menu-open");
	jQuery('li#toplevel_page_captaincore > a').addClass("wp-has-current-submenu");
	jQuery('.wp-submenu .wp-first-item').addClass("current");
});
</script>
