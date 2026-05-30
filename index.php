<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$pages = ['home', 'definition', 'importance', 'threats', 'prevention', 'habits', 'conclusion'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Keamanan Siber - Personal Security</title>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>
:root {
  --blue: #4f7cff;
  --blue-light: rgba(96, 140, 255, 0.16);
  --blue-mid: #7dd3fc;
  --gold: #ffc857;
  --dark: #07111f;
  --text: #eaf2ff;
  --muted: #a9b8d2;
  --bg: #06101f;
  --card: rgba(255,255,255,0.08);
  --radius: 24px;
  --glass: rgba(255,255,255,0.08);
  --line: rgba(148, 191, 255, 0.18);
  --shadow: 0 24px 80px rgba(0,0,0,0.35);
}

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }

body {
  font-family: 'Manrope', sans-serif;
  background:
    radial-gradient(circle at 18% 10%, rgba(79,124,255,0.35), transparent 32rem),
    radial-gradient(circle at 85% 22%, rgba(125,211,252,0.20), transparent 28rem),
    radial-gradient(circle at 50% 95%, rgba(255,200,87,0.11), transparent 35rem),
    linear-gradient(135deg, #04101f 0%, #08172c 42%, #0b1022 100%);
  color: var(--text);
  overflow-x: hidden;
  min-height: 100vh;
  position: relative;
}

body::before {
  content: '';
  position: fixed;
  inset: 0;
  z-index: -2;
  background-image:
    linear-gradient(rgba(255,255,255,0.035) 1px, transparent 1px),
    linear-gradient(90deg, rgba(255,255,255,0.035) 1px, transparent 1px);
  background-size: 56px 56px;
  mask-image: linear-gradient(to bottom, rgba(0,0,0,0.85), transparent 85%);
  animation: gridMove 16s linear infinite;
}

body::after {
  content: '';
  position: fixed;
  inset: 0;
  z-index: -1;
  pointer-events: none;
  background:
    linear-gradient(115deg, transparent 0 38%, rgba(125,211,252,0.08) 39%, transparent 42%),
    radial-gradient(circle at 50% 50%, transparent 0%, rgba(0,0,0,0.22) 100%);
}

@keyframes gridMove {
  0% { transform: translateY(0); }
  100% { transform: translateY(56px); }
}

/* cursor glow */
.cursor-glow {
  position: fixed;
  width: 260px;
  height: 260px;
  border-radius: 50%;
  pointer-events: none;
  z-index: 1;
  background: radial-gradient(circle, rgba(125,211,252,0.18) 0%, rgba(79,124,255,0.08) 35%, transparent 70%);
  transform: translate(-50%, -50%);
  filter: blur(14px);
  mix-blend-mode: screen;
  opacity: .9;
}

/* ── NAV ── */
nav {
  position: fixed;
  top: 18px;
  left: 50%;
  right: auto;
  transform: translateX(-50%);
  z-index: 100;
  width: min(1120px, calc(100% - 32px));
  background: rgba(7, 17, 31, 0.72);
  backdrop-filter: blur(20px) saturate(140%);
  border: 1px solid rgba(255,255,255,0.12);
  box-shadow: 0 18px 60px rgba(0,0,0,0.28);
  padding: 0 1rem;
  height: 68px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-radius: 999px;
}

.nav-logo {
  font-family: 'Space Grotesk', sans-serif;
  font-weight: 800;
  font-size: 1.05rem;
  color: #ffffff;
  text-decoration: none;
  letter-spacing: -0.03em;
  padding: .65rem 1rem;
  background: linear-gradient(135deg, rgba(79,124,255,.24), rgba(125,211,252,.10));
  border-radius: 999px;
  border: 1px solid rgba(255,255,255,.10);
}

.nav-links {
  display: flex;
  gap: 0.25rem;
  align-items: center;
}

.nav-links a {
  font-size: 0.78rem;
  font-weight: 800;
  color: #b8c8e6;
  text-decoration: none;
  padding: 0.55rem 0.82rem;
  border-radius: 999px;
  transition: all 0.25s ease;
}

.nav-links a:hover,
.nav-links a.active {
  color: #06101f;
  background: linear-gradient(135deg, #ffffff, #9edbff);
  box-shadow: 0 10px 28px rgba(125,211,252,.22);
}

/* ── HERO ── */
.hero {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  overflow: hidden;
  padding: 150px 2rem 4rem;
  isolation: isolate;
}

.hero::before {
  content: 'CYBER SECURITY';
  position: absolute;
  left: 50%;
  top: 48%;
  transform: translate(-50%, -50%);
  font-family: 'Space Grotesk', sans-serif;
  font-size: clamp(4rem, 14vw, 13rem);
  font-weight: 800;
  letter-spacing: -0.08em;
  white-space: nowrap;
  color: rgba(255,255,255,0.035);
  z-index: 0;
  pointer-events: none;
}

.hero-bg {
  position: absolute;
  inset: 0;
  z-index: 0;
  background:
    radial-gradient(ellipse 60% 50% at 15% 40%, rgba(79,124,255,0.25) 0%, transparent 70%),
    radial-gradient(ellipse 50% 60% at 85% 60%, rgba(125,211,252,0.18) 0%, transparent 70%);
}

.hero-orb {
  position: absolute;
  border-radius: 50%;
  filter: blur(2px);
  animation: float 7s ease-in-out infinite;
}

.hero-orb-1 {
  width: 520px;
  height: 520px;
  background: radial-gradient(circle, rgba(79,124,255,0.23), transparent 68%);
  top: -120px;
  right: -130px;
  animation-delay: 0s;
}

.hero-orb-2 {
  width: 380px;
  height: 380px;
  background: radial-gradient(circle, rgba(255,200,87,0.16), transparent 70%);
  bottom: -80px;
  left: -110px;
  animation-delay: -3s;
}

.hero-particle {
  position: absolute;
  border-radius: 50%;
  background: rgba(125,211,252,.9);
  box-shadow: 0 0 18px rgba(125,211,252,.75);
  opacity: .85;
  animation: particleFloat linear infinite;
}

.hero-particle.p1 { width: 7px; height: 7px; top: 18%; left: 14%; animation-duration: 9s; }
.hero-particle.p2 { width: 10px; height: 10px; top: 24%; right: 18%; animation-duration: 11s; }
.hero-particle.p3 { width: 6px; height: 6px; bottom: 24%; left: 18%; animation-duration: 8s; }
.hero-particle.p4 { width: 8px; height: 8px; bottom: 18%; right: 14%; animation-duration: 10s; }

@keyframes particleFloat {
  0%   { transform: translateY(0px) translateX(0px); opacity: .35; }
  50%  { transform: translateY(-20px) translateX(10px); opacity: 1; }
  100% { transform: translateY(0px) translateX(0px); opacity: .35; }
}

@keyframes float {
  0%, 100% { transform: translateY(0px) scale(1); }
  50% { transform: translateY(-24px) scale(1.04); }
}

.hero-content {
  position: relative;
  z-index: 1;
  text-align: center;
  width: min(96%, 1280px);
  max-width: 1280px;
  padding: 3.5rem 3rem;
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: 36px;
  background: linear-gradient(145deg, rgba(255,255,255,0.10), rgba(255,255,255,0.035));
  backdrop-filter: blur(22px) saturate(140%);
  box-shadow: var(--shadow);
  margin: 0 auto;
  overflow: hidden;
}

.hero-content::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    linear-gradient(transparent 0 48%, rgba(255,255,255,0.03) 49%, transparent 50%),
    linear-gradient(to bottom, transparent, rgba(125,211,252,0.05), transparent);
  background-size: 100% 6px, 100% 100%;
  opacity: .25;
  pointer-events: none;
}

.hero-content::after {
  content: '';
  position: absolute;
  top: 0;
  left: -120%;
  width: 70%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.12), transparent);
  transform: skewX(-18deg);
  animation: heroShine 7s linear infinite;
}

