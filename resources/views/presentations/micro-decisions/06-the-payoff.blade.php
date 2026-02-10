<div class="relative min-h-screen overflow-hidden bg-[#080c14]">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 50% 60%, rgba(17,193,143,0.05) 0%, transparent 55%);"></div>
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 80%);"></div>
    </div>

    {{-- Content --}}
    <div class="md06-page relative z-10">

        {{-- Top bar --}}
        <div class="md06-s1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Micro Decisions</span>
        </div>

        {{-- Headline --}}
        <div class="md06-s2">
            <div class="inline-flex items-center gap-3 mb-4">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 12px rgba(17,193,143,0.5);"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(17,193,143,0.7); font-weight: 600; font-family: 'Sora', sans-serif;">The Payoff</span>
            </div>
            <h1 class="md06-headline">Everything Finds <span style="color: #11C18F;">Its Place</span></h1>
        </div>

        {{-- Sequential room completion timeline --}}
        <div class="md06-timeline">

            {{-- Step 1: Kitchen --}}
            <div class="md06-step md06-step-1">
                <div class="md06-step-marker md06-marker-done">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#080c14" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <div class="md06-step-line md06-line-done"></div>
                <div class="md06-step-content">
                    <span class="md06-step-name md06-done-text">Kitchen</span>
                    <span class="md06-step-status" style="color: rgba(17,193,143,0.6);">Done</span>
                </div>
            </div>

            {{-- Step 2: Living Room --}}
            <div class="md06-step md06-step-2">
                <div class="md06-step-marker md06-marker-done">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#080c14" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <div class="md06-step-line md06-line-done"></div>
                <div class="md06-step-content">
                    <span class="md06-step-name md06-done-text">Living Room</span>
                    <span class="md06-step-detail">Found the pan. Washed it. Put it in the clean kitchen.</span>
                </div>
            </div>

            {{-- Step 3: Bedroom --}}
            <div class="md06-step md06-step-3">
                <div class="md06-step-marker md06-marker-done">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#080c14" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <div class="md06-step-line md06-line-done"></div>
                <div class="md06-step-content">
                    <span class="md06-step-name md06-done-text">Bedroom</span>
                    <span class="md06-step-status" style="color: rgba(17,193,143,0.6);">Done</span>
                </div>
            </div>

            {{-- Step 4: Bathroom --}}
            <div class="md06-step md06-step-4">
                <div class="md06-step-marker md06-marker-done">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#080c14" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <div class="md06-step-line md06-line-done"></div>
                <div class="md06-step-content">
                    <span class="md06-step-name md06-done-text">Bathroom</span>
                    <span class="md06-step-status" style="color: rgba(17,193,143,0.6);">Done</span>
                </div>
            </div>

            {{-- Step 5: Office --}}
            <div class="md06-step md06-step-5">
                <div class="md06-step-marker md06-marker-done">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#080c14" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <div class="md06-step-content">
                    <span class="md06-step-name md06-done-text">Office</span>
                    <span class="md06-step-status" style="color: rgba(17,193,143,0.6);">Done</span>
                </div>
            </div>

        </div>

        {{-- Bottom kicker --}}
        <div class="md06-s3">
            <div class="flex items-center justify-center gap-5">
                <div style="width: 50px; height: 1px; background: linear-gradient(to right, transparent, rgba(17,193,143,0.3));"></div>
                <p style="font-family: 'Cairo', sans-serif; font-weight: 700; font-size: 1.1rem; color: rgba(255,255,255,0.5); text-align: center;">
                    Sequence creates order. <span style="color: #11C18F; font-weight: 900;">Progress compounds.</span>
                </p>
                <div style="width: 50px; height: 1px; background: linear-gradient(to left, transparent, rgba(17,193,143,0.3));"></div>
            </div>
        </div>
    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
    .md06-page {
        display: grid;
        grid-template-rows: auto auto 1fr auto;
        min-height: 100vh;
        padding: 32px 72px 48px;
        gap: 20px;
        align-content: center;
    }

    .md06-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(2.2rem, 4.5vw, 3.5rem);
        letter-spacing: -0.03em;
        line-height: 1.05;
        color: rgba(255,255,255,0.9);
    }

    /* Timeline */
    .md06-timeline {
        display: flex;
        align-items: flex-start;
        justify-content: center;
        gap: 0;
        align-self: center;
        max-width: 1000px;
        width: 100%;
    }

    .md06-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        flex: 1;
        position: relative;
    }

    .md06-step-marker {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        z-index: 2;
        flex-shrink: 0;
    }

    .md06-marker-done {
        background: #11C18F;
        box-shadow: 0 0 20px rgba(17,193,143,0.4);
    }

    /* Connecting line */
    .md06-step-line {
        position: absolute;
        top: 18px;
        left: calc(50% + 18px);
        right: calc(-50% + 18px);
        height: 2px;
        z-index: 1;
    }

    .md06-line-done {
        background: linear-gradient(to right, #11C18F, rgba(17,193,143,0.3));
    }

    .md06-step-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 14px;
        text-align: center;
        gap: 4px;
    }

    .md06-step-name {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 0.95rem;
        letter-spacing: -0.01em;
    }

    .md06-done-text { color: rgba(255,255,255,0.7); }

    .md06-step-status {
        font-family: 'Sora', sans-serif;
        font-size: 0.75rem;
        font-weight: 500;
    }

    .md06-step-detail {
        font-family: 'Sora', sans-serif;
        font-size: 0.75rem;
        color: rgba(255,255,255,0.35);
        max-width: 150px;
        line-height: 1.5;
    }

    /* Sequential animations */
    .md06-step-1 { opacity: 0; animation: md06-step-in 0.6s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .md06-step-2 { opacity: 0; animation: md06-step-in 0.6s cubic-bezier(0.22, 1, 0.36, 1) 1.0s forwards; }
    .md06-step-3 { opacity: 0; animation: md06-step-in 0.6s cubic-bezier(0.22, 1, 0.36, 1) 1.5s forwards; }
    .md06-step-4 { opacity: 0; animation: md06-step-in 0.6s cubic-bezier(0.22, 1, 0.36, 1) 2.0s forwards; }
    .md06-step-5 { opacity: 0; animation: md06-step-in 0.6s cubic-bezier(0.22, 1, 0.36, 1) 2.5s forwards; }

    @keyframes md06-step-in {
        from { opacity: 0; transform: scale(0.8); filter: blur(4px); }
        to { opacity: 1; transform: scale(1); filter: blur(0); }
    }

    /* Stagger for other elements */
    @keyframes md06-reveal {
        from { opacity: 0; transform: translateY(25px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes md06-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .md06-s1 { opacity: 0; animation: md06-reveal-down 0.8s ease-out 0.1s forwards; }
    .md06-s2 { opacity: 0; animation: md06-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.25s forwards; }
    .md06-s3 { opacity: 0; animation: md06-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 3.2s forwards; }
</style>
