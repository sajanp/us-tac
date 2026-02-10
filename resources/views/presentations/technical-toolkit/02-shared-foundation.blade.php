<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 50% 60%, rgba(17,193,143,0.04) 0%, transparent 55%);"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 85%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 40px 72px 48px;">

        {{-- Top bar --}}
        <div class="tt02-s1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Technical Toolkit</span>
        </div>

        {{-- Main content --}}
        <div class="flex-1 flex flex-col items-center justify-center">

            {{-- Tagline --}}
            <div class="tt02-s2 mb-8">
                <p style="font-family: 'Sora', sans-serif; font-size: 0.8rem; font-weight: 600; letter-spacing: 0.3em; text-transform: uppercase; color: rgba(17,193,143,0.6); text-align: center;">The Common Thread</p>
            </div>

            {{-- Central visual: Laravel hub with branches --}}
            <div class="tt02-s3 tt02-tree">

                {{-- Center hub --}}
                <div class="tt02-hub">
                    <div class="tt02-hub-inner">
                        <svg class="tt02-php-icon" viewBox="0 0 60 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <text x="30" y="24" text-anchor="middle" style="font-family: 'Cairo', sans-serif; font-weight: 900; font-size: 20px; fill: rgba(255,255,255,0.9);">PHP</text>
                        </svg>
                        <div class="tt02-hub-label">Laravel Framework</div>
                    </div>
                    <div class="tt02-hub-ring"></div>
                    <div class="tt02-hub-ring tt02-hub-ring-2"></div>
                </div>

                {{-- Connecting lines (SVG) --}}
                <svg class="tt02-branches" viewBox="0 0 900 200" fill="none" preserveAspectRatio="xMidYMid meet">
                    {{-- Left branch to FSM --}}
                    <path class="tt02-branch-line tt02-branch-left" d="M450,100 C350,100 320,40 200,40" stroke="url(#tt02-grad-fsm)" stroke-width="2" fill="none" />
                    {{-- Right branch to WE --}}
                    <path class="tt02-branch-line tt02-branch-right" d="M450,100 C550,100 580,40 700,40" stroke="url(#tt02-grad-we)" stroke-width="2" fill="none" />
                    <defs>
                        <linearGradient id="tt02-grad-fsm" x1="450" y1="100" x2="200" y2="40" gradientUnits="userSpaceOnUse">
                            <stop offset="0%" stop-color="rgba(17,193,143,0.5)" />
                            <stop offset="100%" stop-color="rgba(17,193,143,0.15)" />
                        </linearGradient>
                        <linearGradient id="tt02-grad-we" x1="450" y1="100" x2="700" y2="40" gradientUnits="userSpaceOnUse">
                            <stop offset="0%" stop-color="rgba(72,170,165,0.5)" />
                            <stop offset="100%" stop-color="rgba(72,170,165,0.15)" />
                        </linearGradient>
                    </defs>
                </svg>

                {{-- Product nodes --}}
                <div class="tt02-node tt02-node-fsm tt02-s4">
                    <div class="tt02-node-dot" style="background: #11C18F; box-shadow: 0 0 20px rgba(17,193,143,0.4);"></div>
                    <div class="tt02-node-label" style="color: #11C18F;">FSM</div>
                    <div class="tt02-node-full">Field Service Management</div>
                </div>
                <div class="tt02-node tt02-node-we tt02-s5">
                    <div class="tt02-node-dot" style="background: #48AAA5; box-shadow: 0 0 20px rgba(72,170,165,0.4);"></div>
                    <div class="tt02-node-label" style="color: #48AAA5;">WE</div>
                    <div class="tt02-node-full">Wholesale Engine</div>
                </div>
            </div>

            {{-- Headline --}}
            <div class="tt02-s6 mt-8">
                <h1 class="tt02-headline text-center">
                    Two Products. <span class="tt02-green">One Framework.</span>
                </h1>
            </div>

            {{-- Description --}}
            <div class="tt02-s7 mt-4">
                <p style="font-family: 'Sora', sans-serif; font-size: 1rem; color: rgba(255,255,255,0.35); text-align: center; max-width: 600px; line-height: 1.8;">
                    Both FSM and Wholesale Engine are built on PHP with the Laravel framework. Same language, same conventions, same expertise across the team.
                </p>
            </div>

            {{-- Shared DNA badges --}}
            <div class="tt02-s8 flex items-center gap-3 mt-6">
                <div class="tt02-badge">PHP 8.4</div>
                <div class="tt02-badge">Laravel 12</div>
                <div class="tt02-badge">Shared Expertise</div>
            </div>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .tt02-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(2rem, 5vw, 3.5rem);
        letter-spacing: -0.03em;
        color: rgba(255,255,255,0.92);
    }

    .tt02-green {
        color: #11C18F;
    }

    /* Tree layout */
    .tt02-tree {
        position: relative;
        width: 100%;
        max-width: 700px;
        height: 200px;
    }

    .tt02-branches {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
    }

    .tt02-branch-line {
        stroke-dasharray: 400;
        stroke-dashoffset: 400;
        animation: tt02-draw 1.5s cubic-bezier(0.22, 1, 0.36, 1) 0.8s forwards;
    }

    @keyframes tt02-draw {
        to { stroke-dashoffset: 0; }
    }

    /* Center hub */
    .tt02-hub {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
    }

    .tt02-hub-inner {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        background: linear-gradient(135deg, rgba(17,193,143,0.1), rgba(17,193,143,0.03));
        border: 1px solid rgba(17,193,143,0.2);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
        z-index: 2;
        backdrop-filter: blur(10px);
    }

    .tt02-hub-label {
        font-family: 'Sora', sans-serif;
        font-size: 0.7rem;
        font-weight: 500;
        color: rgba(17,193,143,0.7);
        letter-spacing: 0.05em;
        margin-top: 4px;
    }

    .tt02-hub-ring {
        position: absolute;
        inset: -12px;
        border-radius: 50%;
        border: 1px solid rgba(17,193,143,0.08);
        animation: tt02-pulse 4s ease-in-out infinite;
    }

    .tt02-hub-ring-2 {
        inset: -24px;
        border-color: rgba(17,193,143,0.04);
        animation-delay: 1s;
    }

    @keyframes tt02-pulse {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.05); opacity: 0.5; }
    }

    .tt02-php-icon {
        width: 60px;
        height: 32px;
    }

    /* Product nodes */
    .tt02-node {
        position: absolute;
        top: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 6px;
        z-index: 2;
    }

    .tt02-node-fsm { left: 18%; }
    .tt02-node-we { right: 18%; }

    .tt02-node-dot {
        width: 14px;
        height: 14px;
        border-radius: 50%;
    }

    .tt02-node-label {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 1.4rem;
        letter-spacing: 0.02em;
    }

    .tt02-node-full {
        font-family: 'Sora', sans-serif;
        font-size: 0.72rem;
        color: rgba(255,255,255,0.35);
        white-space: nowrap;
    }

    /* Badges */
    .tt02-badge {
        font-family: 'Sora', sans-serif;
        font-size: 0.72rem;
        font-weight: 500;
        color: rgba(17,193,143,0.7);
        padding: 6px 16px;
        border-radius: 9999px;
        border: 1px solid rgba(17,193,143,0.12);
        background: rgba(17,193,143,0.03);
        letter-spacing: 0.02em;
    }

    /* Animations */
    @keyframes tt02-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes tt02-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .tt02-s1 { opacity: 0; animation: tt02-reveal-down 0.8s ease-out 0.1s forwards; }
    .tt02-s2 { opacity: 0; animation: tt02-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .tt02-s3 { opacity: 0; animation: tt02-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .tt02-s4 { opacity: 0; animation: tt02-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.8s forwards; }
    .tt02-s5 { opacity: 0; animation: tt02-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 2.0s forwards; }
    .tt02-s6 { opacity: 0; animation: tt02-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 2.3s forwards; }
    .tt02-s7 { opacity: 0; animation: tt02-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 2.5s forwards; }
    .tt02-s8 { opacity: 0; animation: tt02-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 2.7s forwards; }
</style>
