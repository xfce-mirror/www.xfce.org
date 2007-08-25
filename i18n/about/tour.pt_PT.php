<h1>Um Tour Visual do Xfce 4.4.0</h1>
<p align="justify">
A partir de hoje, a muito esperada versão 4.4.0 do Ambiente de Trabalho Xfce está finalmente
disponível. Eu irei tentar destacar algumas das novas funcionalidades que foram adicionadas desde
o último lançamento estável.
</p>


<h2>Ícones na Área de Trabalho<a name="desktop-icons"></a></h2>

<p align="justify">
Uma das funções mais solicitadas durante o 4.0 e 4.2 foi o suporte a ícones
na área de trabalho. Agora, com o Xfce 4.4.0, esta função foi finalmente adicionada ao gestor
da área de trabalho <b>Xfdesktop</b>.
</p>

<p align="center"><img src="/images/about/tour/xfce44-desktop-icons.png" alt="Desktop Icons" /></p>

<p align="justify">
O gestor da área de trabalho utiliza as bibliotecas do <b>Thunar</b> para gerir lançadores de aplicações
e ficheiros/pastas regulares na área de trabalho. O gestor da área de trabalho também pode exibir
ícones para janelas minimizadas na área de trabalho, que é uma função bem popular do mundo
CDE. É claro, que pode desligar os ícones da área de trabalho completamente se preferir uma área de
trabalho limpa.
</p>

<p align="center"><img src="/images/about/tour/xfce44-desktop-settings.png" alt="Desktop Settings" /></p>

<p align="justify">
O <b>Xfdesktop</b> também continua a fornecer acesso ao menu de aplicações, como fazia
nas versões anteriores do Xfce.
</p>


<h2>Gestor de Ficheiros<a name="file-manager"></a></h2>

<p align="justify">
O suporte a ícones na área de trabalho trabalha em conjunto com o novo gestor de ficheiros <a href="http://thunar.xfce.org/">Thunar</a>
que substitui o gestor de ficheiros anterior <b>Xffm</b>.
</p>

<p align="center"><img src="/images/about/tour/xfce44-thunar.png" alt="Thunar File Manager" /></p>

<p align="justify">

O <b>Thunar</b> foi escrito do zero para fornecer um gestor de ficheiros fácil de usar, mas leve
para o Xfce. A sua interface de utilizador foi desenhada para ser similar ao file chooser
que foi introduzido com o GTK+ 2.4, e outros gestores de ficheiros como o <b>Nautilus</b> e <b>pcmanfm</b>
já tinham seguido também esta ideia.
</p>

<p align="justify">
O <b>Thunar</b> suporta todas as funcionalidade de gestão de ficheiros que os utilizadores irão necessitar, e também
diversas funções avançadas. Por exemplo: uma função chamada <i>Renomeador em Massa</i> está incluída
e permite aos utilizadores renomear múltiplos ficheiros duma vez usando um certo critério.
</p>

<p align="center"><img src="/images/about/tour/xfce44-thunar-bulk-rename.png" alt="Thunar Bulk Rename" /></p>


<h2>Drives e Dispositivos Amovíveis<a name="removable-drives-and-media"></a></h2>

<p align="justify">
O Xfce 4.4.0 oferece fácil acesso a dados em drives e dispositivos amovíveis. Apenas insira o dispositivo
ou ligue a nova drive ao computador e um ícone representando o volume amovível irá
aparecer na área de trabalho e no painel lateral do <b>Thunar</b>.
</p>

<p align="center"><img src="/images/about/tour/xfce44-removable-volumes.png" alt="Removable Volumes" /></p>

<p align="justify">
Clique num ícone para montar o volume automaticamente. Um clique direito no ícone desmonta o volume ou ejecta
o disco da drive. De qualquer maneira, note que esta função requer o<a
href="http://freedesktop.org/wiki/Software_2fhal"> HAL</a> e está disponível apenas para o Linux 2.6.x
e FreeBSD 6.x e posteriores quando este documento foi escrito (Há suporte limitado a dispositivos amovíveis no FreeBSD
4.x e 5.x que não necessita do HAL).
</p>


<h2>Editor de Textos<a name="text-editor"></a></h2>

<p align="justify">
O novo editor de textos <b>MousePad</b> está incluído nesta versão. <b>MousePad</b> oferece todas as funções
básicas de edição, nada mais, nada menos.
</p>

<p align="center"><img src="/images/about/tour/xfce44-mousepad.png" alt="MousePad" /></p>

<p align="justify">

Pode considerar o <b>MousePad</b> como um equivalente ao <b>Bloco de Notas</b> do Windows. Ele inicia muito
rapidamente, normalmente em menos de um segundo, mesmo em sistemas mais antigos.
</p>


