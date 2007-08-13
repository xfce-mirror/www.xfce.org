<?php

/* The following bb codes are available:
   [link=/downloads/]download[/link] <- used for internal links, always starting from root (/)
   [url=http://link.com]link[/url]   <- external links (new window)
   [b]bold[/b]
   [i]italic[/i]
   [br]

   All full http://, https://, ftp:// and email adresses are converted into link
*/
$date_format = "%e %B %Y";
$posted_by = "Enviada por: ";

$news_translated = array (
/*
    array (
        'id'      => <previous id number + 1>
        'date'    => '<day> <month> <year>',
        'author'  => '<you>',
        'title'   => '<title>',
        'content' => '<stuff you want to say>',
    ),
*/
    12 => array (
        'title'   => 'Lançada a versão 4.4.1 do Xfce',
        'content' => 'Ola a todos,'.
                     '[br][br]'.
                     'O Xfce 4.4.1 foi lançado. Esta é a primeira versão para reparo de falhas da série 4.4 do Xfce '.
                     '(a série atualmente estável do Xfce) ela repara falhas importantes e atualiza algumas traduções.'.
                     '[br][br]'.
                     'Faça download do Xfce 4.4.1 no [link=/download/]website do Xfce.[/link]'.
                     '[br][br]'.
                     'Uma visão geral das mudanças está disponível em [link=/documentation/changelogs/4.4.1]changelog[/link].'.
                     '[br][br]'.
                     'Divirta-se![br]'.
                     'Equipe de desenvolvimento do Xfce.',
    ),
    11 => array (
        'title'   => 'Lançada a versão 4.4.0 do Xfce',
        'content' => 'Depois de mais de dois anos de desenvolvimento, o Xfce 4.4.0 foi liberado.'.
                     '[br]'.
                     'O Xfce 4.4 apresenta novas ferramentas, o tão esperado gerenciador de arquivos Thunar '.
                     'e diversos aperfeiçoamentos em seus núcleos centrais.'.
                     '[br][br]'.
                     'Um tur do Xfce 4.4 está disponível aqui:[br]'.
                     '[link=/about/tour]http://www.xfce.org/about/tour[/link]'.
                     '[br][br]'.
                     'Faça download do Xfce 4.4 no website do Xfce:[br]'.
                     '[link=/download]http://www.xfce.org/download[/link]',
    ),
    10 => array (
        'title'   => 'Lançada a versão 4.2.4 do Xfce',
        'content' => 'Uma nova versão para reparo de falhas do Xfce 4.2 está disponível. Esta versão é supostamente '.
                     'a última para a série 4.2. Ela inclui diversos reparos portados da série em desenvolvimento atual.'.
                     'Esta versão não deve ser confundida com a futura versão 4.4 do Xfce, '.
                     'ela é apenas uma versão para reparos de falhas da versão anterior.'.
                     'Obtenha a versão [link=/download/]nesta página[/link].',
    ),
    9 => array (
        'title'   => 'Lançada a versão 4.4 (4.3.99.2) Candidate 2 do Xfce',
        'content' => 'A segunda e esperadamente última versão candidata do Ambiente de Desktop Xfce 4.4 esta agora '.
		     'disponível para download.[br]Esta versão tem como foco principal a correção de falhas e otimizações. '.
		     'Por favor, veja o [link=/documentation/changelogs/4.3.99.2]changelog[/link] para uma lista de '.
		     'correções e mudanças. Por-favor, ajude-nos a fazer a melhor versão 4.4 do Xfce já lançada, faça '.
                     'download dele, e experimente-o, ajude-nos a aperfeiçoa-lo '.
                     'Obtenha o Xfce [link=/download/]nesta página[/link].',
    ),
    8 => array (
        'title'   => 'Lançada a versão 4.4 (4.3.99.1) Candidate 1 do Xfce',
        'content' => 'A primeira versão candidata do upcoming Ambiente de Desktop Xfce 4.4 agora está disponível para download. '.
 		     'Esta versão repara um grande número de falhas que estavam presentes na versão beta2, e também '.
		     'introduz novos recursos, como suporte a lixeira no gerenciador de arquivos Thunar e no xfdesktop. '.
		     'Além de que está versão também inclui o Xarchiver 0.4.0. Veja as [link=/documentation/changelogs/4.3.99.1]notas da versão[/link] '.
		     'para uma lista detalhada das alterações entre a versão 4.4 beta2 e 4.4 rc1. Por favor ajude-nos a fazer o Xfce '.
		     '4.4 a melhor versão já lançada, faça download, e experimente-o, ajude-nos a aperfeiçoa-lo '.
		     'Obtenha o Xfce [link=/download/]nesta página[/link].', 
    ),
    7 => array (
        'title'   => 'Lançada a versão 4.4 beta 2 (4.3.90.2) do Xfce',
        'content' => 'Agora o Xfce 4.4 beta2 (4.3.90.2) está disponível para download. Além do Mousepad and Thunar '.
		     'esta versão também inclui o novo Gerenciador de Arquivos Compactados Xarchiver. Outra grande '.
		     'novidade é que um grande número de falhas foram reparadas e diversos componentes do sistema '.
		     'foram aperfeiçoados. Uma visão geral detalhada de todas as alterações entre a versão 4.4 beta1'.
		     'e a versão 4.4 beta2 esta disponível [link=/documentation/changelogs/4.3.90.2]aqui[/link]. '.
		     'Por favor ajude-nos a fazer o Xfce 4.4 a melhor versão lançada até o momento, faça download '.
		     'e experimente-o testando e relatando as falhas para as correções! Obtenha o Xfce 4.4 beta2 '.
		     'apartir [link=/download/]desta página[/link].', 
    ),
    6 => array (
        'title'   => 'Lançada a versão 4.4 beta 1 (4.3.90.1) do Xfce',
        'content' => 'Agora o Xfce 4.4 beta1 (4.3.90.1) está disponível para download. O Xfce 4.4 disponibiliza novas ferramentas '.
                     'tais como o gerenciador de arquivos "Thunar", bem com outras grandes melhorias no núcleo de componentes.'.
                     'Por favor, ajude-nos a transformar o Xfce 4.4 na melhor versão lançada até o momento, faça download '.
                     'e experimente-o testando e relatando as falhas para as correções! Obtenha ele apartir desta página.',
    ),
    5 => array (
        'title'   => 'Lançada a versão 4.2.3.2 do Xfce',
        'content' => 'Uma "pequena" versão foi liberada para reparar uma regressão nas configurações do gerenciador de janelas, '.
                     'você pode obtê-la apartir de um de nossos locais de download nesta página '.
                     'e o changelog para a versão 4.2.3 remains here.',
    ),
    4 => array (
        'title'   => 'Lançada a versão 4.2.3.1 do Xfce',
        'content' => 'Uma nova versão do Xfce para correção de falhas foi finalmente liberada, depois de quase 6 meses! O Xfce 4.2.3.1 '.
                     'está disponível para download nas localizações listadas nesta página '.
                     'e o changelog está disponível aqui.',
    ),
    3 => array (
        'title'   => 'Lançada a versão 4.2.2 do Xfce',
        'content' => 'O Xfce 4.2.2 já está disponível. Locais para download podem ser encontrados nesta página '.
                     'e o changelog está disponível aqui.',
    ),
    2 => array (
        'title'   => 'Lançada a versão 4.2.1.1 do Xfce',
        'content' => 'O Xfce 4.2.1.1 foi lançado logo após a versão 4.2.1. Ele inclui uma correção para reparar uma falha aonde  '.
                     'o painel perdia suas configurações quando a sessão estava sendo salva na versão 4.2.1. O servidor Sourceforge '.
                     'foi atualizado e outros mirrors em breve também estaram sendo.',
    ),
    1 => array (
        'title'   => 'Lançada a versão 4.2.1 do Xfce',
        'content' => 'O Xfce 4.2.1 já está disponível. Esta é uma versão de manutenção. Locais para download podem ser encontrados '.
                     'nesta página e o changelog está disponível aqui.',
    ),
);
?>
