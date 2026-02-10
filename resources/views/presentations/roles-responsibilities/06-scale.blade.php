<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute" style="top: 10%; left: 45%; width: 900px; height: 900px; transform: translateX(-50%); background: radial-gradient(circle, rgba(17,193,143,0.04) 0%, transparent 55%);"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 40%, #080c14 85%);"></div>
    </div>

    {{-- Network SVG (decorative, right side) --}}
    <div class="absolute right-0 top-0 bottom-0 pointer-events-none flex items-center justify-center" style="width: 42%; opacity: 0.7;">
        <svg class="rr05-network" viewBox="0 0 400 400" width="380" height="380">
            {{-- Outer nodes --}}
            <circle cx="200" cy="55" r="5" fill="#11C18F" opacity="0.4" class="rr05-node"/>
            <circle cx="338" cy="140" r="4" fill="#11C18F" opacity="0.3" class="rr05-node"/>
            <circle cx="310" cy="295" r="5" fill="#11C18F" opacity="0.35" class="rr05-node"/>
            <circle cx="90" cy="295" r="4" fill="#11C18F" opacity="0.3" class="rr05-node"/>
            <circle cx="62" cy="140" r="5" fill="#11C18F" opacity="0.35" class="rr05-node"/>

            {{-- Center node --}}
            <circle cx="200" cy="195" r="7" fill="#11C18F" opacity="0.45" class="rr05-node rr05-center"/>

            {{-- Outer connections (pentagon) --}}
            <line x1="200" y1="55" x2="338" y2="140" stroke="#11C18F" stroke-width="1" class="rr05-line rr05-l1"/>
            <line x1="338" y1="140" x2="310" y2="295" stroke="#11C18F" stroke-width="1" class="rr05-line rr05-l2"/>
            <line x1="310" y1="295" x2="90" y2="295" stroke="#11C18F" stroke-width="1" class="rr05-line rr05-l3"/>
            <line x1="90" y1="295" x2="62" y2="140" stroke="#11C18F" stroke-width="1" class="rr05-line rr05-l4"/>
            <line x1="62" y1="140" x2="200" y2="55" stroke="#11C18F" stroke-width="1" class="rr05-line rr05-l5"/>

            {{-- Center connections (star) --}}
            <line x1="200" y1="195" x2="200" y2="55" stroke="#11C18F" stroke-width="1" class="rr05-line rr05-l6"/>
            <line x1="200" y1="195" x2="338" y2="140" stroke="#11C18F" stroke-width="1" class="rr05-line rr05-l7"/>
            <line x1="200" y1="195" x2="310" y2="295" stroke="#11C18F" stroke-width="1" class="rr05-line rr05-l8"/>
            <line x1="200" y1="195" x2="90" y2="295" stroke="#11C18F" stroke-width="1" class="rr05-line rr05-l9"/>
            <line x1="200" y1="195" x2="62" y2="140" stroke="#11C18F" stroke-width="1" class="rr05-line rr05-l10"/>
        </svg>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col justify-center" style="padding: 72px 80px; max-width: 58%;">

        {{-- Title --}}
        <h2 class="rr05-title rr05-s1">Structure Enables <span style="color: #11C18F;">Scale</span></h2>

        {{-- Points --}}
        <div class="rr05-points">
            <div class="rr05-point rr05-s2">
                <div class="rr05-marker"></div>
                <div>
                    <div class="rr05-point-title">Roles become building blocks</div>
                    <p class="rr05-point-text">Clear roles are the foundation that processes are built on. Without them, every process is improvisation.</p>
                </div>
            </div>

            <div class="rr05-point rr05-s3">
                <div class="rr05-marker"></div>
                <div>
                    <div class="rr05-point-title">Work finds its owner</div>
                    <p class="rr05-point-text">When a task, ask, or fire drill arrives &mdash; everyone knows exactly who handles it, or who is accountable for it getting handled.</p>
                </div>
            </div>

            <div class="rr05-point rr05-s4">
                <div class="rr05-marker"></div>
                <div>
                    <div class="rr05-point-title">No single quarterback</div>
                    <p class="rr05-point-text">Decisions flow to the right person, not through a bottleneck. Ownership is distributed, not centralized.</p>
                </div>
            </div>
        </div>

        {{-- Closing --}}
        <p class="rr05-closing rr05-s5">
            Roles first. <span style="color: #11C18F;">Processes next.</span>
        </p>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .rr05-title {
        font-family: 'Cairo', sans-serif;
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: 800;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 48px;
        letter-spacing: -0.02em;
    }

    .rr05-points {
        display: flex;
        flex-direction: column;
        gap: 32px;
    }

    .rr05-point {
        display: flex;
        gap: 20px;
        align-items: flex-start;
    }

    .rr05-marker {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #11C18F;
        flex-shrink: 0;
        margin-top: 7px;
        box-shadow: 0 0 12px rgba(17, 193, 143, 0.3);
    }

    .rr05-point-title {
        font-family: 'Cairo', sans-serif;
        font-size: 1.15rem;
        font-weight: 700;
        color: rgba(255, 255, 255, 0.85);
        margin-bottom: 6px;
    }

    .rr05-point-text {
        font-family: 'Sora', sans-serif;
        font-size: 0.88rem;
        color: rgba(255, 255, 255, 0.4);
        line-height: 1.6;
        margin: 0;
    }

    .rr05-closing {
        font-family: 'Cairo', sans-serif;
        font-size: 1.35rem;
        font-weight: 700;
        color: rgba(255, 255, 255, 0.6);
        margin-top: 52px;
    }

    /* Network animation */
    .rr05-line {
        opacity: 0.1;
        stroke-dasharray: 400;
        stroke-dashoffset: 400;
        animation: rr05-draw 1.8s ease-out forwards;
    }

    .rr05-l1  { animation-delay: 0.4s; }
    .rr05-l2  { animation-delay: 0.55s; }
    .rr05-l3  { animation-delay: 0.7s; }
    .rr05-l4  { animation-delay: 0.85s; }
    .rr05-l5  { animation-delay: 1.0s; }
    .rr05-l6  { animation-delay: 1.2s; }
    .rr05-l7  { animation-delay: 1.35s; }
    .rr05-l8  { animation-delay: 1.5s; }
    .rr05-l9  { animation-delay: 1.65s; }
    .rr05-l10 { animation-delay: 1.8s; }

    .rr05-node {
        opacity: 0;
        animation: rr05-nodeIn 0.6s ease-out forwards;
    }

    .rr05-node:nth-of-type(1) { animation-delay: 0.3s; }
    .rr05-node:nth-of-type(2) { animation-delay: 0.45s; }
    .rr05-node:nth-of-type(3) { animation-delay: 0.6s; }
    .rr05-node:nth-of-type(4) { animation-delay: 0.75s; }
    .rr05-node:nth-of-type(5) { animation-delay: 0.9s; }
    .rr05-center { animation-delay: 1.1s !important; }

    .rr05-s1 { opacity: 0; animation: rr05-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.15s forwards; }
    .rr05-s2 { opacity: 0; animation: rr05-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.4s forwards; }
    .rr05-s3 { opacity: 0; animation: rr05-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.6s forwards; }
    .rr05-s4 { opacity: 0; animation: rr05-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.8s forwards; }
    .rr05-s5 { opacity: 0; animation: rr05-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.1s forwards; }

    @keyframes rr05-reveal {
        from { opacity: 0; transform: translateY(24px); filter: blur(3px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes rr05-draw {
        to { stroke-dashoffset: 0; }
    }

    @keyframes rr05-nodeIn {
        from { opacity: 0; transform: scale(0); }
        to { opacity: 1; transform: scale(1); }
    }
</style>
