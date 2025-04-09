<?php
//  $firstName = htmlspecialchars($_POST["firstname"] );
//  $lastName = htmlspecialchars($_POST["lastname"] );
if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    var_dump($_POST);
}
?>




<h1 class="bg-clip-text bg-gradient-to-br from-slate-800 to-slate-400 text-6xl font-bold text-transparent text-center">
    Me Contacter
</h1>



<script src="../assets/validateForm.js" defer></script>


<?php
include './templates/components/form.php';
?>