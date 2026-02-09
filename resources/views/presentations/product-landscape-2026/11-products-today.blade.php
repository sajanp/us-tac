<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        {{-- Left glow (FSM side) --}}
        <div class="pl11-glow-left"></div>
        {{-- Right glow (WE side) --}}
        <div class="pl11-glow-right"></div>

        {{-- Dot grid --}}
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>

        {{-- Noise --}}
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>

        {{-- Vignette --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 85%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 28px 72px;">

        {{-- Top bar --}}
        <div class="pl11-stagger-1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Product Landscape</span>
        </div>

        {{-- Heading --}}
        <div class="pl11-stagger-2" style="margin-top: 10px; margin-bottom: 16px;">
            <div class="inline-flex items-center gap-3 mb-2">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 12px rgba(17,193,143,0.4);"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(17,193,143,0.7); font-weight: 600; font-family: 'Sora', sans-serif;">Current State</span>
            </div>
            <h1 class="pl11-headline">The Products Today</h1>
        </div>

        {{-- Three columns --}}
        <div class="flex-1" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 0; max-width: 1400px; width: 100%;">

            {{-- FSM Column --}}
            <div class="pl11-stagger-3 flex flex-col" style="padding-right: 28px; border-right: 1px solid rgba(255,255,255,0.04);">

                <div class="pl11-col-header" style="margin-bottom: 14px;">
                    <span class="pl11-product-badge pl11-fsm-badge">FSM</span>
                    <span class="pl11-col-subtitle">Breadth</span>
                </div>

                {{-- Live networks grid --}}
                <div class="pl11-network-grid" style="margin-bottom: 14px;">
                    <div class="pl11-network pl11-net-1">
                        <div class="pl11-pulse-dot pl11-pulse-1"></div>
                        <span class="pl11-network-name">UBQ</span>
                    </div>
                    <div class="pl11-network pl11-net-2">
                        <div class="pl11-pulse-dot pl11-pulse-2"></div>
                        <span class="pl11-network-name">PRIME</span>
                    </div>
                    <div class="pl11-network pl11-net-3">
                        <div class="pl11-pulse-dot pl11-pulse-3"></div>
                        <span class="pl11-network-name">TING</span>
                    </div>
                    <div class="pl11-network pl11-net-4">
                        <div class="pl11-pulse-dot pl11-pulse-4"></div>
                        <span class="pl11-network-name">BSN</span>
                    </div>
                    <div class="pl11-network pl11-net-5">
                        <div class="pl11-pulse-dot pl11-pulse-5"></div>
                        <span class="pl11-network-name">HNET</span>
                    </div>
                    <div class="pl11-network pl11-net-6">
                        <div class="pl11-pulse-dot pl11-pulse-6"></div>
                        <span class="pl11-network-name">EEYOU</span>
                    </div>
                    <div class="pl11-network pl11-net-7">
                        <div class="pl11-pulse-dot pl11-pulse-7"></div>
                        <span class="pl11-network-name">LYTE</span>
                    </div>
                </div>

                {{-- Kudos --}}
                <div class="pl11-kudos pl11-stagger-5" style="margin-bottom: 10px;">
                    <span style="font-family: 'Sora', sans-serif; font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.15em; color: rgba(17,193,143,0.5);">Kudos</span>
                    <span style="font-family: 'Sora', sans-serif; font-size: 0.85rem; color: rgba(17,193,143,0.85); font-weight: 600;">Pablo, Dustin, Rogers</span>
                </div>

                {{-- Lyte assessment --}}
                <div class="pl11-assessment pl11-stagger-6">
                    <div class="pl11-assess-icon">
                        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
                            <path d="M8 1L10.2 5.5L15 6.2L11.5 9.6L12.4 14.4L8 12.1L3.6 14.4L4.5 9.6L1 6.2L5.8 5.5L8 1Z" fill="rgba(17,193,143,0.3)" stroke="#11C18F" stroke-width="0.8"/>
                        </svg>
                    </div>
                    <div>
                        <p style="font-family: 'Sora', sans-serif; font-size: 0.75rem; color: rgba(255,255,255,0.5); line-height: 1.4;">
                            Lyte's assessment:
                        </p>
                        <p style="font-family: 'Sora', sans-serif; font-size: 0.8rem; color: rgba(17,193,143,0.9); font-weight: 600; line-height: 1.4;">
                            "Superior to what Gaiia has today."
                        </p>
                    </div>
                </div>

            </div>

            {{-- WE Column --}}
            <div class="pl11-stagger-4 flex flex-col" style="padding: 0 28px; border-right: 1px solid rgba(255,255,255,0.04);">

                <div class="pl11-col-header" style="margin-bottom: 14px;">
                    <span class="pl11-product-badge pl11-we-badge">WE</span>
                    <span class="pl11-col-subtitle">Depth</span>
                </div>

                {{-- AT&T anchor --}}
                <div class="pl11-att-block" style="margin-bottom: 14px;">
                    <div class="pl11-att-header">
                        <div class="pl11-att-dot"></div>
                        <span class="pl11-att-name">AT&T / PRIME</span>
                        <span class="pl11-att-status">Live</span>
                    </div>
                    <p class="pl11-att-desc">PRI are happy. AT&T recommends COS openly to new projects.</p>
                </div>

                {{-- Quantum trust badge --}}
                <div class="pl11-trust-badge pl11-stagger-5" style="margin-bottom: 14px;">
                    <div class="pl11-badge-border">
                        <div class="pl11-badge-inner">
                            <svg width="18" height="18" viewBox="0 0 20 20" fill="none" style="flex-shrink: 0;">
                                <path d="M10 1L12.5 4L16.5 3L15.5 7L19 9.5L16 12L17 16L13 15.5L10 19L7 15.5L3 16L4 12L1 9.5L4.5 7L3.5 3L7.5 4L10 1Z" fill="rgba(17,193,143,0.1)" stroke="rgba(17,193,143,0.4)" stroke-width="0.8"/>
                            </svg>
                            <div>
                                <p style="font-family: 'Cairo', sans-serif; font-weight: 700; font-size: 0.8rem; color: rgba(255,255,255,0.8);">Quantum Acquisition</p>
                                <p style="font-family: 'Sora', sans-serif; font-size: 0.7rem; color: rgba(255,255,255,0.4); line-height: 1.4;">People put their jobs on the line. COS delivered.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pipeline --}}
                <div class="pl11-stagger-6" style="margin-bottom: 10px;">
                    <span style="font-family: 'Sora', sans-serif; font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.15em; color: rgba(255,255,255,0.3); display: block; margin-bottom: 6px;">Pipeline</span>
                    <div class="pl11-pipeline-grid">
                        <div class="pl11-pipeline-node pl11-pipe-1">
                            <span>CityFibre</span>
                        </div>
                        <div class="pl11-pipeline-node pl11-pipe-2">
                            <span>Gigapower</span>
                        </div>
                        <div class="pl11-pipeline-node pl11-pipe-3">
                            <span>Unwired</span>
                        </div>
                        <div class="pl11-pipeline-node pl11-pipe-4">
                            <span>TELUS</span>
                        </div>
                    </div>
                </div>

                {{-- Word is out --}}
                <div class="pl11-stagger-7">
                    <div class="flex items-center gap-3">
                        <div style="width: 24px; height: 1px; background: linear-gradient(to right, transparent, rgba(72,170,165,0.25));"></div>
                        <p style="font-family: 'Sora', sans-serif; font-size: 0.75rem; color: rgba(255,255,255,0.35); font-style: italic;">
                            Word is out.
                        </p>
                    </div>
                </div>

            </div>

            {{-- BE Column --}}
            <div class="pl11-stagger-be flex flex-col" style="padding-left: 28px;">

                <div class="pl11-col-header" style="margin-bottom: 14px;">
                    <span class="pl11-product-badge pl11-be-badge">BE</span>
                    <span class="pl11-col-subtitle">Foundation</span>
                </div>

                {{-- Status --}}
                <div class="pl11-be-status" style="margin-bottom: 14px;">
                    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                        <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 10px rgba(17,193,143,0.5);"></div>
                        <span style="font-family: 'Cairo', sans-serif; font-weight: 800; font-size: 0.95rem; color: rgba(255,255,255,0.85);">Stronger than ever</span>
                    </div>
                    <p style="font-family: 'Sora', sans-serif; font-size: 0.75rem; color: rgba(255,255,255,0.4); line-height: 1.5;">
                        The original product is kicking. Shaping up to be a great ISP platform.
                    </p>
                </div>

                {{-- Customer grid --}}
                <div class="pl11-stagger-be2" style="margin-bottom: 14px;">
                    <span style="font-family: 'Sora', sans-serif; font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.15em; color: rgba(17,193,143,0.5); display: block; margin-bottom: 8px;">Active Customers</span>
                    <div style="display: flex; flex-direction: column; gap: 6px;">
                        <div class="pl11-be-customer pl11-be-cust-1">
                            <div class="pl11-pulse-dot pl11-pulse-be"></div>
                            <span>CitySide</span>
                        </div>
                        <div class="pl11-be-customer pl11-be-cust-2">
                            <div class="pl11-pulse-dot pl11-pulse-be"></div>
                            <span>Lyte</span>
                        </div>
                        <div class="pl11-be-customer pl11-be-cust-3">
                            <div class="pl11-pulse-dot pl11-pulse-be"></div>
                            <span>Hunter</span>
                        </div>
                        <div class="pl11-be-customer pl11-be-cust-4">
                            <div class="pl11-pulse-dot pl11-pulse-be"></div>
                            <span>Clearpath</span>
                        </div>
                        <div class="pl11-be-customer pl11-be-cust-5">
                            <div class="pl11-pulse-dot pl11-pulse-be"></div>
                            <span>Fiber First</span>
                        </div>
                    </div>
                </div>

                {{-- Kicker --}}
                <div class="pl11-stagger-be3" style="margin-top: auto;">
                    <div style="padding: 10px 14px; border-radius: 8px; background: rgba(17,193,143,0.04); border: 1px solid rgba(17,193,143,0.1);">
                        <p style="font-family: 'Sora', sans-serif; font-size: 0.75rem; color: rgba(17,193,143,0.8); font-weight: 500; line-height: 1.5;">
                            The foundation COS was built on. Still growing.
                        </p>
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
    .pl11-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: clamp(1.9rem, 4vw, 2.8rem);
        letter-spacing: -0.03em;
        line-height: 1.08;
        color: rgba(255,255,255,0.9);
    }

    /* Background glows */
    .pl11-glow-left {
        position: absolute;
        width: 600px; height: 600px;
        left: -5%; top: 20%;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(17,193,143,0.04) 0%, transparent 70%);
        filter: blur(80px);
        animation: pl11-breathe 10s ease-in-out infinite;
    }
    .pl11-glow-right {
        position: absolute;
        width: 500px; height: 500px;
        right: -5%; top: 30%;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(72,170,165,0.04) 0%, transparent 70%);
        filter: blur(80px);
        animation: pl11-breathe 12s ease-in-out infinite reverse;
    }
    @keyframes pl11-breathe {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.08); opacity: 0.6; }
    }

    /* Column headers */
    .pl11-col-header {
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .pl11-product-badge {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 1.1rem;
        letter-spacing: 0.05em;
        padding: 3px 12px;
        border-radius: 6px;
        border: 1px solid;
    }
    .pl11-fsm-badge {
        background: rgba(17,193,143,0.1);
        border-color: rgba(17,193,143,0.25);
        color: #11C18F;
    }
    .pl11-we-badge {
        background: rgba(72,170,165,0.1);
        border-color: rgba(72,170,165,0.25);
        color: #48AAA5;
    }
    .pl11-col-subtitle {
        font-family: 'Sora', sans-serif;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        color: rgba(255,255,255,0.25);
    }

    /* Network grid */
    .pl11-network-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 6px;
    }
    .pl11-network {
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 7px 10px;
        border-radius: 6px;
        background: rgba(17,193,143,0.04);
        border: 1px solid rgba(17,193,143,0.08);
    }
    .pl11-pulse-dot {
        width: 6px; height: 6px;
        border-radius: 50%;
        background: #11C18F;
        box-shadow: 0 0 6px rgba(17,193,143,0.4);
        flex-shrink: 0;
    }
    .pl11-network-name {
        font-family: 'Sora', sans-serif;
        font-weight: 600;
        font-size: 0.7rem;
        color: rgba(255,255,255,0.7);
        letter-spacing: 0.05em;
    }

    /* Pulse animation variants */
    .pl11-pulse-1 { animation: pl11-pulse 3.0s ease-in-out 0.0s infinite; }
    .pl11-pulse-2 { animation: pl11-pulse 3.0s ease-in-out 0.4s infinite; }
    .pl11-pulse-3 { animation: pl11-pulse 3.0s ease-in-out 0.8s infinite; }
    .pl11-pulse-4 { animation: pl11-pulse 3.0s ease-in-out 1.2s infinite; }
    .pl11-pulse-5 { animation: pl11-pulse 3.0s ease-in-out 1.6s infinite; }
    .pl11-pulse-6 { animation: pl11-pulse 3.0s ease-in-out 2.0s infinite; }
    .pl11-pulse-7 { animation: pl11-pulse 3.0s ease-in-out 2.4s infinite; }
    @keyframes pl11-pulse {
        0%, 100% { box-shadow: 0 0 8px rgba(17,193,143,0.4); transform: scale(1); }
        50% { box-shadow: 0 0 16px rgba(17,193,143,0.7); transform: scale(1.3); }
    }

    /* Kudos */
    .pl11-kudos {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    /* Assessment card */
    .pl11-assessment {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        padding: 10px 14px;
        border-radius: 8px;
        background: rgba(17,193,143,0.04);
        border: 1px solid rgba(17,193,143,0.1);
    }
    .pl11-assess-icon {
        flex-shrink: 0;
        margin-top: 2px;
    }

    /* AT&T block */
    .pl11-att-block {
        padding: 14px 16px;
        border-radius: 10px;
        background: rgba(72,170,165,0.05);
        border: 1px solid rgba(72,170,165,0.12);
    }
    .pl11-att-header {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 8px;
    }
    .pl11-att-dot {
        width: 8px; height: 8px;
        border-radius: 50%;
        background: #48AAA5;
        box-shadow: 0 0 10px rgba(72,170,165,0.5);
    }
    .pl11-att-name {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 1rem;
        color: rgba(255,255,255,0.85);
    }
    .pl11-att-status {
        font-family: 'Sora', sans-serif;
        font-size: 0.7rem;
        color: rgba(72,170,165,0.7);
        text-transform: uppercase;
        letter-spacing: 0.1em;
        padding: 2px 8px;
        border-radius: 4px;
        background: rgba(72,170,165,0.08);
    }
    .pl11-att-desc {
        font-family: 'Sora', sans-serif;
        font-size: 0.82rem;
        color: rgba(255,255,255,0.4);
        line-height: 1.6;
    }

    /* Trust badge */
    .pl11-badge-border {
        padding: 1px;
        border-radius: 10px;
        background: linear-gradient(135deg, rgba(17,193,143,0.2), rgba(72,170,165,0.1), rgba(17,193,143,0.05));
    }
    .pl11-badge-inner {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        padding: 10px 14px;
        border-radius: 9px;
        background: rgba(17,193,143,0.03);
    }

    /* Pipeline */
    .pl11-pipeline-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 8px;
    }
    .pl11-pipeline-node {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 6px 10px;
        border-radius: 6px;
        border: 1px dashed rgba(255,255,255,0.08);
        background: rgba(255,255,255,0.01);
    }
    .pl11-pipeline-node span {
        font-family: 'Sora', sans-serif;
        font-size: 0.78rem;
        color: rgba(255,255,255,0.35);
        font-weight: 500;
    }

    /* BE column */
    .pl11-be-badge {
        background: rgba(17,193,143,0.1);
        border-color: rgba(17,193,143,0.25);
        color: #11C18F;
    }
    .pl11-be-status {
        padding: 12px 14px;
        border-radius: 10px;
        background: rgba(17,193,143,0.04);
        border: 1px solid rgba(17,193,143,0.1);
    }
    .pl11-be-customer {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 6px 12px;
        border-radius: 6px;
        background: rgba(17,193,143,0.03);
        border: 1px solid rgba(17,193,143,0.06);
        transition: all 0.4s cubic-bezier(0.22,1,0.36,1);
    }
    .pl11-be-customer:hover {
        background: rgba(17,193,143,0.06);
        border-color: rgba(17,193,143,0.12);
        transform: translateX(3px);
    }
    .pl11-be-customer span {
        font-family: 'Sora', sans-serif;
        font-weight: 600;
        font-size: 0.75rem;
        color: rgba(255,255,255,0.7);
    }
    .pl11-pulse-be {
        animation: pl11-pulse 3.0s ease-in-out 0s infinite;
    }

    /* BE staggered reveals */
    .pl11-stagger-be { opacity: 0; animation: pl11-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 1.1s forwards; }
    .pl11-stagger-be2 { opacity: 0; animation: pl11-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 1.8s forwards; }
    .pl11-stagger-be3 { opacity: 0; animation: pl11-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 2.5s forwards; }
    .pl11-be-cust-1 { opacity: 0; animation: pl11-reveal 0.5s cubic-bezier(0.22,1,0.36,1) 1.9s forwards; }
    .pl11-be-cust-2 { opacity: 0; animation: pl11-reveal 0.5s cubic-bezier(0.22,1,0.36,1) 2.05s forwards; }
    .pl11-be-cust-3 { opacity: 0; animation: pl11-reveal 0.5s cubic-bezier(0.22,1,0.36,1) 2.2s forwards; }
    .pl11-be-cust-4 { opacity: 0; animation: pl11-reveal 0.5s cubic-bezier(0.22,1,0.36,1) 2.35s forwards; }
    .pl11-be-cust-5 { opacity: 0; animation: pl11-reveal 0.5s cubic-bezier(0.22,1,0.36,1) 2.5s forwards; }

    /* Network staggered reveals */
    .pl11-net-1 { opacity: 0; animation: pl11-reveal 0.6s cubic-bezier(0.22,1,0.36,1) 1.4s forwards; }
    .pl11-net-2 { opacity: 0; animation: pl11-reveal 0.6s cubic-bezier(0.22,1,0.36,1) 1.55s forwards; }
    .pl11-net-3 { opacity: 0; animation: pl11-reveal 0.6s cubic-bezier(0.22,1,0.36,1) 1.7s forwards; }
    .pl11-net-4 { opacity: 0; animation: pl11-reveal 0.6s cubic-bezier(0.22,1,0.36,1) 1.85s forwards; }
    .pl11-net-5 { opacity: 0; animation: pl11-reveal 0.6s cubic-bezier(0.22,1,0.36,1) 2.0s forwards; }
    .pl11-net-6 { opacity: 0; animation: pl11-reveal 0.6s cubic-bezier(0.22,1,0.36,1) 2.15s forwards; }
    .pl11-net-7 { opacity: 0; animation: pl11-reveal 0.6s cubic-bezier(0.22,1,0.36,1) 2.3s forwards; }

    /* Pipeline staggered */
    .pl11-pipe-1 { opacity: 0; animation: pl11-reveal 0.6s cubic-bezier(0.22,1,0.36,1) 2.2s forwards; }
    .pl11-pipe-2 { opacity: 0; animation: pl11-reveal 0.6s cubic-bezier(0.22,1,0.36,1) 2.35s forwards; }
    .pl11-pipe-3 { opacity: 0; animation: pl11-reveal 0.6s cubic-bezier(0.22,1,0.36,1) 2.5s forwards; }
    .pl11-pipe-4 { opacity: 0; animation: pl11-reveal 0.6s cubic-bezier(0.22,1,0.36,1) 2.65s forwards; }

    /* Reveal animations */
    @keyframes pl11-reveal {
        from { opacity: 0; transform: translateY(20px); filter: blur(3px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes pl11-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .pl11-stagger-1 { opacity: 0; animation: pl11-reveal-down 0.8s ease-out 0.1s forwards; }
    .pl11-stagger-2 { opacity: 0; animation: pl11-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 0.3s forwards; }
    .pl11-stagger-3 { opacity: 0; animation: pl11-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 0.7s forwards; }
    .pl11-stagger-4 { opacity: 0; animation: pl11-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 0.9s forwards; }
    .pl11-stagger-5 { opacity: 0; animation: pl11-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 2.5s forwards; }
    .pl11-stagger-6 { opacity: 0; animation: pl11-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 2.8s forwards; }
    .pl11-stagger-7 { opacity: 0; animation: pl11-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 3.1s forwards; }
</style>
