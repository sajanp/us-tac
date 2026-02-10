<div class="relative min-h-screen overflow-hidden bg-[#080c14]">

    {{-- Background: green aurora for focus --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 30% 55%, rgba(17,193,143,0.06) 0%, transparent 50%);"></div>
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 80%);"></div>
    </div>

    {{-- Content --}}
    <div class="md04-page relative z-10">

        {{-- Top bar --}}
        <div class="md04-s1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Micro Decisions</span>
        </div>

        {{-- Headline --}}
        <div class="md04-s2">
            <div class="inline-flex items-center gap-3 mb-4">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 12px rgba(17,193,143,0.5);"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(17,193,143,0.7); font-weight: 600; font-family: 'Sora', sans-serif;">Focus</span>
            </div>
            <h1 class="md04-headline">Start with <span style="color: #11C18F;">the Kitchen</span></h1>
            <p style="font-family: 'Sora', sans-serif; font-size: 1rem; color: rgba(255,255,255,0.35); margin-top: 8px;">Pick one room. Your <span style="color: rgba(255,255,255,0.6); font-weight: 600;">only</span> job is to clean it. Nothing else exists.</p>
        </div>

        {{-- Room grid: Kitchen active, everything else dim --}}
        <div class="md04-rooms">

            {{-- Kitchen: ACTIVE --}}
            <div class="md04-s3">
                <div class="md04-room md04-room-active">
                    <div class="md04-active-glow"></div>
                    <div class="md04-room-inner">
                        <svg class="md04-icon-active" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                        </svg>
                        <span class="md04-name-active">Kitchen</span>
                        <span class="md04-focus-label">Focus here</span>
                    </div>
                </div>
            </div>

            {{-- Living Room: DIM --}}
            <div class="md04-s4">
                <div class="md04-room md04-room-dim">
                    <div class="md04-room-inner">
                        <svg class="md04-icon-dim" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5M10.5 21H3m0 0h1.5M3 21V3.545M4.5 21V3.545m0 0h15M4.5 3.545L12 1.5l7.5 2.045" />
                        </svg>
                        <span class="md04-name-dim">Living Room</span>
                    </div>
                </div>
            </div>

            {{-- Bedroom: DIM --}}
            <div class="md04-s5">
                <div class="md04-room md04-room-dim">
                    <div class="md04-room-inner">
                        <svg class="md04-icon-dim" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                        </svg>
                        <span class="md04-name-dim">Bedroom</span>
                    </div>
                </div>
            </div>

            {{-- Bathroom: DIM --}}
            <div class="md04-s6">
                <div class="md04-room md04-room-dim">
                    <div class="md04-room-inner">
                        <svg class="md04-icon-dim" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                        </svg>
                        <span class="md04-name-dim">Bathroom</span>
                    </div>
                </div>
            </div>

            {{-- Office: DIM --}}
            <div class="md04-s7">
                <div class="md04-room md04-room-dim">
                    <div class="md04-room-inner">
                        <svg class="md04-icon-dim" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25A2.25 2.25 0 015.25 3h13.5A2.25 2.25 0 0121 5.25z" />
                        </svg>
                        <span class="md04-name-dim">Office</span>
                    </div>
                </div>
            </div>

        </div>

        {{-- Bottom kicker --}}
        <div class="md04-s8">
            <div class="flex items-center justify-center gap-5">
                <div style="width: 50px; height: 1px; background: linear-gradient(to right, transparent, rgba(17,193,143,0.3));"></div>
                <p style="font-family: 'Cairo', sans-serif; font-weight: 700; font-size: 1.05rem; color: rgba(255,255,255,0.45); text-align: center;">
                    The bedroom doesn't exist. The office doesn't exist. <span style="color: #11C18F; font-weight: 900;">Only the kitchen.</span>
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
    .md04-page {
        display: grid;
        grid-template-rows: auto auto 1fr auto;
        min-height: 100vh;
        padding: 32px 72px 48px;
        gap: 16px;
        align-content: center;
    }

    .md04-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(2.2rem, 4.5vw, 3.5rem);
        letter-spacing: -0.03em;
        line-height: 1.05;
        color: rgba(255,255,255,0.9);
    }

    /* Room grid */
    .md04-rooms {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 14px;
        align-self: center;
        max-width: 900px;
    }

    .md04-rooms > :nth-child(1) { grid-column: 1 / 3; }
    .md04-rooms > :nth-child(2) { grid-column: 3 / 5; }
    .md04-rooms > :nth-child(3) { grid-column: 5 / 7; }
    .md04-rooms > :nth-child(4) { grid-column: 2 / 4; }
    .md04-rooms > :nth-child(5) { grid-column: 4 / 6; }

    .md04-room {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        height: 140px;
    }

    /* Active room (Kitchen) */
    .md04-room-active {
        background: rgba(17,193,143,0.06);
        border: 2px solid rgba(17,193,143,0.4);
        box-shadow: 0 0 40px -10px rgba(17,193,143,0.25), inset 0 0 30px rgba(17,193,143,0.03);
        animation: md04-active-glow 3s ease-in-out infinite;
    }

    @keyframes md04-active-glow {
        0%, 100% { box-shadow: 0 0 40px -10px rgba(17,193,143,0.25), inset 0 0 30px rgba(17,193,143,0.03); }
        50% { box-shadow: 0 0 60px -10px rgba(17,193,143,0.35), inset 0 0 40px rgba(17,193,143,0.05); }
    }

    .md04-active-glow {
        position: absolute;
        top: -30px;
        left: -30px;
        width: 160px;
        height: 160px;
        border-radius: 50%;
        background: rgba(17,193,143,0.1);
        filter: blur(40px);
    }

    .md04-icon-active {
        width: 36px;
        height: 36px;
        color: #11C18F;
    }

    .md04-name-active {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 1.05rem;
        color: #11C18F;
        letter-spacing: -0.01em;
    }

    .md04-focus-label {
        font-family: 'Sora', sans-serif;
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        color: rgba(17,193,143,0.5);
        font-weight: 600;
        margin-top: -4px;
    }

    /* Dim rooms */
    .md04-room-dim {
        background: rgba(255,255,255,0.01);
        border: 1px solid rgba(255,255,255,0.04);
        opacity: 0.3;
    }

    .md04-icon-dim {
        width: 36px;
        height: 36px;
        color: rgba(255,255,255,0.2);
    }

    .md04-name-dim {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 0.95rem;
        color: rgba(255,255,255,0.2);
    }

    .md04-room-inner {
        position: relative;
        z-index: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
        gap: 8px;
    }

    /* Stagger */
    @keyframes md04-reveal {
        from { opacity: 0; transform: translateY(25px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes md04-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .md04-s1 { opacity: 0; animation: md04-reveal-down 0.8s ease-out 0.1s forwards; }
    .md04-s2 { opacity: 0; animation: md04-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.25s forwards; }
    .md04-s3 { opacity: 0; animation: md04-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .md04-s4 { opacity: 0; animation: md04-reveal 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.7s forwards; }
    .md04-s5 { opacity: 0; animation: md04-reveal 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.8s forwards; }
    .md04-s6 { opacity: 0; animation: md04-reveal 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
    .md04-s7 { opacity: 0; animation: md04-reveal 0.7s cubic-bezier(0.22, 1, 0.36, 1) 1.0s forwards; }
    .md04-s8 { opacity: 0; animation: md04-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.4s forwards; }
</style>
