<?php 

$head['title'] = R_('Release Model');

$toc['anchors'] = array (
        'core' => R_('The Xfce Core Desktop'),
        'cycle' => R_('The Release Cycle'));

?>

<h1><?php echo $head['title'] ?></h1>

<p>
  <?php E_('In the past the same questions and discussions have come up over and over again whenever a new release was in sight, like:') ?>
</p>

<ul>
  <li><?php E_('What are the core components of Xfce?') ?></li>
  <li><?php E_('How often do we want to release and in what fashion (time-based, feature-based)?') ?></li>
  <li><?php E_('Who\'s in charge of the release process?') ?></li>
  <li><?php E_('What dependency versions do we depend on?') ?></li>
  <li><?php E_('When are feature-freeze, string-freeze, code-freeze and thelike?') ?></li>
  <li><?php E_('How many pre-releases should we do and how do we call them?') ?></li>
  <li><?php E_('What do we use as a replacement for SVN revision versioning with Git?') ?></li>
</ul>

<p>
  <?php E_('This document intends to answer these questions and aims at defining a policy that we can refer to when planning releases.') ?>
</p>

<h1 id="core"><?php E_('The Xfce Core Desktop') ?></h1>

<h2><?php E_('Core Components') ?></h2>

<ul>
  <li><?php E_('exo') ?></li>
  <li><?php E_('gtk-xfce-engine') ?></li>
  <li><?php E_('libxfce4ui') ?></li>
  <li><?php E_('libxfce4util') ?></li>
  <li><?php E_('thunar-vfs') ?></li>
  <li><?php E_('thunar') ?></li>
  <li><?php E_('xfce-utils') ?></li>
  <li><?php E_('xfce4-appfinder') ?></li>
  <li><?php E_('xfce4-panel') ?></li>
  <li><?php E_('xfce4-session') ?></li>
  <li><?php E_('xfce4-settings') ?></li>
  <li><?php E_('xfconf') ?></li>
  <li><?php E_('xfdesktop') ?></li>
  <li><?php E_('xfwm4') ?></li>
</ul>

<p>
  <?php E_('All core components of the Xfce desktop must adhere to the release policy defined in this document.') ?>
</p>

<h2><?php E_('Essential Dependencies') ?></h2>

<ul>
  <li><?php E_('GTK+') ?></li>
  <li><?php E_('GLib') ?></li>
  <li><?php E_('garcon') ?></li>
</ul>

<h1 id="cycle"><?php E_('The Release Cycle') ?></h1>

<p>
  <?php E_('The release cycle involves a short planning phase, a development phase with development releases and a release phase, eventually leading to a new stable release of the entire Xfce core desktop. In parallel to these phases, a maintenance process of the current stable release will continue. During this phase, bugfix releases and security fixes will be released for the stable version of Xfce.') ?>
</p>

<p>
  <?php E_('Below you can see a graphical timeline of an example release cycle and maintenance process for Xfce 4.8 with three components: Thunar, exo and xfwm4.') ?>
</p>

<p>
  <a href="/images/about/releasemodel/example-release-cycle.svg">
    <img src="/images/about/releasemodel/example-release-cycle.png" title="<?php E_('Example Release Cycle') ?>" alt="" />
  </a>
</p>

<h2><?php E_('Planning Phase (2(+2) Weeks)') ?></h2>

<p>
  <?php E_('This phase marks the beginning of the release cycle and is used to decide which dependencies to use and also to appoint the release team for the cycle (first 2 weeks). It eventually leads to the dependency freeze (after 4 weeks).') ?>
</p>

<h3><?php E_('Appointing the Release Team') ?></h3>

<p>
  <?php E_('At the beginning of the planning phase there is a (formal or informal) voting for the release team. The release team supervises development and maintenance releases during the release cycle. Its main purpose is to perform and double-check the Xfce core desktop releases in the release phase at the very end of the cycle. This is explained in more detail in the Release Team section of this document.') ?>