<h2>Gestor de Janelas<a name="window-manager"></a></h2>

<p align="justify">

O <b>Xfwm4</b> continua a ser o gestor de janelas do coração.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-argb32.png" alt="Xfwm4 ARGB32" /></p>

<p align="justify">
Esta versão apresenta um compositor melhorado, suportando janelas ARGB transparentes, sombras,
transparência de quadro de janelas e muito mais.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-switcher.png" alt="Xfwm4 Switcher" /></p>

<p align="justify">
O <b>Xfwm4</b> também inclui um novo alternador de aplicações, como exibido na captura de ecrã abaixo,
que exibe todas as janelas da área de trabalho actual com ícones e títulos de janelas.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-themes.png" alt="Xfwm4 Themes" /></p>

<p align="justify">
Foi ampliado o suporte para múltiplos formatos de imagem para temas de decoração de janelas, incluindo
imagens <tt>PNG</tt>, <tt>GIF</tt> e <tt>SVG</tt>.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-tweaks.png" alt="Xfwm4 Tweaks" /></p>

<p align="justify">
Controles avançados para o gestor de janelas também foi adicionado, permitindo ajustes completos
do comportamento das janelas.
</p>


<h2>Painel<a name="panel"></a></h2>

<p align="justify">

O <b>Xfce4-panel</b> foi completamente reescrito para a versão 4.4 do Xfce. Múltiplos painéis são
suportados <i>directo da caixa</i> agora e podem ser configurados facilmente usando o novo <b>gestor
de Painéis</b> exibido na captura de ecrã abaixo.
</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-manager.png" alt="Panel Manager" /></p>

<p align="justify">

Um dos maiores problemas nas versões anteriores do Xfce era que todos os plugins tinham que correr
no mesmo processo que o painel, e assim qualquer plugin podia bloquear todo o
painel. Para solucionar este problema, o suporte a plugins externos foi adicionado ao painel.
</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-additem.png" alt="Panel Add Item Dialog" /></p>

<p align="justify">
Os desenvolvedores de plugins do painel agora podem decidir se o plugin é executado como um processo
externo ou como parte do processo do painel, dependendo da estabilidade do plugin.
</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-iconbox.png" alt="Panel Icon Box Plugin" /></p>

<p align="justify">

Já que agora há suporte para múltiplos painéis, os utilitários separados <b>Xftaskbar4</b> e
<b>Xfce4-iconbox</b> não são mais necessários. Ao invés disso, tanto o taskbar como
o iconbox estão agora disponíveis como plugins do painel.
</p>

<p align="justify">
A maioria dos plugins adicionais do painel, disponíveis via o <a href="http://goodies.xfce.org/">Projecto
Xfce Goodies</a>, foram actualizados para o novo painel, e diversos novos plugins foram adicionados.
Por exemplo, o novo <b>xfce4-xfapplet-plugin</b> permite aos utilizadores adicionarem applets do painel GNOME
ao painel Xfce.
</p>


<h2>Gestão de Tempo<a name="time-management"></a></h2>

<p align="justify">
A nova aplicação de gestão de tempo <b>Orage</b> substitui o <b>Xfcalendar</b>, que foi introduzido com
o Xfce 4.2.0. O <b>Orage</b> oferece diversas funções para gerir o seu tempo eficientemente.
</p>

<p align="center"><img src="/images/about/tour/xfce44-orage.png" alt="Orage" /></p>

<p align="justify">
Enquanto o <b>Orage</b> é muito leve e fácil de usar, ele suporta todas as funções importantes encontradas em
aplicações de calendário maiores como o <b>Outlook</b> ou o <b>Evolution</b>. Enquanto o <b>Xfcalendar</b> usava o
formato <tt>dbh</tt> no passado para armazenar as suas configurações, o <b>Orage</b> é baseado no <tt>ical</tt>
e por isso é compatível com outras aplicações de calendário.
</p>


<h2>Emulador de Terminal<a name="terminal-emulator"></a></h2>

<p align="justify">
Mesmo estando o <b>Terminal</b> disponível desde a versão 4.2, ele não estava maduro o suficiente
na época para ser parte do núcleo. Com esta nova versão, ele foi movido para o núcleo do desktop.
</p>

<p align="center"><img src="/images/about/tour/xfce44-terminal.png" alt="Terminal" /></p>

<p align="justify">
Além das funcionalidades básicas que espera de um emulador de terminal, ele inclui algumas boas
funções adicionais, como múltiplos separadores por janela, barras de ferramentas personalizáveis e a habilidade
de configurar quase qualquer aspecto da aplicação via <i>opções ocultas</i>. Como pode
ver na captura de ecrã acima, esta versão também suporta transparência real usando o
gestor de composição integrado no <b>Xfwm4</b>.
</p>


