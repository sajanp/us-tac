<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        {{-- Split gradient: green left (FSM), coral right (WE) --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 25% 50%, rgba(17,193,143,0.06) 0%, transparent 50%);"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 75% 50%, rgba(232,110,75,0.04) 0%, transparent 50%);"></div>
        {{-- Dot grid --}}
        <div class="absolute inset-0 opacity-[0.025]" style="background-image: radial-gradient(rgba(255,255,255,0.3) 1px, transparent 1px); background-size: 40px 40px;"></div>
        {{-- Noise --}}
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        {{-- Vignette --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 85%);"></div>
        {{-- Vertical divider glow --}}
        <div class="absolute top-0 bottom-0" style="left: 50%; width: 1px; background: linear-gradient(to bottom, transparent 5%, rgba(255,255,255,0.04) 20%, rgba(255,255,255,0.06) 50%, rgba(255,255,255,0.04) 80%, transparent 95%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 28px 56px;">

        {{-- Header --}}
        <div class="pl13-stagger-1 flex items-center justify-between" style="margin-bottom: 14px;">
            <div>
                <h1 class="pl13-headline">
                    The <span class="pl13-coral-text">Honest</span> Truth
                </h1>
            </div>
            <div class="flex items-center gap-6">
                <div class="flex items-center gap-2">
                    <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 8px rgba(17,193,143,0.5);"></div>
                    <span style="font-family: 'Sora', sans-serif; font-size: 11px; color: rgba(17,193,143,0.7); font-weight: 600; letter-spacing: 0.05em;">FSM</span>
                </div>
                <div class="flex items-center gap-2">
                    <div style="width: 8px; height: 8px; border-radius: 50%; background: #E86E4B; box-shadow: 0 0 8px rgba(232,110,75,0.5);"></div>
                    <span style="font-family: 'Sora', sans-serif; font-size: 11px; color: rgba(232,110,75,0.7); font-weight: 600; letter-spacing: 0.05em;">WE</span>
                </div>
            </div>
        </div>

        {{-- Column headers --}}
        <div class="pl13-stagger-2" style="display: grid; grid-template-columns: 110px 1fr 1fr; gap: 0; margin-bottom: 4px;">
            <div></div>
            <div class="pl13-col-header pl13-col-fsm">
                <svg width="12" height="12" fill="none" viewBox="0 0 24 24" stroke="#11C18F" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085" /></svg>
                <span>Field Service Management</span>
            </div>
            <div class="pl13-col-header pl13-col-we">
                <svg width="12" height="12" fill="none" viewBox="0 0 24 24" stroke="#E86E4B" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" /></svg>
                <span>Wholesale Engine</span>
            </div>
        </div>

        {{-- Grid rows --}}
        <div class="flex-1 flex flex-col gap-2">

            {{-- ROW 1: Development --}}
            <div class="pl13-stagger-3 pl13-row">
                <div class="pl13-row-label">
                    <div class="pl13-row-icon">
                        <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" /></svg>
                    </div>
                    <span>Development</span>
                </div>

                {{-- FSM Dev --}}
                <div class="pl13-cell pl13-cell-good">
                    <div class="pl13-cell-inner">
                        <div class="pl13-item">
                            <span class="pl13-dot pl13-dot-green"></span>
                            <span>Happy with dev flow, speed, comms</span>
                        </div>
                        <div class="pl13-item">
                            <span class="pl13-dot pl13-dot-amber"></span>
                            <span>Working concept, refinements needed</span>
                        </div>
                        <div class="pl13-item pl13-highlight-green">
                            <span class="pl13-dot pl13-dot-green"></span>
                            <span><strong>Sajan mostly out</strong> &mdash; guiding vision only</span>
                        </div>
                    </div>
                </div>

                {{-- WE Dev --}}
                <div class="pl13-cell pl13-cell-critical">
                    <div class="pl13-cell-inner">
                        <div class="pl13-item pl13-highlight-coral">
                            <span class="pl13-dot pl13-dot-coral"></span>
                            <span><strong>No process exists. Everything is Sajan.</strong></span>
                        </div>
                        <div class="pl13-item">
                            <span class="pl13-dot pl13-dot-coral"></span>
                            <span>Can't break cycle &mdash; pressure, speed, moving targets</span>
                        </div>
                        <div class="pl13-item">
                            <span class="pl13-dot pl13-dot-coral"></span>
                            <span>Nobody knows the system, what's possible, how to progress</span>
                        </div>
                        <div class="pl13-item pl13-quote-coral">
                            <span>"It's really bad."</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ROW 2: Support --}}
            <div class="pl13-stagger-4 pl13-row">
                <div class="pl13-row-label">
                    <div class="pl13-row-icon">
                        <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.712 4.33a9.027 9.027 0 011.652 1.306c.51.51.944 1.064 1.306 1.652M16.712 4.33l-3.448 4.138m3.448-4.138a9.014 9.014 0 00-9.424 0M19.67 7.288l-4.138 3.448m4.138-3.448a9.014 9.014 0 010 9.424m-4.138-5.976a3.736 3.736 0 00-.88-1.388 3.737 3.737 0 00-1.388-.88m2.268 2.268a3.765 3.765 0 010 2.528m-2.268-4.796l-4.138-3.448m4.138 3.448a3.736 3.736 0 01.88 1.388m-4.138-3.448a9.027 9.027 0 00-1.306-1.652m1.306 1.652l3.448 4.138m-3.448-4.138a9.014 9.014 0 00-9.424 0m12.872 12.872a9.027 9.027 0 01-1.652 1.306m0 0a9.014 9.014 0 01-9.424 0m9.424 0l-3.448-4.138m0 0a3.765 3.765 0 01-2.528 0m2.528 0a3.736 3.736 0 01-1.388.88m-1.14-.88a3.736 3.736 0 01-.88-1.388m0 0L4.33 16.712m4.138-3.448a3.765 3.765 0 010-2.528M4.33 16.712a9.014 9.014 0 010-9.424m0 9.424l4.138-3.448M4.33 7.288l4.138 3.448" /></svg>
                    </div>
                    <span>Support</span>
                </div>

                {{-- FSM Support --}}
                <div class="pl13-cell pl13-cell-mixed">
                    <div class="pl13-cell-inner">
                        <div class="pl13-item">
                            <span class="pl13-dot pl13-dot-green"></span>
                            <span>Zack has been a help</span>
                        </div>
                        <div class="pl13-item">
                            <span class="pl13-dot pl13-dot-green"></span>
                            <span>Rogers incredibly responsive to live issues</span>
                        </div>
                        <div class="pl13-item">
                            <span class="pl13-dot pl13-dot-amber"></span>
                            <span>Release notes & docs will help further</span>
                        </div>
                        <div class="pl13-item">
                            <span class="pl13-dot pl13-dot-coral"></span>
                            <span>No real processes &mdash; HubSpot is a mess</span>
                        </div>
                        <div class="pl13-item">
                            <span class="pl13-dot pl13-dot-amber"></span>
                            <span>Need to empower others, attack chokepoints</span>
                        </div>
                    </div>
                </div>

                {{-- WE Support --}}
                <div class="pl13-cell pl13-cell-critical">
                    <div class="pl13-cell-inner">
                        <div class="pl13-item">
                            <span class="pl13-dot pl13-dot-amber"></span>
                            <span>Limited user interaction &mdash; lower support needs</span>
                        </div>
                        <div class="pl13-item pl13-highlight-coral">
                            <span class="pl13-dot pl13-dot-coral"></span>
                            <span><strong>Sajan on call 24/7</strong></span>
                        </div>
                        <div class="pl13-item">
                            <span class="pl13-dot pl13-dot-amber"></span>
                            <span>Saks & Nick joining is a start</span>
                        </div>
                        <div class="pl13-item">
                            <span class="pl13-dot pl13-dot-coral"></span>
                            <span>No process, no tracking</span>
                        </div>
                        <div class="pl13-item">
                            <span class="pl13-dot pl13-dot-coral"></span>
                            <span>Support requires DB access / tinker snippets</span>
                        </div>
                        <div class="pl13-item">
                            <span class="pl13-dot pl13-dot-coral"></span>
                            <span>Need more GUI tools for basic operations</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ROW 3: Sales --}}
            <div class="pl13-stagger-5 pl13-row">
                <div class="pl13-row-label">
                    <div class="pl13-row-icon">
                        <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" /></svg>
                    </div>
                    <span>Sales</span>
                </div>

                {{-- FSM Sales --}}
                <div class="pl13-cell pl13-cell-mixed">
                    <div class="pl13-cell-inner">
                        <div class="pl13-item pl13-highlight-green">
                            <span class="pl13-dot pl13-dot-green"></span>
                            <span><strong>Has sold itself</strong> to existing customers</span>
                        </div>
                        <div class="pl13-item">
                            <span class="pl13-dot pl13-dot-coral"></span>
                            <span>No good demo story</span>
                        </div>
                        <div class="pl13-item">
                            <span class="pl13-dot pl13-dot-coral"></span>
                            <span>Team can't articulate real-world problems FSM solves</span>
                        </div>
                        <div class="pl13-item">
                            <span class="pl13-dot pl13-dot-amber"></span>
                            <span>Very little sales material ready</span>
                        </div>
                        <div class="pl13-item pl13-highlight-amber">
                            <span class="pl13-dot pl13-dot-amber"></span>
                            <span><strong>UI needs complete makeover</strong> before selling</span>
                        </div>
                    </div>
                </div>

                {{-- WE Sales --}}
                <div class="pl13-cell pl13-cell-critical">
                    <div class="pl13-cell-inner">
                        <div class="pl13-item">
                            <span class="pl13-dot pl13-dot-coral"></span>
                            <span>Relying purely on large M&A deals</span>
                        </div>
                        <div class="pl13-item">
                            <span class="pl13-dot pl13-dot-amber"></span>
                            <span>COS = solutions platform, not software &mdash; unclear value</span>
                        </div>
                        <div class="pl13-item">
                            <span class="pl13-dot pl13-dot-green"></span>
                            <span>Saks working on jumpstart material</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- Bottom summary --}}
        <div class="pl13-stagger-6 flex items-center justify-center" style="margin-top: 10px;">
            <div class="flex items-center gap-5">
                <div style="width: 60px; height: 1px; background: linear-gradient(to right, transparent, rgba(17,193,143,0.3));"></div>
                <span style="font-family: 'Sora', sans-serif; font-size: 12px; color: rgba(255,255,255,0.25); letter-spacing: 0.05em;">
                    FSM is <span style="color: #11C18F; font-weight: 600;">maturing</span>
                </span>
                <div style="width: 24px; height: 1px; background: rgba(255,255,255,0.08);"></div>
                <span style="font-family: 'Sora', sans-serif; font-size: 12px; color: rgba(255,255,255,0.25); letter-spacing: 0.05em;">
                    WE is <span style="color: #E86E4B; font-weight: 600;">critical</span>
                </span>
                <div style="width: 60px; height: 1px; background: linear-gradient(to left, transparent, rgba(232,110,75,0.3));"></div>
            </div>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    /* Headline */
    .pl13-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: clamp(1.6rem, 3.5vw, 2.4rem);
        letter-spacing: -0.03em;
        line-height: 1.1;
        color: rgba(255,255,255,0.9);
    }

    .pl13-coral-text {
        color: #E86E4B;
        text-shadow: 0 0 30px rgba(232,110,75,0.3);
    }

    /* Column headers */
    .pl13-col-header {
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 5px 12px;
        border-radius: 6px 6px 0 0;
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 11px;
        letter-spacing: 0.03em;
    }

    .pl13-col-fsm {
        background: rgba(17,193,143,0.06);
        border: 1px solid rgba(17,193,143,0.1);
        border-bottom: none;
        color: rgba(17,193,143,0.9);
        margin-right: 6px;
    }

    .pl13-col-we {
        background: rgba(232,110,75,0.06);
        border: 1px solid rgba(232,110,75,0.1);
        border-bottom: none;
        color: rgba(232,110,75,0.9);
        margin-left: 6px;
    }

    /* Row layout */
    .pl13-row {
        display: grid;
        grid-template-columns: 110px 1fr 1fr;
        gap: 0;
        min-height: 0;
    }

    /* Row label */
    .pl13-row-label {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 4px;
        padding: 8px 6px;
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 12px;
        letter-spacing: 0.02em;
        color: rgba(255,255,255,0.7);
        text-transform: uppercase;
        border-right: 1px solid rgba(255,255,255,0.04);
    }

    .pl13-row-icon {
        width: 26px;
        height: 26px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 6px;
        background: rgba(255,255,255,0.03);
        border: 1px solid rgba(255,255,255,0.06);
        color: rgba(255,255,255,0.4);
    }

    /* Cells */
    .pl13-cell {
        padding: 6px 10px;
        border-radius: 8px;
        margin: 0 4px;
        position: relative;
        overflow: hidden;
    }

    .pl13-cell-good {
        background: rgba(17,193,143,0.03);
        border: 1px solid rgba(17,193,143,0.08);
    }

    .pl13-cell-mixed {
        background: rgba(255,255,255,0.015);
        border: 1px solid rgba(255,255,255,0.05);
    }

    .pl13-cell-critical {
        background: rgba(232,110,75,0.03);
        border: 1px solid rgba(232,110,75,0.08);
    }

    .pl13-cell-critical::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 3px;
        height: 100%;
        background: linear-gradient(to bottom, rgba(232,110,75,0.4), rgba(232,110,75,0.1));
        border-radius: 3px 0 0 3px;
    }

    .pl13-cell-inner {
        display: flex;
        flex-direction: column;
        gap: 3px;
    }

    /* Items */
    .pl13-item {
        display: flex;
        align-items: flex-start;
        gap: 6px;
        font-family: 'Sora', sans-serif;
        font-size: 11px;
        font-weight: 400;
        color: rgba(255,255,255,0.55);
        line-height: 1.4;
    }

    .pl13-item strong {
        font-weight: 600;
        color: rgba(255,255,255,0.8);
    }

    .pl13-highlight-green {
        background: rgba(17,193,143,0.06);
        padding: 2px 6px;
        border-radius: 4px;
        margin: 1px -3px;
    }

    .pl13-highlight-green strong {
        color: #11C18F;
    }

    .pl13-highlight-coral {
        background: rgba(232,110,75,0.08);
        padding: 2px 6px;
        border-radius: 4px;
        margin: 1px -3px;
    }

    .pl13-highlight-coral strong {
        color: #E86E4B;
    }

    .pl13-highlight-amber {
        background: rgba(239,214,27,0.06);
        padding: 2px 6px;
        border-radius: 4px;
        margin: 1px -3px;
    }

    .pl13-highlight-amber strong {
        color: #EFD61B;
    }

    .pl13-quote-coral {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 12px;
        color: #E86E4B;
        padding: 4px 8px;
        background: rgba(232,110,75,0.08);
        border-left: 2px solid rgba(232,110,75,0.4);
        border-radius: 0 4px 4px 0;
        margin-top: 1px;
        text-shadow: 0 0 20px rgba(232,110,75,0.3);
        display: flex;
        align-items: center;
    }

    /* Status dots */
    .pl13-dot {
        flex-shrink: 0;
        width: 5px;
        height: 5px;
        border-radius: 50%;
        margin-top: 5px;
    }

    .pl13-dot-green {
        background: #11C18F;
        box-shadow: 0 0 6px rgba(17,193,143,0.5);
    }

    .pl13-dot-amber {
        background: #EFD61B;
        box-shadow: 0 0 6px rgba(239,214,27,0.4);
    }

    .pl13-dot-coral {
        background: #E86E4B;
        box-shadow: 0 0 6px rgba(232,110,75,0.5);
    }

    /* Reveal animations */
    @keyframes pl13-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes pl13-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .pl13-stagger-1 { opacity: 0; animation: pl13-reveal-down 0.8s ease-out 0.1s forwards; }
    .pl13-stagger-2 { opacity: 0; animation: pl13-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .pl13-stagger-3 { opacity: 0; animation: pl13-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .pl13-stagger-4 { opacity: 0; animation: pl13-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.7s forwards; }
    .pl13-stagger-5 { opacity: 0; animation: pl13-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
    .pl13-stagger-6 { opacity: 0; animation: pl13-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.2s forwards; }
</style>
