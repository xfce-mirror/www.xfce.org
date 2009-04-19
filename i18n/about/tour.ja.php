<h1>Xfce 4.6.0 ツアー</h1>

<p>
長い間待たれた Xfce デスクトップ環境のバージョン 4.6.0 が、ついにリリースされました。
私たちは、直前の安定版リリースから追加されたいくつかの新機能について紹介したいと思います。
</p>

<h2>Xfdesktop によるデスクトップの改良 <a name="xfdesktop"></a></h2>

<p>
デスクトップアイコンは Xfce 4.4 から導入されましたが、多くの方々から (ラバーバンド法で) 複数アイコンの選択ができることを望まれました。
<b>Xfce 4.6</b> では、<b>Xfdesktop</b> マネージャがとうとうこの機能を実装しました。
これで複数アイコンの選択、削除などが行えます。
</p>

<p class="image"><img src="/images/about/tour/4.6/xfdesktop-rubberbanding.png"
  alt="Multiple icons selection" /></p>

<p>
<b>Xfce 4.6</b> は新しいデスクトップメニューを用意し、<b>Thunar</b> ファイルマネージャのコンテキストメニューによりファイルを操作できるようになりました。
また、アプリケーションの起動、セッションの終了、あるいはヘルプドキュメントへのアクセスも行えます。
</p>

<p class="image"><img src="/images/about/tour/4.6/xfdesktop-menu.png" 
  alt="New desktop menu" /></p>

<h2>パネル <a name="panel"></a></h2>

<p>
長く残っていた <b>Xfce4 Panel</b> の多くのバグ、特にマルチスクリーンの設定に関する問題が修正されました。それだけでなく、この新しいリリースではパネルプラグインセットの改良も行われました。
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-panel-clock.png" 
  alt="New binary clock" /></p>

<p>
<b>時計プラグイン</b>はシステムリソースの消費を抑え、いくつかの表示上のバグを修正するために書き直されました。また、ギークなあなたのために、新たなモードとしてバイナリクロックも追加されました!
新しい<b>通知エリアプラグイン</b>では、任意の通知アイコンを表示しないよう指定することができ、あなたの通知エリアをすっきり見やすくしておくことができます。
</p>

<h2>新しいサウンドミキサー <a name="sound-mixer"></a></h2>

<p>
<b>Xfce4 ミキサー</b>は一から書き直され、<a href="http://www.gstreamer.net/">GStreamer</a> を使用するようになりました。これにより複数のサウンドシステムのサポートがより容易になり、ユーザインターフェイスはより洗練され、異なるサウンドカードそれぞれの管理も行えるようになりました。
さらに、パネルプラグインでは、マウスのスクロールホイールを使って速やかにシステムサウンドの設定を行えます。
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-mixer.png" 
  alt="New sound mixer" /></p>

<h2>強化されたセッションマネージャ <a name="session-manager"></a></h2>

<p>
<b>Xfce 4.6</b> ではセッションマネージャが強化されました。セッションの起動が速くなり、設定ダイアログはシステムが認識するアプリケーションの管理を容易に行えるよう書き直されました。さらに、セッションマネージャは、クラッシュしたセッションアプリケーションが、デスクトップ、パネル、ウィンドウマネージャなどがない状態で残ってしまわないように、クラッシュした際に自動的に再起動するようになりました。
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-session-settings.png"
  alt="Session settings dialog" /></p>

<p>
セッションマネージャはまた、長く待たれていた新機能、"すぐに使える" <b>サスペンド</b>および<b>ハイバネート</b>をサポートしました。
ログアウトダイアログには、コンピュータのサスペンドおよびハイバネートの 2 つのボタンが追加されています。
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-session-logout.png" 
  alt="Session logout dialog" /></p>

<h2>ウィンドウマネージャ <a name="window-manager"></a></h2>