@keyframes heroShine {
  0% { left: -120%; }
  100% { left: 150%; }
}

.hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 0.6rem;
  background: rgba(255,255,255,0.09);
  color: #dbeafe;
  font-size: 0.78rem;
  font-weight: 800;
  padding: 0.55rem 1.1rem;
  border-radius: 999px;
  margin-bottom: 1.5rem;
  border: 1px solid rgba(125,211,252,0.24);
  box-shadow: inset 0 1px 0 rgba(255,255,255,.12);
  animation: fadeSlideUp 0.6s ease both;
  position: relative;
  z-index: 2;
}

.hero-badge span {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #38f8ff;
  box-shadow: 0 0 20px #38f8ff;
  animation: pulse 2s infinite;
}

@keyframes pulse {
  0%,100% { opacity:1; transform:scale(1); }
  50% { opacity:0.55; transform:scale(1.45); }
}

.hero h1 {
  font-family: 'Space Grotesk', sans-serif;
  font-size: clamp(3rem, 8vw, 6.8rem);
  font-weight: 800;
  line-height: 0.95;
  letter-spacing: -0.05em;
  color: #ffffff;
  text-shadow: 0 20px 60px rgba(0,0,0,.38);
  animation: fadeSlideUp 0.6s 0.1s ease both;
  position: relative;
  z-index: 2;
}

.hero h1 .accent {
  color: transparent;
  background: linear-gradient(90deg, #ffffff 0%, #7dd3fc 40%, #4f7cff 100%);
  -webkit-background-clip: text;
  background-clip: text;
  position: relative;
  display: inline-block;
}

.hero h1 .accent::after {
  content: '';
  position: absolute;
  left: 4%;
  bottom: -8px;
  right: 4%;
  height: 8px;
  background: linear-gradient(90deg, var(--gold), #7dd3fc, var(--blue));
  border-radius: 999px;
  box-shadow: 0 0 32px rgba(125,211,252,.38);
}

.hero-sub {
  margin-top: 1.7rem;
  font-size: 1.08rem;
  color: #c8d6f0;
  line-height: 1.8;
  animation: fadeSlideUp 0.6s 0.2s ease both;
  position: relative;
  z-index: 2;
}

.hero-cta {
  margin-top: 2.5rem;
  display: flex;
  gap: 1rem;
  justify-content: center;
  flex-wrap: wrap;
  animation: fadeSlideUp 0.6s 0.3s ease both;
  position: relative;
  z-index: 2;
}

.btn-primary {
  background: linear-gradient(135deg, #4f7cff 0%, #7dd3fc 100%);
  color: #06101f;
  padding: 0.95rem 2.2rem;
  border-radius: 999px;
  font-weight: 800;
  font-size: 0.95rem;
  text-decoration: none;
  transition: all 0.25s ease;
  box-shadow: 0 16px 45px rgba(79,124,255,0.34);
  position: relative;
  overflow: hidden;
}

.btn-primary::after,
.btn-outline::after {
  content: '';
  position: absolute;
  top: 0;
  left: -120%;
  width: 60%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.45), transparent);
  transform: skewX(-24deg);
  transition: 0s;
}

.btn-primary:hover::after,
.btn-outline:hover::after {
  left: 150%;
  transition: .8s ease;
}

.btn-primary:hover {
  transform: translateY(-4px);
  box-shadow: 0 22px 55px rgba(79,124,255,0.44);
}

.btn-outline {
  background: rgba(255,255,255,.06);
  color: #eaf2ff;
  padding: 0.95rem 2.2rem;
  border-radius: 999px;
  font-weight: 800;
  font-size: 0.95rem;
  text-decoration: none;
  border: 1px solid rgba(255,255,255,0.18);
  transition: all 0.25s ease;
  position: relative;
  overflow: hidden;
}

.btn-outline:hover {
  background: rgba(255,255,255,.13);
  border-color: rgba(125,211,252,.55);
  transform: translateY(-4px);
}

/* ── HERO ICONS ── */
.hero-icons {
  display: flex;
  justify-content: center;
  gap: 1rem;
  margin-top: 3rem;
  flex-wrap: wrap;
  animation: fadeSlideUp 0.6s 0.4s ease both;
  position: relative;
  z-index: 2;
}

.hero-icon-card {
  background: rgba(255,255,255,0.08);
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: 18px;
  padding: 1rem 1.25rem;
  display: flex;
  align-items: center;
  gap: 0.85rem;
  font-size: 0.90rem;
  font-weight: 800;
  color: #f8fbff;
  box-shadow: 0 14px 38px rgba(0,0,0,0.15);
  transition: transform 0.25s ease, border-color .25s ease, background .25s ease, box-shadow .25s ease;
  min-width: 220px;
  justify-content: flex-start;
}

.hero-icon-card:hover {
  transform: translateY(-7px);
  border-color: rgba(125,211,252,.48);
  background: rgba(125,211,252,.12);
  box-shadow: 0 18px 48px rgba(0,0,0,.22);
}

.icon-wrap {
  width: 50px;
  height: 50px;
  min-width: 50px;
  border-radius: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, rgba(79,124,255,.25), rgba(125,211,252,.14));
  border: 1px solid rgba(255,255,255,.14);
  box-shadow: inset 0 1px 0 rgba(255,255,255,.12), 0 10px 25px rgba(79,124,255,.16);
  position: relative;
  overflow: hidden;
}

