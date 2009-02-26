<h1>Xfce 4.4.0のツアー</h1>
<p align="justify">
今日、長い間待ちわびられていたXfceデスクトップ環境4.4.0がやっと利用できるようになりました。
最後の安定版のあとに追加された新しい機能を説明したいと思います。
</p>


<h2>デスクトップアイコン<a name="desktop-icons"></a></h2>

<p align="justify">
4.0と4.2の時に一番よく追加して欲しい機能として聞かれたものの一つとしてはデスクトップ上のアイコンを
サポートして欲しいと言うことでした。Xfce 4.4.0ではこの機能がようやく<b>Xfdesktop</b>（デスクトップマネージャ）に追加されました。
</p>

<p align="center"><img src="/images/about/tour/xfce44-desktop-icons.png" alt="デスクトップアイコン" /></p>

<p align="justify">
デスクトップマネージャは<b>Thunar</b>のライブラリをアプリケーションランチャーと
デスクトップ上でのファイル/フォルダを扱うために利用しています。このデスクトップマネージャは
デスクトップの最小化されたウィンドウのアイコンを表示できるようにするものです。（この機能はCDEの世界では
一番有名な機能です。）勿論、何もないデスクトップの方が良いと思うのであれば、デスクトップアイコンを完全に無効にすることもできます。
</p>

<p align="center"><img src="/images/about/tour/xfce44-desktop-settings.png" alt="デスクトップ設定" /></p>

<p align="justify">
また、<b>Xfdesktop</b>は引き続き以前からのXfceと同じようにアプリケーションメニューへのアクセスを提供します。
</p>


<h2>ファイルマネージャ<a name="file-manager"></a></h2>

<p align="justify">
デスクトップアイコンサポートは新しいファイルマネージャである<a href="http://thunar.xfce.org/">Thunar</a>との連携により提供されます。
<b>Thunar</b>はこれまでのファイルマネージャであった<b>Xffm</b>を置き換えるものです。
</p>

<p align="center"><img src="/images/about/tour/xfce44-thunar.png" alt="Thunar ファイルマネージャ" /></p>

<p align="justify">

<b>Thunar</b>はXfce用の使い勝手が良い一方で軽量なファイルマネージャを提供するために最初の一歩から書き直されたものです。
インターフェイスはすでにGTK+ 2.4のファイル選択UIや、<b>Nautilus</b>や<b>pcmanfm</b>のような
すでにこの考えを採用しているファイルマネージャに似ています。</p>

<p align="justify">
<b>Thunar</b>はユーザが期待すると思われる全てのファイル管理機能といくつかの先進的なものをサポートします。
たとえば、いわゆる<i>Bulk Renamer</i>はユーザが任意の基準を使ってを使って複数のファイルを一度にリネームすることができるものを
含んでいます。
</p>

<p align="center"><img src="/images/about/tour/xfce44-thunar-bulk-rename.png" alt="Thunarバルクリネーム" /></p>


<h2>取り外し可能なドライブとメディア<a name="removable-drives-and-media"></a></h2>

<p align="justify">
Xfce 4.4.0では取り外しができるドライブとメディアにあるデータに簡単にアクセスできます。メディアをドライブに入れるか
新しいドライブをコンピュータに接続すると、取り外しができるドライブ/メディアのアイコンがデスクトップ上と<b>Thunar</b>のウィンドウ枠に表示されます。
</p>

<p align="center"><img src="/images/about/tour/xfce44-removable-volumes.png" alt="取り外しのできるドライブとメディア" /></p>

<p align="justify">
アイコンをクリックすると自動的にドライブやメディアがマウントされます。アイコンを右クリックすることでメディアの取り出しや、ドライブのアンマウント
を行うことができます。注意して欲しいことはこの機能を使うためには<a
href="http://freedesktop.org/wiki/Software_2fhal">HAL</a>が必要であることと、
Linux 2.6.xとFreeBSD 6.x以上でしか、この文書を書いている時点では利用できないことです。
（いくつか制限がありますがFreeBSD 4.xと5.xにはHALを使用しない取り出しできるメディアのサポートがあります。）
</p>


<h2>テキストエディタ<a name="text-editor"></a></h2>

<p align="justify">
新しいテキストエディタである<b>MousePad</b>はこのリリースに含まれています。<b>MousePad</b>はすべての基本的な
エディタの機能（それ以上でもそれ以下でもありません。）を提供しています。</p>

<p align="center"><img src="/images/about/tour/xfce44-mousepad.png" alt="MousePad" /></p>

<p align="justify">

Windowsの<b>NotePad</b>と<b>MousePad</b>は同じようなものだと考えることができます。
とても早く（たとえ古いシステム上でも通常一秒以下）起動できますしね。

</p>


<h2>ウィンドウマネージャ<a name="window-manager"></a></h2>

<p align="justify">

