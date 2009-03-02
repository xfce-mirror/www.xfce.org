<div id="front-intro">
	<div id="front-right">
		<div id="front-download">
			<div class="link">
				<h2><a href="/download/" title="Xfce 4.6.0をダウンロードする">Xfce 4.6.0をダウンロードする</a></h2>
			</div>
			<div class="notes">
				<p><a href="/documentation/changelogs/4.6.0" title="更新履歴を読む">更新履歴</a><span class="grey"> | </span><a href="/about/tour" title="Xfce 4.6の新しいところは何?">ツアー</a></p>
			</div>
		</div>
	</div>
	<div id="front-intro-about">
		<h1>Xfceについて</h1>
		<p><em>「Xfce は様々な *NIX システム用の軽快なデスクトップ環境です。
		生産性を優先して設計されているため、古い保守的なシステムでも、アプリケーションのロードと
		実行をすばやく行えます。」</em>
		 - <strong>Xfce 創設者、Olivier Fourdan</strong></p>
		<p>Xfce 4.6 はモジュラ性や再利用性の伝統的な UNIX の考え方を重要視していて、
		デスクトップ環境のすべての機能性を一緒に提供する多くのコンポーネントで構成されています。
		パッケージは分かれていますので、自分にとって最高の環境を作るために、自分で必要だと思う
		パッケージだけを選ぶことができます。</p>
		<p class="readmore"><a href="/about/" title="Xfce についてさらに読む...">さらに読む</a></p>
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
				<a href="/about/news" title="すべての Xfce ニュースを読む...">さらに読む</a>
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
						<span class="grey">Thunar は Xfce デスクトップ環境用の最新のファイルマネージャです。</span>
					</li>
					<li>
						<a href="/projects/mousepad/">Mousepad</a>
						<br />
						<span class="grey">Mousepad は、Leafpad テキストエディタを基とした、Xfce 用のシンプル、高速、かつ使いやすいテキストエディタです。</span>
					</li>
					<li>
						<a href="/projects/orage/">Orage</a>
						<br />
						<span class="grey">Xfce デスクトップ環境用のカレンダーです。</span>
					</li>
					<li>
						<a href="/projects/xfburn/">Xfburn</a>
						<br />
						<span class="grey">CD と DVD の書き込みアプリケーションです。</span>
					</li>
					<li>
						<a href="/projects/ristretto">Ristretto</a>
						<br />
						<span class="grey">Ristretto は軽量な画像ビューアです。</span>
					</li>
				</ul>
				<div class="readmore">
					<a href="/projects/" title="すべての Xfce プロジェクトを見る...">さらなるプロジェクト</a>
				</div>
			</div>
		</div>
	</div>
	<div id="front-blog">
		<div id="front-blog-content">
			<h2><a href="http://blog.xfce.org/?feed=rss2"><img src="/layout/images/feed.gif" alt="feed" title="'Xfce Blog' を購読する..." width="12" height="12" border="0" align="right" /></a>開発ブログ</h2>
			<?php
				echo $frontpage["blog"];
			?>
			<div class="readmore">
				<a href="http://blog.xfce.org/" title="Xfce ブログの全体を見る...">ブログに行く</a>
			</div>
      <div id="front-shortcuts">
			<h2>ショートカット</h2>
			<ul>
				<li><a href="/community/lists">メーリングリスト</a></li>
				<li><a href="/about/screenshots">スクリーンショット</a></li>
				<li><a href="http://forum.xfce.org" target="_blank" title="Xfceフォーラム (新規ウィンドウ)" class="external">Xfceフォーラム</a></li>
				<li><a href="http://bugzilla.xfce.org" title="バグを報告する (新規ウィンドウ)" target="_blank" class="external">バグを報告</a></li>
				<li><a href="http://wiki.xfce.org" title="Xfce Wiki (新規のウィンドウ)" target="_blank" class="external">Xfce Wiki</a></li>
				<li><a href="/download/distros">Xfce ディストリビューション</a></li>
			</ul>
      </div>
		</div>
	</div>
</div>