<h2>Impressão<a name="printing"></a></h2>

<p align="justify">
<b>Xfprint</b>, a aplicação de gestão de impressão do Xfce, recebeu diversas pequenas melhorias
nesta versão. Primeiro, o conversor <tt>a2ps</tt> não é mais obrigatório, apesar de ainda
ser recomendado. O suporte ao <tt>CUPS</tt> 1.2 foi adicionado e o <b>Xfprint</b> agora pode exibir o estado da
impressora com o <tt>CUPS</tt>-backend.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfprint.png" alt="Xfce Printing" /></p>

<p align="justify">
O <b>Xfprint</b> também se integra com o <b>MousePad</b> para oferecer suporte genérico à impressão para
diferentes tipos de documentos de texto usando o conversor <tt>a2ps</tt>.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfprint-dialog.png" alt="Xfce Print Dialog" /></p>

<p align="justify">
Como pode ver, o diálogo de impressão ainda parece relativamente similar ao do Xfce 4.2, mas o funcionamento
interno de suporte a impressão foi melhorado, especialmente o suporte ao <tt>CUPS</tt>. Além disso,
a funcionalidade de gestão de impressão foi movida para uma biblioteca, para que outras aplicações possam utilizar
a API para aceder à configuração da impressora.
</p>


<h2>Autoinício<a name="autostart"></a></h2>

<p align="justify">
O Xfce 4.4.0 implementa a nova <a href="http://freedesktop.org/wiki/Standards_2fautostart_2dspec">Especificação
Autoinício</a> - na realidade, o Xfce foi o primeiro desktop a implementar tal função, mas os outros foram mais
rápidos a lançar. ;-)
</p>

<p align="center"><img src="/images/about/tour/xfce44-autostart.png" alt="Xfce Autostart Editor" /></p>

<p align="justify">
A especificação consiste de duas partes, o <i>Autoinício de Aplicações Durante o Carregamento</i>, que é
implementado no <b>xfce4-session</b> e o <i>Autoinício de Aplicações Após a Montagem</i> que é
implementado no <a href="http://foo-projects.org/~benny/projects/thunar-volman/index.html">thunar-volman</a>.
Esta versão também inclui o <b>xfce4-autostart-editor</b>, exibido na captura de ecrã acima, que permite
aos utilizadores adicionar facilmente, remover ou desligar aplicações autoiniciadas.
</p>


<h2>Configurações<a name="settings"></a></h2>

<p align="justify">
Esta versão introduz novas opções para personalizar o desktop conforme as suas necessidades. Alguns exemplos de novos diálogos
de configurações já foram exibidos nas secções acima.
</p>

<p align="center"><img src="/images/about/tour/xfce44-preferences-applications.png" alt="Preferred Applications" /></p>

<p align="justify">

O framework de aplicações preferido, previamente apenas disponível no <b>Terminal</b>, foi importado
para o Xfce, assim os utilizadores não precisam mais de editar perfis da shell para especificar que navegador e emulador de terminal
devem ser utilizados pelas aplicações do Xfce. O objectivo foi tornar a troca de uma aplicação para uma certa categoria
o mais fácil possível (utilizadores do GNOME já devem ter notado que o GNOME adoptou este método, devido à simplicidade).
</p>

<p align="center"><img src="/images/about/tour/xfce44-preferences-keyboard.png" alt="Keyboard Shortcuts" /></p>

<p align="justify">
E havia então o problema com os atalhos do teclado no Xfce 4.2... O número limitado de atalhos do teclado
disponíveis no Xfce 4.2, enquanto as pessoas queriam designar qualquer número de atalhos do teclado.
Com o Xfce 4.4 esta limitação é passado e os atalhos de aplicações são separados dos atalhos do gestor
de janelas.
</p>


<h2>Retorno<a name="feedback"></a></h2>

<p align="justify">
Por favor, poste comentários neste artigo no meu <a href="http://xfce-diary.blogspot.com/2007/01/visual-tour-of-xfce-440.html">blog</a> e use
a lista de e-mails <a href="/community/lists">xfce</a> se tiver dúvidas sobre o Xfce 4.4.0 ou
problemas com a instalação.
</p>


<h2>Endereços<a name="links"></a></h2>

<ul>
<li><a href="http://www.xfce.org/">Website Xfce</a></li>
<li><a href="http://thunar.xfce.org/">Website Thunar</a></li>
</ul>

<h2>Créditos<a name="credits"></a></h2>
<p align="justify">Escrito por Benedikt Meurer, 21 Jan 2007</p>
