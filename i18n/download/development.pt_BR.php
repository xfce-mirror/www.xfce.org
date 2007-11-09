<h1>Desenvolvimento do Xfce</h1>

<p>Se você deseja compilar o Xfce apartir do código fonte, então você deve efetuar
o download dos arquivos comprimidos em formato tarball da versão estável do Xfce
em nossa <a href="/download">página de download</a>, ou experimentar a versão
em desenvolvimento através da utilização do subversion (indicado apenas para os aventureiros).
Atenção, note que não é suportado possuir duas versões do Xfce (estável e desenvolvimento)
instaladas no mesmo prefixo. </p>
 
<h3>Versão estável (4.4.x)</h3>

<p>Esta versão contém as últimas correções de falhas, sem nenhuma nova funcionalidade.
Esta versão deve ser mais estável que a versão em desenvolvimento (até o laçamento da última versão oficial)
mas não existe nenhuma garantia que esta versão não contenha nenhum tipo de falha.

<h3>Versão em desenvolvimento (4.5.x)</h3>

<p>Esta é a versão em desenvolvimento e contém as últimas novidades, atualizações e correções de falhas.
Mas não há nenhuma garantia que está versão irá funcionar completamente sem falhas.</p>

<h2>Obtendo o código-fonte</h2>

<h3>Utilizando o SVN para obter a versão estável (4.4.x)</h3>

<p>Você pode obter a versão completa do Xfce com o seguinte comando:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/4.4</code></p>
<p>ou apenas os módulos apropriados:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/$nomemodule/branches/xfce_4_4 $nomemodulo</code></p>

<h3>Utilizando o SVN para obter a versão em desenvolvimento (4.5.x)</h3>

<p>Você pode obter a versão completa do Xfce com o seguinte comando:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/trunk</code></p>
<p>ou apenas os módulos apropriados:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/$nomemodulo/trunk $nomemodulo</code></p>

<div class="tip">Para manter sua cópia local da versão em desenvolvimento
atualizada (checkout) com o servidor, você deve executar o comando <code>svn update</code>
ao invés de executar o comando <code>svn checkout</code>. O comando <code>svn update</code>
otimizará o processo de transferência com o servidor do Xfce</div>

<h3>Pacotes diário da versão em desenvolvimento</h3>

<p>Se você não tem interesse em realizar testes com frequência na versão em desenvolvimento do Xfce,
ou você não possui experiência com a compilação de códigos através da utilização do SVN, então
você pode efetuar o download de pacotes que são disponibilizados diariamente contendo
a última atualização da versão em desenvolvimento. Os pacotes podem ser encontrados 
<a href="http://mocha.xfce.org/downloads/svn-snapshots/">aqui</a>.</p>

<h2>Construindo os módulos</h2>

<p>Se você já fez download dos arquivos comprimidos em formato tarball, você agora precisará descomprimi-los antes de continuar.</p>
<p>Para instalar com um prefixo diferente do utilizado pelo pkg-config, você deverá configurar a variável PKG_CONFIG_PATH para incluir o caminho para os arquivos *.pc instalados pelas bibliotecas do Xfce 4, que é ${prefix}/lib/pkgconfig. Por exemplo:</p>
<p><code class="code">export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig</code></p>

<p>Para construir os módulos utilizando os arquivos comprimidos em formato tarball, apenas execute:</p>
<p><code class="code">./configure --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>

<p>Para construir os módulos utilizando o svn (você precisará do pacote xfce4-dev-tools) execute este comando: </p>
<p><code class="code">./autogen.sh --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
