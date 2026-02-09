<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        {{-- Chaotic multi-glow — three overlapping radials for tension --}}
        <div class="pl09-glow pl09-glow-1"></div>
        <div class="pl09-glow pl09-glow-2"></div>
        <div class="pl09-glow pl09-glow-3"></div>

        {{-- Dot grid --}}
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>

        {{-- Noise --}}
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>

        {{-- Vignette --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 85%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 56px 72px;">

        {{-- Top bar --}}
        <div class="pl09-stagger-1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Product Landscape</span>
        </div>

        {{-- Heading --}}
        <div class="pl09-stagger-2" style="margin-top: 32px; margin-bottom: 12px;">
            <div class="inline-flex items-center gap-3 mb-4">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #E86E4B; box-shadow: 0 0 12px rgba(232,110,75,0.4);"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(232,110,75,0.7); font-weight: 600; font-family: 'Sora', sans-serif;">Controlled Chaos</span>
            </div>
        </div>

        <div class="pl09-stagger-3" style="margin-bottom: 40px;">
            <h1 class="pl09-headline">Against All Odds</h1>
        </div>

        {{-- Parallel timeline tracks --}}
        <div class="pl09-stagger-4 flex-1 flex flex-col justify-center" style="max-width: 1200px; width: 100%;">

            {{-- SVG track lines --}}
            <svg class="pl09-tracks-svg" viewBox="0 0 1200 260" preserveAspectRatio="none" style="width: 100%; height: 260px;">
                {{-- Track background lines --}}
                <line x1="180" y1="50" x2="1140" y2="50" stroke="rgba(255,255,255,0.04)" stroke-width="2"/>
                <line x1="180" y1="130" x2="1140" y2="130" stroke="rgba(255,255,255,0.04)" stroke-width="2"/>
                <line x1="180" y1="210" x2="1140" y2="210" stroke="rgba(255,255,255,0.04)" stroke-width="2"/>

                {{-- Animated draw lines --}}
                <line x1="180" y1="50" x2="1140" y2="50" class="pl09-track-line pl09-track-line-1" stroke="#11C18F" stroke-width="2"/>
                <line x1="180" y1="130" x2="1140" y2="130" class="pl09-track-line pl09-track-line-2" stroke="#E86E4B" stroke-width="2"/>
                <line x1="180" y1="210" x2="1140" y2="210" class="pl09-track-line pl09-track-line-3" stroke="#48AAA5" stroke-width="2"/>
            </svg>

            {{-- Track labels and events (positioned over SVG) --}}
            <div class="pl09-tracks-container">

                {{-- Track 1: ISP / BE --}}
                <div class="pl09-track" style="top: 0;">
                    <div class="pl09-track-label pl09-evt-1">
                        <span class="pl09-label-badge" style="background: rgba(72,170,165,0.12); border-color: rgba(72,170,165,0.25); color: #48AAA5;">BE</span>
                    </div>
                    <div class="pl09-events">
                        <div class="pl09-event pl09-evt-2" style="left: 8%;">
                            <div class="pl09-dot" style="background: #48AAA5; box-shadow: 0 0 10px rgba(72,170,165,0.5);"></div>
                            <span class="pl09-event-text">ISPs start signing</span>
                        </div>
                        <div class="pl09-event pl09-evt-3" style="left: 38%;">
                            <div class="pl09-dot" style="background: #48AAA5; box-shadow: 0 0 10px rgba(72,170,165,0.5);"></div>
                            <span class="pl09-event-text">No choice — put them on BE</span>
                        </div>
                        <div class="pl09-event pl09-evt-6" style="left: 68%;">
                            <div class="pl09-dot pl09-dot-warning" style="background: #EFD61B; box-shadow: 0 0 10px rgba(239,214,27,0.5);"></div>
                            <span class="pl09-event-text" style="color: rgba(239,214,27,0.7);">Sweden too busy with BE</span>
                        </div>
                    </div>
                </div>

                {{-- Track 2: FSM --}}
                <div class="pl09-track" style="top: 80px;">
                    <div class="pl09-track-label pl09-evt-1">
                        <span class="pl09-label-badge" style="background: rgba(17,193,143,0.12); border-color: rgba(17,193,143,0.25); color: #11C18F;">FSM</span>
                    </div>
                    <div class="pl09-events">
                        <div class="pl09-event pl09-evt-3" style="left: 8%;">
                            <div class="pl09-dot" style="background: #11C18F; box-shadow: 0 0 10px rgba(17,193,143,0.5);"></div>
                            <span class="pl09-event-text">Sajan manages Alberto + Rogers</span>
                        </div>
                        <div class="pl09-event pl09-evt-4" style="left: 38%;">
                            <div class="pl09-dot" style="background: #11C18F; box-shadow: 0 0 10px rgba(17,193,143,0.5);"></div>
                            <div class="pl09-terminal-block">
                                <span class="pl09-terminal-text">$ fsm-api --target ting</span>
                                <span class="pl09-terminal-ok">LAUNCHED. No UI.</span>
                            </div>
                        </div>
                        <div class="pl09-event pl09-evt-5" style="left: 58%;">
                            <div class="pl09-dot" style="background: #11C18F; box-shadow: 0 0 10px rgba(17,193,143,0.5);"></div>
                            <div class="pl09-terminal-block">
                                <span class="pl09-terminal-text">$ fsm-api --target att</span>
                                <span class="pl09-terminal-ok">LAUNCHED. No UI.</span>
                            </div>
                        </div>
                        <div class="pl09-event pl09-evt-7" style="left: 82%;">
                            <div class="pl09-dot" style="background: #E86E4B; box-shadow: 0 0 10px rgba(232,110,75,0.5);"></div>
                            <span class="pl09-event-text" style="color: rgba(232,110,75,0.7);">Alberto + Rogers build UI alone</span>
                        </div>
                    </div>
                </div>

                {{-- Track 3: WE --}}
                <div class="pl09-track" style="top: 160px;">
                    <div class="pl09-track-label pl09-evt-1">
                        <span class="pl09-label-badge" style="background: rgba(232,110,75,0.12); border-color: rgba(232,110,75,0.25); color: #E86E4B;">WE</span>
                    </div>
                    <div class="pl09-events">
                        <div class="pl09-event pl09-evt-4" style="left: 8%;">
                            <div class="pl09-dot pl09-dot-warning" style="background: #EFD61B; box-shadow: 0 0 10px rgba(239,214,27,0.5);"></div>
                            <span class="pl09-event-text" style="color: rgba(239,214,27,0.7);">WE neglected</span>
                        </div>
                        <div class="pl09-event pl09-evt-6" style="left: 35%;">
                            <div class="pl09-dot" style="background: #E86E4B; box-shadow: 0 0 10px rgba(232,110,75,0.5);"></div>
                            <span class="pl09-event-text">AT&T starts testing</span>
                        </div>
                        <div class="pl09-event pl09-evt-7" style="left: 60%;">
                            <div class="pl09-dot" style="background: #E86E4B; box-shadow: 0 0 10px rgba(232,110,75,0.5);"></div>
                            <div class="pl09-cave-block">
                                <span class="pl09-cave-text">Sajan enters the cave</span>
                                <span class="pl09-cave-sub">Builds WE from scratch</span>
                            </div>
                        </div>
                        <div class="pl09-event pl09-evt-8" style="left: 88%;">
                            <div class="pl09-dot" style="background: #E86E4B; box-shadow: 0 0 10px rgba(232,110,75,0.5);"></div>
                            <span class="pl09-event-text pl09-noai">#NoAI</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- Bottom note --}}
        <div class="pl09-stagger-5" style="margin-top: 24px;">
            <div class="flex items-center gap-4">
                <div style="width: 40px; height: 1px; background: linear-gradient(to right, transparent, rgba(232,110,75,0.25));"></div>
                <p style="font-family: 'Sora', sans-serif; font-size: 0.85rem; color: rgba(255,255,255,0.3); line-height: 1.6;">
                    Everything was happening simultaneously. Under extreme pressure.
                </p>
            </div>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
    .pl09-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: clamp(2.5rem, 5vw, 3.8rem);
        letter-spacing: -0.03em;
        line-height: 1.08;
        color: rgba(255,255,255,0.9);
    }

    /* Background glows — chaotic overlapping */
    .pl09-glow {
        position: absolute; border-radius: 50%; filter: blur(100px); will-change: transform;
    }
    .pl09-glow-1 {
        width: 500px; height: 500px;
        background: radial-gradient(circle, rgba(17,193,143,0.05) 0%, transparent 70%);
        top: -10%; left: 5%;
        animation: pl09-drift-1 12s ease-in-out infinite;
    }
    .pl09-glow-2 {
        width: 400px; height: 400px;
        background: radial-gradient(circle, rgba(232,110,75,0.04) 0%, transparent 70%);
        top: 30%; right: 5%;
        animation: pl09-drift-2 16s ease-in-out infinite;
    }
    .pl09-glow-3 {
        width: 350px; height: 350px;
        background: radial-gradient(circle, rgba(239,214,27,0.03) 0%, transparent 70%);
        bottom: 5%; left: 30%;
        animation: pl09-drift-3 14s ease-in-out infinite;
    }
    @keyframes pl09-drift-1 {
        0%, 100% { transform: translate(0,0) scale(1); }
        50% { transform: translate(20px, 15px) scale(1.1); }
    }
    @keyframes pl09-drift-2 {
        0%, 100% { transform: translate(0,0) scale(1); }
        50% { transform: translate(-25px, 20px) scale(1.08); }
    }
    @keyframes pl09-drift-3 {
        0%, 100% { transform: translate(0,0) scale(1); }
        50% { transform: translate(15px, -20px) scale(1.05); }
    }

    /* Track lines animated */
    .pl09-track-line {
        stroke-opacity: 0.3;
        stroke-dasharray: 960;
        stroke-dashoffset: 960;
    }
    .pl09-track-line-1 { animation: pl09-draw 1.8s cubic-bezier(0.22,1,0.36,1) 0.8s forwards; }
    .pl09-track-line-2 { animation: pl09-draw 1.8s cubic-bezier(0.22,1,0.36,1) 1.0s forwards; }
    .pl09-track-line-3 { animation: pl09-draw 1.8s cubic-bezier(0.22,1,0.36,1) 1.2s forwards; }
    @keyframes pl09-draw { to { stroke-dashoffset: 0; } }

    /* Tracks container */
    .pl09-tracks-container {
        position: relative;
        height: 260px;
        margin-top: -260px;
    }

    .pl09-track {
        position: absolute;
        left: 0; right: 0;
        height: 80px;
        display: flex;
        align-items: flex-start;
    }

    .pl09-track-label {
        position: absolute;
        left: 0;
        top: -6px;
        width: 140px;
        z-index: 2;
    }

    .pl09-label-badge {
        display: inline-flex;
        align-items: center;
        padding: 4px 14px;
        border-radius: 6px;
        border: 1px solid;
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 0.9rem;
        letter-spacing: 0.05em;
    }

    /* Events */
    .pl09-events {
        position: absolute;
        left: 180px;
        right: 60px;
        top: 0;
        height: 100%;
    }

    .pl09-event {
        position: absolute;
        top: -8px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 6px;
    }

    .pl09-dot {
        width: 10px; height: 10px;
        border-radius: 50%;
        flex-shrink: 0;
    }

    .pl09-event-text {
        font-family: 'Sora', sans-serif;
        font-size: 0.72rem;
        color: rgba(255,255,255,0.5);
        white-space: nowrap;
        line-height: 1.4;
    }

    /* Terminal-style blocks */
    .pl09-terminal-block {
        display: flex;
        flex-direction: column;
        padding: 6px 10px;
        border-radius: 4px;
        background: rgba(17,193,143,0.05);
        border: 1px solid rgba(17,193,143,0.12);
    }
    .pl09-terminal-text {
        font-family: 'JetBrains Mono', monospace;
        font-size: 0.65rem;
        color: rgba(255,255,255,0.35);
        white-space: nowrap;
    }
    .pl09-terminal-ok {
        font-family: 'JetBrains Mono', monospace;
        font-size: 0.65rem;
        color: rgba(17,193,143,0.8);
        font-weight: 500;
        white-space: nowrap;
    }

    /* Cave block */
    .pl09-cave-block {
        display: flex;
        flex-direction: column;
        padding: 6px 10px;
        border-radius: 4px;
        background: rgba(232,110,75,0.05);
        border: 1px solid rgba(232,110,75,0.15);
    }
    .pl09-cave-text {
        font-family: 'Sora', sans-serif;
        font-size: 0.72rem;
        font-weight: 600;
        color: rgba(232,110,75,0.8);
        white-space: nowrap;
    }
    .pl09-cave-sub {
        font-family: 'Sora', sans-serif;
        font-size: 0.65rem;
        color: rgba(232,110,75,0.5);
        white-space: nowrap;
    }

    /* #NoAI hashtag */
    .pl09-noai {
        font-family: 'JetBrains Mono', monospace;
        font-size: 0.7rem;
        color: rgba(255,255,255,0.2) !important;
        font-style: italic;
    }

    /* Reveal animations */
    @keyframes pl09-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes pl09-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .pl09-stagger-1 { opacity: 0; animation: pl09-reveal-down 0.8s ease-out 0.1s forwards; }
    .pl09-stagger-2 { opacity: 0; animation: pl09-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 0.3s forwards; }
    .pl09-stagger-3 { opacity: 0; animation: pl09-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 0.5s forwards; }
    .pl09-stagger-4 { opacity: 0; animation: pl09-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 0.8s forwards; }
    .pl09-stagger-5 { opacity: 0; animation: pl09-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 3.2s forwards; }

    /* Event staggered reveals */
    .pl09-evt-1 { opacity: 0; animation: pl09-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 1.2s forwards; }
    .pl09-evt-2 { opacity: 0; animation: pl09-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 1.5s forwards; }
    .pl09-evt-3 { opacity: 0; animation: pl09-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 1.8s forwards; }
    .pl09-evt-4 { opacity: 0; animation: pl09-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 2.1s forwards; }
    .pl09-evt-5 { opacity: 0; animation: pl09-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 2.4s forwards; }
    .pl09-evt-6 { opacity: 0; animation: pl09-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 2.7s forwards; }
    .pl09-evt-7 { opacity: 0; animation: pl09-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 3.0s forwards; }
    .pl09-evt-8 { opacity: 0; animation: pl09-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 3.3s forwards; }

    /* Dot pulse for warning states */
    .pl09-dot-warning {
        animation: pl09-warn-pulse 2s ease-in-out infinite;
    }
    @keyframes pl09-warn-pulse {
        0%, 100% { box-shadow: 0 0 10px rgba(239,214,27,0.3); }
        50% { box-shadow: 0 0 20px rgba(239,214,27,0.6); }
    }
</style>
