<?php

require_once('autoload.php');

$projectManager = new ProjectManager();
$projects = $projectManager->getProjects();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>unforced - the Salesforce/MySQL replicator</title>
</head>

<body>
  <center><img src="http://upload.wikimedia.org/wikipedia/en/0/0a/Salesforce_logo.png" alt="" border="0"></center>

  <p>Please select a project below, or create a new project.</p>

  <select name="project" size="10">
    <?php
    foreach ($projects as $project) {
      ?>
      <option><?php echo $project->name; ?></option>
      <?php
    }
    ?>
  </select>
  
  <!--<p>Please select from the options below:
  </p>
  <ol>
	<li><a href="create.php">Create</a> the table structure of a salesforce instance in MySQL</a></li>
	<li><a href="updater.php">Update</a> or populate your current backup</a></li>
	<li>Stuff to be developed ...</li>
  </ol>-->
</body>
</html>
