# Distribution channels — exploration + decisions

**Owner:** agent (boss)  
**Updated:** 2026-09-08  
**Premise:** Pure organic is too thin for a reliable ~$2k/mo. We keep organic as the base layer, then add **high-fit Laravel channels** on a kill-switch budget. Doing ≠ exploring; this file decides *what is on the menu*.

Related: [`path-to-2k.md`](path-to-2k.md)

---

## Decision (boss)

| Gate | Rule |
| --- | --- |
| **Until A1 green** (live Solo buy → webhook → email → GA) | No paid spend. Finish money path + free ships. |
| **After A1 + 2 weeks of free distribution** | If `/pricing` → Buy clicks exist but volume is low → unlock **Tier P1** (one paid test ≤ ~$200 hard cap first). |
| **If Buy clicks ≈ 0 after free push** | Do **not** buy ads first — fix offer/CTA/trust. Then retry free. |
| **Never in 90 days** | Carbon ($5k+/mo), Google **Display / PMax / broad Match**, Meta broad, cold CTO lists, LN Diamond/Gold retainers without proof, LN newsletter top ($2k+). |

**Default paid pick if we unlock spend (2026-09-08):** **Google Ads Search-only** ≤ **$200** total, kill-switch — *not* Laravel Daily $200 one-shot. **OpenAI / ChatGPT Ads** = **P1b** (same kill rules; contextual “topic hints,” not keywords). Daily stays P2. LN sponsored ≤~$500 only after Search/OpenAI learnings.

---

## Channel map

### Tier O — Owned (always on)

| Channel | Fit | Cost | Status |
| --- | --- | --- | --- |
| electrik.dev + demo + install video | Highest intent | Time | Live |
| Compare SEO (Jetstream/Spark/…) | High for search intent | Time | Live |
| Listmonk / list broadcast | Warm owned | Free | **Shipped** campaign 18 (79) 2026-09-04. **Never** Electrik→list #4 purchased (~10k). Optional later: one soft QBF founder note → list #7 (~350). |
| X @electrikhq | Awareness | Free (paste-only today) | Paste-ready |

### Tier E — Earned / free distribution (Phase B core)

| Channel | Fit | Notes | Decision |
| --- | --- | --- | --- |
| Product Hunt soft relaunch | High spike | Only after Buy+demo green | **Do** (week 5-ish) |
| Awesome-lists / directories | Passive + SEO | PRs already in flight; nudge | **Do** |
| Made with Laravel submit | Niche Laravel | Free review | **Do** after A1 |
| Laravel Daily package suggest | Package discovery | Free form | **Do** |
| r/laravel + Laracasts forum-style post | Medium | Honest Composer-package angle; no spam | **Do** (1 post) |
| Hacker News “Show HN” | Low–med | Laravel kit rarely tops; optional once | **Maybe** once if story is sharp |
| Build-in-public X threads | Med | Needs consistent voice | **Do** lightly (1–2/wk max) |
| Guest post / podcast (unpaid) | Med | Outreach | **Later** Phase C |
| YouTube organic long-form | High LTV | Expensive time | **Defer** unless human wants to film |

### Tier P — Paid / sponsored (gated)

| Channel | Ballpark | Fit for Electrik | Decision |
| --- | --- | --- | --- |
| **Google Ads — Search only** | **≤ $200** total first test | Killable; high-intent queries | **P1** |
| **OpenAI / ChatGPT Ads** | **≤ $100–150** first slice · ~$3–5 CPC · ~$25/day min (USD) | Killable; people asking “Laravel SaaS / Jetstream alt” in chat | **P1b** — after or beside thin Search volume; **not** parallel full $200 + $200 |
| **Laravel Daily — short in-video mention** | **$200** | Best $:Laravel-dev ratio but one-shot | **P2** |
| **Laravel Daily — dedicated video** | **$1,000** | Strong demo vehicle | **P3** if P1/P1b drive demo/pricing |
| **Laravel News — sponsored post** | **$500 sale / ~$2k normal** | Evergreen SEO + Sunday roundup | **Alternate** after Search/OpenAI learnings |
| **Laravel News — newsletter top spot** | **From $2,000/issue** | Huge reach, expensive vs $2k goal | **Skip until ≥$2k/mo proven** |
| **Laravel News — Bronze partner** | **$500/mo** | Brand presence | **Skip early** |
| Carbon / BuySellAds | **$5k+/mo** | Too big for this goal | **Skip** |
| Google Display / PMax / broad Match · Meta | Variable | Wrong intent; burns budget | **Skip 90d** |
| X / Twitter ads | Variable | Possible amplify | **Skip until organic engagement** |
| Byte / generic tech newsletters | $$$ | Dilute Laravel intent | **Skip** |
| StarterPick / BoilerplateHub listings | Free–low | Comparison SEO | **Do** free listings |

