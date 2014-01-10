<?php
/* Service creation: only useful services are created */
//No specific services

$logged_on_userid = $userservice->getCurrentUserId();
if ($logged_on_userid === false) {
    $logged_on_userid = NULL;
}
$lastUsers = $userservice->getUsers(3);

if ($lastUsers && count($lastUsers) > 0) {
?>

<?php
if (!$userservice->isLoggedOn()) {
}
else {
echo '<h2>New Users</h2>';
echo '<div id="users">';
echo '<table>';
foreach ($lastUsers as $row) {
    echo '<tr><td>';
    echo  '<a href="'.createURL('profile', $row['username']).'">';
    echo SemanticScuttle_Model_UserArray::getName($row);
    echo '</a>';
    echo ' (<a href="'.createURL('bookmarks', $row['username']).'">'.T_('bookmarks').'</a>)';
    echo '</td></tr>';
}
//echo '<tr><td><a href="'.createURL('users').'">...</a></td></tr>';
}
?>

</table>
<p style="text-align:right"><a href="<?php echo createURL('users'); ?>" title="<?php echo T_('See all users')?>"><?php echo T_('All users'); ?></a> →</p>
</div>
<?php
}
?>
