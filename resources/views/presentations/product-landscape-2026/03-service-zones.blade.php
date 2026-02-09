<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="pl03-aurora pl03-aurora-1"></div>
        <div class="pl03-aurora pl03-aurora-2"></div>
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: radial-gradient(rgba(17,193,143,0.3) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 85%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 56px 72px;">

        {{-- Top bar --}}
        <div class="pl03-stagger-1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Product Landscape</span>
        </div>

        {{-- Main --}}
        <div class="flex-1 flex flex-col justify-center" style="max-width: 1200px; margin: 0 auto; width: 100%;">

            {{-- Heading --}}
            <div class="pl03-stagger-2" style="margin-bottom: 12px;">
                <div class="inline-flex items-center gap-3 mb-5">
                    <div style="width: 8px; height: 8px; border-radius: 50%; background: #E86E4B; box-shadow: 0 0 10px rgba(232,110,75,0.4);"></div>
                    <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(232,110,75,0.7); font-weight: 600; font-family: 'Sora', sans-serif;">The Detour</span>
                </div>
            </div>

            <div class="pl03-stagger-3" style="margin-bottom: 48px;">
                <h1 class="pl03-headline">Service Zones</h1>
                <p style="font-family: 'Sora', sans-serif; font-size: 1.05rem; color: rgba(255,255,255,0.35); line-height: 1.7; margin-top: 16px; max-width: 560px;">
                    A door-opener for BE customers. Launched. Struggled. Merged.
                </p>
            </div>

            {{-- Two-column layout: Chart + Narrative --}}
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center;">

                {{-- Left: Donut Chart --}}
                <div class="pl03-stagger-4">
                    <div class="pl03-chart-container">
                        <svg class="pl03-donut" viewBox="0 0 200 200">
                            {{-- Background ring --}}
                            <circle cx="100" cy="100" r="70" fill="none" stroke="rgba(255,255,255,0.03)" stroke-width="28" />
                            {{-- 75% Service Zones (coral) --}}
                            <circle cx="100" cy="100" r="70" fill="none"
                                stroke="#E86E4B"
                                stroke-width="28"
                                stroke-dasharray="330 440"
                                stroke-dashoffset="0"
                                stroke-linecap="butt"
                                transform="rotate(-90 100 100)"
                                class="pl03-arc-sz"
                                style="filter: drop-shadow(0 0 8px rgba(232,110,75,0.3));" />
                            {{-- 25% Business Engine (green) --}}
                            <circle cx="100" cy="100" r="70" fill="none"
                                stroke="#11C18F"
                                stroke-width="28"
                                stroke-dasharray="110 440"
                                stroke-dashoffset="-330"
                                stroke-linecap="butt"
                                transform="rotate(-90 100 100)"
                                class="pl03-arc-be"
                                style="filter: drop-shadow(0 0 8px rgba(17,193,143,0.3));" />
                        </svg>

                        {{-- Center label --}}
                        <div class="pl03-chart-center">
                            <span class="pl03-chart-pct">75%</span>
                            <span class="pl03-chart-label">of effort</span>
                        </div>
                    </div>

                    {{-- Legend --}}
                    <div class="pl03-legend">
                        <div class="pl03-legend-item">
                            <div style="width: 10px; height: 10px; border-radius: 3px; background: #E86E4B; box-shadow: 0 0 6px rgba(232,110,75,0.3);"></div>
                            <span style="font-family: 'Sora', sans-serif; font-size: 0.85rem; color: rgba(255,255,255,0.5);">Service Zones <span style="color: rgba(232,110,75,0.7); font-weight: 600;">75%</span></span>
                        </div>
                        <div class="pl03-legend-item">
                            <div style="width: 10px; height: 10px; border-radius: 3px; background: #11C18F; box-shadow: 0 0 6px rgba(17,193,143,0.3);"></div>
                            <span style="font-family: 'Sora', sans-serif; font-size: 0.85rem; color: rgba(255,255,255,0.5);">Business Engine <span style="color: rgba(17,193,143,0.7); font-weight: 600;">25%</span></span>
                        </div>
                    </div>
                </div>

                {{-- Right: Narrative --}}
                <div class="pl03-stagger-5">
                    <div class="pl03-narrative">
                        <div class="pl03-narr-step">
                            <div class="pl03-narr-num">01</div>
                            <div>
                                <div class="pl03-narr-title">Launched as a door-opener</div>
                                <div class="pl03-narr-body">Service Zones was designed to attract new customers to the Business Engine ecosystem.</div>
                            </div>
                        </div>
                        <div class="pl03-narr-step">
                            <div class="pl03-narr-num">02</div>
                            <div>
                                <div class="pl03-narr-title">Consumed the roadmap</div>
                                <div class="pl03-narr-body">Three quarters of engineering effort redirected. Business Engine development slowed to a crawl.</div>
                            </div>
                        </div>
                        <div class="pl03-narr-step">
                            <div class="pl03-narr-num">03</div>
                            <div>
                                <div class="pl03-narr-title">Little long-term value</div>
                                <div class="pl03-narr-body">As a standalone product, SZ never found its footing in the market.</div>
                            </div>
                        </div>
                        <div class="pl03-narr-step pl03-narr-final">
                            <div class="pl03-narr-num pl03-narr-num-green">04</div>
                            <div>
                                <div class="pl03-narr-title" style="color: rgba(255,255,255,0.5);">Discontinued & merged</div>
                                <div class="pl03-narr-body">Features folded back into Business Engine. The detour ended.</div>
                            </div>
                        </div>
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
    .pl03-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: clamp(2.5rem, 5vw, 4rem);
        letter-spacing: -0.03em;
        line-height: 1.05;
        color: rgba(255,255,255,0.9);
    }

    /* Donut chart */
    .pl03-chart-container {
        position: relative;
        width: 280px;
        height: 280px;
        margin: 0 auto 28px;
    }
    .pl03-donut {
        width: 100%;
        height: 100%;
    }
    .pl03-arc-sz {
        stroke-dasharray: 0 440;
        animation: pl03-fill-sz 1.5s cubic-bezier(0.22, 1, 0.36, 1) 1.2s forwards;
    }
    .pl03-arc-be {
        stroke-dasharray: 0 440;
        animation: pl03-fill-be 1.2s cubic-bezier(0.22, 1, 0.36, 1) 2.0s forwards;
    }
    @keyframes pl03-fill-sz {
        to { stroke-dasharray: 330 440; }
    }
    @keyframes pl03-fill-be {
        to { stroke-dasharray: 110 440; stroke-dashoffset: -330; }
    }

    .pl03-chart-center {
        position: absolute;
        top: 50%; left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        opacity: 0;
        animation: pl03-reveal 0.6s ease-out 2.5s forwards;
    }
    .pl03-chart-pct {
        display: block;
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 2.8rem;
        color: #E86E4B;
        line-height: 1;
        text-shadow: 0 0 30px rgba(232,110,75,0.3);
    }
    .pl03-chart-label {
        display: block;
        font-family: 'Sora', sans-serif;
        font-size: 0.75rem;
        color: rgba(255,255,255,0.3);
        text-transform: uppercase;
        letter-spacing: 0.15em;
        margin-top: 4px;
    }

    /* Legend */
    .pl03-legend {
        display: flex;
        justify-content: center;
        gap: 28px;
    }
    .pl03-legend-item {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    /* Narrative steps */
    .pl03-narrative {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .pl03-narr-step {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        padding: 16px 20px;
        border-radius: 12px;
        background: rgba(232,110,75,0.02);
        border: 1px solid rgba(232,110,75,0.05);
        transition: all 0.5s cubic-bezier(0.22,1,0.36,1);
    }
    .pl03-narr-step:hover {
        background: rgba(232,110,75,0.04);
        border-color: rgba(232,110,75,0.1);
        transform: translateX(4px);
    }
    .pl03-narr-final {
        background: rgba(17,193,143,0.02);
        border-color: rgba(17,193,143,0.06);
    }
    .pl03-narr-final:hover {
        background: rgba(17,193,143,0.04);
        border-color: rgba(17,193,143,0.1);
    }
    .pl03-narr-num {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 1.1rem;
        color: rgba(232,110,75,0.25);
        flex-shrink: 0;
        margin-top: 1px;
    }
    .pl03-narr-num-green {
        color: rgba(17,193,143,0.3);
    }
    .pl03-narr-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 0.95rem;
        color: rgba(255,255,255,0.8);
        margin-bottom: 4px;
    }
    .pl03-narr-body {
        font-family: 'Sora', sans-serif;
        font-size: 0.8rem;
        color: rgba(255,255,255,0.3);
        line-height: 1.55;
    }

    /* Aurora */
    .pl03-aurora {
        position: absolute; border-radius: 50%; filter: blur(120px); will-change: transform;
    }
    .pl03-aurora-1 {
        width: 450px; height: 450px;
        background: radial-gradient(circle, rgba(232,110,75,0.05) 0%, transparent 70%);
        top: -10%; left: 10%;
        animation: pl03-drift-1 16s ease-in-out infinite;
    }
    .pl03-aurora-2 {
        width: 400px; height: 400px;
        background: radial-gradient(circle, rgba(17,193,143,0.04) 0%, transparent 70%);
        bottom: -10%; right: 5%;
        animation: pl03-drift-2 20s ease-in-out infinite;
    }
    @keyframes pl03-drift-1 {
        0%, 100% { transform: translate(0,0) scale(1); }
        50% { transform: translate(30px, 20px) scale(1.08); }
    }
    @keyframes pl03-drift-2 {
        0%, 100% { transform: translate(0,0) scale(1); }
        50% { transform: translate(-25px, -15px) scale(1.05); }
    }

    /* Stagger */
    @keyframes pl03-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes pl03-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .pl03-stagger-1 { opacity: 0; animation: pl03-reveal-down 0.8s ease-out 0.1s forwards; }
    .pl03-stagger-2 { opacity: 0; animation: pl03-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 0.3s forwards; }
    .pl03-stagger-3 { opacity: 0; animation: pl03-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 0.5s forwards; }
    .pl03-stagger-4 { opacity: 0; animation: pl03-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 0.8s forwards; }
    .pl03-stagger-5 { opacity: 0; animation: pl03-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 1.0s forwards; }
</style>
