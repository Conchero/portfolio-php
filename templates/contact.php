<?php
 $firstName = htmlspecialchars($_POST["first-name__input"] );
 $lastName = htmlspecialchars($_POST["last-name__input"] );

 var_dump($firstName);
?>




<h1 class="bg-clip-text bg-gradient-to-br from-slate-800 to-slate-400 text-6xl font-bold text-transparent text-center">
    Me Contacter
</h1>



<script src="../assets/validateForm.js" defer></script>


<?php
include './templates/components/form.php';
?>