</p>

<h4><?php E_('Release Team') ?></h4>

<p>
  <?php E_('The release team consists of at least two people: one release manager who can be assisted by others to actually perform the release (tagging, creation of tarballs, writing release notes and announcements) and another person for quality assurance (checking if all components compile, tags are in place, release notes are up to date and so on). This is defined in more detail below.') ?>
</p>

<p>
  <?php E_('These are the release team roles and their responsibilities:') ?>
</p>

<p><strong><?php E_('Release Manager')?></strong></p>

<ol>
  <li><?php E_('Organization of the release cycle') ?></li>
  <li><?php E_('Announce deadlines to developers and translators (repeatedly and early enough)') ?></li>
  <li><?php E_('Overseeing of maintainance and development releases') ?></li>
  <li><?php E_('Tagging of Xfce-X.Ypre1, Xfce-X.Y.pre2, Xfce-X.Y.pre3 and Xfce-X.Y') ?></li>
  <li><?php E_('Generate tarballs from tags (possibly automated)') ?></li>
  <li><?php E_('Write release notes') ?></li>
  <li><?php E_('Write release announcements') ?></li>
  <li><?php E_('Create Bugzilla tags') ?></li>
  <li><?php E_('Approve fixes of blocker bugs during code freeze') ?></li>
</ol>

<p><strong><?php E_('Release Assistant(s)')?></strong></p>

<ol>
  <li><?php E_('Update the website(s)') ?></li>
  <li><?php E_('Help the release manager with his tasks') ?></li>
</ol>

<p><strong><?php E_('QA Official')?></strong></p>

<ol>
  <li><?php E_('Have an eye on libtool versions of maintanance and development releases') ?></li>
  <li><?php E_('Remind maintainers about missing NEWS updates') ?></li>
  <li><?php E_('Double-check the generated tarballs') ?></li>
  <li><?php E_('Proof-read release announcements') ?></li>
</ol>

<p><strong><?php E_('Individual Maintainers')?></strong></p>

<ol>
  <li><?php E_('Create component-specific tags for their maintainance and development releases') ?></li>
  <li><?php E_('Generate tarballs for their maintainance and development releases') ?></li>
  <li><?php E_('Write ChangeLogs and update NEWS files') ?></li>
  <li><?php E_('Write component-specific release announcements') ?></li>
  <li><?php E_('Create Bugzilla tags for their releases') ?></li>
  <li><?php E_('Make sure API documentation is up to date') ?></li>
</ol>

<h3><?php E_('Dependency Freeze') ?></h3>

<p>
  <?php E_('During the first 2 weeks of the planning phase each maintainer is required to ') ?>
</p>

<ol>
  <li><?php E_('List the features he wants to implement in the release cycle') ?></li>
  <li><?php E_('Investigate which dependencies are implied by that') ?></li>
</ol>

<p>
  <?php E_('At the end of this, a decision is made on which dependencies the next stable release of the Xfce core desktop will depend. In particular this includes the minimum required versions for all essential dependencies of the Xfce core desktop.') ?>
</p>

<p>
  <?php E_('Maintainers who were not available during the first 2 weeks of the planning phase have the chance to request dependency changes in the 2 weeks after that. ') ?>
</p>

<p>
  <?php E_('At the end of these 4 weeks, all components enter dependency freeze which means they may not change the dependencies (and their versions) they depend on. Optional dependencies for are still allowed to be added though.') ?>
</p>

<h3><?php E_('Informing the Community') ?></h3>

<p>
  <?php E_('At the very end of the planning phase, a mail with planned features and dependencies for all components of the Xfce core desktop is sent to the xfce4-dev@xfce.org and xfce@xfce.org mailing lists.') ?>
</p>

<h2><?php E_('Development Phase (5 Months)') ?></h2>

<p>
  <?php E_('During the development phase every maintainer is free to do maintenance and development releases of his components independently of the rest of Xfce.') ?>
</p>

