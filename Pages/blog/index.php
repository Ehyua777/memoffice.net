<?php
$pageTitle='Blog';
require ('../../LLibrary/lumbrera.required.php');
$subjectManager = new LLibrary\Models\BlogSubjectManager($db);
$subjectCommentManager = new LLibrary\Models\BlogCommentManager($db);
include('../../Templates/layout.php');
?>