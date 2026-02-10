<div class="relative min-h-screen overflow-hidden bg-[#080c14]">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 50% 30%, rgba(232,110,75,0.05) 0%, transparent 50%);"></div>
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 80%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 flex flex-col min-h-screen" style="padding: 32px 72px 48px;">

        {{-- Top bar --}}
        <div class="md02-s1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Micro Decisions</span>
        </div>

        {{-- Main content --}}
        <div class="flex-1 flex flex-col items-center justify-center">

            {{-- Headline --}}
            <div class="md02-s2 mb-16">
                <h1 class="md02-headline">The <span class="md02-coral">Trap</span></h1>
            </div>

            {{-- Question cloud: progressively chaotic --}}
            <div class="relative w-full" style="max-width: 1000px; height: 300px;">

                {{-- Row 1: neat, light --}}
                <div class="md02-q md02-q1 absolute" style="top: 0; left: 50%; transform: translateX(-50%);">
                    "But what about the edge cases?"
                </div>

                {{-- Row 2: slightly offset --}}
                <div class="md02-q md02-q2 absolute" style="top: 52px; left: 50%; transform: translateX(-55%) rotate(-0.8deg);">
                    "Have we considered every scenario?"
                </div>

                {{-- Row 3: more offset, darker --}}
                <div class="md02-q md02-q3 absolute" style="top: 104px; left: 50%; transform: translateX(-42%) rotate(1.2deg);">
                    "What if this breaks something else?"
                </div>

                {{-- Row 4: overlapping, cramped --}}
                <div class="md02-q md02-q4 absolute" style="top: 148px; left: 50%; transform: translateX(-58%) rotate(-1.8deg);">
                    "Shouldn't we wait until we know more?"
                </div>

                {{-- Row 5: crowding in --}}
                <div class="md02-q md02-q5 absolute" style="top: 196px; left: 50%; transform: translateX(-38%) rotate(2.2deg);">
                    "What about the other teams?"
                </div>

                {{-- Row 6: most chaotic --}}
                <div class="md02-q md02-q6 absolute" style="top: 236px; left: 50%; transform: translateX(-52%) rotate(-2.5deg);">
                    "But what happens three steps from now?"
                </div>
            </div>

            {{-- Clear statement cuts through --}}
            <div class="md02-s3 mt-4 mb-4">
                <div class="flex items-center gap-6">
                    <div class="h-[1px] w-20" style="background: linear-gradient(to right, transparent, rgba(232,110,75,0.3));"></div>
                    <span style="font-family: 'Sora', sans-serif; font-size: 12px; letter-spacing: 0.2em; text-transform: uppercase; color: rgba(255,255,255,0.3);">Sound familiar?</span>
                    <div class="h-[1px] w-20" style="background: linear-gradient(to left, transparent, rgba(232,110,75,0.3));"></div>
                </div>
            </div>

            <div class="md02-s4">
                <p class="md02-kicker">
                    This isn't diligence. <span class="md02-coral" style="font-weight: 900;">It's a trap.</span>
                </p>
            </div>
        </div>
    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
    .md02-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(3rem, 7vw, 5.5rem);
        letter-spacing: -0.03em;
        line-height: 1;
        color: rgba(255,255,255,0.9);
        text-align: center;
    }

    .md02-coral { color: #E86E4B; }

    .md02-kicker {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: clamp(1.3rem, 2.5vw, 1.8rem);
        color: rgba(255,255,255,0.6);
        text-align: center;
        letter-spacing: -0.02em;
    }

    /* Questions: progressively more chaotic */
    .md02-q {
        font-family: 'Sora', sans-serif;
        font-style: italic;
        white-space: nowrap;
        padding: 8px 20px;
        border-radius: 6px;
        opacity: 0;
    }

    .md02-q1 {
        font-size: 1.05rem;
        color: rgba(232,110,75,0.3);
        animation: md02-q-in 0.5s ease-out 0.6s forwards;
    }
    .md02-q2 {
        font-size: 1.1rem;
        color: rgba(232,110,75,0.35);
        animation: md02-q-in 0.5s ease-out 0.9s forwards;
    }
    .md02-q3 {
        font-size: 1.15rem;
        color: rgba(232,110,75,0.42);
        border: 1px solid rgba(232,110,75,0.06);
        animation: md02-q-in 0.5s ease-out 1.2s forwards;
    }
    .md02-q4 {
        font-size: 1.2rem;
        color: rgba(232,110,75,0.5);
        border: 1px solid rgba(232,110,75,0.08);
        background: rgba(232,110,75,0.02);
        animation: md02-q-in 0.5s ease-out 1.5s forwards;
    }
    .md02-q5 {
        font-size: 1.25rem;
        color: rgba(232,110,75,0.58);
        border: 1px solid rgba(232,110,75,0.1);
        background: rgba(232,110,75,0.03);
        animation: md02-q-in 0.5s ease-out 1.8s forwards;
    }
    .md02-q6 {
        font-size: 1.35rem;
        color: rgba(232,110,75,0.7);
        border: 1px solid rgba(232,110,75,0.14);
        background: rgba(232,110,75,0.04);
        font-weight: 500;
        animation: md02-q-in 0.5s ease-out 2.1s forwards;
    }

    @keyframes md02-q-in {
        from { opacity: 0; filter: blur(6px); }
        to { opacity: 1; filter: blur(0); }
    }

    /* Stagger */
    @keyframes md02-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes md02-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .md02-s1 { opacity: 0; animation: md02-reveal-down 0.8s ease-out 0.1s forwards; }
    .md02-s2 { opacity: 0; animation: md02-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .md02-s3 { opacity: 0; animation: md02-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 2.6s forwards; }
    .md02-s4 { opacity: 0; animation: md02-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 3.0s forwards; }
</style>
