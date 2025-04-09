<?php
include "./classes/skillClass.php";

$langageSkills = [
    new Skill("C++", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/cplusplus/cplusplus-original.svg"),
    new Skill("C#", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/csharp/csharp-original.svg"),
    new Skill("HTML", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg"),
    new Skill("Javascript", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg"),
    new Skill("PHP", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg"),
    new Skill("Bash", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bash/bash-original.svg"),
    new Skill("SQL", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg"),
    new Skill("CSS", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original.svg"),
    new Skill("Lua", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/lua/lua-original.svg"),
];

$frameworkSkills = [
    new Skill("Unreal Engine 4/5", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/unrealengine/unrealengine-original.svg"),
    new Skill("Unity", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/unity/unity-original.svg"),
    new Skill("React", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/react/react-original.svg"),
    new Skill("Mongo DB", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mongodb/mongodb-original.svg"),
    new Skill("Node.js", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/nodejs/nodejs-original.svg"),
    new Skill("Tailwind CSS", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg"),
];


$frameworkSkills = [
    new Skill("Unreal Engine 4/5", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/unrealengine/unrealengine-original.svg"),
    new Skill("Unity", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/unity/unity-original.svg"),
    new Skill("React", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/react/react-original.svg"),
    new Skill("Mongo DB", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mongodb/mongodb-original.svg"),
    new Skill("Node.js", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/nodejs/nodejs-original.svg"),
    new Skill("Tailwind CSS", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg"),
];


$methodologySkills = [
    new Skill("Scrum", "https://static.thenounproject.com/png/2013813-200.png"),
    new Skill("Cascade", "https://cdn-icons-png.flaticon.com/512/6403/6403838.png"),
];

$softwareSkills = [
    new Skill("Visual Studio", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/visualstudio/visualstudio-plain.svg"),
    new Skill("Git", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/git/git-original.svg"),
    new Skill("Sourcetree", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/sourcetree/sourcetree-original.svg"),
    new Skill("Jira", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/jira/jira-original.svg"),
    new Skill("Trello", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/trello/trello-original.svg"),
    new Skill("Figma", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/figma/figma-original.svg"),
    new Skill("Jenkins", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/jenkins/jenkins-line.svg"),
    new Skill("Postman", "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postman/postman-original.svg"),
];

$vrHeadsetSkills = [
    new Skill("HTC Focus 3", "https://vr-expert.nl/wp-content/uploads/2021/11/HTC-Vive-Focus-3_Image16.png"),
    new Skill("Pico neo 3/4", "https://styles.redditmedia.com/t5_1e575b/styles/profileIcon_ogbkdbxigt7b1.png?width=256&height=256&frame=1&auto=webp&crop=&s=b22e0d6bff0412dda863f48de375c819f230d64b"),
];

?>




<h1 class="bg-clip-text bg-gradient-to-br from-slate-800 to-slate-400 text-6xl font-bold text-transparent text-center  ">Mes Compétences</h1>
<h2 class="text-xl text-center mb-4 mt-8">Language de programmation :</h2>
<div class="flex gap-4 items-center justify-center ">
    <?php foreach ($langageSkills as $langage): ?>
        <div class="flex flex-col   items-center justify-center">
            <img class="h-10 w-10" src=<?= $langage->GetIconLink() ?>>
            <h2><?= $langage->GetName() ?><h2>
        </div>
    <?php endforeach; ?>
</div>


<h2 class="text-xl text-center mb-4 mt-4">Moteurs de Jeu / Frameworks :</h2>
<div class="flex gap-4 items-center justify-center">
    <?php foreach ($frameworkSkills as $framework): ?>
        <div class="flex flex-col  justify-center items-center gap-4" >
            <img class="h-10 w-10" src=<?= $framework->GetIconLink() ?>>
            <h2><?= $framework->GetName() ?><h2>
        </div>
    <?php endforeach; ?>
</div>

<h2 class="text-xl text-center mb-4 mt-4">Logiciels :</h2>
<div class="flex gap-4 items-center justify-center">
    <?php foreach ($softwareSkills as $software): ?>
        <div class="flex flex-col  items-center justify-center gap-4">
            <img class="h-10 w-10" src=<?= $software->GetIconLink() ?>>
            <h2><?= $software->GetName() ?><h2>
        </div>
    <?php endforeach; ?>
</div>

<h2 class="text-xl text-center mb-4 mt-4">Methodologies :</h2>
<div class="flex gap-4 items-center justify-center ">
    <?php foreach ($methodologySkills as $methodology): ?>
        <div class="flex flex-col items-center justify-center gap-4">
            <img class="h-10 w-10" src=<?= $methodology->GetIconLink() ?>>
            <h2><?= $methodology->GetName() ?><h2>
        </div>
    <?php endforeach; ?>
</div>


<h2 class="text-xl text-center mb-4 mt-4">Casque VR :</h2>
<div class="flex gap-4 items-center justify-center ">
    <?php foreach ($vrHeadsetSkills as $headset): ?>
        <div class="flex flex-col items-center justify-center gap-4">
            <img class="h-10 w-10" src=<?= $headset->GetIconLink() ?>>
            <h2><?= $headset->GetName() ?><h2>
        </div>
    <?php endforeach; ?>
</div>

