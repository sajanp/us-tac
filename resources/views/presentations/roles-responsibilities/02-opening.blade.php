<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 50% 45%, rgba(17,193,143,0.035) 0%, transparent 60%);"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 40%, #080c14 85%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col items-center justify-center" style="padding: 56px 72px;">

        {{-- Classified label --}}
        <div class="rr01-label rr01-s1">
            <span>INTERNAL MEMO &middot; DEFINITELY PREPARED IN ADVANCE</span>
            <div class="rr01-scan"></div>
        </div>

        {{-- The quote --}}
        <p class="rr01-quote rr01-s2">
            "I want you to have the <span class="rr01-green">perception</span> these slides were done prior to this morning."
        </p>

        {{-- Attribution --}}
        <p class="rr01-attr rr01-s3">&mdash; Sajan, earlier today</p>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .rr01-label {
        position: relative;
        overflow: hidden;
        font-family: 'Sora', sans-serif;
        font-size: 0.65rem;
        font-weight: 600;
        letter-spacing: 0.25em;
        color: rgba(17, 193, 143, 0.35);
        border: 1px solid rgba(17, 193, 143, 0.12);
        padding: 8px 28px;
        margin-bottom: 52px;
    }

    .rr01-scan {
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(17, 193, 143, 0.07), transparent);
        animation: rr01-scan 4s ease-in-out 2s infinite;
    }

    .rr01-quote {
        font-family: 'Cairo', sans-serif;
        font-size: clamp(1.75rem, 3vw, 2.5rem);
        font-weight: 700;
        color: rgba(255, 255, 255, 0.85);
        text-align: center;
        max-width: 800px;
        line-height: 1.45;
    }

    .rr01-green {
        color: #11C18F;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.02em;
    }

    .rr01-attr {
        font-family: 'Sora', sans-serif;
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.2);
        margin-top: 44px;
        font-style: italic;
    }

    .rr01-s1 { opacity: 0; animation: rr01-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .rr01-s2 { opacity: 0; animation: rr01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.7s forwards; }
    .rr01-s3 { opacity: 0; animation: rr01-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.3s forwards; }

    @keyframes rr01-reveal {
        from { opacity: 0; transform: translateY(20px); filter: blur(3px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes rr01-scan {
        0%, 100% { left: -100%; }
        50% { left: 100%; }
    }
</style>
