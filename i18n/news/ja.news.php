<?php

/* The following bb codes are available:
   [link=/downloads/]download[/link] <- used for internal links, always starting from root (/)
   [url=http://link.com]link[/url]   <- external links (new window)
   [b]bold[/b]
   [i]italic[/i]
   [br]

   All full http://, https://, ftp:// and email adresses are converted into link
*/
$date_format = "%Y %B %e";
$posted_by = "投稿者：";

$news_translated = array (
/*
    array (
        'id'      => <previous id number + 1>
        'date'    => '<day> <month> <year>',
        'author'  => '<you>',
        'title'   => '<title>',
        'content' => '<stuff you want to say>',
    ),
*/
    12 => array (
	'title'   => 'Xfce 4.4.1がリリースされました',
	'content' => '皆さん、こんにちは。'.
                     '[br][br]'.
                     'Xfce 4.4.1がリリースされました。初回のXfce 4.4(Xfceの現在の安定ブランチ)のメンテナンスリリースです。'.
                     'このリリースの目的は重要なバグの修正と'.
                     '翻訳のアップデートです。'.
                     '[br][br]'.
                     'Xfce 4.4.1を[link=/download/]Xfce ウェブサイト[/link]からダウンロードしてください。'.
                     '[br][br]'.
                     '更新されたものの概要は[link=/documentation/changelogs/4.4.1]更新履歴[/link]で見ることができます。'.
                     '[br][br]'.
                     '楽しんでくださいね！[br]'.
                     'Xfce開発チーム',
    ),

    11 => array (
        'title'   => 'Xfce 4.4.0がリリースされました',
        'content' => '二年以上の開発の後、Xfce 4.4.0はリリースされました。'.
                     '[br]'.
                     'Xfce 4.4は待望のThunar ファイルマネージャのような新たなツールと、'.
                     '幾つかの大きなコアコンポーネントの改良を特徴としています。'.
                     '[br][br]'.
                     'Xfce 4.4の視覚的な概観は以下で確認できます。:[br]'.
                     '[link=/about/tour]http://www.xfce.org/about/tour[/link]'.
                     '[br][br]'.
                     'Xfce 4.4を新しいXfceのウェブサイトからダウンロードする。:[br]'.
                     '[link=/download]http://www.xfce.org/download[/link]',
    ),    
    10 => array (
        'title'   => 'Xfce 4.2.4 がリリースされました',
        'content' => 'バグ修正を施した新しいXfce 4.2のリリースが利用できます。このリリースは '.
                     '4.2ブランチの最終版になります。幾つかの現在の開発ブランチから持ってきた物により修正がなされています。[br] '.
                     'このリリースは来るXfce 4.4リリースとの混同はされるべきではありません。 '.
                     'これは以前の安定版のバグ修正リリースです。 [link=/download/]このページ[/link]よりダウンロードしてください。 ',
    ),
    9 => array (
        'title'   => 'Xfce 4.4 Release Candidate 2 (4.3.99.2)がリリースされました',
        'content' => '二回目の公式リリースの候補版がダウンロードできます。できれば最後のXfce 4.4デスクトップの最後のリリース候補版になってほしいです。 '.
                     '[br]このリリースでは特にバグ修正と最適化を重きをおいています。 '.
                     '[link=/documentation/changelogs/4.3.99.2]変更履歴[/link]を参照すれば '.
                     '変更と修正の表を見ることができます。'.
                     'Xfce 4.4をこれまでの最高のリリースにするために、ダウンロードして'.
                     '使ってみて、修正するために手を貸してください![link=/download/]このページ[/link]から手に入れられます。',
    ),
    8 => array (
        'title'   => 'Xfce 4.4 Release Candidate 1 (4.3.99.1)がリリースされました',
        'content' => '来るXfce 4.4デスクトップ公式リリースの候補版の最初のリリースがダウンロードできるようになりました。 '.
                     'このリリースでは二回目のベータリリースに存在したたくさんのバグの修正と、その他に '.
                     'Thunarやxfdesktopでのゴミ箱のサポートといったような、新しい機能を追加しました。そのほかに'.
                     'このリリースではXarchiver 0.4.0も含まれています。[link=/documentation/changelogs/4.3.99.1]リリースの記録[/link] '.
                     'を4.4 beta2と4.4 rc1間にあった変更の詳しいことについてを知りたい場合は見てください。 '.
                     'Xfce 4.4をこれまでの最高のリリースにするために、ダウンロードして'.
                     '使ってみて、修正するために手を貸してください![link=/download/]このページ[/link]から手に入れられます。',
    ),
    7 => array (
        'title'   => 'Xfce 4.4 beta 2 (4.3.90.2)がリリースされました',
        'content' => 'Xfce 4.4 beta2 (4.3.90.2) がダウンロードできます。Mousepad やThunarに加えて、 '.
                     'このリリースでは新しいXfceのアーカイブマネージャであるXarchiverが含まれています。他には '.
                     'たくさんのバグが修正されましたし、いくつかの中心部も良くなっています。4.4 beta1 と  4.4 beta2との間にあった変更についての詳しいことは '.
                     '[link=/documentation/changelogs/4.3.90.2]ここ[/link]に書かれています。 '.
                     'Xfce 4.4をこれまでの最高のリリースにするために、ダウンロードして'.
                     '使ってみて、修正するために手を貸してください![link=/download/]このページ[/link]から手に入れられます。',
    ),
    6 => array (
        'title'   => 'Xfce 4.4 beta 1 (4.3.90.1)がリリースされました',
        'content' => 'Xfce 4.4 beta1 (4.3.90.1)がダウンロードできます。Xfce 4.4は期待されているファイルマネージャである「Thunar」を含む新たなツールと心臓部のいくつかの大きな改善を特徴としています。'.
                     'Xfce 4.4をこれまでの最高のリリースにするために、ダウンロードして'.
                     '使ってみて、修正するために手を貸してください!このページから手に入れられます。',
    ),
    5 => array (
        'title'   => 'Xfce 4.2.3.2がリリースされました',
        'content' => 'ウィンドウマネージャの復帰を修正した「小さな」リリースです。このページからいずれかのダウンロードできる場所に行き '.
                     'ダウンロードしてください。4.2.3の更新履歴はここに残っています。',
    ),
    4 => array (
        'title'   => 'Xfce 4.2.3.1がリリースされました',
        'content' => 'Xfceの新しいバグ修正リリースが前リリースから約六ヶ月たった今、やっと利用できるようになりました。Xfce 4.2.3.1 '.
                     'はこのページで表示されているいつもの場所からダウンロードできます。更新履歴も同様です。',
    ),
    3 => array (
        'title'   => 'Xfce 4.2.2がリリースされました',
        'content' => 'Xfce 4.2.2が利用できます。ダウンロードの場所はこのページにあります。更新履歴も '.
                     'ここで見つけることができることでしょう。',
    ),
    2 => array (
        'title'   => 'Xfce 4.2.1.1がリリースされました',
        'content' => 'Xfce 4.2.1.1は4.2.1のあとすぐにリリースされました。これは4.2.1でセッションを記憶するときにパネルが設定をなくすところの '.
                     '良くないバグを修正したものです。Sourceforgeのサーバはアップデートされています。 '.
                     'ミラーもすぐにアップデートされます。',
    ),
    1 => array (
        'title'   => 'Xfce 4.2.1がリリースされました',
        'content' => 'Xfce 4.2.1がご利用になれます。これはメンテナンスリリースです。ダウンロードの場所はこのページ上で見つけられます。 '.
                     '更新履歴もここで見ることができます。',
    ),
);
?>