.icon-wrap::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(145deg, rgba(255,255,255,.18), transparent 60%);
  opacity: .7;
}

.icon-wrap i {
  position: relative;
  z-index: 1;
  font-size: 1.25rem;
  color: #9edbff;
  text-shadow: 0 0 18px rgba(125,211,252,.35);
  animation: iconPulse 3s ease-in-out infinite;
}

@keyframes iconPulse {
  0%,100% { transform: scale(1); }
  50% { transform: scale(1.08); }
}

/* ── SECTIONS ── */
section {
  padding: 6rem 2rem;
  max-width: 1120px;
  margin: 0 auto;
  position: relative;
}

section:not(.hero)::before {
  content: '';
  position: absolute;
  top: 4rem;
  right: 2rem;
  width: 160px;
  height: 160px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(79,124,255,.13), transparent 70%);
  pointer-events: none;
}

.section-tag {
  display: inline-block;
  background: rgba(125,211,252,0.12);
  color: #9edbff;
  font-size: 0.72rem;
  font-weight: 900;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  padding: 0.45rem 1rem;
  border-radius: 999px;
  margin-bottom: 1rem;
  border: 1px solid rgba(125,211,252,.18);
}

section h2 {
  font-family: 'Space Grotesk', sans-serif;
  font-size: clamp(2.2rem, 5vw, 4rem);
  font-weight: 800;
  letter-spacing: -0.05em;
  line-height: 1.04;
  margin-bottom: 1.25rem;
  color: #ffffff;
}

section h2 .hl {
  color: transparent;
  background: linear-gradient(90deg, #7dd3fc, #4f7cff);
  -webkit-background-clip: text;
  background-clip: text;
}

section .lead {
  font-size: 1.04rem;
  color: var(--muted);
  line-height: 1.85;
  max-width: 720px;
}

/* ── CARDS ── */
.card-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));
  gap: 1.4rem;
  margin-top: 3rem;
}

.card {
  background: linear-gradient(145deg, rgba(255,255,255,0.10), rgba(255,255,255,0.045));
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: 26px;
  padding: 1.8rem;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
  box-shadow: 0 18px 55px rgba(0,0,0,0.18);
  transform-style: preserve-3d;
}

.card::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 4px;
  background: linear-gradient(90deg, #4f7cff, #7dd3fc, #ffc857);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.35s ease;
}

.card::after {
  content: '';
  position: absolute;
  inset: auto -50px -70px auto;
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background: rgba(125,211,252,.10);
  transition: all .35s ease;
}

.card:hover {
  transform: translateY(-9px);
  box-shadow: 0 28px 75px rgba(0,0,0,0.28);
  border-color: rgba(125,211,252,0.34);
}

.card:hover::before { transform: scaleX(1); }
.card:hover::after {
  transform: scale(1.15);
  background: rgba(125,211,252,.18);
}

.card-icon {
  width: 58px;
  height: 58px;
  border-radius: 18px;
  background: linear-gradient(135deg, rgba(79,124,255,.26), rgba(125,211,252,.14));
  border: 1px solid rgba(255,255,255,.12);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.55rem;
  margin-bottom: 1.25rem;
  box-shadow: inset 0 1px 0 rgba(255,255,255,.12);
}

.card h3 {
  font-family: 'Space Grotesk', sans-serif;
  font-size: 1.18rem;
  font-weight: 800;
  margin-bottom: 0.75rem;
  color: #ffffff;
}

.card p {
  font-size: 0.92rem;
  color: var(--muted);
  line-height: 1.75;
}

/* ── THREAT CARDS ── */
.threat-card {
  background: linear-gradient(145deg, rgba(255,255,255,0.10), rgba(255,255,255,0.045));
  border-radius: 28px;
  border: 1px solid rgba(255,255,255,0.12);
  padding: 2rem;
  display: flex;
  gap: 1.5rem;
  align-items: flex-start;
  margin-bottom: 1.4rem;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
  box-shadow: 0 16px 48px rgba(0,0,0,.18);
}

