<div class="relative min-h-screen overflow-hidden bg-[#080c14]">

    {{-- Aurora background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="s9-aurora s9-aurora-1"></div>
        <div class="s9-aurora s9-aurora-2"></div>
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 80%);"></div>
    </div>

    {{-- Page layout --}}
    <div class="s9-page relative z-10">

        {{-- Top bar --}}
        <div class="s9-stagger-1" style="display: flex; align-items: center; justify-content: space-between; grid-column: 1 / -1;">
            <img src="/cos-systems-logo.svg" alt="COS Systems" style="width: 56px; height: 56px;" />
            <div style="display: flex; align-items: center; gap: 12px; padding: 8px 16px; border-radius: 9999px; border: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 8px #11C18F;" class="animate-pulse"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.3em; color: rgba(255,255,255,0.4); font-size: 10px; font-weight: 500;">Live</span>
            </div>
        </div>

        {{-- Headline --}}
        <div class="s9-stagger-2" style="grid-column: 1 / -1;">
            <h1 class="s9-headline">
                <span style="color: rgba(255,255,255,0.9);">The </span><span class="s9-gradient-text">Agenda</span>
            </h1>
        </div>

        {{-- ═══════════════════ DAY 1 ═══════════════════ --}}
        <div class="s9-day s9-stagger-3">
            <div class="s9-day-header">
                <div class="s9-day-num" style="color: #11C18F;">Day 1</div>
                <div class="s9-day-date">Mon, Feb 9</div>
                <div class="s9-day-theme">Kickoff</div>
                <div class="s9-day-loc">Venture X</div>
            </div>
            <div class="s9-sessions">
                <div class="s9-session">
                    <div class="s9-time">3:00 – 4:00</div>
                    <div class="s9-name">Welcome & Conference Goals</div>
                    <div class="s9-person">Sajan</div>
                </div>
                <div class="s9-session">
                    <div class="s9-time">4:00 – 5:00</div>
                    <div class="s9-name">Current State of Each Product</div>
                    <div class="s9-person">Sajan</div>
                </div>
            </div>
        </div>

        {{-- ═══════════════════ DAY 2 ═══════════════════ --}}
        <div class="s9-day s9-stagger-4">
            <div class="s9-day-header">
                <div class="s9-day-num" style="color: #11C18F;">Day 2</div>
                <div class="s9-day-date">Tue, Feb 10</div>
                <div class="s9-day-theme">Context + Expectations</div>
                <div class="s9-day-loc">Residence Inn</div>
            </div>
            <div class="s9-sessions">
                <div class="s9-session">
                    <div class="s9-time">8:00 – 9:15</div>
                    <div class="s9-name">Roles, Responsibilities & Expectations</div>
                    <div class="s9-person">Sajan</div>
                </div>
                <div class="s9-session">
                    <div class="s9-time">9:15 – 10:10</div>
                    <div class="s9-name s9-name-bold">Tooling Block</div>
                </div>
                <div class="s9-session s9-sub">
                    <div class="s9-name">• Tooling: FSM</div>
                    <div class="s9-person">Rogers</div>
                </div>
                <div class="s9-session s9-sub">
                    <div class="s9-name">• Tooling: Wholesale Engine</div>
                    <div class="s9-person">Sajan</div>
                </div>
                <div class="s9-break"></div>
                <div class="s9-session">
                    <div class="s9-time">10:25 – 11:10</div>
                    <div class="s9-name">"Cleaning The Kitchen"</div>
                    <div class="s9-person">Dustin</div>
                </div>
                <div class="s9-lunch">Lunch + Day-to-Day</div>
                <div class="s9-session">
                    <div class="s9-time">1:00 – 2:00</div>
                    <div class="s9-name">ISO Overview / Training</div>
                    <div class="s9-person">Sajan</div>
                </div>
                <div class="s9-break"></div>
                <div class="s9-session">
                    <div class="s9-time">2:15 – 3:15</div>
                    <div class="s9-name">AI in Dev: Features & Release Notes</div>
                    <div class="s9-person">Rogers, Zack</div>
                </div>
                <div class="s9-session">
                    <div class="s9-time">3:15 – 3:45</div>
                    <div class="s9-name">Linear Dashboard</div>
                    <div class="s9-person">Dustin</div>
                </div>
                <div class="s9-break"></div>
                <div class="s9-session">
                    <div class="s9-time">4:00 – 5:00</div>
                    <div class="s9-name">API / Webhook Exercise</div>
                    <div class="s9-person">All</div>
                </div>
            </div>
        </div>

        {{-- ═══════════════════ DAY 3 ═══════════════════ --}}
        <div class="s9-day s9-stagger-5">
            <div class="s9-day-header">
                <div class="s9-day-num" style="color: #48AAA5;">Day 3</div>
                <div class="s9-day-date">Wed, Feb 11</div>
                <div class="s9-day-theme">Working Sessions</div>
                <div class="s9-day-loc">Residence Inn</div>
            </div>
            <div class="s9-sessions">
                <div class="s9-session">
                    <div class="s9-time">8:00 – 9:45</div>
                    <div class="s9-name">WS: How Feature Requests Come In</div>
                    <div class="s9-person">Dustin</div>
                </div>
                <div class="s9-break"></div>
                <div class="s9-session">
                    <div class="s9-time">10:00 – 11:30</div>
                    <div class="s9-name">WS: How Work Gets Prioritized</div>
                    <div class="s9-person">All</div>
                </div>
                <div class="s9-lunch">Lunch + Day-to-Day</div>
                <div class="s9-session">
                    <div class="s9-time">1:00 – 3:00</div>
                    <div class="s9-name">WS: Release Notes, Docs & Support</div>
                    <div class="s9-person">Zack</div>
                </div>
                <div class="s9-break"></div>
                <div class="s9-session">
                    <div class="s9-time">3:15 – 4:00</div>
                    <div class="s9-name">Blameless Post-Mortem: 2 Outages</div>
                    <div class="s9-person">Sajan, Rogers</div>
                </div>
                <div class="s9-break"></div>
                <div class="s9-session">
                    <div class="s9-time">4:15 – 4:45</div>
                    <div class="s9-name">WS: Bugs & Support Escalations</div>
                    <div class="s9-person">All</div>
                </div>
                <div class="s9-session">
                    <div class="s9-time">4:45 – 5:00</div>
                    <div class="s9-name">Open Q&A / Closing</div>
                    <div class="s9-person">Sajan</div>
                </div>
            </div>
        </div>

        {{-- ═══════════════════ DAY 4 ═══════════════════ --}}
        <div class="s9-day s9-stagger-6">
            <div class="s9-day-header">
                <div class="s9-day-num" style="color: #48AAA5;">Day 4</div>
                <div class="s9-day-date">Thu, Feb 12</div>
                <div class="s9-day-theme">ISO Work</div>
                <div class="s9-day-loc">TBD</div>
            </div>
            <div class="s9-sessions">
                <div class="s9-session">
                    <div class="s9-time">8:00 – TBD</div>
                    <div class="s9-name">ISO Work</div>
                    <div class="s9-person">All</div>
                </div>
                <div class="s9-session s9-session-note">
                    <div class="s9-name" style="color: rgba(255,255,255,0.2); font-style: italic;">Until people leave for flights</div>
                </div>
            </div>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&display=swap" rel="stylesheet">
<style>
    /* Page layout — 4 columns */
    .s9-page {
        display: grid;
        grid-template-columns: 0.7fr 1.4fr 1.4fr 0.5fr;
        grid-template-rows: auto auto auto;
        min-height: 100vh;
        padding: 24px 48px 70px;
        gap: 12px 0;
        align-content: center;
        max-width: 1440px;
        margin: 0 auto;
    }

    /* Headline */
    .s9-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(2rem, 4vw, 3.2rem);
        letter-spacing: -0.03em;
        line-height: 1.05;
    }

    .s9-gradient-text {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 40%, #11C18F 70%, #AFEFCD 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: s9-shimmer 6s ease-in-out infinite;
    }

    @keyframes s9-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    /* Day columns */
    .s9-day {
        display: flex;
        flex-direction: column;
        border-left: 1px solid rgba(255,255,255,0.04);
        padding: 0 16px;
    }

    .s9-day:first-of-type {
        border-left: none;
        padding-left: 0;
    }

    /* Day header */
    .s9-day-header {
        padding-bottom: 12px;
        margin-bottom: 8px;
        border-bottom: 1px solid rgba(255,255,255,0.06);
    }

    .s9-day-num {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        margin-bottom: 2px;
    }

    .s9-day-date {
        font-size: 0.65rem;
        color: rgba(255,255,255,0.3);
        margin-bottom: 6px;
    }

    .s9-day-theme {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 1rem;
        color: rgba(255,255,255,0.75);
        letter-spacing: -0.01em;
        line-height: 1.15;
    }

    .s9-day-loc {
        font-size: 0.58rem;
        color: rgba(255,255,255,0.2);
        margin-top: 4px;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    /* Sessions list */
    .s9-sessions {
        display: flex;
        flex-direction: column;
        gap: 0;
        flex: 1;
    }

    .s9-session {
        padding: 6px 0;
        border-bottom: 1px solid rgba(255,255,255,0.02);
    }

    .s9-session:last-child {
        border-bottom: none;
    }

    .s9-time {
        font-size: 0.58rem;
        color: rgba(255,255,255,0.2);
        letter-spacing: 0.02em;
        margin-bottom: 1px;
    }

    .s9-name {
        font-size: 0.72rem;
        color: rgba(255,255,255,0.65);
        line-height: 1.35;
    }

    .s9-name-bold {
        font-weight: 700;
        color: rgba(255,255,255,0.75);
    }

    .s9-person {
        font-size: 0.56rem;
        color: rgba(17,193,143,0.55);
        margin-top: 1px;
    }

    /* Sub-items (indented) */
    .s9-sub {
        padding-left: 10px;
        border-bottom: none;
        padding-top: 2px;
        padding-bottom: 2px;
    }

    .s9-sub .s9-name {
        font-size: 0.65rem;
        color: rgba(255,255,255,0.45);
    }

    /* Break divider */
    .s9-break {
        height: 1px;
        background: linear-gradient(to right, rgba(255,255,255,0.04), transparent);
        margin: 4px 0;
    }

    /* Lunch divider */
    .s9-lunch {
        font-family: 'Cairo', sans-serif;
        font-size: 0.55rem;
        font-weight: 700;
        color: rgba(255,255,255,0.12);
        text-transform: uppercase;
        letter-spacing: 0.12em;
        padding: 6px 0;
        margin: 2px 0;
        border-top: 1px dashed rgba(255,255,255,0.04);
        border-bottom: 1px dashed rgba(255,255,255,0.04);
    }

    /* Note row */
    .s9-session-note {
        border-bottom: none;
        padding-top: 2px;
    }

    /* Aurora */
    .s9-aurora {
        position: absolute;
        border-radius: 50%;
        filter: blur(120px);
        will-change: transform;
    }
    .s9-aurora-1 {
        width: 500px; height: 500px;
        background: radial-gradient(circle, rgba(17,193,143,0.08) 0%, transparent 70%);
        top: -10%; left: -5%;
        animation: s9-drift-1 14s ease-in-out infinite;
    }
    .s9-aurora-2 {
        width: 450px; height: 450px;
        background: radial-gradient(circle, rgba(72,170,165,0.06) 0%, transparent 70%);
        bottom: -10%; right: -8%;
        animation: s9-drift-2 16s ease-in-out infinite;
    }

    @keyframes s9-drift-1 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(30px, 20px) scale(1.1); }
    }
    @keyframes s9-drift-2 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(-40px, -20px) scale(1.08); }
    }

    /* Staggered entrances */
    @keyframes s9-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes s9-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .s9-stagger-1 { opacity: 0; animation: s9-reveal-down 0.8s ease-out 0.1s forwards; }
    .s9-stagger-2 { opacity: 0; animation: s9-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.25s forwards; }
    .s9-stagger-3 { opacity: 0; animation: s9-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.45s forwards; }
    .s9-stagger-4 { opacity: 0; animation: s9-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.65s forwards; }
    .s9-stagger-5 { opacity: 0; animation: s9-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.85s forwards; }
    .s9-stagger-6 { opacity: 0; animation: s9-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.05s forwards; }
</style>
