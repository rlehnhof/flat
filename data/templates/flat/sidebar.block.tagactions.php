<?php
/* Service creation: only useful services are created */
//No specific services

if ($userservice->isLoggedOn()) {

    if ($currentUser->getUsername() == $user) {
        $tags = explode('+', $currenttag);
        $renametext = T_ngettext('Rename Tag', 'Rename Tags', count($tags));
        $renamelink = createURL('tagrename', $currenttag);
        $deletelink = createURL('tagdelete', $currenttag);
        $tagdesclink = createURL('tagedit', $currenttag);
        $commondesclink = createURL('tagcommondescriptionedit', $currenttag);
        $addtag2taglinklink = createURL('tag2tagadd', $currenttag);
?>

<h2><?php echo T_('Tag Actions'); ?></h2>
<div id="tagactions">
    <table>
	  <tr>
	    <td class="sign"><a href="<?php echo $renamelink; ?>" class="crossTags"><span class="icon-pencil-squared"></a></a></td>
        <td class="action"><a href="<?php echo $renamelink; ?>"><?php echo $renametext ?></a></td>
        <?php if (count($tags) == 1): ?>
	  </tr><tr>
	    <td class="sign"><a href="<?php echo $deletelink; ?>" class="crossTags"><span class="icon-cancel-circled"></a></td>
        <td class="action"><a href="<?php echo $deletelink; ?>"><?php echo T_('Delete Tag') ?></a></td>
        <?php endif; ?>
	  </tr><tr>	
	    <td class="sign"><a href="<?php echo $tagdesclink; ?>" class="crossTags"><span class="icon-pencil-squared"></a></td>
        <td class="action"><a href="<?php echo $tagdesclink; ?>"><?php echo T_('Edit Tag Description') ?></a></td>
        <?php if ($GLOBALS['enableCommonTagDescription'] && ($GLOBALS['enableCommonTagDescriptionEditedByAll'] || $currentUser->isAdmin() )): ?>
	  </tr><tr>	
	    <td class="sign"><a href="<?php echo $commondesclink; ?>" class="crossTags"><span class="icon-pencil-squared"></a></td>
        <td class="action"><a href="<?php echo $commondesclink; ?>"><?php echo T_('Edit Tag Common Description') ?></a></td>
		<?php endif; ?>
	  </tr><tr>	
	    <td class="sign"><a href="<?php echo $addtag2taglinklink; ?>" class="crossTags"><span class="icon-plus-circled"></a></td>
        <td class="action"><a href="<?php echo $addtag2taglinklink; ?>"><?php echo T_('Create a link to another tag') ?></a></td>
	  </tr>
    </table>
</div>

<?php
    }
}
?>