.threat-card::before {
  content: '';
  position: absolute;
  left: 0; top: 0; bottom: 0;
  width: 5px;
  background: linear-gradient(to bottom, #ff6b6b, #ffc857, #7dd3fc);
  opacity: .85;
}

.threat-card:hover {
  transform: translateX(10px) translateY(-4px);
  box-shadow: 0 26px 68px rgba(0,0,0,0.28);
  border-color: rgba(125,211,252,.32);
}

.threat-badge {
  min-width: 70px;
  height: 70px;
  border-radius: 22px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 2rem;
  border: 1px solid rgba(255,255,255,.13);
  box-shadow: inset 0 1px 0 rgba(255,255,255,.15), 0 14px 35px rgba(0,0,0,.16);
}

.threat-badge.red { background: linear-gradient(135deg, rgba(255,107,107,.28), rgba(255,255,255,.06)); }
.threat-badge.orange { background: linear-gradient(135deg, rgba(255,200,87,.30), rgba(255,255,255,.06)); }
.threat-badge.purple { background: linear-gradient(135deg, rgba(139,92,246,.28), rgba(255,255,255,.06)); }

.threat-content h3 {
  font-family: 'Space Grotesk', sans-serif;
  font-size: 1.32rem;
  font-weight: 800;
  margin-bottom: 0.55rem;
  color: #ffffff;
}

.threat-content p {
  font-size: 0.92rem;
  color: var(--muted);
  line-height: 1.78;
}

/* ── PHISHING CIRI ── */
.phishing-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 1.2rem;
  margin-top: 2.5rem;
}

.phishing-item {
  background: linear-gradient(145deg, rgba(255,255,255,0.09), rgba(255,255,255,0.045));
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: 22px;
  padding: 1.45rem;
  display: flex;
  gap: 1rem;
  align-items: flex-start;
  transition: all 0.28s ease;
  box-shadow: 0 14px 42px rgba(0,0,0,.16);
}

.phishing-item:hover {
  border-color: rgba(125,211,252,.42);
  transform: translateY(-6px);
  background: rgba(125,211,252,.08);
}

.phishing-num {
  min-width: 40px;
  height: 40px;
  background: linear-gradient(135deg, #4f7cff, #7dd3fc);
  color: #06101f;
  border-radius: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: 'Space Grotesk', sans-serif;
  font-weight: 800;
  font-size: 1rem;
  box-shadow: 0 12px 30px rgba(79,124,255,.28);
}

.phishing-item h4 {
  font-size: 0.96rem;
  font-weight: 800;
  margin-bottom: 0.45rem;
  color: #ffffff;
}

.phishing-item p {
  font-size: 0.84rem;
  color: var(--muted);
  line-height: 1.65;
}

/* ── PREVENTION STEPS ── */
.prevention-list {
  margin-top: 3rem;
  position: relative;
}

.prevention-list::before {
  content: '';
  position: absolute;
  left: 30px;
  top: 20px;
  bottom: 20px;
  width: 2px;
  background: linear-gradient(to bottom, transparent, rgba(125,211,252,.35), transparent);
}

.prevention-item {
  display: flex;
  gap: 1.5rem;
  align-items: flex-start;
  padding: 1.8rem;
  background: linear-gradient(145deg, rgba(255,255,255,0.10), rgba(255,255,255,0.045));
  border-radius: 26px;
  border: 1px solid rgba(255,255,255,0.12);
  margin-bottom: 1rem;
  position: relative;
  transition: all 0.3s ease;
  cursor: default;
  box-shadow: 0 14px 45px rgba(0,0,0,.16);
}

.prevention-item:hover {
  box-shadow: 0 26px 68px rgba(0,0,0,0.26);
  border-color: rgba(125,211,252,0.35);
  transform: translateY(-5px);
}

.prevention-step {
  font-family: 'Space Grotesk', sans-serif;
  font-weight: 800;
  font-size: 2.4rem;
  color: #06101f;
  min-width: 64px;
  height: 64px;
  line-height: 64px;
  text-align: center;
  background: linear-gradient(135deg, #ffffff, #7dd3fc);
  border-radius: 20px;
  user-select: none;
  box-shadow: 0 14px 35px rgba(79,124,255,.24);
}

.prevention-body h3 {
  font-size: 1.12rem;
  font-weight: 800;
  margin-bottom: 0.55rem;
  font-family: 'Space Grotesk', sans-serif;
  color: #ffffff;
}

.prevention-body p {
  font-size: 0.9rem;
  color: var(--muted);
  line-height: 1.78;
}

/* ── BAD HABITS ── */
.habits-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));
  gap: 1.4rem;
  margin-top: 2.5rem;
}

.habit-card {
  background: linear-gradient(145deg, rgba(255,255,255,0.10), rgba(255,255,255,0.045));
  border-radius: 26px;
  padding: 1.8rem;
  border: 1px solid rgba(255,255,255,0.12);
  transition: all 0.3s ease;
  box-shadow: 0 16px 48px rgba(0,0,0,.16);
}

.habit-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 26px 70px rgba(0,0,0,0.27);
  border-color: rgba(255,107,107,.28);
}

.habit-label {
  display: inline-flex;
  align-items: center;
  gap: 0.4rem;
  font-size: 0.72rem;
  font-weight: 900;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  padding: 0.42rem 0.85rem;
  border-radius: 999px;
  margin-bottom: 1rem;
}

.habit-label.bad {
  background: rgba(255,107,107,.14);
  color: #ffb4b4;
  border: 1px solid rgba(255,107,107,.22);
}

.habit-card h3 {
  font-size: 1.02rem;
  font-weight: 800;
  margin-bottom: 0.85rem;
  font-family: 'Space Grotesk', sans-serif;
  color: #ffffff;
}

