<div class="relative min-h-screen overflow-hidden bg-[#080c14]">

    {{-- Aurora background — warmer tones for this slide --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="s3-aurora s3-aurora-1"></div>
        <div class="s3-aurora s3-aurora-2"></div>
        <div class="s3-aurora s3-aurora-3"></div>
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 80%);"></div>
    </div>

    {{-- Diagonal fracture line — the visual pivot --}}
    <svg class="s3-fracture absolute inset-0 w-full h-full pointer-events-none z-[5]" preserveAspectRatio="none" viewBox="0 0 1920 1080">
        <line x1="960" y1="0" x2="960" y2="1080" stroke="rgba(232,110,75,0.18)" stroke-width="1" class="s3-fracture-line" />
        <line x1="960" y1="0" x2="960" y2="1080" stroke="rgba(232,110,75,0.05)" stroke-width="80" class="s3-fracture-glow" />
    </svg>

    {{-- Page layout --}}
    <div class="s3-page relative z-10">

        {{-- Top bar --}}
        <div class="s3-stagger-1" style="display: flex; align-items: center; justify-content: space-between;">
            <img src="/cos-systems-logo.svg" alt="COS Systems" style="width: 56px; height: 56px;" />
            <div style="display: flex; align-items: center; gap: 12px; padding: 8px 16px; border-radius: 9999px; border: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 8px #11C18F;" class="animate-pulse"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.3em; color: rgba(255,255,255,0.4); font-size: 10px; font-weight: 500;">Live</span>
            </div>
        </div>

        {{-- Two-column split layout --}}
        <div class="s3-split">

            {{-- LEFT: The confidence side --}}
            <div class="s3-left">
                <div class="s3-stagger-2">
                    <div style="display: inline-flex; align-items: center; gap: 10px; margin-bottom: 20px;">
                        <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 12px rgba(17,193,143,0.4);"></div>
                        <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(17,193,143,0.7); font-weight: 600;">The experience</span>
                    </div>
                </div>

                <div class="s3-stagger-3">
                    <h2 class="s3-headline-left">
                        I've been <span class="s3-gradient-green">here before</span>
                    </h2>
                </div>

                <div class="s3-stagger-4" style="margin-top: 24px;">
                    <p style="color: rgba(255,255,255,0.4); font-size: 1.05rem; line-height: 1.7; max-width: 420px;">
                        Growth phases like this. Teams expanding. Products finding market fit. Momentum building.
                    </p>
                </div>

                <div class="s3-stagger-5" style="margin-top: 32px;">
                    <div style="display: flex; align-items: center; gap: 16px;">
                        <div style="width: 48px; height: 48px; border-radius: 12px; background: rgba(17,193,143,0.06); border: 1px solid rgba(17,193,143,0.1); display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 22px; height: 22px; color: #11C18F;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.281m5.94 2.28l-2.28 5.941" />
                            </svg>
                        </div>
                        <div>
                            <div style="color: rgba(255,255,255,0.6); font-size: 0.9rem; font-weight: 600;">Things feel right</div>
                            <div style="color: rgba(255,255,255,0.25); font-size: 0.8rem;">And that's exactly when it gets dangerous.</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- RIGHT: The hard truth side --}}
            <div class="s3-right">
                <div class="s3-stagger-6">
                    <div style="display: inline-flex; align-items: center; gap: 10px; margin-bottom: 20px;">
                        <div style="width: 8px; height: 8px; border-radius: 50%; background: #E86E4B; box-shadow: 0 0 12px rgba(232,110,75,0.4);"></div>
                        <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(232,110,75,0.7); font-weight: 600;">The pattern</span>
                    </div>
                </div>

                <div class="s3-stagger-7">
                    <h2 class="s3-headline-right">
                        I've also seen it <span class="s3-gradient-coral">fall apart</span>
                    </h2>
                </div>

                <div class="s3-stagger-8" style="margin-top: 28px;">
                    <div class="s3-failures">
                        <div class="s3-failure-item">
                            <div class="s3-failure-marker"></div>
                            <div>
                                <div class="s3-failure-title">Hiring without a plan</div>
                                <div class="s3-failure-desc">Growing headcount faster than the structure to support it</div>
                            </div>
                        </div>
                        <div class="s3-failure-item">
                            <div class="s3-failure-marker"></div>
                            <div>
                                <div class="s3-failure-title">Company fragmentation</div>
                                <div class="s3-failure-desc">Teams drifting into silos with no shared direction</div>
                            </div>
                        </div>
                        <div class="s3-failure-item">
                            <div class="s3-failure-marker"></div>
                            <div>
                                <div class="s3-failure-title">Wrong levels of autonomy</div>
                                <div class="s3-failure-desc">Too much where structure was needed, not enough where it would've helped</div>
                            </div>
                        </div>
                        <div class="s3-failure-item">
                            <div class="s3-failure-marker"></div>
                            <div>
                                <div class="s3-failure-title">No cohesion on messaging</div>
                                <div class="s3-failure-desc">Similar situations handled differently every time</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- Bottom — the kicker --}}
        <div class="s3-stagger-9">
            <div class="s3-bottom-bar">
                <div style="width: 60px; height: 1px; background: linear-gradient(to right, transparent, rgba(232,110,75,0.3));"></div>
                <span class="s3-bottom-text">
                    Our size right now is where most companies
                    <span style="color: #E86E4B; font-weight: 700;">fail</span>
                    — or push through to
                    <span style="color: #11C18F; font-weight: 700;">stability</span>
                </span>
                <div style="width: 60px; height: 1px; background: linear-gradient(to left, transparent, rgba(17,193,143,0.3));"></div>
            </div>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&display=swap" rel="stylesheet">
