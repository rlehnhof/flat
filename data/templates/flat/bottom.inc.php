<!--following code is generated by templates/bottom.inc.php-->
<div id="bottom">
<?php echo $GLOBALS['footerMessage'].' ';?>
<?php
echo T_("Propulsed by ");
echo " <a href=\"https://sourceforge.net/projects/semanticscuttle/\">SemanticScuttle</a><br />";
echo T_("Using ");
echo " <a href=\"https://github.com/rlehnhof/flat\">Flat 1.2.</a><br />";
echo '<a href="'.createURL('about').'">'.T_('About').'</a><br />';
if($GLOBALS['enableWebsiteThumbnails']) {
	// Licence to the thumbnails provider (OBLIGATORY IF YOU USE ARTVIPER SERVICE)
	echo ' (Thumbnails by <a href="http://www.artviper.net">webdesign</a>)';
}
?>

</div>


<?php if(isset($GLOBALS['googleAnalyticsCode']) && $GLOBALS['googleAnalyticsCode']!= ''):?>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("<?php echo $GLOBALS['googleAnalyticsCode']?>");
pageTracker._trackPageview();
} catch(err) {}</script>

<?php endif;?>

<!--</div>-->

</div> <!-- wrapper -->

</body>
</html>
