<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute" style="top: 50%; left: 30%; width: 800px; height: 800px; transform: translate(-50%, -50%); background: radial-gradient(circle, rgba(72,170,165,0.03) 0%, transparent 55%);"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(rgba(72,170,165,0.35) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 40%, #080c14 85%);"></div>
    </div>

    {{-- Danger glow for Vapor risk --}}
    <div class="absolute pointer-events-none" style="top: 45%; right: 15%; width: 400px; height: 400px; background: radial-gradient(circle, rgba(232,110,75,0.04) 0%, transparent 60%); animation: tt05-danger-breathe 6s ease-in-out infinite;"></div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 56px 72px;">

        {{-- Top bar --}}
        <div class="tt05-s1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Technical Toolkit</span>
        </div>

        {{-- Header --}}
        <div class="tt05-s2" style="margin-top: 32px;">
            <div class="inline-flex items-center gap-3 mb-4">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #48AAA5; box-shadow: 0 0 12px rgba(72,170,165,0.4);"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(72,170,165,0.7); font-weight: 600; font-family: 'Sora', sans-serif;">Wholesale Engine</span>
            </div>
            <h1 class="tt05-headline">WE: <span class="tt05-teal">Build &amp; Ship</span></h1>
        </div>

        {{-- Pipeline visualization --}}
        <div class="flex-1 flex items-center justify-center" style="padding: 20px 0;">
            <div class="tt05-pipeline">

                {{-- Step 1: Claude --}}
                <div class="tt05-step tt05-s3">
                    <div class="tt05-step-icon" style="background: rgba(72,170,165,0.06); border-color: rgba(72,170,165,0.15);">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#48AAA5" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                        </svg>
                    </div>
                    <div class="tt05-step-label">Claude AI</div>
                    <div class="tt05-step-desc">Development</div>
                </div>

                {{-- Arrow --}}
                <div class="tt05-arrow tt05-s4">
                    <svg width="40" height="20" viewBox="0 0 40 20" fill="none">
                        <path d="M0 10h30m0 0l-6-6m6 6l-6 6" stroke="rgba(72,170,165,0.3)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                {{-- Step 2: GitHub --}}
                <div class="tt05-step tt05-s5">
                    <div class="tt05-step-icon" style="background: rgba(72,170,165,0.06); border-color: rgba(72,170,165,0.15);">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#48AAA5" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                        </svg>
                    </div>
                    <div class="tt05-step-label">GitHub</div>
                    <div class="tt05-step-desc">Source Control</div>
                    <div class="tt05-step-note" style="color: rgba(17,193,143,0.5);">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        Already migrated
                    </div>
                </div>

                {{-- Arrow --}}
                <div class="tt05-arrow tt05-s6">
                    <svg width="40" height="20" viewBox="0 0 40 20" fill="none">
                        <path d="M0 10h30m0 0l-6-6m6 6l-6 6" stroke="rgba(72,170,165,0.3)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                {{-- Step 3: Vapor (RISK) --}}
                <div class="tt05-step tt05-s7 tt05-step-risk">
                    <div class="tt05-risk-border"></div>
                    <div class="tt05-step-icon tt05-icon-risk" style="background: rgba(232,110,75,0.08); border-color: rgba(232,110,75,0.25);">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E86E4B" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                    </div>
                    <div class="tt05-step-label" style="color: #E86E4B;">Laravel Vapor</div>
                    <div class="tt05-step-desc">Deployment</div>
                    <div class="tt05-risk-badge">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#E86E4B" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                        <span>Abandoned by Laravel</span>
                    </div>
                </div>

                {{-- Arrow --}}
                <div class="tt05-arrow tt05-s8">
                    <svg width="40" height="20" viewBox="0 0 40 20" fill="none">
                        <path d="M0 10h30m0 0l-6-6m6 6l-6 6" stroke="rgba(72,170,165,0.3)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                {{-- Step 4: AWS Lambda --}}
                <div class="tt05-step tt05-s9">
                    <div class="tt05-step-icon" style="background: rgba(72,170,165,0.06); border-color: rgba(72,170,165,0.15);">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#48AAA5" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
                        </svg>
                    </div>
                    <div class="tt05-step-label">AWS Lambda</div>
                    <div class="tt05-step-desc">Serverless</div>
                    <div class="tt05-step-note" style="color: rgba(72,170,165,0.5);">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" /></svg>
                        No server access
                    </div>
                </div>
            </div>
        </div>

        {{-- Risk callout --}}
        <div class="tt05-s10 tt05-risk-callout">
            <div class="tt05-risk-callout-inner">
                <div class="tt05-risk-icon-wrap">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#E86E4B" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                    </svg>
                </div>
                <div>
                    <p style="font-family: 'Cairo', sans-serif; font-weight: 700; font-size: 0.95rem; color: #E86E4B; margin: 0 0 4px 0;">Critical Risk: Vapor is being abandoned</p>
                    <p style="font-family: 'Sora', sans-serif; font-size: 0.82rem; color: rgba(255,255,255,0.45); margin: 0; line-height: 1.6;">
                        Laravel Vapor shows clear signs of abandonment. Our entire WE deployment pipeline depends on it. We need to identify and migrate to an alternative before it becomes unsupported.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .tt05-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: clamp(2rem, 4.5vw, 3.2rem);
        letter-spacing: -0.03em;
        line-height: 1.1;
        color: rgba(255,255,255,0.9);
    }

    .tt05-teal { color: #48AAA5; }

    @keyframes tt05-danger-breathe {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.5; transform: scale(1.1); }
    }

    /* Pipeline */
    .tt05-pipeline {
        display: flex;
        align-items: center;
        gap: 16px;
        width: 100%;
        max-width: 1100px;
        justify-content: center;
    }

    .tt05-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        position: relative;
        min-width: 140px;
    }

    .tt05-step-icon {
        width: 64px;
        height: 64px;
        border-radius: 16px;
        border: 1px solid;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.4s ease;
    }

    .tt05-step:hover .tt05-step-icon {
        transform: translateY(-4px);
    }

    .tt05-step-label {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 0.95rem;
        color: rgba(255,255,255,0.85);
        letter-spacing: -0.01em;
    }

    .tt05-step-desc {
        font-family: 'Sora', sans-serif;
        font-size: 0.72rem;
        color: rgba(255,255,255,0.35);
        text-transform: uppercase;
        letter-spacing: 0.15em;
    }

    .tt05-step-note {
        display: flex;
        align-items: center;
        gap: 4px;
        font-family: 'Sora', sans-serif;
        font-size: 0.65rem;
        margin-top: 4px;
    }

    .tt05-arrow {
        flex-shrink: 0;
        opacity: 0.6;
    }

    /* Risk step */
    .tt05-step-risk {
        position: relative;
    }

    .tt05-risk-border {
        position: absolute;
        inset: -14px;
        border-radius: 20px;
        border: 2px solid rgba(232,110,75,0.15);
        animation: tt05-risk-pulse 3s ease-in-out infinite;
    }

    @keyframes tt05-risk-pulse {
        0%, 100% { border-color: rgba(232,110,75,0.15); box-shadow: 0 0 0 rgba(232,110,75,0); }
        50% { border-color: rgba(232,110,75,0.3); box-shadow: 0 0 30px rgba(232,110,75,0.08); }
    }

    .tt05-icon-risk {
        animation: tt05-glow-risk 3s ease-in-out infinite;
    }

    @keyframes tt05-glow-risk {
        0%, 100% { box-shadow: 0 0 0 rgba(232,110,75,0); }
        50% { box-shadow: 0 0 30px rgba(232,110,75,0.2); }
    }

    .tt05-risk-badge {
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 5px 14px;
        border-radius: 9999px;
        background: rgba(232,110,75,0.1);
        border: 1px solid rgba(232,110,75,0.25);
        margin-top: 4px;
    }

    .tt05-risk-badge span {
        font-family: 'Sora', sans-serif;
        font-weight: 600;
        font-size: 0.68rem;
        color: #E86E4B;
        letter-spacing: 0.03em;
    }

    /* Risk callout banner */
    .tt05-risk-callout {
        margin-top: auto;
    }

    .tt05-risk-callout-inner {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        padding: 16px 24px;
        border-radius: 12px;
        background: rgba(232,110,75,0.04);
        border: 1px solid rgba(232,110,75,0.15);
        border-left: 3px solid #E86E4B;
    }

    .tt05-risk-icon-wrap {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: rgba(232,110,75,0.08);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        margin-top: 2px;
    }

    /* Reveal animations */
    @keyframes tt05-reveal {
        from { opacity: 0; transform: translateY(24px); filter: blur(3px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes tt05-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .tt05-s1 { opacity: 0; animation: tt05-reveal-down 0.8s ease-out 0.1s forwards; }
    .tt05-s2 { opacity: 0; animation: tt05-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .tt05-s3 { opacity: 0; animation: tt05-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.6s forwards; }
    .tt05-s4 { opacity: 0; animation: tt05-reveal 0.6s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
    .tt05-s5 { opacity: 0; animation: tt05-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.1s forwards; }
    .tt05-s6 { opacity: 0; animation: tt05-reveal 0.6s cubic-bezier(0.22, 1, 0.36, 1) 1.4s forwards; }
    .tt05-s7 { opacity: 0; animation: tt05-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.6s forwards; }
    .tt05-s8 { opacity: 0; animation: tt05-reveal 0.6s cubic-bezier(0.22, 1, 0.36, 1) 1.9s forwards; }
    .tt05-s9 { opacity: 0; animation: tt05-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 2.1s forwards; }
    .tt05-s10 { opacity: 0; animation: tt05-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 2.5s forwards; }
</style>
