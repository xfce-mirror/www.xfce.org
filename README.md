# www.xfce.org

Hugo static site for the Xfce desktop environment website.

## Building

With Docker (recommended — pins Hugo and tool versions):

```bash
docker compose run --rm build              # full build → public/
docker compose run --rm build-update-po    # same, but also updates PO/POT translation files
docker compose up server                   # dev server at http://localhost:1313
```

Without Docker:

```bash
./build.sh              # full build → public/
./build.sh --update-po  # same, but also updates PO/POT translation files
hugo server             # dev server (run ./build.sh first to populate generated/)
```

Requirements: Hugo extended, Python 3 with `polib`, `hugo-gettext`, gettext (`msgfmt`, `msgmerge`).

## Content vs layouts

There are two kinds of translatable text, handled by separate pipelines:

**Content** (`content/`) is prose written in Markdown. Translations are managed via hugo-gettext: English source files matching globs in `hugo-gettext.toml` are extracted into `po/content.pot`, translators work on `po/content.LANG.po`, and hugo-gettext generates translated Markdown into `generated/LANG/`. New content files matching existing globs are auto-discovered; new sections need a glob added to `hugo-gettext.toml`.

**UI strings** (`layouts/`) are short labels, navigation, and structured text embedded in Hugo templates via `{{ i18n "key" }}`. The English source is `i18n/en.json`, which is hand-maintained and committed. hugo-gettext extracts it into `po/ui.pot`, translators work on `po/ui.LANG.po`, and hugo-gettext writes the translations back out as `i18n/LANG.json` (gitignored).

Translated content lands in `generated/`, translated UI strings in `i18n/`; both are gitignored build output.

## Adding a content page

Write the English Markdown in `content/SECTION/page.md`. If the file doesn't match an existing glob in `hugo-gettext.toml`, add one under `[i18n.content.content]`. Add language stubs in `build.sh` so the page renders for all languages, then run `./build.sh --update-po` to extract strings.

## Adding a UI-only page

Create `content/SECTION/page.md` (frontmatter only, no prose body) and a matching `layouts/SECTION/page.html`. Give the page a `titleKey` so its `<title>` is translated:

```yaml
---
title: "Page Title"
titleKey: "section-page-title"
---
```

Every visible string needs an entry in `i18n/en.json` and a matching `{{ i18n "key" }}` in the template. Keys are `<area>-<what>`, using `common-` for anything more than one template uses.

Markup never reaches translators. Put `{{ .s1 }}`, `{{ .s2 }}` … where the tags go, and pass the tags in from the template:

```json
"about-visit-website": { "other": "Visit the {{ .s1 }}Xfce website{{ .s2 }}." }
```

```go
{{ i18n "about-visit-website" (dict "s1" `<a href="https://xfce.org">` "s2" `</a>`) | safeHTML }}
```

Add language stubs in `build.sh`, then run `./build.sh --update-po`.

`i18n/en.json` is the source of truth, so a template asking for a key that isn't there renders an empty string. Every build runs `scripts/ui-strings.py --check`, which fails and names the string if the two drift apart.

## Translations

Translations are managed on [Transifex](https://app.transifex.com/xfce/xfce-www/) and committed as PO files in `po/`. Languages below 50% combined translation are automatically disabled at build time.

## Data files

`data/versions.yaml` holds stable/preview version numbers.
`data/credits.json` and `data/translators.json` hold contributor lists for the credits page.
