---
title: "AI & agents"
description: "Use Cursor, Claude, and other coding agents with Electrik — llms.txt, skills, and package-safe rules."
sidebar_order: 45
sidebar_section: "Getting Started"
---

# AI & agents

Electrik rides the **AI-first starter** trend the Laravel way: a Composer package agents can extend without treating your app as a disposable scaffold dump.

We are **not** a prompt-to-app builder (Lovable / Bolt). We are the shell you keep when Cursor or Claude Code writes the product on top.

## Why this model fits agents

| Scaffold dump (Jetstream-style) | Electrik package |
| --- | --- |
| Auth/teams/billing copied into `App\` | Stays under `Electrik\` |
| Agent edits vendor-ish files you now own forever | Agent extends via config, your `App\`, published views when needed |
| Upstream upgrades = merge pain | `composer update` on the major line |

Point agents at the docs index before they invent routes or dump Jetstream patterns.

## AGENTS.md

The package ships [`AGENTS.md`](https://github.com/electrikhq/electrik/blob/main/AGENTS.md) at the repo root (also under `vendor/electrik/electrik/AGENTS.md` after install). Coding agents should read it first: install sequence, package-vs-`App\` boundary, Stripe-on-the-team rule, and what not to invent.

Slate has its own [`AGENTS.md`](https://github.com/electrikhq/slate/blob/main/AGENTS.md) for Blade UI.

## llms.txt

- [/llms.txt](/llms.txt) — curated index  
- [/llms-full.txt](/llms-full.txt) — index + concatenated markdown  
- Per-page markdown: append `.md` (example: [/docs/getting-started/introduction.md](/docs/getting-started/introduction.md))

Prefer specific `.md` URLs over the full dump.

## Cursor skill

Copy **electrik-install** from the Electrik repo (`.cursor/skills/electrik-install`) into your app’s `.cursor/skills/` so agents load install + Slate guidance when relevant.

Slate UI has its own agent surface: [slate.electrik.dev/docs/ai](https://slate.electrik.dev/docs/ai) (`llms.txt`, MCP, Cursor rule).

## Prompt starter

```text
Install and customize Electrik 5.x as a Composer package (not a scaffold dump).
Read AGENTS.md in the Electrik package and https://electrik.dev/llms.txt first, then installation + architecture docs.
Keep auth/teams/billing in the Electrik namespace; put product code in App\.
UI: Electrik Slate anonymous components — see https://slate.electrik.dev/llms.txt (MCP: https://mcp.slate.electrik.dev)
```

## What we are not shipping (on purpose)

- Built-in LLM provider swap / AI chat product features (build those in `App\` if your SaaS needs them)
- Prompt-to-app generation of the whole product
- Competing with Next.js indie kits on their stack

## Related

- [Introduction](/docs/getting-started/introduction)
- [Installation](/docs/getting-started/installation)
- [Architecture](/docs/getting-started/architecture)
- [Slate AI & MCP](https://slate.electrik.dev/docs/ai)
- [Pricing](/pricing)
