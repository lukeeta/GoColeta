<?php 

    $url = $_SERVER['PHP_SELF'];
    $url = str_replace("/", "", $url);
    $url = str_replace(".php", "", $url);

    $siteData = [
        'name' => 'GoColeta'
    ];

    $routes = [
        'pages' => [
            'index' => [
                'slug' => 'index',
                'title' => $siteData['name']." | Cuidando do meio ambiente",
                "description" => ""
            ],
            'sobrenos' => [
                'slug' => 'sobre-nos',
                'title' => 'Sobre Nós | '.$siteData['name'],
                'description' => ''
            ],
            'contato' => [
                'slug' => 'contato',
                'title' => 'Contato | '.$siteData['name'],
                'description' => ''
            ],
            'login' => [
                'slug' => 'login',
                'title' => 'Faça Login | '.$siteData['name'],
                'description' => ''
            ],
            'pontos' => [
                'slug' => 'ponto-de-retirada',
                'title' => 'Pontos de Retirada | '.$siteData['name'],
                'description' => ''
            ],
            'cadastro' => [
                'slug' => 'cadastro',
                'title' => 'Cadastre-se | '.$siteData['name'],
                'description' => ''
            ],
            'painel' => [
                'slug' => 'painel',
                'title' => 'Painel Admin | '.$siteData['name'],
                'description' => ''
            ]
        ],
    ];

    function seo($routes, $url){
        foreach ($routes as $route){
            foreach ($route as $page){
                if($page['slug'] === $url){
                    return [
                        'title' => $page['title'],
                        'description' => $page['description']
                    ];
                }
            }
        }
    }

    $seo = seo($routes, $url);

?>