<p>
いつも通り、<b>Xfwm4</b> はこのリリースサイクルの間にかなり熟成されました。
多くのバグは修正され、マルチスクリーンがサポートされ、全体のパフォーマンスが向上しました。
</p>

<p>さらに、他にいくつかの新しい機能が追加され、<b>Xfwm4</b> は応答のないウィンドウを検知してそれらの終了を提案することができるようになりました。
</p>

<p class="image"><img src="/images/about/tour/4.6/xfwm4-net-ping.png" 
  alt="Dialog to terminate busy applications" /></p>

<p>
また、新しい<b>アクションメニュー</b>では、ウィンドウの移動やサイズの変更、他のウィンドウの前や後ろに置くこと、全画面化などが速やかに行えるようになりました。
</p>

<p class="image"><img src="/images/about/tour/4.6/xfwm4-new-menu.png" 
  alt="New actions menu" /></p>

<p>新しく<b>「ウィンドウをいっぱいに拡げる」</b>操作が実装されました。
これはウィンドウを他のウィンドウと重ならない範囲で画面いっぱいに拡げます。
</p>

<p class="image"><img src="/images/about/tour/4.6/xfwm4-fill-operation.png" 
  alt="Fill operation" /></p>

<p>
<b>合成処理</b>はサイズ変更時のフリッカーを低減するよう最適化されました。
</p>

<p class="image"><img src="/images/about/tour/4.6/xfwm4-resize.png" 
  alt="Flicker free resizing" /></p>

<p>
<b>詳細オプション</b>にも追加がなされています。例えば、ウィンドウが緊急通知を受信した時に点滅するのを抑止できるようになりました。
</p>

<p class="image"><img src="/images/about/tour/4.6/xfwm4-new-tweaks.png" 
  alt="New tweakable options" /></p>

<h2>ファイルマネージャ <a name="file-manager"></a></h2>

<p>
<b>Thunar</b>では、多くのバグの修正とパフォーマンスの改善が図られました。
マウスの前進および後退ボタンがあればナビゲートに使用でき、コンテキストメニューから画像ファイルを壁紙に設定するプラグインが統合されました。
</p>

<p class="image"><img src="/images/about/tour/4.6/thunar-wallpaper-plugin.png" 
  alt="Set an image in a Thunar folder as wallpaper" /></p>

<p><b>Thunar</b> は
<a href="http://freedesktop.org/wiki/Software/xdg-user-dirs">
XDG user directories</a>
仕様に準拠しており、音楽、ドキュメント、ビデオ、テンプレートなどを保存するフォルダの構成とフォルダ名のローカライズが行えるようになっています。
</p>

<p class="image"><img src="/images/about/tour/4.6/thunar-xdg-user-dirs.png" 
  alt="Thunar menu for user directories" /></p>

<p>
<b>Thunar</b> はドライブやボリュームがマウントされていないとき、そのアイコンを半透明で表示し、マウントしているかどうか判別できるようになりました。
</p>

<p class="image"><img src="/images/about/tour/4.6/thunar-mounting.png" 
  alt="Translucent icons for unmounted drives and volumes" /></p>

<p>大事なことを言い忘れていました、<b>Thunar</b> は暗号化デバイスもサポートしました!</p>

<p class="image"><img src="/images/about/tour/4.6/thunar-encrypted.png" 
  alt="Thunar support for encrypted devices" /></p>

<h2>新しい設定ダイアログ <a name="configuration-dialogs"></a></h2>

<p>
Xfce 4.6 の設定インターフェイスは、新しい <b>Xfce 設定マネージャ</b>になり、デスクトップの環境設定がこれまでよりもよりもいっそう行いやすくなりました。
これらのダイアログにはアイコンのシングルクリックでアクセスでき、よりコンパクトに、より直感的かつ速やかにデスクトップのカスタマイズが行えるように設計されています。
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-settings-manager.png" 
  alt="Xfce4 Settings Manager" /></p>

