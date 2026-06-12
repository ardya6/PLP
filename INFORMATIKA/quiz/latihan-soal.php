<?php
$page_title = "Latihan Soal";
include '../includes/header.php';
?>

<!-- ===== HERO ===== -->
<section class="quiz-hero">
    <div class="quiz-hero-bg"></div>
    <div class="quiz-orb quiz-orb-1"></div>
    <div class="quiz-orb quiz-orb-2"></div>
    <div class="quiz-orb quiz-orb-3"></div>
    <div class="container quiz-hero-inner">
        <a href="../index.php" class="btn btn-sm quiz-back-btn">
            <i class="fas fa-arrow-left"></i> Kembali ke Beranda
        </a>
        <div class="quiz-hero-content">
            <div class="quiz-hero-icon">
                <i class="fas fa-brain"></i>
            </div>
            <div>
                <div class="quiz-hero-badges">
                    <span class="quiz-hero-badge">🎯 Uji Pemahaman</span>
                    <span class="quiz-hero-badge quiz-hero-badge-gold">⭐ 15 Soal</span>
                </div>
                <h1 class="quiz-hero-title">Latihan Soal <span class="quiz-accent">Informatika</span></h1>
                <p class="quiz-hero-desc">Uji pemahamanmu dari 3 modul: Literasi Digital, Perangkat Teknologi, dan Jaringan Komputer</p>
            </div>
        </div>
        <div class="quiz-hero-stats">
            <div class="qhs-item"><i class="fas fa-list-ol"></i> 15 Pertanyaan</div>
            <div class="qhs-item"><i class="fas fa-clock"></i> ~15 Menit</div>
            <div class="qhs-item"><i class="fas fa-layer-group"></i> 3 Modul</div>
            <div class="qhs-item"><i class="fas fa-trophy"></i> Nilai Langsung</div>
        </div>
    </div>
</section>

<!-- ===== QUIZ CONTAINER ===== -->
<div class="container quiz-wrapper">

    <!-- START SCREEN -->
    <div id="startScreen" class="quiz-screen active-screen">
        <div class="start-card">
            <div class="start-icon">
                <i class="fas fa-rocket"></i>
            </div>
            <h2>Siap Memulai Kuis?</h2>
            <p>Kuis ini terdiri dari <strong>15 soal pilihan ganda</strong> yang mencakup semua materi pelajaran Informatika. Baca setiap soal dengan teliti sebelum menjawab.</p>

            <div class="start-rules">
                <div class="start-rule"><i class="fas fa-check-circle"></i> Pilih satu jawaban yang paling tepat</div>
                <div class="start-rule"><i class="fas fa-check-circle"></i> Tidak ada pengurangan nilai untuk jawaban salah</div>
                <div class="start-rule"><i class="fas fa-check-circle"></i> Hasil nilai akan ditampilkan di akhir kuis</div>
                <div class="start-rule"><i class="fas fa-check-circle"></i> Kamu bisa mengulang kuis sebanyak yang kamu mau</div>
            </div>

            <!-- Pilih Modul -->
            <h3 style="font-size:1rem;margin-bottom:1rem;color:var(--text-primary);">Pilih Kuis Berdasarkan Modul:</h3>
            <div class="modul-selector">
                <button class="modul-sel-btn active-modul" data-modul="all" onclick="selectModul('all', this)">
                    <i class="fas fa-layer-group"></i>
                    <span>Semua Modul</span>
                    <small>15 soal</small>
                </button>
                <button class="modul-sel-btn" data-modul="1" onclick="selectModul('1', this)">
                    <i class="fas fa-search"></i>
                    <span>Literasi Digital</span>
                    <small>5 soal</small>
                </button>
                <button class="modul-sel-btn" data-modul="2" onclick="selectModul('2', this)">
                    <i class="fas fa-desktop"></i>
                    <span>Perangkat Teknologi</span>
                    <small>5 soal</small>
                </button>
                <button class="modul-sel-btn" data-modul="3" onclick="selectModul('3', this)">
                    <i class="fas fa-network-wired"></i>
                    <span>Jaringan Komputer</span>
                    <small>5 soal</small>
                </button>
            </div>

            <button class="btn btn-primary btn-lg quiz-start-btn" id="startBtn" onclick="startQuiz()">
                <i class="fas fa-play"></i> Mulai Kuis Sekarang
            </button>
        </div>
    </div>

    <!-- QUIZ SCREEN -->
    <div id="quizScreen" class="quiz-screen">
        <!-- Progress Header -->
        <div class="quiz-progress-header">
            <div class="qph-left">
                <span class="qph-soal">Soal <span id="currentNum">1</span> dari <span id="totalNum">15</span></span>
                <span class="qph-modul" id="soalModul">Modul 1</span>
            </div>
            <div class="qph-right">
                <div class="qph-score-wrap">
                    <i class="fas fa-star"></i>
                    <span id="liveScore">0</span> poin
                </div>
            </div>
        </div>
        <div class="quiz-progress-bar-wrap">
            <div class="quiz-progress-bar" id="progressBar" style="width:0%"></div>
        </div>

        <!-- Question Card -->
        <div class="question-card" id="questionCard">
            <div class="q-category" id="qCategory"></div>
            <h2 class="q-text" id="qText"></h2>
            <div class="q-options" id="qOptions"></div>
            <div class="q-feedback hidden" id="qFeedback"></div>
            <div class="q-nav">
                <button class="btn btn-primary quiz-next-btn hidden" id="nextBtn" onclick="nextQuestion()">
                    Soal Berikutnya <i class="fas fa-arrow-right"></i>
                </button>
                <button class="btn btn-primary quiz-next-btn hidden" id="finishBtn" onclick="showResult()">
                    Lihat Hasil <i class="fas fa-flag-checkered"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- RESULT SCREEN -->
    <div id="resultScreen" class="quiz-screen">
        <div class="result-card" id="resultCard">
            <!-- Confetti elements -->
            <div class="confetti-wrap" id="confettiWrap"></div>

            <div class="result-icon-wrap" id="resultIconWrap">
                <div class="result-big-icon" id="resultBigIcon"></div>
            </div>

            <div class="result-grade" id="resultGrade"></div>
            <h2 class="result-title" id="resultTitle"></h2>
            <p class="result-desc" id="resultDesc"></p>

            <div class="result-score-box">
                <div class="rsb-item">
                    <div class="rsb-num" id="rsScore">0</div>
                    <div class="rsb-label">Nilai Akhir</div>
                </div>
                <div class="rsb-divider"></div>
                <div class="rsb-item">
                    <div class="rsb-num" id="rsCorrect">0</div>
                    <div class="rsb-label">Jawaban Benar</div>
                </div>
                <div class="rsb-divider"></div>
                <div class="rsb-item">
                    <div class="rsb-num" id="rsWrong">0</div>
                    <div class="rsb-label">Jawaban Salah</div>
                </div>
            </div>

            <!-- Score bar -->
            <div class="score-bar-wrap">
                <div class="score-bar-fill" id="scoreBarFill" style="width:0%"></div>
            </div>

            <!-- Answer Review -->
            <div class="answer-review" id="answerReview"></div>

            <div class="result-actions">
                <button class="btn btn-outline" onclick="restartQuiz()">
                    <i class="fas fa-redo"></i> Ulangi Kuis
                </button>
                <a href="../index.php" class="btn btn-primary">
                    <i class="fas fa-home"></i> Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>