<h3><?php E_('Development Releases') ?></h3>

<p>
  <?php E_('Development releases usually give a feature preview for the next stable release. They must follow the X.Y.Z versioning format, where Y is an odd number (e.g. xfwm4-4.7.3 or thunar-1.3.10).') ?>
</p>

<p>
  <?php E_('Maintainers are encouraged to do development releases for new features they want to make available to others. Frequent development releases can act as a replacement of the SVN revision versioning we had in the past. If component A depends on a new feature in component B, A may only be released if there is a development release of B shipping this feature. For this to work, libtool versions must be updated properly with every development release.') ?>
</p>

<p>
  <?php E_('Care has to be taken of the master branch of each component. The master branch should always remain in a release-ready state. New features should be developed in branches until they are ready (as in: compiling and the component will remain functional even after merging the feature(s) into the master branch), to lower the risk of delaying the final release of the entire Xfce core desktop.') ?>
</p>

<p>
  <?php E_('New features breaking APIs or other core components should be communicated. Maintainers are suggested to prepare other components for these features in a separate branch before including the features in a new development release. That way the other components retain their release-ready state.') ?>
</p>

<p>
  <?php E_('This is how the basic development workflow looks like:') ?>
</p>

<p>
  <a href="/images/about/releasemodel/feature-branching.svg">
    <img src="/images/about/releasemodel/feature-branching.png" title="<?php E_('Development Workflow') ?>" alt="" />
  </a>
</p>

<h2><?php E_('Release Phase (10+ Weeks)') ?></h2>

<p>
  <?php E_('During the release phase, there will be three pre-releases and one final release:') ?>
</p>

<ol>
  <li><?php E_('Xfce X.Ypre1 (after  0  weeks, feature freeze),') ?></li>
  <li><?php E_('Xfce X.Ypre2 (after  4  weeks, string freeze) and') ?></li>
  <li><?php E_('Xfce X.Ypre3 (after  8  weeks, code freeze)') ?></li>
  <li><?php E_('Xfce X.Y     (after 10+ weeks)') ?></li>
</ol>

<p>
  <?php E_('where Y has to be an even number. Each of these releases has to include the latest development releases of all components (or stable, if there were no development releases since the last stable release) of the Xfce core desktop. The version numbers of these components may (even have to) differ from the naming scheme above. E.g. for Xfce 4.8.0pre2, xfwm4 could have the version 4.7.17 and Thunar could have 1.1.9.') ?>
</p>

<p>
  <?php E_('This means that maintainers don\'t necessarily have to release new versions of their components along with one of the pre-releases. The release team always picks the latest available development or stable release of each component for pre-releases and the final release.') ?>
</p>

<p>
  <?php E_('The end of this phase marks a new stable release of the Xfce core desktop and therewith the start of a new release cycle.') ?>
</p>

<h3><?php E_('Freezing before Releases') ?></h3>

<p>
  <?php E_('There are different freeze types before releases.') ?>
</p>

<h4><?php E_('Feature Freeze') ?></h4>

<p>
  <?php E_('With Xfce X.Ypre1, all core components enter feature freeze which means from there on only translations and bugfixes are allowed to go into the master branch.') ?>
</p>

<h4><?php E_('String/UI Freeze') ?></h4>

<p>
  <?php E_('With Xfce X.Ypre2, all core components enter string/UI freeze which means from there on no strings which affect translations may be changed. Same goes for the user interface which may not be changed after this point.') ?>
</p>

<h4><?php E_('Code Freeze') ?></h4>

<p>
  <?php E_('There is a short 2-days code freeze before every pre-release. During this period of time, no commits may be sent unless they are signed off by the release manager.') ?>
</p>

<p>
  <?php E_('With Xfce X.Ypre3, all core components enter code freeze which means from there on no code changes are allowed, unless they are signed off by the release manager. These should usually only be fixes to blocking or release-critical bugs. Translations are still allowed to go in.') ?>
</p>

