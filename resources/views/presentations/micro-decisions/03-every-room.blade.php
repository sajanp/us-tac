<div class="relative min-h-screen overflow-hidden bg-[#080c14]">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 50% 50%, rgba(232,110,75,0.04) 0%, transparent 60%);"></div>
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 80%);"></div>
    </div>

    {{-- Content --}}
    <div class="md03-page relative z-10">

        {{-- Top bar --}}
        <div class="md03-s1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Micro Decisions</span>
        </div>

        {{-- Headline --}}
        <div class="md03-s2">
            <div class="inline-flex items-center gap-3 mb-4">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #E86E4B; box-shadow: 0 0 12px rgba(232,110,75,0.5);"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(232,110,75,0.7); font-weight: 600; font-family: 'Sora', sans-serif;">The Analogy</span>
            </div>
            <h1 class="md03-headline">Every Room Is <span class="md03-coral">a Mess</span></h1>
            <p style="font-family: 'Sora', sans-serif; font-size: 1rem; color: rgba(255,255,255,0.35); margin-top: 8px;">You need to clean the entire house. Where do you even start?</p>
        </div>

        {{-- Room grid: 3 top, 2 bottom centered --}}
        <div class="md03-rooms">

            {{-- Kitchen --}}
            <div class="md03-s3">
                <div class="md03-room md03-room-messy">
                    <div class="md03-room-noise"></div>
                    <div class="md03-room-inner">
                        <svg class="md03-room-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                        </svg>
                        <span class="md03-room-name">Kitchen</span>
                    </div>
                </div>
            </div>

            {{-- Living Room --}}
            <div class="md03-s4">
                <div class="md03-room md03-room-messy">
                    <div class="md03-room-noise"></div>
                    <div class="md03-room-inner">
                        <svg class="md03-room-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5M10.5 21H3m0 0h1.5M3 21V3.545M4.5 21V3.545m0 0h15M4.5 3.545L12 1.5l7.5 2.045" />
                        </svg>
                        <span class="md03-room-name">Living Room</span>
                    </div>
                </div>
            </div>

            {{-- Bedroom --}}
            <div class="md03-s5">
                <div class="md03-room md03-room-messy">
                    <div class="md03-room-noise"></div>
                    <div class="md03-room-inner">
                        <svg class="md03-room-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                        </svg>
                        <span class="md03-room-name">Bedroom</span>
                    </div>
                </div>
            </div>

            {{-- Bathroom --}}
            <div class="md03-s6">
                <div class="md03-room md03-room-messy">
                    <div class="md03-room-noise"></div>
                    <div class="md03-room-inner">
                        <svg class="md03-room-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                        </svg>
                        <span class="md03-room-name">Bathroom</span>
                    </div>
                </div>
            </div>

            {{-- Office --}}
            <div class="md03-s7">
                <div class="md03-room md03-room-messy">
                    <div class="md03-room-noise"></div>
                    <div class="md03-room-inner">
                        <svg class="md03-room-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25A2.25 2.25 0 015.25 3h13.5A2.25 2.25 0 0121 5.25z" />
                        </svg>
                        <span class="md03-room-name">Office</span>
                    </div>
                </div>
            </div>

        </div>

        {{-- Bottom kicker --}}
        <div class="md03-s8">
            <div class="flex items-center justify-center gap-5">
                <div style="width: 50px; height: 1px; background: linear-gradient(to right, transparent, rgba(232,110,75,0.3));"></div>
                <p style="font-family: 'Cairo', sans-serif; font-weight: 700; font-size: 1.05rem; color: rgba(255,255,255,0.45); text-align: center;">
                    Every corner has something wrong. The <span class="md03-coral" style="font-weight: 900;">overwhelm</span> is real.
                </p>
                <div style="width: 50px; height: 1px; background: linear-gradient(to left, transparent, rgba(232,110,75,0.3));"></div>
            </div>
        </div>
    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
    .md03-page {
        display: grid;
        grid-template-rows: auto auto 1fr auto;
        min-height: 100vh;
        padding: 32px 72px 48px;
        gap: 16px;
        align-content: center;
    }

    .md03-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(2.2rem, 4.5vw, 3.5rem);
        letter-spacing: -0.03em;
        line-height: 1.05;
        color: rgba(255,255,255,0.9);
    }

    .md03-coral { color: #E86E4B; }

    /* Room grid: 3 top, 2 centered below */
    .md03-rooms {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 14px;
        align-self: center;
        max-width: 900px;
    }

    .md03-rooms > :nth-child(1) { grid-column: 1 / 3; }
    .md03-rooms > :nth-child(2) { grid-column: 3 / 5; }
    .md03-rooms > :nth-child(3) { grid-column: 5 / 7; }
    .md03-rooms > :nth-child(4) { grid-column: 2 / 4; }
    .md03-rooms > :nth-child(5) { grid-column: 4 / 6; }

    /* Room card */
    .md03-room {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        height: 140px;
        transition: all 0.5s ease;
    }

    .md03-room-messy {
        background: rgba(232,110,75,0.03);
        border: 1px solid rgba(232,110,75,0.15);
        animation: md03-messy-pulse 3s ease-in-out infinite;
    }

    @keyframes md03-messy-pulse {
        0%, 100% { border-color: rgba(232,110,75,0.15); box-shadow: none; }
        50% { border-color: rgba(232,110,75,0.25); box-shadow: 0 0 30px -10px rgba(232,110,75,0.15); }
    }

    /* Noise inside messy rooms */
    .md03-room-noise {
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(232,110,75,0.25) 1px, transparent 1px);
        background-size: 12px 12px;
        background-position: 3px 3px;
        opacity: 0.15;
    }

    .md03-room-inner {
        position: relative;
        z-index: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
        gap: 10px;
    }

    .md03-room-icon {
        width: 36px;
        height: 36px;
        color: rgba(232,110,75,0.5);
    }

    .md03-room-name {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 0.95rem;
        color: rgba(255,255,255,0.5);
        letter-spacing: -0.01em;
    }

    /* Stagger */
    @keyframes md03-reveal {
        from { opacity: 0; transform: translateY(25px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes md03-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .md03-s1 { opacity: 0; animation: md03-reveal-down 0.8s ease-out 0.1s forwards; }
    .md03-s2 { opacity: 0; animation: md03-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.25s forwards; }
    .md03-s3 { opacity: 0; animation: md03-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .md03-s4 { opacity: 0; animation: md03-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.65s forwards; }
    .md03-s5 { opacity: 0; animation: md03-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.8s forwards; }
    .md03-s6 { opacity: 0; animation: md03-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.95s forwards; }
    .md03-s7 { opacity: 0; animation: md03-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.1s forwards; }
    .md03-s8 { opacity: 0; animation: md03-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.5s forwards; }
</style>