</div><!-- end quiz-wrapper -->

<!-- ===== STYLES ===== -->
<style>
/* Quiz Hero */
.quiz-hero {
    background: linear-gradient(135deg, #1e1b4b 0%, #2563eb 50%, #0891b2 100%);
    padding: 3.5rem 0 2.5rem;
    position: relative;
    overflow: hidden;
}
.quiz-hero-bg {
    position: absolute; inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.quiz-orb { position: absolute; border-radius: 50%; filter: blur(70px); pointer-events: none; }
.quiz-orb-1 { width:400px; height:400px; background:radial-gradient(circle,rgba(124,58,237,0.4),transparent); top:-100px; right:-80px; }
.quiz-orb-2 { width:300px; height:300px; background:radial-gradient(circle,rgba(6,182,212,0.3),transparent); bottom:-80px; left:5%; }
.quiz-orb-3 { width:200px; height:200px; background:radial-gradient(circle,rgba(59,130,246,0.3),transparent); top:40%; left:35%; }
.quiz-hero-inner { position:relative; z-index:1; }
.quiz-back-btn {
    background:rgba(255,255,255,0.15); color:white;
    border:1px solid rgba(255,255,255,0.25); margin-bottom:1.5rem; display:inline-flex;
}
.quiz-hero-content { display:flex; align-items:center; gap:1.5rem; flex-wrap:wrap; color:white; }
.quiz-hero-icon {
    width:72px; height:72px;
    background:rgba(255,255,255,0.15); backdrop-filter:blur(10px);
    border:1px solid rgba(255,255,255,0.25); border-radius:20px;
    display:flex; align-items:center; justify-content:center;
    font-size:2rem; color:white; flex-shrink:0;
}
.quiz-hero-badges { display:flex; gap:0.5rem; margin-bottom:0.5rem; flex-wrap:wrap; }
.quiz-hero-badge {
    background:rgba(255,255,255,0.15); border:1px solid rgba(255,255,255,0.25);
    padding:0.2rem 0.75rem; border-radius:999px; font-size:0.75rem; font-weight:600;
}
.quiz-hero-badge-gold { background:rgba(251,191,36,0.2); border-color:rgba(251,191,36,0.4); color:#fde68a; }
.quiz-hero-title {
    font-size: clamp(1.6rem,4vw,2.5rem); font-weight:800;
    line-height:1.2; letter-spacing:-0.02em; margin-bottom:0.5rem;
}
.quiz-accent {
    background:linear-gradient(135deg,#60a5fa,#a78bfa);
    -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;
}
.quiz-hero-desc { color:rgba(255,255,255,0.75); font-size:1rem; }
.quiz-hero-stats { display:flex; gap:1rem; flex-wrap:wrap; margin-top:1.75rem; }
.qhs-item {
    background:rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.2);
    border-radius:12px; padding:0.5rem 1rem;
    display:flex; align-items:center; gap:0.5rem;
    color:rgba(255,255,255,0.85); font-size:0.85rem; font-weight:500;
}

/* Quiz Wrapper */
.quiz-wrapper { padding-top:2.5rem; padding-bottom:4rem; max-width:900px; }
.quiz-screen { display:none; }
.quiz-screen.active-screen { display:block; animation: fadeInUp 0.4s ease; }

/* Start Card */
.start-card {
    background:var(--card-bg); border:1px solid var(--border-color);
    border-radius:28px; padding:2.5rem; box-shadow:var(--card-shadow);
    text-align:center;
}
.start-icon {
    width:80px; height:80px;
    background:var(--gradient-primary); border-radius:24px;
    display:flex; align-items:center; justify-content:center;
    font-size:2rem; color:white; margin:0 auto 1.5rem;
    box-shadow:0 12px 30px rgba(37,99,235,0.4);
}
.start-card h2 { font-size:1.75rem; margin-bottom:0.75rem; }
.start-card > p { color:var(--text-secondary); font-size:0.95rem; line-height:1.7; margin-bottom:1.75rem; max-width:500px; margin-left:auto; margin-right:auto; }
.start-rules { display:flex; flex-direction:column; gap:0.5rem; margin-bottom:2rem; text-align:left; max-width:440px; margin-left:auto; margin-right:auto; }
.start-rule { display:flex; align-items:center; gap:0.75rem; font-size:0.875rem; color:var(--text-secondary); }
.start-rule i { color:#059669; flex-shrink:0; }

/* Modul Selector */
.modul-selector { display:grid; grid-template-columns:repeat(4,1fr); gap:0.75rem; margin-bottom:2rem; max-width:600px; margin-left:auto; margin-right:auto; }
.modul-sel-btn {
    display:flex; flex-direction:column; align-items:center; gap:0.35rem;
    padding:0.875rem 0.5rem; border-radius:14px;
    border:2px solid var(--border-color); background:var(--bg-secondary);
    cursor:pointer; transition:all 0.2s; font-family:var(--font-heading);
}
.modul-sel-btn i { font-size:1.2rem; color:var(--text-muted); transition:all 0.2s; }
.modul-sel-btn span { font-size:0.75rem; font-weight:700; color:var(--text-secondary); line-height:1.3; }
.modul-sel-btn small { font-size:0.7rem; color:var(--text-muted); }
.modul-sel-btn.active-modul {
    border-color:var(--primary-500); background:linear-gradient(135deg,rgba(37,99,235,0.08),rgba(124,58,237,0.05));
}
.modul-sel-btn.active-modul i { color:var(--primary-600); }
.modul-sel-btn.active-modul span { color:var(--primary-600); }
.modul-sel-btn:hover { border-color:var(--primary-400); transform:translateY(-2px); }

.quiz-start-btn { width:100%; max-width:360px; font-size:1rem; padding:1rem 2rem; margin:0 auto; }

/* Quiz Progress Header */
.quiz-progress-header {
    display:flex; justify-content:space-between; align-items:center;
    background:var(--card-bg); border:1px solid var(--border-color);
    border-radius:16px; padding:1rem 1.5rem; margin-bottom:0.75rem;
    box-shadow:var(--card-shadow);
}
.qph-left { display:flex; align-items:center; gap:0.75rem; }
.qph-soal { font-weight:700; font-size:0.95rem; }
.qph-modul {
    background:var(--gradient-card); border:1px solid var(--primary-200);
    color:var(--primary-600); padding:0.2rem 0.75rem; border-radius:999px;
    font-size:0.75rem; font-weight:700;
}
[data-theme="dark"] .qph-modul { border-color:rgba(37,99,235,0.3); }
.qph-score-wrap {
    display:flex; align-items:center; gap:0.5rem;
    font-weight:800; font-size:1rem; color:#d97706;
}
.qph-score-wrap i { color:#fbbf24; }
.quiz-progress-bar-wrap {
    height:6px; background:var(--border-color); border-radius:999px;
    overflow:hidden; margin-bottom:1.5rem;
}
.quiz-progress-bar {
    height:100%; background:var(--gradient-primary); border-radius:999px;
    transition:width 0.5s cubic-bezier(0.4,0,0.2,1);
}

/* Question Card */
.question-card {
    background:var(--card-bg); border:1px solid var(--border-color);
    border-radius:24px; padding:2.5rem; box-shadow:var(--card-shadow);
}
.q-category {
    display:inline-flex; align-items:center; gap:0.4rem;
    padding:0.3rem 0.875rem; border-radius:999px;
    font-size:0.75rem; font-weight:700; letter-spacing:0.05em;
    margin-bottom:1.25rem;
}
.q-text { font-size:1.2rem; font-weight:700; line-height:1.5; margin-bottom:1.75rem; color:var(--text-primary); }
.q-options { display:flex; flex-direction:column; gap:0.75rem; margin-bottom:1.5rem; }
.q-option {
    display:flex; align-items:center; gap:1rem;
    padding:1rem 1.25rem; border:2px solid var(--border-color);
    border-radius:14px; background:var(--bg-secondary);
    cursor:pointer; transition:all 0.2s; font-size:0.925rem;
    font-family:var(--font-body); text-align:left; width:100%;
}
.q-option:hover:not(:disabled) { border-color:var(--primary-400); background:linear-gradient(135deg,rgba(37,99,235,0.06),rgba(124,58,237,0.04)); transform:translateX(4px); }
.q-opt-letter {
    width:32px; height:32px; border-radius:8px; flex-shrink:0;
    background:var(--bg-tertiary); border:1px solid var(--border-color);
    display:flex; align-items:center; justify-content:center;
    font-weight:800; font-size:0.85rem; color:var(--text-muted);
    transition:all 0.2s;
}
.q-opt-text { flex:1; color:var(--text-primary); line-height:1.5; }
.q-option.correct {
    border-color:#059669; background:linear-gradient(135deg,rgba(5,150,105,0.1),rgba(16,185,129,0.06));
}
.q-option.correct .q-opt-letter { background:#059669; color:white; border-color:transparent; }
.q-option.wrong {
    border-color:#dc2626; background:linear-gradient(135deg,rgba(220,38,38,0.08),rgba(239,68,68,0.04));
}
.q-option.wrong .q-opt-letter { background:#dc2626; color:white; border-color:transparent; }
.q-option:disabled { cursor:not-allowed; }
.q-option.shake { animation: shake 0.4s ease; }

@keyframes shake {
    0%, 100% { transform: translateX(0); }
    20% { transform: translateX(-6px); }
    40% { transform: translateX(6px); }
    60% { transform: translateX(-4px); }
    80% { transform: translateX(4px); }
}

/* Feedback */
.q-feedback {
    padding:1rem 1.25rem; border-radius:12px;
    font-size:0.9rem; line-height:1.6; margin-bottom:1.25rem;
    display:flex; align-items:flex-start; gap:0.75rem;
}
.q-feedback.fb-correct { background:rgba(5,150,105,0.1); border:1px solid rgba(5,150,105,0.2); color:#059669; }
.q-feedback.fb-wrong { background:rgba(220,38,38,0.08); border:1px solid rgba(220,38,38,0.2); color:#dc2626; }
.q-feedback i { flex-shrink:0; font-size:1rem; margin-top:0.1rem; }
.q-feedback strong { display:block; margin-bottom:0.2rem; }
.hidden { display:none !important; }

.q-nav { display:flex; justify-content:flex-end; }
.quiz-next-btn { padding:0.75rem 1.75rem; }

/* Result Screen */
.result-card {
    background:var(--card-bg); border:1px solid var(--border-color);
    border-radius:28px; padding:3rem; box-shadow:var(--card-shadow);
    text-align:center; position:relative; overflow:hidden;
}
.confetti-wrap { position:absolute; inset:0; pointer-events:none; overflow:hidden; }
.confetti-piece {
    position:absolute; width:10px; height:10px; border-radius:2px;
    animation: confettiFall 3s ease-in-out forwards;
}
@keyframes confettiFall {
    0% { transform: translateY(-20px) rotate(0deg); opacity:1; }
    100% { transform: translateY(500px) rotate(720deg); opacity:0; }
}

.result-big-icon {
    width:100px; height:100px; border-radius:50%;
    display:flex; align-items:center; justify-content:center;
    font-size:2.5rem; margin:0 auto 1rem;
    animation: popIn 0.5s cubic-bezier(0.34,1.56,0.64,1);
}
@keyframes popIn { from { transform:scale(0) rotate(-180deg); opacity:0; } to { transform:scale(1) rotate(0); opacity:1; } }

.result-grade {
    font-size:4rem; font-weight:900; letter-spacing:-0.02em;
    margin-bottom:0.5rem;
    background:var(--gradient-primary); -webkit-background-clip:text;
    -webkit-text-fill-color:transparent; background-clip:text;
}
.result-title { font-size:1.5rem; margin-bottom:0.75rem; }
.result-desc { color:var(--text-secondary); font-size:0.95rem; line-height:1.7; margin-bottom:2rem; max-width:480px; margin-left:auto; margin-right:auto; }

.result-score-box {
    display:flex; justify-content:center; align-items:center; gap:0;
    background:var(--bg-secondary); border:1px solid var(--border-color);
    border-radius:20px; padding:1.5rem 2rem; margin-bottom:1.5rem;
    max-width:500px; margin-left:auto; margin-right:auto;
}
.rsb-item { text-align:center; flex:1; }
.rsb-num { font-size:2.5rem; font-weight:900; color:var(--text-primary); font-family:var(--font-heading); }
.rsb-label { font-size:0.78rem; color:var(--text-muted); margin-top:0.25rem; font-weight:600; text-transform:uppercase; letter-spacing:0.05em; }
.rsb-divider { width:1px; height:60px; background:var(--border-color); flex-shrink:0; }

.score-bar-wrap {
    height:12px; background:var(--border-color); border-radius:999px;
    overflow:hidden; margin-bottom:2rem; max-width:500px; margin-left:auto; margin-right:auto;
}
.score-bar-fill {
    height:100%; border-radius:999px; background:var(--gradient-primary);
    transition:width 1.5s cubic-bezier(0.4,0,0.2,1);
}

/* Answer Review */
.answer-review { text-align:left; margin-bottom:2rem; }
.ar-title { font-size:0.8rem; font-weight:700; text-transform:uppercase; letter-spacing:0.08em; color:var(--text-muted); margin-bottom:1rem; text-align:left; }
.ar-item {
    display:flex; align-items:flex-start; gap:0.75rem;
    padding:0.75rem 1rem; border-radius:12px; margin-bottom:0.5rem;
    font-size:0.85rem; line-height:1.5; border:1px solid var(--border-color);
}
.ar-item.ar-ok { border-color:rgba(5,150,105,0.2); background:rgba(5,150,105,0.05); }
.ar-item.ar-no { border-color:rgba(220,38,38,0.2); background:rgba(220,38,38,0.05); }
.ar-num {
    width:26px; height:26px; border-radius:6px; flex-shrink:0;
    display:flex; align-items:center; justify-content:center;
    font-weight:800; font-size:0.75rem; color:white;
}
.ar-ok .ar-num { background:#059669; }
.ar-no .ar-num { background:#dc2626; }
.ar-q { color:var(--text-primary); font-weight:600; }
.ar-ans { color:var(--text-secondary); font-size:0.82rem; margin-top:0.15rem; }

.result-actions { display:flex; justify-content:center; gap:1rem; flex-wrap:wrap; }

/* Animation classes */
@keyframes fadeInUp {
    from { opacity:0; transform:translateY(20px); }
    to { opacity:1; transform:translateY(0); }
}
.fade-in-up { animation: fadeInUp 0.5s ease; }

/* Responsive */
@media (max-width:768px) {
    .question-card { padding:1.5rem; }
    .modul-selector { grid-template-columns:repeat(2,1fr); }
    .result-card { padding:1.75rem; }
    .result-score-box { flex-direction:column; gap:1rem; }
    .rsb-divider { width:80%; height:1px; }
}
</style>

<!-- ===== QUIZ DATA & LOGIC ===== -->
<script>
// ===================== SOAL =====================
const allQuestions = [
    // ── Modul 1: Literasi Digital (Q1–Q5) ──
    {
        modul: 1,
        category: "📱 Literasi Digital",
        categoryClass: "bg-blue",
        text: "Apa yang dimaksud dengan Literasi Digital?",
        options: [
            "Kemampuan membaca dan menulis menggunakan komputer",
            "Kemampuan menggunakan teknologi digital secara efektif, aman, kritis, dan bertanggung jawab",
            "Kemampuan membuat program komputer",
            "Kemampuan merakit perangkat keras komputer"
        ],
        correct: 1,
        explanation: "Literasi Digital adalah kemampuan menggunakan teknologi digital, alat komunikasi, atau jaringan untuk mengakses, mengelola, dan menciptakan informasi secara efektif, aman, kritis, dan bertanggung jawab."
    },
    {
        modul: 1,
        category: "📱 Literasi Digital",
        categoryClass: "bg-blue",
        text: "Pemerintah Indonesia melalui Kominfo menetapkan 4 pilar Literasi Digital. Manakah yang BUKAN termasuk pilar tersebut?",
        options: [
            "Kecakapan Digital (Digital Skills)",
            "Budaya Digital (Digital Culture)",
            "Kecepatan Digital (Digital Speed)",
            "Keamanan Digital (Digital Safety)"
        ],
        correct: 2,
        explanation: "4 Pilar Literasi Digital menurut Kominfo adalah: Kecakapan Digital, Budaya Digital, Etika Digital, dan Keamanan Digital. 'Kecepatan Digital' bukan merupakan salah satu pilar tersebut."
    },
    {
        modul: 1,
        category: "🔍 Mesin Pencari",
        categoryClass: "bg-blue",
        text: "Berapa persentase pangsa pasar mesin pencari Google di seluruh dunia?",
        options: ["~50%", "~75%", "~92%", "~99%"],
        correct: 2,
        explanation: "Google menguasai sekitar 92% pangsa pasar mesin pencari global, menjadikannya mesin pencari nomor 1 yang paling banyak digunakan di dunia."
    },
    {
        modul: 1,
        category: "🔍 Mesin Pencari",
        categoryClass: "bg-blue",
        text: "Jika kamu ingin mencari file PDF tentang 'modul informatika' menggunakan Google, operator pencarian yang tepat adalah...",
        options: [
            "modul informatika type:pdf",
            "modul informatika filetype:pdf",
            "modul informatika format:pdf",
            "pdf modul informatika"
        ],
        correct: 1,
        explanation: "Operator 'filetype:' digunakan di Google untuk mencari berdasarkan tipe file tertentu. Contoh: 'modul informatika filetype:pdf' akan menampilkan hasil berupa file PDF saja."
    },
    {
        modul: 1,
        category: "🚫 Hoaks & Keamanan",
        categoryClass: "bg-blue",
        text: "Metode SIFT digunakan untuk memverifikasi informasi. Huruf 'I' dalam SIFT singkatan dari...",
        options: [
            "Integrate — Mengintegrasikan semua informasi",
            "Investigate — Menyelidiki sumber informasi",
            "Identify — Mengidentifikasi penulis",
            "Ignore — Mengabaikan informasi yang meragukan"
        ],
        correct: 1,
        explanation: "Dalam metode SIFT: S=Stop (Berhenti), I=Investigate (Selidiki sumber), F=Find Better Coverage (Cari sumber lain), T=Trace Claims (Telusuri klaim ke sumber asli)."
    },

    // ── Modul 2: Perangkat Teknologi (Q6–Q10) ──
    {
        modul: 2,
        category: "📘 Microsoft Word",
        categoryClass: "bg-purple",
        text: "Shortcut keyboard untuk menyimpan dokumen di Microsoft Word adalah...",
        options: ["Ctrl + P", "Ctrl + S", "Ctrl + D", "Ctrl + W"],
        correct: 1,
        explanation: "Ctrl + S (Save) digunakan untuk menyimpan dokumen. Ctrl + P = Cetak, Ctrl + D = Pilih font, Ctrl + W = Tutup dokumen."
    },
    {
        modul: 2,
        category: "📘 Microsoft Word",
        categoryClass: "bg-purple",
        text: "Di Microsoft Word, tab yang digunakan untuk mengatur ukuran kertas, margin, dan orientasi halaman adalah...",
        options: ["Tab Home", "Tab Insert", "Tab Layout", "Tab References"],
        correct: 2,
        explanation: "Tab Layout (atau Page Layout) di Microsoft Word berisi pengaturan halaman seperti Margins, Orientation (Portrait/Landscape), Size (ukuran kertas), dan Columns."
    },
    {
        modul: 2,
        category: "📗 Microsoft Excel",
        categoryClass: "bg-purple",
        text: "Rumus Excel yang digunakan untuk menghitung nilai rata-rata dari range A1 hingga A10 adalah...",
        options: [
            "=MEAN(A1:A10)",
            "=AVG(A1:A10)",
            "=AVERAGE(A1:A10)",
            "=SUM(A1:A10)/COUNT"
        ],
        correct: 2,
        explanation: "Fungsi =AVERAGE() digunakan untuk menghitung nilai rata-rata dalam Excel. Penulisan yang benar adalah =AVERAGE(A1:A10). Fungsi MEAN dan AVG tidak ada di Excel."
    },
    {
        modul: 2,
        category: "📗 Microsoft Excel",
        categoryClass: "bg-purple",
        text: "Di Microsoft Excel, perpotongan antara kolom B dan baris 5 disebut...",
        options: ["Range B5", "Cell B5", "Column B5", "Row B5"],
        correct: 1,
        explanation: "Perpotongan antara satu kolom dan satu baris disebut Cell (Sel). Cell B5 berarti sel yang berada di kolom B baris ke-5."
    },
    {
        modul: 2,
        category: "📕 PowerPoint",
        categoryClass: "bg-purple",
        text: "Menurut aturan presentasi Guy Kawasaki (10-20-30), berapakah jumlah slide maksimal yang disarankan?",
        options: ["5 slide", "10 slide", "20 slide", "30 slide"],
        correct: 1,
        explanation: "Aturan 10-20-30 dari Guy Kawasaki: Maksimal 10 slide, durasi 20 menit, dan ukuran font minimal 30pt. Ini memastikan presentasi singkat, padat, dan efektif."
    },

    // ── Modul 3: Jaringan Komputer (Q11–Q15) ──
    {
        modul: 3,
        category: "🌐 Jaringan Komputer",
        categoryClass: "bg-cyan",
        text: "Jaringan komputer yang mencakup wilayah satu kota atau metropolitan (5–50 km) disebut...",
        options: ["LAN (Local Area Network)", "MAN (Metropolitan Area Network)", "WAN (Wide Area Network)", "PAN (Personal Area Network)"],
        correct: 1,
        explanation: "MAN (Metropolitan Area Network) adalah jaringan yang mencakup area satu kota dengan jangkauan 5–50 km. Contoh: jaringan antar kampus dalam satu kota atau jaringan Pemda."
    },
    {
        modul: 3,
        category: "🔌 Topologi Jaringan",
        categoryClass: "bg-cyan",
        text: "Topologi jaringan yang paling umum digunakan saat ini, di mana semua perangkat terhubung ke satu perangkat pusat (hub/switch), adalah...",
        options: ["Topologi Bus", "Topologi Ring", "Topologi Star (Bintang)", "Topologi Mesh"],
        correct: 2,
        explanation: "Topologi Star (Bintang) adalah yang paling umum digunakan karena mudah dikonfigurasi, mudah mendeteksi kerusakan, dan mudah menambah perangkat baru. Pusatnya menggunakan hub atau switch."
    },
    {
        modul: 3,
        category: "🖥️ Perangkat Keras Jaringan",
        categoryClass: "bg-cyan",
        text: "Perangkat yang berfungsi menghubungkan dua jaringan yang berbeda dan mengarahkan (merutekan) paket data antar jaringan adalah...",
        options: ["Switch", "Hub", "Router", "Access Point"],
        correct: 2,
        explanation: "Router adalah perangkat jaringan Layer 3 yang berfungsi menghubungkan jaringan-jaringan yang berbeda dan menentukan jalur terbaik (routing) untuk pengiriman paket data."
    },
    {
        modul: 3,
        category: "📡 Protokol Jaringan",
        categoryClass: "bg-cyan",
        text: "Protokol DNS (Domain Name System) berfungsi untuk...",
        options: [
            "Mengamankan transmisi data dengan enkripsi",
            "Menerjemahkan nama domain menjadi alamat IP",
            "Mengirim email dari server ke server",
            "Memberikan alamat IP secara otomatis"
        ],
        correct: 1,
        explanation: "DNS (Domain Name System) berfungsi seperti 'buku telepon' internet — menerjemahkan nama domain yang mudah diingat (seperti google.com) menjadi alamat IP numerik (142.250.4.139) yang dimengerti komputer."
    },
    {
        modul: 3,
        category: "📡 Protokol Jaringan",
        categoryClass: "bg-cyan",
        text: "Model OSI terdiri dari 7 lapisan. Lapisan nomor 4 (Transport) menggunakan protokol...",
        options: ["HTTP dan HTTPS", "TCP dan UDP", "IP dan ICMP", "Ethernet dan Wi-Fi"],
        correct: 1,
        explanation: "Layer 4 (Transport) menggunakan protokol TCP (Transmission Control Protocol) untuk pengiriman data yang andal dan berurutan, serta UDP (User Datagram Protocol) untuk pengiriman cepat tanpa jaminan urutan."
    }
];

// ===================== STATE =====================
let currentModul = 'all';
let filteredQuestions = [...allQuestions];
let currentIdx = 0;
let score = 0;
let userAnswers = [];
let answered = false;

// ===================== FUNCTIONS =====================
function selectModul(modul, btn) {
    currentModul = modul;
    document.querySelectorAll('.modul-sel-btn').forEach(b => b.classList.remove('active-modul'));
    btn.classList.add('active-modul');
    
    const btn_el = document.getElementById('startBtn');
    const counts = {all:'15 soal', '1':'5 soal', '2':'5 soal', '3':'5 soal'};
    btn_el.innerHTML = `<i class="fas fa-play"></i> Mulai Kuis (${counts[modul]})`;
}

function startQuiz() {
    filteredQuestions = currentModul === 'all' 
        ? [...allQuestions]
        : allQuestions.filter(q => q.modul == currentModul);
    
    // Shuffle questions
    filteredQuestions.sort(() => Math.random() - 0.5);
    
    currentIdx = 0;
    score = 0;
    userAnswers = [];
    answered = false;

    document.getElementById('startScreen').classList.remove('active-screen');
    document.getElementById('quizScreen').classList.add('active-screen');
    document.getElementById('totalNum').textContent = filteredQuestions.length;

    renderQuestion();
}

function renderQuestion() {
    const q = filteredQuestions[currentIdx];
    answered = false;

    // Update header
    document.getElementById('currentNum').textContent = currentIdx + 1;
    document.getElementById('liveScore').textContent = score;
    const modulNames = {1:'Modul 1 — Literasi Digital', 2:'Modul 2 — Perangkat Teknologi', 3:'Modul 3 — Jaringan Komputer'};
    document.getElementById('soalModul').textContent = modulNames[q.modul];

    // Progress bar
    const pct = ((currentIdx) / filteredQuestions.length) * 100;
    document.getElementById('progressBar').style.width = pct + '%';

    // Category
    const catEl = document.getElementById('qCategory');
    catEl.textContent = q.category;
    const catColors = {
        'bg-blue': 'background:linear-gradient(135deg,rgba(37,99,235,0.12),rgba(124,58,237,0.08));border:1px solid rgba(37,99,235,0.2);color:var(--primary-600);',
        'bg-purple': 'background:linear-gradient(135deg,rgba(124,58,237,0.12),rgba(167,139,250,0.08));border:1px solid rgba(124,58,237,0.2);color:#7c3aed;',
        'bg-cyan': 'background:linear-gradient(135deg,rgba(8,145,178,0.12),rgba(6,182,212,0.08));border:1px solid rgba(8,145,178,0.2);color:#0891b2;'
    };
    catEl.style.cssText = catColors[q.categoryClass] || catColors['bg-blue'];

    // Question text
    document.getElementById('qText').textContent = q.text;

    // Options
    const optContainer = document.getElementById('qOptions');
    optContainer.innerHTML = '';
    const letters = ['A', 'B', 'C', 'D'];
    q.options.forEach((opt, i) => {
        const btn = document.createElement('button');
        btn.className = 'q-option';
        btn.innerHTML = `<span class="q-opt-letter">${letters[i]}</span><span class="q-opt-text">${opt}</span>`;
        btn.onclick = () => selectAnswer(i, q.correct, q.explanation);
        optContainer.appendChild(btn);
    });

    // Hide feedback and nav
    document.getElementById('qFeedback').classList.add('hidden');
    document.getElementById('nextBtn').classList.add('hidden');
    document.getElementById('finishBtn').classList.add('hidden');

    // Animate card
    const card = document.getElementById('questionCard');
    card.style.opacity = '0';
    card.style.transform = 'translateY(15px)';
    setTimeout(() => {
        card.style.transition = 'all 0.35s ease';
        card.style.opacity = '1';
        card.style.transform = 'translateY(0)';
    }, 50);
}

function selectAnswer(selectedIdx, correctIdx, explanation) {
    if (answered) return;
    answered = true;

    const options = document.querySelectorAll('.q-option');
    const isCorrect = selectedIdx === correctIdx;

    // Disable all options
    options.forEach(opt => opt.disabled = true);

    // Mark correct/wrong
    options[correctIdx].classList.add('correct');
    if (!isCorrect) {
        options[selectedIdx].classList.add('wrong');
        options[selectedIdx].classList.add('shake');
    }

    // Update score
    if (isCorrect) {
        score++;
        document.getElementById('liveScore').textContent = score;
    }

    // Store answer
    userAnswers.push({
        question: filteredQuestions[currentIdx].text,
        isCorrect,
        selectedOpt: filteredQuestions[currentIdx].options[selectedIdx],
        correctOpt: filteredQuestions[currentIdx].options[correctIdx]
    });

    // Show feedback
    const feedback = document.getElementById('qFeedback');
    feedback.classList.remove('hidden', 'fb-correct', 'fb-wrong');
    if (isCorrect) {
        feedback.classList.add('fb-correct');
        feedback.innerHTML = `<i class="fas fa-check-circle"></i><div><strong>Benar! 🎉</strong>${explanation}</div>`;
    } else {
        feedback.classList.add('fb-wrong');
        feedback.innerHTML = `<i class="fas fa-times-circle"></i><div><strong>Kurang tepat. 💡</strong>${explanation}</div>`;
    }

    // Show next/finish
    const isLast = currentIdx >= filteredQuestions.length - 1;
    if (isLast) {
        document.getElementById('finishBtn').classList.remove('hidden');
    } else {
        document.getElementById('nextBtn').classList.remove('hidden');
    }
}

function nextQuestion() {
    currentIdx++;
    renderQuestion();
}

function showResult() {
    // Update progress to 100%
    document.getElementById('progressBar').style.width = '100%';

    document.getElementById('quizScreen').classList.remove('active-screen');
    document.getElementById('resultScreen').classList.add('active-screen');

    const total = filteredQuestions.length;
    const pct = Math.round((score / total) * 100);
    const wrong = total - score;

    // Animate numbers
    setTimeout(() => {
        document.getElementById('rsScore').textContent = pct;
        document.getElementById('rsCorrect').textContent = score;
        document.getElementById('rsWrong').textContent = wrong;
        document.getElementById('scoreBarFill').style.width = pct + '%';
    }, 300);

    // Grade & message
    let grade, title, desc, icon, iconStyle, gradeText;
    if (pct >= 90) {
        grade = 'A'; gradeText = pct; title = 'Luar Biasa! 🏆';
        desc = 'Kamu menguasai materi dengan sangat baik! Pertahankan terus semangat belajarmu yang luar biasa ini.';
        icon = '🏆'; iconStyle = 'background:linear-gradient(135deg,#fef3c7,#fde68a);box-shadow:0 12px 30px rgba(251,191,36,0.4);';
    } else if (pct >= 75) {
        grade = 'B'; gradeText = pct; title = 'Bagus Sekali! 🌟';
        desc = 'Pemahamanmu sudah bagus! Sedikit lagi untuk mencapai nilai sempurna. Terus belajar!';
        icon = '⭐'; iconStyle = 'background:linear-gradient(135deg,#dbeafe,#bfdbfe);box-shadow:0 12px 30px rgba(37,99,235,0.3);';
    } else if (pct >= 60) {
        grade = 'C'; gradeText = pct; title = 'Cukup Baik! 📚';
        desc = 'Kamu sudah berusaha dengan baik. Pelajari kembali materi yang masih kurang dipahami ya!';
        icon = '📚'; iconStyle = 'background:linear-gradient(135deg,#dcfce7,#bbf7d0);box-shadow:0 12px 30px rgba(5,150,105,0.3);';
    } else {
        grade = 'D'; gradeText = pct; title = 'Terus Semangat! 💪';
        desc = 'Jangan menyerah! Baca kembali materi dari awal dan coba lagi. Kamu pasti bisa!';
        icon = '💪'; iconStyle = 'background:linear-gradient(135deg,#fee2e2,#fecaca);box-shadow:0 12px 30px rgba(220,38,38,0.3);';
    }

    document.getElementById('resultGrade').textContent = gradeText + '%';
    document.getElementById('resultTitle').textContent = title;
    document.getElementById('resultDesc').textContent = desc;
    document.getElementById('resultBigIcon').innerHTML = icon;
    document.getElementById('resultBigIcon').style.cssText = iconStyle + 'width:100px;height:100px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:2.5rem;margin:0 auto 1rem;animation:popIn 0.5s cubic-bezier(0.34,1.56,0.64,1);';

    // Confetti for high scores
    if (pct >= 75) {
        spawnConfetti();
    }

    // Answer Review
    const rev = document.getElementById('answerReview');
    let revHTML = '<p class="ar-title"><i class="fas fa-list-check"></i> Review Jawaban Kamu:</p>';
    userAnswers.forEach((a, i) => {
        revHTML += `
        <div class="ar-item ${a.isCorrect ? 'ar-ok' : 'ar-no'}">
            <div class="ar-num">${i+1}</div>
            <div>
                <div class="ar-q">${a.question}</div>
                ${!a.isCorrect ? `<div class="ar-ans">Jawabanmu: ${a.selectedOpt} → Jawaban benar: <strong>${a.correctOpt}</strong></div>` : '<div class="ar-ans" style="color:#059669;">✓ Jawaban benar!</div>'}
            </div>
        </div>`;
    });
    rev.innerHTML = revHTML;

    // Scroll to top
    window.scrollTo({top: document.querySelector('.quiz-wrapper').offsetTop - 80, behavior:'smooth'});
}

function spawnConfetti() {
    const wrap = document.getElementById('confettiWrap');
    const colors = ['#2563eb','#7c3aed','#0891b2','#059669','#d97706','#dc2626','#f9a8d4'];
    for (let i = 0; i < 60; i++) {
        setTimeout(() => {
            const el = document.createElement('div');
            el.className = 'confetti-piece';
            el.style.cssText = `
                left:${Math.random()*100}%;
                background:${colors[Math.floor(Math.random()*colors.length)]};
                width:${6+Math.random()*10}px;
                height:${6+Math.random()*10}px;
                border-radius:${Math.random()>0.5 ? '50%' : '2px'};
                animation-delay:${Math.random()*2}s;
                animation-duration:${2+Math.random()*2}s;
            `;
            wrap.appendChild(el);
            setTimeout(() => el.remove(), 4000);
        }, i * 30);
    }
}

function restartQuiz() {
    document.getElementById('resultScreen').classList.remove('active-screen');
    document.getElementById('startScreen').classList.add('active-screen');
    window.scrollTo({top: 0, behavior:'smooth'});
}
</script>

<?php include '../includes/footer.php'; ?>
