<div id="front-intro">
	<div id="front-right">
		<div id="front-download">
			<div class="link">
				<h2><a href="/download/" title="Xfce 4.4をダウンロードする">Xfce 4.4をダウンロードする</a></h2>
			</div>
			<div class="notes">
				<p><a href="/documentation/changelogs/4.4.0" title="更新履歴を読む">更新履歴</a><span class="grey"> | </span><a href="/about/tour" title="Xfce 4.4の新しいところは何？">ツアー</a></p>
			</div>
		</div>
	</div>
	<div id="front-intro-about">
		<h1>Xfceについて</h1>
		<p>Xfceは様々な*NIXシステム用の軽快なデスクトップ環境です。
		生産性を優先して設計されているため、システムリソースを保ちながら、アプリケーションを素早くロードし実行することができます。</p>
		<p>Xfce 4.4はモジュラ性や再利用性の伝統的なUNIXの考え方を重要視していて、
		デスクトップ環境のすべての機能性を一緒に提供する沢山のコンポーネントを構成しています。
		パッケージは分かれていますので、最高の自分の環境を作るために、自分でパッケージを選ぶことができます。</p>
		<p class="readmore"><a href="/about/" title="Xfceについて更に読む...">更に読む</a></p>
	</div>
</div>
<div class="clearboth"></div>
<div id="front-container">
	<div id="front-news">
		<div id="front-news-content">
			<h2><a href="/?feed=rss2&amp;lang=<?php echo $lang ?>"><img src="/layout/images/feed.gif" alt="feed" title="'Xfce ニュース'を購読する..." width="12" height="12" border="0" align="right" /></a>最新情報</h2>
			<?php
				echo $frontpage["news"];
			?>
			<div class="readmore">
				<a href="/about/news" title="すべてのXfceニュースを読む...">更に読む</a>
			</div>
		</div>
	</div>
	<div id="front-projects">
		<div id="front-borders">
			<div id="front-projects-content">
				<h2>Xfce プロジェクト</h2>
				<ul>
					<li>
						<a href="/projects/thunar/">Thunar</a>
						<br />
						<span class="grey">ThunarはXfce デスクトップ環境用の最新のファイルマネージャです。</span>
					</li>
					<li>
						<a href="/projects/mousepad/">Mousepad</a>
						<br />
						<span class="grey">Mousepadは、リーフパッドテキストエディタを基礎とした、Xfce用の簡潔で高速で簡単に利用できるテキストエディタです。</span>
					</li>
					<li>
						<a href="/projects/orage/">Orage</a>
						<br />
						<span class="grey">Xfceプロジェクト用のカレンダー。</span>
					</li>
					<li>
						<a href="/projects/xfburn/">Xfburn</a>
						<br />
						<span class="grey">CDとDVDの書き込みアプリケーション。</span>
					</li>
					<li>
						<a href="/projects/xfmedia">Xfmedia</a>
						<br />
						<span class="grey">Xfmediaは簡潔で簡単に使用できるxineエンジンを使ったメディアプレイヤです。</span>
					</li>
				</ul>
				<div class="readmore">
					<a href="/projects/" title="すべてのXfceプロジェクトを見る...">さらなるプロジェクト</a>
				</div>
			</div>
		</div>
	</div>
	<div id="front-blog">
		<div id="front-blog-content">
			<h2><a href="http://blog.xfce.org/?feed=rss2"><img src="/layout/images/feed.gif" alt="feed" title="'Xfce Blog'を購読する..." width="12" height="12" border="0" align="right" /></a>開発ブログ</h2>
			<?php
				echo $frontpage["blog"];
			?>
			<div class="readmore">
				<a href="http://blog.xfce.org/" title="Xfceブログの全体を見る...">ブログに行く</a>
			</div>
			<h2>ショートカット</h2>
			<ul>
				<li><a href="/community/lists">メイリングリスト</a></li>
				<li><a href="/about/screenshots">スクリーンショット</a></li>
				<li><a href="http://forum.xfce.org" target="_blank" title="Xfceフォーラム（新規のウィンドウ）" class="external">Xfceフォーラム</a></li>
				<li><a href="http://bugzilla.xfce.org" title="バグを報告する（新規のウィンドウ）" target="_blank" class="external">バグを報告</a></li>
				<li><a href="http://wiki.xfce.org" title="Xfce Wiki  （新規のウィンドウ）" target="_blank" class="external">Xfce Wiki</a></li>
				<li><a href="/download/distros">Xfceディストリビューション</a></li>
			</ul>
		</div>
	</div>
</div>
