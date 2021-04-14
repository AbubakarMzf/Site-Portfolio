<?php require_once 'view_begin.php' ?>
<?php require_once 'view_admin.php' ?>

<table>
    <tr>
        <?php foreach (array_keys($table[0]) as $key) : ?>
            <th><?=$key?></th>
        <?php endforeach ?> 
    </tr>
    
    <?php foreach($table as $t) : ?>
        <tr>
            <?php foreach ($t as $l) : ?>
                <td><?= ($l) ?></td>
            <?php endforeach ?>
        <tr>
    <?php endforeach ?>
</table>


<button id="myBtn">Ajouter</button>



<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <form action = "?controller=projects&action=add" method="post">
        <p> <label> Titre: <input type="text" name="title"/> </label> </p>
        <p> <label> Intro: <input type="text" name="intr"/> </label></p>
        <p> <label> Date de Création: <input type="text" name="creationdate"/> </label></p>
        <p>Description : </p>
        <textarea name="description" cols="70" rows="10"></textarea>
        <p>
        <?php foreach($authors as $a) :  ?>
        <label><input type="checkbox" name="authors" value="<?=e($a['authors_name']) ?>"><?=e($a['authors_name']) ?></label>
        <?php endforeach ?>
        </p>
        <p><input type="submit" value="Add in database"/> </p>  
    </form>
  </div>
</div>




<!-- <button onclick="window.location='/?controller=<?=$_GET['action']?>&action=add'">ajouter</button>
<button onclick="window.location='/?controller=<?=$_GET['action']?>&action=modifier'">modifier</button> -->




<style>

table {
    margin-left : 4em ; 
}
td, th {
    border: solid 5px black   ;  
}

td {
    width : 300px ; 
}


/*test */
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>


<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}


span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>

<?php require_once 'view_end.php' ?>