<?php

/* The following bb codes are available:
   [link=/downloads/]download[/link] <- used for internal links, always starting from root (/)
   [url=http://link.com]link[/url]   <- external links (new window)
   [b]bold[/b]
   [i]italic[/i]
   [br]

   All full http://, https://, ftp:// and email adresses are converted into link
*/
$date_format = "%e %B %Y";
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
    11 => array (
        'title'   => 'Xfce 4.4.0发布',
        'content' => '经过超过两年的开发，Xfce 4.4.0刚刚发布了。'.
                     '[br]'.
                     'Xfce 4.4以新的工具为特色，诸如期盼已久的Thunar文件管理器，'.
                     '同时还有一些其它核心组件的巨大改进。'.
                     '[br][br]'.
                     'Xfce 4.4的一个可视概观在此可以得到：[br]'.
                     '[link=/about/tour]http://www.xfce.org/about/tour[/link]'.
                     '[br][br]'.
                     '从新的Xfce网站上下载Xfce 4.4：[br]'.
                     '[link=/download]http://www.xfce.org/download[/link]',
    ),
    10 => array (
        'title'   => 'Xfce 4.2.4发布',
        'content' => 'Xfce 4.2的一个新的错误修正版本可用了。这个版本应该是'.
                     ' 4.2 系列的最后一个版本了。它包含了一些来自于'.
                     '当前开发分支的修正。[br]'.
                     '此版本不应该和即将来临的Xfce 4.4版本混在一起，'.
                     '它只是先前稳定版本的一个错误修正版本。'.
                     '从[link=/download/]本页[/link]得到。',
    ),
    9 => array (
        'title'   => 'Xfce 4.4 Release Candidate 2 (4.3.99.2) 发布',
        'content' => '第二个，但愿也是最后一个Xfce 4.4桌面的发布候选版本现在'.
                     '可供下载了。[br]此版本着重于错误修正和优化。'.
                     '请参考[link=/documentation/changelogs/4.3.99.2]更新日志[/link]以获取修正'.
                     '和更新的清单。请帮助我们以使Xfce 4.4成为史上最好的Xfce 版本，下载它，'.
                     '尝试它，帮助我们完善它！从[link=/download/]本页[/link]得到。',
    ),
    8 => array (
        'title'   => 'Xfce 4.4 Release Candidate 1 (4.3.99.1) 发布',
        'content' => '即将来临的Xfce 4.4桌面的第一个发布候选版本现在可供下载了。'.
                     '此版本修正了许多在第二个测试版中存在的错误，但是也引进了'.
                     '新的特性，像Thunar和xfdesktop中的回收站支持。除此之外，这个'.
                     '版本也包含了Xarchiver 0.4.0。参见[link=/documentation/changelogs/4.3.99.1]发行说明[/link] '.
                     '以获取4.4 beta2 和 4.4 rc1之间更新的详细清单。请帮助我们以使Xfce 4.4'.
                     '成为史上最好的Xfce版本，下载它，尝试它，帮助我们完善它！'.
                     '从[link=/download/]本页[/link]得到。',
    ),
    7 => array (
        'title'   => 'Xfce 4.4 beta 2 (4.3.90.2) 发布',
        'content' => 'Xfce 4.4 beta2 (4.3.90.2)现在可供下载了。除了Mousepad和Thunar，'.
                     '这个版本也包括了全新的Xfce归档管理器Xarchiver。除了一大堆'.
                     '错误被修正了之外，一些核心组件也得到了改进。4.4 beta1和4.4 beta2'.
                     '之间更新的详细概览可以'.
                     '[link=/documentation/changelogs/4.3.90.2]在此[/link]得到了。'.
                     '请帮助我们以使Xfce 4.4成为史上最好的Xfce版本，下载它，尝试它，帮助我们完善它！'.
                     '从[link=/download/]本页[/link]得到。',
    ),
    6 => array (
        'title'   => 'Xfce 4.4 beta 1 (4.3.90.1) 发布',
        'content' => 'Xfce 4.4 beta1 (4.3.90.1)现在可供下载了。Xfce 4.4以新的工具为特色，'.
                     '诸如众人所期望的“Thunar”文件管理器，同时还有一些其它核心组件的巨大改进。'.
                     '请帮助我们以使Xfce 4.4成为史上最好的Xfce版本，下载它，'.
                     '尝试它，帮助我们完善它！从本页得到。',
    ),
    5 => array (
        'title'   => 'Xfce 4.2.3.2 发布',
        'content' => '一次“小版本号”的发布，修正了一处在窗口管理器设置的回归问题，'.
                     '从本页的下载位置处之一得到，4.2.3的更新日志在此保持原样。',
    ),
    4 => array (
        'title'   => 'Xfce 4.2.3.1 发布',
        'content' => 'Xfce的一个新的错误修正版本，在几乎6个月之后，终于可供使用了！Xfce 4.2.3.1'.
                     '可以从列在本页上的通常的位置下载得到，并且更新日志'.
                     '也能在此得到。',
    ),
    3 => array (
        'title'   => 'Xfce 4.2.2发布',
        'content' => 'Xfce 4.2.2可供使用了。下载地址可以在本页找到，并且更新日志'.
                     '也能在此得到。',
    ),
    2 => array (
        'title'   => 'Xfce 4.2.1.1发布',
        'content' => 'Xfce 4.2.1.1在4.2.1之后很快地发布了。它包含了一个严重错误的修复，错误在于'.
                     '当在 4.2.1中保存会话时，面板会丢失其配置。Sourceforge 服务器'.
                     '已更新了，其他镜像站点也会随之同步。',
    ),
    1 => array (
        'title'   => 'Xfce 4.2.1发布',
        'content' => 'Xfce 4.2.1可供使用了。这是一次维护性发布。下载地址可以在本页找到，'.
                     '并且更新日志也能在本页得到。',
    ),
);
?>
