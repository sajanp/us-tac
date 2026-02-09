<div class="relative min-h-screen overflow-hidden bg-[#080c14]">

    {{-- Aurora background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="s6-aurora s6-aurora-1"></div>
        <div class="s6-aurora s6-aurora-2"></div>
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 80%);"></div>
    </div>

    {{-- Page layout --}}
    <div class="s6-page relative z-10">

        {{-- Top bar --}}
        <div class="s6-stagger-1" style="display: flex; align-items: center; justify-content: space-between;">
            <img src="/cos-systems-logo.svg" alt="COS Systems" style="width: 56px; height: 56px;" />
            <div style="display: flex; align-items: center; gap: 12px; padding: 8px 16px; border-radius: 9999px; border: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 8px #11C18F;" class="animate-pulse"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.3em; color: rgba(255,255,255,0.4); font-size: 10px; font-weight: 500;">Live</span>
            </div>
        </div>

        {{-- Headline --}}
        <div class="s6-stagger-2">
            <h1 class="s6-headline">
                <span style="color: rgba(255,255,255,0.9);">Look Around </span><span class="s6-gradient-text">This Room</span>
            </h1>
        </div>

        {{-- People grid --}}
        <div class="s6-people">

            {{-- Dustin --}}
            <div class="s6-stagger-3">
                <div class="s6-person group">
                    <div class="s6-person-glow s6-glow-green"></div>
                    <div style="position: relative; z-index: 1; padding: 26px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
                            <div class="s6-avatar s6-avatar-green">D</div>
                            <span class="s6-name">Dustin</span>
                        </div>
                        <div class="s6-superpower" style="color: #11C18F;">Built from zero</div>
                        <p class="s6-desc">Former Marine. Knows exactly what it costs to start something from nothing.</p>
                    </div>
                </div>
            </div>

            {{-- Saks --}}
            <div class="s6-stagger-4">
                <div class="s6-person group">
                    <div class="s6-person-glow s6-glow-teal"></div>
                    <div style="position: relative; z-index: 1; padding: 26px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
                            <div class="s6-avatar s6-avatar-teal">S</div>
                            <span class="s6-name">Saks</span>
                        </div>
                        <div class="s6-superpower" style="color: #48AAA5;">Enterprise muscle</div>
                        <p class="s6-desc">18 years inside AT&T &amp; Tech Mahindra. Structure, process, and scale at 100k+ employees.</p>
                    </div>
                </div>
            </div>

            {{-- Zack --}}
            <div class="s6-stagger-5">
                <div class="s6-person group">
                    <div class="s6-person-glow s6-glow-green"></div>
                    <div style="position: relative; z-index: 1; padding: 26px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
                            <div class="s6-avatar s6-avatar-green">Z</div>
                            <span class="s6-name">Zack</span>
                        </div>
                        <div class="s6-superpower" style="color: #11C18F;">ISP in his blood</div>
                        <p class="s6-desc">Every layer, every size. From boots on the ground to shifting boardroom dynamics.</p>
                    </div>
                </div>
            </div>

            {{-- Nick --}}
            <div class="s6-stagger-6">
                <div class="s6-person group">
                    <div class="s6-person-glow s6-glow-teal"></div>
                    <div style="position: relative; z-index: 1; padding: 26px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
                            <div class="s6-avatar s6-avatar-teal">N</div>
                            <span class="s6-name">Nick</span>
                        </div>
                        <div class="s6-superpower" style="color: #48AAA5;">Thrives in chaos</div>
                        <p class="s6-desc">Different stacks, different stakes, different leadership. Adapts and delivers regardless.</p>
                    </div>
                </div>
            </div>

            {{-- Rogers --}}
            <div class="s6-stagger-7">
                <div class="s6-person group">
                    <div class="s6-person-glow s6-glow-green"></div>
                    <div style="position: relative; z-index: 1; padding: 26px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
                            <div class="s6-avatar s6-avatar-green">R</div>
                            <span class="s6-name">Rogers</span>
                        </div>
                        <div class="s6-superpower" style="color: #11C18F;">Global lens</div>
                        <p class="s6-desc">Built across continents. A cultural perspective no one else in this room carries.</p>
                    </div>
                </div>
            </div>

        </div>

        {{-- Bottom kicker --}}
        <div class="s6-stagger-8">
            <div class="s6-kicker">
                <div style="width: 60px; height: 1px; background: linear-gradient(to right, transparent, rgba(17,193,143,0.4));"></div>
                <p class="s6-kicker-text">
                    COS is full of people like this — we just haven't figured out how to <span style="color: #11C18F; font-weight: 900;">unlock and leverage</span> it yet.
                </p>
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
    .s6-page {
        display: grid;
        grid-template-rows: auto auto auto auto;
        min-height: 100vh;
        padding: 32px 80px 80px;
        gap: 24px;
        align-content: center;
        max-width: 1280px;
        margin: 0 auto;
    }

    /* Headline */
    .s6-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(2.5rem, 5vw, 4.5rem);
        letter-spacing: -0.03em;
        line-height: 1;
    }

    .s6-gradient-text {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 40%, #11C18F 70%, #AFEFCD 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: s6-shimmer 6s ease-in-out infinite;
    }

    @keyframes s6-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    /* People grid — 6-col for 3+2 centering */
    .s6-people {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 14px;
        align-self: center;
    }

    /* Top row: 3 cards spanning 2 cols each */
    .s6-people > :nth-child(1) { grid-column: 1 / 3; }
    .s6-people > :nth-child(2) { grid-column: 3 / 5; }
    .s6-people > :nth-child(3) { grid-column: 5 / 7; }

    /* Bottom row: 2 cards centered */
    .s6-people > :nth-child(4) { grid-column: 2 / 4; }
    .s6-people > :nth-child(5) { grid-column: 4 / 6; }

    /* Person card */
    .s6-person {
        position: relative;
        background: rgba(255,255,255,0.015);
        border: 1px solid rgba(255,255,255,0.04);
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.6s cubic-bezier(0.22, 1, 0.36, 1);
        height: 100%;
    }

    .s6-person:hover {
        border-color: rgba(255,255,255,0.08);
        background: rgba(255,255,255,0.025);
        transform: translateY(-2px);
    }

    .s6-person-glow {
        position: absolute;
        top: -20px;
        right: -20px;
        width: 120px;
        height: 120px;
        border-radius: 50%;
        filter: blur(50px);
        opacity: 0;
        transition: opacity 0.7s ease;
    }

    .s6-glow-green { background: rgba(17,193,143,0.15); }
    .s6-glow-teal { background: rgba(72,170,165,0.15); }

    .s6-person:hover .s6-person-glow { opacity: 1; }

    /* Avatar */
    .s6-avatar {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 1rem;
        flex-shrink: 0;
        transition: all 0.5s ease;
    }

    .s6-avatar-green {
        background: rgba(17,193,143,0.1);
        border: 1px solid rgba(17,193,143,0.15);
        color: #11C18F;
    }

    .s6-avatar-teal {
        background: rgba(12,117,119,0.12);
        border: 1px solid rgba(72,170,165,0.15);
        color: #48AAA5;
    }

    .s6-person:hover .s6-avatar-green {
        border-color: rgba(17,193,143,0.35);
        box-shadow: 0 0 20px -4px rgba(17,193,143,0.2);
    }

    .s6-person:hover .s6-avatar-teal {
        border-color: rgba(72,170,165,0.35);
        box-shadow: 0 0 20px -4px rgba(72,170,165,0.2);
    }

    .s6-name {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 1.05rem;
        color: rgba(255,255,255,0.7);
        letter-spacing: -0.01em;
    }

    /* The superpower — dominant visual element */
    .s6-superpower {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 1.6rem;
        letter-spacing: -0.03em;
        line-height: 1.1;
        margin-bottom: 8px;
    }

    .s6-desc {
        color: rgba(255,255,255,0.3);
        font-size: 0.82rem;
        line-height: 1.6;
    }

    /* Kicker */
    .s6-kicker {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
    }

    .s6-kicker-text {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 1.1rem;
        color: rgba(255,255,255,0.55);
        text-align: center;
        letter-spacing: -0.01em;
        max-width: 700px;
        line-height: 1.5;
    }

    /* Aurora */
    .s6-aurora {
        position: absolute;
        border-radius: 50%;
        filter: blur(120px);
        will-change: transform;
    }
    .s6-aurora-1 {
        width: 500px; height: 500px;
        background: radial-gradient(circle, rgba(17,193,143,0.09) 0%, transparent 70%);
        top: -10%; left: -5%;
        animation: s6-drift-1 14s ease-in-out infinite;
    }
    .s6-aurora-2 {
        width: 450px; height: 450px;
        background: radial-gradient(circle, rgba(12,117,119,0.07) 0%, transparent 70%);
        bottom: -15%; right: -8%;
        animation: s6-drift-2 16s ease-in-out infinite;
    }

    @keyframes s6-drift-1 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(30px, 20px) scale(1.1); }
    }
    @keyframes s6-drift-2 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(-40px, -20px) scale(1.08); }
    }

    /* Staggered entrances */
    @keyframes s6-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes s6-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .s6-stagger-1 { opacity: 0; animation: s6-reveal-down 0.8s ease-out 0.1s forwards; }
    .s6-stagger-2 { opacity: 0; animation: s6-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.25s forwards; }
    .s6-stagger-3 { opacity: 0; animation: s6-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .s6-stagger-4 { opacity: 0; animation: s6-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.65s forwards; }
    .s6-stagger-5 { opacity: 0; animation: s6-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.8s forwards; }
    .s6-stagger-6 { opacity: 0; animation: s6-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.95s forwards; }
    .s6-stagger-7 { opacity: 0; animation: s6-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.1s forwards; }
    .s6-stagger-8 { opacity: 0; animation: s6-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.5s forwards; }
</style>
