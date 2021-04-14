<!-- <p>FEATURES & TESTS</p> -->

<?php require_once 'view_begin.php' ?>
<link rel="stylesheet" href="../content/css/admin.css">

<div id="menu">

<!-- <select name="Projects">
    <option>Projects</option>
    <option value="/?controller=projects&action=add">Add</option>
    <option value="/?controller=projects&action=update">Update</option>    
</select>

<select name="Skill">
    <option>Skill</option>
    <option value="/?controller=skill&action=add">Add</option>
    <option value="/?controller=skill&action=update">Update</option>    
</select>


<select name="Languages">
    <option>Languages</option>
    <option value="/?controller=languages&action=add">Add</option>
    <option value="/?controller=languages&action=update">Update</option>    
</select> -->


<div><button onclick="window.location='/?controller=login&action=projects'">Projects</button></div>
<div><button onclick="window.location='/?controller=login&action=languages'">Languages</button></div>
<div><button onclick="window.location='/?controller=skill&action=skill'">Skill</button></div>
</div>

<?php require_once 'view_end.php' ?>
