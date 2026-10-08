"""hugo-gettext customizations, loaded via `customs` in hugo-gettext.toml.

hugo-gettext only writes a translated page when a frontmatter value is
translated or more than half of the body is; otherwise the page is absent and
/LANG/... 404s. The old PHP site fell back to English per string instead, and
that is what we want: a built language gets every page, with untranslated
strings left in English. Languages below the overall threshold are still not
built at all (scripts/check-lang-threshold.py).

The 50% rule is hardcoded in HugoDomainG.generate_content_domain, so this
replaces that method. Written against hugo-gettext 0.6.0; recheck on upgrade.
"""

import os

from hugo_gettext.generation.g_domain import HugoDomainG

assert hasattr(HugoDomainG, 'generate_content_domain'), \
    'hugo-gettext internals changed, update scripts/hugo_gettext_customs.py'

def _generate_content_domain(self, domain_paths):
    file_l10n_count = 0
    for src_path in domain_paths:
        if os.path.isfile(src_path):
            fm_result, content_result = self.render_content_file(src_path)
            self.write_content_file(fm_result.localized, content_result.localized, src_path)
            # count only what upstream would have written: hugo-gettext uses
            # this to decide whether the language is translated at all
            if fm_result.l10n_count > 0 or content_result.rate == -1 or content_result.rate > 0.5:
                file_l10n_count += 1
    return file_l10n_count

HugoDomainG.generate_content_domain = _generate_content_domain
