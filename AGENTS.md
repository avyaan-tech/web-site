# Avyaan Web — agent notes

## Local development

- **URL:** [https://avyaan.local](https://avyaan.local) (default HTTPS, no port)
- **Hosts:** map `avyaan.local` to `127.0.0.1`
- **Alternate:** `local.avyaan.tech` on the same stack

## Stack

- **Site source:** `Website/site/project` (`avyaan-tech/web-site`)
- **Shared framework (submodule):** `Website/site/project/root/Framework` (`cutie-framework`) — also used by other Cutie sites
- **Static build:** Tiggu (`Website/tiggu/build.sh`) → `Website/project/build` (`avyaan-tech/web-public`)
- **Docker dev:** `Website/project/compose-dev.yaml`

## Framework vs site (keep Avyaan chrome out of cutie-framework)

Cutie is shared. **Do not put Avyaan-only visuals, fonts, search UI, or landing chrome into the framework repo.** Prefer site-owned files so other dependent sites stay classic until they opt in.

### Default rule

| Change type | Where |
|-------------|--------|
| Brand layout, header/menu chrome, landing/portfolio look, motion, tokens | **Site** (`web-site`) |
| Reusable, brand-agnostic hooks other sites can opt into | **Framework** (`cutie-framework`) only |
| Temporary API divergence | Long-lived framework **branch** (e.g. `shell/wide`) — not a disjoint fork |

Avoid forking framework base CSS (`Structure.css`, `Body.css`, `Font.css`, etc.) for one brand. Extend via opt-in attributes + site adapter.

### Opt-in shell (framework)

Avyaan selects wide/glass in site `Config/Vars.tsv` (`layout=wide`, `skin=glass`). Template emits `data-layout` / `data-skin` on `<html>`. Framework CSS (`Layout_wide*.css`, `Skin_glass.css`) only applies when those attributes match; other sites omit the keys and stay classic.

### Site adapter layer (preferred for Avyaan work)

Put project-specific styling and chrome in the site tree:

| Concern | Site path |
|---------|-----------|
| Radical chrome / overrides | `CSS/Base/adapter.css` (primary; gate on `[data-layout]` / `[data-skin]`) |
| Design tokens / colors | `CSS/Base/theme.css` |
| Motion / transitions | `CSS/Base/motion.css` |
| Shared page styles | `CSS/Base/core.css` |
| Search UI (replaces framework GCSE) | `HTML/Fragment/GCSE.php`, `JS/Fragment/GCSE.php`, `CSS/Base/search_box.css` |
| Header / menu / footer redesign | `HTML/Fragment/{Header,Menu,Footer}.php` |
| Landing & case study markup | `HTML/Component/` (`Root.php`, `Work.php`, `work/*`) |
| Site JS behavior | `JS/Base/` (e.g. `root.js`) |

Mark self-contained landing/case pages with class `no-auto-cover` so SPA cover injection is skipped without brand-specific framework checks.

### When to touch the framework

Only for **generic** improvements that belong upstream: opt-in layout/skin utilities, SPA/hash behavior that all Cutie sites need, bugfixes with no Avyaan naming or tokens. If a fix is brand-specific, implement it in the adapter (or site fragments) instead. Prefer sending reusable pieces back to `cutie-framework` `main` via PR; pull framework updates into the submodule when other sites land shared work.

## Publish & deploy

1. **Commit and push site source** in `Website/site/project` (`web-site`) when PHP/CSS/JS/config change.
   - **Always commit the Framework submodule** (`root/Framework`, `blank-org/cutie-framework`) in the same change set whenever it has moved. Never leave `root/Framework` dirty or uncommitted when committing, merging, or publishing the site.
   - If the framework repo itself has new commits, push `cutie-framework` first, then record that SHA in `web-site`.
2. **Publish** the static site from the Avyaan web-site container (or equivalent):
   - `docker exec avyaan-web-site-1 bash -lc '/app/project/render.sh'`
   - or `/app/tiggu/build.sh /app/site/project` then copy `site/project/{interim,public}` into `project/build/`
3. **Commit and push the public repo** in `Website/project/build` (`web-public`).
4. **CI/CD deploys automatically** once `web-public` on the remote is updated — no manual Firebase/host deploy step after the push.

## Key routes

- `/` — home (`root`)
- `/work` — portfolio index (`work` component)
- `/work/{slug}` — case study pages (e.g. `/work/pmsbeds`, `/work/wolo-code`, `/work/mithra`)
- `/portfolio` — redirects to `/work`

## Plan: `/work` as portfolio index

`/work` is a **portfolio index**, not a second marketing page.

### Header (global)

`Avyaan | Home | Work | Portfolio | Contact`

| Item | Target | Notes |
|------|--------|--------|
| Logo | `/` | |
| Home | `/` / hero | On home: scroll to hero (`data-home-nav`). Off home: SPA to `/` via XURL |
| Work | `/work` | Highlight on `/work` and `/work/*` |
| Portfolio | `#portfolio` | Featured section on home |
| Contact | `#contact` | |

**Section-link rule:** on `/`, use `#portfolio` (etc.). Off home (e.g. `/work`), rewrite to `/#portfolio` so the section resolves on `/`, not inside `/work`. Implemented in `JS/Base/root.js` (`syncSectionNavHrefs` + section-nav click handling). Do not let XURL SPA-load `root` without the hash — off-home section clicks use full navigation to `/#…`. Home uses `data-home-nav` (not `data-section-nav`) so off-home Home keeps XURL SPA navigation.

### `/work` page body

Mirror live `/portfolio` structure (reference: [avyaan.tech/portfolio](https://www.avyaan.tech/portfolio)):

- Hero: “Work that delivers. Results that create an impact.” + short lead + meta line
- Skills grid: core capability cards (languages, frontend, backend, cloud, AI, DevOps, security, algorithms)
- Case studies: alternating `portfolio-case` rows (icon + copy); link to `/work/{slug}` where case pages exist; WCode / Wolo keep external site links
- Recognitions
- Bottom CTA → `/#contact`

### Case study pages (`/work/{slug}`)

- Breadcrumb: `← All work` → `/work`
- Bottom CTA: **Have a similar problem? → Talk to us** → `/#contact`
- Register slugs in `Config/ID.tsv`; components under `HTML/Component/work/{slug}.php` (shared `_layout.php`)

### Homepage anchors

Home must expose scroll targets used by the header: `#hero`, `#about`, `#services` (capabilities), `#portfolio`, `#contact`.

### Key files

- Nav: `HTML/Fragment/Header.php`, `HTML/Fragment/Menu.php`
- Pages: `HTML/Component/Work.php`, `HTML/Component/work/*`, `HTML/Component/Root.php`
- Avyaan chrome (site, not framework): `CSS/Base/adapter.css`, `theme.css`, `motion.css`, `core.css`
- Behavior: `JS/Base/root.js`, `Framework/JS/Init.js` (must not strip `/#section` hashes on load)
- Registry / sitemap: `Config/ID.tsv`, `Site/SiteMap.xml`