<style>
    /* Page layout */
    .s3-page {
        display: grid;
        grid-template-rows: auto 1fr auto;
        min-height: 100vh;
        padding: 32px 80px 80px;
        gap: 24px;
        max-width: 1280px;
        margin: 0 auto;
    }

    /* Split layout */
    .s3-split {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    .s3-left {
        padding-right: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .s3-right {
        padding-left: 20px;
    }

    /* Headlines */
    .s3-headline-left,
    .s3-headline-right {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(2rem, 3.5vw, 3rem);
        letter-spacing: -0.03em;
        line-height: 1.05;
        color: rgba(255,255,255,0.9);
    }

    .s3-gradient-green {
        background: linear-gradient(135deg, #11C18F, #48AAA5, #AFEFCD);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: s3-shimmer 6s ease-in-out infinite;
    }

    .s3-gradient-coral {
        background: linear-gradient(135deg, #E86E4B, #e8956b, #E86E4B);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: s3-shimmer 6s ease-in-out infinite;
    }

    @keyframes s3-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    /* Failure list */
    .s3-failures {
        display: flex;
        flex-direction: column;
        gap: 18px;
    }

    .s3-failure-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        padding: 14px 18px;
        border-radius: 12px;
        background: rgba(232,110,75,0.03);
        border: 1px solid rgba(232,110,75,0.06);
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .s3-failure-item:hover {
        background: rgba(232,110,75,0.06);
        border-color: rgba(232,110,75,0.12);
        transform: translateX(4px);
    }

    .s3-failure-marker {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #E86E4B;
        box-shadow: 0 0 8px rgba(232,110,75,0.3);
        margin-top: 7px;
        flex-shrink: 0;
    }

    .s3-failure-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 0.95rem;
        color: rgba(255,255,255,0.85);
        margin-bottom: 3px;
    }

    .s3-failure-desc {
        color: rgba(255,255,255,0.3);
        font-size: 0.8rem;
        line-height: 1.5;
    }

    /* Bottom bar */
    .s3-bottom-bar {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
    }

    .s3-bottom-text {
        font-size: 0.95rem;
        color: rgba(255,255,255,0.4);
        letter-spacing: 0.01em;
    }

    /* Aurora — dual temperature */
    .s3-aurora {
        position: absolute;
        border-radius: 50%;
        filter: blur(120px);
        will-change: transform;
    }
    .s3-aurora-1 {
        width: 500px; height: 500px;
        background: radial-gradient(circle, rgba(17,193,143,0.08) 0%, transparent 70%);
        top: -10%; left: -10%;
        animation: s3-drift-1 14s ease-in-out infinite;
    }
    .s3-aurora-2 {
        width: 450px; height: 450px;
        background: radial-gradient(circle, rgba(232,110,75,0.06) 0%, transparent 70%);
        bottom: -15%; right: -5%;
        animation: s3-drift-2 16s ease-in-out infinite;
    }
    .s3-aurora-3 {
        width: 300px; height: 300px;
        background: radial-gradient(circle, rgba(232,110,75,0.04) 0%, transparent 70%);
        top: 30%; right: 20%;
        animation: s3-drift-3 20s ease-in-out infinite;
    }

    @keyframes s3-drift-1 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(30px, 20px) scale(1.1); }
    }
    @keyframes s3-drift-2 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(-40px, -20px) scale(1.08); }
    }
    @keyframes s3-drift-3 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(20px, -30px) scale(1.12); }
    }

    /* Fracture line animation */
    .s3-fracture-line {
        stroke-dasharray: 1080;
        stroke-dashoffset: 1080;
        animation: s3-draw-fracture 1.5s cubic-bezier(0.22, 1, 0.36, 1) 1.2s forwards;
    }
    .s3-fracture-glow {
        stroke-dasharray: 1080;
        stroke-dashoffset: 1080;
        animation: s3-draw-fracture 1.8s cubic-bezier(0.22, 1, 0.36, 1) 1.4s forwards;
    }
    @keyframes s3-draw-fracture {
        to { stroke-dashoffset: 0; }
    }

    /* Staggered entrances */
    @keyframes s3-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes s3-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .s3-stagger-1 { opacity: 0; animation: s3-reveal-down 0.8s ease-out 0.1s forwards; }
    .s3-stagger-2 { opacity: 0; animation: s3-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.2s forwards; }
    .s3-stagger-3 { opacity: 0; animation: s3-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.35s forwards; }
    .s3-stagger-4 { opacity: 0; animation: s3-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .s3-stagger-5 { opacity: 0; animation: s3-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.7s forwards; }
    .s3-stagger-6 { opacity: 0; animation: s3-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.0s forwards; }
    .s3-stagger-7 { opacity: 0; animation: s3-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.15s forwards; }
    .s3-stagger-8 { opacity: 0; animation: s3-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.35s forwards; }
    .s3-stagger-9 { opacity: 0; animation: s3-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.8s forwards; }
</style>
