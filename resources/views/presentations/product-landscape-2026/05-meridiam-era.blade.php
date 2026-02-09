<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        {{-- Green glow top-right for growth feel --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 70% 30%, rgba(17,193,143,0.05) 0%, transparent 55%);"></div>
        {{-- Secondary glow bottom-left --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 20% 80%, rgba(17,193,143,0.03) 0%, transparent 50%);"></div>
        {{-- Dot grid --}}
        <div class="absolute inset-0 opacity-[0.025]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>
        {{-- Noise --}}
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        {{-- Vignette --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 85%);"></div>
    </div>

    {{-- Network diagram SVG --}}
    <svg id="pl05-network" class="absolute inset-0 w-full h-full pointer-events-none z-[2]" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1920 1080"></svg>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 56px 72px;">

        {{-- Top bar --}}
        <div class="pl05-stagger-1 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="pl05-be-badge">
                    <div class="pl05-be-fill"></div>
                    <span class="pl05-be-text">100% Business Engine</span>
                </div>
            </div>
            <div class="flex items-center gap-3 px-4 py-2 rounded-full" style="border: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
                <div class="w-2 h-2 rounded-full animate-pulse" style="background: #11C18F; box-shadow: 0 0 8px #11C18F;"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.3em; color: rgba(255,255,255,0.4); font-size: 10px; font-weight: 500;">Growth Phase</span>
            </div>
        </div>

        {{-- Main content --}}
        <div class="flex-1 flex flex-col justify-center" style="max-width: 1280px; margin: 0 auto; width: 100%;">

            {{-- Heading --}}
            <div class="pl05-stagger-2" style="margin-bottom: 56px;">
                <div style="display: inline-flex; align-items: center; gap: 10px; margin-bottom: 16px;">
                    <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 12px rgba(17,193,143,0.4);"></div>
                    <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(17,193,143,0.7); font-weight: 600; font-family: 'Sora', sans-serif;">Expansion</span>
                </div>
                <h1 class="pl05-headline">
                    The <span class="pl05-gradient-text">Meridiam</span> Era
                </h1>
                <p style="font-family: 'Sora', sans-serif; font-size: 1.05rem; color: rgba(255,255,255,0.35); max-width: 520px; line-height: 1.7; margin-top: 16px;">
                    COS signs with Meridiam through Fujitsu. The product landscape is 100% Business Engine. Growth accelerates.
                </p>
            </div>

            {{-- Network diagram nodes --}}
            <div class="pl05-network-visual">

                {{-- Central node: Meridiam --}}
                <div class="pl05-stagger-3 pl05-node pl05-node-center" id="pl05-meridiam">
                    <div class="pl05-node-inner pl05-node-primary">
                        <div class="pl05-node-icon">
                            <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" style="color: #11C18F;">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21" />
                            </svg>
                        </div>
                        <div class="pl05-node-label">Meridiam</div>
                        <div class="pl05-node-sub">via Fujitsu</div>
                    </div>
                </div>

                {{-- SVG connector lines (drawn via JS) --}}
                <svg class="pl05-connectors" viewBox="0 0 1000 300" preserveAspectRatio="xMidYMid meet">
                    <path id="pl05-line-anet" class="pl05-connector" d="M 280 150 C 380 150, 420 60, 520 60" fill="none" stroke="rgba(17,193,143,0.3)" stroke-width="2" />
                    <path id="pl05-line-hnet" class="pl05-connector" d="M 280 150 C 380 150, 420 240, 520 240" fill="none" stroke="rgba(17,193,143,0.3)" stroke-width="2" />
                    {{-- Glow duplicates --}}
                    <path class="pl05-connector-glow" d="M 280 150 C 380 150, 420 60, 520 60" fill="none" stroke="rgba(17,193,143,0.08)" stroke-width="12" />
                    <path class="pl05-connector-glow" d="M 280 150 C 380 150, 420 240, 520 240" fill="none" stroke="rgba(17,193,143,0.08)" stroke-width="12" />
                    {{-- Animated particles along paths --}}
                    <circle r="3" fill="#11C18F" opacity="0.8">
                        <animateMotion dur="3s" repeatCount="indefinite" path="M 280 150 C 380 150, 420 60, 520 60" />
                    </circle>
                    <circle r="3" fill="#11C18F" opacity="0.8">
                        <animateMotion dur="3.5s" repeatCount="indefinite" path="M 280 150 C 380 150, 420 240, 520 240" />
                    </circle>
                </svg>

                {{-- ANet node --}}
                <div class="pl05-stagger-4 pl05-node pl05-node-top-right" id="pl05-anet">
                    <div class="pl05-node-inner pl05-node-secondary">
                        <div class="pl05-node-icon">
                            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" style="color: #11C18F;">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                            </svg>
                        </div>
                        <div class="pl05-node-label">ANet</div>
                        <div class="pl05-node-location">
                            <svg width="10" height="10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: rgba(17,193,143,0.6);">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                            Canada
                        </div>
                        <div class="pl05-node-tag">First real test with PON</div>
                    </div>
                </div>

                {{-- HNet node --}}
                <div class="pl05-stagger-5 pl05-node pl05-node-bottom-right" id="pl05-hnet">
                    <div class="pl05-node-inner pl05-node-secondary">
                        <div class="pl05-node-icon">
                            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" style="color: #11C18F;">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.288 15.038a5.25 5.25 0 017.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 011.06 0z" />
                            </svg>
                        </div>
                        <div class="pl05-node-label">HNet</div>
                        <div class="pl05-node-location">
                            <svg width="10" height="10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: rgba(17,193,143,0.6);">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                            Indiana
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- Bottom --}}
        <div class="pl05-stagger-6 flex items-center justify-center">
            <div class="flex items-center gap-4">
                <div style="width: 60px; height: 1px; background: linear-gradient(to right, transparent, rgba(17,193,143,0.3));"></div>
                <span style="font-family: 'Sora', sans-serif; font-size: 0.85rem; color: rgba(255,255,255,0.3);">
                    COS is growing. Momentum is <span style="color: #11C18F; font-weight: 600;">building.</span>
                </span>
                <div style="width: 60px; height: 1px; background: linear-gradient(to left, transparent, rgba(17,193,143,0.3));"></div>
            </div>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    /* Headline */
    .pl05-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: clamp(2.8rem, 5.5vw, 4.5rem);
        letter-spacing: -0.03em;
        line-height: 1.05;
        color: rgba(255,255,255,0.9);
    }

    .pl05-gradient-text {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 40%, #AFEFCD 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: pl05-shimmer 5s ease-in-out infinite;
    }

    @keyframes pl05-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    /* 100% BE Badge */
    .pl05-be-badge {
        position: relative;
        overflow: hidden;
        padding: 8px 20px;
        border-radius: 8px;
        background: rgba(17,193,143,0.06);
        border: 1px solid rgba(17,193,143,0.15);
    }

    .pl05-be-fill {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 0%;
        background: linear-gradient(90deg, rgba(17,193,143,0.15), rgba(17,193,143,0.08));
        animation: pl05-fill-bar 1.5s cubic-bezier(0.22, 1, 0.36, 1) 0.8s forwards;
    }

    @keyframes pl05-fill-bar {
        to { width: 100%; }
    }

    .pl05-be-text {
        position: relative;
        z-index: 1;
        font-family: 'Sora', sans-serif;
        font-weight: 600;
        font-size: 12px;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: #11C18F;
    }

    /* Network visual layout */
    .pl05-network-visual {
        position: relative;
        width: 100%;
        max-width: 900px;
        height: 280px;
    }

    .pl05-connectors {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .pl05-connector {
        stroke-dasharray: 400;
        stroke-dashoffset: 400;
        animation: pl05-draw-line 1.2s cubic-bezier(0.22, 1, 0.36, 1) 1.2s forwards;
    }

    .pl05-connector-glow {
        stroke-dasharray: 400;
        stroke-dashoffset: 400;
        animation: pl05-draw-line 1.5s cubic-bezier(0.22, 1, 0.36, 1) 1.4s forwards;
    }

    @keyframes pl05-draw-line {
        to { stroke-dashoffset: 0; }
    }

    /* Nodes */
    .pl05-node {
        position: absolute;
        z-index: 2;
    }

    .pl05-node-center {
        left: 10%;
        top: 50%;
        transform: translateY(-50%);
    }

    .pl05-node-top-right {
        left: 55%;
        top: 5%;
    }

    .pl05-node-bottom-right {
        left: 55%;
        bottom: 5%;
    }

    .pl05-node-inner {
        padding: 20px 28px;
        border-radius: 16px;
        backdrop-filter: blur(12px);
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .pl05-node-inner:hover {
        transform: translateY(-2px);
    }

    .pl05-node-primary {
        background: rgba(17,193,143,0.06);
        border: 1px solid rgba(17,193,143,0.15);
        box-shadow: 0 0 40px rgba(17,193,143,0.05);
    }

    .pl05-node-primary:hover {
        border-color: rgba(17,193,143,0.3);
        box-shadow: 0 0 60px rgba(17,193,143,0.1);
    }

    .pl05-node-secondary {
        background: rgba(255,255,255,0.02);
        border: 1px solid rgba(255,255,255,0.06);
    }

    .pl05-node-secondary:hover {
        border-color: rgba(17,193,143,0.15);
        background: rgba(17,193,143,0.03);
    }

    .pl05-node-icon {
        margin-bottom: 8px;
    }

    .pl05-node-label {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 1.25rem;
        color: rgba(255,255,255,0.9);
        letter-spacing: -0.01em;
    }

    .pl05-node-sub {
        font-family: 'Sora', sans-serif;
        font-size: 0.8rem;
        color: rgba(255,255,255,0.35);
        margin-top: 2px;
    }

    .pl05-node-location {
        display: flex;
        align-items: center;
        gap: 5px;
        font-family: 'Sora', sans-serif;
        font-size: 0.75rem;
        color: rgba(17,193,143,0.6);
        margin-top: 4px;
        font-weight: 500;
    }

    .pl05-node-tag {
        margin-top: 10px;
        display: inline-block;
        padding: 4px 10px;
        border-radius: 6px;
        background: rgba(17,193,143,0.08);
        border: 1px solid rgba(17,193,143,0.12);
        font-family: 'Sora', sans-serif;
        font-size: 0.7rem;
        color: rgba(17,193,143,0.8);
        font-weight: 500;
    }

    /* Reveal animations */
    @keyframes pl05-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes pl05-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .pl05-stagger-1 { opacity: 0; animation: pl05-reveal-down 0.8s ease-out 0.1s forwards; }
    .pl05-stagger-2 { opacity: 0; animation: pl05-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .pl05-stagger-3 { opacity: 0; animation: pl05-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.6s forwards; }
    .pl05-stagger-4 { opacity: 0; animation: pl05-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.0s forwards; }
    .pl05-stagger-5 { opacity: 0; animation: pl05-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.2s forwards; }
    .pl05-stagger-6 { opacity: 0; animation: pl05-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.6s forwards; }
</style>
