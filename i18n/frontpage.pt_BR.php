<div id="front-intro">
    <div id="front-right">
        <div id="front-download">
            <div class="link">
                <h2><a href="/download/" title="Faça download do Xfce 4.6.0 agora!">Baixe o Xfce 4.6.0</a></h2>
            </div>
            <div class="notes">
                <p><a href="/documentation/changelogs/4.6.0" title="Leia os Registros de Mudanças">Registros de Mudanças</a><span class="grey"> | </span><a href="/about/tour" title="O que há de novo no Xfce 4.6">Tur</a></p>
            </div>
        </div>
    </div>
    <div id="front-intro-about">
        <h1>Sobre o Xfce</h1>
        <p><em>"Xfce é um ambiente de desktop leve para vários sistemas *NIX. Projetado para ser produtivo, ele carrega e executa as aplicações rapidamente, enquanto conserva os recursos disponíveis do sistema."</em> - <strong>Olivier Fourdan, criador do Xfce</strong></p>
        <p>Xfce 4.6 incorpora a filosofia tradicional de reutilização e modularidade do UNIX. Ele consiste de um número de componentes que juntos fornecem a funcionalidade completa para o ambiente de desktop. Eles são empacotados separadamente e você pode selecionar os pacotes disponíveis para criar o melhor ambiente de trabalho personalizado.</p>
        <p class="readmore"><a href="/about/" title="Aprenda mais sobre o Xfce...">aprenda mais</a></p>
    </div>
</div>
<div class="clearboth"></div>
<div id="front-container">
    <div id="front-news">
        <div id="front-news-content">
            <h2><a href="/?feed=rss2&amp;lang=<?php echo $lang ?>"><img src="/layout/images/feed.gif" alt="feed" title="Inscreva-se em 'Notícias sobre Xfce'..." width="12" height="12" border="0" align="right" /></a>Últimas Notícias</h2>
            <?php
                echo $frontpage["news"];
            ?>
            <div class="readmore">
                <a href="/about/news" title="Leia todas as notícias sobre o Xfce...">mais notícias</a>
            </div>
        </div>
    </div>
    <div id="front-projects">
        <div id="front-borders">
            <div id="front-projects-content">
                <h2>Projetos do Xfce</h2>
                <ul>
                    <li>
                        <a href="/projects/thunar/">Thunar</a>
                        <br />
                        <span class="grey">Thunar é o novo gerenciador moderno de arquivos para o Ambiente de Desktop Xfce.</span>
                    </li>
                    <li>
                        <a href="/projects/mousepad/">Mousepad</a>
                        <br />
                        <span class="grey">Mousepad é um editor de texto para o Ambiente de Desktop Xfce, o projeto é baseado no Leafpad. O Mousepad é simples, rápido e fácil de utilizar.</span>
                    </li>
                    <li>
                        <a href="/projects/orage/">Orage</a>
                        <br />
                        <span class="grey">Aplicação de calendário para o projeto Xfce.</span>
                    </li>
                    <li>
                        <a href="/projects/xfburn/">Xfburn</a>
                        <br />
                        <span class="grey">Aplicação para gravar CD e DVD.</span>
                    </li>
                    <li>
                        <a href="/projects/xfmedia">Xfmedia</a>
                        <br />
                        <span class="grey">Xfmedia é um reprodutor multimídia baseado na biblioteca do xine, ele é simples e fácil de utilizar.</span>
                    </li>
                </ul>
                <div class="readmore">
                    <a href="/projects/" title="Visualizar todos os projetos do Xfce...">mais projetos</a>
                </div>
            </div>
        </div>
    </div>
    <div id="front-blog">
        <div id="front-blog-content">
            <h2><a href="http://blog.xfce.org/?feed=rss2"><img src="/layout/images/feed.gif" alt="feed" title="Inscreva-se no 'Blog do Xfce'..." width="12" height="12" border="0" align="right" /></a>Blog dos Desenvolvedores</h2>
            <?php
                echo $frontpage["blog"];
            ?>
            <div class="readmore">
                <a href="http://blog.xfce.org/" title="Visualizar o blog inteiro do Xfce...">visitar o blog</a>
            </div>
            <h2>Atalhos</h2>
            <ul>
                <li><a href="/community/lists">Listas de discussão</a></li>
                <li><a href="/about/screenshots">Telas Capturadas</a></li>
                <li><a href="http://forum.xfce.org" title="Fórum do Xfce (Nova Janela)" class="external">Fórum do Xfce</a></li>
                <li><a href="http://bugzilla.xfce.org" title="Relatar uma falha (Nova Janela)" class="external">Relatar uma falha</a></li>
                <li><a href="http://wiki.xfce.org" title="Wiki do Xfce (Nova Janela)" class="external">Wiki do Xfce</a></li>
                <li><a href="/download/distros" title="Distribuições que utilizam o Xfce">Xfce em Distribuições</a></li>
            </ul>
        </div>
    </div>
</div>
