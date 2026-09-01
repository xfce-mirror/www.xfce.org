# www.xfce.org

Hugo static site for the Xfce desktop environment website.

## Building

With Docker (recommended, since it pins Hugo and tool versions):

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

**UI strings** (`i18n/en.yaml`) are short labels, navigation, and structured text, hand-maintained and committed, referenced from templates as `{{ i18n "key" }}`. hugo-gettext extracts it into `po/strings.pot`, translators work on `po/strings.LANG.po`, and hugo-gettext writes the translations back out as `i18n/LANG.yaml` (gitignored).

Translated content lands in `generated/`, translated UI strings in `i18n/`; both are gitignored build output.

## Adding a content page

Write the English Markdown in `content/SECTION/page.md`. If the file doesn't match an existing glob in `hugo-gettext.toml`, add one under `[i18n.content.content]`. Add language stubs in `build.sh` so the page renders for all languages, then run `./build.sh --update-po` to extract strings.

A page with a prose body must not also have a stub in `build.sh`: the stub is frontmatter-only and shadows the generated file, leaving the page blank in every language but English.

## Adding a layout page

Create `content/SECTION/page.md` (frontmatter only, no prose body) and a matching `layouts/SECTION/page.html`. Give the page a `titleKey` so its `<title>` is translated:

```yaml
---
title: "Page Title"
titleKey: "section-page-title"
---
```

Every visible string needs an entry in `i18n/en.yaml` and a matching `{{ i18n "key" }}` in the template.
Keys are `<area>-<what>`, using `common-` for anything more than one template uses.

Markup never reaches translators. Put `{{ .s1 }}`, `{{ .s2 }}` … where the tags go, and pass the tags in from the template:

```yaml
about-visit-website:
  other: Visit the {{ .s1 }}Xfce website{{ .s2 }}.
```

```go
{{ i18n "about-visit-website" (dict "s1" `<a href="https://xfce.org">` "s2" `</a>`) | safeHTML }}
```

Add language stubs in `build.sh`, then run `./build.sh --update-po`.

`i18n/en.yaml` is the source of truth, so a template asking for a key that isn't there renders an empty string.
Every build runs `scripts/ui-strings.py --check`, which fails and names the string if the two drift apart.

## Publishing a release

For a new preview release, say 4.22pre1:

1. Set `preview` and `preview_date` in `data/versions.yaml`.
   - The preview section on the download page appears automatically when `preview_date` is newer than `stable_date`.
2. Add `content/download/changelogs/4.22pre1.md` if applicable.
3. Commit, push & publish a blog post.

For a new stable release, say 4.22:

1. Set `stable` and `stable_date` in `data/versions.yaml`.
   - The preview section on the download page hides automatically when `stable_date` is newer than `preview_date`.
2. Write the announcement in `content/about/news/<unix-timestamp>.md`.
   - Frontmatter: `title`, `date`, `layout: "news-post"`, `hasToc: true`.
   - Put `<!--more-->` after the first paragraph to mark the summary used on the news list and homepage.
   - Add tour, changelog and archive links in the body.
3. Generate a changelog draft with `python3 scripts/changelog-generator.py 22`.
   - It fetches NEWS files from all core components and writes `content/download/changelogs/4.22.md`.
   - Review the output and drop irrelevant lines by hand.
   - Set frontmatter `weight: 110` (each release is +10).
   - Changelogs are not translated; `build.sh` copies them into every language.
4. Add `content/about/tour422.md` with `layout: "tour"` and `hasToc: true`.
   - Move `aliases: ["tour"]` off the previous tour so `/tour` points at the newest one.
5. Add `related-tour-422` to `i18n/en.yaml` and a matching entry to `layouts/partials/about-related.html`.
6. Add the release to the `$shots` list in `layouts/about/screenshots.html`.
7. Commit, push & publish a blog post.

The news post, tour and changelog index are picked up by existing globs in `hugo-gettext.toml`.
The download page and the homepage tour link read `data/versions.yaml`, so they need no edit.

## Translations

Translations are managed on [Transifex](https://app.transifex.com/xfce/xfce-www/) and committed as PO files in `po/`.
Languages below 50% combined translation are automatically disabled at build time.

Individual pages have their own threshold: hugo-gettext skips a page whose body is under 50% translated and whose frontmatter is untranslated.
The page is then missing in that language instead of falling back to English, so links to it 404.

## Data files

`data/versions.yaml` holds stable/preview version numbers and dates.
`data/credits.json` and `data/translators.json` hold contributor lists for the credits page.