<b>Xfwm4</b>は相変わらずウィンドウマネージャの心臓部です。</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-argb32.png" alt="Xfwm4 ARGB32" /></p>

<p align="justify">
このリリースでは拡張された文字制御、透過ARGBウィンドウ、影、ウィンドウフレームの透過や更にその他の機能を特徴としています。
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-switcher.png" alt="Xfwm4 スイッチャ" /></p>

<p align="justify">
<b>Xfwm4</b>は上のスクリーンショットにあるような新しいアプリケーション切り替え機能を含んでいます。
これはアイコンとウィンドウタイトルを使って現在のワークスペースから全てのウィンドウを表示します。
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-themes.png" alt="Xfwm4テーマ" /></p>

<p align="justify">
ウィンドウの装飾テーマ用のイメージフォーマットが追加されました。これには<tt>PNG</tt>と<tt>GIF</tt>と<tt>SVG</tt>が含まれています。
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-tweaks.png" alt="Xfwm4 Tweaks" /></p>

<p align="justify">
また、より進んだウィンドウコントロールが追加されました。これによりウィンドウの動作を完全に調整することができるようになりました。
</p>


<h2>パネル<a name="panel"></a></h2>

<p align="justify">

<b>Xfce4-panel</b>は完全にXfce4のリリースのために書き直されました。複数パネルが <i>out of the box</i>をサポートし、
簡単に下のスクリーンショットに表示されている<b>Panel Manager</b>を使い設定できるようになりました。

</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-manager.png" alt="パネルマネージャ" /></p>

<p align="justify">

以前のバージョンまでのXfceでは各々のプラグインがパネルを巻き込んで落ちる可能性があったという大きな問題がありました。
これはそれぞれのプラグインはパネルと同じプロセスで動いていましために起こっていたことです。その結果、この問題を解決するために、
外部プラグインのサポートがパネルに追加されました。
</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-additem.png" alt="Panel Add Item Dialog" /></p>

<p align="justify">
パネルプラグインの開発者はプラグインをほかのプロセスで動かすべきか、パネルのプロセスの一部として動かすべきか
プラグインの安定性に応じて決定することができます。
</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-iconbox.png" alt="Panel Icon Box Plugin" /></p>

<p align="justify">

複数のパネルをサポートが追加されたため、<b>Xftaskbar4</b>と<b>Xfce4-iconbox</b>ユーティリティは
もはや必要ありません。そのかわり、タスクバーとアイコンボックスはパネルプラグインとして使うことができます。
</p>

<p align="justify">
パネルプラグインのほとんどは、 <a href="http://goodies.xfce.org/">Xfce
Goodies Project</a>を通して利用でき、新しいパネル用にアップデートされています。また、
いくつかの新しいプラグインが追加されていました。
たとえば、新しい<b>xfce4-xfapplet-plugin</b>はユーザがGNOMEパネルアプレットをXfceパネルに
追加することができるようになりました。
</p>


<h2>時間管理<a name="time-management"></a></h2>

<p align="justify">
新しい時間管理アプリケーション <b>Orage</b>が<b>Xfcalendar</b>(Xfce 4.2.0 で追加されたもの)を置き換えました。
<b>Orage</b>は効果的に時間を管理するための幾つかの機能を備えています。
</p>

<p align="center"><img src="/images/about/tour/xfce44-orage.png" alt="Orage" /></p>

<p align="justify">
<b>Orage</b>はとても軽くて簡単に利用できる一方、肥大したカレンダーアプリケーション、
たとえば<b>Outlook</b>や<b>Evolution</b>にあるようなすべての重要な機能をサポートしています。
<b>Xfcalendar</b>は過去に<tt>dbh</tt>のカスタムフォーマットを使って設定を保存していましたが、
<b>Orage</b>は<tt>ical</tt>を基礎にしています。

その結果として、ほかのカレンダーアプリケーションと互換性があります。
</p>


<h2>ターミナルエミュレータ<a name="terminal-emulator"></a></h2>

<p align="justify">
<b>Terminal</b>は4.2時代から使えましたが、コアの一部となるには十分に成熟していませんでした。
今回の主要リリースにより、コアデスクトップに移動になりました。
</p>

<p align="center"><img src="/images/about/tour/xfce44-terminal.png" alt="Terminal" /></p>

<p align="justify">
ターミナルエミュレータに期待されると考えられる基本的な機能のほか、幾つかのすばらしい機能があります。
たとえば、ウィンドウごとにタブがつけられたり、ツールバーをカスタマイズできたり、
<i>hidden options (隠された選択肢)</i>によりほとんどすべてのアプリケーションの側面を調整できたりします。
上のスクリーンショットでみることができるように、このリリースでは<b>Xfwm4</b>にあるコンポジションマネージャを使った
透過機能がサポートされています。
</p>


