<?php
$pageTitle='Bienvenu';
require ('‪/../LLibrary/lumbrera.required.php');
$subjectManager = new LLibrary\Models\Managers\BlogSubjectManager($db);
$homeManager = new LLibrary\Models\Managers\HomeManager($db);
$home = $homeManager->getHomeData(1);
include('Templates/layout.php');
