<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        {{-- Warm glow for urgency --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 50% 30%, rgba(232,110,75,0.04) 0%, transparent 50%);"></div>
        {{-- Green glow bottom --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 30% 85%, rgba(17,193,143,0.03) 0%, transparent 45%);"></div>
        {{-- Dot grid --}}
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: radial-gradient(rgba(255,255,255,0.3) 1px, transparent 1px); background-size: 40px 40px;"></div>
        {{-- Noise --}}
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        {{-- Vignette --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 85%);"></div>
    </div>

    {{-- Fork diagram SVG --}}
    <svg class="pl08-fork-svg" viewBox="0 0 600 200" preserveAspectRatio="xMidYMid meet">
        {{-- Main trunk --}}
        <path class="pl08-path-trunk" d="M 60 100 L 200 100" fill="none" stroke="rgba(17,193,143,0.4)" stroke-width="3" stroke-linecap="round" />
        {{-- Fork point glow --}}
        <circle cx="200" cy="100" r="20" fill="rgba(232,110,75,0.06)" class="pl08-fork-glow" />
        <circle cx="200" cy="100" r="6" fill="#E86E4B" class="pl08-fork-dot" />
        {{-- Upper branch: FSM --}}
        <path class="pl08-path-fsm" d="M 200 100 C 280 100, 320 40, 400 40" fill="none" stroke="rgba(17,193,143,0.4)" stroke-width="2.5" stroke-linecap="round" />
        {{-- Lower branch: WE --}}
        <path class="pl08-path-we" d="M 200 100 C 280 100, 320 160, 400 160" fill="none" stroke="rgba(72,170,165,0.4)" stroke-width="2.5" stroke-linecap="round" />
        {{-- BE label --}}
        <text x="60" y="88" fill="rgba(255,255,255,0.2)" font-family="Sora, sans-serif" font-size="10" font-weight="500" letter-spacing="0.1em">BUSINESS ENGINE</text>
        {{-- Fork label --}}
        <text x="210" y="106" fill="rgba(232,110,75,0.6)" font-family="Sora, sans-serif" font-size="9" font-weight="600" letter-spacing="0.15em">DECISION</text>
        {{-- FSM endpoint --}}
        <circle cx="400" cy="40" r="24" fill="rgba(17,193,143,0.06)" stroke="rgba(17,193,143,0.2)" stroke-width="1" class="pl08-endpoint" />
        <text x="400" y="36" fill="#11C18F" font-family="Cairo, sans-serif" font-size="13" font-weight="800" text-anchor="middle">FSM</text>
        <text x="400" y="49" fill="rgba(255,255,255,0.3)" font-family="Sora, sans-serif" font-size="8" text-anchor="middle">Field Service</text>
        {{-- WE endpoint --}}
        <circle cx="400" cy="160" r="24" fill="rgba(72,170,165,0.06)" stroke="rgba(72,170,165,0.2)" stroke-width="1" class="pl08-endpoint" />
        <text x="400" y="156" fill="#48AAA5" font-family="Cairo, sans-serif" font-size="13" font-weight="800" text-anchor="middle">WE</text>
        <text x="400" y="169" fill="rgba(255,255,255,0.3)" font-family="Sora, sans-serif" font-size="8" text-anchor="middle">Wholesale</text>
        {{-- Animated particles --}}
        <circle r="2.5" fill="#11C18F" opacity="0.7">
            <animateMotion dur="2.5s" repeatCount="indefinite" path="M 200 100 C 280 100, 320 40, 400 40" begin="2s" />
        </circle>
        <circle r="2.5" fill="#48AAA5" opacity="0.7">
            <animateMotion dur="3s" repeatCount="indefinite" path="M 200 100 C 280 100, 320 160, 400 160" begin="2.3s" />
        </circle>
    </svg>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 28px 72px;">

        {{-- Top bar --}}
        <div class="pl08-stagger-1 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #E86E4B; box-shadow: 0 0 10px rgba(232,110,75,0.4);"></div>
                <span style="font-family: 'Sora', sans-serif; font-size: 11px; font-weight: 600; color: rgba(232,110,75,0.6); text-transform: uppercase; letter-spacing: 0.2em;">Inflection Point</span>
            </div>
            <div class="flex items-center gap-3 px-4 py-2 rounded-full" style="border: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
                <span style="font-family: 'Sora', sans-serif; font-size: 10px; font-weight: 500; color: rgba(255,255,255,0.3); text-transform: uppercase; letter-spacing: 0.2em;">Meridiam Network #4</span>
            </div>
        </div>

        {{-- Heading --}}
        <div class="pl08-stagger-2" style="margin-top: 16px; margin-bottom: 12px;">
            <h1 class="pl08-headline">
                <span style="color: rgba(255,255,255,0.95);">AT&T</span> <span class="pl08-gradient-text">Changes Everything</span>
            </h1>
            <p style="font-family: 'Sora', sans-serif; font-size: 0.8rem; color: rgba(255,255,255,0.3); max-width: 600px; line-height: 1.5; margin-top: 6px;">
                Little confidence AT&T's needs could be met within Business Engine. A decision was made: FSM becomes its own product. Wholesale Engine is born.
            </p>
        </div>

        {{-- Main content: two-column layout --}}
        <div class="flex-1 flex flex-col justify-center" style="max-width: 1280px; margin: 0 auto; width: 100%;">

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 28px; align-items: start;">

                {{-- Left column: Timelines --}}
                <div>
                    <div class="pl08-stagger-3" style="margin-bottom: 10px;">
                        <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                            <div style="width: 6px; height: 6px; border-radius: 50%; background: #E86E4B;"></div>
                            <span style="font-family: 'Sora', sans-serif; font-size: 0.7rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.2em; color: rgba(232,110,75,0.6);">Impossible Timelines</span>
                        </div>
                    </div>

                    {{-- Timeline item 1 --}}
                    <div class="pl08-stagger-4 pl08-deadline-item">
                        <div class="pl08-deadline-date" style="color: #E86E4B;">
                            <span class="pl08-date-month">Jul</span>
                            <span class="pl08-date-year">2024</span>
                        </div>
                        <div class="pl08-deadline-content">
                            <div class="pl08-deadline-title">Ting / BSN FSM</div>
                            <div class="pl08-deadline-meta">
                                <span class="pl08-late-tag">
                                    <svg width="10" height="10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" style="color: #EFD61B;">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Starting late — should have begun November
                                </span>
                            </div>
                        </div>
                    </div>

                    {{-- Timeline item 2 --}}
                    <div class="pl08-stagger-5 pl08-deadline-item">
                        <div class="pl08-deadline-date" style="color: #E86E4B;">
                            <span class="pl08-date-month">Aug</span>
                            <span class="pl08-date-year">2024</span>
                        </div>
                        <div class="pl08-deadline-content">
                            <div class="pl08-deadline-title">AT&T FSM</div>
                            <div class="pl08-deadline-desc">Field Service Management for AT&T network</div>
                        </div>
                    </div>

                    {{-- Timeline item 3 --}}
                    <div class="pl08-stagger-6 pl08-deadline-item">
                        <div class="pl08-deadline-date" style="color: #48AAA5;">
                            <span class="pl08-date-month">Aug</span>
                            <span class="pl08-date-year">2024</span>
                        </div>
                        <div class="pl08-deadline-content">
                            <div class="pl08-deadline-title">AT&T Wholesale Engine</div>
                            <div class="pl08-deadline-desc">Brand new product, built from scratch</div>
                        </div>
                    </div>

                    {{-- ISP note --}}
                    <div class="pl08-stagger-7" style="margin-top: 6px; padding-left: 80px;">
                        <span style="font-family: 'Sora', sans-serif; font-size: 0.75rem; color: rgba(255,255,255,0.2); font-style: italic;">
                            ISP product was last priority
                        </span>
                    </div>
                </div>

                {{-- Right column: Team allocation --}}
                <div>
                    <div class="pl08-stagger-8" style="margin-bottom: 10px;">
                        <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                            <div style="width: 6px; height: 6px; border-radius: 50%; background: #11C18F;"></div>
                            <span style="font-family: 'Sora', sans-serif; font-size: 0.7rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.2em; color: rgba(17,193,143,0.6);">Team Allocation</span>
                        </div>
                    </div>

                    {{-- Team card: Sajan --}}
                    <div class="pl08-stagger-9 pl08-team-card">
                        <div class="pl08-team-avatar" style="background: rgba(17,193,143,0.1); border-color: rgba(17,193,143,0.2);">
                            <span style="color: #11C18F; font-weight: 700;">S</span>
                        </div>
                        <div class="pl08-team-info">
                            <div class="pl08-team-name">Sajan</div>
                            <div class="pl08-team-role">
                                <span class="pl08-product-tag pl08-tag-fsm">FSM</span>
                                <span style="color: rgba(255,255,255,0.2);">+</span>
                                <span class="pl08-product-tag pl08-tag-isp">ISP Product</span>
                            </div>
                            <div class="pl08-team-note">Strong background in both domains</div>
                        </div>
                    </div>

                    {{-- Team card: Sweden --}}
                    <div class="pl08-stagger-10 pl08-team-card">
                        <div class="pl08-team-avatar" style="background: rgba(72,170,165,0.1); border-color: rgba(72,170,165,0.2);">
                            <span style="color: #48AAA5; font-weight: 700;">SE</span>
                        </div>
                        <div class="pl08-team-info">
                            <div class="pl08-team-name">Sweden Team</div>
                            <div class="pl08-team-role">
                                <span class="pl08-product-tag pl08-tag-we">Wholesale Engine</span>
                            </div>
                            <div class="pl08-team-note">New product, built from the ground up</div>
                        </div>
                    </div>

                    {{-- Team card: Reinforcements --}}
                    <div class="pl08-stagger-11 pl08-team-card">
                        <div class="pl08-team-avatar" style="background: rgba(17,193,143,0.08); border-color: rgba(17,193,143,0.15);">
                            <span style="color: rgba(17,193,143,0.8); font-weight: 700;">+2</span>
                        </div>
                        <div class="pl08-team-info">
                            <div class="pl08-team-name">Alberto & Rogers</div>
                            <div class="pl08-team-role">
                                <span class="pl08-product-tag pl08-tag-fsm">FSM</span>
                            </div>
                            <div class="pl08-team-note">Hired to help meet the impossible timeline</div>
                        </div>
                    </div>

                    {{-- Context aside --}}
                    <div class="pl08-stagger-12 pl08-context-box">
                        <div style="display: flex; gap: 10px;">
                            <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" style="color: rgba(255,255,255,0.2); flex-shrink: 0; margin-top: 2px;">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                            </svg>
                            <span style="font-family: 'Sora', sans-serif; font-size: 0.75rem; color: rgba(255,255,255,0.2); line-height: 1.6;">
                                Also talking to Lyte, Cityside, Clearpath, Hunter and others who needed billing features — adding even more demand.
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- Bottom --}}
        <div class="pl08-stagger-13 flex items-center justify-center" style="margin-top: 8px;">
            <div class="flex items-center gap-4">
                <div style="width: 60px; height: 1px; background: linear-gradient(to right, transparent, rgba(232,110,75,0.2));"></div>
                <span style="font-family: 'Sora', sans-serif; font-size: 0.85rem; color: rgba(255,255,255,0.3);">
                    Big decisions. <span style="color: rgba(232,110,75,0.7); font-weight: 600;">Impossible timelines.</span> Three products.
                </span>
                <div style="width: 60px; height: 1px; background: linear-gradient(to left, transparent, rgba(17,193,143,0.2));"></div>
            </div>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    /* Headline */
    .pl08-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: clamp(2rem, 4vw, 3rem);
        letter-spacing: -0.03em;
        line-height: 1.05;
    }

    .pl08-gradient-text {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 50%, #11C18F 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: pl08-shimmer 5s ease-in-out infinite;
    }

    @keyframes pl08-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    /* Fork SVG */
    .pl08-fork-svg {
        position: absolute;
        top: 80px;
        left: 50%;
        transform: translateX(-50%);
        width: 550px;
        height: 180px;
        z-index: 2;
        opacity: 0.5;
        pointer-events: none;
    }

    .pl08-path-trunk {
        stroke-dasharray: 200;
        stroke-dashoffset: 200;
        animation: pl08-draw 1s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards;
    }

    .pl08-path-fsm {
        stroke-dasharray: 300;
        stroke-dashoffset: 300;
        animation: pl08-draw-long 1.2s cubic-bezier(0.22, 1, 0.36, 1) 1.2s forwards;
    }

    .pl08-path-we {
        stroke-dasharray: 300;
        stroke-dashoffset: 300;
        animation: pl08-draw-long 1.2s cubic-bezier(0.22, 1, 0.36, 1) 1.4s forwards;
    }

    .pl08-fork-dot {
        opacity: 0;
        animation: pl08-dot-in 0.4s ease-out 1s forwards;
    }

    .pl08-fork-glow {
        opacity: 0;
        animation: pl08-dot-in 0.6s ease-out 1s forwards;
    }

    .pl08-endpoint {
        opacity: 0;
        animation: pl08-dot-in 0.5s ease-out 2s forwards;
    }

    @keyframes pl08-draw {
        to { stroke-dashoffset: 0; }
    }

    @keyframes pl08-draw-long {
        to { stroke-dashoffset: 0; }
    }

    @keyframes pl08-dot-in {
        to { opacity: 1; }
    }

    /* Deadline items */
    .pl08-deadline-item {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        padding: 10px 0;
        border-bottom: 1px solid rgba(255,255,255,0.03);
    }

    .pl08-deadline-item:last-of-type {
        border-bottom: none;
    }

    .pl08-deadline-date {
        display: flex;
        flex-direction: column;
        align-items: center;
        min-width: 60px;
        flex-shrink: 0;
    }

    .pl08-date-month {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 1.2rem;
        line-height: 1;
        letter-spacing: -0.02em;
    }

    .pl08-date-year {
        font-family: 'Sora', sans-serif;
        font-size: 0.65rem;
        font-weight: 500;
        color: rgba(255,255,255,0.25);
        margin-top: 2px;
    }

    .pl08-deadline-content {
        flex: 1;
    }

    .pl08-deadline-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 1rem;
        color: rgba(255,255,255,0.85);
        margin-bottom: 4px;
    }

    .pl08-deadline-desc {
        font-family: 'Sora', sans-serif;
        font-size: 0.75rem;
        color: rgba(255,255,255,0.25);
        line-height: 1.5;
    }

    .pl08-deadline-meta {
        margin-top: 4px;
    }

    .pl08-late-tag {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 3px 10px;
        border-radius: 6px;
        background: rgba(239,214,27,0.06);
        border: 1px solid rgba(239,214,27,0.1);
        font-family: 'Sora', sans-serif;
        font-size: 0.65rem;
        font-weight: 500;
        color: rgba(239,214,27,0.7);
    }

    /* Team cards */
    .pl08-team-card {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 16px;
        margin-bottom: 8px;
        border-radius: 12px;
        background: rgba(255,255,255,0.02);
        border: 1px solid rgba(255,255,255,0.04);
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .pl08-team-card:hover {
        background: rgba(255,255,255,0.03);
        border-color: rgba(255,255,255,0.08);
        transform: translateX(4px);
    }

    .pl08-team-avatar {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        border: 1px solid;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Sora', sans-serif;
        font-size: 0.85rem;
        flex-shrink: 0;
    }

    .pl08-team-info {
        flex: 1;
    }

    .pl08-team-name {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 0.85rem;
        color: rgba(255,255,255,0.85);
        margin-bottom: 2px;
    }

    .pl08-team-role {
        display: flex;
        align-items: center;
        gap: 6px;
        margin-bottom: 2px;
    }

    .pl08-product-tag {
        padding: 2px 8px;
        border-radius: 4px;
        font-family: 'Sora', sans-serif;
        font-size: 0.65rem;
        font-weight: 600;
        letter-spacing: 0.05em;
    }

    .pl08-tag-fsm {
        background: rgba(17,193,143,0.1);
        color: rgba(17,193,143,0.8);
        border: 1px solid rgba(17,193,143,0.15);
    }

    .pl08-tag-we {
        background: rgba(72,170,165,0.1);
        color: rgba(72,170,165,0.8);
        border: 1px solid rgba(72,170,165,0.15);
    }

    .pl08-tag-isp {
        background: rgba(255,255,255,0.04);
        color: rgba(255,255,255,0.4);
        border: 1px solid rgba(255,255,255,0.06);
    }

    .pl08-team-note {
        font-family: 'Sora', sans-serif;
        font-size: 0.7rem;
        color: rgba(255,255,255,0.2);
    }

    /* Context box */
    .pl08-context-box {
        margin-top: 10px;
        padding: 10px 14px;
        border-radius: 12px;
        background: rgba(255,255,255,0.015);
        border: 1px solid rgba(255,255,255,0.03);
    }

    /* Reveal animations */
    @keyframes pl08-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes pl08-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .pl08-stagger-1 { opacity: 0; animation: pl08-reveal-down 0.8s ease-out 0.1s forwards; }
    .pl08-stagger-2 { opacity: 0; animation: pl08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .pl08-stagger-3 { opacity: 0; animation: pl08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .pl08-stagger-4 { opacity: 0; animation: pl08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.7s forwards; }
    .pl08-stagger-5 { opacity: 0; animation: pl08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
    .pl08-stagger-6 { opacity: 0; animation: pl08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.1s forwards; }
    .pl08-stagger-7 { opacity: 0; animation: pl08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.3s forwards; }
    .pl08-stagger-8 { opacity: 0; animation: pl08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .pl08-stagger-9 { opacity: 0; animation: pl08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.8s forwards; }
    .pl08-stagger-10 { opacity: 0; animation: pl08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.0s forwards; }
    .pl08-stagger-11 { opacity: 0; animation: pl08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.2s forwards; }
    .pl08-stagger-12 { opacity: 0; animation: pl08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.5s forwards; }
    .pl08-stagger-13 { opacity: 0; animation: pl08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.8s forwards; }
</style>
