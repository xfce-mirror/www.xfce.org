# www.xfce.org

Hugo static site for the Xfce desktop environment website.

## Building

```bash
./build.sh              # full build → public/
./build.sh --update-po  # same, but also updates PO/POT translation files
hugo server             # dev server (run ./build.sh first to populate generated/)
```

Requirements: Hugo (extended), Python 3 with `polib`, po4a, gettext (`msgmerge`).

## Content vs layouts

There are two kinds of translatable text, handled by separate pipelines:

**Content** (`content/`) is prose written in Markdown. Translations are managed via po4a: English source files are extracted into `po/content.pot`, translators work on `po/content.LANG.po`, and po4a generates translated Markdown into `generated/`. New content files must be registered in `po4a.cfg` manually.

**UI strings** (`layouts/`) are short labels, navigation, and structured text embedded in Hugo templates via `{{ i18n "string" }}`. These are extracted into `po/ui.pot` and translated via `po/ui.LANG.po`, then converted to Hugo i18n JSON files in `generated/i18n/`.

Both pipelines feed into `generated/`, which is gitignored and mounted alongside `content/` by Hugo.

## Adding a content page

Write the English Markdown in `content/SECTION/page.md`, then register it in `po4a.cfg`:

```
[type:text] content/SECTION/page.md $lang:generated/SECTION/page.$lang.md opt:"-o markdown" opt:"-o yfm_lenient=1" opt:"-o yfm_keys=title" opt:"-o neverwrap"
```

Add language stubs in `build.sh` so the page renders for all languages, then run `./build.sh --update-po` to extract strings.

## Adding a UI-only page

Create `content/SECTION/page.md` (frontmatter only, no prose body) and a matching `layouts/SECTION/page.html`. Use `{{ i18n "English text" }}` for all visible strings. HTML in translations uses `%s` placeholders for open/close tags so translators don't see markup:

```go
{{ i18n "Visit the %sXfce website%s." (dict "s1" `<a href="https://xfce.org">` "s2" `</a>`) | safeHTML }}
```

Add language stubs in `build.sh`, then run `./build.sh --update-po`.

## Translations

Translations are managed on [Transifex](https://app.transifex.com/xfce/xfce-www/) and committed as PO files in `po/`. Languages below 50% combined translation are automatically disabled at build time.

## Data files

`data/versions.json` holds stable/preview version numbers.
`data/credits.json` and `data/translators.json` hold contributor lists for the credits page.
