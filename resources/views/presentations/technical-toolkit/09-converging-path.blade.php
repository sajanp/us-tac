<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 50% 60%, rgba(17,193,143,0.04) 0%, transparent 55%);"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 85%);"></div>
    </div>

    {{-- Converging lines SVG background --}}
    <svg class="absolute inset-0 w-full h-full pointer-events-none" preserveAspectRatio="none" viewBox="0 0 1920 1080" fill="none" style="opacity: 0.06;">
        <path d="M0 200 Q960 540 1920 540" stroke="#11C18F" stroke-width="1" />
        <path d="M0 880 Q960 540 1920 540" stroke="#48AAA5" stroke-width="1" />
        <path d="M0 540 L1920 540" stroke="rgba(255,255,255,0.3)" stroke-width="0.5" stroke-dasharray="8 8" />
    </svg>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 32px 72px 48px;">

        {{-- Top bar --}}
        <div class="tt08-s1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Technical Toolkit</span>
        </div>

        {{-- Header --}}
        <div class="tt08-s2" style="margin-top: 8px; margin-bottom: 8px;">
            <div class="inline-flex items-center gap-3 mb-3">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 12px rgba(17,193,143,0.4);"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(17,193,143,0.7); font-weight: 600; font-family: 'Sora', sans-serif;">What's Next</span>
            </div>
            <h1 class="tt08-headline">Converging the <span class="tt08-green">Path</span></h1>
        </div>

        {{-- Action items --}}
        <div class="flex-1 flex flex-col justify-center gap-2.5" style="max-width: 900px;">

            {{-- Action 1: GitHub Migration --}}
            <div class="tt08-action tt08-s3">
                <div class="tt08-action-number">
                    <span class="tt08-num">01</span>
                </div>
                <div class="tt08-action-content">
                    <div class="flex items-center gap-3 mb-2">
                        <h3 class="tt08-action-title">Migrate FSM to GitHub</h3>
                        <div class="tt08-priority tt08-priority-urgent">
                            <div class="tt08-priority-pulse"></div>
                            Urgent
                        </div>
                    </div>
                    <p class="tt08-action-desc">Move FSM source control from GitLab to GitHub, unifying both products on a single platform. This simplifies CI/CD, code review, and team workflows.</p>
                    <div class="tt08-action-meta">
                        <div class="tt08-meta-item">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span>14 days</span>
                        </div>
                        <div class="tt08-meta-item">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" /></svg>
                            <span>High impact</span>
                        </div>
                    </div>
                </div>
                <div class="tt08-action-bar" style="background: #E86E4B;"></div>
            </div>

            {{-- Action 2: Vapor Replacement --}}
            <div class="tt08-action tt08-s4">
                <div class="tt08-action-number">
                    <span class="tt08-num">02</span>
                </div>
                <div class="tt08-action-content">
                    <div class="flex items-center gap-3 mb-2">
                        <h3 class="tt08-action-title">Plan Vapor Replacement</h3>
                        <div class="tt08-priority tt08-priority-critical">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" /></svg>
                            Critical
                        </div>
                    </div>
                    <p class="tt08-action-desc">Research and evaluate alternatives to Laravel Vapor for WE deployment. Options may include traditional Forge/VPS, Fly.io, or other serverless platforms. Must ensure zero-downtime migration path.</p>
                    <div class="tt08-action-meta">
                        <div class="tt08-meta-item">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span>Research phase</span>
                        </div>
                        <div class="tt08-meta-item">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" /></svg>
                            <span>Infrastructure risk</span>
                        </div>
                    </div>
                </div>
                <div class="tt08-action-bar" style="background: #E86E4B;"></div>
            </div>

            {{-- Action 3: Logging Alignment --}}
            <div class="tt08-action tt08-s5">
                <div class="tt08-action-number">
                    <span class="tt08-num">03</span>
                </div>
                <div class="tt08-action-content">
                    <div class="flex items-center gap-3 mb-2">
                        <h3 class="tt08-action-title">Align Logging Strategy</h3>
                        <div class="tt08-priority tt08-priority-discuss">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" /></svg>
                            Discussion
                        </div>
                    </div>
                    <p class="tt08-action-desc">Should we standardize on Sentry or Papertrail for logging across both products? Sentry handles errors well but is it the right logging solution? Let's decide as a team.</p>
                    <div class="tt08-action-meta">
                        <div class="tt08-meta-item">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" /></svg>
                            <span>Team decision</span>
                        </div>
                        <div class="tt08-meta-item">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" /></svg>
                            <span>Discuss today</span>
                        </div>
                    </div>
                </div>
                <div class="tt08-action-bar" style="background: #EFD61B;"></div>
            </div>

        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .tt08-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: clamp(1.8rem, 3.5vw, 2.5rem);
        letter-spacing: -0.03em;
        line-height: 1.1;
        color: rgba(255,255,255,0.9);
    }

    .tt08-green { color: #11C18F; }

    /* Action cards */
    .tt08-action {
        display: flex;
        gap: 18px;
        padding: 16px 22px;
        border-radius: 14px;
        background: rgba(255,255,255,0.015);
        border: 1px solid rgba(255,255,255,0.05);
        position: relative;
        overflow: hidden;
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .tt08-action:hover {
        border-color: rgba(17,193,143,0.12);
        transform: translateX(6px);
        box-shadow: 0 4px 24px rgba(0,0,0,0.15);
    }

    .tt08-action-bar {
        position: absolute;
        left: 0;
        top: 0;
        width: 3px;
        height: 100%;
        opacity: 0.5;
        border-radius: 14px 0 0 14px;
    }

    .tt08-action:hover .tt08-action-bar {
        opacity: 1;
    }

    .tt08-action-number {
        flex-shrink: 0;
        display: flex;
        align-items: flex-start;
        padding-top: 2px;
    }

    .tt08-num {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 1.6rem;
        line-height: 1;
        background: linear-gradient(135deg, rgba(17,193,143,0.3), rgba(17,193,143,0.08));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .tt08-action-content {
        flex: 1;
    }

    .tt08-action-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 1.1rem;
        color: rgba(255,255,255,0.9);
        letter-spacing: -0.01em;
        margin: 0;
    }

    .tt08-action-desc {
        font-family: 'Sora', sans-serif;
        font-size: 0.78rem;
        color: rgba(255,255,255,0.4);
        line-height: 1.6;
        margin: 0 0 8px 0;
        max-width: 650px;
    }

    .tt08-action-meta {
        display: flex;
        gap: 16px;
    }

    .tt08-meta-item {
        display: flex;
        align-items: center;
        gap: 5px;
        font-family: 'Sora', sans-serif;
        font-size: 0.7rem;
        color: rgba(255,255,255,0.3);
    }

    .tt08-meta-item svg {
        opacity: 0.5;
    }

    /* Priority badges */
    .tt08-priority {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 3px 10px;
        border-radius: 9999px;
        font-family: 'Sora', sans-serif;
        font-size: 0.65rem;
        font-weight: 600;
        letter-spacing: 0.05em;
        text-transform: uppercase;
    }

    .tt08-priority-urgent {
        background: rgba(232,110,75,0.08);
        border: 1px solid rgba(232,110,75,0.2);
        color: #E86E4B;
    }

    .tt08-priority-pulse {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #E86E4B;
        animation: tt08-pulse 1.5s ease-in-out infinite;
    }

    @keyframes tt08-pulse {
        0%, 100% { opacity: 1; box-shadow: 0 0 0 0 rgba(232,110,75,0.4); }
        50% { opacity: 0.7; box-shadow: 0 0 0 6px rgba(232,110,75,0); }
    }

    .tt08-priority-critical {
        background: rgba(232,110,75,0.08);
        border: 1px solid rgba(232,110,75,0.2);
        color: #E86E4B;
    }

    .tt08-priority-discuss {
        background: rgba(239,214,27,0.06);
        border: 1px solid rgba(239,214,27,0.15);
        color: rgba(239,214,27,0.8);
    }

    /* Reveal animations */
    @keyframes tt08-reveal {
        from { opacity: 0; transform: translateY(24px); filter: blur(3px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes tt08-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .tt08-s1 { opacity: 0; animation: tt08-reveal-down 0.8s ease-out 0.1s forwards; }
    .tt08-s2 { opacity: 0; animation: tt08-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .tt08-s3 { opacity: 0; animation: tt08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.6s forwards; }
    .tt08-s4 { opacity: 0; animation: tt08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
    .tt08-s5 { opacity: 0; animation: tt08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.2s forwards; }
</style>
