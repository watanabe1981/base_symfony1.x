<?php


require_once(dirname(__FILE__).'/../sf14/config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'dev', false);
sfContext::createInstance($configuration)->dispatch();