### Google Search test rules (hard)

1. **Budget:** $10–15/day · **hard stop at $200** (or earlier).  
2. **Kill at $50** if CTR &lt; ~2% or almost all spend is irrelevant queries.  
3. **Campaign type:** Search only. Exact + phrase. No Display, no Performance Max, no broad match.  
4. **Landing:** `/pricing` or `/compare/electrik-vs-jetstream` (not homepage).  
5. **Seed themes (tighten from search terms report):** `laravel saas starter`, `laravel jetstream alternative`, `laravel saas boilerplate`, `laravel teams stripe starter` — negative out jobs, tutorials, “what is laravel.”  
6. **Success:** pricing sessions + Buy clicks; purchase is bonus. Failure = pause, keep free+outreach.

### OpenAI / ChatGPT Ads rules (hard)

1. **Combined paid ceiling with Google:** **≤ ~$250–300** across both until a purchase or clear Buy-click lift — do **not** run two full $200 burns blind.  
2. **Objective:** CPC (clicks) first; land `/pricing` or Jetstream compare.  
3. **Kill at ~$50–75** if clicks are tourist / non-Laravel or zero pricing engagement.  
4. **Topic hints:** Laravel SaaS starter, Jetstream alternative, Laravel teams + Stripe, Composer SaaS kit — keep narrow.  
5. **Reality check:** ads mostly hit Free/Go ChatGPT users; Plus/Pro/Business are ad-free. CPC often ~$3–5+ → Solo $99 needs real conversion discipline.  
6. **Measurement:** OpenAI pixel later if we keep spend; first test can be GA4 landing + Buy clicks.

### Tier W — Warm / relationship (not spray)

| Channel | Decision |
| --- | --- |
| Reply every inbound / GitHub issue with pricing honesty | **Always** |
| **Personal agency notes 10–20/week** (`outreach.csv`) | **Do now — was under-executed.** Not purchased-list cold; short founder notes to Laravel studios that ship client SaaS |
| Agency / studio warm intros (people who already know QBF) | **Do** — human opens 3–5 doors when ORDER’d |
| LinkedIn personal (agency angle) | **Do lightly** when session allows — was deferred too hard |
| Affiliate / creator cut (10–20%?) | **Explore in Phase C** if volume exists |
| Conference / meetup booth | **Skip** 90d (time + cost) |

### Tier C — Content / SEO (underweighted until now — **raise**)

| Channel | Fit | Decision |
| --- | --- | --- |
| Compare pages (Jetstream/Spark/…) | High intent | **Do** — already live; amplify |
| Install / “Composer kit not scaffold” guides | High | **Do** — ship 1 long piece / 2 weeks |
| Problem posts (teams+Stripe on team, BSL honesty) | Med–high | **Do** on electrik.dev/blog or docs |
| Guest posts on Laravel blogs | Med | **Do** outreach Phase B/C (unpaid first) |
| YouTube long-form | High LTV | **Defer** (time) unless Clipy shorts reuse |
| “Top 10 boilerplates” roundup bait | Med | **Maybe** — honest matrix only, no fake rankings |

**Cadence add:** every other Wednesday can be a **content ship** instead of a social ship (still max one marketing ship/week).

### Tier D — Deals / marketplaces

