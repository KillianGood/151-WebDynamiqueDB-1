<?php 
require "header.php";
$teachers = $db->getAllTeachers();
?>   
        <table>
            <tr>
                <h3>Lisete des enseignants <div class="add"><a href="addTeacher.php"><img src="../../userContent/add.svg" height="50"></img></a></div> </h3>       
                <th>Nom</th>
                <th>Surnom</th>
                <th>Actions</th>
            </tr>
            <?php foreach($teachers as $teacher): ?>
            <tr>
                <td><?= $teacher["teaName"] ?><?= " ";?><?= $teacher["teaFirstname"] ?></td>
                <td><?= $teacher["teaNickname"] ?></td>
                <td>
                    <a href="editTeacher.php?idTeacher=<?= $teacher["idTeacher"]; ?>"><img src="../../userContent/edit.svg"></img></a>
                    <a href="deleteTeacher.php?idTeacher=<?= $teacher["idTeacher"]; ?>" onclick="return confirm('Êtes vous sûr de voiloir supprimer l\'enseignant ?')"><img src="../../userContent/trash.svg"></img></a>
                    <a href="detail.php?idTeacher=<?= $teacher["idTeacher"]; ?>"><img src="../../userContent/search.svg"></img></a>
                    </div>
                </td>                
            </tr>   
            <?php endforeach; ?>    
        </table>    
<?php require "footer.php";