<?php $head['title'] = R_('Xfce 4.16 tour'); ?>

<h1><?php echo $head['title'] ?></h1>

  <p><?php E_("This tour will introduce you to new major features of Xfce 4.16. It only covers improvements made on the surface; for the full list of changes, see the <a href=\"/download/changelogs/\">changelogs</a>.") ?></p>

<h2><?php E_("Settings Manager") ?> <em>(xfce4-settings)</em></h2>

<p><?php E_("The Settings Manager itself received a visual refresh of its filter box, which can now be hidden permanently. At the same time the search capabilities of the filter box were improved.") ?>

  <h3><?php E_("Default Applications") ?></h3>

<p><?php E_("This new dialog represents a merger between the previously available 'Mime Settings' and the 'Preferred Applications' dialogs. Consolidating both in one place means users have an easier time setting default applications to handle certain file types.") ?>

  <?php print_figure ("about/tour/4.16/default-applications.png", R_("The new Default Applications dialog")) ?>

  <h3><?php E_("Display Dialog") ?></h3>

<p><?php E_("To better support high-density displays - which come in various sizes and densities - we added fractional scaling based on the RandR extension of X11. Furthermore the mechanism for determining a fallback in case of misconfiguration was improved to always fall back to a valid mode.") ?>

  <?php print_figure ("about/tour/4.16/display-dialog.png", R_("Fractional scaling support")) ?>
