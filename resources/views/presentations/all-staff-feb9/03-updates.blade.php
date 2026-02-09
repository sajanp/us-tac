<div class="relative min-h-screen overflow-hidden" style="background: #050a14;">

    {{-- Background: layered atmosphere --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="m3-dots"></div>
        <div class="m3-glow m3-glow-1"></div>
        <div class="m3-glow m3-glow-2"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 32px 72px 64px 72px;">

        {{-- Header --}}
        <div class="m3-header m3-in-1">
            <img src="/cos-systems-logo.svg" alt="COS Systems" style="width: 36px; height: 36px;" />
            <h1 class="m3-title">Updates</h1>
            <div class="m3-title-rule"></div>
        </div>

        {{-- Single-column department cards --}}
        <div class="m3-flow flex-1">

            {{-- Sales & Marketing --}}
            <div class="m3-card m3-in-2">
                <div class="m3-card-accent" style="--accent: #11C18F;"></div>
                <div class="m3-card-inner">
                    <div class="m3-card-head">
                        <h2 class="m3-dept-name">Sales & Marketing</h2>
                        <div class="m3-card-badge" style="--accent: #11C18F;">
                            <span class="m3-badge-num" data-target="1528">0</span>
                            <span class="m3-badge-label">LinkedIn followers</span>
                        </div>
                    </div>
                    <ul class="m3-bullets">
                        <li><strong>Ashley</strong> shares takeaways from the 1Finity (Fujitsu) Fireside Chat</li>
                        <li>Pipeline and deal progress review</li>
                        <li><strong>Metro Connect</strong> — final preparations and collateral</li>
                        <li><strong>Open Access Day</strong> — actively pursuing new sponsors</li>
                    </ul>
                </div>
            </div>

            {{-- General & Mikael --}}
            <div class="m3-card m3-in-3">
                <div class="m3-card-accent" style="--accent: #11C18F;"></div>
                <div class="m3-card-inner">
                    <div class="m3-card-head">
                        <h2 class="m3-dept-name">General & Mikael</h2>
                    </div>
                    <ul class="m3-bullets">
                        <li>ISO progress is on track — please complete your training modules and review relevant policies</li>
                        <li>Pre-audit is scheduled for <strong>February 19th</strong></li>
                    </ul>
                </div>
            </div>

            {{-- Onboarding & CS --}}
            <div class="m3-card m3-in-4">
                <div class="m3-card-accent" style="--accent: #48AAA5;"></div>
                <div class="m3-card-inner">
                    <div class="m3-card-head">
                        <h2 class="m3-dept-name">Onboarding & CS</h2>
                    </div>
                    <ul class="m3-bullets">
                        <li>AT&T Physical Validation Testing kicks off <strong>February 17th</strong> — on-site with real customers in a live environment</li>
                    </ul>
                </div>
            </div>

            {{-- Product & Development --}}
            <div class="m3-card m3-in-5">
                <div class="m3-card-accent" style="--accent: #48AAA5;"></div>
                <div class="m3-card-inner">
                    <div class="m3-card-head">
                        <h2 class="m3-dept-name">Product & Development</h2>
                    </div>
                    <ul class="m3-bullets">
                        <li><strong>FSM API Auth</strong> change complete — Fiber First goes live <strong>February 15th</strong></li>
                    </ul>
                </div>
            </div>

            {{-- ISO, Governance & Admin --}}
            <div class="m3-card m3-card-last m3-in-6">
                <div class="m3-card-accent" style="--accent: #0C7577;"></div>
                <div class="m3-card-inner">
                    <div class="m3-card-head" style="margin-bottom: 0;">
                        <h2 class="m3-dept-name">ISO, Governance & Admin</h2>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    /* ======= SLIDE 3 — MERIDIAN UPDATES ======= */

    /* Dot background */
    .m3-dots {
        position: absolute; inset: 0;
        background-image: radial-gradient(circle, rgba(17,193,143,0.6) 0.8px, transparent 0.8px);
        background-size: 40px 40px;
        opacity: 0.035;
    }

    /* Dual ambient glows */
    .m3-glow {
        position: absolute;
        border-radius: 50%;
        filter: blur(100px);
    }
    .m3-glow-1 {
        top: -8%; right: 10%;
        width: 40vw; height: 40vw;
        max-width: 600px; max-height: 600px;
        background: radial-gradient(circle, rgba(17,193,143,0.06) 0%, transparent 60%);
    }
    .m3-glow-2 {
        bottom: -5%; left: 5%;
        width: 35vw; height: 35vw;
        max-width: 500px; max-height: 500px;
        background: radial-gradient(circle, rgba(72,170,165,0.04) 0%, transparent 60%);
    }

    /* Header */
    .m3-header {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 12px;
    }
    .m3-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 2rem;
        color: #11C18F;
        letter-spacing: -0.02em;
    }
    .m3-title-rule {
        flex: 1;
        height: 1px;
        background: linear-gradient(90deg, rgba(17,193,143,0.2), transparent 80%);
    }

    /* Card flow */
    .m3-flow {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    /* Department cards */
    .m3-card {
        position: relative;
        display: flex;
        border-radius: 10px;
        background: rgba(255,255,255,0.018);
        border: 1px solid rgba(255,255,255,0.04);
        overflow: hidden;
        transition: background 0.5s ease, border-color 0.5s ease;
    }
    .m3-card:hover {
        background: rgba(255,255,255,0.03);
        border-color: rgba(17,193,143,0.1);
    }

    /* Left accent strip */
    .m3-card-accent {
        width: 4px;
        flex-shrink: 0;
        background: var(--accent);
        opacity: 0.7;
        border-radius: 10px 0 0 10px;
    }

    .m3-card-inner {
        flex: 1;
        padding: 10px 28px 10px 24px;
        min-width: 0;
    }

    .m3-card-head {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        margin-bottom: 8px;
    }

    .m3-dept-name {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 1.05rem;
        color: rgba(255,255,255,0.85);
        white-space: nowrap;
    }

    /* Badge (LinkedIn stat) — sits inline in the card header */
    .m3-card-badge {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 6px 16px;
        background: rgba(17,193,143,0.06);
        border: 1px solid rgba(17,193,143,0.12);
        border-radius: 20px;
        flex-shrink: 0;
    }
    .m3-badge-num {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 1.3rem;
        color: #11C18F;
        line-height: 1;
    }
    .m3-badge-label {
        font-family: 'Sora', sans-serif;
        font-size: 0.72rem;
        font-weight: 500;
        color: rgba(255,255,255,0.35);
    }

    /* Bullet lists */
    .m3-bullets {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 6px;
    }
    .m3-bullets li {
        position: relative;
        padding-left: 18px;
        font-family: 'Sora', sans-serif;
        font-size: 0.84rem;
        color: rgba(255,255,255,0.42);
        line-height: 1.55;
    }
    .m3-bullets li::before {
        content: '';
        position: absolute;
        left: 0; top: 8px;
        width: 5px; height: 5px;
        border-radius: 50%;
        background: rgba(17,193,143,0.45);
    }
    .m3-bullets li strong {
        color: #11C18F;
        font-weight: 600;
    }

    /* Live discussion */
    .m3-live {
        font-family: 'Sora', sans-serif;
        font-size: 0.82rem;
        color: rgba(255,255,255,0.2);
        font-style: italic;
        margin: 8px 0 0 0;
    }

    /* Entrances */
    @keyframes m3-in {
        from { opacity: 0; transform: translateY(18px) scale(0.98); filter: blur(3px); }
        to   { opacity: 1; transform: translateY(0) scale(1); filter: blur(0); }
    }
    .m3-in-1 { opacity: 0; animation: m3-in 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.15s forwards; }
    .m3-in-2 { opacity: 0; animation: m3-in 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .m3-in-3 { opacity: 0; animation: m3-in 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.45s forwards; }
    .m3-in-4 { opacity: 0; animation: m3-in 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.6s forwards; }
    .m3-in-5 { opacity: 0; animation: m3-in 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.75s forwards; }
    .m3-in-6 { opacity: 0; animation: m3-in 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
</style>

<script>
    // Animated LinkedIn counter
    document.addEventListener('DOMContentLoaded', function() {
        const el = document.querySelector('.m3-badge-num');
        if (!el) return;
        const target = parseInt(el.dataset.target);
        const duration = 2200;
        let started = false;

        function run() {
            if (started) return;
            started = true;
            const t0 = performance.now();
            function tick(now) {
                const p = Math.min((now - t0) / duration, 1);
                const ease = 1 - Math.pow(1 - p, 3);
                el.textContent = Math.floor(ease * target).toLocaleString();
                if (p < 1) requestAnimationFrame(tick);
            }
            requestAnimationFrame(tick);
        }

        // Start after entrance animation
        setTimeout(run, 700);
    });
</script>
