<?php
$page_title = "Beranda";
// Override base_path: dashboardinfor.php berada di root INFORMATIKA/
// sehingga assets ada di assets/ (tanpa ../)
$base_path = '';
include 'includes/header.php';
?>

<style>
/* ============================================================
   DASHBOARD INFORMATIKA — PREMIUM REDESIGN
   ============================================================ */

/* ---- Reading Progress ---- */
.reading-bar {
    position: fixed; top: 70px; left: 0; right: 0;
    height: 3px; background: var(--border-color); z-index: 999;
}
.reading-bar__fill {
    height: 100%; width: 0%;
    background: var(--gradient-primary);
    transition: width 0.1s linear;
}

/* ---- HERO ---- */
.db-hero {
    background: var(--gradient-hero);
    min-height: 90vh;
    display: flex; align-items: center;
    position: relative; overflow: hidden;
    padding: 5rem 0 4rem;
}
.db-hero::before {
    content: '';
    position: absolute; inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.db-orbs { position: absolute; inset: 0; pointer-events: none; }
.db-orb {
    position: absolute; border-radius: 50%;
    filter: blur(80px); opacity: 0.4;
    animation: dbFloat 8s ease-in-out infinite;
}
.db-orb-1 { width: 550px; height: 550px; background: radial-gradient(circle,#3b82f6,transparent); top:-120px; right:-100px; animation-delay:0s; }
.db-orb-2 { width: 420px; height: 420px; background: radial-gradient(circle,#8b5cf6,transparent); bottom:-80px; left:5%; animation-delay:3s; }
.db-orb-3 { width: 300px; height: 300px; background: radial-gradient(circle,#06b6d4,transparent); top:35%; left:42%; animation-delay:6s; }
@keyframes dbFloat {
    0%,100% { transform: translate(0,0) scale(1); }
    33%      { transform: translate(25px,-25px) scale(1.06); }
    66%      { transform: translate(-18px,18px) scale(0.94); }
}

.db-hero-inner {
    max-width: 1280px; margin: 0 auto; padding: 0 1.5rem;
    position: relative; z-index: 1;
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 4rem; align-items: center;
}

/* Hero Left */
.db-hero-badge {
    display: inline-flex; align-items: center; gap:.5rem;
    background: rgba(255,255,255,0.12);
    border: 1px solid rgba(255,255,255,0.22);
    color: rgba(255,255,255,.9);
    padding: .4rem 1.1rem; border-radius: 999px;
    font-size: .78rem; font-weight: 600;
    margin-bottom: 1.5rem;
    backdrop-filter: blur(10px);
    animation: fadeInDown .7s ease both;
}
.db-hero-badge span {
    width: 7px; height: 7px; border-radius: 50%;
    background: #4ade80;
    box-shadow: 0 0 6px #4ade80;
    animation: pulse 2s ease infinite;
}
@keyframes pulse { 0%,100%{opacity:1;} 50%{opacity:.4;} }

.db-hero-title {
    font-size: clamp(2.2rem, 5vw, 3.8rem);
    font-weight: 900; line-height: 1.12;
    letter-spacing: -.035em; color: #fff;
    margin-bottom: 1.25rem;
    animation: fadeInUp .7s ease .1s both;
}
.db-hero-title .accent-grad {
    background: linear-gradient(135deg,#60a5fa,#a78bfa);
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    background-clip: text;
}
.db-hero-desc {
    font-size: 1.08rem; color: rgba(255,255,255,.72);
    line-height: 1.8; margin-bottom: 2rem;
    animation: fadeInUp .7s ease .2s both;
}
.db-hero-btns {
    display: flex; gap: 1rem; flex-wrap: wrap;
    animation: fadeInUp .7s ease .3s both;
}

/* Hero Stats */
.db-hero-stats {
    display: flex; gap: 0; margin-top: 3rem;
    background: rgba(255,255,255,.06);
    border: 1px solid rgba(255,255,255,.12);
    border-radius: 16px; overflow: hidden;
    backdrop-filter: blur(8px);
    animation: fadeInUp .7s ease .4s both;
}
.db-stat {
    flex: 1; padding: 1.25rem 1.5rem;
    text-align: center; position: relative;
}
.db-stat + .db-stat::before {
    content: '';
    position: absolute; left: 0; top: 20%; bottom: 20%;
    width: 1px; background: rgba(255,255,255,.15);
}
.db-stat-val {
    font-size: 1.8rem; font-weight: 800; color: #fff;
    line-height: 1;
}
.db-stat-lbl {
    font-size: .72rem; color: rgba(255,255,255,.55);
    text-transform: uppercase; letter-spacing: .06em;
    margin-top: .35rem;
}

/* Hero Right — Floating Cards */
.db-hero-visual {
    display: flex; justify-content: center; align-items: center;
    animation: fadeInRight .7s ease .25s both;
}
.db-cards-stack {
    position: relative; width: 380px; height: 340px;
}
.db-float-card {
    position: absolute;
    background: rgba(255,255,255,.1);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255,255,255,.2);
    border-radius: 18px; padding: 1.2rem 1.5rem;
    color: #fff;
    display: flex; align-items: center; gap: 1rem;
    box-shadow: 0 8px 32px rgba(0,0,0,.25);
}
.db-float-card:nth-child(1) { top:0;    left:0;   width:240px; animation: fc1 4s ease-in-out infinite; }
.db-float-card:nth-child(2) { top:105px; right:0; width:220px; animation: fc2 4s ease-in-out 1.5s infinite; }
.db-float-card:nth-child(3) { bottom:0; left:30px;width:230px; animation: fc1 4s ease-in-out 3s infinite; }
@keyframes fc1 { 0%,100%{transform:translateY(0);} 50%{transform:translateY(-10px);} }
@keyframes fc2 { 0%,100%{transform:translateY(0);} 50%{transform:translateY(10px);} }
.db-fc-icon {
    width: 44px; height: 44px; border-radius: 12px;
    background: rgba(255,255,255,.15);
    display: flex; align-items: center; justify-content: center;
    font-size: 1.2rem; flex-shrink: 0;
}
.db-fc-info strong { display:block; font-size:.85rem; font-weight:600; }
.db-fc-info small  { font-size:.73rem; opacity:.65; }

/* Scroll hint */
.db-scroll-hint {
    position: absolute; bottom: 2rem; left: 50%;
    transform: translateX(-50%);
    display: flex; flex-direction: column; align-items: center; gap:.35rem;
    color: rgba(255,255,255,.45); font-size:.78rem;
    animation: bounce 2.5s ease-in-out infinite;
}
@keyframes bounce {
    0%,100%{transform:translateX(-50%) translateY(0);}
    50%{transform:translateX(-50%) translateY(8px);}
}

/* ============================================================
   MODUL MATERI SECTION
   ============================================================ */
.db-modul-section {
    padding: 6rem 0;
    background: var(--bg-secondary);
    position: relative;
}
.db-modul-section::before {
    content: '';
    position: absolute; top: 0; left: 0; right: 0;
    height: 1px;
    background: linear-gradient(90deg,transparent,var(--primary-400),transparent);
    opacity: .3;
}

.db-container {
    max-width: 1280px; margin: 0 auto; padding: 0 1.5rem;
}

.db-sec-header { text-align: center; margin-bottom: 4rem; }
.db-sec-tag {
    display: inline-flex; align-items: center; gap:.5rem;
    background: var(--gradient-card);
    border: 1px solid var(--primary-200);
    color: var(--primary-600);
    padding: .35rem 1rem; border-radius: 999px;
    font-size: .75rem; font-weight: 700;
    letter-spacing: .08em; text-transform: uppercase;
    margin-bottom: 1rem;
}
[data-theme="dark"] .db-sec-tag { border-color: rgba(37,99,235,.35); }
.db-sec-title {
    font-size: clamp(1.75rem, 4vw, 2.8rem);
    font-weight: 800; letter-spacing: -.03em;
    margin-bottom: .85rem;
}
.db-sec-title .hl {
    background: var(--gradient-primary);
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    background-clip: text;
}
.db-sec-desc { font-size: 1.05rem; color: var(--text-secondary); max-width: 580px; margin: 0 auto; line-height: 1.8; }

/* Cards Grid */
.db-modul-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}

.db-modul-card {
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 24px;
    padding: 2.25rem;
    box-shadow: var(--card-shadow);
    transition: all .35s cubic-bezier(.165,.84,.44,1);
    position: relative; overflow: hidden;
    display: flex; flex-direction: column; gap: 1.1rem;
}
.db-modul-card::before {
    content: ''; position: absolute;
    top: 0; left: 0; right: 0; height: 3px;
    background: var(--gradient-primary);
    transform: scaleX(0); transform-origin: left;
    transition: transform .4s ease;
}
.db-modul-card:hover::before { transform: scaleX(1); }
.db-modul-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 24px 48px -12px rgba(37,99,235,.2);
    border-color: var(--primary-200);
}
[data-theme="dark"] .db-modul-card:hover {
    border-color: rgba(37,99,235,.4);
    box-shadow: 0 24px 48px -12px rgba(37,99,235,.35);
}

/* Card number badge */
.db-card-num {
    position: absolute; top: 1.5rem; right: 1.75rem;
    font-size: 4rem; font-weight: 900; line-height: 1;
    opacity: .05; pointer-events: none;
    font-family: var(--font-heading);
}

.db-card-icon {
    width: 66px; height: 66px; border-radius: 18px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.7rem; flex-shrink: 0;
    transition: all .35s ease;
}
.db-card-icon.blue   { background: linear-gradient(135deg,rgba(37,99,235,.12),rgba(99,102,241,.12)); border: 1px solid rgba(37,99,235,.25); color: var(--primary-600); }
.db-card-icon.purple { background: linear-gradient(135deg,rgba(124,58,237,.12),rgba(167,139,250,.12)); border: 1px solid rgba(124,58,237,.25); color: #7c3aed; }
.db-card-icon.cyan   { background: linear-gradient(135deg,rgba(6,182,212,.12),rgba(34,211,238,.12)); border: 1px solid rgba(6,182,212,.25); color: #0891b2; }

.db-modul-card:hover .db-card-icon {
    transform: scale(1.08) rotate(-5deg);
}
.db-modul-card:hover .db-card-icon.blue   { background: var(--gradient-primary); color:#fff; border-color:transparent; box-shadow:0 8px 20px rgba(37,99,235,.4); }
.db-modul-card:hover .db-card-icon.purple { background: linear-gradient(135deg,#7c3aed,#a78bfa); color:#fff; border-color:transparent; box-shadow:0 8px 20px rgba(124,58,237,.4); }
.db-modul-card:hover .db-card-icon.cyan   { background: linear-gradient(135deg,#0891b2,#06b6d4); color:#fff; border-color:transparent; box-shadow:0 8px 20px rgba(6,182,212,.4); }

.db-card-badges { display:flex; gap:.45rem; flex-wrap:wrap; }
.db-badge {
    display: inline-flex; align-items: center; gap:.3rem;
    padding: .22rem .7rem; border-radius: 999px;
    font-size: .72rem; font-weight: 700;
}
.db-badge.b-blue   { background:rgba(37,99,235,.1);  color:var(--primary-600); border:1px solid rgba(37,99,235,.2); }
.db-badge.b-purple { background:rgba(124,58,237,.1); color:#7c3aed; border:1px solid rgba(124,58,237,.2); }
.db-badge.b-cyan   { background:rgba(6,182,212,.1);  color:#0891b2; border:1px solid rgba(6,182,212,.2); }
.db-badge.b-green  { background:rgba(5,150,105,.1);  color:#059669; border:1px solid rgba(5,150,105,.2); }
.db-badge.b-orange { background:rgba(234,88,12,.1);  color:#ea580c; border:1px solid rgba(234,88,12,.2); }

[data-theme="dark"] .db-badge.b-blue   { background:rgba(37,99,235,.18);  color:#93c5fd; }
[data-theme="dark"] .db-badge.b-purple { background:rgba(124,58,237,.18); color:#c4b5fd; }
[data-theme="dark"] .db-badge.b-cyan   { background:rgba(6,182,212,.18);  color:#67e8f9; }
[data-theme="dark"] .db-badge.b-green  { background:rgba(5,150,105,.18);  color:#6ee7b7; }
[data-theme="dark"] .db-badge.b-orange { background:rgba(234,88,12,.18);  color:#fca5a1; }

.db-card-title { font-size: 1.25rem; font-weight: 700; color: var(--text-primary); }
.db-card-desc  { font-size: .9rem; color: var(--text-secondary); line-height: 1.75; flex: 1; }

.db-card-topics {
    display: flex; flex-direction: column; gap: .45rem;
}
.db-card-topic {
    display: flex; align-items: center; gap: .6rem;
    font-size: .83rem; color: var(--text-secondary);
}
.db-card-topic i { color: var(--primary-500); font-size: .7rem; flex-shrink: 0; }

.db-card-footer {
    display: flex; align-items: center; justify-content: space-between;
    padding-top: 1rem; border-top: 1px solid var(--border-color);
    margin-top: auto;
}
.db-card-time { font-size: .78rem; color: var(--text-muted); display:flex;align-items:center;gap:.4rem; }
.db-card-btn {
    display: inline-flex; align-items: center; gap: .45rem;
    padding: .5rem 1.2rem; border-radius: 999px;
    font-size: .82rem; font-weight: 700;
    transition: all .25s ease; text-decoration: none;
}
.db-card-btn.btn-blue   { background:var(--gradient-primary); color:#fff; box-shadow:0 4px 14px rgba(37,99,235,.35); }
.db-card-btn.btn-purple { background:linear-gradient(135deg,#7c3aed,#a78bfa); color:#fff; box-shadow:0 4px 14px rgba(124,58,237,.35); }
.db-card-btn.btn-cyan   { background:linear-gradient(135deg,#0891b2,#06b6d4); color:#fff; box-shadow:0 4px 14px rgba(6,182,212,.35); }
.db-card-btn:hover { transform: translateY(-2px); filter: brightness(1.1); }

/* ============================================================
   CARA BELAJAR SECTION
   ============================================================ */
.db-steps-section {
    padding: 6rem 0;
    background: var(--bg-primary);
}
.db-steps-grid {
    display: grid; grid-template-columns: repeat(3,1fr);
    gap: 1.5rem; position: relative;
}
.db-steps-grid::before {
    content: '';
    position: absolute;
    top: 36px; left: calc(16.67% + 1rem); right: calc(16.67% + 1rem);
    height: 2px;
    background: linear-gradient(90deg,var(--primary-400),var(--purple-500));
    opacity: .3;
}
.db-step {
    display: flex; flex-direction: column; align-items: center;
    text-align: center; padding: 2rem 1.5rem;
    background: var(--card-bg); border: 1px solid var(--border-color);
    border-radius: 20px; box-shadow: var(--card-shadow);
    transition: all .3s ease; position: relative;
}
.db-step:hover { transform: translateY(-6px); box-shadow: var(--card-shadow-hover); border-color: var(--primary-200); }
[data-theme="dark"] .db-step:hover { border-color: rgba(37,99,235,.4); }

.db-step-num {
    position: absolute; top: -16px;
    width: 32px; height: 32px; border-radius: 50%;
    background: var(--gradient-primary);
    color: #fff; font-weight: 800; font-size: .85rem;
    display: flex; align-items: center; justify-content: center;
    box-shadow: 0 4px 12px rgba(37,99,235,.35);
}
.db-step-icon {
    width: 72px; height: 72px; border-radius: 22px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.75rem; margin: .5rem 0 1.25rem; margin-top: 1rem;
    transition: all .3s ease;
}
.db-step:nth-child(1) .db-step-icon { background:linear-gradient(135deg,rgba(37,99,235,.12),rgba(99,102,241,.1)); color:var(--primary-600); }
.db-step:nth-child(2) .db-step-icon { background:linear-gradient(135deg,rgba(124,58,237,.12),rgba(167,139,250,.1)); color:#7c3aed; }
.db-step:nth-child(3) .db-step-icon { background:linear-gradient(135deg,rgba(5,150,105,.12),rgba(52,211,153,.1)); color:#059669; }
.db-step:hover .db-step-icon { transform: scale(1.1) rotate(-5deg); }
.db-step:hover:nth-child(1) .db-step-icon { background: var(--gradient-primary); color:#fff; box-shadow:0 8px 20px rgba(37,99,235,.35); }
.db-step:hover:nth-child(2) .db-step-icon { background: linear-gradient(135deg,#7c3aed,#a78bfa); color:#fff; box-shadow:0 8px 20px rgba(124,58,237,.35); }
.db-step:hover:nth-child(3) .db-step-icon { background: linear-gradient(135deg,#059669,#34d399); color:#fff; box-shadow:0 8px 20px rgba(5,150,105,.35); }

.db-step h3 { font-size: 1.05rem; font-weight: 700; margin-bottom: .65rem; }
.db-step p  { font-size: .875rem; color: var(--text-secondary); line-height: 1.7; }

/* ============================================================
   QUIZ SECTION
   ============================================================ */
.db-quiz-section {
    padding: 6rem 0;
    background: var(--bg-secondary);
    position: relative;
}
.db-quiz-grid {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 4rem; align-items: center;
}
.db-quiz-features { display: flex; flex-direction: column; gap: 1.25rem; }
.db-quiz-feat {
    display: flex; align-items: flex-start; gap: 1rem;
    padding: 1.25rem;
    background: var(--card-bg); border: 1px solid var(--border-color);
    border-radius: 16px; box-shadow: var(--card-shadow);
    transition: all .3s ease;
}
.db-quiz-feat:hover { border-color: var(--primary-300); box-shadow: var(--card-shadow-hover); transform: translateX(4px); }
[data-theme="dark"] .db-quiz-feat:hover { border-color: rgba(37,99,235,.4); }
.db-quiz-feat-ico {
    width: 48px; height: 48px; border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.15rem; flex-shrink: 0;
}
.db-quiz-feat strong { display:block; font-size:.93rem; font-weight:700; margin-bottom:.25rem; }
.db-quiz-feat p { font-size:.83rem; color:var(--text-secondary); margin:0; line-height:1.5; }

/* Mock Quiz Card */
.db-quiz-mock-wrap { display: flex; justify-content: center; }
.db-quiz-mock {
    background: var(--card-bg); border: 1px solid var(--border-color);
    border-radius: 24px; padding: 2rem;
    box-shadow: 0 24px 60px rgba(37,99,235,.12);
    width: 100%; max-width: 420px;
    transform: perspective(1000px) rotateY(-6deg) rotateX(2deg);
    transition: transform .4s ease;
}
.db-quiz-mock:hover { transform: perspective(1000px) rotateY(0) rotateX(0); }
.dbqm-bar-row { display:flex; justify-content:space-between; font-size:.78rem; color:var(--text-muted); font-weight:600; margin-bottom:.5rem; }
.dbqm-bar { height: 5px; background: var(--border-color); border-radius:999px; overflow:hidden; margin-bottom:1rem; }
.dbqm-bar-fill { height:100%; width:20%; background:var(--gradient-primary); border-radius:999px; }
.dbqm-cat {
    display:inline-flex; padding:.25rem .8rem;
    background:linear-gradient(135deg,rgba(37,99,235,.1),rgba(124,58,237,.07));
    border:1px solid rgba(37,99,235,.2); color:var(--primary-600);
    border-radius:999px; font-size:.7rem; font-weight:700;
    margin-bottom:.875rem;
}
.dbqm-q { font-size:.875rem; font-weight:700; line-height:1.55; margin-bottom:1rem; color:var(--text-primary); }
.dbqm-opts { display:flex; flex-direction:column; gap:.5rem; margin-bottom:1rem; }
.dbqm-opt {
    display:flex; align-items:center; gap:.65rem;
    padding:.6rem .875rem; border-radius:10px;
    border:1.5px solid var(--border-color);
    font-size:.8rem;
}
.dbqm-ltr {
    width:26px; height:26px; border-radius:7px;
    display:flex; align-items:center; justify-content:center;
    font-weight:800; font-size:.7rem; flex-shrink:0;
    background:var(--bg-tertiary); color:var(--text-muted);
}
.dbqm-correct { border-color:#059669; background:rgba(5,150,105,.08); color:#059669; font-weight:600; }
.dbqm-correct .dbqm-ltr { background:#059669; color:#fff; }
.dbqm-wrong   { border-color:#dc2626; background:rgba(220,38,38,.07); color:#dc2626; }
.dbqm-wrong   .dbqm-ltr { background:#dc2626; color:#fff; }
.dbqm-dim     { opacity:.45; }
.dbqm-tip {
    background:rgba(5,150,105,.08); border:1px solid rgba(5,150,105,.2);
    border-radius:10px; padding:.65rem .9rem;
    font-size:.77rem; color:#059669; line-height:1.55;
    display:flex; align-items:flex-start; gap:.5rem;
}
.dbqm-tip i { flex-shrink:0; margin-top:.1rem; }

/* ============================================================
   CTA BANNER
   ============================================================ */
.db-cta {
    padding: 5rem 0;
    background: var(--gradient-hero);
    position: relative; overflow: hidden;
}
.db-cta::before {
    content:'';
    position:absolute; top:-80px; right:-80px;
    width:350px; height:350px; border-radius:50%;
    background:rgba(255,255,255,.04);
}
.db-cta::after {
    content:'';
    position:absolute; bottom:-60px; left:-60px;
    width:250px; height:250px; border-radius:50%;
    background:rgba(255,255,255,.04);
}
.db-cta-inner {
    position: relative; z-index:1;
    display: flex; align-items:center; justify-content:space-between;
    gap: 2rem; flex-wrap:wrap;
}
.db-cta-text { color:#fff; max-width: 580px; }
.db-cta-text h2 {
    font-size: clamp(1.6rem,3vw,2.3rem);
    font-weight:800; margin-bottom:.75rem; letter-spacing:-.02em;
}
.db-cta-text p { color:rgba(255,255,255,.72); font-size:1rem; line-height:1.75; }
.db-cta-btn {
    background:#fff; color:var(--primary-700);
    font-weight:700; padding:1rem 2.25rem;
    border-radius:999px; font-size:1rem;
    display:inline-flex; align-items:center; gap:.6rem;
    box-shadow:0 8px 24px rgba(0,0,0,.2);
    transition:all .25s ease; white-space:nowrap; flex-shrink:0;
    text-decoration:none;
}
.db-cta-btn:hover { transform:translateY(-3px); box-shadow:0 14px 32px rgba(0,0,0,.25); }

/* ============================================================
   ANIMATIONS
   ============================================================ */
@keyframes fadeInDown {
    from { opacity:0; transform:translateY(-16px); }
    to   { opacity:1; transform:translateY(0); }
}
@keyframes fadeInUp {
    from { opacity:0; transform:translateY(20px); }
    to   { opacity:1; transform:translateY(0); }
}
@keyframes fadeInRight {
    from { opacity:0; transform:translateX(30px); }
    to   { opacity:1; transform:translateX(0); }
}

/* Reveal on scroll */
.db-reveal {
    opacity: 0; transform: translateY(28px);
    transition: opacity .6s ease, transform .6s ease;
}
.db-reveal.visible { opacity:1; transform:translateY(0); }
.db-reveal-d1 { transition-delay:.1s; }
.db-reveal-d2 { transition-delay:.2s; }
.db-reveal-d3 { transition-delay:.3s; }

/* ============================================================
   RESPONSIVE
   ============================================================ */
@media (max-width: 1024px) {
    .db-hero-inner { grid-template-columns:1fr; gap:2.5rem; }
    .db-hero-visual { display:none; }
    .db-modul-grid { grid-template-columns:1fr 1fr; }
    .db-quiz-grid  { grid-template-columns:1fr; gap:2.5rem; }
}
@media (max-width: 768px) {
    .db-modul-grid { grid-template-columns:1fr; }
    .db-steps-grid { grid-template-columns:1fr; }
    .db-steps-grid::before { display:none; }
    .db-hero-stats { flex-direction:column; gap:0; }
    .db-stat { padding:.875rem 1rem; }
    .db-stat + .db-stat::before { top:0; bottom:auto; left:20%; right:20%; width:auto; height:1px; }
    .db-cta-inner { flex-direction:column; text-align:center; }
}
</style>

<!-- Reading Progress -->
<div class="reading-bar"><div class="reading-bar__fill" id="readingFill"></div></div>

<!-- ====== HERO ====== -->
<section class="db-hero" id="beranda">
    <div class="db-orbs">
        <div class="db-orb db-orb-1"></div>
        <div class="db-orb db-orb-2"></div>
        <div class="db-orb db-orb-3"></div>
    </div>

    <div class="db-hero-inner">
        <!-- Kiri -->
        <div class="db-hero-content">
            <div class="db-hero-badge">
                <span></span>
                Platform Pembelajaran Informatika
            </div>

            <h1 class="db-hero-title">
                Belajar <span class="accent-grad">Informatika</span><br>
                Lebih Mudah &amp; Menyenangkan
            </h1>

            <p class="db-hero-desc">
                Temukan materi Informatika yang lengkap, interaktif, dan mudah dipahami.
                Dari Literasi Digital hingga Jaringan Komputer — semua tersedia di sini!
            </p>

            <div class="db-hero-btns">
                <a href="#materi" class="btn btn-primary btn-lg" id="btn-mulai-belajar">
                    <i class="fas fa-rocket"></i> Mulai Belajar
                </a>
                <a href="#cara-belajar" class="btn btn-lg"
                   style="background:rgba(255,255,255,0.12);color:#fff;border:1px solid rgba(255,255,255,0.25);backdrop-filter:blur(10px);">
                    <i class="fas fa-play-circle"></i> Cara Belajar
                </a>
            </div>

            <div class="db-hero-stats">
                <div class="db-stat">
                    <div class="db-stat-val" data-count="3">3</div>
                    <div class="db-stat-lbl">Modul Materi</div>
                </div>
                <div class="db-stat">
                    <div class="db-stat-val" data-count="15">15+</div>
                    <div class="db-stat-lbl">Sub Topik</div>
                </div>
                <div class="db-stat">
                    <div class="db-stat-val" data-count="100">100%</div>
                    <div class="db-stat-lbl">Gratis</div>
                </div>
            </div>
        </div>

        <!-- Kanan — Floating Cards -->
        <div class="db-hero-visual">
            <div class="db-cards-stack">
                <div class="db-float-card">
                    <div class="db-fc-icon"><i class="fas fa-search"></i></div>
                    <div class="db-fc-info">
                        <strong>Literasi Digital</strong>
                        <small>&amp; Mesin Pencari</small>
                    </div>
                </div>
                <div class="db-float-card">
                    <div class="db-fc-icon"><i class="fas fa-file-word"></i></div>
                    <div class="db-fc-info">
                        <strong>Perangkat Digital</strong>
                        <small>MS Office Suite</small>
                    </div>
                </div>
                <div class="db-float-card">
                    <div class="db-fc-icon"><i class="fas fa-network-wired"></i></div>
                    <div class="db-fc-info">
                        <strong>Jaringan Komputer</strong>
                        <small>&amp; Internet</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="db-scroll-hint">
        <i class="fas fa-chevron-down"></i>
        <span>Scroll ke bawah</span>
    </div>
</section>

<!-- ====== MODUL MATERI ====== -->
<section class="db-modul-section" id="materi">
    <div class="db-container">

        <div class="db-sec-header db-reveal">
            <div class="db-sec-tag"><i class="fas fa-book-open"></i> Materi Pembelajaran</div>
            <h2 class="db-sec-title">Pilih <span class="hl">Modul</span> yang Ingin Dipelajari</h2>
            <p class="db-sec-desc">Tiga modul utama dirancang khusus agar mudah dipahami oleh siswa. Klik salah satu modul untuk mulai belajar!</p>
        </div>

        <div class="db-modul-grid">

            <!-- Modul 1: Literasi Digital -->
            <div class="db-modul-card db-reveal" id="card-literasi">
                <div class="db-card-num">01</div>
                <div class="db-card-icon blue"><i class="fas fa-search"></i></div>
                <div class="db-card-badges">
                    <span class="db-badge b-blue"><i class="fas fa-tag"></i> Modul 1</span>
                    <span class="db-badge b-green"><i class="fas fa-signal"></i> Dasar</span>
                    <span class="db-badge b-orange"><i class="fas fa-clock"></i> ~30 mnt</span>
                </div>
                <h3 class="db-card-title">Literasi Digital &amp; Mesin Pencari</h3>
                <p class="db-card-desc">Pelajari cara menggunakan internet dengan bijak, memahami informasi digital, dan memanfaatkan mesin pencari secara efektif dan efisien.</p>
                <ul class="db-card-topics">
                    <li class="db-card-topic"><i class="fas fa-check-circle"></i> Apa itu Literasi Digital?</li>
                    <li class="db-card-topic"><i class="fas fa-check-circle"></i> Jenis-jenis Mesin Pencari</li>
                    <li class="db-card-topic"><i class="fas fa-check-circle"></i> Cara Kerja Search Engine</li>
                    <li class="db-card-topic"><i class="fas fa-check-circle"></i> Mengenali Informasi Hoaks</li>
                </ul>
                <div class="db-card-footer">
                    <div class="db-card-time"><i class="fas fa-clock"></i> ~30 menit</div>
                    <a href="materi/literasi-digital.php" class="db-card-btn btn-blue" id="btn-literasi">
                        Pelajari <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Modul 2: Perangkat Teknologi -->
            <div class="db-modul-card db-reveal db-reveal-d1" id="card-perangkat">
                <div class="db-card-num">02</div>
                <div class="db-card-icon purple"><i class="fas fa-desktop"></i></div>
                <div class="db-card-badges">
                    <span class="db-badge b-purple"><i class="fas fa-tag"></i> Modul 2</span>
                    <span class="db-badge b-orange"><i class="fas fa-tools"></i> Praktis</span>
                    <span class="db-badge b-orange"><i class="fas fa-clock"></i> ~45 mnt</span>
                </div>
                <h3 class="db-card-title">Perangkat Teknologi Digital</h3>
                <p class="db-card-desc">Kuasai aplikasi Microsoft Office yang paling sering digunakan: Word untuk dokumen, Excel untuk data, dan PowerPoint untuk presentasi profesional.</p>
                <ul class="db-card-topics">
                    <li class="db-card-topic"><i class="fas fa-check-circle"></i> Microsoft Word — Dokumen</li>
                    <li class="db-card-topic"><i class="fas fa-check-circle"></i> Microsoft Excel — Spreadsheet</li>
                    <li class="db-card-topic"><i class="fas fa-check-circle"></i> Microsoft PowerPoint</li>
                    <li class="db-card-topic"><i class="fas fa-check-circle"></i> Tips Presentasi Efektif</li>
                </ul>
                <div class="db-card-footer">
                    <div class="db-card-time"><i class="fas fa-clock"></i> ~45 menit</div>
                    <a href="materi/perangkat-teknologi.php" class="db-card-btn btn-purple" id="btn-perangkat">
                        Pelajari <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Modul 3: Jaringan Komputer -->
            <div class="db-modul-card db-reveal db-reveal-d2" id="card-jaringan">
                <div class="db-card-num">03</div>
                <div class="db-card-icon cyan"><i class="fas fa-network-wired"></i></div>
                <div class="db-card-badges">
                    <span class="db-badge b-cyan"><i class="fas fa-tag"></i> Modul 3</span>
                    <span class="db-badge b-blue"><i class="fas fa-wifi"></i> Jaringan</span>
                    <span class="db-badge b-orange"><i class="fas fa-clock"></i> ~40 mnt</span>
                </div>
                <h3 class="db-card-title">Jaringan Komputer &amp; Internet</h3>
                <p class="db-card-desc">Pahami bagaimana komputer saling terhubung, mengenal berbagai perangkat jaringan, topologi, protokol komunikasi, dan cara kerja internet.</p>
                <ul class="db-card-topics">
                    <li class="db-card-topic"><i class="fas fa-check-circle"></i> Jenis Jaringan (LAN, MAN, WAN)</li>
                    <li class="db-card-topic"><i class="fas fa-check-circle"></i> Topologi Jaringan</li>
                    <li class="db-card-topic"><i class="fas fa-check-circle"></i> Perangkat Jaringan</li>
                    <li class="db-card-topic"><i class="fas fa-check-circle"></i> Protokol Internet (TCP/IP)</li>
                </ul>
                <div class="db-card-footer">
                    <div class="db-card-time"><i class="fas fa-clock"></i> ~40 menit</div>
                    <a href="materi/jaringan-komputer.php" class="db-card-btn btn-cyan" id="btn-jaringan">
                        Pelajari <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ====== CARA BELAJAR ====== -->
<section class="db-steps-section" id="cara-belajar">
    <div class="db-container">
        <div class="db-sec-header db-reveal">
            <div class="db-sec-tag"><i class="fas fa-route"></i> Panduan Belajar</div>
            <h2 class="db-sec-title">Bagaimana <span class="hl">Cara Belajarnya?</span></h2>
            <p class="db-sec-desc">Ikuti 3 langkah mudah ini untuk memaksimalkan proses belajarmu.</p>
        </div>

        <div class="db-steps-grid">
            <div class="db-step db-reveal">
                <div class="db-step-num">1</div>
                <div class="db-step-icon"><i class="fas fa-mouse-pointer"></i></div>
                <h3>Pilih Modul</h3>
                <p>Pilih salah satu dari tiga modul materi yang tersedia sesuai dengan yang ingin kamu pelajari hari ini.</p>
            </div>
            <div class="db-step db-reveal db-reveal-d1">
                <div class="db-step-num">2</div>
                <div class="db-step-icon"><i class="fas fa-book-reader"></i></div>
                <h3>Baca &amp; Pahami</h3>
                <p>Baca setiap sub-topik dengan seksama. Gunakan sidebar untuk navigasi antar bagian dengan mudah.</p>
            </div>
            <div class="db-step db-reveal db-reveal-d2">
                <div class="db-step-num">3</div>
                <div class="db-step-icon"><i class="fas fa-trophy"></i></div>
                <h3>Kuasai Materi</h3>
                <p>Setelah membaca semua sub-topik, kamu siap menguasai materi dan lanjut ke modul berikutnya!</p>
            </div>
        </div>
    </div>
</section>

<!-- ====== QUIZ SECTION ====== -->
<section class="db-quiz-section">
    <div class="db-container">
        <div class="db-sec-header db-reveal">
            <div class="db-sec-tag"><i class="fas fa-brain"></i> Uji Pemahaman</div>
            <h2 class="db-sec-title">Latihan Soal <span class="hl">Interaktif</span></h2>
            <p class="db-sec-desc">Sudah baca semua materi? Saatnya uji pemahamanmu dengan kuis interaktif! Dapatkan nilai dan review jawaban langsung.</p>
        </div>

        <div class="db-quiz-grid">
            <!-- Kiri: Fitur -->
            <div class="db-quiz-features db-reveal">
                <div class="db-quiz-feat">
                    <div class="db-quiz-feat-ico" style="background:linear-gradient(135deg,rgba(37,99,235,.12),rgba(124,58,237,.08));color:var(--primary-600);">
                        <i class="fas fa-list-ol"></i>
                    </div>
                    <div>
                        <strong>15 Soal Pilihan Ganda</strong>
                        <p>5 soal per modul, mencakup semua topik penting</p>
                    </div>
                </div>
                <div class="db-quiz-feat">
                    <div class="db-quiz-feat-ico" style="background:linear-gradient(135deg,rgba(5,150,105,.12),rgba(16,185,129,.08));color:#059669;">
                        <i class="fas fa-check-double"></i>
                    </div>
                    <div>
                        <strong>Feedback Langsung</strong>
                        <p>Penjelasan jawaban muncul setelah menjawab tiap soal</p>
                    </div>
                </div>
                <div class="db-quiz-feat">
                    <div class="db-quiz-feat-ico" style="background:linear-gradient(135deg,rgba(220,38,38,.1),rgba(239,68,68,.07));color:#dc2626;">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div>
                        <strong>Nilai &amp; Review Akhir</strong>
                        <p>Lihat skor, review jawaban, dan bisa diulang berkali-kali</p>
                    </div>
                </div>
                <div class="db-quiz-feat">
                    <div class="db-quiz-feat-ico" style="background:linear-gradient(135deg,rgba(8,145,178,.12),rgba(6,182,212,.08));color:#0891b2;">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <div>
                        <strong>Pilih Per Modul</strong>
                        <p>Bisa pilih kuis per modul atau semua modul sekaligus</p>
                    </div>
                </div>

                <a href="quiz/latihan-soal.php" class="btn btn-primary btn-lg" id="btn-kuis-utama" style="margin-top:.5rem;width:fit-content;">
                    <i class="fas fa-brain"></i> Mulai Latihan Soal
                </a>
            </div>

            <!-- Kanan: Mock Quiz -->
            <div class="db-quiz-mock-wrap db-reveal db-reveal-d1">
                <div class="db-quiz-mock">
                    <div class="dbqm-bar-row">
                        <span>Soal 3 dari 15</span>
                        <span style="font-weight:700;color:#d97706;">⭐ 2 poin</span>
                    </div>
                    <div class="dbqm-bar"><div class="dbqm-bar-fill"></div></div>
                    <div class="dbqm-cat">🔍 Mesin Pencari</div>
                    <p class="dbqm-q">Operator pencarian Google yang digunakan untuk mencari file PDF adalah...</p>
                    <div class="dbqm-opts">
                        <div class="dbqm-opt dbqm-wrong"><span class="dbqm-ltr">A</span> type:pdf</div>
                        <div class="dbqm-opt dbqm-correct"><span class="dbqm-ltr">B</span> filetype:pdf ✓</div>
                        <div class="dbqm-opt dbqm-dim"><span class="dbqm-ltr">C</span> format:pdf</div>
                        <div class="dbqm-opt dbqm-dim"><span class="dbqm-ltr">D</span> ext:pdf</div>
                    </div>
                    <div class="dbqm-tip">
                        <i class="fas fa-lightbulb"></i>
                        Gunakan <strong>filetype:pdf</strong> untuk mencari file bertipe PDF di Google
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====== CTA BANNER ====== -->
<section class="db-cta">
    <div class="db-container">
        <div class="db-cta-inner">
            <div class="db-cta-text">
                <h2>Siap Memulai Perjalanan Belajarmu? 🚀</h2>
                <p>Mulai dari Literasi Digital, kuasai Microsoft Office, lalu pahami cara kerja Jaringan Internet. Semua materi lengkap dan gratis!</p>
            </div>
            <a href="#materi" class="db-cta-btn" id="btn-mulai-sekarang">
                <i class="fas fa-rocket"></i> Mulai Sekarang
            </a>
        </div>
    </div>
</section>

<script>
/* Reading Progress */
window.addEventListener('scroll', () => {
    const el   = document.documentElement;
    const prog = (el.scrollTop / (el.scrollHeight - el.clientHeight)) * 100;
    document.getElementById('readingFill').style.width = prog + '%';
});

/* Scroll Reveal */
const reveals = document.querySelectorAll('.db-reveal');
const revObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting) { e.target.classList.add('visible'); revObs.unobserve(e.target); }
    });
}, { threshold: 0.12 });
reveals.forEach(el => revObs.observe(el));

/* Smooth count-up on hero stats */
const countEls = document.querySelectorAll('.db-stat-val[data-count]');
const countObs = new IntersectionObserver(entries => {
    entries.forEach(e => {
        if (!e.isIntersecting) return;
        const el  = e.target;
        const end = parseInt(el.dataset.count);
        const suffix = el.textContent.replace(/\d+/,'');
        let cur = 0;
        const step = Math.max(1, Math.floor(end / 40));
        const timer = setInterval(() => {
            cur = Math.min(cur + step, end);
            el.textContent = cur + (el.dataset.count === '100' ? '%' : el.dataset.count === '15' ? '+' : '');
            if (cur >= end) clearInterval(timer);
        }, 30);
        countObs.unobserve(el);
    });
}, { threshold: 0.5 });
countEls.forEach(el => countObs.observe(el));
</script>

<?php include 'includes/footer.php'; ?>
