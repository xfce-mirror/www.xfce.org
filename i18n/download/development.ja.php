<h1>Xfce開発ソースコード</h1>
<p>ソースコードからXfceをビルドする場合は、Xfceのリリース版のtarボールをダウンロードするか、subversionを使い開発版をダウンロードして使ってください。
二つのXfceのバージョン(つまり、安定版と開発版)をインストールすることはサポートされません。注意してください。</p>
<h3>最新版 (4.4.x)</h3>
<p>このバージョンには最新のバグ修正がありますが、新しい大きな機能はありません。これは開発版(と最新の公式版)より安定しているはずですが、バグがないという保証はありません。</p>
<h3>最新の開発版 (4.5.x) </h3>
<p>このバージョンでは最新の開発の更新とバグ修正を含んでいます。完全に動く保証もバグがないと保証も全くありません。</p>
<h2>ソースコードを手にいれる</h2>
<h3>SVNから最新のリリース版(4.4.x)から手にいれる</h3>
<p>以下のコマンドを使ってリリースのツリーのすべてをダウンロードすることができます。；</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/4.4</code></p>
<p>部分的にモジュールが欲しい場合は：</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/branches/xfce_4_4 $modulename</code></p>
<h3>SVNから最新の開発版(4.5.x)を手にいれる</h3>
<p>以下のコマンドを使ってリリースのツリーのすべてをダウンロードすることができます。：</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/trunk</code></p>
<p>部分的にモジュールが欲しい場合は：</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/trunk $modulename</code></p>
<div class="tip">リリース版、または開発ツリーのローカルのコピーをサーバと同期させる(checkout)には、<code>svn update</code>を <code>svn checkout</code>の代わりに実行してください。
これをすることによりプロセスの速度が上がり、Xfceサーバの転送が最大化します。</div>
<h3>毎日更新される開発スナップショット</h3>
<p>定期的にXfceの開発版をテストしたくないか、SVNからのソースビルドの経験がないのなら、
毎日更新される開発スナップショットを<a href="http://mocha.xfce.org/downloads/svn-snapshots/">ここ</a>からダウンロードできます。</p>
<h2>モジュールをビルドする</h2>
<p>Tarボールをダウンロードしたら、最初に解凍してください。</p>
<p>pkg-configにあるprefixとは違った場所にインストールしたいのであれば、パスを含んだPKG_CONFIG変数をXfce 4ライブラリによりインストールされた *.pc ファイル(これは${prefix}/lib/pkgconfigのことです。)へ通す必要があります。たとえば：</p>
<p><code class="code">export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig</code></p>
<p>Tarボールからモジュールをビルドするなら、以下の通り実行してください：</p>
<p><code class="code">./configure --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
<p>svnモジュール'xfce4-dev-toolsのパッケージが必要です。)をビルドするには、このコマンドを実行してください。：</p>
<p><code class="code">./autogen.sh --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
