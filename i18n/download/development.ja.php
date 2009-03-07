<h1>Xfce 開発ソースコード</h1>

<p>
ソースコードから Xfce をビルドする場合は、Xfce リリース版の tarボールを<a href="/download">ダウロードページ</a>からダウンロードするか、(冒険好きな方限定ですが) 開発版を subversion を使いダウンロードして使ってください。
二つの Xfce のバージョン (つまり、安定版と開発版) を両方インストールすることはサポートされません。注意してください。
</p>


<h3>最新版 (4.6.x)</h3>

<p>このバージョンには最新のバグ修正がありますが、新しい大きな機能追加はありません。これは開発版 (と最新の公式版) より安定しているはずですが、バグがないという保証はありません。
</p>

<h3>最新の開発版 (4.7.x) </h3>

<p>
このバージョンでは最新の開発の更新とバグ修正を含んでいます。完全に動く保証もバグがないという保証も全くありません。
</p>

<h2>ソースコードの入手</h2>

<h3>最新のリリース版 (4.6.x) を SVN から手にいれる</h3>

<p>以下のコマンドを使ってリリースツリーのすべてをダウンロードすることができます;</p>

<p>
<code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/4.6</code>
</p>

<p>部分的にモジュールが欲しい場合は:</p>

<p>
<code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/branches/xfce_4_6 $modulename</code>
</p>

<h3>最新の開発版 (4.7.x) を SVN からを手にいれる</h3>

<p>
以下のコマンドを使ってリリースのツリーのすべてをダウンロードすることができます:
</p>

<p>
<code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/trunk</code>
</p>

<p>部分的にモジュールが欲しい場合は：</p>

<p>
<code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/trunk $modulename</code>
</p>

<div class="tip">リリース版、または開発ツリーのローカルコピーをサーバと同期させるには、<code>svn checkout</code> ではなく <code>svn update</code> を実行してください。
これによりプロセスの速度が上がり、Xfce サーバの転送を最小化します。
</div>

<h3>毎日更新される開発スナップショット</h3>

<p>
定期的に Xfce の開発版をテストしたくないか、SVN からのソースビルドの経験がない場合は、
毎日更新される開発スナップショットを<a href="http://mocha.xfce.org/downloads/svn-snapshots/">ここ</a>からダウンロードできます。
</p>

<h2>モジュールのビルド</h2>

<p>
Tarボールをダウンロードしたら、まずそれを展開してください。
</p>

<p>
pkg-config にある prefix とは違った場所にインストールしたいのであれば、PKG_CONFIG 変数に Xfce 4 ライブラリによりインストールされた *.pc ファイル (これは ${prefix}/lib/pkgconfig のことです) へのパスを設定する必要があります。たとえば:
</p>

<p>
<code class="code">export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig</code>
</p>

<p>Tarボールからモジュールをビルドするなら、以下のコマンドを実行してください:</p>

<p>
<code class="code">./configure --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code>
</p>

<p>
SVN のモジュールをビルドするには、以下のコマンドを実行してください (xfce4-dev-tools パッケージが必要です) :
</p>

<p>
<code class="code">./autogen.sh --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code>
</p>
