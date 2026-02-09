<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        {{-- Forward momentum glow from bottom --}}
        <div class="pl16-momentum-glow"></div>
        {{-- Radial glow center --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 50% 50%, rgba(17,193,143,0.04) 0%, transparent 55%);"></div>
        {{-- Dot grid --}}
        <div class="absolute inset-0 opacity-[0.025]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>
        {{-- Noise --}}
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        {{-- Vignette --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 85%);"></div>
    </div>

    {{-- Directional arrows SVG --}}
    <svg class="absolute inset-0 w-full h-full pointer-events-none" style="opacity: 0.03;" preserveAspectRatio="xMidYMid slice" viewBox="0 0 1920 1080">
        <defs>
            <linearGradient id="pl16-arrow-grad" x1="0" y1="1" x2="0" y2="0">
                <stop offset="0%" stop-color="#11C18F" stop-opacity="0.6"/>
                <stop offset="100%" stop-color="#11C18F" stop-opacity="0"/>
            </linearGradient>
        </defs>
        <path d="M 860 1080 L 960 850 L 1060 1080" fill="none" stroke="url(#pl16-arrow-grad)" stroke-width="2" class="pl16-arrow-line"/>
        <path d="M 800 1080 L 960 750 L 1120 1080" fill="none" stroke="url(#pl16-arrow-grad)" stroke-width="1.5" class="pl16-arrow-line" style="animation-delay: 0.5s;"/>
        <path d="M 740 1080 L 960 650 L 1180 1080" fill="none" stroke="url(#pl16-arrow-grad)" stroke-width="1" class="pl16-arrow-line" style="animation-delay: 1s;"/>
    </svg>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 56px 72px;">

        {{-- Header --}}
        <div class="pl16-stagger-1 flex items-center justify-between" style="margin-bottom: 44px;">
            <div>
                <div style="display: inline-flex; align-items: center; gap: 10px; margin-bottom: 14px;">
                    <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 12px rgba(17,193,143,0.4);"></div>
                    <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(17,193,143,0.7); font-weight: 600; font-family: 'Sora', sans-serif;">Action Items</span>
                </div>
                <h1 class="pl16-headline">
                    The Path <span class="pl16-gradient-text">Forward</span>
                </h1>
            </div>
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-10 h-10 pl16-stagger-1" style="opacity: 0.4;" />
        </div>

        {{-- Two-column items (FSM / WE) --}}
        <div class="flex-1 flex flex-col gap-6">
            <div class="flex gap-8">

                {{-- FSM Column --}}
                <div class="flex-1">
                    <div class="pl16-stagger-2 pl16-section-label">
                        <svg width="12" height="12" fill="none" viewBox="0 0 24 24" stroke="#11C18F" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63" /></svg>
                        <span>FSM Focus</span>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="pl16-stagger-3 pl16-action-item">
                            <div class="pl16-action-number">1</div>
                            <div class="pl16-action-content">
                                <div class="pl16-action-title">Hone in on larger features & refactorings</div>
                                <div class="pl16-action-desc">Focus development effort on the high-impact work that moves FSM forward</div>
                            </div>
                        </div>
                        <div class="pl16-stagger-4 pl16-action-item">
                            <div class="pl16-action-number">2</div>
                            <div class="pl16-action-content">
                                <div class="pl16-action-title">Make FSM more marketable</div>
                                <div class="pl16-action-desc">UI overhaul, demo story, sales material &mdash; make it sellable</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- WE Column --}}
                <div class="flex-1">
                    <div class="pl16-stagger-2 pl16-section-label pl16-section-we">
                        <svg width="12" height="12" fill="none" viewBox="0 0 24 24" stroke="#48AAA5" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375" /></svg>
                        <span>WE Focus</span>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="pl16-stagger-3 pl16-action-item pl16-action-we">
                            <div class="pl16-action-number pl16-num-we">3</div>
                            <div class="pl16-action-content">
                                <div class="pl16-action-title">Polish WE to sustain existing projects</div>
                                <div class="pl16-action-desc">Stabilize and ensure current deployments run smoothly</div>
                            </div>
                        </div>
                        <div class="pl16-stagger-4 pl16-action-item pl16-action-we">
                            <div class="pl16-action-number pl16-num-we">4</div>
                            <div class="pl16-action-content">
                                <div class="pl16-action-title">Refactor from "rushed" to "predictable"</div>
                                <div class="pl16-action-desc">Transform rushed development into predictable architecture</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Shared items spanning full width --}}
            <div class="pl16-stagger-5" style="margin-top: 8px;">
                <div class="pl16-divider">
                    <div style="flex: 1; height: 1px; background: linear-gradient(to right, transparent, rgba(17,193,143,0.15));"></div>
                    <span style="font-family: 'Sora', sans-serif; font-size: 10px; font-weight: 600; letter-spacing: 0.2em; text-transform: uppercase; color: rgba(17,193,143,0.4);">Both Products</span>
                    <div style="flex: 1; height: 1px; background: linear-gradient(to left, transparent, rgba(17,193,143,0.15));"></div>
                </div>
            </div>

            <div class="flex gap-8">
                <div class="pl16-stagger-6 pl16-action-item pl16-action-shared flex-1">
                    <div class="pl16-action-number pl16-num-shared">5</div>
                    <div class="pl16-action-content">
                        <div class="pl16-action-title">Standardized observability, alerting & paging</div>
                        <div class="pl16-action-desc">One monitoring approach across all products &mdash; no more flying blind</div>
                    </div>
                </div>
                <div class="pl16-stagger-7 pl16-action-item pl16-action-shared flex-1">
                    <div class="pl16-action-number pl16-num-shared">6</div>
                    <div class="pl16-action-content">
                        <div class="pl16-action-title">Playbooks anyone can follow</div>
                        <div class="pl16-action-desc">Documented processes for dev, sales, and support &mdash; reduce single points of failure</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bottom closer --}}
        <div class="pl16-stagger-8 flex items-center justify-center" style="margin-top: 32px;">
            <div class="flex items-center gap-5">
                <div style="width: 80px; height: 1px; background: linear-gradient(to right, transparent, rgba(17,193,143,0.35));"></div>
                <div style="width: 8px; height: 8px; transform: rotate(45deg); border: 1px solid rgba(17,193,143,0.35);"></div>
                <span style="font-family: 'Sora', sans-serif; font-size: 13px; color: rgba(255,255,255,0.35); letter-spacing: 0.03em;">
                    We know what needs to be done. <span style="color: #11C18F; font-weight: 600;">Let's do it.</span>
                </span>
                <div style="width: 8px; height: 8px; transform: rotate(45deg); border: 1px solid rgba(17,193,143,0.35);"></div>
                <div style="width: 80px; height: 1px; background: linear-gradient(to left, transparent, rgba(17,193,143,0.35));"></div>
            </div>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    /* Momentum glow */
    .pl16-momentum-glow {
        position: absolute;
        bottom: -20%;
        left: 20%;
        right: 20%;
        height: 60%;
        background: radial-gradient(ellipse at center bottom, rgba(17,193,143,0.06) 0%, transparent 70%);
        animation: pl16-glow-build 3s ease-out 0.5s forwards;
        opacity: 0;
    }

    @keyframes pl16-glow-build {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Arrow lines */
    .pl16-arrow-line {
        stroke-dasharray: 600;
        stroke-dashoffset: 600;
        animation: pl16-draw-arrow 2s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards;
    }

    @keyframes pl16-draw-arrow {
        to { stroke-dashoffset: 0; }
    }

    /* Headline */
    .pl16-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: clamp(2.2rem, 4.5vw, 3.2rem);
        letter-spacing: -0.03em;
        line-height: 1.1;
        color: rgba(255,255,255,0.9);
    }

    .pl16-gradient-text {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 40%, #AFEFCD 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: pl16-shimmer 5s ease-in-out infinite;
    }

    @keyframes pl16-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    /* Section labels */
    .pl16-section-label {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 14px;
        font-family: 'Sora', sans-serif;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        color: rgba(17,193,143,0.6);
    }

    .pl16-section-we {
        color: rgba(72,170,165,0.6);
    }

    /* Action items */
    .pl16-action-item {
        display: flex;
        align-items: flex-start;
        gap: 18px;
        padding: 20px 24px;
        border-radius: 14px;
        background: rgba(255,255,255,0.015);
        border: 1px solid rgba(255,255,255,0.05);
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .pl16-action-item::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0%;
        height: 100%;
        background: linear-gradient(90deg, rgba(17,193,143,0.03), transparent);
        transition: width 0.6s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .pl16-action-item:hover {
        border-color: rgba(17,193,143,0.15);
        transform: translateX(4px);
    }

    .pl16-action-item:hover::after {
        width: 100%;
    }

    .pl16-action-we {
        border-color: rgba(72,170,165,0.06);
    }

    .pl16-action-we:hover {
        border-color: rgba(72,170,165,0.15);
    }

    .pl16-action-we::after {
        background: linear-gradient(90deg, rgba(72,170,165,0.03), transparent);
    }

    .pl16-action-shared {
        background: linear-gradient(135deg, rgba(17,193,143,0.025), rgba(17,193,143,0.01));
        border-color: rgba(17,193,143,0.08);
    }

    .pl16-action-shared:hover {
        border-color: rgba(17,193,143,0.2);
    }

    /* Numbers */
    .pl16-action-number {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 36px;
        line-height: 1;
        color: #11C18F;
        opacity: 0.8;
        flex-shrink: 0;
        width: 44px;
        text-align: center;
        position: relative;
        z-index: 1;
        text-shadow: 0 0 30px rgba(17,193,143,0.3);
    }

    .pl16-num-we {
        color: #48AAA5;
        text-shadow: 0 0 30px rgba(72,170,165,0.3);
    }

    .pl16-num-shared {
        background: linear-gradient(135deg, #11C18F, #AFEFCD);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-shadow: none;
    }

    /* Action content */
    .pl16-action-content {
        position: relative;
        z-index: 1;
        padding-top: 4px;
    }

    .pl16-action-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 16px;
        color: rgba(255,255,255,0.85);
        letter-spacing: -0.01em;
        line-height: 1.3;
    }

    .pl16-action-desc {
        font-family: 'Sora', sans-serif;
        font-size: 13px;
        color: rgba(255,255,255,0.35);
        margin-top: 4px;
        font-weight: 400;
        line-height: 1.5;
    }

    /* Divider */
    .pl16-divider {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    /* Reveal animations */
    @keyframes pl16-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes pl16-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .pl16-stagger-1 { opacity: 0; animation: pl16-reveal-down 0.8s ease-out 0.1s forwards; }
    .pl16-stagger-2 { opacity: 0; animation: pl16-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .pl16-stagger-3 { opacity: 0; animation: pl16-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .pl16-stagger-4 { opacity: 0; animation: pl16-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.7s forwards; }
    .pl16-stagger-5 { opacity: 0; animation: pl16-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
    .pl16-stagger-6 { opacity: 0; animation: pl16-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.1s forwards; }
    .pl16-stagger-7 { opacity: 0; animation: pl16-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.3s forwards; }
    .pl16-stagger-8 { opacity: 0; animation: pl16-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.6s forwards; }
</style>
