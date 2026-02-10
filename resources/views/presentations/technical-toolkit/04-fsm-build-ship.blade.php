<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute" style="top: 50%; left: 30%; width: 800px; height: 800px; transform: translate(-50%, -50%); background: radial-gradient(circle, rgba(17,193,143,0.035) 0%, transparent 55%);"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 40%, #080c14 85%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 56px 72px;">

        {{-- Top bar --}}
        <div class="tt03-s1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Technical Toolkit</span>
        </div>

        {{-- Header --}}
        <div class="tt03-s2" style="margin-top: 32px;">
            <div class="inline-flex items-center gap-3 mb-4">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 12px rgba(17,193,143,0.4);"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(17,193,143,0.7); font-weight: 600; font-family: 'Sora', sans-serif;">Field Service Management</span>
            </div>
            <h1 class="tt03-headline">FSM: <span class="tt03-green">Build &amp; Ship</span></h1>
        </div>

        {{-- Pipeline visualization --}}
        <div class="flex-1 flex items-center justify-center" style="padding: 20px 0;">
            <div class="tt03-pipeline">

                {{-- Step 1: Claude --}}
                <div class="tt03-step tt03-s3">
                    <div class="tt03-step-icon" style="background: rgba(17,193,143,0.06); border-color: rgba(17,193,143,0.15);">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#11C18F" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                        </svg>
                    </div>
                    <div class="tt03-step-label">Claude AI</div>
                    <div class="tt03-step-desc">Development</div>
                    <div class="tt03-step-note">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" /></svg>
                        Separate session
                    </div>
                </div>

                {{-- Arrow --}}
                <div class="tt03-arrow tt03-s4">
                    <svg width="40" height="20" viewBox="0 0 40 20" fill="none">
                        <path d="M0 10h30m0 0l-6-6m6 6l-6 6" stroke="rgba(17,193,143,0.3)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                {{-- Step 2: GitLab → GitHub --}}
                <div class="tt03-step tt03-s5 tt03-step-urgent">
                    <div class="tt03-step-icon tt03-icon-migrate" style="background: rgba(232,110,75,0.06); border-color: rgba(232,110,75,0.2);">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E86E4B" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                        </svg>
                    </div>
                    <div class="tt03-step-label">
                        <span style="text-decoration: line-through; opacity: 0.4;">GitLab</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#E86E4B" stroke-width="2" style="display: inline; vertical-align: middle; margin: 0 2px;">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                        GitHub
                    </div>
                    <div class="tt03-step-desc">Source Control</div>
                    {{-- Urgent badge --}}
                    <div class="tt03-urgent-badge">
                        <div class="tt03-urgent-pulse"></div>
                        <span>14 days</span>
                    </div>
                </div>

                {{-- Arrow --}}
                <div class="tt03-arrow tt03-s6">
                    <svg width="40" height="20" viewBox="0 0 40 20" fill="none">
                        <path d="M0 10h30m0 0l-6-6m6 6l-6 6" stroke="rgba(17,193,143,0.3)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                {{-- Step 3: Forge --}}
                <div class="tt03-step tt03-s7">
                    <div class="tt03-step-icon" style="background: rgba(17,193,143,0.06); border-color: rgba(17,193,143,0.15);">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#11C18F" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                        </svg>
                    </div>
                    <div class="tt03-step-label">Laravel Forge</div>
                    <div class="tt03-step-desc">Deployment</div>
                </div>

                {{-- Arrow --}}
                <div class="tt03-arrow tt03-s8">
                    <svg width="40" height="20" viewBox="0 0 40 20" fill="none">
                        <path d="M0 10h30m0 0l-6-6m6 6l-6 6" stroke="rgba(17,193,143,0.3)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                {{-- Step 4: VPS --}}
                <div class="tt03-step tt03-s9">
                    <div class="tt03-step-icon" style="background: rgba(17,193,143,0.06); border-color: rgba(17,193,143,0.15);">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#11C18F" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />
                        </svg>
                    </div>
                    <div class="tt03-step-label">Traditional VPS</div>
                    <div class="tt03-step-desc">Production</div>
                    <div class="tt03-step-note" style="color: rgba(17,193,143,0.5);">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        Full server access
                    </div>
                </div>
            </div>
        </div>

        {{-- Bottom note --}}
        <div class="tt03-s10" style="margin-top: auto;">
            <div class="flex items-center gap-4">
                <div style="width: 40px; height: 1px; background: linear-gradient(to right, transparent, rgba(232,110,75,0.3));"></div>
                <p style="font-family: 'Sora', sans-serif; font-size: 0.85rem; color: rgba(232,110,75,0.7); line-height: 1.6;">
                    The GitLab to GitHub migration is our most urgent infrastructure task.
                </p>
            </div>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .tt03-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: clamp(2rem, 4.5vw, 3.2rem);
        letter-spacing: -0.03em;
        line-height: 1.1;
        color: rgba(255,255,255,0.9);
    }

    .tt03-green { color: #11C18F; }

    /* Pipeline layout */
    .tt03-pipeline {
        display: flex;
        align-items: center;
        gap: 16px;
        width: 100%;
        max-width: 1100px;
        justify-content: center;
    }

    .tt03-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        position: relative;
        min-width: 140px;
    }

    .tt03-step-icon {
        width: 64px;
        height: 64px;
        border-radius: 16px;
        border: 1px solid;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.4s ease;
    }

    .tt03-step:hover .tt03-step-icon {
        transform: translateY(-4px);
    }

    .tt03-step-label {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 0.95rem;
        color: rgba(255,255,255,0.85);
        letter-spacing: -0.01em;
        text-align: center;
    }

    .tt03-step-desc {
        font-family: 'Sora', sans-serif;
        font-size: 0.72rem;
        color: rgba(255,255,255,0.35);
        text-transform: uppercase;
        letter-spacing: 0.15em;
    }

    .tt03-step-note {
        display: flex;
        align-items: center;
        gap: 4px;
        font-family: 'Sora', sans-serif;
        font-size: 0.65rem;
        color: rgba(255,255,255,0.3);
        margin-top: 4px;
    }

    .tt03-arrow {
        flex-shrink: 0;
        opacity: 0.6;
    }

    /* Urgent state for GitLab step */
    .tt03-step-urgent {
        position: relative;
    }

    .tt03-step-urgent::before {
        content: '';
        position: absolute;
        inset: -12px;
        border-radius: 20px;
        border: 1px dashed rgba(232,110,75,0.2);
        animation: tt03-urgent-dash 8s linear infinite;
    }

    @keyframes tt03-urgent-dash {
        to { stroke-dashoffset: -100; }
    }

    .tt03-icon-migrate {
        animation: tt03-glow-orange 3s ease-in-out infinite;
    }

    @keyframes tt03-glow-orange {
        0%, 100% { box-shadow: 0 0 0 rgba(232,110,75,0); }
        50% { box-shadow: 0 0 24px rgba(232,110,75,0.15); }
    }

    .tt03-urgent-badge {
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 4px 12px;
        border-radius: 9999px;
        background: rgba(232,110,75,0.08);
        border: 1px solid rgba(232,110,75,0.2);
        margin-top: 4px;
    }

    .tt03-urgent-badge span {
        font-family: 'Sora', sans-serif;
        font-weight: 700;
        font-size: 0.7rem;
        color: #E86E4B;
        letter-spacing: 0.05em;
        text-transform: uppercase;
    }

    .tt03-urgent-pulse {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #E86E4B;
        animation: tt03-pulse 1.5s ease-in-out infinite;
    }

    @keyframes tt03-pulse {
        0%, 100% { opacity: 1; box-shadow: 0 0 0 0 rgba(232,110,75,0.4); }
        50% { opacity: 0.7; box-shadow: 0 0 0 6px rgba(232,110,75,0); }
    }

    /* Reveal animations */
    @keyframes tt03-reveal {
        from { opacity: 0; transform: translateY(24px); filter: blur(3px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes tt03-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .tt03-s1 { opacity: 0; animation: tt03-reveal-down 0.8s ease-out 0.1s forwards; }
    .tt03-s2 { opacity: 0; animation: tt03-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .tt03-s3 { opacity: 0; animation: tt03-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.6s forwards; }
    .tt03-s4 { opacity: 0; animation: tt03-reveal 0.6s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
    .tt03-s5 { opacity: 0; animation: tt03-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.1s forwards; }
    .tt03-s6 { opacity: 0; animation: tt03-reveal 0.6s cubic-bezier(0.22, 1, 0.36, 1) 1.4s forwards; }
    .tt03-s7 { opacity: 0; animation: tt03-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.6s forwards; }
    .tt03-s8 { opacity: 0; animation: tt03-reveal 0.6s cubic-bezier(0.22, 1, 0.36, 1) 1.9s forwards; }
    .tt03-s9 { opacity: 0; animation: tt03-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 2.1s forwards; }
    .tt03-s10 { opacity: 0; animation: tt03-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 2.5s forwards; }
</style>
