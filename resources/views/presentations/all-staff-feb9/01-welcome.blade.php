<div class="relative min-h-screen overflow-hidden" style="background: #050a14;">

    {{-- Background: drifting diagonal lines --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="m1-diag m1-d1"></div>
        <div class="m1-diag m1-d2"></div>
        <div class="m1-diag m1-d3"></div>
        <div class="m1-diag m1-d4"></div>
        <div class="m1-diag m1-d5"></div>
        <div class="m1-glow"></div>
    </div>

    {{-- Horizon line --}}
    <div class="m1-horizon"></div>

    {{-- Green accent bar — left edge --}}
    <div class="m1-bar"></div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 56px 72px 48px 88px;">

        {{-- Top: logo --}}
        <div class="flex items-center justify-between m1-in-1">
            <img src="/cos-systems-logo.svg" alt="COS Systems" style="width: 44px; height: 44px; opacity: 0.85;" />
        </div>

        {{-- Hero: left-aligned title --}}
        <div class="flex-1 flex items-center m1-in-2">
            <div>
                <h1 class="m1-hero">
                    <span class="m1-hero-1">All Staff</span>
                    <span class="m1-hero-2">Feb 9, 2026</span>
                </h1>
                <div class="m1-rule"></div>
            </div>
        </div>

        {{-- Bottom: tagline + slide number --}}
        <div class="flex items-end justify-between m1-in-3">
            <p class="m1-tag">Updates, milestones, and what's ahead</p>
            <span class="m1-num">01</span>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    /* ======= SLIDE 1 — MERIDIAN WELCOME ======= */

    /* Green accent bar — left edge */
    .m1-bar {
        position: absolute;
        top: 0; left: 0;
        width: 5px; height: 100%;
        background: linear-gradient(180deg, #11C18F 0%, rgba(17,193,143,0.25) 65%, transparent 100%);
        z-index: 20;
        transform: scaleY(0);
        transform-origin: top;
        animation: m1-bar-draw 1.4s cubic-bezier(0.22, 1, 0.36, 1) 0.1s forwards;
    }
    @keyframes m1-bar-draw {
        to { transform: scaleY(1); }
    }

    /* Horizon line across viewport */
    .m1-horizon {
        position: absolute;
        top: 40%; left: 0; right: 0;
        height: 1px;
        background: linear-gradient(90deg, rgba(17,193,143,0.25) 0%, rgba(17,193,143,0.08) 50%, transparent 100%);
        z-index: 5;
        transform: scaleX(0);
        transform-origin: left;
        animation: m1-horizon-draw 2s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards;
    }
    @keyframes m1-horizon-draw {
        to { transform: scaleX(1); }
    }

    /* Ambient glow — upper right */
    .m1-glow {
        position: absolute;
        top: -12%; right: -8%;
        width: 50vw; height: 50vw;
        max-width: 800px; max-height: 800px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(17,193,143,0.06) 0%, transparent 60%);
        filter: blur(80px);
        animation: m1-glow-pulse 12s ease-in-out infinite;
    }
    @keyframes m1-glow-pulse {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.6; transform: scale(1.1); }
    }

    /* Diagonal lines */
    .m1-diag {
        position: absolute;
        width: 1px; height: 280%;
        top: -90%;
        pointer-events: none;
    }
    .m1-d1 {
        left: 14%;
        background: linear-gradient(to bottom, transparent, rgba(17,193,143,0.03) 30%, rgba(17,193,143,0.03) 70%, transparent);
        transform: rotate(25deg);
        animation: m1-drift-a 22s ease-in-out infinite;
    }
    .m1-d2 {
        left: 32%;
        background: linear-gradient(to bottom, transparent, rgba(17,193,143,0.055) 25%, rgba(17,193,143,0.055) 75%, transparent);
        transform: rotate(25deg);
        animation: m1-drift-b 28s ease-in-out infinite;
    }
    .m1-d3 {
        left: 52%;
        background: linear-gradient(to bottom, transparent, rgba(17,193,143,0.025) 30%, rgba(17,193,143,0.025) 70%, transparent);
        transform: rotate(25deg);
        animation: m1-drift-a 18s ease-in-out infinite reverse;
    }
    .m1-d4 {
        left: 70%;
        background: linear-gradient(to bottom, transparent, rgba(17,193,143,0.04) 25%, rgba(17,193,143,0.04) 75%, transparent);
        transform: rotate(25deg);
        animation: m1-drift-b 24s ease-in-out infinite reverse;
    }
    .m1-d5 {
        left: 88%;
        background: linear-gradient(to bottom, transparent, rgba(17,193,143,0.02) 30%, rgba(17,193,143,0.02) 70%, transparent);
        transform: rotate(25deg);
        animation: m1-drift-a 20s ease-in-out infinite;
    }
    @keyframes m1-drift-a {
        0%, 100% { transform: rotate(25deg) translateX(0); }
        50% { transform: rotate(25deg) translateX(25px); }
    }
    @keyframes m1-drift-b {
        0%, 100% { transform: rotate(25deg) translateX(0); }
        50% { transform: rotate(25deg) translateX(-20px); }
    }

    /* Hero typography — LEFT ALIGNED */
    .m1-hero {
        font-family: 'Cairo', sans-serif;
        line-height: 0.88;
    }
    .m1-hero-1 {
        display: block;
        font-weight: 900;
        font-size: clamp(8rem, 18vw, 16rem);
        letter-spacing: -0.045em;
        color: #ffffff;
        text-shadow: 0 0 120px rgba(17,193,143,0.18);
    }
    .m1-hero-2 {
        display: block;
        font-weight: 700;
        font-size: clamp(3rem, 6.5vw, 6rem);
        letter-spacing: -0.02em;
        color: rgba(255,255,255,0.28);
        margin-top: 2px;
    }

    /* Green rule below title */
    .m1-rule {
        width: 200px; height: 2px;
        background: linear-gradient(90deg, #11C18F, rgba(17,193,143,0.05));
        margin-top: 32px;
        transform: scaleX(0);
        transform-origin: left;
        animation: m1-rule-draw 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.3s forwards;
    }
    @keyframes m1-rule-draw {
        to { transform: scaleX(1); }
    }

    /* Date */
    .m1-date {
        font-family: 'Sora', sans-serif;
        font-weight: 500;
        font-size: 0.85rem;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        color: rgba(17,193,143,0.65);
    }

    /* Tagline */
    .m1-tag {
        font-family: 'Sora', sans-serif;
        font-size: 1rem;
        font-weight: 400;
        color: rgba(255,255,255,0.18);
        letter-spacing: 0.02em;
    }

    /* Slide number */
    .m1-num {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 2.2rem;
        color: rgba(17,193,143,0.05);
    }

    /* Entrances */
    @keyframes m1-in {
        from { opacity: 0; transform: translateY(18px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .m1-in-1 { opacity: 0; animation: m1-in 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.4s forwards; }
    .m1-in-2 { opacity: 0; animation: m1-in 1.1s cubic-bezier(0.22, 1, 0.36, 1) 0.7s forwards; }
    .m1-in-3 { opacity: 0; animation: m1-in 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.15s forwards; }
</style>
