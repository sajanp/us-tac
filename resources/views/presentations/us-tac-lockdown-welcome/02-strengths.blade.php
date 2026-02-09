<div class="relative min-h-screen overflow-hidden bg-[#080c14]">

    {{-- Aurora background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="aurora-blob s2-aurora-1"></div>
        <div class="aurora-blob s2-aurora-2"></div>
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 80%);"></div>
    </div>

    {{-- Page layout --}}
    <div class="s2-page relative z-10">

        {{-- Top bar --}}
        <div class="s2-stagger-1" style="display: flex; align-items: center; justify-content: space-between;">
            <img src="/cos-systems-logo.svg" alt="COS Systems" style="width: 56px; height: 56px;" />
            <div style="display: flex; align-items: center; gap: 12px; padding: 8px 16px; border-radius: 9999px; border: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 8px #11C18F;" class="animate-pulse"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.3em; color: rgba(255,255,255,0.4); font-size: 10px; font-weight: 500;">Live</span>
            </div>
        </div>

        {{-- Headline --}}
        <div class="s2-stagger-2">
            <h1 class="s2-headline">
                <span style="color: rgba(255,255,255,0.9);">Strengths &amp; </span><span class="s2-gradient-text">Momentum</span>
            </h1>
            <div style="margin-top: 12px; display: flex; align-items: center; gap: 16px;">
                <div style="width: 80px; height: 1px; background: linear-gradient(to right, rgba(17,193,143,0.5), transparent);"></div>
                <span style="color: rgba(255,255,255,0.3); font-size: 0.875rem; letter-spacing: 0.025em;">What we're building on</span>
            </div>
        </div>

        {{-- Cards grid --}}
        <div class="s2-grid">

            {{-- Brand --}}
            <div class="s2-stagger-3" style="grid-column: span 4;">
                <div class="s2-card group" style="height: 100%; position: relative; overflow: hidden;">
                    <div style="position: absolute; top: -40px; right: -40px; width: 160px; height: 160px; background: rgba(17,193,143,0.04); transform: rotate(30deg); transition: background 0.7s;" class="group-hover:!bg-[rgba(17,193,143,0.08)]"></div>
                    <div style="position: relative; z-index: 1; padding: 28px; display: flex; flex-direction: column; height: 100%;">
                        <div class="s2-icon-ring" style="margin-bottom: 16px;">
                            <svg style="width: 24px; height: 24px; color: #11C18F;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456z" />
                            </svg>
                        </div>
                        <h3 class="s2-card-title">Brand is Landing</h3>
                        <p class="s2-card-body" style="flex: 1;">COS branding is out there and it's loved. The market recognizes us.</p>
                        <div style="margin-top: 16px; padding-top: 12px; border-top: 1px solid rgba(255,255,255,0.04);">
                            <span style="color: #11C18F; font-size: 1.5rem; font-weight: 700; font-family: 'Cairo', sans-serif;">Visible</span>
                            <span style="color: rgba(255,255,255,0.25); font-size: 0.875rem; margin-left: 8px;">&amp; growing</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Real Customers --}}
            <div class="s2-stagger-4" style="grid-column: span 4;">
                <div class="s2-card group" style="height: 100%; position: relative; overflow: hidden;">
                    <div style="position: absolute; bottom: -40px; left: -40px; width: 160px; height: 160px; background: rgba(12,117,119,0.05); transform: rotate(-30deg); transition: background 0.7s;" class="group-hover:!bg-[rgba(12,117,119,0.1)]"></div>
                    <div style="position: relative; z-index: 1; padding: 28px; display: flex; flex-direction: column; height: 100%;">
                        <div class="s2-icon-ring s2-icon-teal" style="margin-bottom: 16px;">
                            <svg style="width: 24px; height: 24px; color: #48AAA5;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                        </div>
                        <h3 class="s2-card-title">Real Customers</h3>
                        <p class="s2-card-body" style="flex: 1;">Real people using BE, WE, and FSM every day. Validation, feedback loops, and proof it all works.</p>
                        <div style="margin-top: 16px; padding-top: 12px; border-top: 1px solid rgba(255,255,255,0.04);">
                            <span style="color: #48AAA5; font-size: 1.5rem; font-weight: 700; font-family: 'Cairo', sans-serif;">In production</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bigger Doors --}}
            <div class="s2-stagger-5" style="grid-column: span 4;">
                <div class="s2-card group" style="height: 100%; position: relative; overflow: hidden;">
                    <div style="position: absolute; top: -32px; left: -32px; width: 140px; height: 140px; background: rgba(17,193,143,0.03); transform: rotate(45deg); transition: background 0.7s;" class="group-hover:!bg-[rgba(17,193,143,0.07)]"></div>
                    <div style="position: relative; z-index: 1; padding: 28px; display: flex; flex-direction: column; height: 100%;">
                        <div class="s2-icon-ring" style="margin-bottom: 16px;">
                            <svg style="width: 24px; height: 24px; color: #11C18F;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438a2.25 2.25 0 01-1.228 2.392 9.027 9.027 0 01-3.196.448" />
                            </svg>
                        </div>
                        <h3 class="s2-card-title">Bigger Doors Opening</h3>
                        <p class="s2-card-body" style="flex: 1;">Networking and opportunities expanding across the board.</p>
                        <div style="margin-top: 16px; padding-top: 12px; border-top: 1px solid rgba(255,255,255,0.04); display: flex; align-items: center; gap: 10px; flex-wrap: wrap;">
                            <span class="s2-name-tag">AT&amp;T</span>
                            <span class="s2-name-tag">Lumen</span>
                            <span class="s2-name-tag">Unwired</span>
                            <span class="s2-name-tag">Iceland</span>
                            <span class="s2-name-tag">Nigeria</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Product Traction --}}
            <div class="s2-stagger-6" style="grid-column: span 8;">
                <div class="s2-card group" style="position: relative; overflow: hidden;">
                    <div style="position: absolute; top: 0; right: 0; bottom: 0; width: 25%; background: linear-gradient(to left, rgba(17,193,143,0.03), transparent); transition: background 0.7s;"></div>
                    <div style="position: relative; z-index: 1; padding: 28px;">
                        <h3 class="s2-card-title" style="margin-bottom: 16px;">Product Traction — All Three Engines</h3>
                        <div style="display: flex; gap: 24px;">
                            {{-- BE --}}
                            <div style="flex: 1; padding: 16px; border-radius: 10px; background: rgba(17,193,143,0.04); border: 1px solid rgba(17,193,143,0.08);">
                                <div style="font-family: 'Cairo', sans-serif; font-weight: 800; font-size: 0.75rem; color: #11C18F; letter-spacing: 0.05em; margin-bottom: 6px;">BE</div>
                                <p class="s2-card-body">Driving core revenue and anchoring customer relationships</p>
                            </div>
                            {{-- WE --}}
                            <div style="flex: 1; padding: 16px; border-radius: 10px; background: rgba(72,170,165,0.04); border: 1px solid rgba(72,170,165,0.08);">
                                <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                    <span style="font-family: 'Cairo', sans-serif; font-weight: 800; font-size: 0.75rem; color: #48AAA5; letter-spacing: 0.05em;">WE</span>
                                    <span class="s2-name-tag" style="font-size: 0.65rem; padding: 2px 8px;">2 launches</span>
                                </div>
                                <p class="s2-card-body">Two new customer launches expanding our footprint</p>
                            </div>
                            {{-- FSM --}}
                            <div style="flex: 1; padding: 16px; border-radius: 10px; background: rgba(17,193,143,0.04); border: 1px solid rgba(17,193,143,0.08);">
                                <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                    <span style="font-family: 'Cairo', sans-serif; font-weight: 800; font-size: 0.75rem; color: #11C18F; letter-spacing: 0.05em;">FSM</span>
                                    <span class="s2-name-tag" style="font-size: 0.65rem; padding: 2px 8px;">7 launches</span>
                                </div>
                                <p class="s2-card-body">Seven new customers in 2025 — fastest growing product</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Team Growth --}}
            <div class="s2-stagger-7" style="grid-column: span 4;">
                <div class="s2-card group" style="height: 100%; position: relative; overflow: hidden;">
                    <div style="position: absolute; top: 0; left: 0; bottom: 0; width: 50%; background: linear-gradient(to right, rgba(12,117,119,0.04), transparent); transition: background 0.7s;"></div>
                    <div style="position: relative; z-index: 1; padding: 28px; display: flex; flex-direction: column; height: 100%;">
                        <div style="flex-shrink: 0; margin-bottom: 12px;">
                            <div class="s2-stat-number s2-stat-teal">US</div>
                            <div style="color: rgba(255,255,255,0.3); font-size: 0.8rem; letter-spacing: 0.025em; margin-top: 2px;">footprint</div>
                        </div>
                        <h3 class="s2-card-title">Team Has Grown</h3>
                        <p class="s2-card-body">Strong US presence across the board — time to put it to good use.</p>
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
    .s2-page {
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
    .s2-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(2.5rem, 5vw, 4.5rem);
        letter-spacing: -0.03em;
        line-height: 1;
    }

    .s2-gradient-text {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 40%, #11C18F 70%, #AFEFCD 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: s2-shimmer 6s ease-in-out infinite;
    }

    @keyframes s2-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    /* Aurora */
    .aurora-blob {
        position: absolute;
        border-radius: 50%;
        filter: blur(120px);
        will-change: transform;
    }
    .s2-aurora-1 {
        width: 500px; height: 500px;
        background: radial-gradient(circle, rgba(17,193,143,0.1) 0%, transparent 70%);
        top: -10%; left: -5%;
        animation: s2-drift-1 14s ease-in-out infinite;
    }
    .s2-aurora-2 {
        width: 450px; height: 450px;
        background: radial-gradient(circle, rgba(12,117,119,0.08) 0%, transparent 70%);
        bottom: -15%; right: -10%;
        animation: s2-drift-2 16s ease-in-out infinite;
    }

    @keyframes s2-drift-1 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(30px, 20px) scale(1.1); }
    }
    @keyframes s2-drift-2 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(-40px, -20px) scale(1.08); }
    }

    /* Grid */
    .s2-grid {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 16px;
        align-self: start;
    }

    /* Cards */
    .s2-card {
        background: rgba(255,255,255,0.015);
        border: 1px solid rgba(255,255,255,0.04);
        border-radius: 16px;
        transition: all 0.6s cubic-bezier(0.22, 1, 0.36, 1);
    }
    .s2-card:hover {
        border-color: rgba(255,255,255,0.08);
        background: rgba(255,255,255,0.025);
        transform: translateY(-2px);
    }

    .s2-card-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 1.15rem;
        color: white;
        letter-spacing: -0.01em;
        margin-bottom: 8px;
    }

    .s2-card-body {
        color: rgba(255,255,255,0.35);
        font-size: 0.85rem;
        line-height: 1.6;
    }

    /* Icon ring */
    .s2-icon-ring {
        width: 44px; height: 44px;
        border-radius: 12px;
        background: linear-gradient(135deg, rgba(17,193,143,0.12), rgba(17,193,143,0.04));
        border: 1px solid rgba(17,193,143,0.1);
        display: flex; align-items: center; justify-content: center;
        transition: all 0.6s ease;
    }
    .s2-icon-teal {
        background: linear-gradient(135deg, rgba(12,117,119,0.15), rgba(12,117,119,0.04));
        border-color: rgba(72,170,165,0.1);
    }
    .s2-card:hover .s2-icon-ring {
        border-color: rgba(17,193,143,0.3);
        box-shadow: 0 0 25px -5px rgba(17,193,143,0.12);
    }
    .s2-card:hover .s2-icon-teal {
        border-color: rgba(72,170,165,0.3);
        box-shadow: 0 0 25px -5px rgba(72,170,165,0.12);
    }

    /* Name tags */
    .s2-name-tag {
        display: inline-block;
        padding: 3px 12px;
        border-radius: 6px;
        border: 1px solid rgba(17,193,143,0.15);
        background: rgba(17,193,143,0.05);
        color: #11C18F;
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: 0.02em;
        transition: all 0.4s ease;
    }
    .s2-card:hover .s2-name-tag {
        border-color: rgba(17,193,143,0.3);
        background: rgba(17,193,143,0.08);
    }

    /* Stat number */
    .s2-stat-number {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 3rem;
        line-height: 1;
        color: #11C18F;
        letter-spacing: -0.03em;
    }
    .s2-stat-teal {
        color: #48AAA5;
    }

    /* Staggered entrances */
    @keyframes s2-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes s2-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .s2-stagger-1 { opacity: 0; animation: s2-reveal-down 0.8s ease-out 0.1s forwards; }
    .s2-stagger-2 { opacity: 0; animation: s2-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.25s forwards; }
    .s2-stagger-3 { opacity: 0; animation: s2-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.4s forwards; }
    .s2-stagger-4 { opacity: 0; animation: s2-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.55s forwards; }
    .s2-stagger-5 { opacity: 0; animation: s2-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.7s forwards; }
    .s2-stagger-6 { opacity: 0; animation: s2-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.85s forwards; }
    .s2-stagger-7 { opacity: 0; animation: s2-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.0s forwards; }
</style>
