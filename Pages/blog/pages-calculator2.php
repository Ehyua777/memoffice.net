<?php
$snooz2 = $subjectCommentManager->count($_GET['s']);
$subjectsNunberPerPage2=2;
$pagesNumber2 = ceil($snooz2/$subjectsNunberPerPage2);
if (isset($_GET['cp']) && $_GET['cp'] > 0 && $_GET['cp']<= $pagesNumber2)
{
	$runningPage2 = $_GET['cp'];
}
else
{
	$runningPage2 = 1;
}
$offset2 = (($runningPage2-1)*$subjectsNunberPerPage2);
$limit2  = $subjectsNunberPerPage2;
?>