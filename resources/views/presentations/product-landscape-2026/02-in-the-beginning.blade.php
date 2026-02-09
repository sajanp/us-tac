<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        {{-- Origin glow — a single warm radiance from the left --}}
        <div class="pl02-origin-glow"></div>

        {{-- Subtle aurora --}}
        <div class="pl02-aurora pl02-aurora-1"></div>
        <div class="pl02-aurora pl02-aurora-2"></div>

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
        <div class="pl02-stagger-1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Product Landscape</span>
        </div>

        {{-- Main content --}}
        <div class="flex-1 flex flex-col justify-center" style="max-width: 1200px; margin: 0 auto; width: 100%;">

            {{-- Heading --}}
            <div class="pl02-stagger-2" style="margin-bottom: 16px;">
                <div class="inline-flex items-center gap-3 mb-6">
                    <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 12px rgba(17,193,143,0.4);"></div>
                    <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(17,193,143,0.7); font-weight: 600; font-family: 'Sora', sans-serif;">The Origin</span>
                </div>
            </div>

            <div class="pl02-stagger-3" style="margin-bottom: 56px;">
                <h1 class="pl02-headline">
                    In The Beginning,<br>There Was <span class="pl02-light-text">Light</span>
                </h1>
            </div>

            {{-- Timeline --}}
            <div class="pl02-stagger-4" style="position: relative; margin-bottom: 48px;">

                {{-- Connection line (SVG for animated drawing) --}}
                <svg class="pl02-timeline-svg" viewBox="0 0 1000 4" preserveAspectRatio="none">
                    <line x1="60" y1="2" x2="940" y2="2" class="pl02-line-bg" />
                    <line x1="60" y1="2" x2="940" y2="2" class="pl02-line-draw" />
                </svg>

                {{-- Waypoints --}}
                <div class="pl02-waypoints">

                    {{-- Waypoint 1: Umea --}}
                    <div class="pl02-waypoint pl02-wp-1">
                        <div class="pl02-node pl02-node-origin">
                            <div class="pl02-node-ring"></div>
                            <div class="pl02-node-core"></div>
                        </div>
                        <div class="pl02-wp-label">
                            <span class="pl02-wp-location">Umea, Sweden</span>
                            <span class="pl02-wp-year">~2010</span>
                        </div>
                        <p class="pl02-wp-desc">Rogers and Jorgen build Business Engine to address Swedish open access fiber markets.</p>
                    </div>

                    {{-- Waypoint 2: Africa --}}
                    <div class="pl02-waypoint pl02-wp-2">
                        <div class="pl02-node">
                            <div class="pl02-node-core"></div>
                        </div>
                        <div class="pl02-wp-label">
                            <span class="pl02-wp-location">Africa</span>
                            <span class="pl02-wp-year">Expansion</span>
                        </div>
                        <p class="pl02-wp-desc">Early international expansion brings the first customers outside Scandinavia.</p>
                    </div>

                    {{-- Waypoint 3: US --}}
                    <div class="pl02-waypoint pl02-wp-3">
                        <div class="pl02-node">
                            <div class="pl02-node-core"></div>
                        </div>
                        <div class="pl02-wp-label">
                            <span class="pl02-wp-location">United States</span>
                            <span class="pl02-wp-year">Expansion</span>
                        </div>
                        <p class="pl02-wp-desc">The North American market opens up. A handful of early US customers come aboard.</p>
                    </div>

                </div>
            </div>

            {{-- Bottom note --}}
            <div class="pl02-stagger-5">
                <div class="flex items-center gap-4">
                    <div style="width: 40px; height: 1px; background: linear-gradient(to right, transparent, rgba(17,193,143,0.25));"></div>
                    <p style="font-family: 'Sora', sans-serif; font-size: 0.85rem; color: rgba(255,255,255,0.3); line-height: 1.6;">
                        A single product, built in a small Swedish city, finding its way across the world.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    .pl02-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: clamp(2.5rem, 5.5vw, 4.2rem);
        letter-spacing: -0.03em;
        line-height: 1.08;
        color: rgba(255,255,255,0.9);
    }

    .pl02-light-text {
        background: linear-gradient(135deg, #11C18F 0%, #AFEFCD 50%, #11C18F 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: pl02-glow-shift 4s ease-in-out infinite;
        position: relative;
    }
    .pl02-light-text::after {
        content: 'Light';
        position: absolute;
        top: 0; left: 0;
        background: linear-gradient(135deg, #11C18F, #AFEFCD);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        filter: blur(25px);
        opacity: 0.5;
        z-index: -1;
    }

    @keyframes pl02-glow-shift {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    /* Origin radial glow */
    .pl02-origin-glow {
        position: absolute;
        width: 700px; height: 700px;
        left: -5%; top: 15%;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(17,193,143,0.06) 0%, rgba(17,193,143,0.02) 40%, transparent 70%);
        filter: blur(60px);
        animation: pl02-breathe 8s ease-in-out infinite;
    }
    @keyframes pl02-breathe {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.08); opacity: 0.7; }
    }

    /* Aurora */
    .pl02-aurora {
        position: absolute; border-radius: 50%; filter: blur(120px); will-change: transform;
    }
    .pl02-aurora-1 {
        width: 400px; height: 400px;
        background: radial-gradient(circle, rgba(17,193,143,0.06) 0%, transparent 70%);
        top: -10%; right: 10%;
        animation: pl02-drift-1 14s ease-in-out infinite;
    }
    .pl02-aurora-2 {
        width: 350px; height: 350px;
        background: radial-gradient(circle, rgba(72,170,165,0.04) 0%, transparent 70%);
        bottom: -5%; left: 30%;
        animation: pl02-drift-2 18s ease-in-out infinite;
    }
    @keyframes pl02-drift-1 {
        0%, 100% { transform: translate(0,0) scale(1); }
        50% { transform: translate(-30px, 25px) scale(1.1); }
    }
    @keyframes pl02-drift-2 {
        0%, 100% { transform: translate(0,0) scale(1); }
        50% { transform: translate(25px, -20px) scale(1.05); }
    }

    /* Timeline SVG */
    .pl02-timeline-svg {
        width: 100%;
        height: 4px;
        display: block;
        margin-bottom: 0;
    }
    .pl02-line-bg {
        stroke: rgba(255,255,255,0.04);
        stroke-width: 2;
    }
    .pl02-line-draw {
        stroke: url(#pl02-line-gradient);
        stroke: rgba(17,193,143,0.3);
        stroke-width: 2;
        stroke-dasharray: 880;
        stroke-dashoffset: 880;
        animation: pl02-draw-line 2s cubic-bezier(0.22, 1, 0.36, 1) 1.2s forwards;
    }
    @keyframes pl02-draw-line {
        to { stroke-dashoffset: 0; }
    }

    /* Waypoints container */
    .pl02-waypoints {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 40px;
        margin-top: 28px;
    }

    .pl02-waypoint {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    /* Node styling */
    .pl02-node {
        position: relative;
        width: 16px; height: 16px;
        margin-bottom: 16px;
    }
    .pl02-node-core {
        width: 10px; height: 10px;
        border-radius: 50%;
        background: #11C18F;
        box-shadow: 0 0 12px rgba(17,193,143,0.4);
        position: absolute;
        top: 3px; left: 3px;
    }
    .pl02-node-origin .pl02-node-core {
        width: 14px; height: 14px;
        top: 1px; left: 1px;
        box-shadow: 0 0 20px rgba(17,193,143,0.6), 0 0 40px rgba(17,193,143,0.2);
    }
    .pl02-node-ring {
        position: absolute;
        top: -6px; left: -6px;
        width: 28px; height: 28px;
        border-radius: 50%;
        border: 1px solid rgba(17,193,143,0.2);
        animation: pl02-pulse-ring 3s ease-in-out infinite;
    }
    @keyframes pl02-pulse-ring {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.4); opacity: 0; }
    }

    .pl02-wp-label {
        display: flex;
        align-items: baseline;
        gap: 10px;
        margin-bottom: 8px;
    }
    .pl02-wp-location {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 1.1rem;
        color: rgba(255,255,255,0.85);
    }
    .pl02-wp-year {
        font-family: 'Sora', sans-serif;
        font-size: 0.75rem;
        font-weight: 500;
        color: rgba(17,193,143,0.5);
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }
    .pl02-wp-desc {
        font-family: 'Sora', sans-serif;
        font-size: 0.85rem;
        color: rgba(255,255,255,0.35);
        line-height: 1.6;
        max-width: 280px;
    }

    /* Staggered waypoint reveals */
    .pl02-wp-1 { opacity: 0; animation: pl02-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 1.5s forwards; }
    .pl02-wp-2 { opacity: 0; animation: pl02-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 1.9s forwards; }
    .pl02-wp-3 { opacity: 0; animation: pl02-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 2.3s forwards; }

    /* Stagger system */
    @keyframes pl02-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes pl02-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .pl02-stagger-1 { opacity: 0; animation: pl02-reveal-down 0.8s ease-out 0.1s forwards; }
    .pl02-stagger-2 { opacity: 0; animation: pl02-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 0.3s forwards; }
    .pl02-stagger-3 { opacity: 0; animation: pl02-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 0.5s forwards; }
    .pl02-stagger-4 { opacity: 0; animation: pl02-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 0.9s forwards; }
    .pl02-stagger-5 { opacity: 0; animation: pl02-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 2.7s forwards; }
</style>