.habit-card ul {
  list-style: none;
}

.habit-card ul li {
  font-size: 0.86rem;
  color: var(--muted);
  line-height: 1.65;
  padding: 0.45rem 0;
  border-bottom: 1px solid rgba(255,255,255,0.07);
  display: flex;
  gap: 0.6rem;
  align-items: flex-start;
}

.habit-card ul li::before {
  content: '→';
  color: #7dd3fc;
  font-weight: 900;
  flex-shrink: 0;
}

/* ── CONCLUSION ── */
.conclusion-box {
  background:
    radial-gradient(circle at 15% 20%, rgba(125,211,252,.26), transparent 28rem),
    linear-gradient(135deg, rgba(79,124,255,0.96) 0%, rgba(14,34,104,0.96) 100%);
  border-radius: 34px;
  padding: 3.4rem 2.4rem;
  color: white;
  text-align: center;
  position: relative;
  overflow: hidden;
  margin-top: 3rem;
  border: 1px solid rgba(255,255,255,.16);
  box-shadow: 0 30px 90px rgba(0,0,0,.30);
}

.conclusion-box::before {
  content: '';
  position: absolute;
  top: -80px;
  right: -80px;
  width: 300px;
  height: 300px;
  border-radius: 50%;
  background: rgba(255,255,255,0.08);
}

.conclusion-box::after {
  content: '';
  position: absolute;
  left: -90px;
  bottom: -110px;
  width: 260px;
  height: 260px;
  border-radius: 50%;
  background: rgba(255,200,87,0.13);
}

.conclusion-box h2 {
  font-family: 'Space Grotesk', sans-serif;
  font-size: clamp(2rem, 5vw, 3rem);
  font-weight: 800;
  margin-bottom: 1.25rem;
  color: white;
  position: relative;
  z-index: 1;
}

.conclusion-box p {
  font-size: 1rem;
  opacity: 0.9;
  line-height: 1.85;
  max-width: 650px;
  margin: 0 auto;
  position: relative;
  z-index: 1;
}

.conclusion-tips {
  display: flex;
  flex-wrap: wrap;
  gap: 0.75rem;
  justify-content: center;
  margin-top: 2rem;
  position: relative;
  z-index: 1;
}

.conclusion-tip {
  background: rgba(255,255,255,0.12);
  border: 1px solid rgba(255,255,255,0.22);
  border-radius: 999px;
  padding: 0.65rem 1.05rem;
  font-size: 0.84rem;
  font-weight: 800;
  display: flex;
  align-items: center;
  gap: 0.4rem;
  backdrop-filter: blur(12px);
}

/* ── DIVIDER ── */
.section-divider {
  border: none;
  height: 1px;
  background: linear-gradient(90deg, transparent, rgba(125,211,252,.22), transparent);
  margin: 0 auto;
  width: min(1040px, calc(100% - 48px));
}

/* ── SCROLL ANIMATIONS ── */
.reveal {
  opacity: 0;
  transform: translateY(34px) scale(.98);
  transition: opacity 0.7s ease, transform 0.7s ease;
}

.reveal.visible {
  opacity: 1;
  transform: translateY(0) scale(1);
}

@keyframes fadeSlideUp {
  from { opacity: 0; transform: translateY(24px); }
  to { opacity: 1; transform: translateY(0); }
}

/* ── FOOTER ── */
footer {
  text-align: center;
  padding: 2.4rem;
  font-size: 0.82rem;
  color: var(--muted);
  border-top: 1px solid rgba(255,255,255,0.08);
  margin-top: 3rem;
  background: rgba(0,0,0,.12);
}

footer strong {
  color: #7dd3fc;
}

/* ── PROGRESS BAR ── */
#progress-bar {
  position: fixed;
  top: 0;
  left: 0;
  height: 4px;
  background: linear-gradient(90deg, #4f7cff, #7dd3fc, #ffc857);
  z-index: 200;
  width: 0%;
  transition: width 0.1s;
  box-shadow: 0 0 18px rgba(125,211,252,.55);
}

/* ── RESPONSIVE ── */
@media (max-width: 860px) {
  nav {
    top: 12px;
    height: auto;
    padding: .65rem;
    align-items: flex-start;
    border-radius: 24px;
  }

  .nav-logo { font-size: .95rem; }

  .nav-links {
    max-width: 58%;
    flex-wrap: wrap;
    justify-content: flex-end;
  }

  .nav-links a {
    font-size: .72rem;
    padding: .45rem .62rem;
  }

  .hero-content {
    padding: 2.3rem 1.3rem;
    border-radius: 28px;
  }
}

@media (max-width: 640px) {
  .nav-links { display: none; }

  nav {
    height: 60px;
    align-items: center;
  }

  .hero {
    padding: 115px 1rem 3rem;
  }

  .hero h1 {
    font-size: clamp(2.8rem, 16vw, 4.4rem);
  }

  .hero-sub br { display: none; }

  .hero-icons {
    gap: .8rem;
  }

  .hero-icon-card {
    min-width: 100%;
  }

  section {
    padding: 4.5rem 1rem;
  }

  .threat-card { flex-direction: column; }
  .prevention-list::before { display: none; }
  .prevention-item { flex-direction: column; }

  .prevention-step {
    font-size: 1.4rem;
    min-width: 52px;
    height: 52px;
    line-height: 52px;
    border-radius: 16px;
  }

  .conclusion-box {
    padding: 2.5rem 1.3rem;
    border-radius: 26px;
  }
}
</style>
</head>
<body>

<div class="cursor-glow" id="cursorGlow"></div>
<div id="progress-bar"></div>

