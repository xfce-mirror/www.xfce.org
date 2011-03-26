<?php

$head['title'] = R_('Community');

$toc['anchors'] = array (
        'irc' => R_('IRC'),
        'mail' => R_('Mailing lists'),
        'forum' => R_('Forums'),
        'identi' => R_('Identi.ca Xfce group'));

?>

<h1><?php echo $head['title'] ?></h1>

<p>
  <?php E_('Whether it be to solve a problem or to contribute in any way, the Xfce communities are a good place to get help or to share your ideas. You might also want to have a look at the communities of the different distributions which provide Xfce.') ?>
</p>

<h2 id="irc"><?php E_('IRC') ?></h2>

<p>
  <?php E_('If you have a problem that you cannot resolve, you might want to try asking a question in our IRC channel <a href="irc://irc.freenode.net/#xfce">#xfce on irc.freenode.net</a>. The channel has several active users. It is recommended that you consult the <a href="http://docs.xfce.org/" class="external">documentation</a> about your problem before asking your question.') ?>
</p>

<h2 id"mail"><?php E_('Mailing lists') ?></h2>

<p>
  <?php E_('<strong>NOTE:</strong> In order to post to these lists, you must first subscribe.') ?>
</p>

<table>
  <tr>
    <th><?php E_('List') ?></th>
    <th><?php E_('Description') ?></th>
  </tr>
  <tr>
    <td><a href="http://foo-projects.org/mailman/listinfo/xfce/">xfce</a></td>
    <td><?php E_('Discussion list for users of Xfce.') ?></td>
  </tr>
  <tr>
    <td><a href="http://foo-projects.org/mailman/listinfo/xfce-announce/">xfce-announce</a></td>
    <td><?php E_('Announcements of new versions of Xfce and related projects.') ?></td>
  </tr>
  <tr>
    <td><a href="http://foo-projects.org/mailman/listinfo/xfce-advocacy/">xfce-advocacy</a></td>
    <td><?php E_('This mailing list is used as a point of contact for people interested in promoting Xfce.') ?></td>
  </tr>
  <tr>
    <td><a href="http://foo-projects.org/mailman/listinfo/xfce-i18n/">xfce-i18n</a></td>
    <td><?php E_('To coordinate the translation of Xfce into new languages. See also the <a href="/getinvolved/translate">translations</a> page.') ?></td>
  </tr>
  <tr>
    <td><a href="http://foo-projects.org/mailman/listinfo/xfce-i18n-de">xfce-i18n-de</a></td>
    <td><?php E_('To coordinate the German translation of Xfce.') ?></td>
  <tr>
    <td><a href="http://foo-projects.org/mailman/listinfo/xfce4-dev/">xfce4-dev</a></td>
    <td><?php E_('A mailing list for developers of Xfce.') ?></td>
  </tr>
  <tr>
    <td><a href="http://foo-projects.org/mailman/listinfo/xfce4-commits/">xfce4-commits</a></td>
    <td><?php E_('To be notified of Xfce commits (including goodies and other modules).') ?></td>
  </tr>
  <tr>
    <td><a href="http://foo-projects.org/mailman/listinfo/goodies-dev/">goodies-dev</a></td>
    <td><?php E_('Xfce Goodies development discussion.') ?></td>
  </tr>
  <tr>
    <td><a href="http://foo-projects.org/mailman/listinfo/xfce-bugs/">xfce-bugs</a></td>
    <td><?php E_('E-mail address for general Xfce bugs. Bugs should be reported and discussed in the <a href="https://bugzilla.xfce.org" class="external">bug tracker</a>.') ?></td>
  </tr>
  <tr>
    <td><a href="http://foo-projects.org/mailman/listinfo/thunar-dev/">thunar-dev</a></td>
    <td><?php E_('A mailing list for development of the Thunar file manager.') ?></td>
  </tr>
  <tr>
    <td><a href="http://foo-projects.org/mailman/listinfo/xfce-foundation">xfce-foundation</a></td>
    <td><?php E_('A mailing list for information and questions about the Xfce foundation.') ?></td>
  </tr>
</table>

<h3><?php E_('Search the mailing lists') ?></h3>

<div id="cse">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript">
  google.load('search', '1', {language : 'en'});
  google.setOnLoadCallback(function() {
    var customSearchControl = new google.search.CustomSearchControl('008920933163277390313:ia4uyxqfszw');
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    customSearchControl.setNoResultsString('<?php E_('No results found in mailing lists') ?>');

    customSearchControl.draw('cse');
  }, true);
</script>
<style type="text/css">
  .gs-webResult.gs-result a.gs-title:link,
  .gs-webResult.gs-result a.gs-title:link b {
    color: #0066cc;
  }
  .gs-webResult.gs-result a.gs-title:visited,
  .gs-webResult.gs-result a.gs-title:visited b {
    color: #0066cc;
  }
  .gs-webResult.gs-result a.gs-title:hover,
  .gs-webResult.gs-result a.gs-title:hover b {
    color: #ff0000;
  }
  .gsc-cursor-page {
    color: #0066cc;
  }
  a.gsc-trailing-more-results:link {
    color: #0066cc;
  }
</style>

<h2 id="forum"><?php E_('Forums') ?></h2>

<p>
  <?php E_('For users who prefer forums, the <a href="http://forum.xfce.org/" class="external">Xfce Forum</a> is the place to be. Active contributors will be able to help you, but please do not use it for bug reports.') ?>
</p>

<h2 id="identi"><?php E_('Identi.ca Xfce group') ?></h2>

<p>
  <?php E_('<a href="http://identi.ca/group/xfce" class="external">The Identi.ca Xfce group</a> will allow you to get in touch with many Xfce users and to get the latest Xfce news.') ?>
</p>
