<div class="relative min-h-screen overflow-hidden bg-[#080c14]">

    {{-- Aurora background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="s5-aurora s5-aurora-1"></div>
        <div class="s5-aurora s5-aurora-2"></div>
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 80%);"></div>
    </div>

    {{-- Ghost framework names — flash one by one --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <span class="s5-ghost s5-ghost-1" style="top: 6%; left: 4%; font-size: 5.5rem; transform: rotate(-8deg);">PMP</span>
        <span class="s5-ghost s5-ghost-2" style="top: 14%; right: 6%; font-size: 5rem; transform: rotate(5deg);">Six Sigma</span>
        <span class="s5-ghost s5-ghost-3" style="bottom: 30%; left: 10%; font-size: 4.5rem; transform: rotate(-4deg);">Scrum</span>
        <span class="s5-ghost s5-ghost-4" style="top: 42%; right: 2%; font-size: 5rem; transform: rotate(7deg);">Agile</span>
        <span class="s5-ghost s5-ghost-5" style="bottom: 10%; right: 12%; font-size: 4.5rem; transform: rotate(-6deg);">Traction</span>
        <span class="s5-ghost s5-ghost-6" style="top: 68%; left: 1%; font-size: 4rem; transform: rotate(3deg);">OKRs</span>
    </div>

    {{-- Strikethrough line across ghost labels --}}
    <svg class="absolute inset-0 w-full h-full pointer-events-none z-[2]" preserveAspectRatio="none" viewBox="0 0 1920 1080">
        <line x1="0" y1="540" x2="1920" y2="540" stroke="rgba(232,110,75,0.06)" stroke-width="2" stroke-dasharray="8 12" class="s5-strike-line" />
    </svg>

    {{-- Page layout --}}
    <div class="s5-page relative z-10">

        {{-- Top bar --}}
        <div class="s5-stagger-1" style="display: flex; align-items: center; justify-content: space-between;">
            <img src="/cos-systems-logo.svg" alt="COS Systems" style="width: 56px; height: 56px;" />
            <div style="display: flex; align-items: center; gap: 12px; padding: 8px 16px; border-radius: 9999px; border: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 8px #11C18F;" class="animate-pulse"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.3em; color: rgba(255,255,255,0.4); font-size: 10px; font-weight: 500;">Live</span>
            </div>
        </div>

        {{-- Main content --}}
        <div class="s5-content">

            {{-- Headline --}}
            <div class="s5-stagger-2">
                <h1 class="s5-headline">
                    Frameworks are <span style="color: rgba(255,255,255,0.3);">great to study.</span><br>
                    <span class="s5-gradient-text">Copying them is useless.</span>
                </h1>
            </div>

            {{-- Core argument --}}
            <div class="s5-stagger-3" style="margin-top: 32px; max-width: 780px;">
                <p style="color: rgba(255,255,255,0.4); font-size: 1.2rem; line-height: 1.75;">
                    If you abstract any framework to the point where it suits every company, direct implementation loses all value. The implementation has to come from a team that understands <em style="color: rgba(255,255,255,0.6); font-style: normal; font-weight: 600;">our</em> unique factors, challenges, constraints, and goals.
                </p>
            </div>

            {{-- The "what we actually have" trio --}}
            <div class="s5-stagger-4 s5-trio">

                <div class="s5-trio-item group">
                    <div class="s5-trio-contrast">
                        <span class="s5-trio-not">Not the people we don't</span>
                        <span class="s5-trio-real">The people we <em>actually</em> have</span>
                    </div>
                </div>

                <div class="s5-trio-divider"></div>

                <div class="s5-trio-item group">
                    <div class="s5-trio-contrast">
                        <span class="s5-trio-not">Not the budget we need</span>
                        <span class="s5-trio-real">The budget we <em>actually</em> have</span>
                    </div>
                </div>

                <div class="s5-trio-divider"></div>

                <div class="s5-trio-item group">
                    <div class="s5-trio-contrast">
                        <span class="s5-trio-not">Not a box from a book</span>
                        <span class="s5-trio-real">The skills we <em>actually</em> have</span>
                    </div>
                </div>

            </div>
        </div>

        {{-- Bottom kicker --}}
        <div class="s5-stagger-5">
            <div style="display: flex; align-items: center; justify-content: center; gap: 20px;">
                <div style="width: 60px; height: 1px; background: linear-gradient(to right, transparent, rgba(17,193,143,0.4));"></div>
                <span style="font-family: 'Cairo', sans-serif; font-weight: 700; font-size: 1.25rem; color: rgba(255,255,255,0.7); text-align: center; letter-spacing: -0.01em;">
                    The people in this room have an <span style="color: #11C18F; font-weight: 900;">insane level</span> of experience and perspective.
                </span>
                <div style="width: 60px; height: 1px; background: linear-gradient(to left, transparent, rgba(17,193,143,0.4));"></div>
            </div>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&display=swap" rel="stylesheet">
<style>
    /* Page layout */
    .s5-page {
        display: grid;
        grid-template-rows: auto 1fr auto;
        min-height: 100vh;
        padding: 32px 80px 80px;
        gap: 24px;
        max-width: 1280px;
        margin: 0 auto;
    }

    .s5-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    /* Headline */
    .s5-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(2.8rem, 5.5vw, 4.8rem);
        letter-spacing: -0.03em;
        line-height: 1.08;
        color: rgba(255,255,255,0.9);
    }

    .s5-gradient-text {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 40%, #11C18F 70%, #AFEFCD 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: s5-shimmer 6s ease-in-out infinite;
    }

    @keyframes s5-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    /* Ghost framework labels — sequential flash */
    .s5-ghost {
        position: absolute;
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        color: rgba(255,255,255,0.04);
        user-select: none;
        white-space: nowrap;
        opacity: 0;
    }

    /* Each ghost fades in, flashes brighter, then settles */
    @keyframes s5-ghost-flash {
        0% { opacity: 0; color: rgba(255,255,255,0.04); }
        15% { opacity: 1; color: rgba(255,255,255,0.12); text-shadow: 0 0 40px rgba(255,255,255,0.06); }
        40% { opacity: 1; color: rgba(255,255,255,0.07); text-shadow: none; }
        100% { opacity: 1; color: rgba(255,255,255,0.05); text-shadow: none; }
    }

    .s5-ghost-1 { animation: s5-ghost-flash 2.5s ease-out 0.3s forwards; }
    .s5-ghost-2 { animation: s5-ghost-flash 2.5s ease-out 0.7s forwards; }
    .s5-ghost-3 { animation: s5-ghost-flash 2.5s ease-out 1.1s forwards; }
    .s5-ghost-4 { animation: s5-ghost-flash 2.5s ease-out 1.5s forwards; }
    .s5-ghost-5 { animation: s5-ghost-flash 2.5s ease-out 1.9s forwards; }
    .s5-ghost-6 { animation: s5-ghost-flash 2.5s ease-out 2.3s forwards; }

    /* Strike line */
    .s5-strike-line {
        stroke-dashoffset: 2000;
        animation: s5-draw-strike 2s ease-out 1.5s forwards;
    }
    @keyframes s5-draw-strike {
        to { stroke-dashoffset: 0; }
    }

    /* Trio — the contrast pairs */
    .s5-trio {
        display: flex;
        align-items: stretch;
        gap: 0;
        margin-top: 36px;
        padding: 24px 0;
        border-top: 1px solid rgba(255,255,255,0.04);
        border-bottom: 1px solid rgba(255,255,255,0.04);
    }

    .s5-trio-item {
        flex: 1;
        padding: 16px 24px;
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .s5-trio-item:hover {
        background: rgba(17,193,143,0.03);
    }

    .s5-trio-divider {
        width: 1px;
        background: rgba(255,255,255,0.06);
    }

    .s5-trio-contrast {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .s5-trio-not {
        font-size: 0.9rem;
        color: rgba(232,110,75,0.45);
        text-decoration: line-through;
        text-decoration-color: rgba(232,110,75,0.3);
        letter-spacing: 0.01em;
    }

    .s5-trio-real {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 1.35rem;
        color: rgba(255,255,255,0.85);
        letter-spacing: -0.01em;
    }

    .s5-trio-real em {
        font-style: normal;
        color: #11C18F;
    }

    /* Aurora */
    .s5-aurora {
        position: absolute;
        border-radius: 50%;
        filter: blur(120px);
        will-change: transform;
    }
    .s5-aurora-1 {
        width: 500px; height: 500px;
        background: radial-gradient(circle, rgba(17,193,143,0.09) 0%, transparent 70%);
        bottom: -10%; left: -5%;
        animation: s5-drift-1 14s ease-in-out infinite;
    }
    .s5-aurora-2 {
        width: 400px; height: 400px;
        background: radial-gradient(circle, rgba(12,117,119,0.07) 0%, transparent 70%);
        top: -10%; right: -8%;
        animation: s5-drift-2 16s ease-in-out infinite;
    }

    @keyframes s5-drift-1 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(30px, -20px) scale(1.1); }
    }
    @keyframes s5-drift-2 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(-40px, 20px) scale(1.08); }
    }

    /* Staggered entrances */
    @keyframes s5-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes s5-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .s5-stagger-1 { opacity: 0; animation: s5-reveal-down 0.8s ease-out 0.1s forwards; }
    .s5-stagger-2 { opacity: 0; animation: s5-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .s5-stagger-3 { opacity: 0; animation: s5-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.55s forwards; }
    .s5-stagger-4 { opacity: 0; animation: s5-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.85s forwards; }
    .s5-stagger-5 { opacity: 0; animation: s5-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.2s forwards; }
</style>
