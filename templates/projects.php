<?php

/**
 * page des projets a partir du fichier
 * "/assets/projects.json"
 */

 $data = file_get_contents('./assets/projects.json');
 $projects = json_decode($data,true);
 

function toSlug(string $stackIcon): string
{
    $stackIcon = strtolower($stackIcon);
    $stackIcon = preg_replace('/[^a-z0-9-]/', '', $stackIcon);
    // $stackIcon = preg_replace('/-+/', '', $stackIcon);
    return $stackIcon;
}


//  foreach($projects as $item)
//  {
 
//     $html = <<HTML 
//      <div class="p-4 flex">
//              <div class="w-1/3 border-r border-slate-500 p-2">
//                  <h3 class="">$item["title"]</h3>
//                  <p class="">le paragrapahe qui est grand</p>
//              </div>
//              <div class="w-screen border-r border-slate-500 p-2">
//                  <h3 class="">Stack</h3>
//                  <ul class="flex gap-4">
//                  </ul>
//              </div>
//              <div class="w-24 border-r border-slate-500 flex justify-center items-center">
//                  <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><!-- Icon from Google Material Icons by Material Design Authors - https://github.com/material-icons/material-icons/blob/master/LICENSE -->
//                      <path fill="currentColor" d="M6.23 20.23L8 22l10-10L8 2L6.23 3.77L14.46 12z" />
//                  </svg>
//              </div>
//          </div>
//      HTML;
//  }




?>


<h1 class="bg-clip-text bg-gradient-to-br from-slate-800 to-slate-400 text-6xl font-bold text-transparent text-center">
    Mes projets
</h1>

<?php foreach ($projects as $item): ?>
    <div class="p-4 flex border-b border-slate-500">
        <div class="w-1/2 border-r border-slate-500">
            <h3 class="text-2xl font-bold mb-5"><?= $item['title'] ?></h3>
            <p class=""><?= $item['description'] ?></p>
        </div>
        <div class="w-screen border-r border-slate-500">
            <h3 class="text-2xl font-bold mb-5">Stack</h3>
            <ul class="flex gap-4">
                <?php foreach ($item['stack'] as $icon): ?>
                    <li class="h-10 w-10">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/<?php echo toSlug($icon) . '/' . toSlug($icon) ?>-original.svg" alt="<?= "Logo " . $icon ?>" />
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="w-24 text-slate-400 flex items-center justify-center">
                  <a href="<?=  $item['link'] ?>" class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                    <path fill="currentColor" d="m8.006 21.308l-1.064-1.064L15.187 12L6.942 3.756l1.064-1.064L17.314 12z" />
                </svg>
            </a>
        </div>
    </div>
<?php endforeach; ?>