<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 50% 50%, rgba(17,193,143,0.03) 0%, transparent 55%);"></div>
        <div class="absolute inset-0 opacity-[0.025]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 85%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 40px 72px;">

        {{-- Top bar --}}
        <div class="tt07-s1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Technical Toolkit</span>
        </div>

        {{-- Header --}}
        <div class="tt07-s2" style="margin-top: 24px; margin-bottom: 32px;">
            <div class="inline-flex items-center gap-3 mb-4">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 12px rgba(17,193,143,0.4);"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(17,193,143,0.7); font-weight: 600; font-family: 'Sora', sans-serif;">The Full Picture</span>
            </div>
            <h1 class="tt07-headline">Side by <span class="tt07-green">Side</span></h1>
        </div>

        {{-- Comparison table --}}
        <div class="flex-1 flex flex-col justify-center" style="max-width: 1000px; width: 100%;">

            {{-- Column headers --}}
            <div class="tt07-table-header tt07-s3">
                <div class="tt07-col-category"></div>
                <div class="tt07-col-fsm">
                    <div class="w-2 h-2 rounded-full" style="background: #11C18F;"></div>
                    <span>FSM</span>
                </div>
                <div class="tt07-col-we">
                    <div class="w-2 h-2 rounded-full" style="background: #48AAA5;"></div>
                    <span>WE</span>
                </div>
                <div class="tt07-col-status">Status</div>
            </div>

            {{-- Rows --}}
            <div class="tt07-table-body">

                {{-- Source Control --}}
                <div class="tt07-row tt07-s4">
                    <div class="tt07-col-category">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.4)" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" /></svg>
                        <span>Source Control</span>
                    </div>
                    <div class="tt07-col-fsm">
                        <span style="text-decoration: line-through; opacity: 0.4;">GitLab</span>
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#E86E4B" stroke-width="2" style="flex-shrink: 0;"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                        <span>GitHub</span>
                    </div>
                    <div class="tt07-col-we">GitHub</div>
                    <div class="tt07-col-status">
                        <div class="tt07-status tt07-status-action">
                            <div class="tt07-status-dot" style="background: #E86E4B;"></div>
                            <span>Migrating</span>
                        </div>
                    </div>
                </div>

                {{-- Deployment --}}
                <div class="tt07-row tt07-s5">
                    <div class="tt07-col-category">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.4)" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" /></svg>
                        <span>Deployment</span>
                    </div>
                    <div class="tt07-col-fsm">Forge / VPS</div>
                    <div class="tt07-col-we">
                        <span style="color: #E86E4B;">Vapor</span> / Lambda
                    </div>
                    <div class="tt07-col-status">
                        <div class="tt07-status tt07-status-risk">
                            <div class="tt07-status-dot" style="background: #E86E4B; animation: tt07-blink 1.5s ease-in-out infinite;"></div>
                            <span>Risk</span>
                        </div>
                    </div>
                </div>

                {{-- Logging --}}
                <div class="tt07-row tt07-s6">
                    <div class="tt07-col-category">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.4)" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>
                        <span>Logging</span>
                    </div>
                    <div class="tt07-col-fsm">Papertrail</div>
                    <div class="tt07-col-we">Sentry</div>
                    <div class="tt07-col-status">
                        <div class="tt07-status tt07-status-discuss">
                            <div class="tt07-status-dot" style="background: #EFD61B;"></div>
                            <span>Discuss</span>
                        </div>
                    </div>
                </div>

                {{-- Debugging --}}
                <div class="tt07-row tt07-s7">
                    <div class="tt07-col-category">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.4)" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z" /></svg>
                        <span>Debugging</span>
                    </div>
                    <div class="tt07-col-fsm">Tinker <span class="tt07-detail">(SSH)</span></div>
                    <div class="tt07-col-we">Tinkerwell <span class="tt07-detail">(GUI)</span></div>
                    <div class="tt07-col-status">
                        <div class="tt07-status tt07-status-ok">
                            <div class="tt07-status-dot" style="background: #48AAA5;"></div>
                            <span>Different need</span>
                        </div>
                    </div>
                </div>

                {{-- Error Tracking --}}
                <div class="tt07-row tt07-s8">
                    <div class="tt07-col-category">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.4)" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" /></svg>
                        <span>Error Tracking</span>
                    </div>
                    <div class="tt07-col-fsm">Sentry</div>
                    <div class="tt07-col-we">Sentry</div>
                    <div class="tt07-col-status">
                        <div class="tt07-status tt07-status-aligned">
                            <div class="tt07-status-dot" style="background: #11C18F;"></div>
                            <span>Aligned</span>
                        </div>
                    </div>
                </div>

                {{-- AI --}}
                <div class="tt07-row tt07-s9">
                    <div class="tt07-col-category">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.4)" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z" /></svg>
                        <span>AI Development</span>
                    </div>
                    <div class="tt07-col-fsm">Claude</div>
                    <div class="tt07-col-we">Claude</div>
                    <div class="tt07-col-status">
                        <div class="tt07-status tt07-status-aligned">
                            <div class="tt07-status-dot" style="background: #11C18F;"></div>
                            <span>Aligned</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        {{-- Legend --}}
        <div class="tt07-s10 flex items-center gap-6" style="margin-top: 24px;">
            <div class="flex items-center gap-2">
                <div class="w-2 h-2 rounded-full" style="background: #11C18F;"></div>
                <span class="tt07-legend-label">Aligned</span>
            </div>
            <div class="flex items-center gap-2">
                <div class="w-2 h-2 rounded-full" style="background: #EFD61B;"></div>
                <span class="tt07-legend-label">Needs discussion</span>
            </div>
            <div class="flex items-center gap-2">
                <div class="w-2 h-2 rounded-full" style="background: #E86E4B;"></div>
                <span class="tt07-legend-label">Action required</span>
            </div>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .tt07-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: clamp(2rem, 4.5vw, 3rem);
        letter-spacing: -0.03em;
        line-height: 1.1;
        color: rgba(255,255,255,0.9);
    }

    .tt07-green { color: #11C18F; }

    .tt07-detail {
        font-size: 0.7rem;
        color: rgba(255,255,255,0.3);
    }

    /* Table header */
    .tt07-table-header {
        display: grid;
        grid-template-columns: 180px 1fr 1fr 160px;
        gap: 0;
        padding: 0 0 12px 0;
        border-bottom: 1px solid rgba(255,255,255,0.06);
        margin-bottom: 4px;
    }

    .tt07-table-header .tt07-col-fsm,
    .tt07-table-header .tt07-col-we {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 0.85rem;
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 0 16px;
    }

    .tt07-table-header .tt07-col-fsm { color: #11C18F; }
    .tt07-table-header .tt07-col-we { color: #48AAA5; }

    .tt07-table-header .tt07-col-status {
        font-family: 'Sora', sans-serif;
        font-size: 0.7rem;
        font-weight: 600;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.25);
        padding: 0 16px;
        text-align: center;
    }

    /* Table body */
    .tt07-table-body {
        display: flex;
        flex-direction: column;
    }

    /* Row */
    .tt07-row {
        display: grid;
        grid-template-columns: 180px 1fr 1fr 160px;
        gap: 0;
        align-items: center;
        padding: 14px 0;
        border-bottom: 1px solid rgba(255,255,255,0.03);
        transition: all 0.3s ease;
        border-radius: 8px;
    }

    .tt07-row:hover {
        background: rgba(255,255,255,0.015);
    }

    .tt07-col-category {
        display: flex;
        align-items: center;
        gap: 10px;
        font-family: 'Sora', sans-serif;
        font-size: 0.82rem;
        font-weight: 500;
        color: rgba(255,255,255,0.6);
        padding: 0 16px 0 8px;
    }

    .tt07-col-fsm,
    .tt07-col-we {
        font-family: 'Sora', sans-serif;
        font-size: 0.85rem;
        color: rgba(255,255,255,0.7);
        padding: 0 16px;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .tt07-col-status {
        padding: 0 16px;
        display: flex;
        justify-content: center;
    }

    /* Status badges */
    .tt07-status {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 12px;
        border-radius: 9999px;
        font-family: 'Sora', sans-serif;
        font-size: 0.68rem;
        font-weight: 600;
        letter-spacing: 0.03em;
    }

    .tt07-status-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        flex-shrink: 0;
    }

    .tt07-status-aligned {
        background: rgba(17,193,143,0.06);
        border: 1px solid rgba(17,193,143,0.15);
        color: rgba(17,193,143,0.8);
    }

    .tt07-status-ok {
        background: rgba(72,170,165,0.06);
        border: 1px solid rgba(72,170,165,0.15);
        color: rgba(72,170,165,0.8);
    }

    .tt07-status-discuss {
        background: rgba(239,214,27,0.06);
        border: 1px solid rgba(239,214,27,0.15);
        color: rgba(239,214,27,0.8);
    }

    .tt07-status-action {
        background: rgba(232,110,75,0.06);
        border: 1px solid rgba(232,110,75,0.15);
        color: rgba(232,110,75,0.8);
    }

    .tt07-status-risk {
        background: rgba(232,110,75,0.08);
        border: 1px solid rgba(232,110,75,0.2);
        color: #E86E4B;
    }

    @keyframes tt07-blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.3; }
    }

    /* Legend */
    .tt07-legend-label {
        font-family: 'Sora', sans-serif;
        font-size: 0.7rem;
        color: rgba(255,255,255,0.35);
    }

    /* Reveal animations */
    @keyframes tt07-reveal {
        from { opacity: 0; transform: translateY(20px); filter: blur(3px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes tt07-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .tt07-s1 { opacity: 0; animation: tt07-reveal-down 0.8s ease-out 0.1s forwards; }
    .tt07-s2 { opacity: 0; animation: tt07-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.25s forwards; }
    .tt07-s3 { opacity: 0; animation: tt07-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.45s forwards; }
    .tt07-s4 { opacity: 0; animation: tt07-reveal 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.65s forwards; }
    .tt07-s5 { opacity: 0; animation: tt07-reveal 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.85s forwards; }
    .tt07-s6 { opacity: 0; animation: tt07-reveal 0.7s cubic-bezier(0.22, 1, 0.36, 1) 1.05s forwards; }
    .tt07-s7 { opacity: 0; animation: tt07-reveal 0.7s cubic-bezier(0.22, 1, 0.36, 1) 1.25s forwards; }
    .tt07-s8 { opacity: 0; animation: tt07-reveal 0.7s cubic-bezier(0.22, 1, 0.36, 1) 1.45s forwards; }
    .tt07-s9 { opacity: 0; animation: tt07-reveal 0.7s cubic-bezier(0.22, 1, 0.36, 1) 1.65s forwards; }
    .tt07-s10 { opacity: 0; animation: tt07-reveal 0.7s cubic-bezier(0.22, 1, 0.36, 1) 2.0s forwards; }
</style>