<nav>
  <a class="nav-logo" href="#hero">🛡 Keamanan Siber</a>
  <div class="nav-links">
    <a href="#hero">Home</a>
    <a href="#definition">Definisi</a>
    <a href="#importance">Pentingnya</a>
    <a href="#threats">Ancaman</a>
    <a href="#prevention">Pencegahan</a>
    <a href="#habits">Kebiasaan</a>
    <a href="#conclusion">Kesimpulan</a>
  </div>
</nav>

<!-- ══ HERO ══ -->
<section id="hero" class="hero" style="max-width:100%;">
  <div class="hero-bg"></div>
  <div class="hero-orb hero-orb-1"></div>
  <div class="hero-orb hero-orb-2"></div>

  <span class="hero-particle p1"></span>
  <span class="hero-particle p2"></span>
  <span class="hero-particle p3"></span>
  <span class="hero-particle p4"></span>

  <div class="hero-content">
    <div class="hero-badge"><span></span> Hanover and Tyke · Personal Security</div>
    <h1>Kesadaran<br><span class="accent">Keamanan Siber</span></h1>
    <p class="hero-sub">Lindungi diri, perangkat, akun, dan data pribadi Anda<br>dari ancaman di dunia digital yang terus berkembang.</p>

    <div class="hero-cta">
      <a href="#definition" class="btn-primary">Mulai Belajar →</a>
      <a href="#threats" class="btn-outline">Lihat Ancaman</a>
    </div>

    <div class="hero-icons">
      <div class="hero-icon-card">
        <div class="icon-wrap"><i class="fa-solid fa-key"></i></div>
        <span>Password Kuat</span>
      </div>
      <div class="hero-icon-card">
        <div class="icon-wrap"><i class="fa-solid fa-shield-halved"></i></div>
        <span>Enkripsi Data</span>
      </div>
      <div class="hero-icon-card">
        <div class="icon-wrap"><i class="fa-solid fa-triangle-exclamation"></i></div>
        <span>Waspadai Phishing</span>
      </div>
      <div class="hero-icon-card">
        <div class="icon-wrap"><i class="fa-solid fa-globe"></i></div>
        <span>VPN Aman</span>
      </div>
    </div>
  </div>
</section>

<hr class="section-divider">

<!-- ══ DEFINITION ══ -->
<section id="definition">
  <div class="reveal">
    <span class="section-tag">01 — Definisi</span>
    <h2>Apa itu <span class="hl">Keamanan Siber</span><br>Personal?</h2>
    <p class="lead">Keamanan siber personal adalah upaya melindungi diri sendiri, perangkat, akun, dan data pribadi dari ancaman di dunia digital atau internet.</p>
  </div>
  <div class="card-grid reveal">
    <div class="card tilt-card">
      <div class="card-icon">🖥️</div>
      <h3>Perlindungan Perangkat</h3>
      <p>Menjaga keamanan HP, laptop, dan perangkat digital lainnya dari akses tidak sah dan serangan siber.</p>
    </div>
    <div class="card tilt-card">
      <div class="card-icon">🔑</div>
      <h3>Keamanan Akun</h3>
      <p>Melindungi akun media sosial, email, dan layanan online menggunakan praktik autentikasi yang aman.</p>
    </div>
    <div class="card tilt-card">
      <div class="card-icon">🗂️</div>
      <h3>Privasi Data</h3>
      <p>Menjaga informasi pribadi agar tidak jatuh ke tangan yang salah melalui enkripsi dan kontrol akses.</p>
    </div>
  </div>
</section>

<hr class="section-divider">

<!-- ══ IMPORTANCE ══ -->
<section id="importance">
  <div class="reveal">
    <span class="section-tag">02 — Pentingnya</span>
    <h2>Mengapa Ini <span class="hl">Sangat Penting</span><br>di Era Digital?</h2>
    <p class="lead">Data pribadi menjadi aset berharga yang rentan terhadap pencurian identitas, kebocoran finansial, dan serangan siber. Tanpa keamanan memadai, risiko kerugian sangat besar.</p>
  </div>
  <div class="card-grid reveal" style="margin-top:2.5rem">
    <div class="card tilt-card">
      <div class="card-icon">🆔</div>
      <h3>Cegah Pencurian Identitas</h3>
      <p>Data pribadi yang bocor dapat digunakan untuk mengakses akun bank, mengajukan pinjaman, atau melakukan penipuan atas nama Anda.</p>
    </div>
    <div class="card tilt-card">
      <div class="card-icon">💰</div>
      <h3>Hindari Kerugian Finansial</h3>
      <p>Serangan siber dapat menyebabkan hilangnya akses ke rekening dan aset digital yang bernilai besar.</p>
    </div>
    <div class="card tilt-card">
      <div class="card-icon">🔒</div>
      <h3>Jaga Privasi Online</h3>
      <p>Praktik enkripsi, firewall, dan kontrol akses dapat mencegah hingga 90% ancaman siber yang umum terjadi.</p>
    </div>
    <div class="card tilt-card">
      <div class="card-icon">🏢</div>
      <h3>Kepercayaan Digital</h3>
      <p>Keamanan yang baik membangun kepercayaan dalam ekosistem digital, baik untuk individu maupun organisasi.</p>
    </div>
  </div>
</section>

<hr class="section-divider">

