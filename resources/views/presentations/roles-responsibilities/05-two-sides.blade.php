<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute" style="top: 35%; left: 50%; width: 1100px; height: 1100px; transform: translate(-50%, -50%); background: radial-gradient(circle, rgba(17,193,143,0.035) 0%, transparent 55%);"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 40%, #080c14 85%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col justify-center" style="padding: 72px 80px;">

        {{-- Title --}}
        <h2 class="rr04-title rr04-s1">Every Team Has <span style="color: #11C18F;">Two Sides</span></h2>

        {{-- Split panels --}}
        <div class="rr04-split">
            <div class="rr04-panel rr04-s2">
                <div class="rr04-panel-label">Side One</div>
                <h3 class="rr04-panel-title">Flexibility</h3>
                <p class="rr04-panel-text">
                    Everyone jumps in and does what needs to be done. No task is beneath anyone. The team moves as one.
                </p>
            </div>

            <div class="rr04-divider rr04-s3">
                <div class="rr04-divider-line"></div>
            </div>

            <div class="rr04-panel rr04-s3">
                <div class="rr04-panel-label">Side Two</div>
                <h3 class="rr04-panel-title">Accountability</h3>
                <p class="rr04-panel-text">
                    One clear, unquestioned person owns each outcome. When something fails or succeeds &mdash; there is never a question of who was responsible.
                </p>
            </div>
        </div>

        {{-- Bottom insight --}}
        <div class="rr04-bottom rr04-s4">
            <p class="rr04-insight">
                From leadership's perspective, every action either has a
                <span style="color: #11C18F;">clear owner</span> &mdash; or it needs one.
            </p>
        </div>

        {{-- Footnote --}}
        <p class="rr04-footnote rr04-s5">
            We're seven people. Small enough that ownership feels "obvious."
            But obvious isn't defined. And yes &mdash; right now everything runs through one person.
            <span style="color: rgba(255,255,255,0.65);">That's exactly what we're fixing.</span>
        </p>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .rr04-title {
        font-family: 'Cairo', sans-serif;
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: 800;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 48px;
        letter-spacing: -0.02em;
    }

    .rr04-split {
        display: flex;
        align-items: stretch;
    }

    .rr04-panel {
        flex: 1;
        padding: 0 36px 0 0;
    }

    .rr04-panel:last-of-type {
        padding: 0 0 0 36px;
    }

    .rr04-divider {
        display: flex;
        align-items: center;
        flex-shrink: 0;
    }

    .rr04-divider-line {
        width: 1px;
        height: 100%;
        min-height: 120px;
        background: linear-gradient(to bottom, transparent, rgba(17, 193, 143, 0.25), transparent);
    }

    .rr04-panel-label {
        font-family: 'Sora', sans-serif;
        font-size: 0.65rem;
        font-weight: 600;
        letter-spacing: 0.25em;
        text-transform: uppercase;
        color: rgba(17, 193, 143, 0.4);
        margin-bottom: 14px;
    }

    .rr04-panel-title {
        font-family: 'Cairo', sans-serif;
        font-size: 1.9rem;
        font-weight: 700;
        color: rgba(255, 255, 255, 0.9);
        margin: 0 0 14px 0;
        letter-spacing: -0.01em;
    }

    .rr04-panel-text {
        font-family: 'Sora', sans-serif;
        font-size: 0.95rem;
        color: rgba(255, 255, 255, 0.45);
        line-height: 1.7;
        margin: 0;
    }

    .rr04-bottom {
        margin-top: 48px;
        padding-top: 32px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    .rr04-insight {
        font-family: 'Sora', sans-serif;
        font-size: 1.1rem;
        color: rgba(255, 255, 255, 0.6);
        line-height: 1.7;
        margin: 0;
        max-width: 700px;
    }

    .rr04-footnote {
        font-family: 'Sora', sans-serif;
        font-size: 0.82rem;
        color: rgba(255, 255, 255, 0.25);
        line-height: 1.7;
        margin-top: 20px;
        max-width: 700px;
    }

    .rr04-s1 { opacity: 0; animation: rr04-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.15s forwards; }
    .rr04-s2 { opacity: 0; animation: rr04-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.35s forwards; }
    .rr04-s3 { opacity: 0; animation: rr04-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.6s forwards; }
    .rr04-s4 { opacity: 0; animation: rr04-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
    .rr04-s5 { opacity: 0; animation: rr04-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.1s forwards; }

    @keyframes rr04-reveal {
        from { opacity: 0; transform: translateY(24px); filter: blur(3px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
</style>
