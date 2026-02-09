<div class="relative min-h-screen overflow-hidden" style="background: #050a14;">

    {{-- Background: grid (thematically fits data) --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="m4-grid"></div>
        <div class="m4-glow"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 40px 60px 72px 60px;">

        {{-- Header --}}
        <div class="m4-header m4-in-1">
            <img src="/cos-systems-logo.svg" alt="COS Systems" style="width: 36px; height: 36px;" />
            <h1 class="m4-title">ISO Updates</h1>
            <div class="m4-title-rule"></div>
        </div>

        {{-- Main: two columns --}}
        <div class="m4-main flex-1">

            {{-- Left: hero stat --}}
            <div class="m4-hero m4-in-2">

                {{-- Progress ring --}}
                <div class="m4-ring-wrap">
                    <svg class="m4-ring" viewBox="0 0 160 160">
                        <circle cx="80" cy="80" r="62" fill="none" stroke="rgba(255,255,255,0.04)" stroke-width="6"/>
                        <circle class="m4-ring-fill" cx="80" cy="80" r="62" fill="none" stroke="#11C18F" stroke-width="6"
                                stroke-linecap="round" stroke-dasharray="389.6" stroke-dashoffset="389.6"
                                transform="rotate(-90 80 80)"/>
                    </svg>
                    <div class="m4-ring-center">
                        <span class="m4-pct" data-target="96">0</span><span class="m4-pct-sign">%</span>
                    </div>
                </div>

                <div class="m4-hero-label">Training Completion</div>

                <div class="m4-badge m4-in-3">
                    <span class="m4-badge-arrow">&uarr;</span>
                    <span>+11% from last period</span>
                </div>

                {{-- Before / After comparison --}}
                <div class="m4-compare m4-in-4">
                    <div class="m4-cmp-row">
                        <span class="m4-cmp-label">Previous</span>
                        <div class="m4-cmp-track">
                            <div class="m4-cmp-fill m4-cmp-prev" style="--w: 85%;"></div>
                        </div>
                        <span class="m4-cmp-val">85%</span>
                    </div>
                    <div class="m4-cmp-row">
                        <span class="m4-cmp-label">Now</span>
                        <div class="m4-cmp-track">
                            <div class="m4-cmp-fill m4-cmp-now" style="--w: 96%;"></div>
                        </div>
                        <span class="m4-cmp-val m4-cmp-green">96%</span>
                    </div>
                </div>

            </div>

            {{-- Right: data sections --}}
            <div class="m4-charts">

                {{-- Company Training — single progress bar --}}
                <div class="m4-chart m4-in-5">
                    <h2 class="m4-chart-title">Company Training</h2>
                    <div class="m4-single-bar">
                        <div class="m4-single-track">
                            <div class="m4-single-fill" style="--w: 78%;"></div>
                        </div>
                        <div class="m4-single-meta">
                            <span class="m4-single-count"><strong>25</strong> of 32 completed</span>
                            <span class="m4-single-remaining">7 remaining</span>
                        </div>
                    </div>
                </div>

                {{-- OWASP — counts only --}}
                <div class="m4-chart m4-in-6">
                    <h2 class="m4-chart-title">Microsoft OWASP</h2>
                    <div class="m4-counts">
                        <div class="m4-count-row">
                            <span class="m4-count-label">Voluntary</span>
                            <span class="m4-count-num m4-num-teal">16</span>
                        </div>
                        <div class="m4-count-row">
                            <span class="m4-count-label">Completed</span>
                            <span class="m4-count-num m4-num-green">13</span>
                        </div>
                        <div class="m4-count-row">
                            <span class="m4-count-label">Not Completed</span>
                            <span class="m4-count-num m4-num-coral">3</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        {{-- ISMS Reminder --}}
        <div class="m4-reminder m4-in-7">
            <div class="m4-reminder-dot"></div>
            <span>ISMS Documentation will be shared with auditor on <strong>February 11th</strong></span>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    /* ======= SLIDE 4 — MERIDIAN ISO UPDATES ======= */

    /* Grid background */
    .m4-grid {
        position: absolute; inset: 0;
        background-image:
            linear-gradient(rgba(17,193,143,0.5) 1px, transparent 1px),
            linear-gradient(90deg, rgba(17,193,143,0.5) 1px, transparent 1px);
        background-size: 80px 80px;
        opacity: 0.018;
    }
    .m4-glow {
        position: absolute;
        top: 20%; left: -5%;
        width: 45vw; height: 45vw;
        max-width: 650px; max-height: 650px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(17,193,143,0.05) 0%, transparent 60%);
        filter: blur(80px);
    }

    /* Header */
    .m4-header {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 24px;
    }
    .m4-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 2rem;
        color: #11C18F;
        letter-spacing: -0.02em;
    }
    .m4-title-rule {
        flex: 1; height: 1px;
        background: linear-gradient(90deg, rgba(17,193,143,0.2), transparent 80%);
    }

    /* Main layout */
    .m4-main {
        display: grid;
        grid-template-columns: 28% minmax(0, 1fr);
        gap: 48px;
        align-items: start;
        overflow: hidden;
    }

    /* ===== LEFT: Hero stat ===== */
    .m4-hero {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    /* Progress ring */
    .m4-ring-wrap {
        position: relative;
        width: 130px; height: 130px;
        margin-bottom: 12px;
    }
    .m4-ring {
        width: 100%; height: 100%;
    }
    .m4-ring-fill {
        animation: m4-ring-draw 2s cubic-bezier(0.22, 1, 0.36, 1) 0.6s forwards;
    }
    @keyframes m4-ring-draw {
        to { stroke-dashoffset: 15.6; }
    }
    .m4-ring-center {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .m4-pct {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 2.4rem;
        color: #ffffff;
        line-height: 1;
    }
    .m4-pct-sign {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 1.1rem;
        color: rgba(255,255,255,0.35);
        margin-left: 2px;
        align-self: center;
        margin-top: 0;
    }

    .m4-hero-label {
        font-family: 'Sora', sans-serif;
        font-size: 0.85rem;
        font-weight: 500;
        color: rgba(255,255,255,0.5);
        margin-bottom: 10px;
    }

    /* Badge */
    .m4-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 16px;
        border-radius: 20px;
        background: rgba(17,193,143,0.1);
        border: 1px solid rgba(17,193,143,0.2);
        font-family: 'Sora', sans-serif;
        font-size: 0.78rem;
        font-weight: 600;
        color: #11C18F;
        margin-bottom: 20px;
    }
    .m4-badge-arrow {
        font-size: 0.9rem;
    }

    /* Comparison bars */
    .m4-compare {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    .m4-cmp-row {
        display: grid;
        grid-template-columns: 70px minmax(0, 1fr) 40px;
        align-items: center;
        gap: 12px;
    }
    .m4-cmp-label {
        font-family: 'Sora', sans-serif;
        font-size: 0.75rem;
        color: rgba(255,255,255,0.3);
        text-align: right;
    }
    .m4-cmp-track {
        height: 6px;
        background: rgba(255,255,255,0.04);
        border-radius: 3px;
        overflow: hidden;
    }
    .m4-cmp-fill {
        height: 100%;
        border-radius: 3px;
        width: 0;
        animation: m4-bar-grow 1.4s cubic-bezier(0.22, 1, 0.36, 1) 1.6s forwards;
    }
    .m4-cmp-prev {
        background: rgba(255,255,255,0.12);
    }
    .m4-cmp-now {
        background: #11C18F;
    }
    .m4-cmp-val {
        font-family: 'Sora', sans-serif;
        font-size: 0.78rem;
        font-weight: 600;
        color: rgba(255,255,255,0.25);
        text-align: left;
    }
    .m4-cmp-green {
        color: #11C18F;
    }

    /* ===== RIGHT: Charts ===== */
    .m4-charts {
        display: flex;
        flex-direction: column;
        gap: 28px;
        min-width: 0;
    }
    .m4-chart {
        padding-bottom: 24px;
        border-bottom: 1px solid rgba(255,255,255,0.04);
    }
    .m4-chart:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }
    .m4-chart-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 1.1rem;
        color: rgba(255,255,255,0.85);
        margin-bottom: 16px;
    }

    /* Single progress bar (Company Training) */
    .m4-single-bar {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }
    .m4-single-track {
        height: 14px;
        background: rgba(255,255,255,0.06);
        border-radius: 7px;
        overflow: hidden;
    }
    .m4-single-fill {
        height: 100%;
        border-radius: 7px;
        background: linear-gradient(90deg, #11C18F, #48AAA5);
        width: 0;
        animation: m4-bar-grow 1.4s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards;
    }
    .m4-single-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .m4-single-count {
        font-family: 'Sora', sans-serif;
        font-size: 0.88rem;
        color: rgba(255,255,255,0.45);
    }
    .m4-single-count strong {
        color: #11C18F;
        font-weight: 700;
        font-size: 1rem;
    }
    .m4-single-remaining {
        font-family: 'Sora', sans-serif;
        font-size: 0.78rem;
        color: rgba(232,110,75,0.7);
    }

    @keyframes m4-bar-grow {
        to { width: var(--w); }
    }

    /* Count rows (OWASP) */
    .m4-counts {
        display: flex;
        flex-direction: column;
        gap: 0;
    }
    .m4-count-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 14px 0;
        border-bottom: 1px solid rgba(255,255,255,0.04);
    }
    .m4-count-row:last-child {
        border-bottom: none;
    }
    .m4-count-label {
        font-family: 'Sora', sans-serif;
        font-size: 0.88rem;
        color: rgba(255,255,255,0.4);
    }
    .m4-count-num {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 1.6rem;
        line-height: 1;
    }
    .m4-num-teal  { color: #48AAA5; }
    .m4-num-green { color: #11C18F; }
    .m4-num-coral { color: #E86E4B; }

    /* ===== BOTTOM: Reminder ===== */
    .m4-reminder {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 16px 24px;
        background: rgba(17,193,143,0.03);
        border: 1px solid rgba(17,193,143,0.1);
        border-radius: 10px;
        font-family: 'Sora', sans-serif;
        font-size: 0.88rem;
        color: rgba(255,255,255,0.45);
        margin-top: 16px;
    }
    .m4-reminder strong {
        color: #11C18F;
        font-weight: 600;
    }
    .m4-reminder-dot {
        width: 8px; height: 8px;
        border-radius: 50%;
        background: #EFD61B;
        box-shadow: 0 0 8px rgba(239,214,27,0.4);
        flex-shrink: 0;
    }

    /* Entrances */
    @keyframes m4-in {
        from { opacity: 0; transform: translateY(14px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .m4-in-1 { opacity: 0; animation: m4-in 0.7s ease-out 0.15s forwards; }
    .m4-in-2 { opacity: 0; animation: m4-in 0.8s ease-out 0.3s forwards; }
    .m4-in-3 { opacity: 0; animation: m4-in 0.6s ease-out 1.4s forwards; }
    .m4-in-4 { opacity: 0; animation: m4-in 0.6s ease-out 1.6s forwards; }
    .m4-in-5 { opacity: 0; animation: m4-in 0.7s ease-out 0.5s forwards; }
    .m4-in-6 { opacity: 0; animation: m4-in 0.7s ease-out 0.8s forwards; }
    .m4-in-7 { opacity: 0; animation: m4-in 0.6s ease-out 1.2s forwards; }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animated percentage counter
        const pctEl = document.querySelector('.m4-pct');
        if (!pctEl) return;
        const target = parseInt(pctEl.dataset.target);
        const duration = 2000;
        let started = false;

        function run() {
            if (started) return;
            started = true;
            const t0 = performance.now();
            function tick(now) {
                const p = Math.min((now - t0) / duration, 1);
                const ease = 1 - Math.pow(1 - p, 3);
                pctEl.textContent = Math.floor(ease * target);
                if (p < 1) requestAnimationFrame(tick);
            }
            requestAnimationFrame(tick);
        }

        // Sync with ring animation (0.6s delay)
        setTimeout(run, 600);
    });
</script>