<!-- ══ THREATS ══ -->
<section id="threats">
  <div class="reveal">
    <span class="section-tag">03 — Ancaman Siber</span>
    <h2>Ancaman yang <span class="hl">Umum Ditemui</span></h2>
    <p class="lead">Kenali jenis-jenis serangan siber yang sering terjadi agar Anda bisa lebih waspada dan terlindungi.</p>
  </div>

  <div style="margin-top:2.5rem" class="reveal">
    <div class="threat-card">
      <div class="threat-badge red">💣</div>
      <div class="threat-content">
        <h3>Ransomware</h3>
        <p>Jenis serangan yang mengunci atau mengenkripsi data pada perangkat korban sehingga tidak dapat diakses, lalu pelaku meminta tebusan agar data dikembalikan. Serangan ini sangat berbahaya karena dapat menyebabkan kehilangan data penting secara permanen.</p>
      </div>
    </div>

    <div class="threat-card">
      <div class="threat-badge orange">🦠</div>
      <div class="threat-content">
        <h3>Malware</h3>
        <p>Perangkat lunak berbahaya yang dirancang untuk merusak, mencuri data, atau mengendalikan perangkat tanpa izin pengguna. Contohnya virus, trojan, dan spyware yang dapat masuk melalui unduhan atau situs berbahaya yang tidak disadari.</p>
      </div>
    </div>

    <div class="threat-card">
      <div class="threat-badge purple">🎣</div>
      <div class="threat-content">
        <h3>Phishing</h3>
        <p>Penipuan online yang bertujuan mencuri informasi pribadi seperti password, PIN, atau nomor rekening dengan menyamar sebagai pihak terpercaya melalui email, pesan, atau situs web palsu yang terlihat resmi.</p>
      </div>
    </div>
  </div>

  <div class="reveal" style="margin-top:3rem">
    <h3 style="font-family:'Space Grotesk',sans-serif;font-size:1.6rem;font-weight:800;margin-bottom:0.5rem;">Ciri-ciri <span style="color:var(--blue)">Link Phishing</span></h3>
    <p style="color:var(--muted);font-size:0.9rem;margin-bottom:0">Kenali tanda-tanda berikut agar tidak menjadi korban:</p>

    <div class="phishing-grid">
      <div class="phishing-item">
        <div class="phishing-num">1</div>
        <div>
          <h4>Mengatasnamakan Institusi Terkenal</h4>
          <p>Berpura-pura sebagai bank, e-commerce, atau perusahaan teknologi dengan subjek mendesak seperti "Akun Anda Diblokir!"</p>
        </div>
      </div>
      <div class="phishing-item">
        <div class="phishing-num">2</div>
        <div>
          <h4>URL Tidak Resmi</h4>
          <p>Menggunakan URL mirip tapi berbeda, contoh: bankanda.com dimanipulasi menjadi bank-andaa.com atau bankandda.com.</p>
        </div>
      </div>
      <div class="phishing-item">
        <div class="phishing-num">3</div>
        <div>
          <h4>Konten Tidak Sesuai</h4>
          <p>Kualitas konten lebih buruk, tata letak tidak rapi, dan isi tulisan terkesan asal dibuat.</p>
        </div>
      </div>
      <div class="phishing-item">
        <div class="phishing-num">4</div>
        <div>
          <h4>Meminta Data Sensitif</h4>
          <p>Hanya berisi halaman login fiktif yang meminta kredensial akun, password, atau informasi kartu kredit.</p>
        </div>
      </div>
      <div class="phishing-item">
        <div class="phishing-num">5</div>
        <div>
          <h4>Terdeteksi Tidak Aman</h4>
          <p>Browser menampilkan peringatan "connection is not secure" karena tidak memiliki sertifikat keamanan SSL.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<hr class="section-divider">

<!-- ══ PREVENTION ══ -->
<section id="prevention">
  <div class="reveal">
    <span class="section-tag">04 — Pencegahan</span>
    <h2>Cara <span class="hl">Melindungi Diri</span><br>dari Ancaman</h2>
    <p class="lead">Terapkan langkah-langkah berikut untuk meningkatkan keamanan digital Anda secara signifikan.</p>
  </div>

  <div class="prevention-list reveal">
    <div class="prevention-item">
      <div class="prevention-step">01</div>
      <div class="prevention-body">
        <h3>Terapkan Cyber Hygiene</h3>
        <p>Serangkaian praktik dan kebiasaan yang dirancang untuk melindungi perangkat dan data dari ancaman dunia maya, seperti mencuci tangan untuk mencegah penyakit. Mencakup penggunaan kata sandi kuat, pembaruan perangkat lunak rutin, dan backup data berkala.</p>
      </div>
    </div>

    <div class="prevention-item">
      <div class="prevention-step">02</div>
      <div class="prevention-body">
        <h3>Buat Password yang Kuat</h3>
        <p>Gunakan minimal 12–16 karakter dengan campuran huruf besar-kecil, angka, dan simbol seperti !@#$. Hindari kata umum, nama, atau tanggal lahir. Buat unik per akun dan gunakan password manager untuk menyimpannya dengan aman.</p>
      </div>
    </div>

    <div class="prevention-item">
      <div class="prevention-step">03</div>
      <div class="prevention-body">
        <h3>Aktifkan Two-Factor Authentication (2FA)</h3>
        <p>Metode keamanan dua langkah yang memastikan hanya pemilik akun yang bisa masuk. Setelah username dan password, diperlukan kode OTP via SMS, aplikasi autentikator, atau verifikasi biometrik (sidik jari/wajah).</p>
      </div>
    </div>

    <div class="prevention-item">
      <div class="prevention-step">04</div>
      <div class="prevention-body">
        <h3>Gunakan VPN untuk Privasi</h3>
        <p>Virtual Private Network (VPN) mengenkripsi koneksi internet Anda sehingga aktivitas online tidak dapat dilacak pihak ketiga. Sangat penting saat menggunakan Wi-Fi publik untuk menyembunyikan IP asli dan mencegah pelacakan.</p>
      </div>
    </div>

    <div class="prevention-item">
      <div class="prevention-step">05</div>
      <div class="prevention-body">
        <h3>Waspada Tautan & Lampiran</h3>
        <p>Selalu periksa alamat pengirim email sebelum membuka pesan. Hindari mengklik tautan atau lampiran dari sumber tidak dikenal. Verifikasi keaslian email yang meminta informasi sensitif melalui saluran komunikasi resmi lainnya.</p>
      </div>
    </div>

    <div class="prevention-item">
      <div class="prevention-step">06</div>
      <div class="prevention-body">
        <h3>Cadangkan Data Secara Berkala</h3>
        <p>Kehilangan data akibat ransomware atau kerusakan perangkat dapat diminimalisir dengan backup rutin ke perangkat eksternal atau layanan cloud storage. Pastikan backup selalu diperbarui secara terjadwal.</p>
      </div>
    </div>
  </div>
