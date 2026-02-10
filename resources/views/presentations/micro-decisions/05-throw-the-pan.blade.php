<div class="relative min-h-screen overflow-hidden bg-[#080c14]">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="md05-aurora md05-aurora-1"></div>
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 80%);"></div>
    </div>

    {{-- Animated arc path --}}
    <svg class="absolute inset-0 w-full h-full pointer-events-none" viewBox="0 0 1920 1080" preserveAspectRatio="none" style="opacity: 0.15;">
        <path id="md05-arc" d="M 400 680 Q 960 200 1520 680" fill="none" stroke="#11C18F" stroke-width="2" stroke-dasharray="8 6" class="md05-arc-draw" />
        <circle r="6" fill="#11C18F" class="md05-arc-dot">
            <animateMotion dur="2s" begin="1.5s" fill="freeze" keyTimes="0;1" keySplines="0.22 1 0.36 1" calcMode="spline">
                <mpath href="#md05-arc" />
            </animateMotion>
        </circle>
    </svg>

    {{-- Content --}}
    <div class="relative z-10 flex flex-col min-h-screen" style="padding: 32px 72px 48px;">

        {{-- Top bar --}}
        <div class="md05-s1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Micro Decisions</span>
        </div>

        {{-- Main content: split layout --}}
        <div class="flex-1 flex flex-col items-center justify-center">

            {{-- Big headline --}}
            <div class="md05-s2 mb-16">
                <h1 class="md05-headline text-center">
                    Throw <span class="md05-gradient-text">the Pan</span>
                </h1>
            </div>

            {{-- The paradox: two columns --}}
            <div class="md05-s3 flex items-stretch gap-0 w-full" style="max-width: 800px;">

                {{-- Left: What you'd normally do --}}
                <div class="flex-1 md05-card-dim" style="padding: 28px 32px; border-radius: 16px 0 0 16px;">
                    <div style="font-family: 'Sora', sans-serif; font-size: 10px; text-transform: uppercase; letter-spacing: 0.25em; color: rgba(255,255,255,0.25); margin-bottom: 16px; font-weight: 600;">Normal instinct</div>
                    <p style="font-family: 'Sora', sans-serif; font-size: 1rem; color: rgba(255,255,255,0.4); line-height: 1.7;">
                        You find a dirty pan. You stop. You wash it. You dry it. You put it away. You organize the shelf while you're at it.
                    </p>
                    <div style="margin-top: 16px; font-family: 'Sora', sans-serif; font-size: 0.85rem; color: rgba(232,110,75,0.6); font-weight: 500;">
                        20 minutes lost. Kitchen still dirty.
                    </div>
                </div>

                {{-- Divider --}}
                <div style="width: 1px; background: linear-gradient(to bottom, transparent, rgba(17,193,143,0.3), transparent);"></div>

                {{-- Right: What you should do --}}
                <div class="flex-1 md05-card-active" style="padding: 28px 32px; border-radius: 0 16px 16px 0;">
                    <div style="font-family: 'Sora', sans-serif; font-size: 10px; text-transform: uppercase; letter-spacing: 0.25em; color: rgba(17,193,143,0.6); margin-bottom: 16px; font-weight: 600;">Micro decision</div>
                    <p style="font-family: 'Sora', sans-serif; font-size: 1rem; color: rgba(255,255,255,0.6); line-height: 1.7;">
                        You find a dirty pan. You <span style="color: #11C18F; font-weight: 600;">throw it in the living room.</span> You keep cleaning the kitchen.
                    </p>
                    <div style="margin-top: 16px; font-family: 'Sora', sans-serif; font-size: 0.85rem; color: rgba(17,193,143,0.7); font-weight: 500;">
                        Kitchen done. Pan dealt with later.
                    </div>
                </div>
            </div>

            {{-- Kicker --}}
            <div class="md05-s4 mt-16">
                <p class="md05-kicker">
                    The goal isn't a clean pan. The goal is <span style="color: #11C18F; font-weight: 900;">a clean kitchen.</span>
                </p>
            </div>
        </div>
    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
    .md05-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(3.5rem, 8vw, 6.5rem);
        letter-spacing: -0.03em;
        line-height: 1;
        color: rgba(255,255,255,0.9);
    }

    .md05-gradient-text {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 50%, #AFEFCD 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: md05-shimmer 5s ease-in-out infinite;
    }

    @keyframes md05-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    .md05-kicker {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: clamp(1.2rem, 2.2vw, 1.6rem);
        color: rgba(255,255,255,0.55);
        text-align: center;
        letter-spacing: -0.02em;
    }

    /* Cards */
    .md05-card-dim {
        background: rgba(255,255,255,0.015);
        border: 1px solid rgba(255,255,255,0.05);
        border-right: none;
    }

    .md05-card-active {
        background: rgba(17,193,143,0.03);
        border: 1px solid rgba(17,193,143,0.12);
        border-left: none;
    }

    /* Arc animation */
    .md05-arc-draw {
        stroke-dasharray: 1200;
        stroke-dashoffset: 1200;
        animation: md05-draw-arc 1.5s ease-out 1s forwards;
    }

    @keyframes md05-draw-arc {
        to { stroke-dashoffset: 0; }
    }

    .md05-arc-dot {
        opacity: 0;
        animation: md05-dot-appear 0.3s ease-out 1.5s forwards;
    }

    @keyframes md05-dot-appear {
        to { opacity: 1; }
    }

    /* Aurora */
    .md05-aurora {
        position: absolute;
        border-radius: 50%;
        filter: blur(120px);
        will-change: transform;
    }
    .md05-aurora-1 {
        width: 500px; height: 500px;
        background: radial-gradient(circle, rgba(17,193,143,0.07) 0%, transparent 70%);
        top: 20%; left: 50%;
        transform: translateX(-50%);
        animation: md05-drift 14s ease-in-out infinite;
    }

    @keyframes md05-drift {
        0%, 100% { transform: translateX(-50%) scale(1); }
        50% { transform: translateX(-45%) scale(1.1); }
    }

    /* Stagger */
    @keyframes md05-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes md05-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .md05-s1 { opacity: 0; animation: md05-reveal-down 0.8s ease-out 0.1s forwards; }
    .md05-s2 { opacity: 0; animation: md05-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .md05-s3 { opacity: 0; animation: md05-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.7s forwards; }
    .md05-s4 { opacity: 0; animation: md05-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.2s forwards; }
</style>
