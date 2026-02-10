<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute" style="top: 40%; right: 15%; width: 800px; height: 800px; background: radial-gradient(circle, rgba(17,193,143,0.04) 0%, transparent 55%);"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 40%, #080c14 85%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col justify-center" style="padding: 72px 80px;">

        {{-- Title with large ≠ --}}
        <h2 class="rr06-title rr06-s1">
            Titles <span class="rr06-neq">&ne;</span> Roles
        </h2>

        {{-- Comparison --}}
        <div class="rr06-compare">
            {{-- Titles column --}}
            <div class="rr06-col rr06-s2">
                <div class="rr06-col-header">
                    <div class="rr06-col-label">Titles</div>
                    <div class="rr06-col-sub">How the world sees you</div>
                </div>
                <div class="rr06-col-items">
                    <div class="rr06-item">
                        <div class="rr06-dot" style="background: rgba(255,255,255,0.15);"></div>
                        <span>Your career trajectory</span>
                    </div>
                    <div class="rr06-item">
                        <div class="rr06-dot" style="background: rgba(255,255,255,0.15);"></div>
                        <span>How you're perceived outside this team</span>
                    </div>
                    <div class="rr06-item">
                        <div class="rr06-dot" style="background: rgba(255,255,255,0.15);"></div>
                        <span>They matter &mdash; we all have many years ahead</span>
                    </div>
                </div>
            </div>

            {{-- Divider --}}
            <div class="rr06-divider rr06-s3">
                <div class="rr06-divider-line"></div>
            </div>

            {{-- Roles column --}}
            <div class="rr06-col rr06-s3">
                <div class="rr06-col-header">
                    <div class="rr06-col-label rr06-col-label-green">Functional Roles</div>
                    <div class="rr06-col-sub">What the company needs done</div>
                </div>
                <div class="rr06-col-items">
                    <div class="rr06-item">
                        <div class="rr06-dot" style="background: #11C18F;"></div>
                        <span>Tactical and specific</span>
                    </div>
                    <div class="rr06-item">
                        <div class="rr06-dot" style="background: #11C18F;"></div>
                        <span>As granular as refilling the printer</span>
                    </div>
                    <div class="rr06-item">
                        <div class="rr06-dot" style="background: #11C18F;"></div>
                        <span>Define who is accountable for what</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Closing --}}
        <div class="rr06-bottom rr06-s4">
            <p class="rr06-closing">
                Titles serve your career. Roles serve the team.<br>
                <span style="color: #11C18F;">Today, we're defining the work.</span>
            </p>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .rr06-title {
        font-family: 'Cairo', sans-serif;
        font-size: clamp(2.2rem, 5vw, 3.5rem);
        font-weight: 800;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 52px;
        letter-spacing: -0.02em;
    }

    .rr06-neq {
        color: #11C18F;
        font-size: 1.15em;
        margin: 0 4px;
    }

    .rr06-compare {
        display: flex;
        align-items: stretch;
        max-width: 900px;
    }

    .rr06-col {
        flex: 1;
    }

    .rr06-col:first-of-type {
        padding-right: 40px;
    }

    .rr06-col:last-of-type {
        padding-left: 40px;
    }

    .rr06-col-header {
        margin-bottom: 28px;
    }

    .rr06-col-label {
        font-family: 'Cairo', sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        color: rgba(255, 255, 255, 0.55);
        margin-bottom: 6px;
    }

    .rr06-col-label-green {
        color: #11C18F;
    }

    .rr06-col-sub {
        font-family: 'Sora', sans-serif;
        font-size: 0.8rem;
        color: rgba(255, 255, 255, 0.3);
    }

    .rr06-col-items {
        display: flex;
        flex-direction: column;
        gap: 18px;
    }

    .rr06-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        font-family: 'Sora', sans-serif;
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.5);
        line-height: 1.55;
    }

    .rr06-dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        flex-shrink: 0;
        margin-top: 6px;
    }

    .rr06-divider {
        display: flex;
        align-items: center;
        flex-shrink: 0;
    }

    .rr06-divider-line {
        width: 1px;
        height: 100%;
        min-height: 160px;
        background: linear-gradient(to bottom, transparent, rgba(17, 193, 143, 0.2), transparent);
    }

    .rr06-bottom {
        margin-top: 52px;
        padding-top: 32px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    .rr06-closing {
        font-family: 'Sora', sans-serif;
        font-size: 1.1rem;
        color: rgba(255, 255, 255, 0.55);
        line-height: 1.7;
        margin: 0;
    }

    .rr06-s1 { opacity: 0; animation: rr06-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.15s forwards; }
    .rr06-s2 { opacity: 0; animation: rr06-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.4s forwards; }
    .rr06-s3 { opacity: 0; animation: rr06-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.65s forwards; }
    .rr06-s4 { opacity: 0; animation: rr06-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.95s forwards; }

    @keyframes rr06-reveal {
        from { opacity: 0; transform: translateY(24px); filter: blur(3px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
</style>
