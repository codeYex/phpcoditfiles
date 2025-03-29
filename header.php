<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Navigation </title>
</head>

<body>
    <?php
    //page URLS
    $pageUrls = [
        'Home_Page' => [
            'url' => './index.php',
            'icon' => 'fa-solid fa-house'
        ],
        'variables' => [
            'url' => './variables.php',
            'icon' => 'fa-solid fa-code',
        ],
        'Conditionals' => [
            'url' => './conditionals.php',
            'icon' => 'fa-solid fa-arrows-split-up-and-left',
        ],
        'for_loops' => [
            'url' => './for_loops.php',
            'icon' => 'fa-solid fa-repeat',
        ]

    ];
    //Function to generate navigation Links
    function generateUrlLinks($pageInfo)
    {

        $url = $pageInfo['url'];
        $icon = $pageInfo['icon'];
        $label = ucfirst(str_replace('_', '', basename($url, '.php')));
        $isActive = basename($_SERVER['PHP_SELF']) == basename($url) ? 'class = "Active"' : '';

        return "<a href=\"$url\" $isActive>
        <i class=\"$icon\"></i>
        $label
    </a>";
    }
    ?>
    <nav class="dashboard_nav">
        <?php
        echo generateUrlLinks($pageUrls['Home_Page']);
        echo generateUrlLinks($pageUrls['Conditionals']);
        echo generateUrlLinks($pageUrls['for_loops']);
        echo generateUrlLinks($pageUrls['variables']);

        ?>
    </nav>
</body>

</html>