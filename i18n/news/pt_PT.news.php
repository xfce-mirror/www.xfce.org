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
        'content' => 'Olá a todos,'.
                     '[br][br]'.
                     'O Xfce 4.4.1 foi lançado. Esta é a primeira versão de reparação de falhas da série 4.4 do Xfce '.
                     '(a série actualmente estável do Xfce), são reparadas falhas importantes e actualiza algumas traduções.'.
                     '[br][br]'.
                     'Faça download do Xfce 4.4.1 no [link=/download/]website do Xfce.[/link]'.
                     '[br][br]'.
                     'Uma visão geral das mudanças está disponível em [link=/documentation/changelogs/4.4.1]changelog[/link].'.
                     '[br][br]'.
                     'Divirta-se![br]'.
                     'Equipa de desenvolvimento do Xfce.',
    ),
    11 => array (
        'title'   => 'Lançada a versão 4.4.0 do Xfce',
        'content' => 'Depois de mais de dois anos de desenvolvimento, o Xfce 4.4.0 foi lançado.'.
                     '[br]'.
                     'O Xfce 4.4 apresenta novas ferramentas, o tão esperado gestor de ficheiros Thunar '.
                     'e diversos aperfeiçoamentos nos núcleos centrais.'.
                     '[br][br]'.
                     'Um tour do Xfce 4.4 está disponível aqui:[br]'.
                     '[link=/about/tour]http://www.xfce.org/about/tour[/link]'.
                     '[br][br]'.
                     'Faça download do Xfce 4.4 no website do Xfce:[br]'.
                     '[link=/download]http://www.xfce.org/download[/link]',
    ),
    10 => array (
        'title'   => 'Lançada a versão 4.2.4 do Xfce',
        'content' => 'Uma nova versão para reparação de falhas do Xfce 4.2 está disponível. Esta versão é supostamente '.
                     'a última para a série 4.2. Ela inclui diversas reparações portadas da série em desenvolvimento.[br]'.
                     'Esta versão não deve ser confundida com a futura versão 4.4 do Xfce, '.
                     'ela é apenas uma versão para reparos de falhas da versão anterior. '.
                     'Obtenha a versão [link=/download/]nesta página[/link].',
    ),
    9 => array (
        'title'   => 'Lançada a versão 4.4 (4.3.99.2) Candidate 2 do Xfce',
        'content' => 'A segunda e esperada última versão candidata do Ambiente de Desktop Xfce 4.4 está agora '.
		     'disponível para download.[br]Esta versão tem como foco principal a correcção de falhas e optimizações. '.
		     'Por favor, veja o [link=/documentation/changelogs/4.3.99.2]changelog[/link] para uma lista de '.
		     'correcções e mudanças. Por favor, ajude-nos a fazer a melhor versão 4.4 do Xfce já lançada, faça '.
                     'download dele, e experimente-o, ajude-nos a aperfeiçoá-lo! '.
                     'Obtenha o Xfce [link=/download/]nesta página[/link].',
    ),
    8 => array (
        'title'   => 'Lançada a versão 4.4 (4.3.99.1) Candidate 1 do Xfce',
        'content' => 'A primeira versão candidata do próximo Ambiente de Desktop Xfce 4.4 agora está disponível para download. '.
 		     'Esta versão repara um grande número de falhas que estavam presentes na versão beta2, e também '.
		     'introduz novos recursos, como o suporte ao lixo no gestor de ficheiros Thunar e no xfdesktop. '.
		     'Além de que esta versão também inclui o Xarchiver 0.4.0. Veja as [link=/documentation/changelogs/4.3.99.1]notas da versão[/link] '.
		     'para uma lista detalhada das alterações entre a versão 4.4 beta2 e 4.4 rc1. Por favor ajude-nos a fazer o Xfce '.
		     '4.4 a melhor versão já lançada, faça download, e experimente-o, ajude-nos a aperfeiçoá-lo! '.
		     'Obtenha o Xfce [link=/download/]nesta página[/link].', 
    ),
    7 => array (
        'title'   => 'Lançada a versão 4.4 beta 2 (4.3.90.2) do Xfce',
        'content' => 'Agora o Xfce 4.4 beta2 (4.3.90.2) está disponível para download. Além do Mousepad e Thunar '.
		     'esta versão também inclui o novo Gestor de Arquivos Compactados Xarchiver. Outra grande '.
		     'novidade é que um grande número de falhas foram reparadas e diversos componentes do sistema '.
		     'foram aperfeiçoados. Uma visão geral detalhada de todas as alterações entre a versão 4.4 beta1'.
		     'e a versão 4.4 beta2 está disponível [link=/documentation/changelogs/4.3.90.2]aqui[/link]. '.
		     'Por favor ajude-nos a fazer o Xfce 4.4 a melhor versão lançada até ao momento, faça download '.
		     'e experimente-o, testando e relatando as falhas para as correcções! Obtenha o Xfce 4.4 beta2 '.
		     'a partir [link=/download/]desta página[/link].', 
    ),
    6 => array (
        'title'   => 'Lançada a versão 4.4 beta 1 (4.3.90.1) do Xfce',
        'content' => 'Agora o Xfce 4.4 beta1 (4.3.90.1) está disponível para download. O Xfce 4.4 disponibiliza novas ferramentas '.
                     'tais como o gestor de ficheiros "Thunar", bem como outras grandes melhorias no núcleo de componentes. '.
                     'Por favor, ajude-nos a transformar o Xfce 4.4 na melhor versão lançada até ao momento, faça download '.
                     'e experimente-o testando e relatando as falhas para as correcções! Obtenha-o a partir desta página.',
    ),
    5 => array (
        'title'   => 'Lançada a versão 4.2.3.2 do Xfce',
        'content' => 'Uma "pequena" versão foi lançada para reparar uma regressão nas configurações do gestor de janelas, '.
                     'pode obtê-la a partir de um dos nossos locais de download nesta página '.
                     'e o changelog para a versão 4.2.3 está disponível aqui.',
    ),
    4 => array (
        'title'   => 'Lançada a versão 4.2.3.1 do Xfce',
        'content' => 'Uma nova versão do Xfce para correcção de falhas foi finalmente lançada, depois de quase 6 meses! O Xfce 4.2.3.1 '.
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
        'content' => 'O Xfce 4.2.1.1 foi lançado logo após a versão 4.2.1. Ele inclui uma correcção para reparar uma falha onde  '.
                     'o painel perdia as configurações quando a sessão estava a ser gravada na versão 4.2.1. O servidor Sourceforge '.
                     'foi actualizado e outros mirrors em breve também o serão.',
    ),
    1 => array (
        'title'   => 'Lançada a versão 4.2.1 do Xfce',
        'content' => 'O Xfce 4.2.1 já está disponível. Esta é uma versão de manutenção. Locais para download podem ser encontrados '.
                     'nesta página e o changelog está disponível aqui.',
    ),
);
?>
