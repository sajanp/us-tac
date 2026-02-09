<div class="relative min-h-screen overflow-hidden bg-[#080c14]">

    {{-- Aurora background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="s8-aurora s8-aurora-1"></div>
        <div class="s8-aurora s8-aurora-2"></div>
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 80%);"></div>
    </div>

    {{-- Page layout --}}
    <div class="s8-page relative z-10">

        {{-- Top bar --}}
        <div class="s8-stagger-1" style="display: flex; align-items: center; justify-content: space-between; grid-column: 1 / -1;">
            <img src="/cos-systems-logo.svg" alt="COS Systems" style="width: 56px; height: 56px;" />
            <div style="display: flex; align-items: center; gap: 12px; padding: 8px 16px; border-radius: 9999px; border: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 8px #11C18F;" class="animate-pulse"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.3em; color: rgba(255,255,255,0.4); font-size: 10px; font-weight: 500;">Live</span>
            </div>
        </div>

        {{-- Left column: headline --}}
        <div class="s8-left">
            <div class="s8-stagger-2">
                <h1 class="s8-headline">
                    <span style="color: rgba(255,255,255,0.9);">What we'll </span><span class="s8-gradient-text">walk away with</span>
                </h1>
            </div>
            <div class="s8-stagger-3">
                <p style="color: rgba(255,255,255,0.35); font-size: 1.05rem; line-height: 1.7; margin-top: 16px;">
                    By the end of this week, five things will be locked in. Three solidify what we've built. Two chart where it goes next.
                </p>
            </div>
            {{-- Big counter visual --}}
            <div class="s8-stagger-4 s8-counter">
                <span class="s8-counter-num">5</span>
                <span class="s8-counter-label">outcomes</span>
            </div>
        </div>

        {{-- Right column: deliverables --}}
        <div class="s8-right">

            {{-- Section: Lock it in --}}
            <div class="s8-section-label s8-stagger-3" style="color: rgba(17,193,143,0.5);">Lock it in</div>

            <div class="s8-item s8-stagger-4">
                <div class="s8-item-line">
                    <div class="s8-dot s8-dot-green"></div>
                    <div class="s8-line s8-line-green"></div>
                </div>
                <div class="s8-item-content">
                    <div class="s8-item-num" style="color: #11C18F;">01</div>
                    <div>
                        <div class="s8-item-title">Shared direction</div>
                        <div class="s8-item-desc">Everyone aligned on where we're going and why it matters.</div>
                    </div>
                </div>
            </div>

            <div class="s8-item s8-stagger-5">
                <div class="s8-item-line">
                    <div class="s8-dot s8-dot-green"></div>
                    <div class="s8-line s8-line-green"></div>
                </div>
                <div class="s8-item-content">
                    <div class="s8-item-num" style="color: #11C18F;">02</div>
                    <div>
                        <div class="s8-item-title">The playbook</div>
                        <div class="s8-item-desc">A documented, repeatable manual capturing what's made the last 6 weeks work.</div>
                    </div>
                </div>
            </div>

            <div class="s8-item s8-stagger-6">
                <div class="s8-item-line">
                    <div class="s8-dot s8-dot-green"></div>
                    <div class="s8-line s8-line-green"></div>
                </div>
                <div class="s8-item-content">
                    <div class="s8-item-num" style="color: #11C18F;">03</div>
                    <div>
                        <div class="s8-item-title">6-week accountability</div>
                        <div class="s8-item-desc">Clear action items to stabilize the full organization around FSM — owned and tracked.</div>
                    </div>
                </div>
            </div>

            {{-- Expansion divider --}}
            <div class="s8-divider s8-stagger-7">
                <div class="s8-divider-line"></div>
                <span class="s8-divider-label">Scale it out</span>
                <div class="s8-divider-line"></div>
            </div>

            <div class="s8-item s8-stagger-8">
                <div class="s8-item-line">
                    <div class="s8-dot s8-dot-teal"></div>
                    <div class="s8-line s8-line-teal"></div>
                </div>
                <div class="s8-item-content">
                    <div class="s8-item-num" style="color: #48AAA5;">04</div>
                    <div>
                        <div class="s8-item-title">Wholesale Engine export</div>
                        <div class="s8-item-desc">A plan to bring what we've built to WE, accounting for its unique nuances.</div>
                    </div>
                </div>
            </div>

            <div class="s8-item s8-stagger-9">
                <div class="s8-item-line">
                    <div class="s8-dot s8-dot-teal"></div>
                </div>
                <div class="s8-item-content">
                    <div class="s8-item-num" style="color: #48AAA5;">05</div>
                    <div>
                        <div class="s8-item-title">The broader roadmap</div>
                        <div class="s8-item-desc">Alignment on reaching Business Engine, Prospector, and beyond — on their terms.</div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&display=swap" rel="stylesheet">
<style>
    /* Page layout — two-column */
    .s8-page {
        display: grid;
        grid-template-columns: 38% 1fr;
        grid-template-rows: auto 1fr;
        min-height: 100vh;
        padding: 32px 80px 80px;
        gap: 24px 60px;
        max-width: 1280px;
        margin: 0 auto;
    }

    .s8-left {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .s8-right {
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 0;
    }

    /* Headline */
    .s8-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(2.4rem, 4.5vw, 3.8rem);
        letter-spacing: -0.03em;
        line-height: 1.08;
    }

    .s8-gradient-text {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 40%, #11C18F 70%, #AFEFCD 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: s8-shimmer 6s ease-in-out infinite;
    }

    @keyframes s8-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    /* Big counter */
    .s8-counter {
        margin-top: 40px;
        display: flex;
        align-items: baseline;
        gap: 14px;
    }

    .s8-counter-num {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 7rem;
        line-height: 1;
        letter-spacing: -0.04em;
        background: linear-gradient(180deg, rgba(17,193,143,0.2) 0%, rgba(17,193,143,0.05) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .s8-counter-label {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 1.1rem;
        color: rgba(255,255,255,0.15);
        text-transform: uppercase;
        letter-spacing: 0.15em;
    }

    /* Section labels */
    .s8-section-label {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        margin-bottom: 14px;
        padding-left: 28px;
    }

    /* Item rows */
    .s8-item {
        display: flex;
        gap: 0;
        align-items: stretch;
    }

    .s8-item-line {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 20px;
        flex-shrink: 0;
    }

    .s8-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        flex-shrink: 0;
        margin-top: 6px;
    }

    .s8-dot-green {
        background: #11C18F;
        box-shadow: 0 0 10px rgba(17,193,143,0.35);
    }

    .s8-dot-teal {
        background: #48AAA5;
        box-shadow: 0 0 10px rgba(72,170,165,0.35);
    }

    .s8-line {
        width: 1px;
        flex: 1;
        margin-top: 4px;
    }

    .s8-line-green {
        background: linear-gradient(to bottom, rgba(17,193,143,0.2), rgba(17,193,143,0.05));
    }

    .s8-line-teal {
        background: linear-gradient(to bottom, rgba(72,170,165,0.2), rgba(72,170,165,0.05));
    }

    .s8-item-content {
        display: flex;
        gap: 14px;
        padding: 0 0 24px 14px;
        align-items: flex-start;
    }

    .s8-item-num {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 0.85rem;
        flex-shrink: 0;
        margin-top: 2px;
    }

    .s8-item-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 1.15rem;
        color: rgba(255,255,255,0.85);
        letter-spacing: -0.01em;
        margin-bottom: 4px;
    }

    .s8-item-desc {
        color: rgba(255,255,255,0.35);
        font-size: 0.82rem;
        line-height: 1.55;
    }

    /* Divider between sections */
    .s8-divider {
        display: flex;
        align-items: center;
        gap: 14px;
        margin: 10px 0 18px 0;
        padding-left: 28px;
    }

    .s8-divider-line {
        height: 1px;
        flex: 1;
        background: linear-gradient(to right, rgba(72,170,165,0.15), rgba(72,170,165,0.03));
    }

    .s8-divider-line:first-child {
        flex: 0 0 30px;
        background: linear-gradient(to right, rgba(72,170,165,0.03), rgba(72,170,165,0.15));
    }

    .s8-divider-label {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 0.65rem;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        color: rgba(72,170,165,0.4);
        white-space: nowrap;
    }

    /* Aurora */
    .s8-aurora {
        position: absolute;
        border-radius: 50%;
        filter: blur(120px);
        will-change: transform;
    }
    .s8-aurora-1 {
        width: 500px; height: 500px;
        background: radial-gradient(circle, rgba(17,193,143,0.09) 0%, transparent 70%);
        top: -10%; left: -5%;
        animation: s8-drift-1 14s ease-in-out infinite;
    }
    .s8-aurora-2 {
        width: 450px; height: 450px;
        background: radial-gradient(circle, rgba(72,170,165,0.07) 0%, transparent 70%);
        bottom: -10%; right: -8%;
        animation: s8-drift-2 16s ease-in-out infinite;
    }

    @keyframes s8-drift-1 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(30px, 20px) scale(1.1); }
    }
    @keyframes s8-drift-2 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(-40px, -20px) scale(1.08); }
    }

    /* Staggered entrances */
    @keyframes s8-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes s8-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .s8-stagger-1 { opacity: 0; animation: s8-reveal-down 0.8s ease-out 0.1s forwards; }
    .s8-stagger-2 { opacity: 0; animation: s8-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.25s forwards; }
    .s8-stagger-3 { opacity: 0; animation: s8-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.45s forwards; }
    .s8-stagger-4 { opacity: 0; animation: s8-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.65s forwards; }
    .s8-stagger-5 { opacity: 0; animation: s8-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.8s forwards; }
    .s8-stagger-6 { opacity: 0; animation: s8-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.95s forwards; }
    .s8-stagger-7 { opacity: 0; animation: s8-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.1s forwards; }
    .s8-stagger-8 { opacity: 0; animation: s8-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.25s forwards; }
    .s8-stagger-9 { opacity: 0; animation: s8-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.4s forwards; }
</style>