<h3>アクセシビリティの設定 <a name="accessibility"></a></h3>
<p class="image">
  <img src="/images/about/tour/4.6/xfce4-accessibility-settings.png" 
  alt="Accessibility settings dialog" /></p>

<p>
<b>アクセシビリティ設定</b>ダイアログでは、スティッキーキー、バウンスキー、あるいはマウスエミュレーションといった、マウスおよびキーボードに関するアクセシビリティの設定が行えます。
</p>

<h3>外観の設定 <a name="appearance"></a></h3>
<p class="image">
  <img src="/images/about/tour/4.6/xfce4-appearance-settings.png" 
  alt="Appearance settings dialog" /></p>

<p>
<b>外観設定</b>ダイアログでは、ウィジェットスタイル、アイコンテーマやフォント、ツールバー、およびメニューオプションの設定が行えます。
</p>

<h3>ディスプレイの設定 <a name="display"></a></h3>
<p class="image"><img src="/images/about/tour/4.6/xfce4-display-settings.png" 
  alt="Display settings dialog" /></p>

<p>
<b>ディスプレイ設定</b>ダイアログでは、接続されている画面ごとに、解像度、周波数、および回転の設定が行えます。
</p>

<h3>キーボードの設定 <a name="keyboard"></a></h3>
<p class="image">
  <img src="/images/about/tour/4.6/xfce4-keyboard-settings-layout.png" 
  alt="Keyboard settings dialog, layout tab" /></p>

<p>
<b>キーボード設定</b>ダイアログでは、キーリピート、キーボードショートカット、およびキーボードレイアウトといったキーボードの設定が行えます。
</p>

<p class="image">
  <img src="/images/about/tour/4.6/xfce4-keyboard-settings-shortcuts.png" 
  alt="Keyboard settings dialog, shortcuts tab" /></p>

<p>
ショートカットの設定はよりシンプルになり、ショートカットの衝突は自動的に検出されるようになりました。</p>

<h3>マウスの設定 <a name="mouse"></a></h3>
<p class="image"><img src="/images/about/tour/4.6/xfce4-mouse-settings.png" 
  alt="Mouse settings dialog" /></p>

<p>
<b>マウス設定</b>ダイアログでは、コンピュータに接続されているマウスなどのポインティングデバイスごとに、ボタン設定、加速度、ダブルクリック認識、マウスカーソルのテーマなどが設定できます。
</p>

<h3>デスクトップの設定 <a name="desktop-settings"></a></h3>

<p class="image"><img src="/images/about/tour/4.6/xfdesktop-settings.png" 
  alt="Desktop settings dialog" /></p>

<p>
<b>デスクトップの設定</b>ダイアログはよりコンパクトになりました。
ここで画面ごとの壁紙、明るさ、デスクトップメニュー、表示アイコンなどの設定が行えます。
</p>

<h2>新しいアプリケーションファインダ <a name="appfinder"></a></h2>

<p>
<b>Xfce 4.6</b> では、ユーザインターフェイスが整理された新しいアプリケーションファインダも用意しました。
アプリケーションファインダは、インストールされたアプリケーションを表示し (リストはキー入力により "オンザフライ" で更新されます)、簡単に検索および起動が行えます。
また、アプリケーションアイコンを、パネルのランチャプラグインの設定ウィンドウにドラッグすることですばやくパネルランチャの作成が行えます。
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-appfinder.png" 
  alt="New application finder" /></p>

<h2>リンク<a name="links"></a></h2>

<ul>
  <li><a href="http://www.xfce.org/">Xfce ウェブサイト</a></li>
  <li><a href="http://thunar.xfce.org/">Thunar ウェブサイト</a></li>
</ul>

<h2>クレジット<a name="credits"></a></h2>

<ul>
  <li>Written by Jérôme Guelfucci(February 2009) </li>
  <li>Screenshots by Jannis Pohlmann </li>
</ul>

