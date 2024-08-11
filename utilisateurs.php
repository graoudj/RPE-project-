<!-- Projet RPE_Bilboq -->
<?php 
$utilisateurs=true;
include_once("header.php");
include_once("main.php");
?> 

    <h1 class="mt-5">Les Enfants du Relais</h1>
    <a href="addenfant.php" class="btn btn-primary" style="float:right;margin-bottom:20px;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
</svg>
</a>
   <?php
       $query="select * from Enfants_";
       $pdostmt=$pdo->prepare($query);
       $pdostmt->execute();
       //var_dump($pdostmt->fetchAll(PDO::FETCH_ASSOC));
       
   ?>
   
 <!-- introduction du tableau -->
 <table id="datatable" class="display">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>D. de Naiss.</th>
            <th>Commune</th>
            <th>Assmat</th> <th>Commune Assmat</th>
            <th>Parent1</th><th>Parent2</th>
            <th>RPE1</th><th>RPE2</th>
            <th>Modif.</th>
        </tr>
    </thead>
    <tbody>
  <?php while($ligne=$pdostmt->fetch(PDO::FETCH_ASSOC)): ?>
    
        <tr>
            <td> <?php echo $ligne["nom"]; ?></td>
            <td> <?php echo $ligne["prenom"]; ?></td>
            <td> <?php echo $ligne["dateNaissance"]; ?></td>
           <td> <?php echo $ligne["Commune"]; ?></td>
           <td> <?php echo $ligne["AssMat"]; ?></td>
           <td> <?php echo $ligne["Commune_Asmat"]; ?></td>
           <td> <?php echo $ligne["Parent1"]; ?></td>
           <td> <?php echo $ligne["Parent2"]; ?></td>
           <td> <?php echo $ligne["RPE1"]; ?></td>
           <td> <?php echo $ligne["RPE2"]; ?></td>
<td>
           
            <a href="" class="btn btn-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
</svg>
</a>

 <button type="button" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#exampleModal">
   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
</svg>        
</button>


            </td>
        </tr>
      
       <!-- Modal -->
       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
               <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
               ...
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Save changes</button>
             </div>
           </div>
         </div>
       </div>
      <?php endwhile;?>
    </tbody>
</table>
 <!-- Fin du tableau -->
  </div>
</main>
</main>

<?php include_once ("footer.php"); ?> 
