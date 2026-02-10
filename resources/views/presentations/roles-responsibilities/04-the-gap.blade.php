<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute" style="bottom: 15%; left: 10%; width: 800px; height: 800px; background: radial-gradient(circle, rgba(17,193,143,0.04) 0%, transparent 55%);"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 40%, #080c14 85%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col justify-center" style="padding: 72px 80px;">

        {{-- Title --}}
        <h2 class="rr03-title rr03-s1">The Expectation <span style="color: #11C18F;">Gap</span></h2>

        {{-- Cascade flow --}}
        <div class="rr03-flow">
            <div class="rr03-node rr03-s2">
                <div class="rr03-num">01</div>
                <div class="rr03-node-title">No clear priorities</div>
                <div class="rr03-node-text">Without defined expectations, you have no way of knowing what to focus on each day</div>
            </div>

            <div class="rr03-arrow rr03-s3">
                <svg width="48" height="24" viewBox="0 0 48 24" fill="none">
                    <path d="M0 12h38m0 0l-7-5.5m7 5.5l-7 5.5" stroke="rgba(17,193,143,0.3)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>

            <div class="rr03-node rr03-s3">
                <div class="rr03-num">02</div>
                <div class="rr03-node-title">Silent divergence</div>
                <div class="rr03-node-text">Expectations and delivery drift apart &mdash; without anyone realizing until it's too late</div>
            </div>

            <div class="rr03-arrow rr03-s4">
                <svg width="48" height="24" viewBox="0 0 48 24" fill="none">
                    <path d="M0 12h38m0 0l-7-5.5m7 5.5l-7 5.5" stroke="rgba(17,193,143,0.3)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>

            <div class="rr03-node rr03-node-final rr03-s4">
                <div class="rr03-num">03</div>
                <div class="rr03-node-title">No accountability</div>
                <div class="rr03-node-text">Can't hold anyone responsible when expectations were never defined in the first place</div>
            </div>
        </div>

        {{-- Closing insight --}}
        <p class="rr03-closing rr03-s5">
            "The only way to close this gap is to <span style="color: #11C18F;">define it away.</span>"
        </p>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .rr03-title {
        font-family: 'Cairo', sans-serif;
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: 800;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 52px;
        letter-spacing: -0.02em;
    }

    .rr03-flow {
        display: flex;
        align-items: stretch;
    }

    .rr03-node {
        flex: 1;
        background: rgba(17, 193, 143, 0.025);
        border: 1px solid rgba(17, 193, 143, 0.08);
        border-radius: 10px;
        padding: 28px 24px;
        display: flex;
        flex-direction: column;
        transition: border-color 0.5s ease, background 0.5s ease;
    }

    .rr03-node:hover {
        border-color: rgba(17, 193, 143, 0.18);
        background: rgba(17, 193, 143, 0.04);
    }

    .rr03-node-final {
        background: rgba(17, 193, 143, 0.05);
        border-color: rgba(17, 193, 143, 0.18);
    }

    .rr03-node-final:hover {
        border-color: rgba(17, 193, 143, 0.3);
        background: rgba(17, 193, 143, 0.07);
    }

    .rr03-arrow {
        display: flex;
        align-items: center;
        padding: 0 6px;
        flex-shrink: 0;
    }

    .rr03-num {
        font-family: 'Cairo', sans-serif;
        font-size: 0.8rem;
        font-weight: 700;
        color: rgba(17, 193, 143, 0.35);
        margin-bottom: 14px;
        letter-spacing: 0.05em;
    }

    .rr03-node-title {
        font-family: 'Cairo', sans-serif;
        font-size: 1.2rem;
        font-weight: 700;
        color: rgba(255, 255, 255, 0.85);
        margin-bottom: 10px;
    }

    .rr03-node-text {
        font-family: 'Sora', sans-serif;
        font-size: 0.85rem;
        color: rgba(255, 255, 255, 0.4);
        line-height: 1.6;
    }

    .rr03-closing {
        font-family: 'Sora', sans-serif;
        font-size: 1.15rem;
        color: rgba(255, 255, 255, 0.5);
        margin-top: 52px;
        font-style: italic;
    }

    .rr03-s1 { opacity: 0; animation: rr03-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.15s forwards; }
    .rr03-s2 { opacity: 0; animation: rr03-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.35s forwards; }
    .rr03-s3 { opacity: 0; animation: rr03-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.6s forwards; }
    .rr03-s4 { opacity: 0; animation: rr03-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.85s forwards; }
    .rr03-s5 { opacity: 0; animation: rr03-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.15s forwards; }

    @keyframes rr03-reveal {
        from { opacity: 0; transform: translateY(24px); filter: blur(3px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
</style>