<h2>印刷<a name="printing"></a></h2>

<p align="justify">
<b>Xfprint</b>(Xfce印刷管理アプリケーション)は今回のリリースで幾つかの小さな改善が行われました。
最初に、<tt>a2ps</tt>コンバータは、必ずしも必要ではなくなりました。(ただし、使うことを推奨はされています。)
<tt>CUPS</tt> 1.2へのサポートが追加され、<b>Xfprint</b>は<tt>CUPS</tt>のバックエンドを使い、
プリンタの状態を表示することができるようになりました。
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfprint.png" alt="Xfce Printing" /></p>

<p align="justify">
<b>Xfprint</b>は、<tt>a2ps</tt>コンバータを使い、幾つかの違った種類のテキストドキュメント用の
基本的な印刷のサポートを提供するために<b>MousePad</b>と一緒になっています。
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfprint-dialog.png" alt="Xfce印刷ダイアログ" /></p>

<p align="justify">
見ての通り、印刷ダイアログはXfce 4.2にあったものに比較的似ていますが、印刷サポートの内部の動作は
、特に<tt>CUPS</tt>サポートにおいて、改善されました。さらに、印刷管理の機能性はライブラリに移りました。
そのおかげで、ほかのアプリケーションもプリンターの設定にアクセスするAPIを利用することができます。

</p>


<h2>自動起動<a name="autostart"></a></h2>

<p align="justify">
Xfce 4.4.0では新しい<a href="http://freedesktop.org/wiki/Standards_2fautostart_2dspec">自動起動の仕様</a>
を実装しました。 - 実際Xfce はこの仕様をはじめて実装したデスクトップですが、リリースしたのは他の方が早かったのです。;-)

</p>

<p align="center"><img src="/images/about/tour/xfce44-autostart.png" alt="Xfce Autostart Editor" /></p>

<p align="justify">
その仕様は二つに別れています。それらは<b>xfce4-session</b>に実装されている
<i>Autostart of Applications During Startup (セットアップの間のアプリケーションの自動起動)</i>と、
<a href="http://foo-projects.org/~benny/projects/thunar-volman/index.html">thunar-volman</a>に実装されている
<i>Autostart Of Appications After Mount(マウント後のアプリケーションの自動起動)</i>です。
今回のリリースでは上のスクリーンショットにある<b>xfce4-autostart-editor</b>を含んでいます。
これでユーザは簡単にアプリケーションの追加と削除、またはアプリケーションの自動起動を無効にすることができます。

</p>


<h2>設定<a name="settings"></a></h2>

<p align="justify">
今回のリリースでは必要な環境を作るためにデスクトップをカスタマイズする新しい選択肢が追加されています。
新しい設定ダイアログはこれまでのセクションで見ることができます。

</p>

<p align="center"><img src="/images/about/tour/xfce44-preferences-applications.png" alt="Preferred Applications" /></p>

<p align="justify">

お気に入りのアプリケーションフレームワーク、<b>Terminal</b>のみで以前は使えたもの、はXfceにも実装されました。
結果、ユーザはどのブラウザを使うのかや、Xfce アプリケーションによって使われるべきターミナルエミュレータ
を指定したりするためにわざわざシェルプロファイルを編集する必要はありません。
目標はできるだけ簡単にカテゴリに応じてアプリケーションを変更できるようにすることでした。(GNOMEのユーザは
GNOMEがこの考え方を採用していたことに既に気づいていたかも知れません。とても簡単です。)

</p>

<p align="center"><img src="/images/about/tour/xfce44-preferences-keyboard.png" alt="キーボードショートカット" /></p>

<p align="justify">
またXfce 4.2ではキーボードショートカットに問題がありました…。
たくさんの人がたくさんのキーボードショートカットを割り当てたいと思っていたのにもかかわらず
Xfce 4.2は自由に設定できるキーボードショートカットの数が限られていました。
Xfce4.4では、この制限は過去の話となり、アプリケーションショートカットはウィンドウマネージャショートカットから
分けられました。
</p>


<h2>フィードバック<a name="feedback"></a></h2>

<p align="justify">
この記事に関してのコメントを私の<a href="http://xfce-diary.blogspot.com/2007/01/visual-tour-of-xfce-440.html">ブログ</a>に書いてください。
何かXfce 4.4.0に関しての質問がある場合やインストール中に問題が起こった場合は、ぜひ<a href="/community/lists">xfce</a>のメーリングリストを使ってください。

</p>


<h2>リンク<a name="links"></a></h2>

<ul>
<li><a href="http://www.xfce.org/">Xfceウェブサイト</a></li>
<li><a href="http://thunar.xfce.org/">Thunarウェブサイト</a></li>
</ul>

<h2>クレジット<a name="credits"></a></h2>
<p align="justify">著者: Benedikt Meurer, 2007年1月21日</p>
