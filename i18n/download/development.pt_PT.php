<h1>Código fonte do Xfce</h1>
<p>Se quiser compilar o Xfce a partir do código fonte, pode fazer o download dos arquivos de uma das versões do Xfce da nossa <a href="/download">página de download</a>,  ou usar uma versão de desenvolvimento, a partir da subversion (apenas para aventureiros).
Por favor, note que instalar duas versões diferentes do Xfce (ie. estável e desenvolvimento) não é suportada.</p>
<h3>Última versão de lançamento (4.4.x)</h3>
<p>Esta versão contém as últimas correcções de bugs, sem nenhuma grande alteração. Deve ser mais estável que a versão de desenvolvimento (e ainda que a última versão oficial), mas não existe garantia que esta versão esteja livre de bugs.</p>
<h3>Última versão de desenvolvimento (4.5.x) </h3>
<p>Esta versão contém as últimas actualizações de desenvolvimento e correcção de bugs. Não há garantia de funcionar totalmente e de estar livre de bugs.</p>
<h2>Obter o código fonte </h2>
<h3>Última versão lançada (4.4.x) do SVN</h3>
<p>Pode fazer o download da árvore completa com o seguinte comando:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/4.4</code></p>
<p>Ou os módulos apropriados:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/branches/xfce_4_4 $modulename</code></p>
<h3>Última versão de desenvolvimento (4.5.x) do SVN </h3>
<p>Pode fazer o download da árvore completa com o seguinte comando:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/trunk</code></p>
<p>Ou os módulos apropriados:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/trunk $modulename</code></p>
<div class="tip">Para sincronizar a sua cópia local (checkout) da árvore de lançamento ou desenvolvimento com a do servidor pode correr <code>svn update</code> em vez de <code>svn checkout</code>. Isto irá acelerar o processo e minimizar a transferência do servidor Xfce</div>
<h3>Imagens desenvolvidas diariamente</h3>
<p>Se não quiser testar a versão de desenvolvimento do Xfce ou não tem experiência em compilar a partir do SVN, pode fazer o download das imagens diárias de desenvolvimento  <a href="http://mocha.xfce.org/downloads/svn-snapshots/">aqui</a>.</p>
<h2>Construir os módulos</h2>
<p>Se fez o download dos arquivos, precisa de descompactar antes de continuar.</p>
<p>Se instalar com um prefix diferente do pkg-config, tem de mudar a variável PKG_CONFIG_PATH para incluir o caminho para os ficheiros *.pc instalados pelas bibliotecas Xfce 4, que é ${prefix}/lib/pkgconfig.  Por exemplo:</p>
<p><code class="code">export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig</code></p>
<p>Para construir os módulos dos arquivos execute:</p>
<p><code class="code">./configure --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
<p>Para construir módulos svn (precisa do pacote xfce4-dev-tools) execute o comando: </p>
<p><code class="code">./autogen.sh --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
