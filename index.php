<?php
session_start();

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

/* ── THREAT SLIDESHOW ── */
.threat-slideshow {
  margin-top: 2.5rem;
  position: relative;
  overflow: hidden;
  border-radius: 30px;
  border: 1px solid rgba(255,255,255,0.12);
  background: linear-gradient(145deg, rgba(255,255,255,0.08), rgba(255,255,255,0.03));
  box-shadow: 0 30px 80px rgba(0,0,0,0.30);
}

.threat-slides-track {
  display: flex;
  transition: transform 0.55s cubic-bezier(0.4, 0, 0.2, 1);
  will-change: transform;
}

.threat-slide {
  min-width: 100%;
  padding: 2.6rem 2.4rem 2rem;
  display: flex;
  flex-direction: column;
  gap: 1.6rem;
}

.slide-header {
  display: flex;
  align-items: center;
  gap: 1.4rem;
}

.slide-badge {
  width: 78px;
  height: 78px;
  min-width: 78px;
  border-radius: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 2.2rem;
  border: 1px solid rgba(255,255,255,0.15);
  box-shadow: inset 0 1px 0 rgba(255,255,255,0.18), 0 16px 40px rgba(0,0,0,0.2);
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
}

.slide-badge::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(145deg, rgba(255,255,255,0.18), transparent 55%);
  opacity: 0.7;
}

.slide-badge.red    { background: linear-gradient(135deg, rgba(255,80,80,0.35),  rgba(255,200,87,0.15)); }
.slide-badge.orange { background: linear-gradient(135deg, rgba(255,167,51,0.35), rgba(255,200,87,0.15)); }
.slide-badge.purple { background: linear-gradient(135deg, rgba(139,92,246,0.35), rgba(125,211,252,0.1)); }
.slide-badge.teal   { background: linear-gradient(135deg, rgba(45,212,191,0.35), rgba(125,211,252,0.1)); }
.slide-badge.blue   { background: linear-gradient(135deg, rgba(79,124,255,0.35), rgba(125,211,252,0.15)); }

.slide-title-wrap {
  flex: 1;
}

.slide-num {
  font-size: 0.7rem;
  font-weight: 900;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--muted);
  margin-bottom: 0.35rem;
}

.slide-title {
  font-family: 'Space Grotesk', sans-serif;
  font-size: clamp(1.6rem, 4vw, 2.4rem);
  font-weight: 800;
  color: #fff;
  letter-spacing: -0.04em;
  line-height: 1.05;
}

.slide-body {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1.4rem;
}

@media (max-width: 720px) {
  .slide-body { grid-template-columns: 1fr; }
  .threat-slide { padding: 1.8rem 1.4rem 1.5rem; }
}

.slide-desc-panel,
.slide-example-panel {
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.1);
  border-radius: 20px;
  padding: 1.4rem 1.5rem;
}

.panel-tag {
  font-size: 0.68rem;
  font-weight: 900;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: 0.3rem 0.7rem;
  border-radius: 999px;
  display: inline-block;
  margin-bottom: 0.9rem;
}

.panel-tag.desc-tag {
  background: rgba(125,211,252,0.12);
  color: #9edbff;
  border: 1px solid rgba(125,211,252,0.2);
}

.panel-tag.example-tag {
  background: rgba(255,200,87,0.12);
  color: #ffd97d;
  border: 1px solid rgba(255,200,87,0.22);
}

.slide-desc-panel p {
  font-size: 0.9rem;
  color: var(--muted);
  line-height: 1.82;
}

.example-item {
  display: flex;
  gap: 0.8rem;
  align-items: flex-start;
  padding: 0.7rem 0;
  border-bottom: 1px solid rgba(255,255,255,0.06);
}

.example-item:last-child { border-bottom: none; padding-bottom: 0; }

.example-dot {
  width: 8px;
  height: 8px;
  min-width: 8px;
  border-radius: 50%;
  margin-top: 6px;
  background: linear-gradient(135deg, #ffc857, #7dd3fc);
  box-shadow: 0 0 10px rgba(255,200,87,0.4);
}

.example-item p {
  font-size: 0.85rem;
  color: #c8d6f0;
  line-height: 1.65;
}

.example-item strong {
  color: #ffd97d;
  font-weight: 800;
}

/* slideshow controls */
.slideshow-controls {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1.2rem 2.4rem 1.6rem;
  border-top: 1px solid rgba(255,255,255,0.08);
  gap: 1rem;
  flex-wrap: wrap;
}

.slide-dots {
  display: flex;
  gap: 0.5rem;
  align-items: center;
  flex: 1;
  justify-content: center;
}

.slide-dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: rgba(255,255,255,0.18);
  cursor: pointer;
  transition: all 0.3s ease;
  border: none;
  padding: 0;
}

