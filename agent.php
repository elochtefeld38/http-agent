<?
if ($_POST['agent']=='agent') {
echo "Your agent is:<br/>";
echo (strtolower($_SERVER['HTTP_USER_AGENT']));
}
?>