<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute" style="top: 10%; right: 0; width: 900px; height: 900px; background: radial-gradient(circle, rgba(17,193,143,0.05) 0%, transparent 55%);"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 40%, #080c14 85%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col justify-center" style="padding: 72px 80px;">

        {{-- Title --}}
        <div class="rr02-s1">
            <h1 class="rr02-title">Great People.</h1>
            <h1 class="rr02-title rr02-title-green">Broken System.</h1>
        </div>

        {{-- Divider --}}
        <div class="rr02-s2" style="margin: 36px 0;">
            <div style="width: 80px; height: 3px; background: linear-gradient(to right, #11C18F, rgba(17,193,143,0.1));"></div>
        </div>

        {{-- Lead quote --}}
        <p class="rr02-lead rr02-s3">
            Checks and balances require each other.<br>
            <span style="color: rgba(255,255,255,0.3);">Right now, we only have one.</span>
        </p>

        {{-- Supporting cards --}}
        <div class="rr02-cards">
            <div class="rr02-card rr02-s4">
                <div class="rr02-stat">40+</div>
                <p class="rr02-card-text">
                    hours of meaningful work every week &mdash; from everyone in this room.
                </p>
            </div>
            <div class="rr02-card rr02-s5">
                <p class="rr02-card-text" style="padding-top: 4px;">
                    When expectations live in one person's head,
                    <span style="color: rgba(255,255,255,0.85);">alignment is luck &mdash; not a system.</span>
                </p>
            </div>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .rr02-title {
        font-family: 'Cairo', sans-serif;
        font-size: clamp(3rem, 7vw, 5.5rem);
        font-weight: 800;
        line-height: 1.05;
        letter-spacing: -0.03em;
        color: rgba(255, 255, 255, 0.92);
        margin: 0;
    }

    .rr02-title-green {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 50%, #AFEFCD 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: rr02-shimmer 6s ease-in-out infinite;
    }

    .rr02-lead {
        font-family: 'Sora', sans-serif;
        font-size: clamp(1.1rem, 1.8vw, 1.35rem);
        font-weight: 400;
        color: rgba(255, 255, 255, 0.65);
        line-height: 1.7;
        max-width: 600px;
    }

    .rr02-cards {
        display: flex;
        gap: 20px;
        margin-top: 44px;
        max-width: 680px;
    }

    .rr02-card {
        flex: 1;
        background: rgba(17, 193, 143, 0.025);
        border: 1px solid rgba(17, 193, 143, 0.08);
        border-radius: 10px;
        padding: 28px;
        transition: border-color 0.5s ease, background 0.5s ease;
    }

    .rr02-card:hover {
        border-color: rgba(17, 193, 143, 0.18);
        background: rgba(17, 193, 143, 0.04);
    }

    .rr02-stat {
        font-family: 'Cairo', sans-serif;
        font-size: 2.6rem;
        font-weight: 800;
        color: #11C18F;
        line-height: 1;
        margin-bottom: 12px;
    }

    .rr02-card-text {
        font-family: 'Sora', sans-serif;
        font-size: 0.88rem;
        color: rgba(255, 255, 255, 0.45);
        line-height: 1.6;
        margin: 0;
    }

    .rr02-s1 { opacity: 0; animation: rr02-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.15s forwards; }
    .rr02-s2 { opacity: 0; animation: rr02-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.45s forwards; }
    .rr02-s3 { opacity: 0; animation: rr02-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.6s forwards; }
    .rr02-s4 { opacity: 0; animation: rr02-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.85s forwards; }
    .rr02-s5 { opacity: 0; animation: rr02-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.05s forwards; }

    @keyframes rr02-reveal {
        from { opacity: 0; transform: translateY(24px); filter: blur(3px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes rr02-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }
</style>