</section>

<hr class="section-divider">

<!-- ══ BAD HABITS ══ -->
<section id="habits">
  <div class="reveal">
    <span class="section-tag">05 — Kebiasaan Buruk</span>
    <h2>Hindari <span class="hl">Kebiasaan Buruk</span><br>di Dunia Digital</h2>
    <p class="lead">Beberapa kebiasaan sehari-hari ini terlihat sepele namun bisa membuka celah keamanan yang berbahaya bagi data Anda.</p>
  </div>

  <div class="habits-grid reveal">
    <div class="habit-card tilt-card">
      <div class="habit-label bad">⚠ Bahaya</div>
      <h3>Password Sama untuk Banyak Akun</h3>
      <ul>
        <li>Jika satu akun diretas, semua akun lain yang sama ikut terancam</li>
        <li>Peretas dapat dengan mudah masuk ke berbagai layanan sekaligus</li>
        <li>Gunakan password unik dan berbeda untuk setiap akun penting</li>
      </ul>
    </div>

    <div class="habit-card tilt-card">
      <div class="habit-label bad">⚠ Bahaya</div>
      <h3>Oversharing Informasi Pribadi</h3>
      <ul>
        <li>Penjahat siber bisa gunakan info pribadi untuk mencuri identitas</li>
        <li>Detail sensitif yang tersebar membuka peluang peretasan lebih besar</li>
        <li>Batasi informasi yang dibagikan di media sosial dan platform publik</li>
      </ul>
    </div>

    <div class="habit-card tilt-card">
      <div class="habit-label bad">⚠ Bahaya</div>
      <h3>Mengabaikan Update Keamanan</h3>
      <ul>
        <li>Pembaruan keamanan menambal celah yang bisa dieksploitasi peretas</li>
        <li>Menunda update memberikan waktu bagi penyerang untuk menyerang</li>
        <li>Aktifkan pembaruan otomatis untuk semua perangkat dan aplikasi</li>
      </ul>
    </div>
  </div>
</section>

<hr class="section-divider">

<!-- ══ CONCLUSION ══ -->
<section id="conclusion">
  <div class="reveal">
    <span class="section-tag">06 — Kesimpulan</span>
    <h2>Kesimpulan & <span class="hl">Langkah Selanjutnya</span></h2>
  </div>

  <div class="conclusion-box reveal">
    <h2>Mulai Lindungi Diri Anda Hari Ini</h2>
    <p>Keamanan siber bukan hanya tanggung jawab perusahaan — setiap individu perlu mengambil langkah proaktif untuk melindungi data dan privasi digital mereka. Dengan pengetahuan dan kebiasaan yang tepat, risiko serangan siber bisa diminimalisir secara signifikan.</p>

    <div class="conclusion-tips">
      <div class="conclusion-tip">✅ Password unik & kuat</div>
      <div class="conclusion-tip">✅ Aktifkan 2FA</div>
      <div class="conclusion-tip">✅ Gunakan VPN</div>
      <div class="conclusion-tip">✅ Update rutin</div>
      <div class="conclusion-tip">✅ Backup berkala</div>
      <div class="conclusion-tip">✅ Waspada phishing</div>
    </div>
  </div>
</section>

<footer>
  <p>Dibuat oleh <strong>Hanover and Tyke</strong> · Kesadaran Keamanan Siber (Personal Security) · <?php echo date('Y'); ?></p>
</footer>

<script>
// Progress bar
window.addEventListener('scroll', () => {
  const scrollTop = document.documentElement.scrollTop;
  const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  const progress = (scrollTop / scrollHeight) * 100;
  document.getElementById('progress-bar').style.width = progress + '%';
});

// Smooth scroll nav active state
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-links a');

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + entry.target.id) {
          link.classList.add('active');
        }
      });
    }
  });
}, { rootMargin: '-40% 0px -40% 0px' });

sections.forEach(s => observer.observe(s));

// Reveal on scroll
const reveals = document.querySelectorAll('.reveal');
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry, i) => {
    if (entry.isIntersecting) {
      entry.target.style.transitionDelay = (i % 3) * 0.1 + 's';
      entry.target.classList.add('visible');
    }
  });
}, { threshold: 0.1 });

reveals.forEach(el => revealObserver.observe(el));

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', (e) => {
    e.preventDefault();
    const target = document.querySelector(anchor.getAttribute('href'));
    if (target) {
      const offset = 80;
      const top = target.getBoundingClientRect().top + window.scrollY - offset;
      window.scrollTo({ top, behavior: 'smooth' });
    }
  });
});

// Cursor glow
const glow = document.getElementById('cursorGlow');
document.addEventListener('mousemove', (e) => {
  glow.style.left = e.clientX + 'px';
  glow.style.top = e.clientY + 'px';
});

// Card tilt effect
document.querySelectorAll('.tilt-card').forEach(card => {
  card.addEventListener('mousemove', (e) => {
    const rect = card.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    const rotateX = ((y / rect.height) - 0.5) * -8;
    const rotateY = ((x / rect.width) - 0.5) * 8;
    card.style.transform = `perspective(900px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-6px)`;
  });

  card.addEventListener('mouseleave', () => {
    card.style.transform = '';
  });
});
</script>
</body>
</html>