<h3><?php E_('Code Freeze Phase (2+ weeks)') ?></h3>

<p>
  <?php E_('With Xfce X.Ypre3, all core components enter code freeze. This phase is illustrated in the following figure and is explained in more detail in this section.') ?>
</p>

<p>
  <?php E_('The code freeze and its exceptions are supported by commit hooks. There is an update hook which doesn\'t allow any changes to master unless they are signed off by the release manager. ') ?>
</p>

<p>
  <a href="/images/about/releasemodel/code-freeze-branching.svg">
    <img src="/images/about/releasemodel/code-freeze-branching.png" title="<?php E_('Tagging and Branching for Releases') ?>" alt="" />
  </a>
</p>

<h4><?php E_('Bugfixes/Changes') ?></h4>

<p>
  <?php E_('If a core component requires fixes or changes during code freeze, the maintainer is required to create a new branch called ELS (//NAME OPEN FOR DISCUSSION//) to which he or she then commits the fixes. Refer to the section Code Freeze Exceptions if these are release-critical changes or fixes for blocking bugs.') ?>
</p>

<p>
  <?php E_('The ELS branch only lives for a short period of time. It is merged into master and into the component\'s stable branch (e.g. xfwm4-4.8 or thunar-1.2) after the final release. Only bugfixes are allowed in this branch.') ?>
</p>

<h4><?php E_('Code Freeze Exceptions') ?></h4>

<p><strong><?php E_('Blocking Bugs')?></strong></p>

<p>
  <?php E_('Certain bugs may delay the final release if they are considered blockers. This is the case under any of the following circumstances:') ?>
</p>

<ul>
  <li><?php E_('it crashes a core application') ?></li>
  <li><?php E_('it causes data loss') ?></li>
  <li><?php E_('it causes an ever-growing memory leak') ?></li>
  <li><?php E_('it locks the entire desktop GUI') ?></li>
</ul>

<p>
  <?php E_('A bug may not delay a release if it meets the following criteria:') ?>
</p>

<ul>
  <li><?php E_('the hardware or architecture on which the bug occurs is exotic and/or there\'s no way for developers to reproduce the bug') ?></li>
</ul>

<p>
  <?php E_('Fixes for these bugs are allowed to be applied during code freeze if, and only if they are signed off by the release manager.') ?>
</p>

<p><strong><?php E_('Release-Critical Changes') ?></strong></p>

<p>
  <?php E_('Some changes may be of big concern with regards to the quality of the release. They are allowed to go in if, and only if they are signed off by the release manager.') ?>
</p>

<h4><?php E_('Releasing') ?></h4>

<p>
  <?php E_('For the final release (Xfce X.Y), all core components are tagged (twice, once with their own version and once with xfce-X.Y.0) and branched for the maintenance cycle (e.g. as thunar-1.2 or xfwm4-4.8). After that, the ELS branch is merged into master (where the development for the next release takes place) and into e.g. thunar-1.2 or xfwm4-4.8.') ?>
</p>

<h2><?php E_('Maintenance Process') ?></h2>

<p>
  <?php E_('After the release of a final version, bugfixes and translation updates will be committed to a stable component-specific branch (like thunar-1.2 or xfwm4-4.8). Maintenance releases of individual components are not required to be synchronized.') ?>
</p>

<h3><?php E_('Maintenance Releases') ?></h3>

<p>
  <?php E_('There may be no API/ABI changes in maintenance releases compared to the corresponding final release of the Xfce core desktop. They also must follow the X.Y.Z versioning format, where Y is an even number (e.g. xfwm4-4.8.4 or thunar-1.2.4). No new features or strings may be introduced in these releases.') ?>
</p>

<p>
  <?php E_('Authors') ?>
</p>

<ul>
  <li>Jannis Pohlmann &lt;<?php echo mungify_mail('jannis@xfce.org') ?></li>
  <li>Stephan Arts &lt;<?php echo mungify_mail('stephan@xfce.org') ?></li>
</ul>
