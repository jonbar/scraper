<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './simple_html_dom.php';
        $html = file_get_html('https://www.pharmatech.es/empresas/p/bizkaia');

        $nombresEmpresa = $html->find('h4[class=title]');

        foreach ($nombresEmpresa as $nombreEmpresa) {
            echo $nombreEmpresa->innertext . '<br>';
        }
        
        $linksEmpresas = $html->find('ul[class=listado-empresas list-unstyled]');
        $i = 0;
        foreach ($linksEmpresas as $linkEmpresa) {
            $links = $linkEmpresa->find('a',$i);
            $url = $links->attr['href'];
            echo $url . '<br>';
            $i = $i + 1;
        }
        
//        while(!empty($url)){
//            $u = array_pop($url);
//            echo $u . '<br>';
//        }
        
        ?>
    </body>
</html>