.slide-dot.active {
  background: linear-gradient(135deg, #7dd3fc, #4f7cff);
  width: 28px;
  border-radius: 999px;
  box-shadow: 0 0 12px rgba(125,211,252,0.5);
}

.slide-arrow {
  width: 42px;
  height: 42px;
  border-radius: 50%;
  background: rgba(255,255,255,0.07);
  border: 1px solid rgba(255,255,255,0.14);
  color: #eaf2ff;
  font-size: 1rem;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.25s ease;
  flex-shrink: 0;
}

.slide-arrow:hover {
  background: rgba(125,211,252,0.15);
  border-color: rgba(125,211,252,0.4);
  transform: scale(1.08);
}

.slide-arrow:disabled {
  opacity: 0.3;
  cursor: not-allowed;
  transform: none;
}

.slide-progress-wrap {
  width: 100%;
  height: 3px;
  background: rgba(255,255,255,0.06);
  border-radius: 0 0 30px 30px;
  overflow: hidden;
}

.slide-progress-bar {
  height: 100%;
  background: linear-gradient(90deg, #4f7cff, #7dd3fc, #ffc857);
  border-radius: 999px;
  transition: width 0.1s linear;
  box-shadow: 0 0 12px rgba(125,211,252,0.4);
}

.slide-counter {
  font-family: 'Space Grotesk', sans-serif;
  font-size: 0.82rem;
  font-weight: 700;
  color: var(--muted);
  min-width: 42px;
  text-align: center;
}

/* ── STATS SECTION ── */
.stats-section {
  padding: 4rem 2rem;
  max-width: 1120px;
  margin: 0 auto;
}

.stats-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 1.2rem;
  margin-top: 0;
}

.stat-card {
  background: linear-gradient(145deg, rgba(255,255,255,0.09), rgba(255,255,255,0.04));
  border: 1px solid rgba(255,255,255,0.11);
  border-radius: 24px;
  padding: 1.6rem 1.4rem;
  text-align: center;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
  cursor: default;
}

.stat-card::before {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 3px;
  background: linear-gradient(90deg, #4f7cff, #7dd3fc, #ffc857);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.4s ease;
}

.stat-card:hover::before { transform: scaleX(1); }
.stat-card:hover {
  transform: translateY(-8px);
  border-color: rgba(125,211,252,.35);
  box-shadow: 0 24px 60px rgba(0,0,0,.25);
}

.stat-num {
  font-family: 'Space Grotesk', sans-serif;
  font-size: 3rem;
  font-weight: 800;
  letter-spacing: -0.04em;
  color: transparent;
  background: linear-gradient(135deg, #7dd3fc, #4f7cff);
  -webkit-background-clip: text;
  background-clip: text;
  line-height: 1;
  margin-bottom: 0.5rem;
}

.stat-label {
  font-size: 0.84rem;
  color: var(--muted);
  font-weight: 600;
  line-height: 1.5;
}

.stat-icon {
  font-size: 1.6rem;
  margin-bottom: 0.75rem;
  display: block;
}

/* ── PASSWORD CHECKER ── */
.password-checker {
  margin-top: 3rem;
  background: linear-gradient(145deg, rgba(255,255,255,0.09), rgba(255,255,255,0.04));
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: 28px;
  padding: 2rem 2.2rem;
  position: relative;
  overflow: hidden;
}

.password-checker::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  background: linear-gradient(90deg, #4f7cff, #7dd3fc, #ffc857);
}

.password-checker h3 {
  font-family: 'Space Grotesk', sans-serif;
  font-size: 1.3rem;
  font-weight: 800;
  color: white;
  margin-bottom: 0.4rem;
  display: flex;
  align-items: center;
  gap: 0.6rem;
}

.password-checker p.desc {
  color: var(--muted);
  font-size: 0.87rem;
  margin-bottom: 1.4rem;
  line-height: 1.6;
}

.pw-input-wrap {
  position: relative;
}

.pw-input-wrap input {
  width: 100%;
  padding: 0.95rem 3.5rem 0.95rem 1.2rem;
  border-radius: 18px;
  border: 1px solid rgba(255,255,255,0.16);
  background: rgba(255,255,255,0.07);
  color: white;
  font-size: 1rem;
  font-family: 'Manrope', monospace;
  letter-spacing: 0.05em;
  outline: none;
  transition: border-color 0.25s ease;
}

.pw-input-wrap input:focus {
  border-color: rgba(125,211,252,0.5);
  background: rgba(125,211,252,0.06);
}

.pw-toggle {
  position: absolute;
  right: 1rem;
  top: 50%;
  transform: translateY(-50%);
  background: none;
  border: none;
  color: var(--muted);
  cursor: pointer;
  font-size: 1rem;
  padding: 0.25rem;
  transition: color 0.2s;
}

.pw-toggle:hover { color: #7dd3fc; }

.pw-strength-bar {
  height: 6px;
  border-radius: 999px;
  background: rgba(255,255,255,0.08);
  margin-top: 0.9rem;
  overflow: hidden;
}

.pw-strength-fill {
  height: 100%;
  border-radius: 999px;
  transition: width 0.4s ease, background 0.4s ease;
  width: 0%;
}

.pw-strength-info {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 0.6rem;
}

.pw-strength-label {
  font-size: 0.82rem;
  font-weight: 800;
  transition: color 0.3s;
}

.pw-strength-score {
  font-size: 0.78rem;
  color: var(--muted);
}

.pw-tips {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
  gap: 0.5rem;
  margin-top: 1.2rem;
}

.pw-tip {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  font-size: 0.78rem;
  color: var(--muted);
  padding: 0.4rem 0.6rem;
  border-radius: 10px;
  background: rgba(255,255,255,0.04);
  transition: all 0.3s ease;
}

.pw-tip.ok {
  color: #6ee7b7;
  background: rgba(110,231,183,0.1);
  border: 1px solid rgba(110,231,183,0.2);
}

.pw-tip .tip-icon {
  width: 18px;
  height: 18px;
  border-radius: 50%;
  background: rgba(255,255,255,0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 0.65rem;
  flex-shrink: 0;
  transition: all 0.3s;
}

.pw-tip.ok .tip-icon {
  background: rgba(110,231,183,0.25);
  color: #6ee7b7;
}

/* ── PHISHING QUIZ ── */
.phishing-quiz {
  margin-top: 2.5rem;
  background: linear-gradient(145deg, rgba(255,255,255,0.09), rgba(255,255,255,0.04));
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: 28px;
  padding: 2rem 2.2rem;
  position: relative;
  overflow: hidden;
}

.phishing-quiz::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  background: linear-gradient(90deg, #ff6b6b, #ffc857, #7dd3fc);
}

.phishing-quiz h3 {
  font-family: 'Space Grotesk', sans-serif;
  font-size: 1.3rem;
  font-weight: 800;
  color: white;
  margin-bottom: 0.4rem;
}

.phishing-quiz p.desc {
  color: var(--muted);
  font-size: 0.87rem;
  margin-bottom: 1.4rem;
}

.quiz-url-box {
  background: rgba(0,0,0,0.3);
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: 14px;
  padding: 1rem 1.2rem;
  font-family: 'Courier New', monospace;
  font-size: 0.95rem;
  color: #e2e8f0;
  margin-bottom: 1.2rem;
  display: flex;
  align-items: center;
  gap: 0.6rem;
  word-break: break-all;
  transition: all 0.3s ease;
}

.quiz-url-box .lock-icon {
  font-size: 0.9rem;
  flex-shrink: 0;
}

.quiz-buttons {
  display: flex;
  gap: 0.75rem;
  flex-wrap: wrap;
}

.quiz-btn {
  flex: 1;
  min-width: 120px;
  padding: 0.85rem 1.5rem;
  border-radius: 14px;
  border: 1px solid transparent;
  font-weight: 800;
  font-size: 0.9rem;
  cursor: pointer;
  transition: all 0.25s ease;
  font-family: 'Manrope', sans-serif;
}

.quiz-btn.safe {
  background: rgba(110,231,183,0.12);
  color: #6ee7b7;
  border-color: rgba(110,231,183,0.25);
}

.quiz-btn.safe:hover {
  background: rgba(110,231,183,0.22);
  transform: translateY(-3px);
  box-shadow: 0 12px 30px rgba(110,231,183,0.15);
}

.quiz-btn.danger {
  background: rgba(255,107,107,0.12);
  color: #fca5a5;
  border-color: rgba(255,107,107,0.25);
}

.quiz-btn.danger:hover {
  background: rgba(255,107,107,0.22);
  transform: translateY(-3px);
  box-shadow: 0 12px 30px rgba(255,107,107,0.15);
}

.quiz-btn.next {
  background: linear-gradient(135deg, #4f7cff, #7dd3fc);
  color: #06101f;
  border-color: transparent;
}

.quiz-btn.next:hover {
  transform: translateY(-3px);
  box-shadow: 0 12px 30px rgba(79,124,255,.35);
}

.quiz-feedback {
  margin-top: 1rem;
  padding: 1rem 1.2rem;
  border-radius: 14px;
  font-size: 0.88rem;
  font-weight: 700;
  line-height: 1.6;
  display: none;
  animation: feedbackPop 0.3s ease;
}

@keyframes feedbackPop {
  from { opacity: 0; transform: scale(0.95) translateY(6px); }
  to { opacity: 1; transform: scale(1) translateY(0); }
}

.quiz-feedback.correct {
  display: block;
  background: rgba(110,231,183,0.12);
  border: 1px solid rgba(110,231,183,0.28);
  color: #6ee7b7;
}

.quiz-feedback.wrong {
  display: block;
  background: rgba(255,107,107,0.12);
  border: 1px solid rgba(255,107,107,0.28);
  color: #fca5a5;
}

.quiz-score {
  font-size: 0.8rem;
  color: var(--muted);
  margin-top: 0.8rem;
  text-align: right;
}

.quiz-progress {
  display: flex;
  gap: 0.35rem;
  margin-bottom: 1rem;
}

.quiz-dot {
  width: 28px;
  height: 6px;
  border-radius: 999px;
  background: rgba(255,255,255,0.1);
  transition: all 0.3s ease;
}

.quiz-dot.done-correct { background: #6ee7b7; }
.quiz-dot.done-wrong   { background: #fca5a5; }
.quiz-dot.current      { background: rgba(125,211,252,0.6); animation: dotPulse 1s infinite; }

@keyframes dotPulse {
  0%,100% { opacity: 1; } 50% { opacity: 0.5; }
}

/* ── TOAST ── */
.toast-container {
  position: fixed;
  bottom: 1.5rem;
  right: 1.5rem;
  z-index: 9999;
  display: flex;
  flex-direction: column;
  gap: 0.6rem;
  pointer-events: none;
}

.toast {
  background: rgba(10, 20, 40, 0.96);
  border: 1px solid rgba(125,211,252,0.24);
  backdrop-filter: blur(20px);
  border-radius: 16px;
  padding: 0.9rem 1.2rem;
  display: flex;
  align-items: center;
  gap: 0.75rem;
  min-width: 240px;
  max-width: 320px;
  color: #eaf2ff;
  font-size: 0.85rem;
  font-weight: 700;
  box-shadow: 0 20px 50px rgba(0,0,0,0.35);
  pointer-events: auto;
  animation: toastIn 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  transform-origin: bottom right;
}

.toast.hiding {
  animation: toastOut 0.35s ease forwards;
}

@keyframes toastIn {
  from { opacity: 0; transform: translateY(20px) scale(0.85); }
  to   { opacity: 1; transform: translateY(0) scale(1); }
}

@keyframes toastOut {
  to { opacity: 0; transform: translateY(10px) scale(0.9); }
}

.toast-icon {
  width: 32px;
  height: 32px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1rem;
  flex-shrink: 0;
}

.toast.info .toast-icon    { background: rgba(79,124,255,0.22); color: #7dd3fc; }
.toast.success .toast-icon { background: rgba(110,231,183,0.22); color: #6ee7b7; }
.toast.warning .toast-icon { background: rgba(255,200,87,0.22); color: #ffc857; }

/* ── TYPING CURSOR ── */
.typing-cursor {
  display: inline-block;
  width: 2px;
  height: 1.1em;
  background: #7dd3fc;
  margin-left: 2px;
  vertical-align: middle;
  animation: blink 1s step-end infinite;
}

@keyframes blink {
  0%,100% { opacity: 1; } 50% { opacity: 0; }
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

/* ── LOGIN & QUIZ ── */
.quiz-link {
  background: linear-gradient(135deg, #4f7cff, #7dd3fc);
  color: #06101f !important;
  box-shadow: 0 10px 28px rgba(125,211,252,.25);
  margin-right: 20px;
}

.logout-link {
  background: rgba(255, 107, 107, 0.18);
  color: #ffb4b4 !important;
  border: 1px solid rgba(255, 107, 107, 0.25);
}

.login-section {
  padding: 6rem 2rem;
  max-width: 1120px;
  margin: 0 auto;
}

.login-box {
  max-width: 560px;
  margin: 0 auto;
  background:
    radial-gradient(circle at 15% 20%, rgba(125,211,252,.18), transparent 24rem),
    linear-gradient(145deg, rgba(255,255,255,0.10), rgba(255,255,255,0.045));
  border: 1px solid rgba(255,255,255,0.14);
  border-radius: 34px;
  padding: 3rem 2.2rem;
  box-shadow: 0 30px 90px rgba(0,0,0,.30);
  backdrop-filter: blur(18px);
}

.login-box h2 {
  font-family: 'Space Grotesk', sans-serif;
  font-size: clamp(2rem, 5vw, 3.4rem);
  font-weight: 800;
  letter-spacing: -0.05em;
  text-align: center;
  margin-bottom: 1rem;
  color: #ffffff;
}

.login-box h2 span {
  color: transparent;
  background: linear-gradient(90deg, #7dd3fc, #4f7cff);
  -webkit-background-clip: text;
  background-clip: text;
}

.login-box p {
  color: var(--muted);
  text-align: center;
  line-height: 1.7;
  margin-bottom: 2rem;
}

.login-box label {
  display: block;
  color: white;
  font-weight: 800;
  margin-bottom: 0.6rem;
}

.login-box input {
  width: 100%;
  padding: 1rem 1.1rem;
  border-radius: 18px;
  border: 1px solid rgba(255,255,255,0.16);
  background: rgba(255,255,255,0.08);
  color: white;
  outline: none;
  font-size: 0.95rem;
  margin-bottom: 1rem;
}

.login-box input::placeholder {
  color: #8fa2c2;
}

.btn-login {
  width: 100%;
  margin-top: 0.8rem;
  border: none;
  padding: 1rem 2rem;
  border-radius: 999px;
  background: linear-gradient(135deg, #4f7cff 0%, #7dd3fc 100%);
  color: #06101f;
  font-weight: 900;
  font-size: 1rem;
  cursor: pointer;
  box-shadow: 0 16px 45px rgba(79,124,255,0.34);
  transition: 0.3s ease;
}

.btn-login:hover {
  transform: translateY(-4px);
  box-shadow: 0 22px 55px rgba(79,124,255,0.44);
}

.login-note {
  margin-top: 1.5rem;
  padding: 1rem;
  border-radius: 18px;
  background: rgba(125,211,252,0.08);
  border: 1px solid rgba(125,211,252,0.14);
  color: var(--muted);
  font-size: 0.86rem;
  line-height: 1.7;
}

.user-status {
  margin-top: 1.5rem;
  padding: 1rem;
  text-align: center;
  border-radius: 18px;
  background: rgba(125,211,252,0.10);
  border: 1px solid rgba(125,211,252,0.18);
  color: #dbeafe;
  font-weight: 800;
}

.modal {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.7);
    backdrop-filter: blur(6px);
    z-index: 9999;

    justify-content: center;
    align-items: center;
}

.modal.active {
    display: flex;
}

.modal-content {
    width: 90%;
    max-width: 600px;
    position: relative;
}

.close-modal {
    position: absolute;
    top: 15px;
    right: 20px;
    font-size: 28px;
    cursor: pointer;
    color: white;
    z-index: 10000;
}

.modal .login-section{
    padding: 0;
    margin: 0;
    max-width: none;
}

.modal .login-box{
    margin: 0 auto;
}

.modal-content{
    width: 100%;
    max-width: 700px;
    position: relative;
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

    <?php if (isset($_SESSION["login"])): ?>
      <a href="arah_quiz.php" class="quiz-link">Quiz</a>
      <a href="logout.php" class="logout-link">Logout</a>
    <?php else: ?>
      <a href="#" class="quiz-link" id="openLogin">Login</a>
    <?php endif; ?>    
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
    <p class="hero-sub" id="heroTyping"></p>

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

<!-- ══ STATS ══ -->
<div class="stats-section">
  <div class="stats-grid reveal">
    <div class="stat-card">
      <span class="stat-icon">🌐</span>
      <div class="stat-num" data-target="2200" data-suffix="+">0</div>
      <div class="stat-label">Serangan siber terjadi<br>setiap detik di dunia</div>
    </div>
    <div class="stat-card">
      <span class="stat-icon">💸</span>
      <div class="stat-num" data-target="8" data-prefix="$" data-suffix="T">0</div>
      <div class="stat-label">Kerugian global akibat<br>kejahatan siber (2023)</div>
    </div>
    <div class="stat-card">
      <span class="stat-icon">📧</span>
      <div class="stat-num" data-target="3.4" data-suffix="B">0</div>
      <div class="stat-label">Email phishing dikirim<br>setiap hari</div>
    </div>
    <div class="stat-card">
      <span class="stat-icon">🔐</span>
      <div class="stat-num" data-target="90" data-suffix="%">0</div>
      <div class="stat-label">Serangan bisa dicegah<br>dengan kebiasaan aman</div>
    </div>
  </div>
</div>

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

  <!-- THREAT SLIDESHOW -->
  <div class="threat-slideshow reveal" id="threatSlideshow">
    <div class="threat-slides-track" id="slideTrack">

      <!-- SLIDE 1: RANSOMWARE -->
      <div class="threat-slide">
        <div class="slide-header">
          <div class="slide-badge red">💣</div>
          <div class="slide-title-wrap">
            <div class="slide-num">Ancaman 01 / 05</div>
            <div class="slide-title">Ransomware</div>
          </div>
        </div>
        <div class="slide-body">
          <div class="slide-desc-panel">
            <span class="panel-tag desc-tag">📖 Penjelasan</span>
            <p>Jenis serangan yang <strong style="color:#fff">mengunci atau mengenkripsi data</strong> pada perangkat korban sehingga tidak dapat diakses. Pelaku kemudian meminta sejumlah uang tebusan (biasanya dalam bentuk kripto) agar data dapat dikembalikan. Sangat berbahaya karena dapat menyebabkan kehilangan data permanen jika tebusan tidak dibayar.</p>
          </div>
          <div class="slide-example-panel">
            <span class="panel-tag example-tag">⚡ Contoh Nyata</span>
            <div class="example-item">
              <div class="example-dot"></div>
              <p><strong>WannaCry (2017)</strong> — Menyerang 200.000+ komputer di 150 negara dalam 1 hari, termasuk rumah sakit di Inggris yang terpaksa menolak pasien.</p>
            </div>
            <div class="example-item">
              <div class="example-dot"></div>
              <p><strong>REvil (2021)</strong> — Mengunci sistem Kaseya dan meminta tebusan $70 juta dalam Bitcoin dari ribuan perusahaan klien mereka.</p>
            </div>
            <div class="example-item">
              <div class="example-dot"></div>
              <p><strong>Petya/NotPetya</strong> — Menyebabkan kerugian $10 miliar global, melumpuhkan perusahaan logistik Maersk selama beberapa hari.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- SLIDE 2: MALWARE -->
      <div class="threat-slide">
        <div class="slide-header">
          <div class="slide-badge orange">🦠</div>
          <div class="slide-title-wrap">
            <div class="slide-num">Ancaman 02 / 05</div>
            <div class="slide-title">Malware</div>
          </div>
        </div>
        <div class="slide-body">
          <div class="slide-desc-panel">
            <span class="panel-tag desc-tag">📖 Penjelasan</span>
            <p>Perangkat lunak berbahaya (<strong style="color:#fff">malicious software</strong>) yang dirancang untuk merusak, mencuri data, atau mengendalikan perangkat tanpa izin pengguna. Meliputi virus, trojan horse, spyware, adware, dan worm yang dapat masuk melalui unduhan atau situs berbahaya.</p>
          </div>
          <div class="slide-example-panel">
            <span class="panel-tag example-tag">⚡ Contoh Nyata</span>
            <div class="example-item">
              <div class="example-dot"></div>
              <p><strong>Emotet Trojan</strong> — Menyebar via email lampiran Word, mencuri data perbankan jutaan pengguna di seluruh dunia sejak 2014.</p>
            </div>
            <div class="example-item">
              <div class="example-dot"></div>
              <p><strong>Stuxnet Worm</strong> — Malware pertama yang menyerang infrastruktur fisik, merusak sentrifugal nuklir Iran tanpa koneksi internet.</p>
            </div>
            <div class="example-item">
              <div class="example-dot"></div>
              <p><strong>Pegasus Spyware</strong> — Mampu mengakses kamera, mikrofon, dan seluruh isi HP hanya dengan satu SMS tanpa perlu diklik korban.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- SLIDE 3: PHISHING -->
      <div class="threat-slide">
        <div class="slide-header">
          <div class="slide-badge purple">🎣</div>
          <div class="slide-title-wrap">
            <div class="slide-num">Ancaman 03 / 05</div>
            <div class="slide-title">Phishing</div>
          </div>
        </div>
        <div class="slide-body">
          <div class="slide-desc-panel">
            <span class="panel-tag desc-tag">📖 Penjelasan</span>
            <p>Penipuan online yang bertujuan <strong style="color:#fff">mencuri informasi pribadi</strong> seperti password, PIN, atau nomor rekening dengan menyamar sebagai pihak terpercaya melalui email, SMS (smishing), telepon (vishing), atau situs web palsu yang terlihat sangat mirip aslinya.</p>
          </div>
          <div class="slide-example-panel">
            <span class="panel-tag example-tag">⚡ Contoh Nyata</span>
            <div class="example-item">
              <div class="example-dot"></div>
              <p><strong>Kasus BRI Life (2021)</strong> — Data 2 juta nasabah bocor setelah karyawan mengklik email phishing yang terlihat seperti email internal.</p>
            </div>
            <div class="example-item">
              <div class="example-dot"></div>
              <p><strong>SMS "Paket Tertahan"</strong> — Penipuan massif di Indonesia meminta korban input data di situs palsu JNE/J&T yang sangat mirip aslinya.</p>
            </div>
            <div class="example-item">
              <div class="example-dot"></div>
              <p><strong>Spear Phishing Google/Facebook (2013-2015)</strong> — Peretas Lituania berhasil mencuri $100 juta via email invoice palsu yang sangat meyakinkan.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- SLIDE 4: SOCIAL ENGINEERING -->
      <div class="threat-slide">
        <div class="slide-header">
          <div class="slide-badge teal">🎭</div>
          <div class="slide-title-wrap">
            <div class="slide-num">Ancaman 04 / 05</div>
            <div class="slide-title">Social Engineering</div>
          </div>
        </div>
        <div class="slide-body">
          <div class="slide-desc-panel">
            <span class="panel-tag desc-tag">📖 Penjelasan</span>
            <p>Teknik manipulasi psikologis yang mengeksploitasi <strong style="color:#fff">kepercayaan dan emosi manusia</strong> daripada celah teknis. Pelaku berpura-pura sebagai orang yang dikenal, otoritas, atau pihak berwenang untuk mendapatkan akses atau informasi sensitif dari korban.</p>
          </div>
          <div class="slide-example-panel">
            <span class="panel-tag example-tag">⚡ Contoh Nyata</span>
            <div class="example-item">
              <div class="example-dot"></div>
              <p><strong>Penipuan "Mama Minta Pulsa"</strong> — Pelaku pura-pura jadi anggota keluarga darurat untuk meminta transfer uang atau pulsa via WhatsApp.</p>
            </div>
            <div class="example-item">
              <div class="example-dot"></div>
              <p><strong>Twitter Hack (2020)</strong> — Hacker manipulasi karyawan Twitter via telepon untuk mereset akun dan mencuri akun Biden, Obama, Musk demi Bitcoin.</p>
            </div>
            <div class="example-item">
              <div class="example-dot"></div>
              <p><strong>Penipuan CS Bank Palsu</strong> — Menelepon korban mengaku petugas bank, meminta OTP dengan alasan "verifikasi keamanan" darurat.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- SLIDE 5: DDOS -->
      <div class="threat-slide">
        <div class="slide-header">
          <div class="slide-badge blue">🌊</div>
          <div class="slide-title-wrap">
            <div class="slide-num">Ancaman 05 / 05</div>
            <div class="slide-title">Serangan DDoS</div>
          </div>
        </div>
        <div class="slide-body">
          <div class="slide-desc-panel">
            <span class="panel-tag desc-tag">📖 Penjelasan</span>
            <p><strong style="color:#fff">Distributed Denial of Service</strong> — menyerang dengan membanjiri server atau jaringan dengan jutaan permintaan palsu secara bersamaan hingga sistem tidak mampu melayani pengguna nyata dan akhirnya crash atau tidak dapat diakses.</p>
          </div>
          <div class="slide-example-panel">
            <span class="panel-tag example-tag">⚡ Contoh Nyata</span>
            <div class="example-item">
              <div class="example-dot"></div>
              <p><strong>GitHub DDoS (2018)</strong> — Serangan terbesar saat itu: 1,35 Tbps membanjiri GitHub selama 10 menit, sempat membuat layanan tidak bisa diakses.</p>
            </div>
            <div class="example-item">
              <div class="example-dot"></div>
              <p><strong>Dyn DNS Attack (2016)</strong> — Melumpuhkan Twitter, Netflix, Spotify, dan Reddit sekaligus selama berjam-jam menggunakan botnet perangkat IoT (kamera CCTV).</p>
            </div>
            <div class="example-item">
              <div class="example-dot"></div>
              <p><strong>Situs Pemerintah Indonesia (2023)</strong> — Beberapa situs kementerian lumpuh akibat serangan DDoS dari kelompok hacktivist internasional.</p>
            </div>
          </div>
        </div>
      </div>

    </div><!-- end slides-track -->

    <!-- Autoplay progress -->
    <div class="slide-progress-wrap">
      <div class="slide-progress-bar" id="slideProgressBar"></div>
    </div>

    <!-- Controls -->
    <div class="slideshow-controls">
      <button class="slide-arrow" id="slidePrev" onclick="slideMove(-1)" title="Sebelumnya">&#8592;</button>
      <div class="slide-dots" id="slideDots"></div>
      <span class="slide-counter" id="slideCounter">1 / 5</span>
      <button class="slide-arrow" id="slideNext" onclick="slideMove(1)" title="Berikutnya">&#8594;</button>
    </div>
  </div>

  <!-- PHISHING QUIZ -->
  <div class="phishing-quiz reveal" id="phishingQuiz">
    <h3>🎯 Tes Kemampuanmu!</h3>
    <p class="desc">Apakah URL berikut aman atau phishing? Pilih jawabanmu dan lihat penjelasannya.</p>

    <div class="quiz-progress" id="quizProgress"></div>

    <div class="quiz-url-box" id="quizUrlBox">
      <span class="lock-icon" id="quizLock">🔒</span>
      <span id="quizUrl">Memuat soal...</span>
    </div>

    <div class="quiz-buttons">
      <button class="quiz-btn safe" id="quizSafeBtn" onclick="answerQuiz('safe')">✅ Aman</button>
      <button class="quiz-btn danger" id="quizDangerBtn" onclick="answerQuiz('phishing')">⚠️ Phishing</button>
      <button class="quiz-btn next" id="quizNextBtn" onclick="nextQuiz()" style="display:none;">Soal Berikut →</button>
    </div>

    <div class="quiz-feedback" id="quizFeedback"></div>
    <div class="quiz-score" id="quizScore"></div>
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

  <!-- PASSWORD CHECKER -->
  <div class="password-checker reveal">
    <h3>🔐 Cek Kekuatan Password</h3>
    <p class="desc">Ketik password untuk melihat seberapa kuat — tidak ada yang disimpan atau dikirim ke server.</p>

    <div class="pw-input-wrap">
      <input type="password" id="pwInput" placeholder="Ketik password di sini..." autocomplete="off" oninput="checkPassword()">
      <button class="pw-toggle" id="pwToggle" onclick="togglePw()" title="Tampilkan/Sembunyikan"><i class="fa-solid fa-eye" id="pwEyeIcon"></i></button>
    </div>

    <div class="pw-strength-bar"><div class="pw-strength-fill" id="pwFill"></div></div>
    <div class="pw-strength-info">
      <span class="pw-strength-label" id="pwLabel">Belum ada input</span>
      <span class="pw-strength-score" id="pwScore"></span>
    </div>

    <div class="pw-tips">
      <div class="pw-tip" id="tip-length"><span class="tip-icon">✗</span> Min. 12 karakter</div>
      <div class="pw-tip" id="tip-upper"><span class="tip-icon">✗</span> Huruf besar (A-Z)</div>
      <div class="pw-tip" id="tip-lower"><span class="tip-icon">✗</span> Huruf kecil (a-z)</div>
      <div class="pw-tip" id="tip-number"><span class="tip-icon">✗</span> Angka (0-9)</div>
      <div class="pw-tip" id="tip-symbol"><span class="tip-icon">✗</span> Simbol (!@#$...)</div>
      <div class="pw-tip" id="tip-unique"><span class="tip-icon">✗</span> Tidak umum</div>
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

<hr class="section-divider">

<!-- LOGIN MODAL -->
<div id="loginModal" class="modal">
  <div class="modal-content">
    <span class="close-modal">&times;</span>

    <section class="login-section">

      <div class="login-box">

        <?php if (!isset($_SESSION["login"])): ?>
          <h2>Login <span>Akun Quiz</span></h2>

          <p>
            Silakan login terlebih dahulu. Setelah login,
            tombol Quiz akan otomatis masuk sesuai role akun.
          </p>

          <form action="proses_login.php" method="POST">

            <label for="username">Username</label>
            <input
              type="text"
              name="username"
              id="username"
              placeholder="Masukkan username"
              required
            >

            <label for="password">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Masukkan password"
              required
            >

            <button type="submit" class="btn-login">
              Login
            </button>

          </form>

        <?php else: ?>

          <h2>Anda Sudah <span>Login</span></h2>

          <p>Sekarang kamu bisa menekan tombol Quiz di navbar.</p>

          <div class="user-status">
            Login sebagai: <?= $_SESSION["nama"]; ?>
            <br>
            Role: <?= ucfirst($_SESSION["role"]); ?>
          </div>

          <a
            href="arah_quiz.php"
            class="btn-login"
            style="display:block;text-align:center;text-decoration:none;"
          >
            Masuk Quiz →
          </a>

        <?php endif; ?>

      </div>

    </section>

  </div>
</div>

<footer>
  <p>Dibuat oleh <strong>Hanover and Tyke</strong> · Kesadaran Keamanan Siber (Personal Security) · <?php echo date('Y'); ?></p>
</footer>

<!-- TOAST CONTAINER -->
<div class="toast-container" id="toastContainer"></div>

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
<script>
// ── TYPING ANIMATION ──
const typingEl = document.getElementById('heroTyping');
const typingTexts = [
  'Lindungi diri, perangkat, akun, dan data pribadi Anda dari ancaman di dunia digital.',
  'Satu langkah kecil hari ini dapat mencegah kerugian besar di masa depan.',
  'Keamanan digital dimulai dari kebiasaan dan kesadaran diri sendiri.'
];
let tIdx = 0, cIdx = 0, isDeleting = false;
function typeLoop() {
  const text = typingTexts[tIdx];
  if (!isDeleting) {
    cIdx++;
    typingEl.innerHTML = text.slice(0, cIdx) + '<span class="typing-cursor"></span>';
    if (cIdx === text.length) { isDeleting = true; setTimeout(typeLoop, 2400); return; }
  } else {
    cIdx--;
    typingEl.innerHTML = text.slice(0, cIdx) + '<span class="typing-cursor"></span>';
    if (cIdx === 0) { isDeleting = false; tIdx = (tIdx + 1) % typingTexts.length; setTimeout(typeLoop, 400); return; }
  }
  setTimeout(typeLoop, isDeleting ? 22 : 38);
}
setTimeout(typeLoop, 800);

// ── TOAST SYSTEM ──
function showToast(msg, type = 'info', icon = 'ℹ️') {
  const c = document.getElementById('toastContainer');
  const t = document.createElement('div');
  t.className = `toast ${type}`;
  t.innerHTML = `<div class="toast-icon">${icon}</div><div>${msg}</div>`;
  c.appendChild(t);
  setTimeout(() => { t.classList.add('hiding'); setTimeout(() => t.remove(), 360); }, 3800);
}

// ── STATS COUNTER ──
function animateCounter(el) {
  const target = parseFloat(el.dataset.target);
  const prefix = el.dataset.prefix || '';
  const suffix = el.dataset.suffix || '';
  const isDecimal = target % 1 !== 0;
  const duration = 1800;
  const step = 16;
  const steps = duration / step;
  const increment = target / steps;
  let current = 0;
  const timer = setInterval(() => {
    current += increment;
    if (current >= target) { current = target; clearInterval(timer); }
    el.textContent = prefix + (isDecimal ? current.toFixed(1) : Math.floor(current).toLocaleString()) + suffix;
  }, step);
}

const statObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting && !entry.target.dataset.counted) {
      entry.target.dataset.counted = '1';
      animateCounter(entry.target);
    }
  });
}, { threshold: 0.5 });

document.querySelectorAll('.stat-num').forEach(el => statObserver.observe(el));

// ── SECTION TOAST NOTIFICATIONS ──
const sectionToasts = {
  'threats':    ['⚠️ Kenali ancaman sebelum menjadi korban!', 'warning', '⚠️'],
  'prevention': ['🛡 Terapkan langkah pencegahan mulai hari ini!', 'info', '🛡'],
  'habits':     ['💡 Cek apakah kamu punya kebiasaan berbahaya ini?', 'warning', '💡'],
  'conclusion': ['✅ Kamu hampir selesai membaca! Bagus sekali!', 'success', '✅']
};
const toastedSections = new Set();
const toastObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting && !toastedSections.has(entry.target.id)) {
      toastedSections.add(entry.target.id);
      const t = sectionToasts[entry.target.id];
      if (t) setTimeout(() => showToast(...t), 400);
    }
  });
}, { threshold: 0.3 });

['threats','prevention','habits','conclusion'].forEach(id => {
  const el = document.getElementById(id);
  if (el) toastObserver.observe(el);
});

// ── PASSWORD STRENGTH CHECKER ──
const commonPw = ['password','123456','qwerty','abc123','letmein','monkey','dragon','111111','master','welcome'];
function checkPassword() {
  const val = document.getElementById('pwInput').value;
  const fill = document.getElementById('pwFill');
  const label = document.getElementById('pwLabel');
  const scoreEl = document.getElementById('pwScore');
  if (!val) {
    fill.style.width = '0%';
    label.textContent = 'Belum ada input'; label.style.color = 'var(--muted)';
    scoreEl.textContent = '';
    ['length','upper','lower','number','symbol','unique'].forEach(t => setTip(t, false));
    return;
  }
  const checks = {
    length: val.length >= 12,
    upper:  /[A-Z]/.test(val),
    lower:  /[a-z]/.test(val),
    number: /[0-9]/.test(val),
    symbol: /[^A-Za-z0-9]/.test(val),
    unique: !commonPw.some(p => val.toLowerCase().includes(p))
  };
  Object.entries(checks).forEach(([k,v]) => setTip(k, v));
  const score = Object.values(checks).filter(Boolean).length;
  const pct = (score / 6) * 100;
  const configs = [
    { pct: 0,  color: 'transparent', text: '', cl: '' },
    { pct: 17, color: '#ff6b6b', text: 'Sangat Lemah', cl: '#ff6b6b' },
    { pct: 34, color: '#ffa94d', text: 'Lemah', cl: '#ffa94d' },
    { pct: 50, color: '#ffc857', text: 'Cukup', cl: '#ffc857' },
    { pct: 67, color: '#74c0fc', text: 'Baik', cl: '#74c0fc' },
    { pct: 84, color: '#69db7c', text: 'Kuat', cl: '#69db7c' },
    { pct: 100, color: 'linear-gradient(90deg,#69db7c,#38f8ff)', text: '🔒 Sangat Kuat!', cl: '#6ee7b7' }
  ];
  const cfg = configs[score];
  fill.style.width = pct + '%';
  fill.style.background = cfg.color;
  label.textContent = cfg.text;
  label.style.color = cfg.cl;
  scoreEl.textContent = `${score}/6 kriteria terpenuhi`;
}
function setTip(id, ok) {
  const el = document.getElementById('tip-' + id);
  if (!el) return;
  const icon = el.querySelector('.tip-icon');
  if (ok) { el.classList.add('ok'); icon.textContent = '✓'; }
  else { el.classList.remove('ok'); icon.textContent = '✗'; }
}
function togglePw() {
  const inp = document.getElementById('pwInput');
  const icon = document.getElementById('pwEyeIcon');
  if (inp.type === 'password') { inp.type = 'text'; icon.className = 'fa-solid fa-eye-slash'; }
  else { inp.type = 'password'; icon.className = 'fa-solid fa-eye'; }
}

// ── PHISHING QUIZ ──
const quizData = [
  { url: 'https://www.bank-bca.com.login-verifikasi.xyz/akun', safe: false,
    explain: 'Domain utama adalah login-verifikasi.xyz, bukan bca.com. Ini teknik subdomain palsu yang sangat umum digunakan phisher.' },
  { url: 'https://www.tokopedia.com/product/detail?id=12345', safe: true,
    explain: 'Domain resmi tokopedia.com dengan HTTPS. URL ini aman dan valid.' },
  { url: 'http://paypa1.com/secure/login?verify=true', safe: false,
    explain: 'Perhatikan "paypa1" (angka 1 bukan huruf l). Tidak ada HTTPS. Ini phishing klasik dengan typosquatting!' },
  { url: 'https://accounts.google.com/signin/v2/identifier', safe: true,
    explain: 'Domain resmi google.com dengan HTTPS dan subdomain accounts yang sah. URL ini aman.' },
  { url: 'http://mandiri-secure.id-login.net/konfirmasi-akun', safe: false,
    explain: 'Domain utama adalah id-login.net, bukan mandiri.co.id. Tidak ada HTTPS. Sangat mencurigakan!' },
  { url: 'https://shopee.co.id/flash-sale?categoryId=100008', safe: true,
    explain: 'Domain resmi shopee.co.id dengan HTTPS. Ini URL yang valid dan aman.' },
  { url: 'https://instagram-support-help.com/verify-account-now', safe: false,
    explain: 'Instagram menggunakan domain instagram.com, bukan instagram-support-help.com. Ini phishing!' }
];
let qIdx = 0, qScore = 0, qAnswered = false;

function renderQuiz() {
  const q = quizData[qIdx];
  document.getElementById('quizUrl').textContent = q.url;
  document.getElementById('quizLock').textContent = q.url.startsWith('https') ? '🔒' : '🔓';
  document.getElementById('quizUrlBox').style.borderColor = 'rgba(255,255,255,0.12)';
  document.getElementById('quizFeedback').className = 'quiz-feedback';
  document.getElementById('quizFeedback').textContent = '';
  document.getElementById('quizSafeBtn').style.display = '';
  document.getElementById('quizDangerBtn').style.display = '';
  document.getElementById('quizNextBtn').style.display = 'none';
  document.getElementById('quizScore').textContent = `Skor: ${qScore}/${qIdx} benar`;
  qAnswered = false;
  renderProgress();
}

function renderProgress() {
  const p = document.getElementById('quizProgress');
  p.innerHTML = '';
  quizData.forEach((q, i) => {
    const d = document.createElement('div');
    d.className = 'quiz-dot';
    if (i < qIdx) d.classList.add(q._result ? 'done-correct' : 'done-wrong');
    else if (i === qIdx) d.classList.add('current');
    p.appendChild(d);
  });
}

function answerQuiz(answer) {
  if (qAnswered) return;
  qAnswered = true;
  const q = quizData[qIdx];
  const correct = (answer === 'safe') === q.safe;
  q._result = correct;
  if (correct) qScore++;
  const fb = document.getElementById('quizFeedback');
  fb.className = 'quiz-feedback ' + (correct ? 'correct' : 'wrong');
  fb.innerHTML = (correct ? '✅ <strong>Benar!</strong> ' : '❌ <strong>Salah!</strong> ') + q.explain;
  document.getElementById('quizUrlBox').style.borderColor = correct ? 'rgba(110,231,183,0.4)' : 'rgba(255,107,107,0.4)';
  document.getElementById('quizSafeBtn').style.display = 'none';
  document.getElementById('quizDangerBtn').style.display = 'none';
  const nextBtn = document.getElementById('quizNextBtn');
  nextBtn.style.display = '';
  if (qIdx === quizData.length - 1) nextBtn.textContent = '🏆 Lihat Hasil';
  else nextBtn.textContent = 'Soal Berikut →';
  document.getElementById('quizScore').textContent = `Skor: ${qScore}/${qIdx + 1} benar`;
  renderProgress();
}

function nextQuiz() {
  qIdx++;
  if (qIdx >= quizData.length) {
    const pct = Math.round((qScore / quizData.length) * 100);
    let grade = pct >= 80 ? '🏆 Luar Biasa! Kamu ahli deteksi phishing!' :
                pct >= 60 ? '👍 Bagus! Terus tingkatkan kewaspadaanmu.' :
                '📚 Perlu belajar lebih banyak tentang phishing.';
    document.getElementById('quizUrlBox').innerHTML = `<span style="font-family:Manrope;color:#eaf2ff;font-size:1rem;">Skor akhir: <strong style="color:#7dd3fc">${qScore}/${quizData.length}</strong> (${pct}%) — ${grade}</span>`;
    document.getElementById('quizFeedback').className = 'quiz-feedback correct';
    document.getElementById('quizFeedback').textContent = 'Kuis selesai! Refresh halaman untuk mencoba lagi.';
    document.getElementById('quizSafeBtn').style.display = 'none';
    document.getElementById('quizDangerBtn').style.display = 'none';
    document.getElementById('quizNextBtn').style.display = 'none';
    document.getElementById('quizScore').textContent = '';
    showToast(grade, pct >= 60 ? 'success' : 'warning', pct >= 80 ? '🏆' : pct >= 60 ? '👍' : '📚');
    return;
  }
  renderQuiz();
}

renderQuiz();
</script>
<script>
// ── THREAT SLIDESHOW ──
(function() {
  const TOTAL = 5;
  const AUTOPLAY_MS = 5500;
  let current = 0;
  let autoTimer = null;
  let progressTimer = null;
  let progressStart = null;
  let paused = false;

  const track   = document.getElementById('slideTrack');
  const dotsWrap = document.getElementById('slideDots');
  const counter  = document.getElementById('slideCounter');
  const prevBtn  = document.getElementById('slidePrev');
  const nextBtn  = document.getElementById('slideNext');
  const progressBar = document.getElementById('slideProgressBar');

  // Build dots
  for (let i = 0; i < TOTAL; i++) {
    const d = document.createElement('button');
    d.className = 'slide-dot' + (i === 0 ? ' active' : '');
    d.setAttribute('aria-label', 'Slide ' + (i + 1));
    d.addEventListener('click', () => goTo(i));
    dotsWrap.appendChild(d);
  }

  function updateUI() {
    track.style.transform = `translateX(-${current * 100}%)`;
    counter.textContent = `${current + 1} / ${TOTAL}`;
    const dots = dotsWrap.querySelectorAll('.slide-dot');
    dots.forEach((d, i) => d.classList.toggle('active', i === current));
    prevBtn.disabled = false;
    nextBtn.disabled = false;
  }

  function goTo(idx) {
    current = (idx + TOTAL) % TOTAL;
    updateUI();
    resetProgress();
  }

  window.slideMove = function(dir) {
    goTo(current + dir);
  };

  // Progress bar animation
  function startProgress() {
    if (progressTimer) cancelAnimationFrame(progressTimer);
    progressStart = performance.now();
    function tick(now) {
      if (paused) { progressTimer = requestAnimationFrame(tick); return; }
      const elapsed = now - progressStart;
      const pct = Math.min((elapsed / AUTOPLAY_MS) * 100, 100);
      progressBar.style.width = pct + '%';
      if (pct >= 100) {
        goTo(current + 1);
        return;
      }
      progressTimer = requestAnimationFrame(tick);
    }
    progressTimer = requestAnimationFrame(tick);
  }

  function resetProgress() {
    if (progressTimer) cancelAnimationFrame(progressTimer);
    progressBar.style.width = '0%';
    startProgress();
  }

  // Pause on hover
  const slideshow = document.getElementById('threatSlideshow');
  if (slideshow) {
    slideshow.addEventListener('mouseenter', () => { paused = true; });
    slideshow.addEventListener('mouseleave', () => {
      paused = false;
      progressStart = performance.now() - (parseFloat(progressBar.style.width) / 100 * AUTOPLAY_MS);
    });
  }

  // Keyboard support
  document.addEventListener('keydown', (e) => {
    if (!document.getElementById('threatSlideshow')) return;
    const rect = document.getElementById('threatSlideshow').getBoundingClientRect();
    const visible = rect.top < window.innerHeight && rect.bottom > 0;
    if (!visible) return;
    if (e.key === 'ArrowLeft')  slideMove(-1);
    if (e.key === 'ArrowRight') slideMove(1);
  });

  // Touch/swipe support
  let touchStartX = 0;
  if (slideshow) {
    slideshow.addEventListener('touchstart', e => { touchStartX = e.touches[0].clientX; }, { passive: true });
    slideshow.addEventListener('touchend', e => {
      const diff = touchStartX - e.changedTouches[0].clientX;
      if (Math.abs(diff) > 50) slideMove(diff > 0 ? 1 : -1);
    }, { passive: true });
  }

  updateUI();
  startProgress();
})();
</script>
<script>
const loginBtn = document.getElementById("openLogin");
const loginModal = document.getElementById("loginModal");
const closeModal = document.querySelector(".close-modal");

if(loginBtn){
    loginBtn.addEventListener("click", function(e){
        e.preventDefault();
        loginModal.classList.add("active");
    });
}

if(closeModal){
    closeModal.addEventListener("click", function(){
        loginModal.classList.remove("active");
    });
}

window.addEventListener("click", function(e){
    if(e.target === loginModal){
        loginModal.classList.remove("active");
    }
});
</script>
