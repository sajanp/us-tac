<div class="relative min-h-screen overflow-hidden bg-[#080c14]">

    {{-- Aurora background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="s7-aurora s7-aurora-1"></div>
        <div class="s7-aurora s7-aurora-2"></div>
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 80%);"></div>
    </div>

    {{-- Page layout --}}
    <div class="s7-page relative z-10">

        {{-- Top bar --}}
        <div class="s7-stagger-1" style="display: flex; align-items: center; justify-content: space-between;">
            <img src="/cos-systems-logo.svg" alt="COS Systems" style="width: 56px; height: 56px;" />
            <div style="display: flex; align-items: center; gap: 12px; padding: 8px 16px; border-radius: 9999px; border: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 8px #11C18F;" class="animate-pulse"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.3em; color: rgba(255,255,255,0.4); font-size: 10px; font-weight: 500;">Live</span>
            </div>
        </div>

        {{-- Headline --}}
        <div class="s7-stagger-2">
            <h1 class="s7-headline">
                <span style="color: rgba(255,255,255,0.3);">So, </span><span style="color: rgba(255,255,255,0.9);">why are </span><span class="s7-gradient-text">we here?</span>
            </h1>
        </div>

        {{-- The reveal --}}
        <div class="s7-stagger-3" style="max-width: 780px;">
            <p style="color: rgba(255,255,255,0.5); font-size: 1.2rem; line-height: 1.75;">
                In the past 6 weeks, this room has quietly done something special. We took a product's development side and made it run like <span style="color: rgba(255,255,255,0.85); font-weight: 600;">clockwork.</span>
            </p>
        </div>

        {{-- Clockwork cadences --}}
        <div class="s7-stagger-4 s7-cadences">

            <div class="s7-cadence group">
                <div class="s7-cadence-inner">
                    {{-- Concentric ring visual --}}
                    <div class="s7-ring-wrap">
                        <div class="s7-ring s7-ring-outer"></div>
                        <div class="s7-ring s7-ring-inner"></div>
                        <div class="s7-ring-dot"></div>
                    </div>
                    <div class="s7-cadence-text">
                        <div class="s7-cadence-label" style="color: #11C18F;">Day to day</div>
                        <div class="s7-cadence-desc">Standups, reviews, blockers cleared — the rhythm is locked in.</div>
                    </div>
                </div>
            </div>

            <svg class="s7-connector" viewBox="0 0 40 12" fill="none"><path d="M0 6h36M32 1l5 5-5 5" stroke="rgba(17,193,143,0.25)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>

            <div class="s7-cadence group">
                <div class="s7-cadence-inner">
                    <div class="s7-ring-wrap">
                        <div class="s7-ring s7-ring-outer s7-ring-teal"></div>
                        <div class="s7-ring s7-ring-inner s7-ring-teal"></div>
                        <div class="s7-ring-dot s7-dot-teal"></div>
                    </div>
                    <div class="s7-cadence-text">
                        <div class="s7-cadence-label" style="color: #48AAA5;">Week to week</div>
                        <div class="s7-cadence-desc">Cycles shipping, priorities clear, velocity predictable.</div>
                    </div>
                </div>
            </div>

            <svg class="s7-connector" viewBox="0 0 40 12" fill="none"><path d="M0 6h36M32 1l5 5-5 5" stroke="rgba(17,193,143,0.25)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>

            <div class="s7-cadence group">
                <div class="s7-cadence-inner">
                    <div class="s7-ring-wrap">
                        <div class="s7-ring s7-ring-outer"></div>
                        <div class="s7-ring s7-ring-inner"></div>
                        <div class="s7-ring-dot"></div>
                    </div>
                    <div class="s7-cadence-text">
                        <div class="s7-cadence-label" style="color: #11C18F;">Month to month</div>
                        <div class="s7-cadence-desc">Early, but the foundation is there. Time will prove it out.</div>
                    </div>
                </div>
            </div>

        </div>

        {{-- The mission: lock in and export --}}
        <div class="s7-stagger-5 s7-mission">
            <div class="s7-mission-label">Today's mission</div>
            <div class="s7-mission-flow">
                <div class="s7-mission-step s7-mission-primary">
                    <span class="s7-mission-num" style="color: #11C18F;">01</span>
                    <span class="s7-mission-text">Lock it in so anyone here can be freed up for the next challenge</span>
                </div>
                <svg class="s7-mission-arrow" viewBox="0 0 24 12" fill="none"><path d="M0 6h20M16 1l5 5-5 5" stroke="rgba(17,193,143,0.3)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <div class="s7-mission-step">
                    <span class="s7-mission-num" style="color: #48AAA5;">02</span>
                    <span class="s7-mission-text">Export to Wholesale Engine</span>
                </div>
                <svg class="s7-mission-arrow" viewBox="0 0 24 12" fill="none"><path d="M0 6h20M16 1l5 5-5 5" stroke="rgba(17,193,143,0.3)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <div class="s7-mission-step">
                    <span class="s7-mission-num" style="color: #48AAA5;">03</span>
                    <span class="s7-mission-text">Then the broader company</span>
                </div>
            </div>
        </div>

        {{-- Status: what's done vs what's outstanding --}}
        <div class="s7-stagger-6">
            <div class="s7-status-label">But so far, we've only tackled one side of the equation.</div>
            <div class="s7-status-row">

                {{-- Development — complete --}}
                <div class="s7-status-card s7-status-complete">
                    <div class="s7-status-icon-wrap s7-status-icon-done">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M4 10.5l4 4 8-8.5" stroke="#11C18F" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <div class="s7-status-info">
                        <div class="s7-status-name" style="color: rgba(255,255,255,0.85);">Development</div>
                        <div class="s7-status-tag s7-tag-done">Complete</div>
                    </div>
                </div>

                {{-- Sales — outstanding --}}
                <div class="s7-status-card s7-status-pending">
                    <div class="s7-status-icon-wrap s7-status-icon-open">
                        <div class="s7-open-ring"></div>
                    </div>
                    <div class="s7-status-info">
                        <div class="s7-status-name" style="color: rgba(255,255,255,0.4);">Sales</div>
                        <div class="s7-status-tag s7-tag-open">Outstanding</div>
                    </div>
                </div>

                {{-- Support — outstanding --}}
                <div class="s7-status-card s7-status-pending">
                    <div class="s7-status-icon-wrap s7-status-icon-open">
                        <div class="s7-open-ring"></div>
                    </div>
                    <div class="s7-status-info">
                        <div class="s7-status-name" style="color: rgba(255,255,255,0.4);">Support</div>
                        <div class="s7-status-tag s7-tag-open">Outstanding</div>
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
    .s7-page {
        display: grid;
        grid-template-rows: auto auto auto auto auto auto;
        min-height: 100vh;
        padding: 32px 80px 80px;
        gap: 24px;
        align-content: center;
        max-width: 1280px;
        margin: 0 auto;
    }

    /* Headline */
    .s7-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(2.8rem, 5.5vw, 4.8rem);
        letter-spacing: -0.03em;
        line-height: 1.05;
    }

    .s7-gradient-text {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 40%, #11C18F 70%, #AFEFCD 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: s7-shimmer 6s ease-in-out infinite;
    }

    @keyframes s7-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    /* Cadences — the clockwork trio */
    .s7-cadences {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .s7-cadence {
        flex: 1;
        background: rgba(255,255,255,0.015);
        border: 1px solid rgba(255,255,255,0.04);
        border-radius: 14px;
        transition: all 0.6s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .s7-cadence:hover {
        border-color: rgba(255,255,255,0.08);
        background: rgba(255,255,255,0.025);
        transform: translateY(-2px);
    }

    .s7-cadence-inner {
        padding: 22px;
        display: flex;
        align-items: flex-start;
        gap: 16px;
    }

    .s7-connector {
        width: 40px;
        height: 12px;
        flex-shrink: 0;
    }

    /* Concentric ring visual */
    .s7-ring-wrap {
        position: relative;
        width: 44px;
        height: 44px;
        flex-shrink: 0;
    }

    .s7-ring {
        position: absolute;
        border-radius: 50%;
        border: 1px solid;
    }

    .s7-ring-outer {
        inset: 0;
        border-color: rgba(17,193,143,0.15);
        animation: s7-spin 12s linear infinite;
    }

    .s7-ring-inner {
        inset: 8px;
        border-color: rgba(17,193,143,0.25);
        animation: s7-spin 8s linear infinite reverse;
    }

    .s7-ring-teal .s7-ring-outer,
    .s7-ring-outer.s7-ring-teal {
        border-color: rgba(72,170,165,0.15);
    }

    .s7-ring-inner.s7-ring-teal {
        border-color: rgba(72,170,165,0.25);
    }

    .s7-ring-dot {
        position: absolute;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #11C18F;
        box-shadow: 0 0 10px rgba(17,193,143,0.4);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .s7-dot-teal {
        background: #48AAA5;
        box-shadow: 0 0 10px rgba(72,170,165,0.4);
    }

    @keyframes s7-spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .s7-cadence-label {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 1.15rem;
        letter-spacing: -0.02em;
        margin-bottom: 4px;
    }

    .s7-cadence-desc {
        color: rgba(255,255,255,0.3);
        font-size: 0.8rem;
        line-height: 1.55;
    }

    /* Mission flow */
    .s7-mission {
        padding: 22px 28px;
        background: rgba(255,255,255,0.015);
        border: 1px solid rgba(255,255,255,0.04);
        border-radius: 14px;
    }

    .s7-mission-label {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        color: rgba(255,255,255,0.25);
        margin-bottom: 16px;
    }

    .s7-mission-flow {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .s7-mission-step {
        flex: 1;
        display: flex;
        align-items: flex-start;
        gap: 10px;
        padding: 14px 16px;
        border-radius: 10px;
        background: rgba(255,255,255,0.02);
        border: 1px solid rgba(255,255,255,0.03);
    }

    .s7-mission-primary {
        background: rgba(17,193,143,0.04);
        border-color: rgba(17,193,143,0.1);
    }

    .s7-mission-num {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 0.85rem;
        flex-shrink: 0;
    }

    .s7-mission-text {
        color: rgba(255,255,255,0.55);
        font-size: 0.85rem;
        line-height: 1.5;
    }

    .s7-mission-primary .s7-mission-text {
        color: rgba(255,255,255,0.75);
    }

    .s7-mission-arrow {
        width: 24px;
        height: 12px;
        flex-shrink: 0;
    }

    /* Aurora */
    .s7-aurora {
        position: absolute;
        border-radius: 50%;
        filter: blur(120px);
        will-change: transform;
    }
    .s7-aurora-1 {
        width: 500px; height: 500px;
        background: radial-gradient(circle, rgba(17,193,143,0.1) 0%, transparent 70%);
        top: -10%; right: -5%;
        animation: s7-drift-1 14s ease-in-out infinite;
    }
    .s7-aurora-2 {
        width: 400px; height: 400px;
        background: radial-gradient(circle, rgba(12,117,119,0.07) 0%, transparent 70%);
        bottom: -10%; left: -8%;
        animation: s7-drift-2 16s ease-in-out infinite;
    }

    @keyframes s7-drift-1 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(-30px, 20px) scale(1.1); }
    }
    @keyframes s7-drift-2 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(40px, -20px) scale(1.08); }
    }

    /* Staggered entrances */
    @keyframes s7-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes s7-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .s7-stagger-1 { opacity: 0; animation: s7-reveal-down 0.8s ease-out 0.1s forwards; }
    .s7-stagger-2 { opacity: 0; animation: s7-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .s7-stagger-3 { opacity: 0; animation: s7-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.55s forwards; }
    .s7-stagger-4 { opacity: 0; animation: s7-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.85s forwards; }
    .s7-stagger-5 { opacity: 0; animation: s7-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.15s forwards; }
    .s7-stagger-6 { opacity: 0; animation: s7-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.5s forwards; }

    /* Status section — done vs outstanding */
    .s7-status-label {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 0.85rem;
        color: rgba(255,255,255,0.35);
        margin-bottom: 14px;
    }

    .s7-status-row {
        display: flex;
        gap: 14px;
    }

    .s7-status-card {
        flex: 1;
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 16px 20px;
        border-radius: 12px;
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
    }

    /* Complete card — solid green treatment */
    .s7-status-complete {
        background: rgba(17,193,143,0.06);
        border: 1px solid rgba(17,193,143,0.18);
        box-shadow: 0 0 30px -10px rgba(17,193,143,0.1);
    }

    /* Pending card — dashed outline, dim */
    .s7-status-pending {
        background: rgba(255,255,255,0.01);
        border: 1px dashed rgba(255,255,255,0.08);
    }

    /* Icon wraps */
    .s7-status-icon-wrap {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .s7-status-icon-done {
        background: rgba(17,193,143,0.12);
        border: 1px solid rgba(17,193,143,0.2);
    }

    .s7-status-icon-open {
        background: rgba(255,255,255,0.02);
        border: 1px dashed rgba(255,255,255,0.08);
    }

    .s7-open-ring {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        border: 2px dashed rgba(232,110,75,0.35);
        animation: s7-pulse-ring 3s ease-in-out infinite;
    }

    @keyframes s7-pulse-ring {
        0%, 100% { opacity: 0.5; transform: scale(1); }
        50% { opacity: 1; transform: scale(1.15); }
    }

    .s7-status-name {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 1.05rem;
        letter-spacing: -0.01em;
    }

    .s7-status-tag {
        font-size: 0.62rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.12em;
        margin-top: 2px;
    }

    .s7-tag-done {
        color: rgba(17,193,143,0.7);
    }

    .s7-tag-open {
        color: rgba(232,110,75,0.55);
    }
</style>
