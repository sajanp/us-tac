<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        {{-- Warm amber glow for tension --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 75% 70%, rgba(239,214,27,0.03) 0%, transparent 50%);"></div>
        {{-- Green glow top-left --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 20% 20%, rgba(17,193,143,0.03) 0%, transparent 50%);"></div>
        {{-- Dot grid --}}
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: radial-gradient(rgba(255,255,255,0.3) 1px, transparent 1px); background-size: 40px 40px;"></div>
        {{-- Noise --}}
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        {{-- Vignette --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 85%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 36px 72px;">

        {{-- Top bar --}}
        <div class="pl06-stagger-1 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="flex items-center gap-2 px-4 py-2 rounded-lg" style="background: rgba(17,193,143,0.05); border: 1px solid rgba(17,193,143,0.1);">
                    <span style="font-family: 'Sora', sans-serif; font-size: 11px; font-weight: 600; color: rgba(17,193,143,0.7); text-transform: uppercase; letter-spacing: 0.15em;">Meridiam Network #3</span>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="flex items-center gap-2 px-4 py-2 rounded-full" style="border: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
                    <svg width="12" height="12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: rgba(239,214,27,0.6);">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <span style="font-family: 'Sora', sans-serif; font-size: 11px; font-weight: 500; color: rgba(255,255,255,0.4); letter-spacing: 0.1em;">Memphis, TN</span>
                </div>
            </div>
        </div>

        {{-- Main content --}}
        <div class="flex-1 flex flex-col justify-center" style="max-width: 1200px; margin: 0 auto; width: 100%;">

            {{-- Heading --}}
            <div class="pl06-stagger-2" style="margin-bottom: 32px;">
                <h1 class="pl06-headline">
                    The BSNet <span class="pl06-gradient-text">Challenge</span>
                </h1>
                <div style="display: flex; align-items: center; gap: 12px; margin-top: 12px;">
                    <span style="font-family: 'Sora', sans-serif; font-size: 0.85rem; color: rgba(255,255,255,0.25); font-style: italic;">
                        Sajan was still pretty new to the company
                    </span>
                </div>
            </div>

            {{-- Timeline roadmap --}}
            <div class="pl06-timeline">

                {{-- Timeline track --}}
                <div class="pl06-track">
                    <div class="pl06-track-line"></div>
                    <div class="pl06-track-progress"></div>
                </div>

                {{-- Node 1: The Demand --}}
                <div class="pl06-stagger-3 pl06-milestone pl06-milestone-1">
                    <div class="pl06-milestone-dot pl06-dot-coral">
                        <div class="pl06-dot-ring"></div>
                    </div>
                    <div class="pl06-milestone-card">
                        <div class="pl06-milestone-eyebrow" style="color: rgba(232,110,75,0.7);">The Demand</div>
                        <div class="pl06-milestone-title">Ting demands self-scheduling</div>
                        <div class="pl06-milestone-desc">
                            BSNet kicks off with Ting as the ISP partner. Self-scheduling for subscribers isn't optional — it's required.
                        </div>
                        <div class="pl06-milestone-tag pl06-tag-coral">
                            <svg width="12" height="12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #E86E4B;">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                            </svg>
                            Non-negotiable
                        </div>
                    </div>
                </div>

                {{-- Node 2: The Plan --}}
                <div class="pl06-stagger-4 pl06-milestone pl06-milestone-2">
                    <div class="pl06-milestone-dot pl06-dot-green">
                        <div class="pl06-dot-ring pl06-ring-green"></div>
                    </div>
                    <div class="pl06-milestone-card">
                        <div class="pl06-milestone-eyebrow" style="color: rgba(17,193,143,0.7);">Sajan's Plan</div>
                        <div class="pl06-milestone-title">Enhance Work Orders in BE</div>
                        <div class="pl06-milestone-desc">
                            Build a side module for self-scheduling that integrates with the existing Work Order system. Update BE Tasks with calculated/selected dates and times.
                        </div>
                        <div class="pl06-plan-detail">
                            <div class="pl06-plan-item">
                                <div class="pl06-plan-check">
                                    <svg width="10" height="10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3" style="color: #11C18F;">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <span>Work Order system enhancements</span>
                            </div>
                            <div class="pl06-plan-item">
                                <div class="pl06-plan-check">
                                    <svg width="10" height="10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3" style="color: #11C18F;">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <span>Side scheduling module</span>
                            </div>
                            <div class="pl06-plan-item">
                                <div class="pl06-plan-check">
                                    <svg width="10" height="10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3" style="color: #11C18F;">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <span>BE Task date/time integration</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Node 3: The Deadline --}}
                <div class="pl06-stagger-5 pl06-milestone pl06-milestone-3">
                    <div class="pl06-milestone-dot pl06-dot-yellow">
                        <div class="pl06-dot-ring pl06-ring-yellow"></div>
                        <div class="pl06-dot-pulse"></div>
                    </div>
                    <div class="pl06-milestone-card pl06-card-deadline">
                        <div class="pl06-milestone-eyebrow" style="color: rgba(239,214,27,0.8);">The Deadline</div>
                        <div class="pl06-deadline-month">March</div>
                        <div class="pl06-milestone-desc" style="color: rgba(255,255,255,0.4);">
                            Delivery deadline. The clock is ticking.
                        </div>
                        <div class="pl06-deadline-bar">
                            <div class="pl06-deadline-fill"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- Bottom --}}
        <div class="pl06-stagger-6 flex items-center justify-center">
            <div class="flex items-center gap-4">
                <div style="width: 60px; height: 1px; background: linear-gradient(to right, transparent, rgba(239,214,27,0.2));"></div>
                <span style="font-family: 'Sora', sans-serif; font-size: 0.85rem; color: rgba(255,255,255,0.3);">
                    A plan. A deadline. <span style="color: rgba(239,214,27,0.7); font-weight: 600;">Pressure.</span>
                </span>
                <div style="width: 60px; height: 1px; background: linear-gradient(to left, transparent, rgba(239,214,27,0.2));"></div>
            </div>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    /* Headline */
    .pl06-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: clamp(2.2rem, 4.5vw, 3.5rem);
        letter-spacing: -0.03em;
        line-height: 1.05;
        color: rgba(255,255,255,0.9);
    }

    .pl06-gradient-text {
        background: linear-gradient(135deg, #EFD61B 0%, #E86E4B 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Timeline */
    .pl06-timeline {
        position: relative;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 24px;
        padding-top: 28px;
    }

    .pl06-track {
        position: absolute;
        top: 20px;
        left: 5%;
        right: 5%;
        height: 2px;
    }

    .pl06-track-line {
        position: absolute;
        inset: 0;
        background: rgba(255,255,255,0.04);
        border-radius: 2px;
    }

    .pl06-track-progress {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 0%;
        background: linear-gradient(90deg, rgba(232,110,75,0.4), rgba(17,193,143,0.4), rgba(239,214,27,0.4));
        border-radius: 2px;
        animation: pl06-progress 2s cubic-bezier(0.22, 1, 0.36, 1) 0.8s forwards;
    }

    @keyframes pl06-progress {
        to { width: 100%; }
    }

    /* Milestones */
    .pl06-milestone {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .pl06-milestone-dot {
        position: relative;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        margin-bottom: 18px;
        z-index: 2;
    }

    .pl06-dot-coral {
        background: #E86E4B;
        box-shadow: 0 0 16px rgba(232,110,75,0.4);
    }

    .pl06-dot-green {
        background: #11C18F;
        box-shadow: 0 0 16px rgba(17,193,143,0.4);
    }

    .pl06-dot-yellow {
        background: #EFD61B;
        box-shadow: 0 0 16px rgba(239,214,27,0.4);
    }

    .pl06-dot-ring {
        position: absolute;
        inset: -6px;
        border-radius: 50%;
        border: 1px solid rgba(232,110,75,0.2);
    }

    .pl06-ring-green {
        border-color: rgba(17,193,143,0.2);
    }

    .pl06-ring-yellow {
        border-color: rgba(239,214,27,0.2);
    }

    .pl06-dot-pulse {
        position: absolute;
        inset: -12px;
        border-radius: 50%;
        border: 1px solid rgba(239,214,27,0.15);
        animation: pl06-pulse 2s ease-in-out infinite;
    }

    @keyframes pl06-pulse {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.4); opacity: 0; }
    }

    /* Milestone cards */
    .pl06-milestone-card {
        width: 100%;
        padding: 18px;
        border-radius: 16px;
        background: rgba(255,255,255,0.02);
        border: 1px solid rgba(255,255,255,0.05);
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .pl06-milestone-card:hover {
        background: rgba(255,255,255,0.03);
        border-color: rgba(255,255,255,0.08);
        transform: translateY(-3px);
    }

    .pl06-card-deadline {
        border-color: rgba(239,214,27,0.1);
        background: rgba(239,214,27,0.02);
    }

    .pl06-card-deadline:hover {
        border-color: rgba(239,214,27,0.2);
        box-shadow: 0 0 40px rgba(239,214,27,0.05);
    }

    .pl06-milestone-eyebrow {
        font-family: 'Sora', sans-serif;
        font-size: 0.65rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        margin-bottom: 6px;
    }

    .pl06-milestone-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 1rem;
        color: rgba(255,255,255,0.9);
        margin-bottom: 6px;
        letter-spacing: -0.01em;
    }

    .pl06-milestone-desc {
        font-family: 'Sora', sans-serif;
        font-size: 0.8rem;
        color: rgba(255,255,255,0.3);
        line-height: 1.6;
    }

    .pl06-milestone-tag {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin-top: 12px;
        padding: 5px 12px;
        border-radius: 6px;
        font-family: 'Sora', sans-serif;
        font-size: 0.7rem;
        font-weight: 600;
    }

    .pl06-tag-coral {
        background: rgba(232,110,75,0.08);
        border: 1px solid rgba(232,110,75,0.12);
        color: rgba(232,110,75,0.8);
    }

    /* Plan checklist */
    .pl06-plan-detail {
        display: flex;
        flex-direction: column;
        gap: 5px;
        margin-top: 10px;
    }

    .pl06-plan-item {
        display: flex;
        align-items: center;
        gap: 8px;
        font-family: 'Sora', sans-serif;
        font-size: 0.75rem;
        color: rgba(255,255,255,0.4);
    }

    .pl06-plan-check {
        width: 18px;
        height: 18px;
        border-radius: 5px;
        background: rgba(17,193,143,0.08);
        border: 1px solid rgba(17,193,143,0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    /* Deadline month */
    .pl06-deadline-month {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 2.2rem;
        color: #EFD61B;
        letter-spacing: -0.02em;
        line-height: 1;
        margin-bottom: 8px;
        text-shadow: 0 0 40px rgba(239,214,27,0.2);
    }

    /* Deadline countdown bar */
    .pl06-deadline-bar {
        margin-top: 16px;
        height: 4px;
        border-radius: 4px;
        background: rgba(239,214,27,0.08);
        overflow: hidden;
    }

    .pl06-deadline-fill {
        height: 100%;
        width: 0%;
        border-radius: 4px;
        background: linear-gradient(90deg, rgba(239,214,27,0.6), rgba(232,110,75,0.6));
        animation: pl06-deadline-grow 2.5s cubic-bezier(0.22, 1, 0.36, 1) 1.5s forwards;
    }

    @keyframes pl06-deadline-grow {
        to { width: 75%; }
    }

    /* Reveal animations */
    @keyframes pl06-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes pl06-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .pl06-stagger-1 { opacity: 0; animation: pl06-reveal-down 0.8s ease-out 0.1s forwards; }
    .pl06-stagger-2 { opacity: 0; animation: pl06-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .pl06-stagger-3 { opacity: 0; animation: pl06-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.6s forwards; }
    .pl06-stagger-4 { opacity: 0; animation: pl06-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
    .pl06-stagger-5 { opacity: 0; animation: pl06-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.2s forwards; }
    .pl06-stagger-6 { opacity: 0; animation: pl06-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.8s forwards; }
</style>
