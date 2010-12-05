<?php $head['title'] = R_('Mailing Lists') ?>

<h1><?php echo $head['title'] ?></h1>

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
    <td><?php E_('To coordinate the translation of Xfce into new languages. See also the <a href="/development/translations">translations</a> page.') ?></td>
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
    <td><?php E_('E-mail address for general Xfce bugs. Bugs should be reported and discussed in the <a href="http://bugzilla.xfce.org" target="_blank" class="external">bug tracker</a>.') ?></td>
  </tr>
  <tr>
    <td><a href="http://foo-projects.org/mailman/listinfo/thunar-dev/">thunar-dev</a></td>
    <td><?php E_('A mailing list for development of the Thunar file manager.') ?></td>
  </tr>
</table>

<h2><?php E_('Search the mailing lists') ?></h2>

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
