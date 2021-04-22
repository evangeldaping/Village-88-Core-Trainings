 <style>
     .note {
         display: inline-block;
         border: 1px solid black;
         font-size: 8px;
         width: 200px;
         height: 250px;
         vertical-align: top;
         overflow-x: scroll;
     }
 </style>
 <?php
    foreach ($notes as $note) {  ?>
     <div class="note">
         <h1><?= $note['description'] ?></h1>
     </div>
 <?php
    }  ?>