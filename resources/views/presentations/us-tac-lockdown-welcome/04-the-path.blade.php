<div class="relative min-h-screen overflow-hidden bg-[#080c14]">

    {{-- Aurora background — transitioning from coral back to green (resolution) --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="s4-aurora s4-aurora-1"></div>
        <div class="s4-aurora s4-aurora-2"></div>
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 80%);"></div>
    </div>

    {{-- Page layout --}}
    <div class="s4-page relative z-10">

        {{-- Top bar --}}
        <div class="s4-stagger-1" style="display: flex; align-items: center; justify-content: space-between;">
            <img src="/cos-systems-logo.svg" alt="COS Systems" style="width: 56px; height: 56px;" />
            <div style="display: flex; align-items: center; gap: 12px; padding: 8px 16px; border-radius: 9999px; border: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 8px #11C18F;" class="animate-pulse"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.3em; color: rgba(255,255,255,0.4); font-size: 10px; font-weight: 500;">Live</span>
            </div>
        </div>

        {{-- Headline --}}
        <div class="s4-stagger-2">
            <h1 class="s4-headline">
                <span style="color: rgba(255,255,255,0.9);">How We </span><span class="s4-gradient-text">Tackle It</span>
            </h1>
            <div style="margin-top: 12px; display: flex; align-items: center; gap: 16px;">
                <div style="width: 80px; height: 1px; background: linear-gradient(to right, rgba(17,193,143,0.5), transparent);"></div>
                <span style="color: rgba(255,255,255,0.3); font-size: 0.875rem; letter-spacing: 0.025em;">Turning awareness into action</span>
            </div>
        </div>

        {{-- Solution cards — 2x2 grid --}}
        <div class="s4-grid">

            {{-- 1. Hiring with structure --}}
            <div class="s4-stagger-3" style="grid-column: span 6;">
                <div class="s4-card group" style="height: 100%; position: relative; overflow: hidden;">
                    <div style="position: absolute; top: 0; right: 0; width: 200px; height: 200px; background: radial-gradient(circle at top right, rgba(17,193,143,0.04), transparent 70%); transition: opacity 0.7s;" class="group-hover:!opacity-150"></div>
                    <div style="position: relative; z-index: 1; padding: 28px; display: flex; flex-direction: column; height: 100%;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
                            <span class="s4-number">01</span>
                            <span class="s4-problem-tag">Hiring without a plan</span>
                        </div>
                        <h3 class="s4-card-title">Structure Before Scale</h3>
                        <p class="s4-card-body" style="flex: 1;">
                            We've built a solid team in the US. But we cannot add more without clear structure — defined roles, responsibilities, and expectations for every position.
                        </p>
                        <div style="margin-top: 16px; padding-top: 14px; border-top: 1px solid rgba(255,255,255,0.04); display: flex; align-items: center; gap: 10px;">
                            <svg style="width: 18px; height: 18px; color: #11C18F;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span style="color: rgba(17,193,143,0.7); font-size: 0.8rem; font-weight: 600;">No growth without guardrails</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 2. Export what works --}}
            <div class="s4-stagger-4" style="grid-column: span 6;">
                <div class="s4-card group" style="height: 100%; position: relative; overflow: hidden;">
                    <div style="position: absolute; bottom: 0; left: 0; width: 200px; height: 200px; background: radial-gradient(circle at bottom left, rgba(12,117,119,0.05), transparent 70%); transition: opacity 0.7s;" class="group-hover:!opacity-150"></div>
                    <div style="position: relative; z-index: 1; padding: 28px; display: flex; flex-direction: column; height: 100%;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
                            <span class="s4-number s4-number-teal">02</span>
                            <span class="s4-problem-tag">Company fragmentation</span>
                        </div>
                        <h3 class="s4-card-title">Solidify, Then Export</h3>
                        <p class="s4-card-body" style="flex: 1;">
                            The past 6 weeks of work have been great. Now we solidify it so it can scale. The first real test: exporting what we've built to the broader organization we're already in.
                        </p>
                        <div style="margin-top: 16px; padding-top: 14px; border-top: 1px solid rgba(255,255,255,0.04); display: flex; align-items: center; gap: 10px;">
                            <svg style="width: 18px; height: 18px; color: #48AAA5;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span style="color: rgba(72,170,165,0.7); font-size: 0.8rem; font-weight: 600;">Prove it internally first</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 3. Process → Trust → Autonomy chain --}}
            <div class="s4-stagger-5" style="grid-column: span 6;">
                <div class="s4-card group" style="height: 100%; position: relative; overflow: hidden;">
                    <div style="position: absolute; top: 0; left: 0; width: 200px; height: 200px; background: radial-gradient(circle at top left, rgba(17,193,143,0.04), transparent 70%); transition: opacity 0.7s;" class="group-hover:!opacity-150"></div>
                    <div style="position: relative; z-index: 1; padding: 28px; display: flex; flex-direction: column; height: 100%;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
                            <span class="s4-number">03</span>
                            <span class="s4-problem-tag">Wrong autonomy levels</span>
                        </div>
                        <h3 class="s4-card-title">The Trust Chain</h3>

                        {{-- Visual chain --}}
                        <div class="s4-chain">
                            <div class="s4-chain-node s4-chain-node-1">
                                <span class="s4-chain-label">Process</span>
                            </div>
                            <svg class="s4-chain-arrow" viewBox="0 0 24 12" fill="none"><path d="M0 6h20M16 1l5 5-5 5" stroke="rgba(17,193,143,0.4)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <div class="s4-chain-node s4-chain-node-2">
                                <span class="s4-chain-label">Trust</span>
                            </div>
                            <svg class="s4-chain-arrow" viewBox="0 0 24 12" fill="none"><path d="M0 6h20M16 1l5 5-5 5" stroke="rgba(17,193,143,0.4)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <div class="s4-chain-node s4-chain-node-3">
                                <span class="s4-chain-label">Autonomy</span>
                            </div>
                            <svg class="s4-chain-arrow" viewBox="0 0 24 12" fill="none"><path d="M0 6h20M16 1l5 5-5 5" stroke="rgba(17,193,143,0.4)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <div class="s4-chain-node s4-chain-node-4">
                                <span class="s4-chain-label">Confidence</span>
                            </div>
                        </div>

                        <p class="s4-card-body" style="flex: 1; margin-top: 16px;">
                            But the process has to be visible to those not yet a part of it. You can't earn trust in a system no one can see.
                        </p>
                    </div>
                </div>
            </div>

            {{-- 4. Decision-making culture --}}
            <div class="s4-stagger-6" style="grid-column: span 6;">
                <div class="s4-card group" style="height: 100%; position: relative; overflow: hidden;">
                    <div style="position: absolute; bottom: 0; right: 0; width: 200px; height: 200px; background: radial-gradient(circle at bottom right, rgba(12,117,119,0.05), transparent 70%); transition: opacity 0.7s;" class="group-hover:!opacity-150"></div>
                    <div style="position: relative; z-index: 1; padding: 28px; display: flex; flex-direction: column; height: 100%;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
                            <span class="s4-number s4-number-teal">04</span>
                            <span class="s4-problem-tag">No cohesion on messaging</span>
                        </div>
                        <h3 class="s4-card-title">Decision Trees, Not Gut Calls</h3>
                        <p class="s4-card-body" style="flex: 1;">
                            Build a shared atmosphere and culture around how decisions get made. What factors should we all consider before taking the next methodical action in any given situation?
                        </p>
                        <div style="margin-top: 16px; padding-top: 14px; border-top: 1px solid rgba(255,255,255,0.04); display: flex; align-items: center; gap: 10px;">
                            <svg style="width: 18px; height: 18px; color: #48AAA5;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span style="color: rgba(72,170,165,0.7); font-size: 0.8rem; font-weight: 600;">Same playbook, every time</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&display=swap" rel="stylesheet">
<style>
    /* Page layout */
    .s4-page {
        display: grid;
        grid-template-rows: auto auto auto;
        min-height: 100vh;
        padding: 32px 80px 80px;
        gap: 24px;
        align-content: center;
        max-width: 1280px;
        margin: 0 auto;
    }

    /* Headline */
    .s4-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(2.5rem, 5vw, 4.5rem);
        letter-spacing: -0.03em;
        line-height: 1;
    }

    .s4-gradient-text {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 40%, #11C18F 70%, #AFEFCD 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: s4-shimmer 6s ease-in-out infinite;
    }

    @keyframes s4-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    /* Aurora */
    .s4-aurora {
        position: absolute;
        border-radius: 50%;
        filter: blur(120px);
        will-change: transform;
    }
    .s4-aurora-1 {
        width: 500px; height: 500px;
        background: radial-gradient(circle, rgba(17,193,143,0.1) 0%, transparent 70%);
        top: -10%; right: -5%;
        animation: s4-drift-1 14s ease-in-out infinite;
    }
    .s4-aurora-2 {
        width: 450px; height: 450px;
        background: radial-gradient(circle, rgba(12,117,119,0.08) 0%, transparent 70%);
        bottom: -15%; left: -10%;
        animation: s4-drift-2 16s ease-in-out infinite;
    }

    @keyframes s4-drift-1 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(-30px, 20px) scale(1.1); }
    }
    @keyframes s4-drift-2 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(40px, -20px) scale(1.08); }
    }

    /* Grid */
    .s4-grid {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 16px;
        align-self: start;
    }

    /* Cards */
    .s4-card {
        background: rgba(255,255,255,0.015);
        border: 1px solid rgba(255,255,255,0.04);
        border-radius: 16px;
        transition: all 0.6s cubic-bezier(0.22, 1, 0.36, 1);
    }
    .s4-card:hover {
        border-color: rgba(255,255,255,0.08);
        background: rgba(255,255,255,0.025);
        transform: translateY(-2px);
    }

    /* Number badge */
    .s4-number {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 1.1rem;
        color: #11C18F;
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        background: rgba(17,193,143,0.08);
        border: 1px solid rgba(17,193,143,0.12);
        flex-shrink: 0;
    }
    .s4-number-teal {
        color: #48AAA5;
        background: rgba(12,117,119,0.1);
        border-color: rgba(72,170,165,0.12);
    }

    /* Problem tag — references slide 3 */
    .s4-problem-tag {
        font-size: 0.7rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: rgba(232,110,75,0.5);
        padding: 3px 10px;
        border-radius: 6px;
        border: 1px solid rgba(232,110,75,0.1);
        background: rgba(232,110,75,0.03);
    }

    .s4-card-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 1.25rem;
        color: white;
        letter-spacing: -0.01em;
        margin-bottom: 10px;
    }

    .s4-card-body {
        color: rgba(255,255,255,0.35);
        font-size: 0.85rem;
        line-height: 1.65;
    }

    /* Trust chain visualization */
    .s4-chain {
        display: flex;
        align-items: center;
        gap: 6px;
        margin-top: 12px;
        padding: 14px 16px;
        border-radius: 10px;
        background: rgba(17,193,143,0.03);
        border: 1px solid rgba(17,193,143,0.06);
    }

    .s4-chain-node {
        padding: 6px 14px;
        border-radius: 8px;
        border: 1px solid rgba(17,193,143,0.15);
        background: rgba(17,193,143,0.06);
        transition: all 0.5s ease;
    }
    .s4-chain-node-1 { animation: s4-chain-pulse 4s ease-in-out 2.5s infinite; }
    .s4-chain-node-2 { animation: s4-chain-pulse 4s ease-in-out 2.8s infinite; }
    .s4-chain-node-3 { animation: s4-chain-pulse 4s ease-in-out 3.1s infinite; }
    .s4-chain-node-4 {
        border-color: rgba(17,193,143,0.25);
        background: rgba(17,193,143,0.1);
        animation: s4-chain-pulse 4s ease-in-out 3.4s infinite;
    }

    @keyframes s4-chain-pulse {
        0%, 100% { box-shadow: none; }
        50% { box-shadow: 0 0 12px rgba(17,193,143,0.15); }
    }

    .s4-chain-label {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 0.75rem;
        color: #11C18F;
        white-space: nowrap;
    }

    .s4-chain-arrow {
        width: 24px;
        height: 12px;
        flex-shrink: 0;
    }

    /* Staggered entrances */
    @keyframes s4-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes s4-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .s4-stagger-1 { opacity: 0; animation: s4-reveal-down 0.8s ease-out 0.1s forwards; }
    .s4-stagger-2 { opacity: 0; animation: s4-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.25s forwards; }
    .s4-stagger-3 { opacity: 0; animation: s4-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .s4-stagger-4 { opacity: 0; animation: s4-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.65s forwards; }
    .s4-stagger-5 { opacity: 0; animation: s4-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.85s forwards; }
    .s4-stagger-6 { opacity: 0; animation: s4-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.0s forwards; }
</style>
