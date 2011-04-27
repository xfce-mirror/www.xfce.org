<?php

$head['title'] = R_('Translation');

$toc['anchors'] = array (
        'started' => R_('Getting Started'),
        'teamwork' => R_('Team Work'),
        'transifex' => R_('Transifex Usage'));

?>

<h1><?php echo $head['title'] ?></h1>

<p>
  <?php E_('Xfce uses the <a href="http://transifex.org">Transifex</a> translation platform as a portal for translators. This allows translators to translate on-line, submit new <em>po</em>-files, watch translations and view statistics. All translation updates are directly submitted in the <a href="http://git.xfce.org">Xfce GIT repositories</a>, so they are directly available for the rest of the world.') ?>
</p>

<p>
  <?php E_('Because we\'d like to translate Xfce in as much languages as possible, we are always looking for new translation contributors. If you\'re interested in this, read the <em>getting started</em> section below.') ?>
</p>

<h2 id="started"><?php E_('Getting Started') ?></h2>

<p>
  <?php E_('Before you can contribute translations, you have to go through the steps below. Note that <em>ALL</em> these steps are required:') ?>
</p>

<ol>
  <li><?php E_('First go to the <a href="https://translations.xfce.org/accounts/register/">registration page</a> and create a new profile. After you\'ve pressed the <em>Register</em>-button, you will receive an email to confirm your account, before you can login.') ?></li>
  <li><?php E_('After you\'ve logged in, go to your <a href="https://translations.xfce.org/accounts/profile/edit/personal/">profile page</a> and set your <em>First name</em>, <em>Surname</em> and <em>Native Language</em>. Your complete name is <em>required</em> for submitting translations and will be used in the GIT logs, so take this seriously!') ?></li>
  <li><?php E_('Join the <a href="http://foo-projects.org/mailman/listinfo/xfce-i18n">Xfce translation mailing list</a>. This is where the translation communication is coordinated, so it is nice to introduce yourself here. On this list developer will also announce when releases are planned, translations system changes or anything else you should know as a translators.') ?></li>
  <li><?php E_('Go to the <a href="https://translations.xfce.org/projects/p/xfce/teams/">Xfce translation teams</a> and request access to a team or request a new language if it doesn\'t exist yet. One of the developers or translation coordinators will approve (or decline) your request. All other product in this Transifex installation outsource the permissions of the Xfce product, so your rights in this product will apply all over <a href="https://translations.xfce.org">translations.xfce.org</a>.') ?></li>
  <li><?php E_('Now wait patently. If it takes too long, leave a message on the translation mailing list.') ?></li>
</ol>


<p>
  <?php E_('Once this has all happened, you should have permission to submit and update translations in your language. You can find more information about this below. Don\'t forget to keep in touch with the other translators in your language (you can find them in the translation groups) to coordinate the translation work!') ?>
</p>

<p>
  <?php E_('If you think anything went wrong, ideas? Don\'t hesitate and send an email to the Xfce translation mailing list, we\'re always there to help you!') ?>
</p>

<h2 id="teamwork"><?php E_('Team Work') ?></h2>

<p>
  <?php E_('Keep in touch with the current translator(s). Is your language already translated or being translated by someone else, then you should try to work together with the current translator(s) of that language, and split up the work so you are reducing the workload and increasing the quality of the translation. Many translators are happy to share the work or even appreciate people discussing translations.') ?>
</p>

<p>
  <?php E_('The header of the PO files contain the field &quot;Last-Translator&quot; As example here is the French translation of xfce4-panel: <a href="http://git.xfce.org/xfce/xfce4-panel/plain/po/fr.po">fr.po</a>.') ?>
</p>

<p>
  <?php E_('You can send an email to the i18n mailing-list as well with a copy (CC) to the current translator if you did find out his email. Let know your intention and wait for an answer from the current translator(s). If you don\'t get a response in the upcoming weeks (2~3 weeks) you can consider translating the different projects.') ?>
</p>

<p>
  <?php E_('Other than getting in touch with current translators, you can use a private page to share progress on translations. The defacto place is on <a href="http://wiki.xfce.org/translations/">wiki.xfce.org</a>, but you can also use alternative possibilities like the <a href="http://groups.google.com/support/">Google Groups</a>.') ?>
</p>

<h2 id="coordinator"><?php E_('Team Coordinator') ?></h2>
<p>
  <?php E_('Transifex allows you to manage a team with a list of translators and coordinators. Usually you will find one coordinator per team who is allowed to perform the following tasks:') ?>
</p>
<ul>
  <li><?php E_('Accept or deny new translators in the team') ?></li>
  <li><?php E_('Accept or deny a translation review') ?></li>
</ul>

<p>
  <?php E_('The coordinator should not accept new translators without having a little history of their involvement in other projects. If it is unsure if a new member has deep knowledge of translations or not, it is possible to check the new Transifex account and start a short discussion per email. At this point the coordinator can either accept the new member who will be allowed to commit changes directly in our repositories, otherwise the coordinator can ask the new member to submit the work for review. This process is important whenever the translations have to use a standard vocabulary for instance.') ?>
</p>

<p>
  <?php E_('A good practive for the coordinator is to check the translations before a new release, that consists into compiling each Xfce component with the latest translations and making sure everything is in good shape.') ?>
</p>

<h2 id="transifex"><?php E_('Transifex Usage') ?></h2>

<h3><?php E_('Statistics') ?></h3>
<p>
  <?php E_('Transifex provides statistics per language and per project. The <a href="https://translations.xfce.org/projects/p/xfce/">Xfce collection project</a> view is the most interesting as it lets you know if the core projects are fully translated. An overview of the language stats in Xfce core master are <a href="https://translations.xfce.org/projects/p/xfce/r/master/">here</a>.  It is also possible to get to such a page by going to the <a href="https://translations.xfce.org/languages/">language page</a> first and picking up your language than a collection. The collection &quot;Xfce&quot; has several components for the different stable versions (<em>xfce-4.4</em>, <em>xfce-4.6</em>, etc) and one for the development branch (<em>master</em>). The other collections, for example Applications, have usually only development components as they aren\'t part of any official Xfce releases.') ?>
</p>

<h3><?php E_('Downloading Translations') ?></h3>

<p>
  <?php E_('You can visualize and download PO files from existing translations. For that just go to a project page or select a collection from the languages page, than click one of the small buttons at the right of the statistics. If there is no current translation you can download the source file (the PO template) available on each project page. Also when you are on a collection view you have at the bottom of the statistics table a download section with ZIP files.') ?>
</p>

<h3><?php E_('Uploading Translations') ?></h3>

<p>
  <?php E_('When you are identified on Transifex and have the upload rights it is very simple to upload new translations. Go to a project and choose the component that corresponds to a stable version or to the development branch &mdash; you can pass through the collection page to find a project &mdash; then click on the small <em>Upload</em> button besides the visualize/download/lock/edit buttons at the right of your language or the <em>Add a new translation</em> button at the bottom of the page if it doesn\'t exist yet. Fill in the form and click the <em>Send</em> button.') ?>
</p>

<p>
  <?php E_('It is a good idea to click the <em>Lock</em> button when doing a translation while there is more than one active translator for your current language. Besides the <em>Upload</em> form, you can click the <em>Edit</em> button to update the translations online.') ?>
</p>