| Channel | Fit | Decision |
| --- | --- | --- |
| **AppSumo / LTD marketplaces** | Bad early | **Skip 90 days.** Wrong buyer (deal hunters), support load, trains “Electrik = cheap dump,” fights BSL + $99/$149 story. Revisit only if Solo never sells *and* we design a strict limited LTD with clear non-goals. |
| Gumroad / Lemon stacks | Low–med | **Skip** — checkout already on Dodo + site |
| Boilerplate directories (free listing) | Med | **Do** (already on menu) |

### Tier X — Black / gray (explored so we don’t pretend they don’t exist)

| Tactic | What it is | Decision |
| --- | --- | --- |
| **Black hat** — fake PH upvotes, fake reviews, PBNs, scraped/purchased blast, cloaking, botnet comments | Short spike, long ban + trust death for a Composer package | **Never.** Electrik sells *trust* (BSL, install, license). One ban on Packagist/GitHub/PH ends the money path. |
| **Gray — engagement pods / fake social proof** | Inflated vanity | **Never** |
| **Gray — mass low-quality directory spray** | Thin links | **Cap** — only curated lists in tracker; no 200-site dump |
| **Gray — aggressive but honest SEO** (compare pages, “vs” intent, programmatic honest matrices) | Common, legal, fits kit | **Do** — this *is* gray-ish and already in plan |
| **Gray — soft founder cross-promo** to QBF warm (#7) | Purpose-adjacent | **Maybe once** — already allowed |
| **Gray — purchased CTO blast + burner domain** | Classic cold email farm | **Never for Electrik** (see list #4) |

**Why the current menu isn’t “only what I like”:** time-boxed (~5h/week) around Laravel intent, non-poisoning infra, and killable bets. Thorough pass (2026-09-04): black hat / purchased blast / early AppSumo still out on EV; **content + personal agency outreach were underweighted** — raised. Full memo: [`growth-strategy-memo.md`](growth-strategy-memo.md).

---

## Recommended sequence (agent will follow)

```
A1 money path
  → free: licenses-live X + Listmonk campaign 18 + Made with Laravel + Laravel Daily package submit
  → free: Jetstream compare amplify + install Clipy thread
  → outbound: 10–20 personal agency notes/week (Tier W)
  → content: 1 SEO/problem post (Tier C) interleaved with social ships
  → PH soft relaunch
  → measure Buy clicks 2 weeks
  → IF volume weak BUT clicks exist → Google Search ≤$200 (kill-switch) — Daily $200 only as P2
  → IF Search converts → consider Daily mention or $1k dedicated video
  → IF no clicks → no spend; fix site/message — still no AppSumo / black hat / purchased blast
  → IF day-60 paid ≈ 0 after above → revisit capped AppSumo Select as last resort only
```

---

## Explicitly not the plan

Relying only on “people stumble on Packagist.”  
Buying LN Diamond to feel busy.  
Copying ShipFast’s Twitter lottery (audience we don’t have).  
Ads before a verified purchase path.  
AppSumo LTD to force volume.  
Black-hat growth (fake votes, fake reviews, burner-domain cold spray).

---

## Open items (agent-owned next)

1. ~~A1 Solo self-buy~~ — green 2026-09-04  
2. ~~Made with Laravel + Laravel Daily package~~ — LD already under review; MwL submitted 2026-09-04  
3. Check whether LN $500 sponsored-post sale is still live before any P1 spend.  
4. ~~Send Listmonk campaign 18~~ — finished 79 sent 2026-09-04
5. Next free ships: install Clipy thread + Jetstream compare amplify (Phase B weeks 2–3)
6. **Raise Tier C:** outline next electrik.dev content piece (Composer-kit vs scaffold / teams+Stripe) — ship within 2 weeks
7. **Raise Tier W:** start agency outreach rhythm 10–20/week (`outreach.csv`) — thorough pass correction
8. Deep strategy locked: [`growth-strategy-memo.md`](growth-strategy-memo.md) + canvas `electrik-growth-strategy`
